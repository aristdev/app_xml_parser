<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>XML PARSER </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
<div class="container">
<div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <!-- <li class="nav-item">
            <a class="nav-link" href="">Accueil</a>
          </li> -->
          <div class="text-align-center " ><a style="color: white;" class="btn " href="#">XML PARSER APP</a></div>
        </ul>
      </div>
</div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2 class="text text-align-center">Connexion</h2>
        <!-- <div class="alert alert-danger" id="msg-flash"> -->
        <p>Renseignez vos identifiants pour vous connecter</p>
        <?php if(isset($_SESSION["error_auth"])): echo '<div class="alert alert-danger" id="msg-flash">' .$_SESSION['error_auth'] . '</div>';  endif ?>
        <form action="users/connect.php" method="post">
          <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" required placeholder="Entrez votre email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php if(isset($_SESSION['email'])): echo $_SESSION['email']; endif ?>">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="password">Mot de passe: <sup>*</sup></label>
            <input type="password" required placeholder="Entrez votre mot de passe" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="">
            <!-- <span class="invalid-feedback"><?php //echo $data['password_err']; ?></span> -->
          </div>
          <div class="row">
            <div class="col col-md-4">
              <input type="submit" value="Se connecter" class="btn btn-success btn-block">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
