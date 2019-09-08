@extends('public.es.layouts.master')

@section('content')

<div class="content-body">
      <div class="tp-banner-container">
        <div class="tp-banner-slider">
          <ul>
      
            <li data-masterspeed="700" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="/public/img/slider/slide-2.jpg" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
              <div data-x="['center','center','center','center']" data-y="center" data-transform_in="y:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                <div class="sl-title-top">Bienvenido a</div>
                <div class="sl-title">Istanbul</div>
         
              </div>
            </li>
            <li data-masterspeed="700" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="/public/img/slider/slide-4.jpg" data-bgposition="center" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
              <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:-150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                <div class="sl-title-top">Bienvenido a</div>
                <div class="sl-title">Dubai</div>
          
              </div>
            </li>
          </ul>
        </div>
        <!-- slider info-->
        <div class="slider-info-wrap clearfix">
          <div class="slider-info-content">
            @foreach($data as $item)
            <div class="slider-info-item">
              <div class="info-item-media"><img src="{{$item->img}}" data-at2x="{{$item->img}}" alt>
                <div class="info-item-text">
 
                 <!--  <div class="info-temp font-4"><span> {{$item->nombretour}}  </span>  </div> -->
                  <p class="info-text"></p>
                </div>
              </div>
              <div class="info-item-content">
                <div class="main-title">
                  <h3 class="title"><span class="font-4"> {{$item->categoriatour}} </span> </h3>
                  <div class="price"><span>  </span> </div><a href="{{route('detalletour',['tour'=>$item->slug])}}" class="button">Detalle</a>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
        <!-- ! slider-info-->
      </div>

      <section class="page-section pb-0">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <!--<h6 class="title-section-top font-4">Special offers</h6>-->
              <h2 class="title-section"><span>DESTINOS</span> POPULARES</h2>
              <div class="cws_divider mb-25 mt-5"></div>
              <!--<p>Nullam ac dolor id nulla finibus pharetra. Sed sed placerat mauris. Pellentesque lacinia imperdiet interdum. Ut nec nulla in purus consequat lobortis. Mauris lobortis a nibh sed convallis.</p>-->
            </div>
            <!--<div class="col-md-12"><img src="/public/pic/promo-1.png" data-at2x="pic/promo-1@2x.png" alt class="mt-md-0 mt-minus-70"></div>-->
          </div>
        </div>
        <div class="features-tours-full-width">
            <div class="features-tours-wrap clearfix">
          
          

            @foreach($data as $item)
    
                 <div class="features-tours-item">
                    <div class="features-media"><img src="{{$item->img}}" style="height:200px;" data-at2x="{{$item->img}}" alt>
                    <div class="features-info-top">
                      <div class="info-price font-4"><span> </span> $115</div>
                      <div class="info-temp font-4"><span><button type="button" class="btn btn-default" style="color: #fff; background-color: rgba(0,0,0,0); border-color: #ffc107;"><a href="{{route('detalletour',['tour'=>$item->slug])}}">DETALLE</a></button></span></div>
                      <p class="info-text"></p>
                    </div>
          
                    <div class="features-info-bot">
                      <h5 class="title" style=" font-size: 14px; position: absolute;margin-top: -55px;  background-color: rgba(0,0,0,.5);border-bottom-right-radius: 20px;padding: 6px;">
                        <a href="{{route('detalletour',['tour'=>$item->slug])}}">  {{$item->nombretour}} </a> <span class="font-4">   </span> </h5>
                    </div>
                  </div>
                
            </div>
           
            @endforeach
          </div>
        </div>
      </section>
      <!-- ! page section-->
      <!-- counter section -->
     <br/>
      <!-- ! counter section-->
      <!-- page section parallax-->
     
      <!-- ! page section parallax-->
      <!-- recomended section-->
      <section class="small-section bg-gray">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <!--<h6 class="title-section-top font-4">Top rated</h6>-->
              <h2 class="title-section"><span>TOURS</span> RECOMENDADOS</h2>
              <div class="cws_divider mb-25 mt-5"></div>
              <!--<p>Maecenas commodo odio ut vulputate cursus. Integer in egestas lectus. Nam volutpat feugiat mi vitae mollis. Aenean tristique dolor bibendum mi scelerisque ultrices non at lorem.</p>-->
            </div>
            <div class="col-md-4"><i class="flaticon-suntour-hotel title-icon"></i></div>
          </div>
          <div class="row">
            <!-- Recomended item-->
            @foreach($data as $item)
            <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="{{route('detalletour',['tour'=>$item->slug])}}">
                    <div class="pic"><img src="{{$item->img}}" data-at2x="{{$item->img}}" alt style="width:770px; height:240px;"></div></a>
                
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="{{route('detalletour',['tour'=>$item->slug])}}">
                    <h6 class="blog-title"  style="margin-top: 60px;">{{$item->nombretour}}</h6></a>
                
               
                  <p class="mb-30">    </p><a href="{{route('detalletour',['tour'=>$item->slug])}}" class="cws-button small alt">Leer más</a>
           
                </div>
                <!-- Recomended Image-->
              </div>
            </div>
            @endforeach
 
          </div>
        </div>
      </section>
      <!-- ! recomended section-->


      <!-- testimonials section-->

     
     
    </div>

@endsection

@section('script')
  
 
        
 </script>
@endsection


