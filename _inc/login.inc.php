<?php
    
    if(isset($_POST['submit'])){
        $username = $_POST['user_Uid'];
        $password = $_POST['user_password'];
       

        require_once "config.php";
        require_once "functions.php";

        if(emptyInputLogin($username, $password) !== false){
            header("location: ../login.php?error=emptyinput");
            exit();
        }

        loginUser($conn, $username, $password);
            
        
    }else{
        header("location: ../login.php");
        exit();
    }