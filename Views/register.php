
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
 <link rel="stylesheet" href="./../Assets/register.css">


 <script src = "./../Assets/login.js"></script>
		</head>
		<body  >
			<div class="mainwrap" >
				<div class="box1" >
					<div class="box2">
						<div class="login-form" >
							<div class="header-login" >
							<label for="">Đăng ký</label>
							</div>
							<div class="body-login">
								<div class="form-group">
									<label>Tên đăng nhập</label>
									<input type="text" name="txtuser" class="form-control">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="emial" name="txtmail" class="form-control">
                                </div>
                                <div class="form-group">
									<label>Mật khẩu</label>
									<input type="password" name="txtpass" class="form-control">
                                </div>
                                <div class="form-group">
									<label>Nhập lại mật khẩu</label>
									<input type="password" name="txtrepeat" class="form-control">
								</div>
								<div class="form-group btn-group" >
                                    <div class="input">
                                    <a href="login.php" class="btn btn-success">Quay lại đăng nhập</a>

                                    <button class="btn btn-primary" id="register">Đăng Ký</button>
                                    

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
            <div class="alert-register" >
				<h3>Thông báo !</h3>
				<p>Đăng nhập thất bại, vui lòng kiểm tra tên đăng nhập hoặc mật khẩu.</p>
            </div>
            
		</body>
	</html>
	