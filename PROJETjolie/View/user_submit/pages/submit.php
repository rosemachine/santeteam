<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The PatientBook</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="navbar-brand" href="index.html"> <i class="fa fa-heart fa-fw"></i> USER </a>


            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a id="btnnav"> <i class="fa fa-file fa-fw"></i> SUBMIT </a>
                </li>
                <li>
                    <a id="btnnav"> <i class="fa fa-book fa-fw"></i> DOCTOR </a>
                </li>
                <li>
                    <a id="btnnav"> <i class="glyphicon glyphicon-off"></i> LOG OFF </a>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

<img  class ="logo" src="../../../img/logoBB.png" alt="icone html5" />  
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-10 col-sm-10 col-md-10 ">

                    <h1 class ="titlepubli"> New publication </h1>
                    <br/><br/>

            <form action="submit.php" name ="publication" method="post" id="article">
            <div class="row">
              <div class ="col-sm-1 col-md-1 col-lg-1 ">
              </div>
              <div class ="col-sm-5 col-md-5 col-lg-5 formdroit">
                <p class="H3"> Type of data : </p>
              </div>

              <div class ="col-sm-6 col-md-6 col-lg-6 formcolonne">
                <select name="datatype" onchange="myfunction1()">
                  <option selected value ="textdata"> Text </option>
                  <option value ="imagedata" > Image </option>
                  <option value="valuedata" > Value </option>
                </select>
              </div>
            </div>

       <div id ="form2">
            <div class="row">
              <div class ="col-sm-1 col-md-1 col-lg-1 ">
              </div>
              <div class ="col-sm-5 col-md-5 col-lg-5 formdroit">
                <p class="H3"> Comment :</p>
              </div>
              <div class ="col-sm-6 col-md-6 col-lg-6 formcolonne">
              <TEXTAREA name="remarque"> Tell us more  </TEXTAREA>
              </div>
            </div>  

            <div class="row">
              <div class ="col-sm-1 col-md-1 col-lg-1 ">
              </div>
              <div class ="col-sm-5 col-md-5 col-lg-5 formdroit">
                <p class="H3"> Share with : </p>
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
               <p class="H3"> Add image :</p>
              <p class="formdroit">File (max. 1 Mo)</p>
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
                <p class="H3"> Comment :</p>
              </div>
              <div class ="col-sm-6 col-md-6 col-lg-6 formcolonne">
              <TEXTAREA name="remarque"> Tell us more </TEXTAREA>
              </div>
            </div>  

            <div class="row">
              <div class ="col-sm-1 col-md-1 col-lg-1 ">
              </div>
              <div class ="col-sm-5 col-md-5 col-lg-5 formdroit">
                <p class="H3"> Share with :</p>
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
               <p class="H3"> Type of value : </p>
              </div>
              <div class ="col-sm-6 col-md-6 col-lg-6 formcolonne">
               mettre select tiré d'une table
              </div>
            </div> 

            <div class="row">
              <div class ="col-sm-1 col-md-1 col-lg-1 ">
              </div>
              <div class ="col-sm-5 col-md-5 col-lg-5 formdroit">
               <p class="H3"> New data : </p>
              </div>
              <div class ="col-sm-6 col-md-6 col-lg-6 formcolonne">
               <input type="number" name="howmuch">
              </div>
            </div> 

            <div class="row">
              <div class ="col-sm-1 col-md-1 col-lg-1 ">
              </div>
              <div class ="col-sm-5 col-md-5 col-lg-5 formdroit">
                <p class="H3"> Comment :</p>
              </div>
              <div class ="col-sm-6 col-md-6 col-lg-6 formcolonne">
              <TEXTAREA name="remarque"> Tell us more </TEXTAREA>
              </div>
            </div>  

            <div class="row">
              <div class ="col-sm-1 col-md-1 col-lg-1 ">
              </div>
              <div class ="col-sm-5 col-md-5 col-lg-5 formdroit">
                <p class="H3"> Share with :</p>
              </div>

              <div class ="col-sm-6 col-md-6 col-lg-6 formcolonne">
              CASES A COCHER
              </div>
            </div> 

        </div>  
   
        <div class="droitee">
      <input type="submit" value="Publier" class ="boutonsub">
  </div>
      </form>


                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
