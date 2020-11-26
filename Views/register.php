
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
 <style>
     .alert-register>*{
        color: green;
       
	 }
	 .alert-register{
		display: none;
		position: fixed;
		width: 350px;
		right: 0;
		height: 100px;
		top: 50px;
		z-index: 1000;
		padding: 10px;
	 }
 </style>
 <script src = "./../Assets/login.js"></script>
		</head>
		<body  style = "background: #a5b5b6;">
			<div class="mainwrap" style="    position: fixed;
    width: 100%;
    display: flex;
    height: 100%;">
				<div class="" style="display: flex;
    margin: auto;">
					<div class="" style="    margin: auto;
    width: 600px;">
						<div class=" login-form" style="    max-width: 500px; margin-top:0%">
							<div class="header-login" style = "height : 100px;display: flex;" >
							<label style="font-size: 30px;
    color: darkred;margin:auto" for="">Đăng ký</label>
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
								<div class="form-group" style="display: flex;">
                                    <div style="  margin-left: auto;">
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
	