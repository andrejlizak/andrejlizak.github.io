<?php 

require_once "_inc/config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="_assets/css/normalize.css">
    <link rel="stylesheet" href="_assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="_assets/css/bootstrap.css">
    <link rel="stylesheet" href="_assets/css/style.css">
    <link rel="stylesheet" href="_assets/css/responsive.css">
    <link rel="stylesheet" href="_assets\css\animate.css">
    <link rel="stylesheet" href="_assets\node_modules\@fortawesome\fontawesome-free\css\fontawesome.css">
    <title>Anlee
    </title>
</head>
<?php include "_partials/header.php";
include "_partials/nav-sticky.php";

    $big_total = 0;
    $all_items = '';
    $items = array();

    $stmt = $conn->prepare("SELECT CONCAT(product_name, ' (', qty,')') AS item_qty, total_price FROM cart");
    $stmt->execute();
    $res = $stmt->get_result();
    while ($row = $res->fetch_assoc()){
        $big_total += $row['total_price'];
        $items[] = $row['item_qty'];

    }
    $all_items = implode(", ", $items);
    $delivery = 2.50;
    $big_total += $delivery;
?>
<div class="panel">
           
           <div class="login-wrapper" style="grid-template-columns:100%; justify-items:center;"> 
               
               <section class="login-form" style="width: 100%;">
                   
                   <h3>Sumár objednávky</h3>
                   <h4>Produkty: <i><?php echo $all_items;?></i></h4>
                   <h4>Doprava: <i><?php echo $delivery;?> €</i></h4>
                   <h4>Celková suma: <i><?php echo $big_total;?> €</i></h4>
                   
               </section>

               
           </div>
       </div>
   </div>

    <div class="panel">
           
           <div class="login-wrapper" style="grid-template-columns:100%; justify-items:center;"> 
               
               <section class="login-form" style="width: 100%; font-family:'Montserrat', serif;">
                   <div class="error-massages">
                   <?php
                   if(isset($_GET['error'])){
                       $animate = 'animate__animated animate__shakeX animate__fast animate__delay-1s';
                      
                       if($_GET['error'] == 'invalidname'){
                           echo '<p class="'.$animate.'"><i class="fa fas fa-times-circle"></i> Nesprávne zadané používateľské meno!</p>';
                       }
                       elseif($_GET['error'] == 'emptyinput'){
                           echo '<p class="'.$animate.'"><i class="fa fas fa-times-circle"></i> Prázdne pole!</p>';
                       }
                       elseif($_GET['error'] == 'invalidemail'){
                           echo '<p class="'.$animate.'"><i class="fa fas fa-times-circle"></i> Nesprávny email!</p>';
                       }
                       elseif($_GET['error'] == 'passwordsdontmatch'){
                           echo '<p class="'.$animate.'"><i class="fa fas fa-times-circle"></i> Heslá sa nezhodujú!</p>';
                       }
                       elseif($_GET['error'] == 'userexists'){
                           echo '<p class="'.$animate.'"><i class="fa fas fa-times-circle"></i> Používateľ už existuje!</p>';
                       }
                       elseif($_GET['error'] == 'stmtfail'){
                           echo '<p class="'.$animate.'"><i class="fa fas fa-times-circle"></i> Ospravedlňujeme sa, niečo sa pokazilo...</p>';
                       }
                       elseif($_GET['error'] == 'none'){
                           echo '<p class="animate__animated animate__flash animate__fast animate__delay-1s" style ="background-color:#90ff89;"><i class="fa fas fa-check-circle"></i> Registrácia prebehla úspešne</p>';
                       }
                   }
                   
                   if(isset($_GET['order']) && isset($_GET['order']) == "placed"){
        
                    }
                   ?>
                   
                   </div>
                   <h3>Zadajte údaje objednávky</h3>
                   <form class="chck-form" >
                       <input type="hidden" class="total" value="<?php echo $big_total?>">
                       <input type="hidden" class="items" value="<?php echo $all_items?>">
                       <label ><span>*</span>Meno a priezvisko</label>
                       <input name="oname" class="oname" type="text">

                       <label ><span>*</span>E-mailová adresa</label>
                       <input name="omail" class="omail" type="text" >

                       <label ><span>*</span>Telefónne číslo</label>
                       <input name="otel" class="otel" type="tel">

                       
                       <label ><span>*</span>Ulica a číslo</label>
                       <input name="oaddress1" class="oaddress1" type="text" >

                       <label ><span>*</span>Mesto a PSČ</label>
                       <input name="oaddress2" class="oaddress2" type="text" >

                       <label class="form-label">Spôsob platby</label>
                        <select name="payment" class="payment">
                            <option selected>Spôsob platby</option>
                            <option value="Visa">Visa</option>
                            <option value="MasterCard">MasterCard</option>
                            <option value="Dobierka">Dobierka</option>
                        </select>

                       

                       

                       <button class="login place_order" name="place_order" >Objednať</button>
                   </form>
                   
               </section>

               
           </div>
       </div>
   </div>









<?php include "_partials/footer.php";?>