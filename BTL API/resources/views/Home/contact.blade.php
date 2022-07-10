@extends('_home_layout')
@section('content')

        <div class="page-title lb single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-envelope-open-o bg-orange"></i> Về chúng tôi. <small class="hidden-xs-down hidden-sm-down">Đại học sư phạm kỹ thuật Hưng Yên. </small></h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/home/">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-lg-5">
                                    <img src="/resources/img/LOGO UTEHY.ico" style="width:200px" alt="">
                                    <h4>Chúng tôi là ai?</h4>
                                    <p>Trường Đại học SPKT Hưng Yên (tên tiếng Anh: Hung Yen University of Technology and Education; gọi tắt là UTEHY, hay SKH) là trường ĐH công lập trực thuộc Bộ GD&ĐT, đóng trên địa bàn của tỉnh Hưng Yên.</p>
                   
                                    <h4>Chúng tôi giúp được gì?</h4>
                                    <p>Đào tạo theo định hướng ứng dụng có chất lượng cao đáp ứng nhu cầu ngày càng đa dạng của xã hội về nguồn lực lao động. Trường được giao nhiệm vụ đào tạo tiến sỹ, thạc sỹ, kỹ sư công nghệ, cử nhân và giáo viên kỹ thuật tại miền Bắc Việt Nam. </p>
             
                                    <h4>Đặt câu hỏi cho chúng tôi!</h4>
                                    <p> Copyright ©2022 Website Trường Đại học Sư Phạm Kỹ Thuật Hưng Yên</p>
                                </div>
                                <div class="col-lg-7">
                                    <form class="form-wrapper">
                                        <input type="text" class="form-control" placeholder="Họ và tên">
                                        <input type="text" class="form-control" placeholder="Email">
                                        <input type="text" class="form-control" placeholder="Số điện thoại">
                                        <input type="text" class="form-control" placeholder="Ghi chú">
                                        <textarea class="form-control" placeholder="Nội Dung"></textarea>
                                        <button type="submit" class="btn btn-primary">Gửi <i class="fa fa-envelope-open-o"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
@stop