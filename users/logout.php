<?php
session_start();
 unset($_SESSION['id']);
 unset($_SESSION['email']);
 unset( $_SESSION['nom'] );
 unset($_SESSION['prenom']);
 unset($_SESSION['role']);
 if(isset($_SESSION['error_auth'])){
     unset( $_SESSION['error_auth'] );
 }
 session_destroy();

header('location: '. '../index.php');