<?php
  session_start();
  $email = '';
  if ($_SESSION != null) {
    $email = $_SESSION['email'];
  }

 ?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>FindMyCar</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
      <div class="jumper">
          <div></div>
          <div></div>
          <div></div>
      </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-xs-12">
          <ul class="left-info">
            <li><a href="#"><i class="fa fa-envelope"></i>contact@company.com</a></li>
            <li><a href="#"><i class="fa fa-phone"></i>123-456-7890</a></li>
          </ul>
        </div>
        <div class="">
          <ul>
            <?php if ($_SESSION != null):  ?>
              <li class="username">Hello,  <?php echo htmlspecialchars($email); ?></li>
              <li style="margin-left:10px"><a class="username" href="logout.php"><i class="fa fa-user"></i>&nbsp;Logout</a></li>
            <?php else: ?>
              <li style="margin-left:10px"><a class="username" href="login.php"><i class="fa fa-user"></i>&nbsp;Login /</a></li>
              <li style="margin-left:10px"><a class="username" href="signup.php"><i></i> Sign Up</a></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php"><h2>FindMyCar</h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cars.php">Search</a>
            </li>
            <?php if ($_SESSION != null) : ?>
              <li class="nav-item">
                <a class="nav-link" href="sell.php">Sell my car</a>
              </li>
            <?php else : ?>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login to sell car</a>
              </li>
            <?php endif; ?>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>

              <div class="dropdown-menu">
                  <a class="dropdown-item" href="about.php">About Us</a>
                  <a class="dropdown-item" href="blog.php">Blog</a>
                  <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                  <a class="dropdown-item" href="faq.php">FAQ</a>
                  <a class="dropdown-item" href="terms.php">Terms</a>
                  <a class="dropdown-item" href="contact.php">Contact Us</a>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>
