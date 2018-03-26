<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>The PatientBook</title>
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
                            <h1> <a href="../controller/accueil_c.php"><img class="img-responsive logo" src="../img/logoBB.png" alt="icone html5" />  </a></h1>

                        </div>
                        <div class="col-sm-2 col-md-2 col-lg-2 miniheader">
                            <a href="../controller/chronologie_c.php" >
                            <img class="img-responsive img-circle miniphotoheader" src="../img/profil/<?php echo $_SESSION['img_profil']; ?>"  alt="icone html5" /></a>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 ">
                            <h3 class="lilili">Hello <a href="../controller/chronologie_c.php" class="lilili" > <?php echo $pseudo; ?></h3> </a> </h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-5  col-lg-4">
                    <div class="col-sm-4 col-md-4 col-lg-4 ">
                        <h1><a href="../controller/post_c.php"><span class="glyphicon glyphicon-file lilili"  aria-hidden="true"></span> </a></h1>
                        <h4 class="lilili"> PUBLIER </h4>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <h1> <a href="../controller/box_c.php"><span class="glyphicon glyphicon-envelope lilili " aria-hidden="true"> </span> </a></h1>
                        <h4 class="lilili"> BOX </h4>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <h1> <a href="../controller/disconnect_c.php"> <span class="glyphicon glyphicon-off lilili " aria-hidden="true" > </span> </a></h1>
                        <h4 class="lilili"> LOG OUT </h4>
                    </div>
                </div>
                </div>
        </div>

        </header>

        <div class="row">
        <div class ="col-sm-12 col-md-12 col-lg-12">

        <div class="row">
        <div class ="col-sm-1 col-md-1 col-lg-1 gris">
        </div>
        <div class ="col-sm-10 col-md-10 col-lg-10">
            <section>
            <div class="hautmilieu" style="background-image: url(&quot;../img/fond/<?php echo $_SESSION['img_fond']; ?> &quot;) " >
            <div class="lala">
                <a href="#null" onclick="javascript:open_photofond();"><h1 > <span class="glyphicon glyphicon-cog lililili" aria-hidden="true" > </span> </h1></a>
            </div>

                <aside>
                    <div class="row">
                    <div class ="col-sm-5 col-md-5 col-lg-5">
                    <div class="TR">
                    <a href="#null" onclick="javascript:open_photosprof();"><h4> <span class="glyphicon glyphicon-cog lililili" aria-hidden="true" > </span> </h4></a>
                    </div>
                    <img class="img-responsive tofprof" src="../img/profil/<?php echo $_SESSION['img_profil']; ?>" alt="icone html5" />
                    </div>

                    <div class ="col-sm-6 col-md-6 col-lg-6">
                    <h1 class="nomprof"> <?php echo $pseudo; ?> </h1>
                    </div>
                    </div>
                </aside>
            </div>

                <aside>

                    <div class="row">
                    <div class ="col-sm-3 col-md-3 col-lg-3 menu">
                 <h4> <a class ="liens" href="../controller/propos_c.php">À propos</a></h4>
                    </div>
                    <div class ="col-sm-3 col-md-3 col-lg-3 menu">
                 <h4><a class ="liens" href="../controller/chronologie_c.php"> Chronologie</a></h4>
                    </div>
                    <div class ="col-sm-3 col-md-3 col-lg-3 menu">
                 <h4><a class ="liens" href="../controller/amis_c.php"> Amis</a></h4>
                    </div>
                    <div class ="col-sm-3 col-md-3 col-lg-3 menu">
                 <h4> <a class ="liens" href="../controller/photos_c.php">Photos</a></h4>
                    </div>
                    </div>
                </aside>
                </section>
                </div>
                </div>
                </div>
                </div>


                <section>
                <br/>
<?php
  //foreach($row as $post){
  $dir = "../img/post/";
  while($row=mysqli_fetch_assoc($result))
  {
    $datetime_post = $row['date1'];
    $dt = new DateTime($datetime_post);

    $date = $dt->format('d/m/Y');
    $time = $dt->format('H:i:s');

    $type_reaction_post = check_ifselected($row['id_post'], $_SESSION['pseudo']);
 ?>
            <article>
            <br/>
                <div class="row">
                    <div class ="col-sm-1 col-md-1 col-lg-1 ">
                    </div>
                    <div class ="col-sm-10 col-md-10 col-lg-10">
                    <div class="row">
                        <div class ="col-sm-2 col-md-2 col-lg-2 ">
                            <img class="photomini img-responsive" src="../img/profil/<?php echo $_SESSION['img_profil']; ?>">
                        </div>
                        <div class ="col-sm-2 col-md-2 col-lg-2 pseudotest">
                            <h3><?php echo $_SESSION['pseudo']; ?></h3>
                            <?php if($row['private'] == '1'){ ?>

                              <a href="#" data-toggle="tooltip" title="Privé"><span class="glyphicon glyphicon-glass" aria-hidden="true"></span></a>

                              <?php
                            }else{
                              ?>

                              <a href="#" data-toggle="tooltip" title="Public"><span class="glyphicon glyphicon-globe" aria-hidden="true" ></span></a>

                              <?php
                            }
                            ?>
                        </div>
                        <div class ="col-sm-5 col-md-5 col-lg-5 ">
                        <?php if($row['texte']!=''){ ?>
                            <h5 class="textepubli"><?php echo $row['texte']; ?></h5>
                            <?php } ?>
                        </div>
                        <div class ="col-sm-1 col-md-1 col-lg-1 pseudotest">
                            <a href="#null" onclick="javascript:open_photofond();"><h1 > <span class="glyphicon glyphicon-cog" aria-hidden="true" > </span> </h1></a>
                        </div>
                        <?php if($row['id_img']!=''){ ?>
                        <div class ="col-sm-1 col-md-1 col-lg-1 ">
                            <a href="../controller/addfav_c.php?foto=<?php echo $row['id_img'];?>"><h1 > <span class="glyphicon glyphicon-plus-sign" aria-hidden="true" > </span> </h1></a>
                        </div>
                </div>
                    <div class="row">
                        <div class ="col-sm-11 col-md-11 col-lg-11 ">
                    <img class="img-responsive articletof" src="<?php echo $dir . $row['id_img']; ?>" alt="<?php echo $dir . $row['id_img']; ?>">


                  </div>
                  <?php } ?>
                    </div>

                    <div class="row">
                    <div class ="col-sm-1 col-md-1 col-lg-1 ">
                    </div>
                    <div class ="col-sm-10 col-md-10 col-lg-10">
                    <?php
                      echo $date . " - " . $time;
                     ?>
                    <?php if($row['id_video']!=''){ ?>
                      <div class ="col-sm-1 col-md-1 col-lg-1 ">
                        <a href="#null" onclick="javascript:open_photofond();"><h1 > <span class="glyphicon glyphicon-plus-sign" aria-hidden="true" > </span> </h1></a>
                      </div>
                    </div>
                    <div class="row">
                      <div class ="col-sm-11 col-md-11 col-lg-11 ">
                        <video width="400" controls="controls">
                          <source src="<?php echo $dir . $row['id_video']; ?>" type="video/mp4" />
                            Format de video non compatible avec votre navigateur.
                          </video>
                        </div>

                        </div>
                        </div>
                        <?php } ?>
                      </div>

                    <div class="row">
                      <div class ="col-sm-2 col-md-2 col-lg-2 color">
                        <h1><a href="../controller/reactionsChrono_c.php?type=like&amp;post=<?php echo $row['id_post'];?>">
                          <?php
                          if($type_reaction_post == '0' || $type_reaction_post != 'like'){
                            ?>
                            <span class="glyphicon glyphicon-thumbs-up notselectedReaction"  aria-hidden="true"></span>
                            <?php
                          }else if($type_reaction_post == 'like'){
                            ?>
                            <span class="glyphicon glyphicon-thumbs-up selectedReaction"  aria-hidden="true"></span>
                            <?php
                          }
                          ?>
                        </a>
                        <?php
                        $count = count_reactions($row['id_post'], 'like');
                        echo $count;
                        ?>
                      </h1>
                    </div>
                    <div class ="col-sm-2 col-md-2 col-lg-2 color">
                      <h1><a href="../controller/reactionsChrono_c.php?type=love&amp;post=<?php echo $row['id_post'];?>">
                        <?php
                        if($type_reaction_post == '0' || $type_reaction_post != 'love'){
                          ?>
                          <span class="glyphicon glyphicon-heart-empty notselectedReaction"  aria-hidden="true"></span>
                          <?php
                        }else if($type_reaction_post == 'love'){
                          ?>

                          <span class="glyphicon glyphicon-heart-empty selectedReaction"  aria-hidden="true"></span>
                          <?php
                        }
                        ?>
                      </a>
                      <?php
                      $count = count_reactions($row['id_post'], 'love');
                      echo $count;
                      ?>
                    </h1>
                  </div>
                  <div class ="col-sm-2 col-md-2 col-lg-2 color">
                    <h1><a href="../controller/reactionsChrono_c.php?type=hate&amp;post=<?php echo $row['id_post'];?>">
                      <?php
                      if($type_reaction_post == '0' || $type_reaction_post != 'hate'){
                        ?>
                      <span class="glyphicon glyphicon-thumbs-down notselectedReaction"  aria-hidden="true"></span>
                      <?php
                    }else if($type_reaction_post == 'hate'){
                      ?>
                      <span class="glyphicon glyphicon-thumbs-down selectedReaction"  aria-hidden="true"></span><?php } ?> </a>
                      <?php
                      $count = count_reactions($row['id_post'], 'hate');
                      echo $count;
                      ?>
                    </h1>
                  </div>
                  <div class ="col-sm-2 col-md-2 col-lg-2 color">
                    <h1><a href="../controller/reactionsChrono_c.php?type=laugh&amp;post=<?php echo $row['id_post'];?>">
                      <?php
                      if($type_reaction_post == '0' || $type_reaction_post != 'laugh'){
                        ?>
                      <span class="glyphicon glyphicon-fire notselectedReaction"  aria-hidden="true"></span>
                      <?php
                    }else if($type_reaction_post == 'laugh'){
                      ?>
                      <span class="glyphicon glyphicon-fire selectedReaction"  aria-hidden="true"></span><?php } ?> </a>
                      <?php
                      $count = count_reactions($row['id_post'], 'laugh');
                      echo $count;
                      ?>
                    </h1>
                  </div>
                  <div class ="col-sm-3 col-md-3 col-lg-3 color positioncomm">
                    <a href="commentaire_c.php" "><input type="button" value="Commentaires" class="commeTOI"></a>

                  </div>
                  <br/>
                  <br/>
                  <br/>
                  <div class ="col-sm-1 col-md-1 col-lg-1 ">
                  </div>
                </div>

            </article>

            <div class ="col-sm-1 col-md-1 col-lg-1">
        </div>
        <br/>
        <br/>
            <?php
          }
             ?>

              </section>
            </div>

        <div class ="col-sm-1 col-md-1 col-lg-1">
        </div>
        </div>
        </div>
        </div>

        <div class="clear" style="clear:both"></div>
        <br/><br/>
        <footer>
            <p>Copyright Utopia - Tous droits réservés<br />
        </footer>

    </body>
</html>
