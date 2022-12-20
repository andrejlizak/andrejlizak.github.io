<?php 
     require "_inc/config.php";
     

    if(isset($_GET['pid'])){
        $pid = $_GET['pid'];
        $query = "SELECT product_name, brand.made_name, product_info, product_price, product_image_sm from products INNER JOIN brand ON products.product_made = brand.made_ID WHERE product_id = $pid ;";
        $result = mysqli_query($conn, $query);
        $product_count = mysqli_num_rows($result);
        
        if($product_count > 0){
            while($row = mysqli_fetch_array($result)){
                $product_name = $row['product_name'];
                $product_made = $row['made_name'];
                $product_info = $row['product_info'];
                $product_price = $row['product_price'];
                $product_image_sm = $row['product_image_sm'];
                $product_price_sale = $product_price + 10;
                
            
            }
        }else{
            echo 'Produkt neexistuje';
            exit();
        }
    }else{
        echo 'Dáta neboli zadané!';
        exit();
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_assets/css/normalize.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    
    <link rel="stylesheet" href="_assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="_assets/css/bootstrap.css">
    <link rel="stylesheet" href="_assets/css/style.css">
    <link rel="stylesheet" href="_assets/css/responsive.css">
    <link rel="stylesheet" href="_assets\css\animate.css">
    <link rel="stylesheet" href="_assets\node_modules\@fortawesome\fontawesome-free\css\fontawesome.css">
    <title><?php 
         echo "$product_name";
         ?>
    </title>
</head>
<?php include "_partials/header.php";?>
    
<?php include "_partials/nav-sticky.php"; ?>
    <div id="message"></div>              
    <div class="panel">
        <main class="main-content product-container" >
            <div class="image-container">
             <img src="img/<?php echo "$product_image_sm"; ?>"  style="max-width:fit-content; width: 450px; height: auto;">
            </div>

            <div class="product-info-container">
                <h3><?php echo "$product_name - $product_made"; ?></h3>
                <h5 style="color:#B2000e;">Výrobca: <?php echo "$product_made"; ?> </h5>
                <p><?php echo "$product_info"; ?></p>
                <div class="pre-price-section">
                        <span>Na sklade</span>
                        <span>U vás už zajtra!</span>
                        
                </div>
                <div class="product-info-price">
                    
                    <div class="price-section">
                        <span><?php echo "$product_price €"; ?></span>
                        <span><?php echo "$product_price_sale €"; ?></span>
                    </div>

                    <div class="shipment-section">
                        <span>Poštovné od 2,50 €</span>
                        <span>Pri nákupe nad 50 € poštovné zdarma!</span>
                    </div>
                </div>
                <div class="add-cart" style="margin-top:1.5rem; text-align:center;"  >
                        <form style="width:100%; text-align:center;" action="" class="hidden-form">
                            <input type="hidden" class="pid" value="<?php echo $pid ?>">
                            <input type="hidden" class="pname" value="<?php echo $product_name    ?>">
                            <input type="hidden" class="pmade" value="<?php echo $product_made    ?>">
                            <input type="hidden" class="pprice" value="<?php echo $product_price   ?>">
                            <input type="hidden" class="pimage" value="<?php echo $product_image_sm ?>">
                            <?php if(isset($_SESSION['userid'])){  
                                 echo   '<input type="hidden" class="puid" value="'. $_SESSION['userid'].'">';
                                }?>
                            
                           <button style="font-family:'Montserrat', serif; font-size:medium; padding: .8rem; display:inline-block; width:100%;" class="add-btn">Pridať do košíka</button>
                        </form>
                        
                        </div>
            </div>
        </main>
    </div>



<?php include "_partials/footer.php";?>
