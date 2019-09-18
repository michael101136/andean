<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Andean adventure</title>
        <!-- Favicons -->
        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="assets/images/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="plantilla/assets/images/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="plantilla/assets/images/apple-touch-icon-114x114-precomposed.png">
        <!-- Base Css -->
        {!!Html::style('plantilla/assets/css/base.css')!!}
        {!!Html::style('plantilla/assets/css/slider/style.css')!!}
    </head>
    <body>
             @include('assets.pagina.es.layouts.navbar')
             @yield('content')
            
        <footer>
            <div class="container">
                <div class="row">
                   
                    <div class="col-sm-4 col-md-3">
                        <div class="footer-box address-inner">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the.  </p>
                            <div class="address">
                                <i class="flaticon-placeholder"></i>
                                <p>PO Box 16122 Collins Street<br>
                                    West Victoria 8007 Australia</p>
                            </div>
                            <div class="address">
                                <i class="flaticon-customer-service"></i>
                                <p> +880153625892</p>
                            </div>
                            <div class="address">
                                <i class="flaticon-mail"></i>
                                <p> admin@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-box">
                                    <h4 class="footer-title">Information</h4>
                                    <ul class="categoty">
                                        <li><a href="#">Pygmy miles</a></li>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Online Enquiry</a></li>
                                        <li><a href="#">Call us</a></li>
                                        <li><a href="#">Terms and Conditions</a></li>
                                        <li><a href="#">Privacy & Cookies Policy</a></li>
                                        <li><a href="#">Become a partner</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-box">
                                    <h4 class="footer-title">Experiences</h4>
                                    <ul class="categoty">
                                        <li><a href="#">Epic journeys</a></li>
                                        <li><a href="#">Hidden tribes</a></li>
                                        <li><a href="#">Eco lodges & tours</a></li>
                                        <li><a href="#">Endangered Wildlife</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-box">
                                    <h4 class="footer-title">Destinations</h4>
                                    <ul class="categoty">
                                        <li><a href="#">Europe</a></li>
                                        <li><a href="#">Africa</a></li>
                                        <li><a href="#">Asia</a></li>
                                        <li><a href="#">Oceania</a></li>
                                        <li><a href="#">North America</a></li>
                                        <li><a href="#">South America</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 hidden-sm">
                        <div class="footer-box">
                            <h4 class="footer-title">Flickr Gallery</h4>
                            <ul class="gallery-list">
                                <li> <a href="#"><img src="assets/images/flickr-1.jpg" alt=""></a></li>
                                <li> <a href="#"><img src="assets/images/flickr-2.jpg" alt=""></a></li>
                                <li> <a href="#"><img src="assets/images/flickr-3.jpg" alt=""></a></li>
                                <li> <a href="#"><img src="assets/images/flickr-4.jpg" alt=""></a></li>
                                <li> <a href="#"><img src="assets/images/flickr-5.jpg" alt=""></a></li>
                                <li> <a href="#"><img src="assets/images/flickr-6.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <p>Copyright Â© 2016. All rights reserved</p>
                        </div>
                        <div class="col-sm-7">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="">Home</a></li>
                                    <li><a href="">About</a></li>
                                    <li><a href="">Service</a></li>
                                    <li><a href="">Blog</a></li>
                                    <li><a href="">Shop</a></li>
                                    <li><a href="">Forum</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- jQuery -->
        <!-- jquery ui js -->
        <!-- bootstrap js -->
        <!-- fraction slider js -->


        <!-- range slider -->
        {!!Html::script('plantilla/assets/js/jquery.min.js')!!}
        {!!Html::script('plantilla/assets/js/jquery-ui.min.js')!!}
        {!!Html::script('plantilla/assets/js/bootstrap.min.js')!!}
        {!!Html::script('plantilla/assets/js/jquery.fractionslider.js')!!}
        {!!Html::script('plantilla/assets/owl-carousel/owl.carousel.min.js')!!}
        {!!Html::script('plantilla/assets/js/jquery.counterup.min.js')!!}
        {!!Html::script('plantilla/assets/js/waypoints.js')!!}
        {!!Html::script('plantilla/assets/js/jquery.shuffle.min.js')!!}
        {!!Html::script('plantilla/assets/js/portfolio.js')!!}
        {!!Html::script('plantilla/assets/js/jquery.magnific-popup.min.js')!!}
        {!!Html::script('plantilla/assets/js/ion.rangeSlider.min.js')!!}
        {!!Html::script('plantilla/assets/js/jquery.easing.min.js')!!}
        {!!Html::script('plantilla/assets/js/custom.js')!!}
        @yield('script')
    </body>
</html>