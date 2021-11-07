<?php

require_once('../database.php');
if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $bdd = new Database('localhost','3306', 'xml_parser', 'root', '');
    $bdd->connect();
    
    $request = $bdd->prepare('SELECT * FROM user WHERE email = :email and password = :password');
    $request->execute([
        'email' => $email,
        // 'password'   => md5(sha1(str_rot13($password))),
        'password' => $password
    ]);
    // echo count($request->fetchAll());
    if(count($request->fetchAll()) == "1"){
        echo 'connecté<br/>';
        $user_data = $bdd->query('SELECT * FROM user WHERE email =  "'.$email.'"');
        $data = $user_data->fetch(PDO::FETCH_ASSOC);
        $user = ($data === false) ? null : $data;
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['nom'] = $user['nom'];
        $_SESSION['prenom'] = $user['prenom'];
        $_SESSION['role'] = $user['role'];

        if($user['role'] == '1'){
           header('location: '. 'teacher.php');
        }else if($user['role'] == '2'){
           header('location: '. 'student.php');
        }else{
            $connexion_failed = 'Authentification échoué...';
            $_SESSION['error_auth'] = $connexion_failed;
            header('location: '. '../index.php');
        }
     
        
    }else{
        $connexion_failed = 'Authentification échoué...';
        $_SESSION['error_auth'] = $connexion_failed;
        header('location: '. '../index.php');
    }
}else{
    print_r('email et mot passe non défini...');
}
