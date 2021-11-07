<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>APP XML PARSER </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
<div class="container">
<div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <!-- <li class="nav-item">
            <a class="nav-link" href="">Accueil</a>
          </li> -->
          <div class="text-align-center " style="color: white;">XML PARSER APP</div>
        </ul>
        <div class="text-align-center " style="color: white;"><?php if(isset($_SESSION['email'])): echo $_SESSION['email']; endif ?> | <a class="btn btn-danger" href="logout.php">Se Déconnecter</a></div>
      </div>
</div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-lg-6 mx-auto">
      <div class="card card-body bg-light mt-9">
        <h2>Professeur | <?php if(isset($_SESSION['nom']) && isset($_SESSION['prenom'])):  echo $_SESSION['nom'] . ' ' . $_SESSION['prenom']; endif ?></h2>
       
       
      </div>
    </div>
  </div>
