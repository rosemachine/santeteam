<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>The PatientBook </title>
        <link rel="stylesheet" type="text/css" href="../style/stylesubmit.css"/>
        <!-- <link rel="javascript" href="test.js"/> -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">

 function myfunction1() {

  if (document.publication.datatype.selectedIndex == 1)
    document.getElementById('form1').style.display = 'block';
else
document.getElementById('form1').style.display = 'none';

if (document.publication.datatype.selectedIndex == 0)
    document.getElementById('form2').style.display = 'block';
else
document.getElementById('form2').style.display = 'none';

if (document.publication.datatype.selectedIndex == 2)
    document.getElementById('form3').style.display = 'block';
else
document.getElementById('form3').style.display = 'none';


  }

  </script>

    </head>

   <body>
        <header>

        <div class="container">

                <div class="row">
                 <div class="col-sm-5 col-md-7 col-lg-8">
                    <div class="row">
                        <div class="col-sm-2 col-md-2 col-lg-2">
                            <h1> <a href="../controller/chronologie_user_c.php"><img class="img-responsive logo" src="../img/logoBB.png" alt="icone html5" />  </a></h1>

                        </div>
                        <div class="col-sm-2 col-md-2 col-lg-2 miniheader">
                            <img class="img-responsive img-circle miniphotoheader" src="../img/profil/<?php echo $_SESSION['img_profil']; ?>"  alt="icone html5" />
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 ">
                            <!--<h3 class="lilili"> Bonjour <?php echo $pseudo; ?></h3> </h3>-->
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-5  col-lg-4">
                    <div class="col-sm-4 col-md-4 col-lg-4 ">
                        <h1><a href="../controller/submit_c.php"><span class="glyphicon glyphicon-file lilili"  aria-hidden="true"></span> </a></h1>
                        <h4 class="lilili"> PUBLIER </h4>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <h1> <a href="../controller/doctors_c.php"><span class="glyphicon glyphicon-user lilili " aria-hidden="true"> </span> </a></h1>
                        <h4 class="lilili"> DOCTORS </h4>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <h1> <a href="../controller/disconnect_c.php"> <span class="glyphicon glyphicon-off lilili " aria-hidden="true" > </span> </a></h1>
                        <h4 class="lilili"> LOG OUT </h4>
                    </div>
                </div>
               
        </div>
      </div>

        </header>
      <article>

        <div class="row">
        <div class ="col-sm-12 col-md-12 col-lg-12">

        <div class="row">
        <div class ="col-sm-1 col-md-1 col-lg-1 gris">
        </div>
        <div class ="col-sm-10 col-md-10 col-lg-10">
          <aside>
            
            <h1 class="titleNP"> NOUVELLE PUBLICATION </h1>
          </aside>
            <section>

            </br>
            

<form action="submit.php" name ="publication" method="post" id="article">
            <div class="row">
              <div class ="col-sm-1 col-md-1 col-lg-1 ">
              </div>
              <div class ="col-sm-5 col-md-5 col-lg-5 formdroit">
                <h3> Type de données : </h3>
              </div>
              <div class ="col-sm-6 col-md-6 col-lg-6 formcolonne">
                <select name="datatype" onchange="myfunction1()">
                  <option selected value ="textdata"> Texte </option>
                  <option value ="imagedata" > Image </option>
                  <option value="valuedata" > Valeur </option>
                </select>
              </div>
            </div>

       <div id ="form2">
            <div class="row">
              <div class ="col-sm-1 col-md-1 col-lg-1 ">
              </div>
              <div class ="col-sm-5 col-md-5 col-lg-5 formdroit">
                <h3> Remarques :</h3>
              </div>
              <div class ="col-sm-6 col-md-6 col-lg-6 formcolonne">
              <TEXTAREA name="remarque"> Expliquez vos symptomes, problèmes rencontrès.. </TEXTAREA>
              </div>
            </div>  

            <div class="row">
              <div class ="col-sm-1 col-md-1 col-lg-1 ">
              </div>
              <div class ="col-sm-5 col-md-5 col-lg-5 formdroit">
                <h3> Partager avec :</h3>
              </div>
              <div class ="col-sm-6 col-md-6 col-lg-6 formcolonne">
              CASES A COCHER
              </div>
            </div> 
        </div> 
         
        <div id ="form1" style=' display : none'>

            <div class="row">
              <div class ="col-sm-1 col-md-1 col-lg-1 ">
              </div>
              <div class ="col-sm-5 col-md-5 col-lg-5 formdroit">
               <h3> Ajouter image :</h3>
              <p class="formdroit">Fichier (tous formats | max. 1 Mo)</p>
              </div>
              <div class ="col-sm-6 col-md-6 col-lg-6 formcolonne">
               <input type="hidden" name="MAX_FILE_SIZE" value="700000000" />
               <input type="file" name="mon_fichier" id="mon_fichier" /> 
              </div>
            </div> 

            <div class="row">
              <div class ="col-sm-1 col-md-1 col-lg-1 ">
              </div>
              <div class ="col-sm-5 col-md-5 col-lg-5 formdroit">
                <h3> Remarques :</h3>
              </div>
              <div class ="col-sm-6 col-md-6 col-lg-6 formcolonne">
              <TEXTAREA name="remarque"> Conditions dans lesquelles la photo a été prise, explications.. </TEXTAREA>
              </div>
            </div>  

            <div class="row">
              <div class ="col-sm-1 col-md-1 col-lg-1 ">
              </div>
              <div class ="col-sm-5 col-md-5 col-lg-5 formdroit">
                <h3> Partager avec :</h3>
              </div>
              <div class ="col-sm-6 col-md-6 col-lg-6 formcolonne">
              CASES A COCHER
              </div>
            </div> 
        </div> 

         <div id ="form3" style=' display : none'>

            <div class="row">
              <div class ="col-sm-1 col-md-1 col-lg-1 ">
              </div>
              <div class ="col-sm-5 col-md-5 col-lg-5 formdroit">
               <h3> Quel est votre type de donnée : </h3>
              </div>
              <div class ="col-sm-6 col-md-6 col-lg-6 formcolonne">
               mettre select tiré d'une table
              </div>
            </div> 

            <div class="row">
              <div class ="col-sm-1 col-md-1 col-lg-1 ">
              </div>
              <div class ="col-sm-5 col-md-5 col-lg-5 formdroit">
               <h3> Votre nouvelle mesure : </h3>
              </div>
              <div class ="col-sm-6 col-md-6 col-lg-6 formcolonne">
               <input type="number" name="howmuch">
              </div>
            </div> 

            <div class="row">
              <div class ="col-sm-1 col-md-1 col-lg-1 ">
              </div>
              <div class ="col-sm-5 col-md-5 col-lg-5 formdroit">
                <h3> Remarques :</h3>
              </div>
              <div class ="col-sm-6 col-md-6 col-lg-6 formcolonne">
              <TEXTAREA name="remarque"> Conditions dans lesquelles la photo a été prise, explications.. </TEXTAREA>
              </div>
            </div>  

            <div class="row">
              <div class ="col-sm-1 col-md-1 col-lg-1 ">
              </div>
              <div class ="col-sm-5 col-md-5 col-lg-5 formdroit">
                <h3> Partager avec :</h3>
              </div>
              <div class ="col-sm-6 col-md-6 col-lg-6 formcolonne">
              CASES A COCHER
              </div>
            </div> 
        </div>  
   

      <input type="submit" value="Publier" class ="boutonsub">
      </form>

            </section>
        </div>
      </div>
      </div>
      </div>
    </article>
 

<div class="clear" style="clear:both"></div>

        <footer>
            <p>Copyright THE PATIENTBOOK - Tous droits réservés <br />
        </footer>

    </body>
</html>
