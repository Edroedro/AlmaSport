<?php
    session_start();
    include("../Connessione/config.php");
    $logged = isset($_SESSION['valid']);
    $nome = $logged ? $_SESSION['Nome'] : '';  
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/shop.css">
    <title>Shop</title>

    <!--box-icons-link-->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!--remix-icons-link-->
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>


    <!--header-->

    <header> 

        <a href="../Homepage/home.php" class="logo"> ALMASHOP</a>

        <ul class="navlist">
            <li><a href="cart.php">Shop </a></li>
            <li><a href="../Sapienza/sapienza.php">Sconti </a></li>
            <li><a href="../Contatti/contatta.php">Contatti </a></li>
        </ul>
        <div class="nav-right">
            <a href=""><i class="ri-search-line"></i></a> 
            <a href="cart.php"><i class="ri-shopping-cart-line"></i></a>

            <?php if ($logged): ?>
                <a href="../Connessione/conf_logout.php"><?php echo $nome; ?></a>
            <?php else: ?>
                <a href="../Accedi/login.php"><i class="ri-user-line"></i></a> 
            <?php endif; ?>
            
            <div class="bx bx-menu" id="menu-icon"></div>

        </div>
    </header>


    <!--home-->
    <section class="home">
        <div class="home-text" data-aos="fade-up">
            <h6>Welcome to Almashop!</h6>
            <h1>Dedicato agli studenti <br> Approfitta adesso!</h1>
            <p>Iscriviti e potrai usufruire subito dell'esclusivo codice sconto!</p>
            <a href="cart.php" class="btn">Acquista ora!
                <i class="ri-arrow-right-line"></i>
            </a>      
        </div>
    </section>

    <!--all-products-->
    <section class="n-products">
        <div class="center-text" data-aos="fade-down">
            <h2>TUTTI I PRODOTTI</h2>
        </div>
        <div class="n-content" data-aos="zoom-in">
            <div class="row">
                <div class="row-img">
                    <img src="sfondi/proteine.jpg">
                </div>
                <h3> Proteine in polvere </h3>
                <div class="stars">
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href="">4.5/5</a>
                </div>
                <div class="row-in">
                    <div class="row-left">
                        <a href="">
                            Aggiungi al carrello
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                   <div class="row-right">
                    <h6>18.00€</h6>
                   </div> 
                </div>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="sfondi/proteine2.jpg">
                </div>
                <h3> Proteine in polvere </h3>
                <div class="stars">
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href="">4.5/5</a>
                </div>
                <div class="row-in">
                    <div class="row-left">
                        <a href="">
                            Aggiungi al carrello
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                   <div class="row-right">
                    <h6>18.00€</h6>
                   </div> 
                </div>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="sfondi/proteine3.jpg">
                </div>
                <h3> Proteine in polvere </h3>
                <div class="stars">
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href="">4.5/5</a>
                </div>
                <div class="row-in">
                    <div class="row-left">
                        <a href="">
                            Aggiungi al carrello
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                   <div class="row-right">
                    <h6>18.00€</h6>
                   </div> 
                </div>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="sfondi/vitamine.jpg">
                </div>
                <h3> Vitamine in polvere </h3>
                <div class="stars">
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href="">4.5/5</a>
                </div>
                <div class="row-in">
                    <div class="row-left">
                        <a href="">
                            Aggiungi al carrello
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                   <div class="row-right">
                    <h6>12.00€</h6>
                   </div> 
                </div>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="sfondi/vitamine2.jpg">
                </div>
                <h3> Vitamine in polvere </h3>
                <div class="stars">
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href="">4.5/5</a>
                </div>
                <div class="row-in">
                    <div class="row-left">
                        <a href="">
                            Aggiungi al carrello
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                   <div class="row-right">
                    <h6>12.00€</h6>
                   </div> 
                </div>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="sfondi/vitamine3.jpg">
                </div>
                <h3> Vitamine in polvere </h3>
                <div class="stars">
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href="">4.5/5</a>
                </div>
                <div class="row-in">
                    <div class="row-left">
                        <a href="">
                            Aggiungi al carrello
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                   <div class="row-right">
                    <h6>12.00€</h6>
                   </div> 
                </div>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="sfondi/drink.jpg">
                </div>
                <h3> Energy drink </h3>
                <div class="stars">
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href="">4.5/5</a>
                </div>
                <div class="row-in">
                    <div class="row-left">
                        <a href="">
                            Aggiungi al carrello
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                   <div class="row-right">
                    <h6>2.00€</h6>
                   </div> 
                </div>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="sfondi/drink2.jpg">
                </div>
                <h3> Energy drink </h3>
                <div class="stars">
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href="">4.5/5</a>
                </div>
                <div class="row-in">
                    <div class="row-left">
                        <a href="">
                            Aggiungi al carrello
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                   <div class="row-right">
                    <h6>2.00€</h6>
                   </div> 
                </div>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="sfondi/drink3.jpg">
                </div>
                <h3> Energy drink </h3>
                <div class="stars">
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href="">4.5/5</a>
                </div>
                <div class="row-in">
                    <div class="row-left">
                        <a href="">
                            Aggiungi al carrello
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                   <div class="row-right">
                    <h6>2.00€</h6>
                   </div> 
                </div>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="sfondi/barrette.jpg">
                </div>
                <h3> barrette proteiche </h3>
                <div class="stars">
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href="">4.5/5</a>
                </div>
                <div class="row-in">
                    <div class="row-left">
                        <a href="">
                            Aggiungi al carrello
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                   <div class="row-right">
                    <h6>10.00€</h6>
                   </div> 
                </div>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="sfondi/barrette2.jpg">
                </div>
                <h3> Barrette proteiche </h3>
                <div class="stars">
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href="">4.5/5</a>
                </div>
                <div class="row-in">
                    <div class="row-left">
                        <a href="">
                            Aggiungi al carrello
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                   <div class="row-right">
                    <h6>10.00€</h6>
                   </div> 
                </div>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="sfondi/barrette3.jpg">
                </div>
                <h3> Barrette proteiche </h3>
                <div class="stars">
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href=""><i class="ri-star-s-fill"></i></a>
                    <a href="">4.5/5</a>
                </div>
                <div class="row-in">
                    <div class="row-left">
                        <a href="">
                            Aggiungi al carrello
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </div>
                   <div class="row-right">
                    <h6>10.00€</h6>
                   </div> 
                </div>
            </div>
        </div>
        <div class="n-btn" data-aos="zoom-in">

            <a href="" class="btn2">View all</a>
        </div>
    </section>
   
    <!--feature-->

    <section class="feature">
        <div class="feature-content" data-aos="fade-down">
            <div class="box">
                <div class="f-icon">
                    <i class="ri-bank-card-line"></i>
                </div>

                <div class="f-text">
                    <h3>Paga alla consegna</h3>

                    <p>Puoi pagare in ogni sede affiliata</p>
                </div>
            </div>

            <div class="box">
                <div class="f-icon">
                    <i class="ri-truck-fill"></i>
                </div>

                <div class="f-text">
                    <h3>Ti arriva in sede</h3>

                    <p>Il corriere lascia l'ordine in sede</p>
                </div>
            </div>

            <div class="box">
                <div class="f-icon">
                    <i class="ri-customer-service-fill"></i>
                </div>

                <div class="f-text">
                    <h3>Reso Gratuito</h3>

                    <p>Entro 30 giorni</p>
                </div>
            </div>
        </div>
    </section>

    <!--footer-->
    <section class="footer">
    
        <div class="footer-box">
            <h3> Social</h3>
            <div class="social">
                <a href="https://www.facebook.com/SapienzaRoma/?locale=it_IT"><i class="ri-facebook-circle-fill"></i></a>
                <a href="https://www.instagram.com/sapienzaroma/"><i class="ri-instagram-line"></i></a>
                <a href="https://twitter.com/SapienzaRoma"><i class="ri-twitter-fill"></i></a>
            </div>
        </div>
    </section>

    <!--custom js link-->
    <script src="../Javascript/shop.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 300, 
        duration:1450,

      });
    </script>

</body>
</html>