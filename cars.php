<?php

?>
<!DOCTYPE html>
<html lang="en">

  <?php include('header.php'); ?>
    <!-- Page Content -->


    <div class="services">
      <div class="container">
        <form action="cars.php" id="contact" method="post">
          <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Used/New:</label>
                       <select class="form-control" name="state">
                            <option value="">All</option>
                            <option value="New">New vehicle</option>
                            <option value="Used">Used vehicle</option>
                       </select>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Vehicle Type:</label>
                       <select class="form-control" name="type">
                            <option value="">All</option>
                            <option value="Sedan">Sedan</option>
                            <option value="Coupe">Coupe</option>
                            <option value="Suv">Suv</option>
                            <option value="Crossover">Crossover</option>
                            <option value="Wagon">Wagon</option>
                            <option value="Truck">Truck</option>
                            <option value="Convertible">Convertible</option>
                       </select>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Make:</label>
                       <select class="form-control" name="make">
                            <option value="">All</option>
                            <option value="Audi">Audi</option>
                            <option value="Bmw">BMW</option>
                            <option value="Chevrolet">Chevrolet</option>
                            <option value="Dodge">Dodge</option>
                            <option value="Fiat">Fiat</option>
                            <option value="Jaguar">Jaguar</option>
                            <option value="Kia">Kia</option>
                            <option value="Lamborghini">Lamborghini</option>
                            <option value="Mercedes">Mercedes</option>
                            <option value="Nissan">Nissan</option>
                            <option value="Opel">Opel</option>
                            <option value="Peugeot">Peugeot</option>
                            <option value="Renault">Renault</option>
                            <option value="Seat">Seat</option>
                            <option value="Toyota">Toyota</option>
                            <option value="Volkswagen">Volkswagen</option>
                       </select>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <div class="form-group">
                        <label>Model:</label>
                        <input type="text" class="form-control" name="model" placeholder="Model">
                    </div>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Year: (From)</label></br>
                      <select class="form-control" name="year1">
                           <option value="">All</option>
                           <option value="2010">2010</option>
                           <option value="2011">2011</option>
                           <option value="2012">2012</option>
                           <option value="2013">2013</option>
                           <option value="2014">2014</option>
                           <option value="2015">2015</option>
                           <option value="2016">2016</option>
                           <option value="2017">2017</option>
                           <option value="2018">2018</option>
                           <option value="2019">2019</option>
                           <option value="2020">2020</option>
                      </select>
                    </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>Year: (To)</label></br>
                    <select class="form-control" name="year2">
                         <option value="">All</option>
                         <option value="2010">2010</option>
                         <option value="2011">2011</option>
                         <option value="2012">2012</option>
                         <option value="2013">2013</option>
                         <option value="2014">2014</option>
                         <option value="2015">2015</option>
                         <option value="2016">2016</option>
                         <option value="2017">2017</option>
                         <option value="2018">2018</option>
                         <option value="2019">2019</option>
                         <option value="2020">2020</option>
                    </select>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Odometer: (From)</label></br>
                      <select class="form-control" name="km1">
                           <option value="">All</option>
                           <option value="0">0000 Km</option>
                           <option value="10000">10000 Km</option>
                           <option value="20000">20000 Km</option>
                           <option value="30000">30000 Km</option>
                           <option value="40000">40000 Km</option>
                           <option value="50000">50000 Km</option>
                           <option value="60000">60000 Km</option>
                           <option value="70000">70000 Km</option>
                           <option value="80000">80000 Km</option>
                           <option value="90000">90000 Km</option>
                           <option value="100000">100000 Km</option>
                      </select>
                    </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label>Odometer: (To)</label></br>
                    <select class="form-control" name="km2">
                         <option value="">All</option>
                         <option value="0">0000 Km</option>
                         <option value="10000">10000 Km</option>
                         <option value="20000">20000 Km</option>
                         <option value="30000">30000 Km</option>
                         <option value="40000">40000 Km</option>
                         <option value="50000">50000 Km</option>
                         <option value="60000">60000 Km</option>
                         <option value="70000">70000 Km</option>
                         <option value="80000">80000 Km</option>
                         <option value="90000">90000 Km</option>
                         <option value="100000">100000 Km</option>
                    </select>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Price:</label></br>
                       <input type="number" name="price1" class="form-control" placeholder="From:">
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                       <input style="margin-top: 32px" name="price2" type="number" class="form-control" placeholder="To:">
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Fuel:</label>

                       <select class="form-control" name="fuel">
                            <option value="">All</option>
                            <option value="Petrol">Petrol</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Hybrid">Hybrid</option>
                       </select>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Gearbox:</label>

                       <select class="form-control" name="gearbox">
                            <option value="">All</option>
                            <option value="Automatic">Automatic</option>
                            <option value="Manual">Manual</option>
                       </select>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Doors:</label>

                       <select class="form-control" name="doors">
                            <option value="">All</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                       </select>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Number of seats:</label>

                       <select class="form-control" name="seat">
                         <option value="">All</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                         <option value="6">6</option>
                         <option value="7">7</option>
                         <option value="8">8</option>
                       </select>
                  </div>
              </div>
          </div>

          <div class="col-sm-4 offset-sm-4">
            <div class="main-button text-center">
                <input type="submit" class="filled-button login100-form-btn" name="search" value="Search">
            </div>
          </div>
          <br>
          <br>
        </form>

        <div class="row">
          <?php
            include('config/db_connect.php');



            if(isset($_POST['search'])){
                include('config/db_connect.php');
                // get all submitted data
                $condition = mysqli_real_escape_string($conn, $_POST['state']);
                $type = mysqli_real_escape_string($conn, $_POST['type']);
                $make = mysqli_real_escape_string($conn, $_POST['make']);
                //$model = mysqli_real_escape_string($conn, $_POST['model']);
                //$price = mysqli_real_escape_string($conn, $_POST['price']);
                //$year = mysqli_real_escape_string($conn, $_POST['year']);
                //$odo1 = mysqli_real_escape_string($conn, $_POST['km1']);
                //$odo2 = mysqli_real_escape_string($conn, $_POST['km2']);
                //$fuel = mysqli_real_escape_string($conn, $_POST['fuel']);
                //$gearbox = mysqli_real_escape_string($conn, $_POST['gearbox']);
                //$doors = mysqli_real_escape_string($conn, $_POST['doors']);
                //$seat = mysqli_real_escape_string($conn, $_POST['seat']);

              if ($condition == null && $type != null && $make != null) {
                $sql = "SELECT * FROM Cars WHERE type = '$type' AND make = '$make'";
              }
              elseif ($type == null && $condition != null && $make != null) {
                $sql = "SELECT * FROM Cars WHERE state = '$condition' AND make = '$make'";
              }
              elseif ($make == null && $type != null && $condition != null) {
                $sql = "SELECT * FROM Cars WHERE state = '$condition' AND type = '$type'";

              } elseif($make != null && $type != null && $condition != null) {
                 $sql = "SELECT * FROM Cars WHERE state = '$condition' AND type = '$type' AND make = '$make' ";
              }
              elseif($make != null && $type == null && $condition == null) {
                 $sql = "SELECT * FROM Cars WHERE make = '$make' ";

              } elseif($make == null && $type != null && $condition == null) {
                 $sql = "SELECT * FROM Cars WHERE type = '$type' ";

              } elseif($make == null && $type == null && $condition != null) {
                 $sql = "SELECT * FROM Cars WHERE state = '$condition' ";
              }

              $result1 = mysqli_query($conn, $sql);
              if ($result1 != null) {
                while ($row = mysqli_fetch_array($result1)) {
                  echo'<div class="col-md-4">
                    <div class="service-item">
                      <img src="images/'.$row['image'].'" alt="">
                      <div class="down-content">
                        <h4>'.$row['make'].' '.$row['model'].'</h4>
                        <div style="margin-bottom:10px;">
                          <span>
                              &nbsp; <sup>GNF</sup>&nbsp;'.$row['price'].'
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
              }else{
                echo'<div class="col-md-4 down-content">
                        <h4> No Cars Found. Try reducing your filters.</h4>
                    </div>';
              }
            }else{
              $sql2 = "SELECT * FROM Cars";
              $result = mysqli_query($conn, $sql2);
              while ($row = mysqli_fetch_array($result)) {
                echo'<div class="col-md-4">
                  <div class="service-item">
                      <img src="images/'.$row['image'].'" alt="">
                      <div class="down-content">
                        <h4>'.$row['make'].' '.$row['model'].'</h4>
                        <div style="margin-bottom:10px;">
                          <span>
                              &nbsp; <sup>GNF</sup>&nbsp;'.$row['price'].'
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
              }

           ?>
         </div>
        <br>
        <br>

        <nav>
          <ul class="pagination pagination-lg justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">«</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">»</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>

        <br>
        <br>
        <br>
        <br>
      </div>
    </div>

    <!-- Footer Starts Here -->
    <?php include('footer.php'); ?>
</html>
