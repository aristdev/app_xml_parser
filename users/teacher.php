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
        <h2>Professeur | <?php if(isset($_SESSION['nom']) && isset($_SESSION['prenom'])):  echo $_SESSION['nom'] . ' ' . $_SESSION['prenom']; endif ?></h2>
       <br/>
        <div><span style="font-size: 19px;">Renseigner les informations relatives à l'examen</span> <a href="controleListExamen.php" class="btn btn-warning">Liste des examens <i class="fa fa-list"></i></a></div>
        <?php if(isset($_GET['message']) && $_GET['message'] == "success"): echo '<div class="alert alert-success">création effectuée avec succès. Fichier XML généré correctement.</div>'; endif?>
        <p>(<i class="text text-danger">*</i>) Champ obligatoire</p>
       <form method="POST" action="submitForm.php">
       <div class="form-group">
            <label for="code_cours">Code cours: <sup class="text text-danger">*</sup></label>
            <input type="text" id="codeCours" required placeholder="Renseignez le code du cours" name="code_cours" class="form-control form-control-md col-md-6" value="">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="titre">Titre: <sup class="text text-danger">*</sup></label>
            <input type="titre" id="titre" required placeholder="Renseignez le titre" name="titre" class="form-control form-control-md col-md-6" value="">
            <!-- <span class="invalid-feedback"><?php //echo $data['password_err']; ?></span> -->
          </div>
          ==============================================
          <h5>Date</h5>
          <div class="form-group">
            <label for="mois">Mois: <sup class="text text-danger">*</sup></label>
          
            <select name="mois" id="mois"  class="form-control form-control-md col-md-6">
            <option value="0">Choisir le mois</option>
              <option value="Janv">Janvier</option>
              <option value="Fev">Février</option>
              <option value="Mars">Mars</option>
              <option value="Avr">Avril</option>
              <option value="Mai">Mai</option>
              <option value="Juin">Juin</option>
              <option value="Juil">Juillet</option>
              <option value="janv">Aout</option>
              <option value="Sept">Septembre</option>
              <option value="Oct">Octobre</option>
              <option value="Nov">Novembre</option>
              <option value="Dec">Décembre</option>
            </select>
          </div>
          <div class="form-group">
            <label for="annee">Année: <sup class="text text-danger">*</sup></label>
            <input type="text" id="annee" required placeholder="Renseignez l'année" name="annee" class="form-control form-control-md col-md-6" value="">
            <!-- <span class="invalid-feedback"><?php //echo $data['password_err']; ?></span> -->
          </div>
          ===================================================
          <h5>Questions</h5>
          <h6>Question 1 </h6>
          <div>
          <div class="form-group q1" id="input1">
            <label for="partie">partie: <sup class="text text-danger">*</sup></label> &nbsp;
            <textarea type="text"   required placeholder="Renseignez la partie" name="partie1[]" class="form-control form-control-md col-md-6 partieq1" value=""></textarea> &nbsp; &nbsp;
            
          </div>
          <button type="button" class="btn btn-warning" id="q1Add">Ajouter <i class="fa fa-plus"></i></button>
            <button type="button" class="btn btn-danger" id="q1Remove">Retirer <i class="fa fa-minus"></i></button>
          </div>
         
          ----------------------------------------------------
          <h6>Question 2 </h6>
          <div>
          <div class="form-group q2" id="input2">
            <label for="partie2">partie: <sup class="text text-danger">*</sup></label> &nbsp;
            <textarea type="text"  required placeholder="Renseignez la partie" name="partie2[]" class="form-control form-control-md col-md-6 partieq2" value=""></textarea> &nbsp; &nbsp;
            
          </div>
          <button type="button" class="btn btn-warning" id="q2Add">Ajouter <i class="fa fa-plus"></i></button>
            <button type="button" class="btn btn-danger" id="q2Remove">Retirer <i class="fa fa-minus"></i></button>
          </div>
          ----------------------------------------------------
          <h6>Question 3 </h6>
          <div>
          <div class="form-group q3" id="input3">
            <label for="partie3">partie: <sup class="text text-danger">*</sup></label> &nbsp;
            <textarea type="text"  required placeholder="Renseignez la partie" name="partie3[]" class="form-control form-control-md col-md-6 partieq3" value=""></textarea> &nbsp; &nbsp;
            
          </div>
          <button type="button" class="btn btn-warning" id="q3Add">Ajouter <i class="fa fa-plus"></i></button>
            <button type="button" class="btn btn-danger" id="q3Remove">Retirer <i class="fa fa-minus"></i></button>
          </div>
          ----------------------------------------------------
          <h6>Question 4 </h6>
          <div>
          <div class="form-group q4" id="input4">
            <label for="partie4">partie: <sup class="text text-danger">*</sup></label> &nbsp;
            <textarea type="text"  required placeholder="Renseignez la partie" name="partie4[]" class="form-control form-control-md col-md-6 partieq4" value=""></textarea> &nbsp; &nbsp;
            
          </div>
          <button type="button" class="btn btn-warning" id="q4Add">Ajouter <i class="fa fa-plus"></i></button>
            <button type="button" class="btn btn-danger" id="q4Remove">Retirer <i class="fa fa-minus"></i></button>
          </div>
          ----------------------------------------------------
          <h6>Question 5 </h6>
          <div>
          <div class="form-group q5" id="input5">
            <label for="partie5">partie: <sup class="text text-danger">*</sup></label> &nbsp;
            <textarea type="text"  required placeholder="Renseignez la partie" name="partie5[]" class="form-control form-control-md col-md-6 partieq5" value=""></textarea> &nbsp; &nbsp;
            
          </div>
          <button type="button" class="btn btn-warning" id="q5Add">Ajouter <i class="fa fa-plus"></i></button>
            <button type="button" class="btn btn-danger" id="q5Remove">Retirer <i class="fa fa-minus"></i></button>
          </div>
          ----------------------------------------------------
          <h6>Question 6 </h6>
          <div>
          <div class="form-group q6" id="input6">
            <label for="partie6">partie: <sup class="text text-danger"></sup></label> &nbsp;
            <textarea type="text"  placeholder="Renseignez la partie" name="partie6[]" class="form-control form-control-md col-md-6 partieq6" value=""></textarea> &nbsp; &nbsp;
            
          </div>
          
          <button type="button" class="btn btn-warning" id="q6Add">Ajouter <i class="fa fa-plus"></i></button>
            <button type="button" class="btn btn-danger" id="q6Remove">Retirer <i class="fa fa-minus"></i></button>
          </div>
          <br/>
          <div class="form-group">
            <button class="btn btn-success" type="submit" >Soumettre la création de la fiche d'examen <i class="fa fa-arrow-right"></i></button>
          </div>
       </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
  var partieq1 , partieq2, partieq3, partieq4, partieq5, partieq6 = [];
 
  //partie1
  $('#q1Add').on('click',function(){
    var numq1 = $('.q1').length;
    var NewNumq1 = numq1 + 1;
    var newElement = $('.q1:last').clone().attr('id', 'input1'  + NewNumq1);
    newElement.children(':first').attr('id', 'partie1' + NewNumq1).val(null);
    $('.q1:last').after(newElement);
    $('#q1Remove').prop('disabled', false);
    
    // $('#partieq1').append('<br/><textarea type="text" required placeholder="Renseignez la partie" name="partie1" class="form-control form-control-md col-md-6" value=""></textarea> &nbsp; &nbsp;')
  });
  $('#q1Remove').on('click', function(){
    var num = $('.q1').length;
    $('#input1' + num).remove();//retirer le dernier element
    //activer bouton "ajouter"
    $('#q1Add').prop('disabled', false);
    //si seulemnt un elemnt reste , desactiver le bouton "retirer"
    if(num - 1 == 1)
      $('#q1Remove').prop('disabled', true);
  });
  $('#q1Remove').prop('disabled', true);
  //partie2
  $('#q2Add').on('click',function(){
    var numq2 = $('.q2').length;
    var NewNumq2 = numq2 + 1;
    var newElement2 = $('.q2:last').clone().attr('id', 'input2'  + NewNumq2);
    newElement2.children(':first').attr('id', 'partie2' + NewNumq2).val(null);
    $('.q2:last').after(newElement2);
    $('#q2Remove').prop('disabled', false);
    // $('#partieq1').append('<br/><textarea type="text" required placeholder="Renseignez la partie" name="partie1" class="form-control form-control-md col-md-6" value=""></textarea> &nbsp; &nbsp;')
  })
  $('#q2Remove').on('click', function(){
    var num = $('.q2').length;
    $('#input1' + num).remove();//retirer le dernier element
    //activer bouton "ajouter"
    $('#q2Add').prop('disabled', false);
    //si seulemnt un elemnt reste , desactiver le bouton "retirer"
    if(num - 1 == 1)
      $('#q2Remove').prop('disabled', true);
  });
  $('#q2Remove').prop('disabled', true);
  //partie3
  $('#q3Add').on('click',function(){
    var numq3 = $('.q3').length;
    var NewNumq3 = numq3 + 1;
    var newElement3 = $('.q3:last').clone().attr('id', 'input3'  + NewNumq3);
    newElement3.children(':first').attr('id', 'partie3' + NewNumq3).val(null);
    $('.q3:last').after(newElement3);
    $('#q3Remove').prop('disabled', false);
    // $('#partieq1').append('<br/><textarea type="text" required placeholder="Renseignez la partie" name="partie1" class="form-control form-control-md col-md-6" value=""></textarea> &nbsp; &nbsp;')
  })
  $('#q3Remove').on('click', function(){
    var num = $('.q3').length;
    $('#input3' + num).remove();//retirer le dernier element
    //activer bouton "ajouter"
    $('#q3Add').prop('disabled', false);
    //si seulemnt un elemnt reste , desactiver le bouton "retirer"
    if(num - 1 == 1)
      $('#q3Remove').prop('disabled', true);
  });
  $('#q3Remove').prop('disabled', true);
  //partie4
  $('#q4Add').on('click',function(){
    var numq4 = $('.q4').length;
    var NewNumq4 = numq4 + 1;
    var newElement4 = $('.q4:last').clone().attr('id', 'input4'  + NewNumq4);
    newElement4.children(':first').attr('id', 'partie4' + NewNumq4).val(null);
    $('.q4:last').after(newElement4);
    $('#q4Remove').prop('disabled', false);
    // $('#partieq1').append('<br/><textarea type="text" required placeholder="Renseignez la partie" name="partie1" class="form-control form-control-md col-md-6" value=""></textarea> &nbsp; &nbsp;')
  })
  $('#q4Remove').on('click', function(){
    var num = $('.q4').length;
    $('#input4' + num).remove();//retirer le dernier element
    //activer bouton "ajouter"
    $('#q4Add').prop('disabled', false);
    //si seulemnt un elemnt reste , desactiver le bouton "retirer"
    if(num - 1 == 1)
      $('#q4Remove').prop('disabled', true);
  });
  $('#q4Remove').prop('disabled', true);
  //partie5
  var codeCours = $('#codeCours').val();

  $('#q5Add').on('click',function(){
    var numq5 = $('.q5').length;
    var NewNumq5 = numq5 + 1;
    var newElement5 = $('.q5:last').clone().attr('id', 'input5'  + NewNumq5);
    newElement5.children(':first').attr('id', 'partie5' + NewNumq5).val(null);
    $('.q5:last').after(newElement5);
    $('#q5Remove').prop('disabled', false);
    // $('#parti11eq1').append('<br/><textarea type="text" required placeholder="Renseignez la partie" name="partie1" class="form-control form-control-md col-md-6" value=""></textarea> &nbsp; &nbsp;')
  })
  $('#q5Remove').on('click', function(){
    var num5 = $('.q5').length;
    $('#input5' + num5).remove();//retirer le dernier element
    //activer bouton "ajouter"
    $('#q5Add').prop('disabled', false);
    //si seulemnt un elemnt reste , desactiver le bouton "retirer"
    if(num5 - 1 == 1)
      $('#q5Remove').prop('disabled', true);
  });
  $('#q5Remove').prop('disabled', true);

  //partie6
  $('#q6Add').on('click',function(){
    var numq6 = $('.q6').length;
    var NewNumq6 = numq6 + 1;
    var newElement6 = $('.q6:last').clone().attr('id', 'input6'  + NewNumq6);
    newElement6.children(':first').attr('id', 'partie6' + NewNumq6).val(null);
    $('.q6:last').after(newElement6);
    $('#q6Remove').prop('disabled', false);
    // $('#parti11eq1').append('<br/><textarea type="text" required placeholder="Renseignez la partie" name="partie1" class="form-control form-control-md col-md-6" value=""></textarea> &nbsp; &nbsp;')
  })
  $('#q6Remove').on('click', function(){
    var num6 = $('.q6').length;
    $('#input6' + num6).remove();//retirer le dernier element
    //activer bouton "ajouter"
    $('#q6Add').prop('disabled', false);
    //si seulemnt un elemnt reste , desactiver le bouton "retirer"
    if(num6 - 1 == 1)
      $('#q6Remove').prop('disabled', true);
  });
  $('#q6Remove').prop('disabled', true);
  //envoie des donnees par ajax
//   $('#submitForm').on('click', function(){
//     console.log(partieq1)
//     $.ajax({
//     url: "submitForm.php",
//     method: "POST",
//     data:{
      
//     },
//     dataType: "json",
//     success: function(response){

//     }
//   });

// });
  })
  
</script>