<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/form_registrazione.css">
    <title>REGISTRATI</title>
</head>
<body>
    <div class="container">
        <?php 
        

        include("config.php");
        if(isset($_POST['submit'])){

            $nome = $_POST['Nome'];
            $cognome = $_POST['Cognome'];
            $matricola = $_POST['Matricola'];
            $telefono = $_POST['Telefono'];
            $email = $_POST['Email'];
            $password = $_POST['Password'];
            $status = $_POST['status'];

            //verifica mail

            $verify_query =  mysqli_query($conn, "SELECT Email from registrazione WHERE Email = '$email' ");

            if(mysqli_num_rows($verify_query) != 0){

                echo "<div class = 'message'> 
                <p> Questa email è gia registrata</p> 
                </div> <br> ";

                echo "<a href= 'Javascript:self.history.back()'> <button class='btn' > Torna indietro</button>";
            } else{

                mysqli_query($conn, "INSERT  INTO registrazione ( Nome, Cognome, Matricola, Telefono, Email, Password, status) VALUES( '$nome' , '$cognome', '$matricola','$telefono',' $email', '$password', '$status')")
                or die("ERROR");
                echo "<div class = 'message'> 
                <p> Registrazione completata!</p> 
                </div> <br> ";

                echo "<a href= 'login.php'> <button class='btn' >Login </button>";
            }



        } else{ 

            ?>
            

        <div class="title">REGISTRAZIONE</div>

        <form action="registrazione.php" method="post" name="Registrazione" onsubmit="return checkInvio();"    >
            <div class="user-details">

                <div class="input-box">

                    <span class="details">NOME</span>
                    
                    <input type="text" name="Nome" placeholder="Inserire nome" size="30" maxlength="35" onchange="return checkNome();" required>
                </div>
                <div class="input-box">

                    <span class="details">COGNOME</span>
                    
                    <input type="text" name="Cognome" placeholder="Inserire cognome" size="30" maxlength="45" onchange="return checkNome();" required>
                </div>
                <div class="input-box">

                    <span class="details">MATRICOLA</span>
                    
                    <input type="number" name="Matricola" placeholder="Inserire matricola" size="10" minlength="7" maxlength="7" onchange="return checkMatricola();" required>
                </div>
                <div class="input-box">

                    <span class="details">NUMERO TELEFONO</span>
                    
                    <input type="number" name="Telefono" placeholder="Inserire numero" size="10" max="9999999999" onchange="return checkNumero();" required>
                </div>
                <div class="input-box">

                    <span class="details">EMAIL</span>
                    
                    <input type="email" name="Email" placeholder="Inserire indirizzo" size="30" required>
                </div>
                <div class="input-box">

                    <span class="details">PASSWORD</span>
                    
                    <input type="password" name="Password" placeholder="Inserire password"  minlength="6" size="30" maxlength="22" onchange="return checkPass();" required>
                </div>
               
            </div>
            <div class="status">
                <input type="radio"name="status" id="dot-1">
                <input type="radio"name="status" id="dot-2">
                <input type="radio"name="status" id="dot-3">
                <input type="radio"name="status" id="dot-4">
                <input type="radio"name="status" id="dot-5">
                <span class="status-title">STATUS:</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="status">In corso</span>

                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="status">Fuori corso</span>

                    </label>
                    <br>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="status">DSA</span>

                    </label>
                    <label for="dot-4">
                        <span class="dot four"></span>
                        <span class="status">Studente-lavoratore</span>

                    </label>
                    <label for="dot-5">
                        <span class="dot five"></span>
                        <span class="status">Studente-genitore</span>

                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit"  name="submit" value="REGISTRATI ORA">
               </div>
        </form>
     <?php } ?>
    </div>
        </body>
        </html>

  
