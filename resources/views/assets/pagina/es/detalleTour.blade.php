@extends('assets.pagina.es.layouts.master')

@section('content')
<style type="text/css">
    .tap_acoordion{
        text-align: justify;
        border: 1px solid #d2d6e2;
        background: #3a709e;
        font-weight: normal;
        color: #ffffff;
    }




 .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider arrow skin 106 css*/
        .jssora106 {display:block;position:absolute;cursor:pointer;}
        .jssora106 .c {fill:#fff;opacity:.3;}
        .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
        .jssora106:hover .c {opacity:.5;}
        .jssora106:hover .a {opacity:.8;}
        .jssora106.jssora106dn .c {opacity:.2;}
        .jssora106.jssora106dn .a {opacity:1;}
        .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

        /*jssor slider thumbnail skin 101 css*/
        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}

</style>

<section id="overview" class="header header-bg-9">
 <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
          
            @foreach($multimedia as $item)
            <div>
                <img data-u="image" src="{{$item->img}}" />
                <img data-u="thumb" src="{{$item->img}}" />
            </div>
             @endforeach
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#263457" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
</section>
 
  
            <div  class="navbar-default tour-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <ul class="nav navbar-nav text-center">
                                <li><a class="page-scroll" href="#overview">Inicio</a></li>
                                <li><a class="page-scroll" href="#experience">Programa</a></li>
                                <li><a class="page-scroll" href="#activities">Itinerario</a></li>
                                <li><a class="page-scroll" href="#accommodation">Extensiones</a></li>
                                <li><a class="page-scroll" href="#tour-gallery">Galeria</a></li>
                            </ul> <!--end portfolio sorting -->
                        </div>
                    </div>
                </div>
            </div>
            <main class="destination_details">
                <section id="experience">
                    <div class="container">
                        <div class="row">
                            <!-- section title -->
                            <div class="col-md-offset-2 col-md-8">
                                <div class="section-title text-center">
                                    <i class="flaticon-experiment-results"></i>
                                    <h2>DETALLE DEL TOURS</h2>
                                   
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="experience-title">
                                    <h2>Experience</h2>
                                   

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
                                        into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum 
                                        passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    
                                </div>
                                <div class="middle-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <img src="assets/images/trip.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="experience-title">
                                    <h2>Bold History that Fuels the Future</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
                                        into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum 
                                        passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
                                        into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum 
                                        passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>


                            <div class="col-sm-4 tour-nav1" style="background: white;z-index: 100;">

                                <div class="cats-title">RESERVA</div>
                                <div class="booking-form tour_booking">
                            

                                        <div class="row">
                                            
                                            <input type="hidden" class="form-control" id="idtour" name="idtour"  value="">
                                            <input type="hidden" class="form-control" id="lenguaje" name="lenguaje"  value="es">
                                            
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Nombre completo</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Ingrese su nombre completo">
                                                    <p style="color:red;"></p>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Nacionalidad</label>
                                                    <input type="text" class="form-control" id="country" name="country" value="{{old('country')}}" placeholder="Ingrese su nacionalidad">
                                                    <p style="color:red;"></p>
                                                </div>

                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Número telefónico</label>
                                                    <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}" placeholder="Ingrese su número telefónico">
                                                    <p style="color:red;"></p>
                                                </div>
                                            </div>
                                    
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Ingrese su correo electrónico">
                                                    <p style="color:red;"></p>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Fecha de viaje</label>
                                                    <input type="date" class="form-control" id="date" name="date" >
                                                    <p style="color:red;"></p>
                                                </div>
                                            </div>
                                             
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea class="form-control" id="message" name="message" cols="40" rows="5" value="{{old('message')}}" placeholder=""></textarea>
                                                    <p style="color:red;"></p>
                                                </div>
                                            </div>
                                          
                                        </div>
                                        <button class="thm-btn btn-block">Reservar</button>
          
                                        
                                </div>

                                <div class="middle-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <img src="assets/images/trip.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                </div>
                          
                            </div>

                        </div>
                        <div class="separator"></div>
                    </div>
                </section>
                <!-- activities -->
                <section id="activities">
                    <div class="container">
                        <div class="row">
                            <!-- section title -->
                            <div class="col-md-offset-2 col-md-4">
                                <div class="section-title text-center">
                                    <i class="flaticon-arrows"></i>
                                    <h2>Itinerarios</h2>
                                </div>
                            </div>
                            <div class="col-md-offset-2 col-md-4">
                                <div class="section-title text-center">
                                    
                                </div>
                            </div>



                             <div class="col-sm-8">
                                <div class="experience-title">
                                    
                                 <div class="row">
                                     <div class="col-md-12">
                                        <div id="accordion">
                                          
                                          @foreach($itinerario as $data)
                                          <h3 class="tap_acoordion">{{$data->dia}} - {{$data->itinerarionombre}}</h3>
                                          
                                          <div>
                                           <h5><div class="themeUl" style=" text-align:justify;">{!!$data->descripcionitinerario!!}</div></h5>
                                            <!-- {!!$data->descripcionitinerario!!}  -->
                                            
                                          </div>
                                          @endforeach
                                          
                                          
                                        </div>
                                     </div>

                                    </div>

                                </div>
                                <div class="middle-content">
                                    <div class="row">
                                        
                                    </div>
                                </div>
                              
                            </div>


                            <div class="col-sm-4">

                               
                            
                                <div class="middle-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <img src="assets/images/trip.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                </div>
                          
                            </div>


                        </div>
                        <div class="separator"></div>
                    </div>
                </section>
                <!-- accommodation -->
                <section id="accommodation">
                    <div class="container">
                        <div class="row">
                            <!-- section title -->
                            <div class="col-md-offset-2 col-md-4">
                                <div class="section-title text-center">
                                    <i class="flaticon-cabin"></i>
                                    <h2>Accommodation</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                </div>
                            </div>
                            <div class="col-md-offset-2 col-md-4">
                                <div class="section-title text-center">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="ac-items">
                                    <a class="image" href="#">
                                        <img src="/plantilla/assets/images/accommodation-960x650-1.jpg" class="img-responsive" alt="">
                                    </a>
                                    <div class="content">
                                        <h4>Nice Hotel name</h4>
                                        <div class="description">
                                            <p>Cute dogs come in a variety of shapes and sizes. Some cute dogs are cute for their adorable faces, others for their tiny stature, and even others for their massive size.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="separator"></div>
                    </div>
                </section>
                <!-- gallety -->

                  <div id="tour-gallery">
                    <div class="container">
                        <div class="row">
                            <!-- section title -->
                            <div class="col-md-offset-2 col-md-4">
                                <div class="section-title text-center">
                                    <i class="flaticon-sidebar"></i>
                                    <h2>GALLERIA</h2>
                                 
                                </div>
                            </div>
                        </div>
                        <div class="row gallery-margin">
                            <div class="portfolio-items list-unstyled zoom-gallery" id="grid">
                               
           
                     @foreach($multimedia as $item)
                                <div class="col-md-3 col-sm-3 col-xs-12 gallery-padding">
                                    <div class="img-thumb">
                                        <a href="{{$item->img}}" data-source="assets/images/destination-2.jpg">
                                            <img src="{{$item->img}}" class="img-responsive" alt="">
                                        </a>
                                        <div class="gallery-hover">
                                            <a class="plus-link dfd-top-right" href="#">
                                                <span class="plus-link-container">
                                                    <span class="plus-link-out"></span>
                                                    <span class="plus-link-come"></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                       @endforeach
                            
                              
                               
                                <!-- sizer -->
                                <div class="col-md-3 col-sm-3 col-xs-12 shuffle_sizer"></div>
                            </div>
                        </div>
                    </div> 
                </div>
                    <!-- <div id="tour-gallery">
                        <div class="container">
                            <div class="row">
                             
                                <div class="col-md-offset-2 col-md-4">
                                    <div class="section-title text-center">
                                        <i class="flaticon-sidebar"></i>
                                        <h2>GALLERY</h2>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-sm-8">
                                <section class="hotels-details-inner">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-8">
                                                <div id="sync1" class="owl-carousel">
                                                    @foreach($multimedia as $item)
                                                    <div class="item"><img src="{{$item->img}}" class="img-responsive" alt=""></div>
                                                    @endforeach
                                                </div>
                                                <div id="sync2" class="owl-carousel">
                                                    @foreach($multimedia as $item)
                                                    <div class="item"><img src="{{$item->img}}" class="img-responsive" alt=""></div>
                                                     @endforeach
                                                </div>
                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                </section>
                                </div>
                        </div> 
                    </div> -->
            </main>
            <!-- Newsletter -->
       
        </div>

@endsection

@section('script')
  
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $SpacingX: 5,
                $SpacingY: 5
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/
            var MAX_WIDTH = 1350;
        

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>

<script type="text/javascript">jssor_1_slider_init();</script>
<script>
    var menuTop = $('.tour-nav').offset().top;
            $(window).scroll(function () {
                if ($(window).scrollTop() > menuTop) {
                    $('.tour-nav').css({
                        position: 'fixed',
                        top: '70px'
                    });
                } else {
                    $('.tour-nav').css({
                        position: 'static',
                        top: '0px'
                    });
                }
            });

            var menuTop = $('.tour-nav1').offset().top;
            $(window).scroll(function () {
                if ($(window).scrollTop() > menuTop) {
                    $('.tour-nav1').css({
                        position: 'fixed',
                        top: '130px',
                        left: '840px'
                    });
                } else {
                    $('.tour-nav1').css({
                        position: 'static',
                        top: '0px',
                        left:'0px'
                    });
                }
            });

</script>



<script>
  $( function() {
     $( "#accordion" ).accordion();
 } );
  </script>
   <script type="text/javascript">
//AGREGAR  EL ESTILO DE UNA CLASE
    $( ".themeUl ul" ).addClass( "list-ok" );
    $( "#tabledisenio table" ).addClass( "table" );
//FIN    
 </script>
@endsection