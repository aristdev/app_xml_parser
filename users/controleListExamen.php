<?php
session_start();
$file = Array();
$scandir = scandir("../examensXML");
foreach($scandir as $fichier){
    if(preg_match("#\.(xml)$#",strtolower($fichier))){
    // $file =  explode('.xml', $fichier);
    // echo "$file[0]<br/>";
    array_push($file, $fichier);
    }
    
}

$_SESSION['fichiers'] = $file;

header("location: list_examen.php");