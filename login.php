<?php
  include('config/db_connect.php');
  $email ='';
  $errors = array('email'=>'');
  if (isset($_POST['submit'])) {
    session_start();
    if(!empty($_POST['email'])){
      $email = $_POST['email'];
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Enter a valid Email. <br/>";
      }
    }
    if(!empty($_POST['pwd'])){
      $pwd = $_POST['pwd'];
    }
    if (!array_filter($errors)) {

      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

      // create sql
      $sql = "SELECT user_id FROM Users WHERE email = '$email' and password = '$pwd'";

      //query result
      $result = mysqli_query($conn,$sql);

      $count = mysqli_num_rows($result);
      if ($count == 1) {
        $_SESSION['email'] = $email;
        header('Location: index.php');
      }else {
        $errors['email'] = "Invalid Email or Password. <br/>";
      }


    }
  }



?>
<!DOCTYPE html>
<html lang="en">
  <?php include('header.php'); ?>
	<div style="height: 100px"></div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
					<span class="login100-form-title">
						Log In
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email" required>
						<input class="input100" type="text" name="email" placeholder="Email">
            <div><p class="errors"><?php echo $errors['email']?></p></div>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pwd" placeholder="Password" required>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn" style="margin-top: 50px">
            <input type="submit" value="Log In" name="submit" class="login100-form-btn">
						</input>
					</div>
					<br>
					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="signup.php" class="txt3">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

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
