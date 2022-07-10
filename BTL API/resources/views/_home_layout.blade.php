<!DOCTYPE html>
<html lang="en"ng-app='myapp' ng-controller = 'mycontroller'>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Tech Blog - Tin Tức Công Nghệ Mới Nhất</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="/resources/img/computer.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/resources/img/apple-touch-icon.png">
    
    <!-- Design fonts -->
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
    <style>
        #abuttonv a {
            color: black;
            padding: 8px 16px;
            text-decoration: none;
            display: inline-block;
            border:radius;
            }
        #abuttonv a.active{
            background-color: #1aa3ff;
            color: white;
        }
    </style>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond./resources/js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="/home/"><img src="/resources/img/version/tech-logo.png" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/home/">Trang Chủ</a>
                            </li>
                            <li class="nav-item dropdown has-submenu menu-large hidden-md-down hidden-sm-down hidden-xs-down">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tin Tức</a>
                                <ul class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                                    <li>
                                        <div class="container">
                                            <div class="mega-menu-content clearfix" ng-app='myapp' ng-controller = 'mycontroller'>
                                                <div class="tab">
                                                    <button class="tablinks active" onclick="openCategory(event, 'cat01')">Computer</button>
                                                    
                                                    <button class="tablinks" onclick="openCategory(event, 'cat03')">Thủ Thuật</button>
                                                    <button class="tablinks" onclick="openCategory(event, 'cat04')">Smartphone</button>
                                                </div>

                                                <div class="tab-details clearfix">
                                                    <div id="cat01" class="tabcontent active" > 
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12" ng-repeat = "new in news|filter:'Computer'|limitTo:4" >
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="/home/computer/" title="">
                                                                            <img src="@{{new.imageLink}}" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">@{{new.categoryID}}</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="/home/" title="">@{{new.title}}</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div id="cat02" class="tabcontent" >
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12" ng-repeat = "new in news|filter:'Tablet'|limitTo:4">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="/home/Tablet/" title="">
                                                                            <img src="@{{new.imageLink}}" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">@{{new.categoryID}}</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="/home/" title="">@{{new.title}}</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div id="cat03" class="tabcontent" >
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12" ng-repeat = "new in news|filter:'Thủ Thuật'|limitTo:4">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="/home/Smartphone" title="">
                                                                            <img src="@{{new.imageLink}}" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">@{{new.categoryID}}</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="/home/" title="">@{{new.title}}</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div id="cat04" class="tabcontent" >
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12" ng-repeat = "new in news|filter:'Smartphone'|limitTo:4">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="/home/" title="">
                                                                            <img src="@{{new.imageLink}}" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">@{{new.categoryID}}</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="/home/" title="">@{{new.title}}</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div> 
                                                </div><!-- end tab-details -->
                                            </div><!-- end mega-menu-content -->
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/home/computer/">Computer</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="/home/smartphone/">Smartphone</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="/home/thuthuat/">Thủ Thuật</a>
                            </li>                   
                            <li class="nav-item">
                                <a class="nav-link" href="/home/contact/">Về chúng tôi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/home/login/">Đăng Nhập</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-rss"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-android"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-apple"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->
  
    @yield('content')
    @yield('acc')

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
                        <div class="copyright">&copy; Tech Blog. Design: Đại Học Sư Phạm Kỹ Thuật Hưng Yên.</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <button class="dmtop">Cuộn để lên đầu trang</button>
        
    </div><!-- end wrapper -->
    <script src="/resources/js/jquery.min.js"></script>
    <script src="/resources/js/tether.min.js"></script>
    <script src="/resources/js/bootstrap.min.js"></script>
    <script src="/resources/js/custom.js"></script>
    <script src="/js/angular.min.js"></script>
    <script src="/js/newshomecontroller.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://rawgit.com/michaelbromley/angularUtils-pagination/master/dirPagination.js"></script>
</body>
</html>