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
    <link rel="stylesheet" href="styles/calcio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" >


    <script src="../Javascript/script_home.js"></script>
    <title>Calcio</title>
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
                <li><a href="../Chisiamo/chisiamo.php">Perché Sceglierci?</a></li>
                <li><a href="../Contatti/contatta.php">Contatti</a></li>
            </ul>
        </div>
        <section class="home">
        </section>
        <div class="container_grande">
            <div class="titolo">
                CALCIO
            </div>    
            <div class="container_piccolo">
                <div class="immagine"><img src="sfondi/allenamento_calcio.jpg" width="450px", height="450px"></div>
                <div class="testo1">Sei uno studente universitario sempre alla ricerca di nuove avventure e sfide? Hai mai considerato il calcio come una possibilità per metterti alla prova e divertirti allo stesso tempo? 
                    Allenarsi a calcio non è solo un modo per mantenersi in forma fisica, ma anche mentale. Ti sfida a superare i tuoi limiti, a migliorare le tue abilità e a concentrarti sulle tue obiettivi. 
                    È un'opportunità per sviluppare le tue capacità di problem-solving e strategia, fondamentali anche nella vita accademica e professionale. Inoltre, il calcio è un ottimo modo per fare nuove amicizie e costruire relazioni durature. 
                    I compagni di squadra diventano come una seconda famiglia, pronti a sostenerti dentro e fuori dal campo Che tu sia un appassionato di calcio o semplicemente desideri provare qualcosa di nuovo, l'esperienza di giocare a calcio all'università è un'avventura che non vorrai perderti. 
                    Corri verso il campo e inizia il tuo viaggio nel mondo affascinante del calcio universitario!
            </div>
            <div class="orari">
                <h1> GLI ALLENAMENTI SI SVOLGONO:</h1>
                <ul>
                    <li>Lunedì:Ore 18:00 - 19:30 presso CalcioTech Training Center in Via delle Tre Fontane</li>
                    <li>Mercoledì:Ore 18:00 - 19:30 presso CalcioTech Training Center in Via delle Tre Fontane</li>
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