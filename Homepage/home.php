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
    <link rel="stylesheet" href="styles/stile4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" >


    <script src="../Javascript/script_home.js"></script>
    <title>AlmaSport</title>
</head>
<body>
      <nav>
        <div class="logo">
            <img src="sfondi/AlmaSportLogo.jpeg" width="100px" height="100px">
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
                        <li><a href="../Corsi/calcio.php">Calcio</a></li>
                        <li><a href="../Corsi/pallavolo.php">Pallavolo</a></li>
                        <li><a href="../Corsi/tennis.php">Tennis</a></li>
                        <li><a href="../Corsi/padel.php">Padel</a></li>
                        <li><a href="../Corsi/pesi.php">Pesi</a></li>
                        <li><a href="../Corsi/yoga.php">Yoga</a></li>
                        <li><a href="../Corsi/zumba.php">Zumba</a></li>
                        <li><a href="../Corsi/boxe.php">Boxe </a></li></li>   
                    </ul>
                </li>
                
                <li> <a href="">SHOP</a></li>
                <?php if ($logged): ?>

                <li><a href="../Connessione/logout.php"><?php echo $nome; ?></a></li>
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
            <div class="home-text">
                <h1>INIZIA AD ALLENARTI ANCHE TU!</h1>
                <p>Sei uno studente Sapienza? Prova gratuitamente uno sport o un corso in una delle nostre palestre convenzionate senza alcun obbligo di abbonamento! </p>
                <a href="../Accedi/prova.php" ><button class="provabtn">PROVA</button> </a>
            </div>
        </section>
        <div class="container_grande">
            <div class="titolo">
                AlmaSport
            </div>    
            <div class="container_piccolo">
                <div class="immagine"><img src="sfondi/imgSapienza.jpg" width="400px", height="400px"></div>
                <div class="testo1">AlmaSport è un servizio nato dalla voglia di due studenti di rendere la vita sportiva dei nostri colleghi più facile e accessibile. <br>
                 Naviga attraverso la nostra selezione di corsi per trovare le sessioni che si adattano al tuo programma accademico e alla tua routine quotidiana, indipendentemente dal livello di esperienza o dalle preferenze di allenamento.<br>
                  Che tu stia cercando di aumentare la forza, migliorare la flessibilità o semplicemente rilassarti dopo una lunga giornata di studio, troverai un'ampia selezione di opportunità per farlo con noi, dai corsi di fitness tradizionali come yoga e pesi agli sport di squadra come calcio e pallavolo!<br>
                <div class="sceglierci">
                <a href="../Chisiamo/chisiamo.php"><button class="button_more">Scopri di più!</button></a>
                </div>
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
                        <li><a href="home.php">Home</a></li>
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