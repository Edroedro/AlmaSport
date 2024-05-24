<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <title>Login</title>
</head>
<body>

    <section class="area-login">
   <div class="login">
   <?php 
             
             include("../Connessione/config.php");
             if(isset($_POST['submit'])){
                $matricola = mysqli_real_escape_string($conn,$_POST['Matricola']);
                $password = mysqli_real_escape_string($conn,$_POST['Password']);
    
                $result = mysqli_query($conn,"SELECT * FROM registrazione WHERE Matricola='$matricola' AND Password='$password'") or die("Select Error");
                $row = mysqli_fetch_assoc($result);
    
                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Matricola'];
                    $_SESSION['Password'] = $row['Password'];
                    $_SESSION['Nome'] = $row['Nome'];
                    header("Location: ../Homepage/home.php");
                    exit();

               }else{
                   echo "<div class='message'>
                     <p>Matricola o Password errata</p>
                      </div> <br>";
                    echo "<a href='Javascript:self.history.back()'button class='backbtn'>Torna indietro</a>";
        
               }

             }else{

            ?>


    <div>
       <img src="sfondi/AlmaSportLogo.jpeg"> 
   
    </div>

    <form name="login" action="login.php" method="POST">

        <input type="text" name="Matricola" placeholder="Matricola" size="35" maxlength="35" required>
        <input type="password" name="Password" placeholder="Password" minlength="6" size="20" maxlength="20" required>
        <input type="submit" name="submit" class="button" value="LOGIN">  
        <p> Non hai un account? <a href="registrazione.php"> CREA  ACCOUNT   </a> </p>
    </form>
   </div>
   <?php } ?>

    </section>  
    
</body>
</html>

