
	<!DOCTYPE html>
		<html>
		<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="./../Assets/style.css">
 <script src = "./../Assets/login.js"></script>
		</head>
		<body  style = "background: #a5b5b6;">
			<div class="mainwrap">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-5 login-form">
							<div class="header-login" style = "height : 100px;display: flex;" >
							<label style="font-size: 30px;
    color: darkred;margin:auto" for="">Đăng nhập</label>
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
								<div class="form-group" style="display: flex;">
									<div style="  margin-left: auto;">
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
	