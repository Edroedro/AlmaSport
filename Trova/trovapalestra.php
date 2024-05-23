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
    <link rel="stylesheet" href="styles/trovapalestra.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" >


    <script src="../Javascript/script_home.js"></script>
    <title>Trova una Palestra</title>
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
            <a href="trovapalestra.php"><i class='bx bx-dumbbell' ></i></a>
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
                <li><a href="trovapalestra.php">Trova una Palestra</a></li>
                <li><a href="../Sapienza/sapienza.php">Sapienza</a></li>
                <li><a href="../Chisiamo/chisiamo.php">Perché Sceglierci?</a></li>
                <li><a href="../Contatti/contatta.php">Contatti</a></li>
            </ul>
        </div>
        <section class="home">
        </section>
        <div class="container_grande">
            <div class="titolo">
                Palestre
            </div>
            <div class="container_piccolo">    
                <nav class="testo">In questa pagina troverai un riassunto di tutte le palestre con cui collaboriamo e i loro orari!<br></nav>
                <u2>
                    <li>
                        <h1>CalcioTech-Training Center</h1>
                        <p>Luogo: Via delle Tre Fontane</p>
                        <p>Orario: dalle 18 alle 19:30</p>
                    </li>
                    <li>
                        <h1>Pallavolo Roma Center </h1>
                        <p>Luogo: Via Flaminia</p>
                        <p>Orario: Martedì dalle 15 alle 16:30, Giovedì dalle 19 alle 20:30</p>
                    </li>
                    <li class="palestra">
                        <h1>Tennis Club Roma</h1>
                        <p>Luogo: Viale delle Olimpiadi</p>
                        <p>Orario: Mercoledì dalle 15 alle 16:30, Sabato dalle 14 alle 15:30</p>
                    </li>
                    <li class="palestra">
                        <h1>Padel Prestige Club</h1>
                        <p>Luogo: Via di Grotta Perfetta</p>
                        <p>Orario: Mercoledì dalle 15 alle 16:30, Sabato dalle 14 alle 15:30</p>
                    </li>      
                    <li class="palestra">
                        <h1>Iron Forge Fitness Club</h1>
                        <p>Luogo: Via Cola di Rienzo</p>
                        <p>Orario: da Lunedì a Venerdì dalle 8 alle 22</p>
                    </li>      
                    <li class="palestra">
                        <h1>Roma Combat Sports Center</h1>
                        <p>Luogo: Via Ostiense</p>
                        <p>Orario: Martedì dalle 19 alle 20:30, Giovedì dalle 16 alle 17:30</p>
                    </li>
                </u2>
                <nav class="testo2">Possiedi una palestra o un luogo idoneo per uno dei nostri corsi e vuoi collaborare con noi?
                    <a href="../Contatti/contatta.php">Contattaci subito! </a></nav>
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