<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/registrazione.css">
    <title>REGISTRATI</title>
</head>
<body>
    <div class="container">
        <?php 
        

        include("../Connessione/config.php");
        if (isset($_POST['submit'])) {

            $nome = $_POST['Nome'];
            $cognome = $_POST['Cognome'];
            $matricola = $_POST['Matricola'];
            $telefono = $_POST['Telefono'];
            $email = $_POST['Email'];
            $password = $_POST['Password'];
            $status = $_POST['Status'];
        
            // Inizializzare una variabile per tracciare gli errori
            $error_messages = [];
        
            // Verifica email
            $verify_query = mysqli_query($conn, "SELECT Email FROM registrazione WHERE Email = '$email'");
            if (mysqli_num_rows($verify_query) != 0) {
                $error_messages[] = "Questa email è già registrata.";
            }
        
            // Verifica matricola
            $verify_query = mysqli_query($conn, "SELECT Matricola FROM registrazione WHERE Matricola = '$matricola'");
            if (mysqli_num_rows($verify_query) != 0) {
                $error_messages[] = "Questa matricola è già registrata.";
            }
        
            // Verifica telefono
            $verify_query = mysqli_query($conn, "SELECT telefono FROM registrazione WHERE Telefono = '$telefono'");
            if (mysqli_num_rows($verify_query) != 0) {
                $error_messages[] = "Questo cellulare è già registrato.";
            }
        
            // Se ci sono errori, visualizzali
            if (!empty($error_messages)) {
                echo "<div class='message'>";
                foreach ($error_messages as $message) {
                    echo "<p>$message</p>";
                }
                echo "</div><br>";
                echo "<div class='container_btn'>";
                echo "<a href='Javascript:self.history.back()'><button class='btn'>Torna indietro</button></a>";
                echo "<a href='login.php'><button class='btn'>Login</button></a>";
                echo "</div>";

            } else {
                // Altrimenti, procedi con l'inserimento
                $query = "INSERT INTO registrazione (Nome, Cognome, Matricola, Telefono, Email, Password, Status) 
                          VALUES ('$nome', '$cognome', '$matricola', '$telefono', '$email', '$password', '$status')";
        
                if (mysqli_query($conn, $query)) {
                    echo "<div class='message'><p>Registrazione completata!</p></div><br>";
                    echo "<div class='container_btn'>";
                    echo "<a href='login.php'><button class='btn'>Login</button></a>";
                    echo "</div>";

                } else {
                    echo "<div class='message'><p>Errore durante la registrazione</p></div><br>";
                }
            }
        } else{ 

            ?>
            

        <div class="title">REGISTRAZIONE</div>

        <form action="registrazione.php" method="post" name="Registrazione">
            <div class="user-details">

                <div class="input-box">

                    <span class="details">NOME</span>
                    
                    <input type="text" name="Nome" placeholder="Inserire nome" size="30" maxlength="35"  required>
                </div>
                <div class="input-box">

                    <span class="details">COGNOME</span>
                    
                    <input type="text" name="Cognome" placeholder="Inserire cognome" size="30" maxlength="45" required>
                </div>
                <div class="input-box">

                    <span class="details">MATRICOLA</span>
                    
                    <input type="number" name="Matricola" placeholder="Inserire matricola" size="10" minlength="7" maxlength="7" required>
                </div>
                <div class="input-box">

                    <span class="details">NUMERO TELEFONO</span>
                    
                    <input type="number" name="Telefono" placeholder="Inserire numero" maxlength="15" max="9999999999" required>
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
                <input type="radio"name="Status" id="dot-1" value="In corso">
                <input type="radio"name="Status" id="dot-2" value="Fuori corso">
                <input type="radio"name="Status" id="dot-3" value="DSA">
                <input type="radio"name="Status" id="dot-4" value="Studente-lavoratore">
                <input type="radio"name="Status" id="dot-5" value="Studente-genitore">
                <span class="status-title">STATUS:</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="Status">In corso</span>

                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="Status">Fuori corso</span>

                    </label>
                    <br>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="Status">DSA</span>

                    </label>
                    <label for="dot-4">
                        <span class="dot four"></span>
                        <span class="Status">Studente-lavoratore</span>

                    </label>
                    <label for="dot-5">
                        <span class="dot five"></span>
                        <span class="Status">Studente-genitore</span>

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

  