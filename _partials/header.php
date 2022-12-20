<?php   
        include "_inc/config.php";
        session_start();
       
        
       
?>
    

<body>



<div class="page-wrapper">
    
<header class="page-header">

    
            <?php
                if(isset($_GET['error'])){
                if($_GET['error'] == 'successfullyloggedin'){
                    echo '<div class="success-message animate__animated animate__flash animate__delay-1s ">
                            <div class="panel ">';
                    echo '<p><i class="fa fas fa-check-circle"></i> Prihlásenie prebehlo úspešne!</p>';
                    echo '</div>
                        </div>';
                }

                if($_GET['error'] == 'loggedout'){
                    echo '<div class="success-message animate__animated animate__flash animate__delay-1s ">
                            <div class="panel ">';
                    echo '<p><i class="fa fas fa-check-circle"></i> Boli ste odhlásení!</p>';
                    echo '</div>
                        </div>';
                }
                }
            
            ?>
        
   
    <div class="pre-header animate__animated animate__backInRight">
        <div class="flex panel">
            <div class="left" style="margin-left: .7rem;">
                <i class="fa fa-phone fa-1x"></i>
                <a href="tel:+421 99 55 22" style="margin-left: .2rem;">+421 99 55 22</a>
            </div>

            <div class="left" style="margin-right: .4rem;">
                <?php
                    if(isset($_SESSION['userid'])){
                        echo '<a href="" style="margin-left: .4rem; vertical-align:middle;">
                        <i class="fa fa-user" style="margin:0 .2rem .1rem 0;"></i>
                        Účet</a>';

                        echo '<a href="_inc/logout.php" style="margin-left: 1rem; vertical-align:middle;">
                        <i class="fa fa-sign-out-alt" style="margin:0 .2rem 0rem 0;"></i>
                        Odhlásiť sa</a>';

                        
                    }else{
                        echo '<a href="login.php" style="margin-left: .4rem;">
                <i class="fa fa-user" style="margin-right: .4rem;"></i>
                Prihlásiť sa</a>';
                    }
                ?>
                
            </div>
        </div>
    </div>

    

    
    <div class="pre-header2 animate__animated animate__backInLeft">
        <div class="panel">    
            <div class="flex">
                <div class="content-holder">
                        <div id="menu" onclick="toggleMenu()"><i class="fa fa-bars fa-2x"></i></div>
                        <a href="index.php"><img src="_assets/css/img/logo-anlee.png" alt="anLEE" title="anLEE"> </a>
                </div>
                <div class="flex-right">
                    <div class="flex-item">
                        <form action="search.php" class="search-form" method="POST">
                            <button name="search-submit" class="search-btn" type="submit"><i class="fas fa-search fa-2x"></i></button>
                            <input name="search" id="search-bar" type="search" placeholder="Hľadať v obchode..." aria-label="Search">
                        </form>
                    </div>

                    <div class="flex-item">
                        
                        <a href="cart.php" class="btn-cart">
                            <div class="icon-wrapper"><i class="fa fa-shopping-basket fa-2x"></i>
                                <span style="display:block;z-index:-9999; width:100%;">
                                    <span id="cart-item"></span> 
                                </span>
                            </div>
                            <span class="cart-text"> Nákupný košík</span>
                        </a> 
                    </div>
                     
                </div>
            </div>
        </div>
        
    </div>
    <?php
    include "_partials/nav-toggle.php";
?>        
</header>


<script>
        //rozbalovacie menu pri menších obrazovkách
     
        var toggleStatus = 0;
            function toggleMenu(){
                if (toggleStatus == 1){
                    $('#nav-toggle').css( "left", "-500px").slideUp();
                    toggleStatus = 0;
                    
                }else if(toggleStatus == 0){
                    $('#nav-toggle').css( "left", "0px").slideDown();
                    toggleStatus = 1;
                    
                }
            }
            
        
    </script>



