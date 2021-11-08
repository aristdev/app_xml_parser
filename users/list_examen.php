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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3" >
<div class="container" >
<div  class="collapse navbar-collapse" id="navbarsExampleDefault" >
        <ul class="navbar-nav mr-auto" >
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
    <div class="col-lg-8 mx-auto">
      <div class="card card-body bg-light mt-8">
        <h2>Liste des examens </h2>
       <br/>
        <div><span style="font-size: 19px;">Renseigner les informations relatives à l'examen</span> <a href="list_examen.php" class="btn btn-warning">Liste des examens <i class="fa fa-list"></i></a></div>
        <div>
            <br/>
        <table class="table table-light">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom </th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
      <?php 
        //   $countFile = count($_GET['fichiers']);
        // print_r($_SESSION['fichiers']);
        $i = 1;
          foreach($_SESSION['fichiers'] as $file){ ?>
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td><?php echo explode('.xml', $file)[0]; ?></td>
      <td><a class="btn btn-success">Consulter <i class="fa fa-eye"></i></a></td>
    </tr>
    <?php } 
     ?>
  </tbody>
</table>
        </div>
       
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
 
  })
  
</script>