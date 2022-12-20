<?php 
     include "_inc/config.php";

?>
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
<?php include "_partials/header.php";?>
    
<?php include "_partials/nav-sticky.php";?>
<div id="message">

</div>

<div class="panel">                
        <main class="main-content">
                
<?php include "_partials/side-bar.php"; ?>
            <div class="products-list">

<?php 
    echo  '<ol id="grid" class="products '. $olClass .'">'; 
    if(isset($_GET['id'])){
    
        $cat1_id = $_GET['id'];
        $query = "SELECT product_id, product_name, brand.made_name, product_price, product_image_sm, product_category1.category1_ID, product_category1.category1_name, product_category1.category1_info from products 
        INNER JOIN brand ON products.product_made = brand.made_ID
        INNER JOIN product_category1 ON products.category1 = product_category1.category1_ID
        WHERE category1_ID = $cat1_id LIMIT 15";
        $result = mysqli_query($conn, $query);
        
        
        
            while($row = mysqli_fetch_assoc($result)){
                $pid = $row['product_id'];
                $product_name = $row['product_name'];
                $product_made = $row['made_name'];
                $product_price = $row['product_price'];
                $product_image_sm = $row['product_image_sm'];
                
                $category1_info = $row['category1_info'];
                $category1_name = $row['category1_name'];
                
                echo '<li class="grid-list-item">';
       
                echo  '<a href="product.php?pid='.$pid.'"> ';
                echo '<div class="product-image"><img  style="width: 100%; height: auto" src=" img/'.$product_image_sm .'" /></div></a>';
                
                echo  '<div class="product-info">
                        <div class="product-name">';
                
                echo '<a href="product.php?pid='.$pid.'" class="product-link"><h3 style="font-size: .9rem; margin:0; padding:0 0 .9rem .4rem;line-height: 30px;">'.$product_name;
                echo " - ";
                echo $product_made .'</h3></a>';
                echo   '</div>';
        
                echo '<div class="product-price">
                        <div class="price-box">
                         <span style="font-size:1.5rem; font-weight:bold; padding-left:.4375rem; color:#222;">'. $product_price.' €</span>
                        </div>
                        <div class="icon-wrapper add-cart">
                        <form action="" class="hidden-form">
                            <input type="hidden" class="pid" value="'.$pid.'">
                            <input type="hidden" class="pname" value="'.$product_name.'">
                            <input type="hidden" class="pmade" value="'.$product_made.'">
                            <input type="hidden" class="pprice" value="'.$product_price.'">
                            <input type="hidden" class="pimage" value="'.$product_image_sm.'">';
                            if(isset($_SESSION['userid'])){  
                                echo   '<input type="hidden" class="puid" value="'. $_SESSION['userid'].'">';
                               }
                            
                echo    '<button class="add-btn"><i class="fa fa-shopping-basket fa-2x"></i></button>
                        </form>
                        
                        </div>
                   
                </div>';
                
                
                echo '</div>';
                echo '</li>';
            
            }
      }

    
      if(isset($_GET['sub_id'])){
    
        $cat2_id = $_GET['sub_id'];
        $query = "SELECT product_id, product_name, brand.made_name, product_price, product_image_sm, product_category2.category2_ID, product_category2.category2_name, product_category2.category2_info from products 
        INNER JOIN brand ON products.product_made = brand.made_ID
        INNER JOIN product_category2 ON products.category2 = product_category2.category2_ID
        WHERE category2_ID = $cat2_id";
        $result = mysqli_query($conn, $query);
        
        
        
            while($row = mysqli_fetch_assoc($result)){
                $pid = $row['product_id'];
                $product_name = $row['product_name'];
                $product_made = $row['made_name'];
                $product_price = $row['product_price'];
                $product_image_sm = $row['product_image_sm'];
                
                $category2_info = $row['category2_info'];
                $category2_name = $row['category2_name'];

                
                echo '<li class="grid-list-item">';
       
                echo  '<a href="product.php?pid='.$pid.'"> ';
                echo '<div class="product-image"><img  style="width: 100%; height: auto" src=" img/'.$product_image_sm .'" /></div></a>';
                
                echo  '<div class="product-info">
                        <div class="product-name">';
                
                echo '<a href="product.php?pid='.$pid.'" class="product-link"><h3 style="font-size: .9rem; margin:0; padding:0 0 .9rem .4rem;line-height: 30px;">'.$product_name;
                echo " - ";
                echo $product_made .'</h3></a>';
                echo   '</div>';
        
                echo '<div class="product-price">
                <div class="price-box">
                 <span style="font-size:1.5rem; font-weight:bold; padding-left:.4375rem; color:#222;">'. $product_price.' €</span>
                </div>
                <div class="icon-wrapper add-cart">
                <form action="" class="hidden-form">
                    <input type="hidden" class="pid" value="'.$pid.'">
                    <input type="hidden" class="pname" value="'.$product_name.'">
                    <input type="hidden" class="pmade" value="'.$product_made.'">
                    <input type="hidden" class="pprice" value="'.$product_price.'">
                    <input type="hidden" class="pimage" value="'.$product_image_sm.'">';
                    if(isset($_SESSION['userid'])){  
                        echo   '<input type="hidden" class="puid" value="'. $_SESSION['userid'].'">';
                       }
                    
                  echo '<button class="add-btn"><i class="fa fa-shopping-basket fa-2x"></i></button>
                </form>
                
                </div>
           
        </div>';
                
                
                echo '</div>';
                echo '</li>';
            
            }
      }

      if(isset($_GET['subc_id'])){
    
        $cat3_id = $_GET['subc_id'];
        $query = "SELECT product_id, product_name, brand.made_name, product_price, product_image_sm, product_category3.category3_ID, product_category3.category3_name, product_category3.category3_info from products 
        INNER JOIN brand ON products.product_made = brand.made_ID
        INNER JOIN product_category3 ON products.category3 = product_category3.category3_ID
        WHERE category3_ID = $cat3_id";
        $result = mysqli_query($conn, $query);
        
        
        
            while($row = mysqli_fetch_assoc($result)){
                $pid = $row['product_id'];
                $product_name = $row['product_name'];
                $product_made = $row['made_name'];
                $product_price = $row['product_price'];
                $product_image_sm = $row['product_image_sm'];
                
                $category3_info = $row['category3_info'];
                $category3_name = $row['category3_name'];


                echo '<li class="grid-list-item">';
       
                echo  '<a href="product.php?pid='.$pid.'"> ';
                echo '<div class="product-image"><img  style="width: 100%; height: auto" src=" img/'.$product_image_sm .'" /></div></a>';
                
                echo  '<div class="product-info">
                        <div class="product-name">';
                
                echo '<a href="product.php?pid='.$pid.'" class="product-link"><h3 style="font-size: .9rem; margin:0; padding:0 0 .9rem .4rem;line-height: 30px;">'.$product_name;
                echo " - ";
                echo $product_made .'</h3></a>';
                echo   '</div>';
        
                echo '<div class="product-price">
                <div class="price-box">
                 <span style="font-size:1.5rem; font-weight:bold; padding-left:.4375rem; color:#222;">'. $product_price.' €</span>
                </div>
                <div class="icon-wrapper add-cart">
                <form action="" class="hidden-form">
                    <input type="hidden" class="pid" value="'.$pid.'">
                    <input type="hidden" class="pname" value="'.$product_name.'">
                    <input type="hidden" class="pmade" value="'.$product_made.'">
                    <input type="hidden" class="pprice" value="'.$product_price.'">
                    <input type="hidden" class="pimage" value="'.$product_image_sm.'">';
                    if(isset($_SESSION['userid'])){  
                        echo   '<input type="hidden" class="puid" value="'. $_SESSION['userid'].'">';
                       }
                    
                echo '<button class="add-btn"><i class="fa fa-shopping-basket fa-2x"></i></button>
                </form>
                
                </div>
           
        </div>';
                
                
                echo '</div>';
                echo '</li>';
            
            }
      }
    
?>
                </ol>      
            </div>    
        </main>  
    </div>

    




<?php include "_partials/footer.php";?>