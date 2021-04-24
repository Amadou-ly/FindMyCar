<?php
?>
<!DOCTYPE html>
<html lang="en">

  <?php include('header.php'); ?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h4>Find the right car <br> at the right price.</h4>
                  <p style="font-size: 20px">No more struggles trying to find the car of your dreams, just specify the details and get the best offers.</p>
                  <a href="cars.php" class="filled-button">Find a Car</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h4>Sell your car  <br> in a couple clicks.</h4>
                  <p style="font-size: 20px">Log into your account, create and advertisement and sell <br>your car with the best offers.</p>
                  <a href="sell.php" class="filled-button">Sell your Car</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4>Want to sell a car ?</h4>
            <span>Create an account with us and sell your car in a couple of clicks.</span>
          </div>
          <div class="col-md-4">
            <a href="login.php" style="font-size: 20px"class="border-button">Sell</a>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Most Popular Models</h2>
            </div>
          </div>
          <?php
            include('config/db_connect.php');
            $sql = "SELECT * FROM Cars";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
              echo'<div class="col-md-4">
                <div class="service-item">
                  <img src="images/'.$row['image'].'" alt="">
                  <div class="down-content">
                    <h4>'.$row['make'].' '.$row['model'].'</h4>
                    <div style="margin-bottom:10px;">
                      <span>
                          &nbsp; <sup>$</sup>&nbsp;'.$row['price'].'
                      </span>
                    </div>

                    <p>
                      <i class="fa fa-dashboard"></i> '.$row['km'].' Km &nbsp;&nbsp;&nbsp;
                      <i class="fa fa-cube"></i> '.$row['fuel'].' &nbsp;&nbsp;&nbsp;
                      <i class="fa fa-cog"></i> '.$row['gearbox'].' &nbsp;&nbsp;&nbsp;
                    </p>
                    <form method="post" action="car-details.php">
                        <input type="hidden" name="id" value='.$row['id'].'>
                        <input type="submit" name="submit" class="filled-button login100-form-btn" value="View More">
                        </form>
                  </div>
                </div>

                <br>
              </div>';
            }
           ?>

          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product-3-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>$</sup>11999 </del> &nbsp; <sup>$</sup>11779
                  </span>
                </div>

                <p>
                  <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                </p>
                <a href="car-details.php" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="more-info-content">
          <div class="row">
            <div class="col-md-6">
              <div class="left-image">
                <img src="assets/images/about-1-570x350.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <span>Who we are</span>
                <h2>Get to know <em> Us</em></h2>
                <p>Find my car is an online platform that allows users to find new or used cars that fit their requirements at the best value.<br> With Us you are guaranteed to find the ideal cars at the best prices.</p>
                <a href="about.php" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info">
      <div class="container">
        <div class="section-heading">
          <h2>Read our <em>Blog</em></h2>
          <span>Aliquam id urna imperdiet libero mollis hendrerit</span>
        </div>

        <div class="row" id="tabs">
          <div class="col-md-4">
            <ul>
              <li><a href='#tabs-1'>Lorem ipsum dolor sit amet, consectetur adipisicing <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
              <li><a href='#tabs-2'>Mauris lobortis quam id dictum dignissim <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
              <li><a href='#tabs-3'>Class aptent taciti sociosqu ad litora torquent per <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
            </ul>

            <br>

            <div class="text-center">
              <a href="blog.php" class="filled-button">Read More</a>
            </div>

            <br>
          </div>

          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="assets/images/blog-image-1-940x460.jpg" alt="">
                <h4><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></h4>
                <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet.</p>
              </article>
              <article id='tabs-2'>
                <img src="assets/images/blog-image-2-940x460.jpg" alt="">
                <h4><a href="blog-details.html">Mauris lobortis quam id dictum dignissim</a></h4>
                <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet</p>
              </article>
              <article id='tabs-3'>
                <img src="assets/images/blog-image-3-940x460.jpg" alt="">
                <h4><a href="blog-details.html">Class aptent taciti sociosqu ad litora torquent per</a></h4>
                <p>Mauris lobortis quam id dictum dignissim. Donec pellentesque erat dolor, cursus dapibus turpis hendrerit quis. Suspendisse at suscipit arcu. Nulla sed erat lectus. Nulla facilisi. In sit amet neque sapien. Donec scelerisque mi at gravida efficitur. Nunc lacinia a est eu malesuada. Curabitur eleifend elit sapien, sed pulvinar orci luctus eget.
                </p>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>

    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What they say <em>about us</em></h2>
              <span>testimonials from some of our clients</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">

              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>George Walker</h4>
                  <span>Chief Financial Analyst</span>
                  <p>"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>

              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>John Smith</h4>
                  <span>Market Specialist</span>
                  <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>

              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>David Wood</h4>
                  <span>Chief Accountant</span>
                  <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>

              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Andrew Boom</h4>
                  <span>Marketing Head</span>
                  <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('footer.php'); ?>
</html>
