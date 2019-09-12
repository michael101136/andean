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
        cursor: pointer">See all features</button>
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
        cursor: pointer">See all features</button>
      </div>
    </div>
  </div> 
</div>


            <section class="blog-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Popular Treck </h2>
                                <p>Checkout our Latest Blogs and News</p>
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
                                        <a href="{{route('paquetesCategoriaES',['idioma'=> 'es','categoria'=>'cusco'])}}"><img src="{{$item->img}}" alt="1" class="img-responsive" /></a>
                                    </div>
                                    <div class="grid-content">
                                        <div class="grid-price text-right">
                                            Only <span><sub>$</sub>991</span>
                                        </div>
                                        <div class="grid-text">
                                          
                                            <div class="travel-times">
                                                <h4 class="pull-left">3 days 2 nights </h4>
                                                <span class="pull-right">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
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
                        <div class="col-sm-3">
                            <div class="count-content">
                                <div class="count-icon">
                                    <i class="flaticon-earth-globe"></i>
                                </div>
                                <div class="count">
                                    <h1 class="count-number">348</h1>
                                    <div class="count-text">Destinations</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="count-content">
                                <div class="count-icon">
                                    <i class="flaticon-cabin"></i>
                                </div>
                                <div class="count">
                                    <h1 class="count-number">89</h1>
                                    <div class="count-text">Hotels</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="count-content">
                                <div class="count-icon">
                                    <i class="flaticon-photographer-with-cap-and-glasses"></i>
                                </div>
                                <div class="count">
                                    <h1 class="count-number">987</h1>
                                    <div class="count-text">Tourists</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="count-content">
                                <div class="count-icon">
                                    <i class="flaticon-airplane-flight-in-circle-around-earth"></i>
                                </div>
                                <div class="count">
                                    <h1 class="count-number">891</h1>
                                    <div class="count-text">Tour</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="popular-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Popular Tours</h2>
                                <p>Most Popular Tours in the World</p>
                            </div>
                        </div>
                    </div>
                    <div class="row thm-margin">
                        <div id="popular-slide" class="owl-carousel">
                             @foreach($dataTreck as $item)
                            <div class="item">
                                <div class="grid-item-inner">
                                    <div class="grid-img-thumb">
                                        <!-- ribbon -->
                                        <div class="ribbon"><span>Popular</span></div>
                                        <a href="#"><img src="{{$item->img}}" alt="1" class="img-responsive" /></a>
                                    </div>
                                    <div class="grid-content">
                                        <div class="grid-price text-right">
                                            Only <span><sub>$</sub>789</span>
                                        </div>
                                        <div class="grid-text">
                                            <div class="place-name">Historic Buildings</div>
                                            <div class="travel-times">
                                                <h4 class="pull-left">3 days 2 nights </h4>
                                                <span class="pull-right">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
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
                        <div class="testimonials">


                            <div class="carousel" data-ride="carousel" id="quote-carousel">
                                <div class="carousel-inner">
                                    <!-- Quote 1 -->  


                                    <div class="item col-sm-10 col-sm-offset-1">
                                        <blockquote>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                            aliquam architecto beatae dolorem, enim error eveniet harum iste molestias
                                            neque nisi placeat possimus quaerat quam repudiandae sint soluta unde vero.
                                            <span class="author">- Andrew Adams, Google Inc</span>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 2 -->  
                                    <div class="item col-sm-10 col-sm-offset-1">
                                        <blockquote>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                            aliquam architecto beatae doloremaliquam architecto beatae dolorem, enim error
                                            eveniet harum iste molestias neque nisi placeat.
                                            <span class="author">- Jhon Smith, Facebook Inc</span>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 3 -->
                                    <div class="item col-sm-10 col-sm-offset-1 active">
                                        <blockquote>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                            aliquam architecto beatae dolorem, enim error eveniet harum iste molestias
                                            neque nisi placeat possimus quaerat quam repudiandae sint.
                                            <span class="author">- Bob Smith, Fitbit</span>
                                        </blockquote>
                                    </div>
                                </div>
                                <!-- Bottom Carousel Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#quote-carousel" data-slide-to="0" class=""><img class="img-responsive " src="/plantilla/assets/images/avtar-1.jpg" alt=""></li>
                                    <li data-target="#quote-carousel" data-slide-to="1" class=""><img class="img-responsive" src="/plantilla/assets/images/avtar-2.jpg" alt=""></li>
                                    <li data-target="#quote-carousel" data-slide-to="2" class="active"><img class="img-responsive" src="/plantilla/assets/images/avtar-3.jpg" alt=""></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<br/><br/><br/>

              <!-- Counter -->
            <section class="counter-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="count-content">
                                <div class="count-icon">
                                    <i class="flaticon-earth-globe"></i>
                                </div>
                                <div class="count">
                                    <h1 class="count-number">348</h1>
                                    <div class="count-text">Destinations</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="count-content">
                                <div class="count-icon">
                                    <i class="flaticon-cabin"></i>
                                </div>
                                <div class="count">
                                    <h1 class="count-number">89</h1>
                                    <div class="count-text">Hotels</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="count-content">
                                <div class="count-icon">
                                    <i class="flaticon-photographer-with-cap-and-glasses"></i>
                                </div>
                                <div class="count">
                                    <h1 class="count-number">987</h1>
                                    <div class="count-text">Tourists</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="count-content">
                                <div class="count-icon">
                                    <i class="flaticon-airplane-flight-in-circle-around-earth"></i>
                                </div>
                                <div class="count">
                                    <h1 class="count-number">891</h1>
                                    <div class="count-text">Tour</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           
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
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>Giza Necropolis, Egypt</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$200.00</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    </div>
                </div>
            </section>

            <!-- destination -->
            <section class="destination" style="margin-top: -97px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Blog</h2>
                                <p>This is Amazing Travel Agency !</p>
                            </div>
                        </div>
                    </div>
                    <div class="row thm-margin">
                         @foreach($dataTreck as $item)
                            <div class="col-md-3 col-sm-4 hidden-sm thm-padding">
                                <div class="destination-grid">
                                    <a href="#"><img src="{{$item->img}}" class="img-responsive" alt=""></a>
                                    <div class="mask">
                                        <h2>London</h2>
                                        <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                        <a href="#" class="thm-btn">Read More</a>
                                    </div>
                                    <div class="dest-name">
                                        <h5>Hop on Hop off Bus Tour</h5>
                                        <h4>London</h4>
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
            
           
          

          
         
        </div>
        <!-- Footer Section -->
@endsection

@section('script')


@endsection


