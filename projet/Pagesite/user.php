<?php session_start(); ?>
<?php  
$connect = mysqli_connect("localhost", "root", "", "patientbook");  
$query = "SELECT weight FROM data WHERE weight IS NOT NULL";
$result = mysqli_query($connect, $query);  

$bdd = new PDO('mysql:host=localhost;dbname=patientbook;charset=utf8', 'root', '');
$req = $bdd->prepare('SELECT * FROM patient WHERE idp = :idp');
$req->execute(array('idp' => $_SESSION['idp']));
while ($donnees = $req->fetch())  {
    $idp = $donnees['idp']; 
    $fname = $donnees['fname'];
    $lname = $donnees['lname']; 
    $age = $donnees['age']; 
    $mail = $donnees['mail']; 
    $address = $donnees['address']; 
    $weight = $donnees['weight']; 
    $height = $donnees['height']; 
    $bloodtype = $donnees['bloodtype']; 
    $description = $donnees['description']; 
}
 
$req = $bdd->prepare('SELECT ida FROM article WHERE idp = :idp');
$req->execute(array('idp' => $_SESSION['idp']));
$tabIda = array();
$i = 0;
while ($donnees = $req->fetch())  {
    $tabIda[$i] = $donnees['ida']; 
    $i = $i+1;                   
}
$req = $bdd->prepare('SELECT description FROM article WHERE description IS NOT NULL AND  ida = :ida');
$req->execute(array('ida' =>  $tabIda[0]));
               
while ($donnees = $req->fetch())  {
    $description = $donnees['description'];                   
}
$req->closeCursor(); // Termine le traitement de la requête

 ?>  



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>PATIENTBOOK</title>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() { var data = google.visualization.arrayToDataTable([['Weight', 'Number'],
                    <?php  
                        $i = 0;
                            while($row = mysqli_fetch_array($result))  
                            {  
                                $i = $i+1;
                                echo "['$i', ".$row["weight"]."],";  
                            }  
                        ?>    
                    ]);  

            var options = {
              title: 'Evolution of weight',
              curveType: 'function',
              legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
          }

        </script>
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
                      
            <div id = entete> 
                <br> <?php echo $fname," ", $lname; ?>
            </div>

            <div id = corp_droite>                 
                <br> Age : <?php echo $age; ?>
                <br> Mail : <?php echo $mail; ?>
                <br> Address name : <?php echo $address; ?>
                <br> Weight : <?php echo  $weight; ?>
                <br> Height : <?php echo $height; ?>
                <br> Bloodtype : <?php echo $bloodtype; ?>
                <br> Description : <?php echo $description; ?>
            </div>

        
            <div id=article_1>
                <br> Article : <?php echo $tabIda[0];?>
                <br> Data : <?php print_r($description);?>             

            <div id="curve_chart" style="width: 900px; height: 500px"></div>
            

            <?php
//data
               /* $req = $bdd->prepare('SELECT weight FROM data WHERE weight IS NOT NULL AND  ida = :ida');
                $req->execute(array('ida' =>  $tabIda[0]));
                $tabData = array();
                $i = 0;
                    while ($donnees = $req->fetch())  {
                        $tabData[$i] = $donnees['weight']; 
                        $i = $i+1;                   
                    }
                    


                
                $req = $bdd->prepare('SELECT bloodanalysis FROM data WHERE bloodanalysis IS NOT NULL AND  ida = :ida');
                $req->execute(array('ida' =>  $tabIda[0]));
                $tabData = array();
                $i = 0;
                    while ($donnees = $req->fetch())  {
                        $tabData[$i] = $donnees['bloodanalysis']; 
                        $i = $i+1;                   
                    }
                    ?>
                <br> Data : <?php print_r($tabData);



                $req->closeCursor(); // Termine le traitement de la requête

?>*/?>
 

            </div>


            <footer>
                <p>Copyright RM&A - 2018<br/></p>
            </footer>
        </div>
    </body>
</html>