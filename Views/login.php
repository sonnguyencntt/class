<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<link rel="stylesheet" href="./../Assets/lib/font.css">
	<script src="./../Assets/lib/jquery.js"></script>

	<link rel="stylesheet" href="./../Assets/lib/bootstrap.css">
	<script src="./../Assets/lib/sweet.js"></script>
	<script src="./../Assets/lib/bootstrap.js"></script>



	<link rel="stylesheet" href="./../Assets/style.css">
	<link rel="stylesheet" href="./../Assets/login.css">

	<script src="./../Assets/login.js"></script>
</head>

<body>
	<div class="mainwrap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-5 login-form">
					<div class="header-login">
						<label for="">Đăng nhập</label>
					</div>
					<div class="body-login">
						<div class="form-group">
							<label>Tên đăng nhập</label>
							<input type="text" name="txtuser" class="form-control">
						</div>
						<div class="form-group">
							<label>Mật khẩu</label>
							<input type="password" name="txtpass" class="form-control">
						</div>
						<div class="form-group group-btn">
							<div class="input">
								<button class="btn btn-success" id="login">Đăng Nhập</button>
								<a href="register.php" class="btn btn-primary" id="login">Đăng Ký</a>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="alert-login">
		<h3>Thông báo !</h3>
		<p>Đăng nhập thất bại, vui lòng kiểm tra tên đăng nhập hoặc mật khẩu.</p>
	</div>
</body>

</html>