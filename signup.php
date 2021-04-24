<?php
  include('config/db_connect.php');
  $email = $name = $pwd = $phone ='';
  $errors = array('email'=>'', 'name'=>'', 'pwd'=>'', 'phone'=>'');
  if(isset($_POST['submit'])){
    if(!empty($_POST['email'])){
      $email = $_POST['email'];
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Enter a valid Email. <br/>";
      }
    }
    if(!empty($_POST['name'])){
      $name = $_POST['name'];
      if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
        $errors['name'] = "Enter a valid Name. <br/>";
      }
    }
    if(!empty($_POST['pwd'])){
      $pwd = $_POST['pwd'];
    }
    if(!empty($_POST['cfpwd'])){
      $cfpwd = $_POST['cfpwd'];
    }
    if(!empty($_POST['phone'])){
      $phone = $_POST['phone'];
      if(!preg_match('/^[0-9\s]+$/', $phone)){
        $errors['phone'] = "Enter a valid Phonenumber. <br/>";
      }
    }
    if(!array_filter($errors)){
      if($pwd == $cfpwd){

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);

        //create sql
        $sql = "INSERT INTO Users(email,name,password,phone) VALUES ('$email', '$name', '$pwd', '$phone')";

        //save to db and check
        if(mysqli_query($conn, $sql)){
          // success
          header('Location: index.php');
        }else {
          echo 'Error:' .mysqli_error($conn);
        }
      }else {
        $errors['pwd'] = "The two passwords do not match. <br/>";
      }

    }
  }//End of Form Check

?>


<!DOCTYPE html>
<html lang="en">

  <?php include('header.php'); ?>
	<div style="height: 100px"></div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" action="signup.php">
					<span class="login100-form-title">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
						<input class="input100" type="text" name="email" value="<?php echo "$email"; ?>" placeholder="Email" required>
            <div><p class="errors"><?php echo $errors['email']?></p></div>
						<span class="focus-input100"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
						<input class="input100" type="text" name="name" value="<?php echo "$name"; ?>" placeholder="Name" required>
            <div><p class="errors"><?php echo $errors['name']?></p></div>
            <span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pwd" placeholder="Password" required>
						<span class="focus-input100"></span>
					</div>

          <div class="wrap-input100 validate-input" style="margin-top: 20px" data-validate = "Please enter password">
            <div><p class="errors"><?php echo $errors['pwd']?></p></div>
            <input class="input100" type="password" name="cfpwd" placeholder="Confirm Password" required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" style="margin-top: 20px" data-validate = "Please enter password">
						<input class="input100" type="number" name="phone" value="<?php echo "$phone"; ?>" placeholder="Phonenumber" required>
            <div><p class="errors"><?php echo $errors['phone']?></p></div>
            <span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn" style="margin-top: 50px">
						<input type="submit" name="submit" value="Sign Up" class="login100-form-btn">
						</input>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Already have an account?
						</span>

						<a href="login.html" class="txt3">
							Log In
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
  <div style="height: 100px"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<?php include('footer.php'); ?>
</html>
