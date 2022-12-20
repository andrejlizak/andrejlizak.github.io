
<?php
        
        require_once "config.php";
        
          
        
        $product_name = $_POST['product_name'];
        $product_made = $_POST['product_made'];
        $category1 = $_POST['category1'];
        $category2 = $_POST['category2'];
        $category3 = $_POST['category3'];
        $product_info = $_POST['product_info'];
        $product_price = $_POST['product_price'];
        $image_sm = $_POST['product_image_sm'];
        $image_lg = $_POST['product_image_lg'];



        $sql = "INSERT INTO products (product_name, product_made, category1, category2, category3, product_info, product_price, product_image_sm, product_image_lg) VALUES ('$product_name', '$product_made', '$category1', '$category2', '$category3', '$product_info', '$product_price', '$image_sm', '$image_lg')";

        mysqli_query($conn, $sql);

        header("Location: ../_inc/new.php");
    
        
?>