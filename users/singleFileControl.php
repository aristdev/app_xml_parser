<?php
// session_start();
if(isset($_GET['nomFichier'])){
    $examens = simplexml_load_file("../examensXML/".$_GET['nomFichier']);
    $codeCours = $examens->attributes()->codeCours;
    $titre = $examens->titre;
    $mois = $examens->date->attributes()->mois;
    $annee = $examens->date->attributes()->annee;

    $questions_array = array();

    // foreach($examens->questions as $questions){
    //    array_push($questions_array, $questions);
        // foreach($questions->question as $question){
        //     //  echo 'question:=============================<br/>';
        //     foreach($question->partie as $partie){
        //         // echo $partie;
        //         $question = $partie;
        //     }
    
        // }
    // }

    // $_SESSION['questions_array'] = $questions_array;

    // print_r($questions_array);
    // header('location: showExamenSingle.php?codeCours='. $codeCours .'&titre=' . $titre.'&mois=' . $mois.'&annee=' . $annee);

}
