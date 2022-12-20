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

    <title>Registrácia</title>
</head>
<?php include "_partials/header.php";
      include "_partials/nav-sticky.php";

?>




        <div class="panel">
           
            <div class="login-wrapper" style="grid-template-columns:100%; justify-items:center;"> 
                
                <section class="login-form" style="width: 100%;">
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
                    
                    
                    ?>
                    </div>
                    <h3>Registrácia používateľa</h3>
                    <form action="_inc/signup.inc.php" method="post">
                        <label ><span>*</span>Meno a priezvisko</label>
                        <input name="usersName" type="text">

                        <label ><span>*</span>Používateľské meno</label>
                        <input name="username" type="text">

                        <label ><span>*</span>E-mailová adresa</label>
                        <input name="user_mail" type="text" >

                        <label >Telefónne číslo<span> (voliteľné)</span></label>
                        <input name="user_tel" type="tel">

                        
                        <label ><span>*</span>Heslo</label>
                        <input name="user_pass" type="password" >

                        <label ><span>*</span>Potvrdenie hesla</label>
                        <input name="user_2pass" type="password" >

                        

                        <button class="login" name="submit" type="submit">Zaregistrovať sa</button>
                    </form>
                    
                </section>

                
            </div>
        </div>
    </div>






<?php include "_partials/footer.php";?>