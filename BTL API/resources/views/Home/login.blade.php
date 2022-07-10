<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng Nhập Tài Khoản</title>
	<link rel="shortcut icon" href="/resources/img/computer.png" type="image/x-icon" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 

<!-- Bootstrap core CSS -->
<link href="/resources/css/bootstrap.css" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="/resources/css/font-awesome.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="/resources/css/style.css" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="/resources/css/responsive.css" rel="stylesheet">

<!-- Colors for this template -->
<link href="/resources/css/colors.css" rel="stylesheet">

<!-- Version Tech CSS for this template -->
<link href="/resources/css/version/tech.css" rel="stylesheet">


</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						Đăng Nhập
					</span>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Nhập tài khoản">
						<input class="input100" id="tk" type="text" name="username" placeholder="Tài Khoản">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Nhập mật khẩu">
						<input class="input100" id="mk" type="password" name="pass" placeholder="Mật Khẩu">
						<span class="focus-input100"></span>
					</div>
					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Quên
						</span>
						<a href="#" class="txt2">
							Tài khoản / Mật khẩu?
						</a>
					</div>
					<div class="container-login100-form-btn">
						<button=
                         class="login100-form-btn" onclick="checklogin()">
							Đăng Nhập
						</button=>
					</div>
					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Bạn không có tài khoản?
						</span>

						<a href="#" class="txt3">
							Đăng ký ngay.
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="widget">
                            <div class="footer-text text-left">
                                <a href="index.html"><img src="/resources/img/version/tech-footer-logo.png" alt="" class="img-fluid"></a>
                                <p>Tech Blog là một trang web tin tức về công nghệ đỉnh cao. Cập nhật tin tức mới nhất trên từng ngày từng giờ, từng phút, từng giây.!!</p>
                                <p>Đại Học Sư Phạm Kỹ Thuật Hưng Yên</p>
                                <p>Khoa : Công Nghệ Thông Tin</p>
                                
                                <div class="social">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>

                                <hr class="invis">

                                <div class="newsletter-widget text-left">
                                    <form class="form-inline">
                                        <input type="text" class="form-control" placeholder="Enter your email address">
                                        <button type="submit" class="btn btn-primary">Gửi</button>
                                    </form>
                                </div><!-- end newsletter -->
                            </div><!-- end footer-text -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Tin Tức Phổ Thông</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="/home/">Công nghệ <span>(21)</span></a></li>
                                    <li><a href="/home/tablet">Tablet <span>(15)</span></a></li>
                                    <li><a href="/home/smartphone">SmartPhone <span>(31)</span></a></li>
                                    <li><a href="/home/computer">Computer <span>(22)</span></a></li>
                                    <li><a href="/home/thuthuat">Thủ Thuật công nghệ <span>(66)</span></a></li>
                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Bởi</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">Về Chúng Tôi</a></li>
                                    <li><a href="#">UTEHY</a></li>
                                    <li><a href="#">Đại Học SPKT Hưng Yên</a></li>
                                    <li><a href="#">TK17.1</a></li>
                                    <li><a href="#">101191</a></li>
                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="copyright">&copy; Tech Blog. Design: UTEHY.</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->
        
    </div><!-- end wrapper -->
	<script>
		function checklogin(){
        var tk=document.getElementById("tk").value;
        var mk=document.getElementById("mk").value;
        if(tk == 'admin' && mk == 'admin') {
			alert("Chào mừng Admin");
            window.location="/admincp/";
        }
		else if(tk == 'hoangviet' && mk == 'hoangviet'){           
			alert("Chào mừng Hoangviet");
            window.location="/home/";
        }
		else if(tk == 'hoangviet1' && mk == 'hoangviet'){           
			alert("Chào mừng Hoangviet1");
            window.location="/home/";
        }
		else if(tk == 'hoangviet2' && mk == 'hoangviet'){           
			alert("Chào mừng Hoangviet2");
            window.location="/home/";
        }
        else{
            alert("Sai tài khoản hoặc mật khẩu !");
        }
    }
	</script>
	
<!--===============================================================================================-->
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/bootstrap/js/popper.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/daterangepicker/moment.min.js"></script>
	<script src="/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/js/loginmain.js"></script>

</body>
</html>