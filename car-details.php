<?php
?>
<!DOCTYPE html>
<html lang="en">

  <?php include('header.php'); ?>
    <br>

    <?php
      $id = $_POST['id'];
      include('config/db_connect.php');
      $sql = "SELECT * FROM Cars WHERE id = '$id'";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_array($result)) {
      echo'<div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div>
              <img src="images/'.$row['image'].'" alt="" class="img-fluid wc-image">
            </div>

            <br>

            <div class="row">
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-1-720x480.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-2-720x480.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-3-720x480.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>

              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-4-720x480.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-5-720x480.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-6-720x480.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-5">
                <ul class="list-group list-group-flush">
                <strong class="price" >$ '.$row['price'].'</strong>
                <br>
                <br>
                <br>
                 <li class="list-group-item">
                      <div class="clearfix">
                           <span class="pull-left">Condition</span>

                           <strong class="pull-right">'.$row['state'].'</strong>
                      </div>
                 </li>

                 <li class="list-group-item">
                      <div class="clearfix">
                           <span class="pull-left">Type</span>

                           <strong class="pull-right">'.$row['type'].'</strong>
                      </div>
                 </li>

                 <li class="list-group-item">
                      <div class="clearfix">
                           <span class="pull-left"> Make</span>

                           <strong class="pull-right">'.$row['make'].'</strong>
                      </div>
                 </li>

                 <li class="list-group-item">
                      <div class="clearfix">
                           <span class="pull-left">Model</span>

                           <strong class="pull-right">'.$row['model'].'</strong>
                      </div>
                 </li>

                 <li class="list-group-item">
                      <div class="clearfix">
                           <span class="pull-left">Year of registration</span>

                           <strong class="pull-right">'.$row['year'].'</strong>
                      </div>
                 </li>

                 <li class="list-group-item">
                      <div class="clearfix">
                           <span class="pull-left">Mileage</span>

                           <strong class="pull-right">'.$row['km'].' &nbsp;Km</strong>
                      </div>
                 </li>

                 <li class="list-group-item">
                      <div class="clearfix">
                           <span class="pull-left">Fuel</span>

                           <strong class="pull-right">'.$row['fuel'].'</strong>
                      </div>
                 </li>

                 <li class="list-group-item">
                      <div class="clearfix">
                           <span class="pull-left">Gearbox</span>

                           <strong class="pull-right">'.$row['gearbox'].'</strong>
                      </div>
                 </li>

                 <li class="list-group-item">
                      <div class="clearfix">
                           <span class="pull-left">Number of seats</span>

                           <strong class="pull-right">'.$row['seat'].'</strong>
                      </div>
                 </li>

                 <li class="list-group-item">
                      <div class="clearfix">
                           <span class="pull-left">Doors</span>

                           <strong class="pull-right">'.$row['doors'].'</strong>
                      </div>
                 </li>
                </ul>
            <br>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-md-8">
            <div class="tabs-content">
              <h4>Vehicle Description</h4>
              <p style="font-size:20px">-'.$row['description'].'.</p>
              <br>
            </div>
          </div>

          <div class="col-md-4">
            <div class="tabs-content">
              <h4>Vehicle Extras</h4>
              <p style="font-size:20px">-'.$row['options'].'.</p>
            </div>

            <br>
            <br>

            <div class="tabs-content">
              <h4>Contact Details</h4>

              <p>
                <span>Name</span>

                <br>

                <strong>John Smith</strong>
              </p>

              <p>
                <span>Phone</span>

                <br>

                <strong>
                  <a href="tel:123-456-789">123-456-789</a>
                </strong>
              </p>

              <p>
                <span>Mobile phone</span>

                <br>

                <strong>
                  <a href="tel:456789123">456789123</a>
                </strong>
              </p>

              <p>
                <span>Email</span>

                <br>

                <strong>
                  <a href="mailto:john@carsales.com">john@carsales.com</a>
                </strong>
              </p>
            </div>

            <br>
          </div>
        </div>

        <br>
        <br>
        <br>
      </div>
    </div>';
    }
    ?>

    <!-- Footer Starts Here -->
    <?php include('footer.php'); ?>
</html>
