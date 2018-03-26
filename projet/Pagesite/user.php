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
            <h2>LA PAGE D'ACCUEIL </h2>   
          
            <?php  
          //  echo"idp-session : $_SESSION[idp] <br>";
            
            $bdd = new PDO('mysql:host=localhost;dbname=patientbook;charset=utf8', 'root', '');
            $req = $bdd->prepare('SELECT * FROM patient WHERE idp = :idp');
            $req->execute(array('idp' => $_SESSION['idp']));
            while ($donnees = $req->fetch())  {
                ?>
                <p>ID Patient : <?php echo $donnees['idp']; ?> 
                <br> First name : <?php echo $donnees['fname']; ?>
                <br> Last name : <?php echo $donnees['lname']; ?>
                <br> Age : <?php echo $donnees['age']; ?>
                <br> Mail : <?php echo $donnees['mail']; ?>
                <br> Address name : <?php echo $donnees['address']; ?>
                <br> Weight : <?php echo $donnees['weight']; ?>
                <br> Height : <?php echo $donnees['height']; ?>
                <br> Bloodtype : <?php echo $donnees['bloodtype']; ?>
                <br> Description : <?php echo $donnees['description']; ?>
                    

                </p>
                <?php
            }
            $req->closeCursor(); // Termine le traitement de la requête
            ?>

            <footer>
                <p>Copyright RM&A - 2018<br/></p>
            </footer>
        </div>
    </body>
</html>