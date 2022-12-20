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

    <title>Prihláste sa</title>
</head>
<?php include "_partials/header.php";
      include "_partials/nav-sticky.php";

?>



    
        <div class="panel">
            <div class="login-wrapper">
                <section class="login-form">
                    <div class="error-massages">
                    <?php
                    if(isset($_GET['error'])){
                        $animate = 'animate__animated animate__shakeX animate__fast animate__delay-1s';
                       
                        if($_GET['error'] == 'wrongdata'){
                            echo '<p class="'.$animate.'">Nesprávne údaje!</p>';
                        }
                        elseif($_GET['error'] == 'emptyinput'){
                            echo '<p class="'.$animate.'">Prázdne pole!</p>';
                        }
                        elseif($_GET['error'] == 'wrongpass'){
                            echo '<p class="'.$animate.'">Nesprávne heslo!</p>';
                        }
                      
                        elseif($_GET['error'] == 'stmtfail'){
                            echo '<p class="'.$animate.'">Ospravedlňujeme sa, niečo sa pokazilo...</p>';
                        }

                    }
                    
                    
                    ?>
                    </div>

                    <h3>Prihlásenie používateľa</h3>
                    <form action="_inc/login.inc.php" method="post">
                        <label><span>*</span>E-mail/používateľské meno</label>
                        <input name="user_Uid" type="text">
                        
                        <label><span>*</span>Heslo</label>
                        <input name="user_password" type="password">

                        <button class="login" type="submit" name="submit">Prihlásiť sa</button>
                    </form>
                    
                </section>

                <section class="login-form">
                    <h3>Zaregistrujte sa</h3>
                        <p>Vytvorte si AnLee účet, aby ste získali prístup k doplnkom za najnižšiu cenu 
                            v Európe a navyše rad exkluzívnych MP výhod.
                        </p>
                        <form action="sign_up.php" method="post">
                            <button onclick="" class="login" type="submit">Registrácia</button>
                        </form>
                </section>
            
            </div>
        </div>
    </div>







<?php include "_partials/footer.php";?>