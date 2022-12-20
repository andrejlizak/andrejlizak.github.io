<?php
require_once "config.php";
if(isset($_POST['oname']) ){
    if(isset($_SESSION['userid'])){
       $uid =  $_SESSION['userid'];
    }else{
        $uid =  0 ;
    }
    $oname = $_POST['oname'];
    $omail = $_POST['omail'];
    $otel = $_POST['otel'];
    $oadd1 = $_POST['oadd1'];
    $oadd2 = $_POST['oadd2'];
    $payment = $_POST['payment'];
    $total = $_POST['total'];
    $items = $_POST['items'];

    $stmt = $conn -> prepare("INSERT INTO orders (oname, omail, otel, oaddress1, oaddress2, payment, user_id, total, items) VALUES (?,?,?,?,?,?,?,?,?) ");
    $stmt->bind_param('ssssssiss', $oname, $omail, $otel, $oadd1, $oadd2, $payment, $uid, $total, $items);
    $stmt->execute();
    
    
}


    