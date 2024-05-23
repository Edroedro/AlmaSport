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
                $nome= $_POST['nome'];
                  echo "<div class='message'>  
        <p> Ciao $nome la prova per $corso è stata prenotata correttamente!</p>
        <p> Presentati nella palestra più vicina a te per iniziare la prova! <p>
         
                     </div> <br>";
                   echo "<a class=button href=../Homepage/home.php> Torna alla Home </a>";

            }else{

           ?>
     
             <input type="text" name="nome" placeholder="NOME" required>
             <input type="text" name="cognome" placeholder="COGNOME" required>
             <input type="tel" inputmode="numeric" pattern="\d{7,}" name="matricola" placeholder="MATRICOLA da 7 numeri" required>
             <input type="email" name="email" placeholder="EMAIL" required>
             <input type="number" name="telefono" placeholder="TELEFONO" required>
             
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