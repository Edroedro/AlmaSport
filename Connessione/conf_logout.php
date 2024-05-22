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
    <link rel="stylesheet" href="styles/logout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
    <title>Logout</title>
</head>
<body>
    <div class="container">
        <div id="popup" class="popup">
            <button id="logoutButton"><i class="fas fa-sign-out-alt"></i> Logout</button>
            <div class="popup-content">
                <img src="sfondi/logoutimg.jpg">
                <p>Vuoi davvero fare il logout?</p>
                <a href="../Connessione/logout.php"><button id="confirmLogout">Sì</button></a>
                <?php echo "<a href='Javascript:self.history.back()'>"?>  
                <button id="cancelLogout">No</button></a>

            </div>
        </div>

    </div>
    <script src="../Javascript/logout.js"></script>


    
</body>
</html>