<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>The PatientBook </title>
        <link rel="stylesheet" type="text/css" href="../style/stylechrono.css"/>
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
                            <!--<h3 class="lilili"> Bonjour  <?php echo $pseudo; ?> </h3>-->
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
            <section>
            <div >

              <aside>

                    <div class="row">
                      <div class ="col-sm-4 col-md-4 col-lg-4 colonnegauche">
                        <p> <img src="../img/profil1.jpg" alt="profil" class = "photomini" /> </p>
                        <p> Name</p>
                        <p> Surname</p>
                        <p> Age </p>
                        <p> Wheight</p>
                        <p> Blood type</p>
                        <p> Work</p>
                        <p> Mail</p>
                      </div>
                  
                      <div class ="col-sm-8 col-md-8 col-lg-8 murarticle">

                        <article>
                          <div class="row">
                            <div class ="col-sm-3 col-md-3 col-lg-3 lilili">
                              <h4> Nom du mec</h4>
                            </div>
                          </div>
                          <div class="row">
                            <div class ="col-sm-1 col-md-1 col-lg-1">
                            </div>
                            <div class ="col-sm-10 col-md-10 col-lg-1O">
                              truuuuuc
                            </div>
                          </div>
                          <div class="row">
                            <div class ="col-sm-3 col-md-3 col-lg-3 Doctors">
                               <h3> <a href="../controller/box_c.php"><span class="glyphicon glyphicon-user lilili " aria-hidden="true"> </span> </a></h3>
                            </div>
                            <div class ="col-sm-7 col-md-7 col-lg-7">
                            </div>
                            <div class ="col-sm-2 col-md-2 col-lg-2 comment">
                                <a href="../controller/post_c.php"><h3><span class="glyphicon glyphicon-pencil lilili"  aria-hidden="true"> </span> </h3> </a>
                                
                            </div>
                        </article>


                      </div>
                    </div>
              </aside>
            </div>
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
