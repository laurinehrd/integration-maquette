<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

    <title>Intégration maquette</title>
  </head>
  <body>

    <!-- Toolbar -->
    <!--Main Navigation-->
    <header>

      <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home" id="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#menu">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#offers">Offers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </nav>

    </header>
    <!--Main Navigation-->

    <div id="scrollUp">
      <a href="#top"><img src="images/to_top.png" alt="flèche top"/></a>
    </div>


    <!-- head -->
    <div class="container-fluid">
      <div class="row div_head">
        <div class="banner">
          <img class="logo" src="images/logo.png" alt="logo"/>
        </div>
      </div>
    </div>

    <!-- Enjoy breakfast -->
    <div class="enjoy_breakfast">
      <h1 class="h_enjoy">Enjoy<br> breakfast</h1>
      <p class="p_enjoy"> Lorem ipsum dolor sit amet, consectetur <br>adipiscing elit. Vivamus lacinia odio vitae. </p>
      <button class="btn waves-effect b_enjoy" type="button" >More info</button>
    </div>

    <!-- I love coffee -->
    <div class="container-fluid i_love_coffee">
      <div class="row">
        <div class="col-lg-7 col-sm-12">
          <img class="imglovecoffee" src="images/coffee.png" alt="coffee"/>
          <p class="new"></p>
        </div>
        <div class="col-lg-5 col-sm-12 cafe">
          <h1 class="h_coffee">I love <br>coffee</h1>
        </div>
      </div>
    </div>


    <!-- See our menu -->
    <div class="container-fluid our_menu">
      <div class="row text-center">
        <div class="col-lg-12 col-sm-12">
          <img class="img_ban_menu" src="images/titre-menu.png" alt="Titre menu"/>
          <h1 class="titre_menu" id="menu">See our <br>menu</h1>
        </div>
      </div>
    </div>

    <!-- menu -->
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-12">

          <img class="mini_img" src="images/menu-coffee.png" alt="tasse de café"/>
          <div class="contour">
            <h2 class="titre_coffee">Coffee</h2>
            <p class="menu_name">Coffee name here<br>Coffee name here<br>Coffee name here<br>Coffee name here<br>Coffee name here</p>
            <p class="price">$10<br>$10<br>$10<br>$10<br>$10</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <img class="mini_img" src="images/menu-drink.png" alt="smoothies"/>
          <div class="contour">
            <h2 class="titre_coffee">Drink</h2>
            <p class="menu_name">Drink name here<br>Drink name here<br>Drink name here<br>Drink name here<br>Drink name here</p>
            <p class="price">$10<br>$10<br>$10<br>$10<br>$10</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <img class="mini_img" src="images/menu-snack.png" alt="vienoiseries"/>
          <div class="contour">
            <h2 class="titre_coffee">Snack</h2>
            <p class="menu_name">Snack name here<br>Snack name here<br>Snack name here<br>Snack name here<br>Snack name here</p>
            <p class="price">$10<br>$10<br>$10<br>$10<br>$10</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <img class="mini_img" src="images/menu-sandwich.png" alt="sandwich"/>
          <div class="contour">
            <h2 class="titre_coffee">Sandwich</h2>
            <p class="menu_name">Sandwich name here<br>Sandwich name here<br>Sandwich name here<br>Sandwich name here<br>Sandwich name here</p>
            <p class="price">$10<br>$10<br>$10<br>$10<br>$10</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Tasty meals -->
    <div class="container-fluid fond">
      <div class="row tasty_meals_img h-100 align-items-center" >
        <div class="col-lg-6 col-sm-12">
        </div>
        <div class="col-lg-6 col-sm-12">
          <h1 class="h_tasty">Tasty <br>meals</h1>
          <p class="p_tasty">“Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut <br>labore et dolore magna aliqua.”</p>
        </div>
      </div>
    </div>

    <!-- Delicious smoothies -->
    <div class="container-fluid delicious_smoothie">
      <div class="row">
        <div class="col-lg-5 col-sm-12 delicious">
          <h1 class="h_delicious">Delicious <br>smoothies</h1>
          <p class="p_delicious">“Lorem ipsum dolor sit <br>amet, consectetur <br>adipiscing elit, sed do <br>eiusmod tempor incididunt <br>ut labore et dolore magna <br>aliqua.”</p>
          <button class="btn waves-effect bouton b_delicious" type="button" >More info</button>
        </div>
        <div class="col-lg-7 col-sm-12">
          <img class="img_smooth" src="images/delicioussmoothies.png" alt="smoothies"/>
        </div>
      </div>
    </div>

    <!-- Offers -->
    <div class="container div_offers">
      <div class="row text-center">
        <div class="col-lg-12 col-sm-12">
          <h3 class="h_offers" id="offers">Get our Latest Offers!</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus <br>lacinia odio vitae vestibulum vestibulum. </p>
          <input class="btn_email" type="email" placeholder="Your Email"/>
          <input class="btn waves-effect btn_sub" type="submit" value="Subscribe"/>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid fond_footer">
      <div class="row">
        <div class="col-lg-6 col-sm-12">
          <img class="logo_footer" src="images/logo.png" alt="logo"/>
          <p class="parag"> Lorem ipsum dolor sit amet, consectetur adipi-<br>scing elit. Aliquam at dignissim nunc, id maxi-<br>mus ex. Etiam nec dignissim elit, at dignissim <br>enim. </p><br>
        </div>
        <div class="col-lg-2 col-sm-12 about">
          <h4 class="title" id="about">About</h4>
          <p><a href="#">History</a><br><a href="#">Our Team</a><br><a href="#">Brand Guidelines</a><br><a href="#">Terms & Condition</a><br><a href="#">Privacy Policy</a></p>
        </div>
        <div class="col-lg-2 col-sm-12 services">
          <h4 class="title">Services</h4>
          <p><a href="#">How to Order</a><br><a href="#">Our Product</a><br><a href="#">Offers</a><br><a href="#">Promo</a><br><a href="#">Payment Method</a></p>
        </div>
        <div class="col-lg-2 col-sm-12 other">
          <h4 class="title" id="contact">Other</h4>
          <p><a href="#">Contact Us</a><br><a href="#">Help</a></p>
        </div>
      </div>
    </div>

    <script>
            jQuery(function(){
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 200 ) {
                            $('#scrollUp').css('right','10px');} else {
                            $('#scrollUp').removeAttr( 'style' );} }); }); });
    </script>

  </body>
</html>
