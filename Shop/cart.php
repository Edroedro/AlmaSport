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
    <link rel="stylesheet" href="styles/cart.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel = "icona" type = "immagine/png" sizes = "32x32" href = "sfondi/favicon-32x32.png">
    
    <title>ALMASHOP</title>
</head>
<body>
    <header>
        <div class="nav container">
            <a href="almaShop.php" class="logo"><span>ALMA</span>SHOP</a>
            <i class='bx bxs-cart' id="cart-icon"></i>

            <div class="cart">
                <h2 class="cart-title">Il tuo carrello</h2>
                <div class="cart-content">
                        <div class="cart-box">
                            <img src="sfondi/proteine21.jpg" alt="" class="cart-img">
                            <div class="detail-box">
                                <div class="cart-product-title">Proteine in polvere</div>
                                <div class="cart-price">18.00€</div>
                                <input type="number" value="1" class="cart-quantity">   
                            </div>
                            <i class='bx bxs-trash cart-remove' ></i>
                    </div>
                </div>

                <div class="total">
                    <div class="total-title">Totale</div>
                    <div class="total-price">0.00€</div>
                </div>
                <button type="button" class="btn-buy">Compra</button>

                <i class='bx bx-x' id="cart-close"></i>
                </div>
            </div>


        </div>
    </header>

    <section class="shop-container">
        <h2 class="section-title"> Prodotti</h2>
        <div class="shop-content">

            <div class="product-box">
                <img src="sfondi/proteine21.jpg" class="product-image">
                <h2 class="product-title">Proteine in polvere</h2>
                <span class="product-price">18.00€</span>
                <i class='bx bxs-cart add-cart'></i>


            </div>
            <div class="product-box">
                <img src="sfondi/vitamine2.jpg" class="product-image">
                <h2 class="product-title">Vitamine in polvere</h2>
                <span class="product-price">12.00€</span>
                <i class='bx bxs-cart add-cart'></i>


            </div>
            <div class="product-box">
                <img src="sfondi/drink3.jpg" class="product-image">
                <h2 class="product-title">Energy drink</h2>
                <span class="product-price">2.00€</span>
                <i class='bx bxs-cart add-cart'></i>


            </div>
            <div class="product-box">
                <img src="sfondi/barrette2.jpg" class="product-image">
                <h2 class="product-title">Barrette proteiche</h2>
                <span class="product-price">10.00€</span>
                <i class='bx bxs-cart add-cart'></i>


            </div>
        </div>

    </section>
    <script src="../Javascript/cart.js"></script>
    
</body>
</html>