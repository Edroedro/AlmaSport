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
    <title>Carrello</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>
    
<div class="container">
    <div class="checkoutLayout">
        
        <div class="returnCart">
            <a href="cart.php">Continua a comprare</a>
            <h1>Prodotti nel carrello</h1>
            <div class="list">
                <div class="item">
                    <img src="images/1.webp">
                    <div class="info">
                        <div class="name">Proteine in Polvere</div>
                        <div class="price">22€</div>
                    </div>
                    <div class="quantity">2</div>
                    <div class="returnPrice">44€</div>
                </div>
            </div>
        </div>

        <div class="right">
            <h1>Checkout</h1>

            <form class="form" action="fineacquisto.php" method="POST">
    
                <div class="group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" required>
                </div>
    
                <div class="group">
                    <label for="matricola">Matricola</label>
                    <input type="number" name="matricola" id="matricola" required>
                </div>
    
                <div class="group">
                    <label for="palestra">Palestra</label>
                    <select name="palestra" id="palestra" required>
                        <option value="">Sede del ritiro</option>
                        <option value="Calcio Tech Training Center">Calcio Tech Training Center</option>
                        <option value="Pallavolo Roma Center">Pallavolo Roma Center</option>
                        <option value="Tennis Club Roma">Tennis Club Roma</option>
                        <option value="Padel Prestige Club">Padel Prestige Club</option>
                        <option value="Iron Forge Fitness Club">Iron Forge Fitness Club</option>
                        <option value="Roma Combat Sport Center">Roma Combat Sport Center</option>
                    </select>
                </div>
                <div class="return">
                    <div class="row">
                        <div>Quantità totale:</div>
                        <div class="totalQuantity">70</div>
                    </div>
                    <div class="row">
                        <div>Prezzo totale</div>
                        <div class="totalPrice">69€</div>
                    </div>
                </div>
                <button type="submit" name="submit" id="buttonCheckout" class="buttonCheckout">Checkout</button>
            </form>
        </div> 
    </div>
</div>
<script src="checkout.js"></script>
</body>
</html>
