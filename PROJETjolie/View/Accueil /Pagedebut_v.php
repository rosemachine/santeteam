

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>The PatientBook</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
      <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#page-top">Menu</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#page-top">Homepage</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#about"> Connection </a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#services"> What we offer</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#portfolio">Help</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#contact"> Contact</a>
        </li>
      </ul>
    </nav>

    <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <h1 class="mb-1">The PatientBook</h1>
        <h3 class="mb-5">
          <em>A new way to health</em>
        </h3>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Join us !</a>
      </div>
      <div class="overlay"></div>
    </header>

    <!-- About -->
    <section class="content-section bg-light" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2>Sign in or log in ?</h2>
            <!--<p class="lead mb-5">This theme features a flexible, UX friendly sidebar menu and stock photos from our friends at
              <a href="https://unsplash.com/">Unsplash</a>!</p>
              <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">What We Offer</a>-->
              <div class="row">
                <div class="col-lg-6 mx-auto">
                  <form action="register.php" method="post" id="text">
                  <h3>First time ? </h3></br>

                      <div >
                      <label for="user">I am :</label>
                      <input class="truc" type="radio" name="user" id="usertype" value="patient"/>Patient
                             <input  class="truc" type="radio" id="usertype" name="user" value="doctor"/>  Doctor</div>
                      <div>
                      <label for="firstname">Firstname : </label> <input type="text" id="firstname" /></div>
                      <div>
                      <label for="lastname">Lastname : </label><input type="text" id="lastname" /></div>
                      <div>
                      <label for="birth">Birth date : </label><input type="date" id="birth" /></div>
                      <div>
                      <label for="email">Email : </label><input type="email" id="email" /></div>
                      <div>
                      <label for="address">Address : </label><input type="text" id="address" /></div>
                      <div>
                      <label for="password">Password : </label><input type="password" id="password" /></div>
                      <div>
                      <label for="checkpassword">Verification : </label><input type="password" id="checkpassword" /></div>
                      <div>
                       <p><button type="submit" > Sign in</button></p></div>
                  </form>
                </div>
                <div class="col-lg-6 mx-auto">
                  <form action="signin.php" method="post" id="text">
                      <h3>Log in </h3></br>  
                      <div>        
                      <label for="email">Email : </label><input type="email" id="email" /></div>
                      <div>
                      <label for="password">Password : </label><input type="password" id="password" /></div>
                      <div>
                      <p><button type="submit" > Send </button></p></div>
                </form>
                </div>
              </div>



          </div>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section class="content-section bg-primary text-white text-center" id="services">
      <div class="container">
        <div class="content-section-heading">
          <h3 class="text-secondary mb-0">Services</h3>
          <h2 class="mb-5">What We Offer</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-screen-smartphone"></i>
            </span>
            <h4>
              <strong>Connection</strong>
            </h4>
            <p class="text-faded mb-0">Health does not wait.</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="fa fa-book fa-fw"></i>
            </span>
            <h4>
              <strong>Historical</strong>
            </h4>
            <p class="text-faded mb-0">Do not lose anything anymore!</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-user"></i>
            </span>
            <h4>
              <strong>Network</strong>
            </h4>
            <p class="text-faded mb-0">Millions of users
              <i class="fa fa-heart"></i><br>
              had choose us!</p>
          </div>
          <div class="col-lg-3 col-md-6">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="fa fa-th"></i>
            </span>
            <h4>
              <strong>Choice</strong>
            </h4>
            <p class="text-faded mb-0">A multitude of functions..</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Callout -->
    <section class="callout">
      <div class="container text-center">
        <h2 class="mx-auto mb-5">And way more 
          <em>possibilities</em>
          !</h2>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Join us!</a>
      </div>
    </section>

    <!-- Portfolio -->
    <section class="content-section" id="portfolio">
      <div class="container">
        <div class="content-section-heading text-center">
          <h3 class="text-secondary mb-0">FAQ</h3>
          <h2 class="mb-5">Help</h2>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6">
            <a class="portfolio-item" >
              <span class="caption">
                <span class="caption-content">
                  <h2 class ="taille">As a patient, who has access to your publications?</h2>
                  <p class="mb-0"> The doctors you allow for viewing. </p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" >
              <span class="caption">
                <span class="caption-content">
                  <h2>Are your data safe ? </h2>
                  <p class="mb-0">Our database is hosted by a server cerfitied by the HAS.</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" >
              <span class="caption">
                <span class="caption-content">
                  <h2>Do you have a certification ? </h2>
                  <p class="mb-0">We have the certification Health On the Net by the HAS!</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" >
              <span class="caption">
                <span class="caption-content">
                  <h2>Is this webservice free of any charge?</h2>
                  <p class="mb-0">Yes ! It's totally freemium!</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="content-section bg-primary text-white">
      <div class="container text-center">
        <h2 class="mb-4">Would you like to contact us ?</h2>
<form action="/ma-page-de-traitement" method="post">
    <div>
        <label for="nom">Name :</label>
        <input type="text" id="nom" name="user_name" />
    </div>
    <div>
        <label for="courriel">Email :</label>
        <input type="email" id="courriel" name="user_email" />
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
    </div>
    
    <div class="button">
        <button type="submit">Send</button>
    </div>
</form>
      </div>
    </section>

    <!-- Map -->
    <section id="contact" class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.33176518899!2d2.284166550991553!3d48.85188367918517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6701b4f58251b%3A0x167f5a60fb94aa76!2sECE+Paris!5e0!3m2!1sfr!2sfr!4v1522164790776" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
      <br/>
      <small>
        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.33176518899!2d2.284166550991553!3d48.85188367918517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6701b4f58251b%3A0x167f5a60fb94aa76!2sECE+Paris!5e0!3m2!1sfr!2sfr!4v1522164790776" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen>></a>
      </small>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">

        <p class="text-muted small mb-0">Copyright &copy; The PatientBook 2018</p>
      </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>

  </body>

</html>
