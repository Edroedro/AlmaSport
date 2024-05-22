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
    <link rel="stylesheet" href="styles/sapienza.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" >


    <script src="../Javascript/script_home.js"></script>
    <title>Affiliazione Sapienza</title>
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
            <a href="sapienza.php"><i class='bx bxs-graduation' ></i>  </a>
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
                <li><a href="sapienza.php">Sapienza</a></li>
                <li><a href="../Chisiamo/chisiamo.php">Perché Sceglierci?</a></li>
                <li><a href="../Contatti/contatta.php">Contatti</a></li>
            </ul>
        </div>
        <section class="home">
        </section>
        <div class="container_grande">
            <div class="titolo">
                Affiliazione Sapienza
            </div>
            <div class="container_piccolo">
                <div class="testo">Siamo lieti di annunciare il programma di Affiliazione esclusivo tra AlmaSport e l'Università Sapienza di Roma! <br>
                    Questa collaborazione ufficiale è nata per offrire agli studenti uno sconto esclusivo da utilizzare sia per i vari corsi sia per il nostro shop ufficiale AlmaShop! <br>
                    Unisciti a noi oggi e fai parte di una comunità inclusiva dedicata al tuo benessere e al tuo successo complessivo.<br>
                    Attraverso la nostra collaborazione ufficiale con l'Università Sapienza di Roma, offriamo agli studenti uno sconto esclusivo su una vasta gamma di corsi e servizi, oltre che sul nostro negozio online AlmaShop, ricco di attrezzature e accessori per il fitness di alta qualità.
                    Con la nostra affiliazione, puoi fare il primo passo verso una vita universitaria più equilibrata, energica e gratificante. <br>
                    Non perdere questa opportunità unica di vivere al massimo la tua esperienza universitaria con AlmaSport x Sapienza!<br>
                    Scopri subito lo sconto che ti aspetta a seconda del tuo status di studente! Che tu sia un semplice studente o <br>uno studente-lavoratore, questa affiliazione ti permetterà di risparmiare il più possibile!
                </div>
            </div>
            <?php if ($logged): ?>
                <?php echo "<div class='message'>
                 <p>Ciao $nome! Solo per questo periodo e unicamente per i membri registrati c'è il nuovo codice sconto </p><h2>30PLS</h2><p> che ti assicurerà il 30% di sconto sia per i prodotti dello shop, sia per i nostri corsi! </p></div>";?>
            <?php else: ?>
                <div class="registrati">
                <a href="../Accedi/registrazione.php"><button class="button">Ottieni il tuo sconto subito!</button></a>
                </div>
            <?php endif; ?>

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
                        <li><a href="sapienza.php">Affiliazione</a></li>
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