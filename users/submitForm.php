<?php

if(isset($_POST['code_cours']) && isset($_POST['titre']) && isset($_POST['mois']) && isset($_POST['annee']) && isset($_POST['partie1'])
&& isset($_POST['partie2']) && isset($_POST['partie3']) && isset($_POST['partie4']) && isset($_POST['partie5']) && isset($_POST['partie6'])){

    $code_cours = $_POST['code_cours'];
    $titre = $_POST['titre'];
    $mois = $_POST['mois'];
    $annee = $_POST['annee'];
    $partie1 = $_POST['partie1'];
    $partie2 = $_POST['partie2'];
    $partie3 = $_POST['partie3'];
    $partie4 = $_POST['partie4'];
    $partie5 = $_POST['partie5'];
    $partie6 = $_POST['partie6'];
    echo 'all data set...';
   
    $xmlstr="<?xml version='1.0' encoding='UTF-8'?><examen></examen>";
    
    //Creating SimpleXML Object
    $XML = new SimpleXMLElement($xmlstr);

    $XML->addAttribute('codeCours', $code_cours);

    // //titre element
    $titreElement = $XML->addChild('titre',$titre);
    // //date element
    $dateElement = $XML->addChild('date');
    $dateElement->addAttribute('mois', $mois);
    $dateElement->addAttribute('annee', $annee);

    // //questions element
    $questionsElement = $XML->addChild('questions');
        // //question element 
    // //En fonction du nombre de question dans questions
    $questionElement = $questionsElement->addChild('question');
    
        // //partie elemnt
    // //En fonction du nombre de partie de la question
    for($i = 0; $i < count($partie1); $i++) {
        $partieElement = $questionElement->addChild("partie", $partie1[$i]);
    }
    // //En fonction du nombre de question dans questions
    $question2Element = $questionsElement->addChild('question');
    
            // //partie elemnt
    // //En fonction du nombre de partie de la question
    for($i = 0; $i < count($partie2); $i++) {
        $partie2Element = $question2Element->addChild("partie", $partie2[$i]);
    }
    // //En fonction du nombre de question dans questions
    $question3Element = $questionsElement->addChild('question');
               // //partie elemnt
    // //En fonction du nombre de partie de la question
    for($i = 0; $i < count($partie3); $i++) {
        $partie3Element = $question3Element->addChild("partie", $partie3[$i]);
    }
       // //En fonction du nombre de question dans questions
       $question4Element = $questionsElement->addChild('question');
       // //partie elemnt
        // //En fonction du nombre de partie de la question
        for($i = 0; $i < count($partie4); $i++) {
        $partie4Element = $question4Element->addChild("partie", $partie4[$i]);
        }

           // //En fonction du nombre de question dans questions
        $question5Element = $questionsElement->addChild('question');
            // //partie elemnt
        // //En fonction du nombre de partie de la question
        for($i = 0; $i < count($partie5); $i++) {
            $partie5Element = $question5Element->addChild("partie", $partie5[$i]);
        }

           // //En fonction du nombre de question dans questions
           $question6Element = $questionsElement->addChild('question');
           // //partie elemnt
       // //En fonction du nombre de partie de la question
       for($i = 0; $i < count($partie6); $i++) {
           $partie6Element = $question5Element->addChild("partie", $partie6[$i]);
       }
    echo $XML->asXML();
    $XML->asXML('../examensXML/'. $code_cours .'-'. $titre . '-examens.xml') or die ('Erreur de création du fichier XML');
    header('location: teacher.php?message=success');
}

