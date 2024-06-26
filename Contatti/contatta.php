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
    <link rel="stylesheet" href="styles/contatta.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
   
    <title>CONTATTACI</title>
</head>
<body>
    
    <!--sezione-->

    <section id="contact-section">
        <div class="container">
            <h2>CONTATTACI</h2>
            <p></p>
            <div class="contact-form">

                <div class="wrapper">
                    <i class="fa fa-map-marker"></i> 
                    <span class="form-info"> Roma, via dello Scalo S. Lorenzo 82 </span> <br>
                    <i class="fa fa-phone"></i> 
                    <span class="form-info"> +393291231009 </span><br>
                    <i class="fa fa-envelope "></i> <span class="form-info"> almasport2k24@libero.it</span><br>
                </div>

                <!--seconda grid-->

                <form action="contatta.php" method="POST">
                <?php 
            
             include("../Connessione/config.php");
             if(isset($_POST['submit'])){
                   echo "<div class='message'>
                     <p>Il tuo messaggio è stato inviato correttamente</p>
                      </div> <br>";
                    echo "<a class=button href=../HomePage/home.php> Torna alla home</a>"; 

             }else{

            ?>
                    <input type="text" placeholder="NOME" required>
                    <input type="text" placeholder="COGNOME" required>
                    <input type="email" placeholder="EMAIL" required>
                    <input type="text" placeholder="OGGETTO MESSAGGIO" minlength="3" required>

                    <textarea name="message" placeholder="invia messaggio" cols="40" rows="20" minlength="10" required></textarea>

                    <input type="submit" name="submit" class="submit" value="Invia Ora">  
                </form>


            </div>
            <?php } ?>

        </div>
    </section>

    
</body>
</html>
