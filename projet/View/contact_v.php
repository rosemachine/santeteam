<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
         <link rel="stylesheet" href="style.css" />
        <title>PATIENTBOOK - Contact</title>
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
            <h2>Before you send us an email, please make sur to check the HelpSection before.</h2>
            <section>    
                <form method="post" action="traitement.php" id="text">          
                      <label for="firstname">Your firstname : </label><input type="text" id="firstname" /><br />
                      <label for="lastname">Your lastname : </label><input type="text" id="lastname" /><br />
                      <label for="email">My email : </label><input type="email" id="email" /><br />
                      <label for="comment">Your comment : </label><input type="text" id="comment" /><br />
                      <p><input type="submit" value="Send"></p>
                      <-- ENVOYER UN MAIL AU ADMINISTRATEUR-->
                  </form></br></br></br></br></br></br></br></br>
                </form>
            </section>
    		    <footer>
                <p>Copyright RM&A - 2018<br/></p>
            </footer>
          </div>
    </body>
</html>