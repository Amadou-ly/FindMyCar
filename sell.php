<?php
  include('config/db_connect.php');
  if(isset($_POST['upload'])){
    // path to store uploaded image
    $target = "images/".basename($_FILES['image']['name']);
    // get all submitted data
    $condition = mysqli_real_escape_string($conn, $_POST['condition']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $make = mysqli_real_escape_string($conn, $_POST['make']);
    $model = mysqli_real_escape_string($conn, $_POST['model']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $odo = mysqli_real_escape_string($conn, $_POST['odo']);
    $fuel = mysqli_real_escape_string($conn, $_POST['fuel']);
    $gearbox = mysqli_real_escape_string($conn, $_POST['gearbox']);
    $doors = mysqli_real_escape_string($conn, $_POST['doors']);
    $seat = mysqli_real_escape_string($conn, $_POST['seat']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $options = mysqli_real_escape_string($conn, $_POST['options']);
    $image = mysqli_real_escape_string($conn, $_FILES['image']['name']);

    $sql = "INSERT INTO Cars(state, type, make, model, price, year, km, fuel, gearbox, doors, seat, description, options, image)
    VALUES ('$condition', '$type', '$make', '$model', '$price', '$year', '$odo', '$fuel', '$gearbox', '$doors', '$seat', '$description', '$options', '$image')";
    if(mysqli_query($conn, $sql)){
      // success
      header('Location: index.php');
    }else {
      echo 'Error:' .mysqli_error($conn);
    }
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      echo "Image uploaded successfully";
    }else {
      echo "Error Uploading";
    }
  }


?>
<!DOCTYPE html>
<html lang="en">

  <?php include('header.php'); ?>

    <div class="services">
      <div class="container">
        <form action="sell.php" id="contact" method="post" enctype="multipart/form-data">
          <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Vehicle Condition:</label>

                       <select class="form-control" name="condition" required>
                            <option value="New">New vehicle</option>
                            <option value="Used">Used vehicle</option>
                       </select>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Vehicle Type:</label>
                       <select class="form-control" name="type" required>
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
                       <select class="form-control" name="make" required>
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
                      <label>Model:</label>
                      <input type="text" class="form-control" name="model" placeholder="Model" required>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Price:</label></br>
                       <input type="number" class="form-control" name="price" placeholder="Price" required>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Year:</label></br>
                       <input type="number" class="form-control" name="year" placeholder="Year" required>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Odometer:</label></br>
                       <input type="number" class="form-control" name="odo" placeholder="Km" required>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Fuel:</label>

                       <select class="form-control" required name="fuel">
                            <option value="Petrol">Petrol</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Hybrid">Hybrid</option>
                       </select>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Gearbox:</label>

                       <select class="form-control" required name="gearbox">
                            <option value="Automatic">Automatic</option>
                            <option value="Manual">Manual</option>
                       </select>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Doors:</label>

                       <select class="form-control" name="doors" required>
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

                       <select class="form-control" name="seat" required>
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

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Images:</label></br>
                       <input type="file" class="form-control" name="image" placeholder="Images" required>
                  </div>
              </div>
              <br/><br/><br/><br/><br/>
              <div class="section-heading" style="margin-left: 400px">
                <h2>Vehicle Description</h2>
              </div>

              <div class="col-sm-6 col-xs-12 col-sm-6 col-xs-12" style="margin-left:160px">
                  <div class="form-group" style="width:800px">
                    <textarea class="form-control" name="description" rows="15" placeholder="Description" required></textarea>
                  </div>
              </div>

              <div class="section-heading" style="margin-left: 450px">
                <h2 style="margin-top: 50px">List of Options</h2>
              </div>

              <div class="col-sm-6 col-xs-12 col-sm-6 col-xs-12" style="margin-left:160px">
                  <div class="form-group" style="width:800px">
                    <textarea class="form-control" name="options" rows="8" placeholder="Extra Options" required></textarea>
                  </div>
              </div>

          </div>
          <br>
          <br>
          <div class="col-sm-4 offset-sm-4">
            <div class="main-button text-center">
              <input type="submit" style="font-size: 25px" name="upload" value="Post Ad" class="login100-form-btn"></input>
            </div>
          </div>
          <br>
          <br>
        </form>
        <br>
        <br>
      </div>
    </div>
      <!-- Footer Starts Here -->
      <?php include('footer.php'); ?>
  </html>
