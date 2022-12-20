<?php

//funkcie pre registračný formulár
function emptyInputSignup($usersName, $username, $user_mail, $user_pass, $user_2pass){
    
  
    if(empty($usersName) || empty($username) || empty($user_mail) || empty($user_pass) || empty($user_2pass)) {
    $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function invalidUsername($username){
    
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function invalidEmail($user_mail){
    
    if (!filter_var($user_mail, FILTER_VALIDATE_EMAIL)) {
    $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function pwdMatch($user_pass, $user_2pass){
    
    if ($user_pass !== $user_2pass) {
    $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function userExists($conn, $username, $user_mail){
    $sql = "SELECT * FROM pouzivatelia WHERE username = ? OR user_mail = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../sign_up.php?error=stmtfail");
        exit();   
}

    mysqli_stmt_bind_param($stmt, "ss", $username, $user_mail);
    mysqli_stmt_execute($stmt);

    $dataResult = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($dataResult)){
        return $row;
    }else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

function createUser($conn, $usersName, $username, $user_mail, $user_tel, $user_pass ){
    $sql = "INSERT INTO pouzivatelia (usersName, username, user_mail, user_tel, user_pass) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../sign_up.php?error=stmtfail");
        exit();   
}

    $hashedPass = password_hash($user_pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $usersName, $username, $user_mail, $user_tel, $hashedPass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../sign_up.php?error=none");
    exit();

}

//funkcie pre prihlasovací formulár
function emptyInputLogin($username, $password){
    
  
    if(empty($username) || empty($password))  {
    $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $password){

    $userExists = userExists($conn, $username, $username);
    if($userExists === false){
        header("location: ../login.php?error=wrongdata");
        exit();
    }

    $hashedPass = $userExists['user_pass'];
    $passCheck = password_verify($password, $hashedPass);

    if($passCheck === false){
        header("location: ../login.php?error=wrongpass");
        exit();
    }else if($passCheck === true){
        session_start();
        $_SESSION['userid'] = $userExists['uID'];
        $_SESSION['usersname'] = $userExists['usersName'];
        setcookie('user', $username, time() + (60*60*24*3));
        setcookie('pass', $password, time() + (60*60*24*3));
        header("location: ../index.php?error=successfullyloggedin");  
        exit();
    }
}

