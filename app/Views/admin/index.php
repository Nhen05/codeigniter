<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Flat Login Form</title>
    <base href="<?= base_url()?>/admin/">

	<!-- Reset & Fonts -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom -->
	<link rel="stylesheet" href="css/login.css">

	<style>
		.form-dangky { display: none; }
	</style>
</head>

<body>
<div aria-live="polite" aria-atomic="true" class="position-relative">
		<div class="toast-container position-absolute top-0 end-0 p-3">
			<!-- Toast lỗi -->
			<?php if(session()->getFlashdata('MESSAGE_LOGIN_ERROR')): ?>
				<?php foreach(session()->getFlashdata('MESSAGE_LOGIN_ERROR') as $msg): ?>
					<div class="toast align-items-center text-bg-danger border-0 mb-2" role="alert" aria-live="assertive" aria-atomic="true">
						<div class="d-flex">
							<div class="toast-body">
								<strong>Thông báo:</strong> <?= esc($msg) ?>
							</div>
							<button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>

			<!-- Toast thành công -->
			<?php if(session()->getFlashdata('MESSAGE_LOGIN_SUCCESS')): ?>
				<?php foreach(session()->getFlashdata('MESSAGE_LOGIN_SUCCESS') as $msg): ?>
					<div class="toast align-items-center text-bg-success border-0 mb-2" role="alert" aria-live="assertive" aria-atomic="true">
						<div class="d-flex">
							<div class="toast-body">
								<strong>Thành công:</strong> <?= esc($msg) ?>
							</div>
							<button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
	<!-- Toast Container -->
	<div aria-live="polite" aria-atomic="true" class="position-relative">
		<div class="toast-container position-absolute top-0 end-0 p-3">
			<!-- Toast lỗi -->
			<?php if(session()->getFlashdata('MESSAGE_REGISTER_ERROR')): ?>
				<?php foreach(session()->getFlashdata('MESSAGE_REGISTER_ERROR') as $msg): ?>
					<div class="toast align-items-center text-bg-danger border-0 mb-2" role="alert" aria-live="assertive" aria-atomic="true">
						<div class="d-flex">
							<div class="toast-body">
								<strong>Thông báo:</strong> <?= esc($msg) ?>
							</div>
							<button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>

			<!-- Toast thành công -->
			<?php if(session()->getFlashdata('MESSAGE_REGISTER_SUCCESS')): ?>
				<?php foreach(session()->getFlashdata('MESSAGE_REGISTER_SUCCESS') as $msg): ?>
					<div class="toast align-items-center text-bg-success border-0 mb-2" role="alert" aria-live="assertive" aria-atomic="true">
						<div class="d-flex">
							<div class="toast-body">
								<strong>Thành công:</strong> <?= esc($msg) ?>
							</div>
							<button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
	<!-- Main Content -->
	<div class="container">
		<div class="info">
			<h1>Administration</h1>
		</div>
	</div>

	<div class="form ">
		<div class="thumbnail"><img src="images/manager.png" /></div>

		<div class="form-dangky">
			<form class="register-form" action="create" method="post">
				<input type="text" placeholder="username" name="username" value="<?= old('username') ?>" />
				<input type="text" placeholder="email address" name="email" value="<?= old('email') ?>" />
				<input type="password" placeholder="password" name="password" value="<?= old('password') ?>" />
				<input type="password" placeholder="Confirm password" name="repassword"  value="<?= old('repassword') ?>"/>
				<input type="submit" value="Đăng ký" />			
			</form>
			<p class="message">Đã có tài khoản? <button onclick="sign_in()">Đăng nhập</button></p>
		</div>

		<div class="form-dangnhap">
		<form class="register-form" action="login" method="post">
				<input type="text" placeholder="username" name="username" value="<?= old('username') ?>"/>
				<input type="password" placeholder="password" name="password" value="<?= old('password') ?>"/>
				<input type="submit" value="Đăng nhập" />
			</form>
			<p class="message">Chưa đăng ký? <button onclick="create_account()">Đăng ký</button></p>
		</div>
	</div>

	<!-- Scripts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

	<script>
		function create_account(){
			$('.form-dangky').show();
			$('.form-dangnhap').hide();
		}

		function sign_in(){
			$('.form-dangky').hide();
			$('.form-dangnhap').show();
		}

		// Tự động hiển thị toast và chuyển sang form đăng ký nếu có lỗi
		document.addEventListener('DOMContentLoaded', function () {
			// Hiển thị tất cả toast
			document.querySelectorAll('.toast').forEach(function (toastEl) {
				const toast = new bootstrap.Toast(toastEl, { delay: 5000 });
				toast.show();
			});

			// Nếu có lỗi thì show form đăng ký
			<?php if(session()->getFlashdata('MESSAGE_REGISTER_ERROR')): ?>
				create_account();
			<?php endif; ?>
		});
	</script>

</body>
</html>
