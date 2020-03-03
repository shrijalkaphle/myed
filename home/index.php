
<?php
	session_start();
	$msg = '';
	if(isset($_POST['login'])) {
		$conn = mysqli_connect('localhost','root','','sampleDB');

		$user = $_POST['user'];
		$pwd = $_POST['pass'];

		$sql = "SELECT * FROM user WHERE username = '$user'";
		$result = mysqli_query($conn,$sql);

		$num = mysqli_num_rows($result);

		if($num == 0) {
			$msg = "You are not registered!! Contact us for more information!!";
		} else {
			$sql1 = "SELECT * FROM user WHERE username = '$user' AND password = '$pwd'";
			$result1 = mysqli_query($conn,$sql1);
			
			$num1 = mysqli_num_rows($result1);
			$data = mysqli_fetch_assoc($result1);
			
			if($num1 == 0) {
				$msg = "Invalid Password!! Contact us to reset password!!";
			} else {
				$_SESSION['id'] = $data['id'];
				// $_SESSION['database'] = $data['dbname'];
				header('location: ../dashboard');
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>MYED | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/myed.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<a href="/" class="float">
		<i class="fa fa-arrow-left my-float"></i>
	</a>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<?php
					if($msg != '') {
				?>
					<div class="alert alert-danger" role="alert">
  						<?php echo $msg ?>
					</div>
				<?php
					}
				?>
				<form method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-48">
						<img src="../images/icons/myed.png" alt="MYED" height="100px" style="border-radius: 20%;">
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="user">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="login" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<a></a>
	
	
<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

</body>
</html>

<style>
	.float{
		position:fixed;
		width:60px;
		height:60px;
		top:40px;
		right:40px;
		background-color:#0C9;
		color:#FFF;
		border-radius:50px;
		text-align:center;
		box-shadow: 2px 2px 3px #999;
	}

	.my-float{
		margin-top:22px;
	}
</style>