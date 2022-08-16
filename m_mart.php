

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>m_mart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#"><i><b>mukesh_mart</b></i></a>
            <img class="rounded-circle" src="image/logo22.jpg" width="40" height="40">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="home.html"><b>HOME</b><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="about.html"><b>ABOUT US</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="products.html"><b>PRODUCTS</b></a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link text-white" href="contact.html"><b>CONTACT US</b></a>
                </li>
                <li class="nav-item">
                    <p><a class="btn btn-lg btn-primary" href="SignUp.php" role="button" ><b>Sign Up</b></a></p>
                </li>
                <li class="nav-item">
                  <p><a class="btn btn-lg btn-primary" href="signin.html" role="button" ><b>Sign In</b></a></p>
              </li>
              <li class="nav-item">
                <p><a class="btn btn-lg btn-primary" href="admin.html" role="button" ><b>Admin</b></a></p>
            </li>
          </li>
              </ul>
              <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
    </header>

    <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/logo28.jpg" alt="Welcome to eclectronics store!!!">
                <div class="container">
                <div class="carousel-caption text-left">
                  <h1><b></b></h1>
                </div>
              </div>
            </div>
            <div class="carousel-item">
                <img src="image/logo6.jpg" alt="Welcome to clothing store!!!">
              <div class="container">
                <div class="carousel-caption">
                  <h1></h1>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="image/logo12.jpg" alt="Welcome to personal care store">
              <div class="container">
                <div class="carousel-caption text-right">
                  <h1></h1>
                  <p><a class="btn btn-lg btn-primary" href="SignUp.php" role="button"><b>Sign Up</b></a></p>
                  <!-- <p><a class="btn btn-lg btn-primary" href="signin.html" role="button"><b>Sign In</b></a></p> -->

                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="container marketing">

          <h3><marquee><b style="color:red;">Exciting Offers closing soon...HURRY UP!!! Order now and get 50% off on all items...</b></marquee></h3>

            <!-- Three columns of text below the carousel -->

            <div class="row">
              <div class="col-lg-4">
                <img class="rounded-circle" src="image/logo16.jpg" alt="Electronics" width="140" height="140">
                <h2 ><i><b>Electronics</b></i></h2>
                <p><a class="btn btn-secondary" href="#" role="button" style="background-color:DodgerBlue;">View details &raquo;</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="rounded-circle" src="image/logo6.jpg" alt="Clothings" width="140" height="140">
                <h2><i><b>Clothings</b></i></h2>
                <p><a class="btn btn-secondary" href="#" role="button" style="background-color:DodgerBlue;">View details &raquo;</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="rounded-circle" src="image/logo12.jpg" alt="Personal Care" width="140" height="140">
                <h2><i><b>Personal Care</b></i></h2>
                <p><a class="btn btn-secondary" href="#" role="button" style="background-color:DodgerBlue;">View details &raquo;</a></p>
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

        <hr class="featurette-divider" size="5" noshade color="DodgerBlue">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"><h1><b>Grab the Deals India loves</b></h1><br><h2><p style="color:red;"><b>Upto 80% OFF</b></p></h2><br><h3>In electronic and accessories</h3><span class="text-muted"></span></h2><br>
            <p><a class="btn btn-secondary" href="#" role="button" style="background-color:DodgerBlue;">Shop now &raquo;</a></p>

            <p class="lead"></p>
          </div>
          <div class="col-md-5">
            <img src="image/logo1.jpg" alt="Welcome to eclectronics store!!!">
          </div>
        </div>

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider" size="5" noshade color="DodgerBlue">
        <h3><marquee><b style="color:red;"><h5><b>BUY 2 CLOTH ITEMS & GET 1 FREE...HURRY UP!!!</b></h5></b></marquee></h3>

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"><h1><b>Watch,Chat & Shop during LIVE!</b></h1><br><h2>Bind Blowing discounts on favourite Brands</h2><br><h3><p style="color:red;"><b>Up to 75% Off</b></p></h3><span class="text-muted"></span></h2><br>
            <p><a class="btn btn-secondary" href="#" role="button" style="background-color:DodgerBlue;">Shop now &raquo;</a></p>

            <p class="lead"></p>
          </div>
          <div class="col-md-5">
            <img src="image/logo3.jpg" alt="Welcome to eclectronics store!!!">
          </div>
        </div>

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider" size="5" noshade color="DodgerBlue">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"><h1><b>All things New and Exclusive</b></h1><h2>Beauty,Grooming and Personal Care</h2><br><h3><p style="color:red;"><b>Up to 40% Off</b></p></h3><span class="text-muted"></span></h2><br>
            <p><a class="btn btn-secondary" href="#" role="button" style="background-color:DodgerBlue;">Shop now &raquo;</a></p>

            <p class="lead"></p>
          </div>
          <div class="col-md-5">
            <img src="image/logo2.jpg" alt="Welcome to eclectronics store!!!">
         </div>
        </div>

        <hr class="featurette-divider" size="5" noshade color="black">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#"><b>Back to top</b></a></p>
        <p>&copy; 2022-2023 mukeshCompany Inc. &nbsp;&nbsp;  &middot; <a href="Privacy.html"><b>Privacy</b></a> &middot; <a href="Terms.html"><b>Terms</b></a></p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->

    <script src="../../assets/js/vendor/holder.min.js"></script>

  </body>

</html>
