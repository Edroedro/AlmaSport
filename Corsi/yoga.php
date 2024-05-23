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
    <link rel="stylesheet" href="styles/yoga.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" >


    <script src="../Javascript/script_home.js"></script>
    <title>Yoga</title>
</head>
<body>
      <nav>
        <div class="logo">
            <a href="../Homepage/home.php">
                <img src="sfondi/AlmaSportLogo.jpeg" width="100px" height="100px">
            </a>
        </div>
        <input type="checkbox" id="more">
        <label for="more" class="morebtn">
            <a href="../Trova/trovapalestra.php"><i class='bx bx-dumbbell' ></i></a>
            <a href="../Sapienza/sapienza.php"><i class='bx bxs-graduation' ></i>  </a>
            <a href="../Chisiamo/chisiamo.php"><i class='bx bx-info-circle'></i></a>
            <a href="../Contatti/contatta.php"><i class='bx bxs-contact' ></i></a>
        </label>
        <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class='fa fa-bars' style="font-size: 36px;"></i>            
            </label>
            <ul>
                <li>
                    <a href="">CORSI</a>    
                    <input type="checkbox" id="corsi">
                    <label for="corsi" class="corsibtn">
                        <i class='bx bx-dots-vertical-rounded'style="font: size 24px;" ></i>
                    </label>
                    
                    <ul class="submenu">
                        <li><a href="calcio.php">Calcio</a></li>
                        <li><a href="pallavolo.php">Pallavolo</a></li>
                        <li><a href="tennis.php">Tennis</a></li>
                        <li><a href="padel.php">Padel</a></li>
                        <li><a href="pesi.php">Pesi</a></li>
                        <li><a href="yoga.php">Yoga</a></li>
                        <li><a href="zumba.php">Zumba</a></li>
                        <li><a href="boxe.php">Boxe </a></li></li>   
                    </ul>
                </li>
                
                <li> <a href="../Shop/almaShop.php">SHOP</a></li>
                <?php if ($logged): ?>

                <li><a href="../Connessione/conf_logout.php"><?php echo $nome; ?></a></li>
            <?php else: ?>
                <li><a href="../Accedi/login.php">ACCEDI</a></li>
            <?php endif; ?>
            </ul>
        </nav>
        <div class="barradown">
            <ul>
                <li><a href="../Trova/trovapalestra.php">Trova una Palestra</a></li>
                <li><a href="../Sapienza/sapienza.php">Sapienza</a></li>
                <li><a href="../Sapienza/sapienza.php">Perché Sceglierci?</a></li>
                <li><a href="../Contatti/contatta.php">Contatti</a></li>
            </ul>
        </div>
        <section class="home">
        </section>
        <div class="container_grande">
            <div class="titolo">
                YOGA
            </div>    
            <div class="container_piccolo">
                <div class="immagine"><img src="sfondi/allenamento_yoga.png" width="450px", height="450px"></div>
                <div class="testo1">Immagina di ritrovarti su un tappetino, circondato da una calma rassicurante, mentre ti immergi in una serie di posizioni fluide e respiri profondi. 
                    Gli studi universitari possono essere impegnativi e stressanti, ma lo yoga offre uno spazio di calma e riflessione. Imparerai a respirare consapevolmente, a rilassare la mente e a ridurre lo stress accumulato dalle pressioni accademiche e quotidiane. 
                    Lo yoga non è solo una pratica di meditazione, ma anche un modo efficace per migliorare la tua flessibilità e forza. Attraverso una serie di pose e movimenti controllati, allungherai i muscoli, rafforzerai il corpo e migliorerai la tua postura. 
                    Lo yoga ti insegnerà a connetterti con te stesso, a osservare i tuoi pensieri senza giudizio e a trovare equilibrio e serenità anche nelle situazioni più turbolente. Migliorerai la tua consapevolezza, la tua concentrazione e la tua capacità di gestire le emozioni. o yoga è più di una pratica fisica, è un viaggio di auto-esplorazione e trasformazione. 
                    Attraverso la meditazione, l'auto-riflessione e la connessione con il tuo respiro interiore, potrai scoprire chi sei veramente e trovare il tuo centro di pace e equilibrio.
            </div>
            <div class="orari">
                <h1> GLI ALLENAMENTI SI SVOLGONO:</h1>
                <ul>
                    <li>Da Lunedì a Venerdì presso Iron Forge Fitness Club in Via Cola di Rienzo</li>
                </ul>
            </div>
        </div>
        <footer>
            <div class="footer">
                <div class="social">
                    <a href="https://www.facebook.com/SapienzaRoma/?locale=it_IT"><i class="ri-facebook-circle-fill"></i></a>
                    <a href="https://www.instagram.com/sapienzaroma/"><i class="ri-instagram-line"></i></a>
                    <a href="https://twitter.com/SapienzaRoma"><i class="ri-twitter-x-line"></i></a>
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="ri-youtube-fill"></i></a>
                </div>
                <div class="footer-txt">
                    <ul>
                        <li><a href="../Homepage/home.php">Home</a></li>
                        <li><a href="../Chisiamo/chisiamo.php">Chi Siamo</a></li>
                        <li><a href="../Sapienza/sapienza.php">Affiliazione</a></li>
                        <li><a href="../Contatti/contatta.php">Contattaci</a></li>
                    </ul>
                </div>
                <div class="copyright">
                    <p>Copyright &copy;2024 AlmaSport, un progetto registrato in Italia, ideato da <span class="nomi">Sandro & Edoardo</span> il cui indirizzo registrato è Edificio Marco Polo</p>
                </div>
                
            </div>
        </footer>
    

</body>
</html>