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

    <title>Výsledok hľadania</title>
</head>
<?php 
include "_partials/header.php";
include "_partials/nav-sticky.php";
?>

    <main>
        <div id="message"></div>
    <div class="panel">                
        <main class="main-content">
                
                    <?php include "_partials/side-bar.php"; ?>
                <div class="products-list">
                    
                    <?php echo '<ol id="grid" class="products '.$olClass.'">';?>
                    <?php
                        if(isset($_POST['search-submit'])){
                            $search = mysqli_real_escape_string($conn, $_POST['search']);
                            $sql = "SELECT product_id, product_name, brand.made_name, product_price, product_image_sm FROM products INNER JOIN brand ON products.product_made = brand.made_ID WHERE product_name LIKE '%$search%' OR brand.made_name LIKE '%$search%'";
                            $result = mysqli_query($conn, $sql);
                            $query_result = mysqli_num_rows($result);

                            if($query_result > 0){
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $pid = $row['product_id'];
                                    echo '<li class="grid-list-item">';
                                
                                    echo  '<a href="product.php?pid='.$pid.'"> ';
                                    echo '<div class="product-image"><img  style="width: 100%; height: auto" src=" img/'.$row['product_image_sm'] .'" /></div></a>';
                                    
                                    echo  '<div class="product-info">
                                            <div class="product-name">';
                                    
                                    echo '<a href="product.php?pid='.$pid.'" class="product-link"><h3 style="font-size: .9rem; margin:0; padding:0 0 .9rem .4rem;line-height: 30px;">'.$row['product_name'];
                                    echo " - ";
                                    echo $row['made_name'] .'</h3></a>';
                                    echo   '</div>';
        
                                    echo '<div class="product-price">
                                            <div class="price-box">
                                            <span style="font-size:1.5rem; font-weight:bold; padding-left:.4375rem; color:#222;">'.$row['product_price'].' €</span>
                                            </div>
                                            <div class="icon-wrapper add-cart">
                                                <form action="" class="hidden-form">
                                                    <input type="hidden" class="pid" value="'.$pid.'">
                                                    <input type="hidden" class="pname" value="'.$row['product_name'].'">
                                                    <input type="hidden" class="pmade" value="'.$row['made_name'].'">
                                                    <input type="hidden" class="pprice" value="'.$row['product_price'].'">
                                                    <input type="hidden" class="pimage" value="'.$row['product_image_sm'].'">
                                                    
                                                <button class="add-btn"><i class="fa fa-shopping-basket fa-2x"></i></button>
                                                </form>
                                                
                                            </div>
                                    
                                    </div>';
                                
                                
                                echo '</div>';
                                echo '</li>';
                                
                                }
                            }else{
                                
                                echo '<h2 style="grid-column:1/3; text-align:center;">Nenašla sa žiadna zhoda!</h2>';
                                
                            }
                        }    
                        
                        
                       
                        

                      
                     
                    ?>
                    
                   </ol>     
                </div>
                        
            </div>
        
         </main>  
      
      </div>              
                    
                    

















<?php
include "_partials/footer.php";
?>