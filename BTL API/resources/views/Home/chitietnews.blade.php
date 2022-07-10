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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond./resources/js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
<?php       // Tang so luong luot xem 
        // if(isset($_GET['id'])) $id=$_GET['id']; else $id=0;
        // $conn = mysqli_connect('localhost', 'root', '', 'tintuccongnghe');
        // if (!$conn) {
        //     die("Kết nối thất bại: " . mysqli_connect_error());
        // }
        // $sql = "UPDATE news SET numread=numread+1 WHERE id=".$id;
        // if (mysqli_query($conn, $sql)) {
        //     echo "update thành công";
        // } else {
        //     echo "Update thất bại: " . mysqli_error($conn);
        // }
        // mysqli_close($conn);
    ?> 
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
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"ng-repeat = "news in news|filter:'Computer'|limitTo:4" >
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="/home/computer/" title="">
                                                                            <img src="@{{news.imageLink}}" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">@{{news.categoryID}}</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="/home/" title="">@{{news.title}}</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div id="cat02" class="tabcontent" >
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12" ng-repeat = "news in news|filter:'Tablet'|limitTo:4">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="/home/Tablet/" title="">
                                                                            <img src="@{{news.imageLink}}" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">@{{news.categoryID}}</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="/home/" title="">@{{news.title}}</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div id="cat03" class="tabcontent" >
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12" ng-repeat = "news in news|filter:'Thủ Thuật'|limitTo:4">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="/home/Smartphone" title="">
                                                                            <img src="@{{news.imageLink}}" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">@{{news.categoryID}}</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="/home/" title="">@{{news.title}}</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div id="cat04" class="tabcontent" >
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12" ng-repeat = "news in news|filter:'Smartphone'|limitTo:4">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="/home/" title="">
                                                                            <img src="@{{news.imageLink}}" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">@{{news.categoryID}}</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="/home/" title="">@{{news.title}}</a></h4>
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
  
        <section class="section single-wrapper" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12" ng-repeat="news in news">
                        <div class="page-wrapper">
                            <div class="blog-title-area text-center" >
                                <ol class="breadcrumb hidden-xs-down">
                                    <li class="breadcrumb-item"><a href="/home/">Home</a></li>
                                    <li class="breadcrumb-item active">@{{news.title}}</li>
                                </ol>

                                <span class="color-orange"><a href="tech-category-01.html" title="">@{{news.categoryID}}</a></span>

                                <h3>@{{news.title}}</h3>

                                <div class="blog-meta big-meta">
                                    <small><a href="/home/" title="">21 July, 2022</a></small>
                                    <small><a href="/home/author" title="">by Viet</a></small>
                                    <small><a href="/home/" title=""><i class="fa fa-eye"></i>@{{news.numRead}}</a></small>
                                </div><!-- end meta -->

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="/home/" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="/home/" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="/home/" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="@{{news.imageLink}}" alt="" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">  
                                <div class="pp">
                                    <p></p>
                                </div><!-- end pp -->

                                <div class="pp">
                                    <h3><strong>@{{news.title}}</strong></h3>

                                    <p>Tuy nhiên, chỉ các phiên bản cao cấp của chiếc máy tính xách tay này được trang bị bộ xử lý Intel Core thế hệ thứ 10, trong khi biến thể tiêu chuẩn của nó tiếp tục sử dụng bộ xử lý Intel Core thế hệ thứ 8. Vậy sự chênh lệch về hiệu năng giữa hai phiên bản này là như thế nào?</p>

                                    <ul class="check">
                                        <li>Bạn nghĩ sao về hiệu năng của chiếc máy tính xách tay thế hệ mới.</li>
                                        <li>bàn phím Magic Keyboard mới.</li>
                                        <li>hiệu năng được nâng cấp.</li>
                                        <li>Đây là CPU tương tự đã được sử dụng trong các máy đời cũ</li>
                                        <li>nó đạt điểm trung bình 1,236 điểm.</li>
                                    </ul>

                                    <p>Theo trang iPhonehacks, giá khởi điểm của MacBook Pro 13 inch 2020 là 1,299 USD và biến thể này sử dụng bộ xử lý Intel Core i5 lõi tứ 8 GHz tốc độ 1.4 GHz. Đây là CPU tương tự đã được sử dụng trong phiên bản MacBook Pro 13 inch 2019. Và theo trang đo hiệu năng Geekbench, phiên bản này đạt 927 điểm trong bài kiểm tra CPU lõi đơn và 3,822 điểm trong bài kiểm tra CPU đa lõi. </p>

                                    <p><img src="@{{news.imageLink}}" class="float-left" width="380" alt="">Suspendisse ultrices placerat dolor sed efficitur. Morbi in laoreet diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris ut massa id lectus laoreet porta non in metus. Donec nibh justo, tincidunt non justo ut, tincidunt malesuada turpis. Cras pellentesque sollicitudin ex eget pharetra.rta non in metus. Donec nibh justo, tincidunt non justo ut, tincidunt malesuada turpis. Cras pellentesque sollicitudin ex eget pharetra.</p>

                                    <h3><strong>@{{news.title}} </strong></h3>


                                    <p>Mặt khác, biến thể 1,799 USD của MacBook Pro 2020 13 inch được trang bị bộ vi xử lý Intel Core i5 lõi tứ tốc độ 2.0 GHz. Trong thử nghiệm Geekbench, nó đạt điểm trung bình 1,236 điểm trong thử nghiệm CPU lõi đơn và 4,455 điểm trong thử nghiệm CPU đa lõi. Điều đó có nghĩa là phiên bản cao cấp hơn của MacBook Pro 13 inch 2020 sẽ có hiệu năng CPU tốt hơn khoảng 16.5% so với biến thể tiêu chuẩn của nó.</p>

                                    <p><img src="@{{news.imageLink}}" class="float-right" width="380" alt="">Đó là chưa kể giữa hai model này còn có khác biệt về hiệu suất RAM. Cụ thể, biến thể tiêu chuẩn vẫn sử dụng RAM LPDDR3 2133 MHz, trong khi phiên bản 1,799 USD sử dụng RAM LPDDR4X 3733 MHz. Vì vậy, nếu bạn nghĩ rằng tất cả các biến thể được trang bị CPU Intel Core i5 của MacBook Pro 13 inch mới sẽ hoạt động tương tự nhau thì bạn đã nhầm.</p>

                                    <p>Được biết, Apple trước đó cũng cho biết rằng những người dùng đang nâng cấp từ phiên bản CPU lõi kép của MacBook Pro 13 inch thế hệ trước lên phiên bản 2020 sẽ có thể thấy hiệu năng lên tới 2.8 lần. </p>
                                </div><!-- end pp -->
                            </div><!-- end content -->

                            <div class="blog-title-area">
                                <div class="tag-cloud-single">
                                    <span>Tags</span>
                                    <small><a href="/home/computer/" title="">Computer</a></small>
                                    <small><a href="/home/smartphone/" title="">Smartphone</a></small>
                                    <small><a href="/home/thuthuat/" title="">Thủ Thuật Công Nghệ</a></small>
                                    <small><a href="/home/" title="">Trang chủ</a></small>
                                </div><!-- end meta -->
                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="/home/" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Chỉa sẻ lên Facebook</span></a></li>
                                        <li><a href="/home/" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Chia sẻ lên Twitter</span></a></li>
                                        <li><a href="/home/" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->
                            <hr class="invis1">

                            <div class="custombox authorbox clearfix">
                                <h4 class="small-title">Tác Giả</h4>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <img src="/resources/img/LOGO UTEHY.ico" alt="" class="img-fluid rounded-circle"> 
                                    </div><!-- end col -->

                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <h4><a href="/home/">Đại Học Sư Phạm Kỹ Thuật Hưng Yên</a></h4>
                                        <p>Chào bạn. Hãy vào <a href="http://www.utehy.edu.vn/#/">website của chúng tôi</a> để có thêm thông tin về trường Đại học sư phạm kỹ thuật hưng yên. Cơ sở Mỹ Hào. Khoa công nghệ thông tin. Thanks for stop Tech Blog!</p>

                                        <div class="topsocial">
                                            <a href="/home/" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="/home/" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                                            <a href="/home/" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                            <a href="/home/" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="/home/" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                            <a href="/home/" data-toggle="tooltip" data-placement="bottom" title="Website"><i class="fa fa-link"></i></a>
                                        </div><!-- end social -->

                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end author-box -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">Bình Luận</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="comments-list" id="list">
                                            <div class="media" ng-if="news.id==ph.id_new" ng-repeat="ph in phanhoi">
                                                <a class="media-left" href="/home/">
                                                    <img src="/resources/img/computer.png" alt="" class="rounded-circle">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading user_name">Việt <small>Từ :@{{ph.created_at}}</small></h4>
                                                    <p>@{{ph.note}}</p>
                                                    <a href="/home/" class="btn btn-primary btn-sm">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end custom-box -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">Bạn muốn bình luận ?</h4>
                                <div class="row">
                                    <div id="top" class="col-lg-12">
                                        <form class="form-wrapper">
                                            <textarea class="form-control"  ng-model="ph.note" placeholder="Nội dung bình luận"></textarea>
                                            <button type="submit" id="enter" class="btn btn-primary">Nhân enter để bình luận !</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Tin tức nổi bật</h2>
                                <div class="trend-videos">
                                <div class="blog-box" ng-repeat = "news in listnews |limitTo :13">
                                        <div class="post-media" >
                                            <a href="/home/chitietnews?id=@{{news.newsID}}" title="">
                                                <img src="@{{news.imageLink}}" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class="videohover"></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="/home/chitietnews?id=@{{news.newsID}}" title="">@{{news.title}}</a></h4>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                    <hr class="invis">
                                </div><!-- end videos -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Phản hồi gần đây</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="/home/" class="list-group-item list-group-item-action flex-column align-items-start" ng-repeat="ph in phanhoi|limitTo:5">
                                            <div class="w-100 justify-content-between">
                                                <img src="/resources/img/computer.png" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">@{{ ph.note }}</h5>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Theo dõi chúng tôi</h2>

                                <div class="row text-center">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="https://www.facebook.com/DaiHocSuPhamKyThuatHungYen" class="social-button facebook-button">
                                            <i class="fa fa-facebook"></i>
                                            <p>10k</p>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="http://utehy.edu.vn/#/" class="social-button twitter-button">
                                            <i class="fa fa-twitter"></i>
                                            <p>8k</p>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="http://utehy.edu.vn/#/" class="social-button google-button">
                                            <i class="fa fa-google-plus"></i>
                                            <p>18k</p>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="https://www.youtube.com/channel/UCVy9p7eBCMmHVEITk4yPZjg" class="social-button youtube-button">
                                            <i class="fa fa-youtube"></i>
                                            <p>20k</p>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end widget -->

                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="/resources/img/LOGO UTEHY.ico" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
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
    <script src="/js/chitietnewscontroller.js"></script>
    <script>
        var i = 1;
        $("textarea").keyup(function(e) {
        if (e.keyCode == 13) {
        var html = $(this).val();
        var newHTML = "<div class='media'><a class='media-left' href='/home/'><img src='/resources/img/computer.png' class='rounded-circle'></a><div class='media-body'><h4 class='media-heading user_name'>Việt <small>Vừa xong.</small></h4><p>"+html+"</p><a href='/home/' class='btn btn-primary btn-sm'>Reply</a></div></div>"
        $("#list").append(newHTML);
        $(this).val("");
        i++;
        }
        })
    </script>
</body>
</html>
