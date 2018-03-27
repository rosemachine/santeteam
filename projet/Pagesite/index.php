<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
         <link rel="stylesheet" href="style.css" />
        <title>PATIENTBOOK</title>
    </head>
    <body>
        <div id="container">
            <header>
                <h1> The PatientBook </h1>
            </header>
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>              
                    <li><a href="help.php">Help</a></li>
                    <li><a href="contact.php">Contact the web administrator</a></li>
                </ul>
            </nav>
            <h2>Welcome to the Patient Book</h2>
            <div id="gauche">                  
                <form action="register.php" method="post" id="text">
                  <h3>Register here for the first time !</h3></br>          
                      <label for="user">I am :</label><input type="radio" name="user" id="user" />Patient <input type="radio" name="user" />Doctor<br />
                      <label for="firstname">My firstname : </label><input type="text" id="firstname" name="firstname" /><br />
                      <label for="lastname">My lastname : </label><input type="text" id="lastname" name="lastname" /><br />
                      <label for="birth">My birth date : </label><input type="date" id="birth" name="birth" /><br />
                      <label for="email">My email : </label><input type="email" id="email" name="email"/><br />
                      <label for="address">My address : </label><input type="text" id="address" name="address" /><br />
                      <label for="password">My password : </label><input type="password" id="password" name="password"/><br />
                      <label for="checkpassword">My password again : </label><input type="password" id="checkpassword" name="checkpassword" /><br />
                      <p><input type="submit" value="OK"></p>
                  </form></br></br></br></br></br></br></br></br>
            </div>
            <div id="droite">
                <form action="signin.php" method="post" id="text">
                      <h3>Sign in </h3></br>          
                      <label for="login">My email : </label><input type="login" id="login" name="login" /><br />
                      <label for="password">My password : </label><input name="password" type="password" id="password" /><br />
                      <p><input type="submit" value="OK"></p>
                </form></br></br></br></br></br></br></br></br>     
            </div> 
            <footer>
                <p><br/>Copyright RNA-m - 2018<br/></p>
            </footer>
        </div>
    </body>
</html>