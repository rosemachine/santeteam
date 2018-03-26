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
            <h2>Fail to connect your session</h2> 
            <p> Wrong password or pseudo. <br/><h3>Redirection... </h3></p>
            <?php header("Refresh: 2;URL=http://localhost/projet/index.php"); ?>   
            <footer>
                <p>Copyright RM&A - 2018<br/></p>
            </footer>
        </div>
    </body>
</html>