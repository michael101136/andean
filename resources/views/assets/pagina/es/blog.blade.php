@extends('assets.pagina.es.layouts.master')

@section('content')
 
<style type="text/css">
  /*jssor slider loading skin spin css*/
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

        .jssora061 {display:block;position:absolute;cursor:pointer;}
        .jssora061 .a {fill:none;stroke:#fff;stroke-width:360;stroke-linecap:round;}
        .jssora061:hover {opacity:.8;}
        .jssora061.jssora061dn {opacity:.5;}
        .jssora061.jssora061ds {opacity:.3;pointer-events:none;}

</style>



            <br/><br/><br/><br/> <br/><br/>     

   <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
           @foreach($blogs as $data)
                <div>
                    <img data-u="image" src="{{$data->urlimagen}}" />
                    <div u="thumb">{{$data->titulo}}</div>
                </div>
            @endforeach 
        </div>
        <!-- Thumbnail Navigator -->
        <div u="thumbnavigator" style="position:absolute;bottom:0px;left:0px;width:980px;height:50px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(0,0,0,.5);">
            <div u="slides">
                <div u="prototype" style="position:absolute;top:0;left:0;width:980px;height:50px;">
                    <div u="thumbnailtemplate" style="position:absolute;top:0;left:0;width:100%;height:100%;font-family:arial,helvetica,verdana;font-weight:normal;line-height:50px;font-size:16px;padding-left:10px;box-sizing:border-box;"></div>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora061" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M11949,1919L5964.9,7771.7c-127.9,125.5-127.9,329.1,0,454.9L11949,14079"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora061" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M5869,1919l5984.1,5852.7c127.9,125.5,127.9,329.1,0,454.9L5869,14079"></path>
            </svg>
        </div>
    </div>



  
     
            <!-- blog --><br><br>
            <section class="blog-wrapper" style="margin-top: -75px;
">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                           
                         
                         
                        <h4 style="margin-top: 39px;position: absolute;">Últimas </h4><div class="separator" style="width: 90%;margin-right: -5px;"></div>
                        <div class="row">
                                
                            <div class="col-sm-12 col-md-12">
                                <div class="hotel-list-content">
                                   
                                @foreach($blogs as $data)
                                    <div class="hotel-item">
                                        <!-- hotel Image-->
                                        <div class="hotel-image">
                                            <a href="#">
                                                <div class="img"><img src="{{$data->urlimagen}}"  alt="" class="img-responsive"></div>
                                            </a>
                                        </div>
                                        <!-- hotel body-->
                                        <div class="hotel-body">
                                           
                                        
                                            <h3><a href="{{route('detalBlogEs',['idioma'=> 'es','url'=>$data->url])}}">{{$data->titulo}}</a></h3>
                                           
                                            <p style="text-align: justify;">{{$data->descripcioncorta}}</p>
                                           
                                        </div>
                                        
                                    </div>
                                    @endforeach
                        

                                </div>
                                
                            </div>
                             
                         </div>

                        </div>
                 
                        <div class="col-md-4 col-sm-4">
                         
                            <div class="sidber-box tags-widget">
                                <div class="cats-title">Tags </div>

                                <div class="tags-inner">
                                    @foreach($tack as $data)
                                         <a class="ui tag">{{$data->nombre}}</a>
                                    @endforeach
                                </div>

                            </div>
                            <!-- help center -->
                            <div class="sidber-box help-widget">
                                <i class="flaticon-photographer-with-cap-and-glasses"></i>
                                <h4>Necesita <span>ayuda?</span></h4>
                                <a href="#" class="phone">+51 (84) 229-911</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </div>


@endsection

@section('script')

    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
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
                $Orientation: 2,
                $NoDrag: true
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1150;

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
@endsection