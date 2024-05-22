<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/prova.css">
    <title>EFFETTUA UNA PROVA</title>
</head>
<body>
    <section class="area-prova">
        <div class="prova">  
            <div class="title">PROVA GRATIS</div>
   
         <form method="POST">
         <?php 
            
            include("../Connessione/config.php");
            if(isset($_POST['submit'])){
                $corso =$_POST['Corso'];
                  echo "<div class='message'>
                    <p>Prova per $corso prenotata correttamente!</p>
                     </div> <br>";
                   echo "<a class=button href=../Homepage/home.php> Torna alla Home </a>";

            }else{

           ?>
     
             <input type="text" name="nome" placeholder="NOME" required>
             <input type="text" name="cognome" placeholder="COGNOME" required>
             <input type="text" name="matricola"  min="0" max="1234567" placeholder="MATRICOLA" required>
             <input type="text" name="email" placeholder="EMAIL" autofocus>
             <input type="text" name="cognome"  min="0" max="0123456789" placeholder="TELEFONO" required>
             
             <select  name="Corso" required>
                <option value="">Seleziona Corso</option>
                <option value="Calcio">Calcio</option>
                <option value="Basket">Basket</option>
                <option value="Pallavolo">Pallavolo</option>
                <option value="Tennis">Tennis</option>
                <option value="Boxe">Boxe</option>
                <option value="Sala Pesi">Sala Pesi</option>
                <option value="Zumba">Zumba</option>
            </select>

             <input type="submit" name="submit"  value="INVIA">
            
             </form>

             

        </div>
        <?php } ?>
    </section>
    
</body>
</html>