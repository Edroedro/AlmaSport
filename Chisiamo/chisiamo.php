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
    <link rel="stylesheet" href="styles/chisiamo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" >


    <script src="../Javascript/script_home.js"></script>
    <title>Sandro & Edoardo</title>
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
            <a href="chisiamo.php"><i class='bx bx-info-circle'></i></a>
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
                <li><a href="../Sapienza/sapienza.php">Sapienza</a></li>
                <li><a href="chisiamo.php">Perché Sceglierci?</a></li>
                <li><a href="../Contatti/contatta.php">Contatti</a></li>
            </ul>
        </div>
        <section class="home">
        </section>
        <div class="container_grande">
            <div class="titolo">
                Chi siamo?
            </div>
            <div class="container_piccolo">
                <div class="testo">AlmaSport è il tuo compagno di fitness pensato da studenti per gli studenti!<br>
                    Creato da due studenti di Ingegneria Informatica presso l'Università di Roma, AlmaSport è nato con l'idea di rendere l'esperienza di fitness e l'allenamento degli studenti più semplice e accessibile possibile.<br>
                    In un mondo in cui gli impegni accademici possono facilmente prendere il sopravvento, abbiamo creato AlmaSport per fornire agli studenti uno strumento completo per prendersi cura del proprio benessere fisico e mentale.<br>
                    Perché siamo fortemente convinti che <span class="scritta">"Mens sana in corpore sano"</span> non sia solo una frase fatta, ma un principio fondamentale per una vita equilibrata. Diversi studi hanno dimostrato che gli studenti fisicamente attivi presentano maggiore attenzione durante le lezioni e livelli più bassi di ansia rispetto agli studenti sedentari.<br>
                    Noi di AlmaSport crediamo in tutto ciò e siamo fieri di aiutare più studenti possibili nella loro carriera universitaria e atletica,<br> ma soprattutto renderci utili per la loro salute fisica e mentale!<br>
                    Ti abbiamo convinto? Comincia subito ad allenarti con noi! Se sei uno studente Sapienza hai una prova gratuita che ti aspetta!
        
                </div>
                <div class="prova">
                    <a href="../Accedi/prova.php"><button class="button">PROVA!</button></a>
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
                        <li><a href="chisiamo.php">Chi Siamo</a></li>
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