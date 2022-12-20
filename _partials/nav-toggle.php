<div id="nav-toggle" >
   
 
    <aside class="side-bar">
    <nav style="display:flex; justify-content:space-between; align-items:center; background-color:#fff; padding:.8rem 1.2rem; width:100%;">
        <div id="menu" onclick="toggleMenu()"><i class="fa fa-bars fa-2x"></i></div>
            
            <?php
                        if(isset($_SESSION['userid'])){
                            echo '<div><a href="" style="color:#333; vertical-align:middle;">
                            <i class="fa fa-user" style="margin:0 .2rem .1rem 0;"></i>
                            Účet</a></div>';

                            echo '<div><a href="_inc/logout.php" style="color:#333; vertical-align:middle;">
                            <i class="fa fa-sign-out-alt" style="margin:0 .2rem 0rem 0;"></i>
                            Odhlásiť sa</a></div>';

                            
                        }else{
                            echo '<div><a href="login.php" style="color:#333;">
                    <i class="fa fa-user" style="margin-right: .4rem;style="color:#333;"></i>
                    Prihlásiť sa</a></div>';
                        }
                    ?>
        </nav>
        <ul>
            <li>
            <a href="index.php"><i class="fas fa-home fa-lg"></i></a>
                <a class="li-level-0" href="">Športová výživa<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a> 
                <ul class="level-0">
                    <li>
                        <a class="level-1" href="">Proteíny<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a>
                        <ul >
                            <li><a href="kategorie.php?subc_id=1">Proteínové izoláty</a></li>
                            <li><a href="kategorie.php?subc_id=2">Proteínové hydrolizáty</a></li>
                            <li><a href="kategorie.php?subc_id=3">Proteínové koncentráty</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a class="level-1" href="">Gainery a sacharidy<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a>
                        <ul >
                            <li><a href="kategorie.php?subc_id=4">Gainery</a></li>
                            <li><a href="kategorie.php?subc_id=5">Pomalé sacharidy</a></li>
                            <li><a href="kategorie.php?subc_id=6">Rýchle sacharidy</a></li>
                         
                        </ul>
                    </li>
                    
                    <li>
                        <a class="level-1" href="">Vitamíny<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a>
                        <ul >
                            <li><a href="kategorie.php?subc_id=7">Multivitamín</a></li>
                            <li><a href="kategorie.php?subc_id=8">Vitamín C</a></li>
                            <li><a href="kategorie.php?subc_id=9">Ostatné</a></li>  

                        </ul>
                    </li>

                    <li>
                        <a class="level-1" href="">Zdravé tuky a minerály<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a>
                        <ul >
                            
                            <li><a href="kategorie.php?subc_id=10">Omega-3</a></li>
                            <li><a href="kategorie.php?subc_id=11">Magnézium</a></li>
                            <li><a href="kategorie.php?subc_id=12">Zinok</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="level-1" href="">Ostatné<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a>
                        <ul >
                            <li><a href="kategorie.php?subc_id=13">Kreatín</a></li>
                            <li><a href="kategorie.php?subc_id=14">BCAA</a></li>
                            <li><a href="kategorie.php?subc_id=15">Spaľovače tukov</a></li>

                        </ul>
                    </li>
                </ul>
            </li>
            
            <li>
                <a class="li-level-0" href="">Zdravé potraviny<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a>
                <ul class="level-0">
                    <li>
                        <a class="level-1" href="">Fitness jedlo<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a>
                        <ul >
                            <li><a href="kategorie.php?subc_id=16">Orechové maslá</a></li>
                            <li><a href="kategorie.php?subc_id=17">Nátierky</a></li>
                            <li><a href="kategorie.php?subc_id=18">Orechy a semeinka</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a class="level-1" href="">Cereálie<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a>
                        <ul >
                            <li><a href="kategorie.php?subc_id=19">Cereálie a musli</a></li>
                            <li><a href="kategorie.php?subc_id=20">Ryžové kaše</a></li>
                            <li><a href="kategorie.php?subc_id=21">Ovsené vločky</a></li>
                         
                        </ul>
                    </li>
                    
                    <li>
                        <a class="level-1" href="">Prísady na varenie<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a>
                        <ul >
                            <li><a href="kategorie.php?subc_id=22">Oleje</a></li>
                            <li><a href="kategorie.php?subc_id=23">Zmesi</a></li>
                            <li><a href="kategorie.php?subc_id=24">Múky</a></li>   

                        </ul>
                    </li>

                    <li>
                        <a class="level-1" href="">Snacky<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a>
                        <ul >
                            
                            <li><a href="kategorie.php?subc_id=25">Proteinové tyčinky</a></li>
                            <li><a href="kategorie.php?subc_id=26">Proteinové cookies</a></li>
                            <li><a href="kategorie.php?subc_id=27">Sušené mäso</a></li>   
                        </ul>
                    </li>

                    <li>
                        <a class="level-1" href="">Nápoje<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a>
                        <ul >
                            <li><a href="kategorie.php?subc_id=28">Iontové nápoje</a></li>
                            <li><a href="kategorie.php?subc_id=29">RTD nápoje</a></li>
                            <li><a href="kategorie.php?subc_id=30">Šťavy</a></li>   

                        </ul>
                    </li>
                </ul>            
            </li>
            
            <li>
                <a class="li-level-0" href="">Fitness oblečenie<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a>
                <ul class="level-0">
                    <li>
                        <a class="level-1" href="">Muži<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a>
                        <ul >
                        
                            <li><a href="kategorie.php?subc_id=31">Tričká a tielka</a></li>
                            <li><a href="kategorie.php?subc_id=32">Mikiny</a></li>
                            <li><a href="kategorie.php?subc_id=33">Šortky</a></li>
                            <li><a href="kategorie.php?subc_id=34">Tepláky</a></li>
                            <li><a href="kategorie.php?subc_id=36">Funkčné oblečenie</a></li>
                            <li><a href="kategorie.php?subc_id=37">Spodné prádlo</a></li>
                            <li><a href="kategorie.php?subc_id=39">Šiltovky a čiapky</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a class="level-1" href="">Ženy<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a>
                        <ul >
                        
                            <li><a href="kategorie.php?subc_id=31">Tričká a tielka</a></li>
                            <li><a href="kategorie.php?subc_id=32">Mikiny</a></li>
                            <li><a href="kategorie.php?subc_id=33">Šortky</a></li>
                            <li><a href="kategorie.php?subc_id=35">Legíny a tepláky</a></li>
                            <li><a href="kategorie.php?subc_id=36">Funkčné oblečenie</a></li>
                            <li><a href="kategorie.php?subc_id=38">Športové prádlo</a></li>
                            <li><a href="kategorie.php?subc_id=39">Šiltovky a čiapky</a></li>
                        </ul>
                    </li>
                    
                
                </ul>
            </li>
            
            <li>
                <a class="li-level-0" href="">Doplnky<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a>
                <ul class="level-0">
                    <li>
                        <a class="level-1" href="">Domáci tréning<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a>
                        <ul>
                            <li><a href="kategorie.php?subc_id=40">Švihadlá</a></li>
                            <li><a href="kategorie.php?subc_id=41">Podložky na cvičenie</a></li>
                            <li><a href="kategorie.php?subc_id=42">Fitlopty</a></li>
                        </ul>
                    </li>
                     
                    <li>
                        <a class="level-1" href="">Príslušenstvo<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a>
                        <ul>
                            
                            <li><a href="kategorie.php?subc_id=43">Opasky na cvičenie</a></li>
                            <li><a href="kategorie.php?subc_id=44">Šejkre</a></li>
                            <li><a href="kategorie.php?subc_id=45">Trhačky</a></li>
                        </ul>
                    </li>
                        
                    <li>
                        <a class="level-1" href="">Ostatné<span class="toggle"><i class="fa fa-minus fa-plus "></i></span></a>
                        <ul>
                            
                            <li><a href="kategorie.php?subc_id=46">CBD</a></li>
                            <li><a href="kategorie.php?subc_id=47">Blog</a></li>
                            <li><a href="kategorie.php?subc_id=48">Značky</a></li>   
                        </ul>
                    </li> 
                
                </ul>
            </li>
        </ul>
    </aside>
</div>