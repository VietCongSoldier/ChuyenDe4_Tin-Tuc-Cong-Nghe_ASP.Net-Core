@extends('_home_layout')
@section('content')
<hr class="invis">
        <!-- <section class="section first-section" ng-app='myapp' ng-controller = 'mycontroller'>
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                     <div class="first-slot" ng-repeat = "new in news|limitTo: 1">
                        <div class="masonry-box post-media">
                             <img src="@{{new.imageLink}}" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="/home/@{{new.categoryID}}" title="">@{{new.categoryID}}</a></span>
                                        <h4><a href="/home/chitietnews?id=@{{new.newsID}}" title="">@{{new.title}}</a></h4>
                                        <small><a href="/home/chitietnews?id=@{{new.newsID}}" title="">24 July, 2021</a></small>
                                        <small><a href="/home/author" title="">by Viet</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="second-slot" ng-repeat = "new in news |filter:'Smartphone' | limitTo :4:3">
                        <div class="masonry-box post-media">
                             <img src="@{{new.imageLink}}" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="/home/@{{new.categoryID}}" title="">@{{new.categoryID}}</a></span>
                                        <h4><a href="/home/chitietnews?id=@{{new.newsID}}" title="">@{{new.title}}</a></h4>
                                        <small><a href="/home/chitietnews?id=@{{new.newsID}}" title="">03 July, 2021</a></small>
                                        <small><a href="/home/author" title="">by Viet</a></small>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div> -->

                    <!-- <div class="last-slot">
                        <div class="masonry-box post-media">
                             <img src="/resources/img/upload/tech_03.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="/home/" title="">Technology</a></span>
                                        <h4><a href="/home/" title="">The most reliable Galaxy Note 8 images leaked</a></h4>
                                        <small><a href="/home/" title="">01 July, 2017</a></small>
                                        <small><a href="/home/author" title="">by Jessica</a></small>
                                    </div> end meta
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="section" ng-app='myapp' ng-controller = 'mycontroller'>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">                      
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                            <div class="input-group">
                                <input ng-model='q' type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                <button type="button" class="btn btn-outline-primary">search</button>
                            </div>
                            <hr class="invis">
                                <h4 class="pull-left">Tin Tức Mới Nhất <a href="/home/"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->
                            <div class="blog-list clearfix">
                                <div class="blog-box row" dir-paginate = "new in news|filter:q| itemsPerPage: pageSize" current-page="currentPage">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="/home/chitietnews?id=@{{new.newsID}}" title="">
                                                <img src="@{{new.imageLink}}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->
                                    <script>
                                    </script>
                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="/home/chitietnews?id=@{{new.newsID}}" title="">@{{new.title}}</a></h4>
                                        <p>@{{new.description}}.</p>
                                        <small class="firstsmall"><a class="bg-orange" href="/home/@{{new.categoryID}}" title="">@{{new.categoryID}}</a></small>
                                        <small><a href="/home/" title="">21 July, 2022</a></small>
                                        <small><a href="/home/author" title="">by Việt</a></small>
                                        <small><a href="/home/" title=""><i class="fa fa-eye"></i> @{{new.numRead}}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                                
                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-12">
                                    <ul class="pagination justify-content-start">
                                    <dir-pagination-controls max-size='5' id='abuttonv' on-page-change="pageChangeHandler(newPageNumber)"></dir-pagination-controls>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar" ng-app='myapp' ng-controller = 'mycontroller'>
                            <div class="widget">
                                <h2 class="widget-title">Smartphone News</h2>
                                <div class="trend-videos">
                                    <div class="blog-box" ng-repeat = "new in news|filter:'Smartphone'">
                                        <div class="post-media" >
                                            <a href="/home/chitietnews?id=@{{new.newsID}}" title="">
                                                <img src="@{{new.imageLink}}" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class="videohover"></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="/home/chitietnews?id=@{{new.newsID}}" title="">@{{new.title}}</a></h4>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                    <hr class="invis">
                                </div><!-- end videos -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Phản hồi gần đây</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                    <a href="/home/" class="list-group-item list-group-item-action flex-column align-items-start" ng-repeat="ph in phanhoi">
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
@stop