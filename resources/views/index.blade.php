<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sistem Informasi Pengelolaan Laundry - DiazCode</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('frontend/img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link href="{{ asset('frontend/style.css')}}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{ asset('frontend/css/responsive.css')}}" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12 col-lg-10">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Logo -->
                            <a class="navbar-brand" href="#">Silandry.</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimoni</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak Kami</a></li>
                                </ul>
                                <div class="sing-up-button d-lg-none">
                                    <a href="{{ route('login')}}">Masuk</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Signup btn -->
                <div class="col-12 col-lg-2">
                    <div class="sing-up-button d-none d-lg-block">
                        <a href="{{route('login')}}">Masuk</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md">
                    <div class="wellcome-heading">
                        <h2>Sistem Informasi Pengelolaan Laundry</h2>
                        <h3>C</h3>
                        <p>Rasakan Kemudahan dan kecanggihan dalam memanajemen usaha laundry anda</p>
                    </div>
                    <div class="get-start-area">
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb" style="transform: translateY(-100px);">
            <img src="{{ asset('frontend/img/bg-img/app.png')}}" alt="">
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-white section_padding_100" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <h2>KENAPA HARUS SILANDRY</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-icon">
                            <i class="ti-mobile" aria-hidden="true"></i>
                        </div>
                        <h4>Mudah digunakan</h4>
                        <p>Kami bangun sebuah sistem yang dimana aturan dalam sistem teserbut adalah kemudahan dalam penggunaannya</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-icon">
                            <i class="ti-ruler-pencil" aria-hidden="true"></i>
                        </div>
                        <h4>Desain Menarik</h4>
                        <p>Kami bangun dengan sebuah desain agar terlihat semenarik mungkin sehingga pengguna tidak bosan</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-icon">
                            <i class="ti-settings" aria-hidden="true"></i>
                        </div>
                        <h4>Mudah Dimodifikasi</h4>
                        <p>Aplikasi yang dibangun dapat dimodifikasi dengan mudah, dikarenakan menggunakan teknologi terbaru seperti HTML5 dan CSS3</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Cool Facts Area Start ***** -->
    <section class="cool_facts_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-area">
                            <h3><span class="counter">90</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-arrow-down-a"></i>
                            <p>PENGGUNA</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="counter-area">
                            <h3><span class="counter">120</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-happy-outline"></i>
                            <p>KLIEN SENANG</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="counter-area">
                            <h3><span class="counter">40</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-person"></i>
                            <p>MEMBER AKTIF</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.8s">
                        <div class="counter-area">
                            <h3><span class="counter">10</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-ios-star-outline"></i>
                            <p>OUTLET</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Cool Facts Area End ***** -->


    <!-- ***** Client Feedback Area Start ***** -->
    <section class="clients-feedback-area bg-white section_padding_100 clearfix" id="testimonials">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="slider slider-for">
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ Wow.. aplikasi ini sangat memudahka saya dalam mengelola laundry saya ”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Muhammad Rivaldi</h5>
                                <p>Ceo Colorlib</p>
                            </div>
                        </div>
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ Pengontrolan keuangan menjadi semakin mudah. ”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Anisa Aulia</h5>
                                <p>Developer</p>
                            </div>
                        </div>
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ Transaksi yang begitu mudah, meningkatkan kecepatan pelayanan ”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Santi Sri Putri</h5>
                                <p>Marketer</p>
                            </div>
                        </div>
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ Saya memakai selama beberapa tahun dan masih puas. ”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Delia puteri</h5>
                                <p>Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Client Thumbnail Area -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="slider slider-nav">
                        <div class="client-thumbnail">
                            <img src="{{ asset('frontend/img/bg-img/client-3.jpg')}}" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="{{ asset('frontend/img/bg-img/client-2.jpg')}}" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="{{ asset('frontend/img/bg-img/client-1.jpg')}}" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="{{ asset('frontend/img/bg-img/client-2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Client Feedback Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
    <section class="our-monthly-membership section_padding_50 clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="membership-description">
                        <h2>Gabung menjadi member kami sekarang</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="get-started-button wow bounceInDown" data-wow-delay="0.5s">
                        <a href="{{route('login')}}">MULAI</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->

    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 clearfix" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Hubungi Kami!</h2>
                        <div class="line-shape"></div>
                    </div>
                    <div class="footer-text">
                        <p>Terima kasih telah mengirim pesan, kami sangat menerima krtik dan saran!</p>
                    </div>
                    <div class="address-text">
                        <p><span>Alamat:</span> Jl.Babakan Tiga no.82</p>
                    </div>
                    <div class="phone-text">
                        <p><span>Telepon:</span> +6283822623170</p>
                    </div>
                    <div class="email-text">
                        <p><span>Email:</span> silandry@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Form Start-->
                    <div class="contact_from">
                        <form action="#" method="post">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama lengkap" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email anda" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Pesan anda *" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <button type="submit" class="btn submit-btn">Kirim</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- footer logo -->
        <div class="footer-text">
            <h2>SILANDRY.</h2>
        </div>
        <!-- social icon-->
        <div class="footer-social-icon">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="active fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
        <div class="footer-menu">
            <nav>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
        <!-- Foooter Text-->
        <div class="copyright-text">
            <p>Copyright ©{{date('Y')}} Designed by <a href="#" target="_blank">Adiatna Sukmana</a></p>
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="{{ asset('frontend/js/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
    <!-- All Plugins JS -->
    <script src="{{ asset('frontend/js/plugins.js')}}"></script>
    <!-- Slick Slider Js-->
    <script src="{{ asset('frontend/js/slick.min.js')}}"></script>
    <!-- Footer Reveal JS -->
    <script src="{{ asset('frontend/js/footer-reveal.min.js')}}"></script>
    <!-- Active JS -->
    <script src="{{ asset('frontend/js/active.js')}}"></script>
</body>

</html>
