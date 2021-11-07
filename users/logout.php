<?php
 unset($_SESSION['id']);
 unset($_SESSION['email']);
 unset( $_SESSION['nom'] );
 unset($_SESSION['prenom']);
 unset($_SESSION['role']);
 session_destroy();

header('location: '. '../index.php');