
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

    <title>Nákupný košík</title>
</head>

<?php include "_partials/header.php";
    include "_partials/nav-sticky.php";
?>
<div class="panel">
    <div class="cart-wrapper">
        <?php
        if(isset($_SESSION['cart-count']) && $_SESSION['cart-count'] == "0"){
            echo '<h3>Nákupný košík je prázdny!</h3>';
        }else{
            echo '<h3>Nákupný košík</h3>';
        }
        ?>
       
        
            <table class="table-cart">
                <thead>
                    <tr>
                        <th>Produkt</th>
                        <th>Popis</th>
                        <th>Množstvo</th>
                        <th>Cena</th>
                        <th>Súčet</th>
                        <th><a class="trash-btn" href="_inc/cart.inc.php?remove=all"><i class="fa fa-trash"></i> Všetko</a></th>
                    </tr>
                </thead>
                <tbody>   
        <?php   

            if(isset($_SESSION['userid'])){
                $session_user = $_SESSION['userid'];
            }else{
                $session_user = "0";
            }

            
            
            $sql = "SELECT * FROM cart WHERE user_id = $session_user";
            $result = mysqli_query($conn, $sql);
            $big_total = 0;
            while($row = mysqli_fetch_assoc($result)):
                $total = $row['product_price'] * $row['qty'];
                
                if(isset($_SESSION['cart-count']) && $_SESSION['cart-count'] >= 0){
                    $big_total += $row['product_price'] * $row['qty'];
                    } 
                
                
        ?>
            
                <tr class="cart-tr">
                    <input type="hidden" class="pid" value="<?php echo $row['product_id']; ?>">
                    <input type="hidden" class="pprice" value="<?php echo $row['product_price']; ?>">
                    <input type="hidden" class="uid" value="<?php echo $row['user_id']; ?>">
                    <td ><img src="img/<?php echo $row['product_image']?>" alt=""></td>
                    <td ><h4><?php echo $row['product_name']?></h4></td>
                    <td ><input type="number" class="pqty" value="<?php echo $row['qty']?>" style="width:2rem;"></td>
                    <td ><h4><?php echo $row['product_price']?> €</h4><a class="trash-btn-resp" href="_inc/cart.inc.php?clear=<?php echo $row['id'] ?>"><i class="fa fa-trash"></i></a></td>
                    <td ><h4><?php echo $total ?> €</h4></td>
                    <td ><a class="trash-btn" href="_inc/cart.inc.php?clear=<?php echo $row['id'] ?>"><i class="fa fa-trash"></i></a></td>

                </tr>
                <tr class="spacer"></tr>
                
            
<?php   endwhile; ?>
                <?php

                    if(isset($_SESSION['cart-count']) && $_SESSION['cart-count'] > 0):
                        
                        echo "<tr class='last-tr'>"?>
                            <td colspan='2'  ><button style='background-color:#90ff89; color:#333;' onclick="window.location.href='index.php'"><i class='fa fa-shopping-cart'></i> Pokračovať v nákupe</button></td>
                            <?php echo "<td colspan='2'>Celková suma</td>
                            <td>$big_total €</td>";?>
                            <td colspan='2'><button onclick="window.location.href='checkout.php'">Pokračovať k objednávke</button></td>
                        </tr>
                    <?php endif ?>
                
            </tbody>
        </table>
    </div>
</div>






<?php include "_partials/footer.php";?>