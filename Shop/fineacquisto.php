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
    <link rel="stylesheet" href="fine.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
    <title>Fine Acquisto</title>
</head>
<body>
    <div class="container">
        <div id="popup" class="popup">
            <div class="popup-content">
                <p>Da domani potrai andare nella sede scelta per procedere con il pagamento e ricevere l'ordine.<br>Potrai mostrare in cassa il codice sconto se lo possiedi!</p>
                <a href="../Shop/almaShop.php"><button id="confirmLogout">Ritorna nello shop</button></a>
            </div>
        </div>

    </div>
    <script src="../Javascript/logout.js"></script>


    
</body>
</html>