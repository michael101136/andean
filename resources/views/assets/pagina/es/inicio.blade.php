@extends('assets.pagina.es.layouts.master')

@section('content')

   <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="3000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1">
        <img src="/plantilla/slider/1.jpg">
      </div>
      <div class="hero">
        <hgroup>
            <h1>We are creative</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button" style="
        cursor: pointer">Más</button>
                
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2">
          <img src="/plantilla/slider/2.jpg">
      </div>
      <div class="hero">        
        <hgroup>
            <h1>We are smart</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>       
        <button class="btn btn-hero btn-lg" role="button" style="
        cursor: pointer">See all features</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3" >
         <img src="/plantilla/slider/3.jpg">
      </div>
      <div class="hero">        
        <hgroup>
            <h1>We are amazing</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button" style="
        cursor: pointer">Más</button>
      </div>
    </div>
    <a href="{{route('aboutEs',['es'=>'es'])}}">
    <div style="color: white;
            background-color: rgba(0,0,0,.5);
            border-bottom-right-radius: 20px;
            padding: 30px; height: 100px; font-family: 'Oswald',  sans-serif; margin-top:-170px;position: absolute;font-size: 15px;">¿Por qué viajar con nosotros?<br>Somos operadores oficiales del Camino Inca a Machu Picchu bajo <br>las pautas del gobierno peruano
    </div>
</a>
  </div> 
</div>


            <section class="blog-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>POPULAR TRECK </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row thm-margin">
                        <div id="blog-slide" class="owl-carousel">
                          
                          @foreach($dataTreck as $item)
                             <div class="item">
                                <div class="grid-item-inner">
                                    <div class="grid-img-thumb">
                                        <!-- ribbon -->
                                        <div class="ribbon"><span>Treck</span></div>
                                        <a href="{{route('detalletourEs',['es'=>'es','tour' => $item->slug])}}" alt="1" class="img-responsive" />
                                            <img src="{{$item->img}}" alt="1" class="img-responsive" />
                                        </a>
                                    </div>

                                    <div class="grid-content">
                                        <div class="grid-price text-right">
                                            {{$item->nombretour}} <span><!-- <sub>$</sub>991 --></span>
                                        </div>
                                        <div class="grid-text">
                                          
                                            <div class="travel-times">
                                                <h4 class="pull-left">3 days 2 nights </h4>
                                               <!--  <span class="pull-right">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                         
                        </div>
                    </div>
                </div>
            </section>



 <section class="counter-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="count-content" style="background: rgba(0,0,0,0.8);">
                                <h1>¿Por qué viajar con nosotros?</h1>
                                    <div class="col-sm-6">
                                        <ul class="content-list">
                                            <li>Hemos crecido, como una empresa de viajes especializada desde su formación en 1985.</li>
                                            <li>Somos una compañía de viajes de propiedad local con sede en Cusco, Perú.</li>
                                            <li>Nuestro experimentado personal de oficina y guías altamente capacitados ofrecen un servicio personalizado sin igual.</li>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                      
                        
                        <div class="col-sm-6">
                            <div class="embed-responsive embed-responsive-16by9" style="z-index: 1000;">
                                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9ZIkEH689cI" allowfullscreen></iframe>
                                </div>
                        </div>
                    </div>
                </div>
            </section>


                    <section class="destination" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>POPULAR TOURS</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row thm-margin">
                         @foreach($dataTreck as $item)
                            <div class="col-md-3 col-sm-4 hidden-sm thm-padding">
                                <div class="destination-grid">
                                    <a href="#"><img src="{{$item->img}}" class="img-responsive" alt=""></a>
                                    <div class="mask">
                                        <h2 style="font-size: 15px;">{{$item->nombretour}}</h2>
                                  
                                        <!-- <a href="#" class="thm-btn">Read More</a> -->
                                    </div>
                                    <div class="dest-name">
                                        <h5></h5>
                                        <h4 style="text-decoration: underline;text-transform: uppercase;">{{$item->categoriatour}}</h4>
                                    </div>
                                    <div class="dest-icon">
                                        <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                        <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                        <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                        <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>


      

<!-- Testimonial section -->
            <div class="reference home-ref">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Testimonios</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                    </div>
                </div>
            </div>
<br/><br/><br/>

           
            <section class="package">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Listado de tours</h2>
                                <p>A great Collection of our Tour Packages</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    @foreach($dataTreck as $item)
                        <div class="col-xs-12 col-sm-4 col-md-3 hidden-sm">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="{{$item->img}}" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>{{$item->nombretour}}</h3>
                                                <!-- <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div> -->
                                                <button type="button" class="thm-btn">Ver más</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>{{$item->nombretour}}</h5>
                                 <!--    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$200.00</span>
                                        </span>
                                        /night
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    @endforeach

                    </div>
                </div>
            </section>

            <!-- destination -->
    
                  <section class="popular-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>BLOG</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row thm-margin">
                        <div id="popular-slide" class="owl-carousel">
                             @foreach($blogs as $data)
                            <div class="item">
                                <div class="grid-item-inner">
                                    <div class="grid-img-thumb" style="width: 400px;">
                                        <!-- ribbon -->
                                   
                                        <a href="{{route('detalBlogEs',['idioma'=> 'es','url'=>$data->url])}}"><img src="{{$data->urlimagen}}" alt="1" class="img-responsive" /></a>
                                    </div>
                                    <div class="grid-content">
                                        <div class="grid-price text-right">
                                         
                                        </div>
                                        <div class="grid-text">
                                          
                                            <div class="travel-times">
                                                <h4 class="pull-left" style="text-transform: uppercase;">{{$data->titulo}} </h4>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
           
          

          
         
        </div>
        <!-- Footer Section -->
@endsection

@section('script')


@endsection


