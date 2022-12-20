<?php
session_start();
require "config.php";

if(isset($_GET['remove'])){
    
           $query = $conn->prepare('DELETE FROM cart');
           $query->execute();

           header('location: ../cart.php');
}
if(isset($_GET['clear'])){
    $id = $_GET['clear'];
    $stmt = $conn->prepare("DELETE FROM cart WHERE id = ?");
    $stmt->bind_param('s', $id);
    $stmt->execute();
    header('location: ../cart.php');
}



   
if(isset($_POST['pid'])){
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $pmade = $_POST['pmade'];
    $pprice = $_POST['pprice'];
    $pimage = $_POST['pimage'];
    
    $pqty = 1;
    $total_price = $pprice * $pqty; 

    if(isset($_SESSION['userid'])){
        $puid = $_POST['puid'];
        $stmt = $conn->prepare('SELECT product_id, user_id  FROM cart WHERE product_id = ? AND user_id = ?');
        $stmt->bind_param('ss',$pid, $puid);
        $stmt->execute();
        $res = $stmt->get_result();
        $r = $res->fetch_assoc();
        $code = $r['product_id'] ?? "";
        $code1 = $r['user_id'] ?? "";

       
    
    }else{
        $puid = 0;
        $stmt = $conn->prepare('SELECT product_id, user_id  FROM cart WHERE product_id = ? AND user_id = ?');
        $stmt->bind_param('ss',$pid, $puid);
        $stmt->execute();
        $res = $stmt->get_result();
        $r = $res->fetch_assoc();
        $code = $r['product_id'] ?? "";
        $code1 = $r['user_id'] ?? "";

    }
    


    if (!$code && !$code1) {
      $query = $conn->prepare('INSERT INTO cart (product_id, product_name,product_price,product_image,qty,total_price, user_id ) VALUES (?,?,?,?,?,?,?)');
      $query->bind_param('ssissii',$pid, $pname,$pprice,$pimage,$pqty,$total_price, $puid);
      $query->execute();

      echo '<div class="success-message animate__animated animate__flash  ">
            <div class="panel ">';
            echo '<p><i class="fa fas fa-check-circle"></i> Produkt bol pridaný do košíka!</p>';
            echo '</div>
            </div>';
    } else {
        echo '<div class="success-message animate__animated animate__shakeX " style="background-color: #ff001f10;" >
        <div class="panel ">';
        echo '<p><i class="fa fas fa-times-circle"></i> Produkt už je v košíku!</p>';
        echo '</div>
        </div>';
    }
 

}

if(isset($_GET['cartQty']) && isset($_GET['cartQty']) == 'cart_item' ){

    if(isset($_SESSION['userid'])){

    $session_user = $_SESSION['userid'];
    }else{
        $session_user = "0";
    }
    $stmt = $conn -> prepare("SELECT * FROM cart WHERE user_id = ? ");
    $stmt->bind_param("s", $session_user);
    $stmt -> execute();
    $stmt -> store_result();
    $row = $stmt-> num_rows();
    echo $row;
    $_SESSION['cart-count'] = $row;

}

if(isset($_POST['pqty'])){
    $pqty = $_POST['pqty'];
    $pid = $_POST['pid'];
    $pprice = $_POST['pprice'];
    $uid = $_POST['uid'];
    


    $total = $pqty * $pprice;

    $stmt = $conn->prepare("UPDATE cart SET qty=?, total_price=? WHERE product_id=? AND user_id=?");
    $stmt->bind_param("isii", $pqty, $total, $pid, $uid);
    $stmt->execute();

}


?>


<script type="text/javascript">

    (function($){
        $('.success-message').delay(3200).fadeOut('fast');
        
    })(jQuery)
</script>