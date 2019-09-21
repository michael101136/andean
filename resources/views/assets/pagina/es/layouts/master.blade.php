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
                             <h4 class="footer-title" style="color: white;">CONTÁCTENOS</h4>
                            <div class="address">
                                <i class="flaticon-placeholder"></i>
                                <p>Urb. Lucrepata E-13, Cusco, Perú</p>
                            </div>
                            <div class="address">
                                <i class="flaticon-customer-service"></i>
                                <p> +51 (84) 229-911</p>
                            </div>
                            <div class="address">
                                <i class="flaticon-customer-service"></i>
                                <p> + 51-984-948-057</p>
                            </div>
                            <div class="address">
                                <i class="flaticon-mail"></i>
                                <p> sales@andeanadventuresperu.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-box">
                                    <h4 class="footer-title">INFORMACIÓN</h4>
                                    <p style="text-align: justify;">
                                        tiene su sede en Cusco, en el corazón de cualquier viaje a Perú desde 1985 .
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-box">
                                    <h4 class="footer-title">EXPERIENCIAS</h4>
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
                                    <h4 class="footer-title">ESTILOS</h4>
                                    <ul class="categoty">
                                        <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'inca-rail'])}}">Inca Rail</a></li>
                                        <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'treck-&-bikes'])}}">Treck & Bikes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <p>Copyright Â© 2019. Andean Adventures Perú</p>
                        </div>
                        <div class="col-sm-7">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="/">Inicio</a></li>
                                    <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'inca-rail'])}}">Inca Rail</a></li>
                                    <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'treck-&-bikes'])}}">Treck & Bikes</a></li>
                                    <li><a href="{{route('aboutEs',['es'=>'es'])}}">Nosotros</a></li>
                                    <li><a href="{{route('blogEs',['es'=>'es'])}}">Blog</a></li>
                                    <li><a href="{{route('contactEs',['es'=>'es'])}}">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        {!!Html::script('plantilla/slider/js/jssor.slider-27.5.0.min.js')!!}
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