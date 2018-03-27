<?php session_start(); 
            echo '<br><br>test A <br>';
            $validate=0;
            $config = include('config.php');
            $connection = new mysqli($config['host'],$config['username'],$config['password'],$config['database']);

            if(mysqli_connect_errno()) {
              die('Could not connect'.mysqli_connect_errno());
              unset($connection);
            }
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

            while(mysqli_stmt_fetch($req_pre))
            {   
                if(isset($mdp)) 
                {
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
$_SESSION['idp'] = -1;
                    
                  while(mysqli_stmt_fetch($req_pre)) {
                    //  echo "test C<br>";
                     echo"id = $userIdp <br><br>";
                    $_SESSION['idp'] = $userIdp;
                    echo"idp-session : $_SESSION[idp] <br>"; //ok

                  }
                  header('Location: http://localhost/santeteam/projet/Pagesite/user.php');
              }
            echo"<br>Validate = $validate"; 
        ?>