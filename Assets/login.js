$(document).ready(function(){
	$('#login').click(function(){
		var user = $('input[name="txtuser"]').val();
		var pass = $('input[name="txtpass"]').val();
		if(user =='' || pass =='' ||user.length == 0 || pass.length == 0  || user ==' ' || pass ==' ' ){
			$('.alert-login').html('<h3>Thông báo !</h3><p>Vui lòng điền đầy đủ thông tin đăng nhập</p>').fadeIn().delay(1000).fadeOut('slow');
		}else{
			$.ajax({
            type:'POST',
            url:'./../Controllers/checklogin.php',
            data:{
			user : user,
			pass : pass
            },
            dataType:'json'
	    	}).done(function(ketqua){
	    		if(ketqua=='1'){
	    			window.location.replace("./../index.php");
				}else
				{
	    			$('.alert-login').html('<h3>Thông báo !</h3><p>Tên đăng nhập hoặc mật khẩu không chính xác</p>').fadeIn().delay(1000).fadeOut('slow');
	    		}
	    	});
		}
	});

	$('#register').click(function(){
		var name = $('input[name="txtuser"]').val();
		var pass = $('input[name="txtpass"]').val();
		var email = $('input[name="txtmail"]').val();
		var repeat = $('input[name="txtrepeat"]').val();

		if(name =='' || pass =='' ||name.length == 0 || pass.length == 0  || name ==' ' || pass ==' ' ||email ==""||repeat==""||email.length==0 ||repeat.length==0 ){
			$('.alert-login').html('<h3>Thông báo !</h3><p>Vui lòng điền đầy đủ thông tin đăng nhập</p>').fadeIn().delay(1000).fadeOut('slow');
		}else{
			if(pass != repeat)
			{
				$('.alert-login').html('<h3>Thông báo !</h3><p>Nhập lại mật khẩu không giống nhau</p>').fadeIn().delay(1000).fadeOut('slow');
				return;
			}
			$.ajax({
            type:'POST',
            url:'./../Controllers/insertuser.php',
            data:{
			name : name,
			email : email,
			pass : pass
            },
            dataType:'json'
	    	}).done(function(ketqua){
				console.log(ketqua);
	    		if(ketqua=='1'){
					
					$('.alert-register').html('<h3>Thông báo !</h3><p>Đăng ký thành công</p>').fadeIn().delay(1000).fadeOut('slow');

				}else
				{
	    			$('.alert-login').html('<h3>Thông báo !</h3><p>Đã xảy ra lỗi</p>').fadeIn().delay(1000).fadeOut('slow');
	    		}
	    	});
		}
	});



	
});