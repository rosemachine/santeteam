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
                      <label for="firstname">My firstname : </label><input type="text" id="firstname" /><br />
                      <label for="lastname">My lastname : </label><input type="text" id="lastname" /><br />
                      <label for="birth">My birth date : </label><input type="date" id="birth" /><br />
                      <label for="email">My email : </label><input type="email" id="email" /><br />
                      <label for="address">My address : </label><input type="text" id="address" /><br />
                      <label for="password">My password : </label><input type="password" id="password" /><br />
                      <label for="checkpassword">My password again : </label><input type="password" id="checkpassword" /><br />
                      <p><input type="submit" value="OK"></p>
                  </form></br></br></br></br></br></br></br></br>
            </div>
            <div id="droite">
                <form action="index.php" method="post" id="text">
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
        <?php 
            echo '<br><br>test A <br>';
            $validate=0;
            $config = include('config.php');
            $connection = new mysqli($config['host'],$config['username'],$config['password'],$config['database']);

            if(mysqli_connect_errno()) {
              die('Could not connect'.mysqli_connect_errno());
              unset($connection);
            }
  /*          else {
              echo 'Connected successfully'."<br>";
            }

            echo "$validate <br>";
*/
            if(isset($_POST["login"]))  {
              $userLogin=$_POST["login"];
            } 
            else echo "error login<br>";
            if(isset($_POST["password"])) {
              $userPassword=$_POST["password"];
            } 
            else echo "error password<br>";

            $request='SELECT password FROM patient WHERE mail=? AND password=?';
            $req_pre = mysqli_prepare($connection, $request);

            mysqli_stmt_bind_param($req_pre, "ss",$userLogin,$userPassword);
            mysqli_stmt_execute($req_pre);
            mysqli_stmt_bind_result($req_pre,$mdp);
/*
            echo "test B<br>";
            echo"User = $userLogin <br>Password = $userPassword<br><br>";
            echo"$mdp";
*/
            while(mysqli_stmt_fetch($req_pre))  {   
                if(isset($mdp)) {
                    echo"login et mdp ok<br>";
                    $validate=1;        
                }   
              }

              if ($validate) {
                  $_SESSION['mail'] = $userLogin;
                  $_SESSION['password'] = $userPassword;
                  echo"password-session : $_SESSION[password] <br>"; //ok

                  $request='SELECT idp FROM patient WHERE mail=? AND password=?';
                  $req_pre = mysqli_prepare($connection, $request);

                  mysqli_stmt_bind_param($req_pre, "ss",$userLogin,$userPassword);
                  mysqli_stmt_execute($req_pre);
                  mysqli_stmt_bind_result($req_pre,$userIdp);

                  while(mysqli_stmt_fetch($req_pre)) {
                    //  echo "test C<br>";
                     // echo"id = $userIdp <br><br>";
                    $_SESSION['idp'] = $userIdp;
                    echo"idp-session : $_SESSION[idp] <br>"; //ok

                  }
                  header('Location: http://localhost/projetteam/user.php');
              }
            echo"<br>Validate = $validate"; 
        ?>

    </body>
</html>
<?php

