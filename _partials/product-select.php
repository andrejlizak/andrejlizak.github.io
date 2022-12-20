<?php
/* výpis produktov z databázy */

        
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
                <a href="#"><i class="fa fa-shopping-basket fa-2x"></i></a>
                </div>
           
        </div>';
        
        
        echo '</div>';
        echo '</li>';
    ?>