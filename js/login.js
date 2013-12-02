/**
 * @author TrongLoi
 */



function showLoginForm(){
	if($('#login-form').is(':visible')){
		$('#login-form').fadeOut('fast');
		$('#flogin a#btnShowLogin').removeClass("afterClick");
	}
	else{
		$('#flogin a#btnShowLogin').addClass("afterClick");
		$('#login-form').fadeIn();
	}
}

function exitLogin(){
	
	var data_exitlogin = "logout=true";
	$.ajax({
		type: "POST",
		url: "login.php",
		data: data_exitlogin,
		success: function(rs){
			console.log(rs)
			if(rs == "success"){
				location.reload();
			}
		}
	});

				
}

function login(){
	$('#login-form .loading').html('Loading...');
	var uemail = $('#login-form input[name="user_email"]').val();
	var upass = $('#login-form input[name="user_password"]').val();
	var data_login = 'login=true&uemail='+uemail+'&upass='+upass;
	
	$.ajax({
		type: "POST",
		url:	"login.php",
		data:	data_login,
		success: function(result){
			//console.log(result);
			$('#login-form .loading').html('');
			if(result == "login error"){
				$('#login-form .loading').html('<i class="text-danger">Đăng nhập thất bại</i>');
			}
			else{
				var getData = $.parseJSON(result);
				var liQuanLy = '';
				if(getData.level == 'admin'){
					liQuanLy = '<li><a href="admin/index-admin.php"><i class="glyphicon glyphicon-wrench"></i> Quản lý</a></li>';
				}
				if(getData.level == 'user'){
					liQuanLy = '<li id="showfRequestFilmBtn"><a onclick="showfRequestFilm()"><i class="glyphicon glyphicon-film"></i> Yêu cầu phim</a></li>';
				}
				
				$('div#flogin').html('<div class="btn-group">'
				+'<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">'
				+'<i class="glyphicon glyphicon-user"></i> '+uemail+' <span class="caret"></span>'
				+'</button>'
				+'<ul class="dropdown-menu dropdown-menu-default" role="menu">'
				+liQuanLy
				+'<li id="showfChangePass"><a><i class="glyphicon glyphicon-cog"></i> Đổi mật khẩu</a></li>'
				+'<li><a class="exitLoginbtn" title="Đăng xuất tài khoản" onclick="exitLogin()"><i class="glyphicon glyphicon-user"></i> Thoát</a></li>'
				+'</div>');
				
				$('#dacbiet').load('film-request.php #requestFilm-form');
				//Thông báo thành công
				//alert('Đăng nhập thành công!');
			}
		}
	});
}

function exitLoginForm(){
	$('#login-form').fadeOut();
	$('#flogin a#btnShowLogin').removeClass("afterClick");
}


