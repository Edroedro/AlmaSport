<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/stile_login.css">
    <title>PaginaLogin</title>
</head>
<body>

    <section class="area-login">
   <div class="login">
   <?php 
             
             include("config.php");
             if(isset($_POST['submit'])){
               $email = mysqli_real_escape_string($con,$_POST['Email']);
               $password = mysqli_real_escape_string($con,$_POST['Password']);

               $result = mysqli_query($con,"SELECT * FROM registrazione WHERE Email='$email' AND Password='$password' ") or die("Select Error");
               $row = mysqli_fetch_assoc($result);

               if(is_array($row) && !empty($row)){
                   $_SESSION['valid'] = $row['Email'];
                   $_SESSION['nome'] = $row['Nome'];
                   $_SESSION['cognome'] = $row['Cognome'];
                   $_SESSION['matricola'] = $row['Matricola'];
                   $_SESSION['telefono'] = $row['Telefono'];
                   $_SESSION['password'] = $row['Password'];
                   $_SESSION['status'] = $row['status'];
               }else{
                   echo "<div class='message'>
                     <p>Wrong Username or Password</p>
                      </div> <br>";
                  echo "<a href='login.php'><button class='btn'>Go Back</button>";
        
               }
               if(isset($_SESSION['valid'])){
                   header("Location: test4.php");
               }
             }else{

            ?>


    <div>
       <img src="sfondi/Upscales.ai_1713281765743.jpeg"> 
   
    </div>

    <form name="login" action="login.php" method="POST">

        <input type="text" name="email" placeholder="Email o Matricola" size="35" maxlength="35" required>
        <input type="password" name="password" placeholder="Password" minlength="6" size="20" maxlength="20" required>
        <input type="submit" class="button" value="LOGIN">  
        </form>
        <p> Non hai un account? <a href="form_crea_account.html"> CREA  ACCOUNT   </a> </p>
        <p>  <a href="form_reimpostapas.html"> PASSWORD DIMENTICATA?</a> </p>
    </form>
   </div>
   <?php } ?>

    </section>  
    
</body>
</html>