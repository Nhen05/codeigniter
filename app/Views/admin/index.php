<?php
// Kiểm tra xem có lỗi hoặc thông báo thành công không để quyết định hiển thị form nào
$showRegisterForm = session()->has('MESSAGE_ERROR') || session()->has('MESSAGE_SUCCESS');
// Lấy thông báo lỗi từ session, nếu không có thì mảng rỗng
$errors = session('MESSAGE_ERROR') ?? [];
// Lấy thông báo thành công từ session, nếu không có thì chuỗi rỗng
$success = session('MESSAGE_SUCCESS') ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Flat Login Form</title>

	<base href="<?= base_url() ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="<?= base_url('admin/css/login.css') ?>">

	<style>
		.form-dangky,
		.form-dangnhap {
			display: none;
		}
		.error-text {
			color: red;
			font-size: 13px;
			margin-top: 3px;
			margin-bottom: 10px;
			display: block;
		}
		.success-text {
			color: green;
			font-size: 14px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>

<div class="container">
	<div class="info">
		<h1>Administration</h1>
	</div>
</div>

<div class="form">
	<div class="thumbnail"><img src="<?= base_url('admin/images/manager.png') ?>" /></div>

	<!-- FORM ĐĂNG KÝ -->
	<div class="form-dangky" <?= $showRegisterForm ? 'style="display:block;"' : '' ?>>
		<?php if (!empty($success)): ?>
			<p class="success-text"><?= esc($success) ?></p>
		<?php endif ?>
		
		<form class="register-form" action="<?= base_url('admin/create') ?>" method="post">
			<input type="text" placeholder="username" name="username" value="<?= old('username') ?>" />
			<?php if (isset($errors['username'])): ?>
				<span class="error-text"><?= esc($errors['username']) ?></span>
			<?php endif ?>

			<input type="text" placeholder="email address" name="email" value="<?= old('email') ?>" />
			<?php if (isset($errors['email'])): ?>
				<span class="error-text"><?= esc($errors['email']) ?></span>
			<?php endif ?>

			<input type="password" placeholder="password" name="password" />
			<?php if (isset($errors['password'])): ?>
				<span class="error-text"><?= esc($errors['password']) ?></span>
			<?php endif ?>

			<input type="password" placeholder="Confirm password" name="repassword" />
			<?php if (isset($errors['repassword'])): ?>
				<span class="error-text"><?= esc($errors['repassword']) ?></span>
			<?php endif ?>

			<input type="submit" name="submit1" value="Đăng ký" />			
		</form>
		<p class="message">Đã có tài khoản? <button onclick="sign_in()">Đăng nhập</button></p>
	</div>

	<!-- FORM ĐĂNG NHẬP -->
	<div class="form-dangnhap" <?= $showRegisterForm ? 'style="display:none;"' : 'style="display:block;"' ?>>
		<form class="login-form" action="<?= base_url('admin/login/process') ?>" method="post">
			<input type="text" placeholder="username" name="username" />
			<input type="password" placeholder="password" name="password" />
			<input type="submit" name="submit" value="Đăng nhập" />
		</form>
		<p class="message">Chưa đăng ký? <button onclick="create_account()">Đăng ký</button></p>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
