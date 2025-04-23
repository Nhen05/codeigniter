<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Flat Login Form</title>
   
    <base href="<?= base_url()?>/admin/">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

	<link rel="stylesheet" href="css/login.css">
	<style>
		.form-dangky{display:none}
	</style>

</head>

<body>


	<div class="container">
		<div class="info">
			<h1>Administration </h1>
		</div>
	</div>
	<div class="form">
		<div class="thumbnail"><img src="images/manager.png" /></div>
		<div class="form-dangky">
			<form class="register-form" action="index.php" method="post">
				<input type="text" placeholder="username" name="cr_user" />
				<input type="text" placeholder="email address" name="cr_email" />
				<input type="password" placeholder="password" name="cr_pass" />
				<input type="password" placeholder="Confirm password" name="cr_cpass" />
				<input type="password" placeholder="Unique-Code" name="code" />
				<input type="submit" name="submit1" value="Đăng ký" />			
			</form>
			<p class="message">Đã có tài khoản <button onclick="sign_in()">Đăng nhập</button></p>
		</div>
		<span style="color:red;"></span>
		<span style="color:green;"></span>
		<div class="form-dangnhap">
			<form class="login-form" action="index.php" method="post">
				<input type="text" placeholder="username" name="username" />
				<input type="password" placeholder="password" name="password" />
				<input type="submit" name="submit" value="Đăng nhập" />
				
			</form>
			<p class="message">Chưa đăng ký? <button onclick="create_account()">Đăng ký</button>
			</p>
		</div>
	</div>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>
	</script>
	<script>

		function create_account(){
			$('.form-dangky').show();
			$('.form-dangnhap').hide();
		}

		function sign_in(){
			$('.form-dangky').hide();
			$('.form-dangnhap').show();
		}

	</script>






</body>

</html>