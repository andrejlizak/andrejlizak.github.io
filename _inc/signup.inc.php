<?php
    

if(isset($_POST['submit'])){
    $usersName = $_POST['usersName'];
    $username = $_POST['username'];
    $user_mail = $_POST['user_mail'];
    $user_tel = $_POST['user_tel'];
    $user_pass = $_POST['user_pass'];
    $user_2pass = $_POST['user_2pass'];
    header("location: ../index.php");

    require_once "config.php";
    require_once "functions.php";

    if(emptyInputSignup($usersName, $username, $user_mail, $user_pass, $user_2pass) !== false){
        header("location: ../sign_up.php?error=emptyinput");
        exit();
    }

    if(invalidUsername($username) !== false){
        header("location: ../sign_up.php?error=invalidname");
        exit();
    }

    if(invalidEmail($user_mail) !== false){
        header("location: ../sign_up.php?error=invalidemail");
        exit();
    }

    if(pwdMatch($user_pass, $user_2pass) !== false){
        header("location: ../sign_up.php?error=passwordsdontmatch");
        exit();
    }

    if(userExists($conn, $username, $user_mail) !== false){
        header("location: ../sign_up.php?error=userexists");
        exit();
    }

    createUser($conn, $usersName, $username, $user_mail, $user_tel, $user_pass);
    
    
    if(isset($_POST['user_mail'])){
        $to_email = $user_mail;
        $subject = "Vitajte v našom e-shope!";
        $body = "Hi,\n This is test email send by PHP Script";
        $headers = "From: andrejlizak1@gmail.com";
        
        if(mail($to_email, $subject, $body, $headers)){
            header("location: ../sign_up.php?error=none+emailsent");
            exit();
        }
    }
}else{
    header("location: ../sign_up.php");
    exit();
}