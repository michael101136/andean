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
                          

                             <div class="item">
                                <div class="grid-item-inner">
                                    <div class="grid-img-thumb">
                                        <!-- ribbon -->
                                        <div class="ribbon"><span>Popular</span></div>
                                        <a href="{{URL::route('detalle_tour1') }}"><img src="/plantilla/assets/images/tour-370x370-1.jpg" alt="1" class="img-responsive" /></a>
                                    </div>
                                    <div class="grid-content">
                                        <div class="grid-price text-right">
                                            Only <span><sub>$</sub>991</span>
                                        </div>
                                        <div class="grid-text">
                                            <div class="place-name">City sightseeing</div>
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
                            <div class="item">
                                <div class="grid-item-inner">
                                    <div class="grid-img-thumb">
                                        <!-- ribbon -->
                                        <div class="ribbon"><span>Popular</span></div>
                                        <a href="#"><img src="/plantilla/assets/images/tour-370x370-1.jpg" alt="1" class="img-responsive" /></a>
                                    </div>
                                    <div class="grid-content">
                                        <div class="grid-price text-right">
                                            Only <span><sub>$</sub>991</span>
                                        </div>
                                        <div class="grid-text">
                                            <div class="place-name">City sightseeing</div>
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
                            <div class="item">
                                <div class="grid-item-inner">
                                    <div class="grid-img-thumb">
                                        <!-- ribbon -->
                                        <div class="ribbon"><span>Popular</span></div>
                                        <a href="#"><img src="/plantilla/assets/images/tour-370x370-7.jpg" alt="1" class="img-responsive" /></a>
                                    </div>
                                    <div class="grid-content">
                                        <div class="grid-price text-right">
                                            Only <span><sub>$</sub>785</span>
                                        </div>
                                        <div class="grid-text">
                                            <div class="place-name">Beach Tour</div>
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
                            <div class="item">
                                <div class="grid-item-inner">
                                    <div class="grid-img-thumb">
                                        <!-- ribbon -->
                                        <div class="ribbon"><span>Popular</span></div>
                                        <a href="#"><img src="/plantilla/assets/images/tour-370x370-8.jpg" alt="1" class="img-responsive" /></a>
                                    </div>
                                    <div class="grid-content">
                                        <div class="grid-price text-right">
                                            Only <span><sub>$</sub>728</span>
                                        </div>
                                        <div class="grid-text">
                                            <div class="place-name">Mariott Hotel</div>
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
                            <div class="item">
                                <div class="grid-item-inner">
                                    <div class="grid-img-thumb">
                                        <!-- ribbon -->
                                        <div class="ribbon"><span>Popular</span></div>
                                        <a href="#"><img src="/plantilla/assets/images/tour-370x370-9.jpg" alt="1" class="img-responsive" /></a>
                                    </div>
                                    <div class="grid-content">
                                        <div class="grid-price text-right">
                                            Only <span><sub>$</sub>885</span>
                                        </div>
                                        <div class="grid-text">
                                            <div class="place-name">Adventure Toure</div>
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
                            <div class="item">
                                <div class="grid-item-inner">
                                    <div class="grid-img-thumb">
                                        <!-- ribbon -->
                                        <div class="ribbon"><span>Popular</span></div>
                                        <a href="#"><img src="/plantilla/assets/images/tour-370x370-2.jpg" alt="1" class="img-responsive" /></a>
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

            <!-- service -->
                <!-- <section class="service-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="title">
                                    <h2>Our Service</h2>
                                    <p>This is Amazing Travel Agency !</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-3 inner-box">
                                    <article>
                                        <div class="icon"><span class="flaticon-placeholder"></span></div>
                                        <div class="content-text">
                                            <h5>Diverse Destination</h5>
                                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-3 inner-box">
                                    <article>
                                        <div class="icon"><span class="flaticon-map"></span></div>
                                        <div class="content-text">
                                            <h5>Fast Booking</h5>
                                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-3 inner-box">
                                    <article>
                                        <div class="icon"><span class="flaticon-lemonade"></span></div>
                                        <div class="content-text">
                                            <h5>Drinks Included</h5>
                                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-3 inner-box">
                                    <article>
                                        <div class="icon"><span class="flaticon-party"></span></div>
                                        <div class="content-text">
                                            <h5>After Partys</h5>
                                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->


                 <!-- package section -->
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
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="/plantilla/assets/images/Package-800x500-1.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Hilton Molino Stucky</h3>
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
                                    <h5>Hilton Molino Stucky</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$200.00</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="/plantilla/assets/images/Package-800x500-2.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Palolem, India</h3>
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
                                    <h5>Palolem, India</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$150.00</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <div class="ribbon"><span>Popular</span></div>
                                        <img src="/plantilla/assets/images/Package-800x500-3.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>IEiffel Tower, Paris</h3>
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
                                    <h5>IEiffel Tower, Paris</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$290.00</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="/plantilla/assets/images/Package-800x500-4.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Canals of Venice, Italy</h3>
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
                                    <h5>Canals of Venice, Italy</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$189.00</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="/plantilla/assets/images/Package-800x500-5.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Itali, Pisa</h3>
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
                                    <h5>Itali, Pisa</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$139.00</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <div class="ribbon"><span>New</span></div>
                                        <img src="/plantilla/assets/images/Package-800x500-6.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>St Paul's Cathedral, London</h3>
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
                                    <h5>St Paul's Cathedral, London</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$180.00</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 hidden-sm">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="/plantilla/assets/images/Package-800x500-7.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Castel Sant'Angelo. Rome</h3>
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
                                    <h5>Castel Sant'Angelo. Rome</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$170.00</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 hidden-sm">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="/plantilla/assets/images/Package-800x500-8.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Giza Necropolis, Egypt</h3>
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
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="/plantilla/assets/images/destination-370x370-1.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>Sydney</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <h5>Sydney Opera House</h5>
                                    <h4>Sydney</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="/plantilla/assets/images/destination-370x370-2.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>Brazil</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <h5>Fernando de Noronha</h5>
                                    <h4>Brazil</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="/plantilla/assets/images/destination-370x370-3.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>Istanbul</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <h5>Aya Sofya</h5>
                                    <h4>Istanbul</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="/plantilla/assets/images/destination-370x370-4.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>India</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <h5>Taj Mahal</h5>
                                    <h4>India</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="/plantilla/assets/images/destination-370x370-5.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>Italy</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <h5>Canals of Venice</h5>
                                    <h4>Italy</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="/plantilla/assets/images/destination-370x370-6.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>Paris</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <h5>Eiffel Tower</h5>
                                    <h4>Paris</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 hidden-sm thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="/plantilla/assets/images/destination-370x370-7.jpg" class="img-responsive" alt=""></a>
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
                        <div class="col-md-3 col-sm-4 hidden-sm thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="/plantilla/assets/images/destination-370x370-8.jpg" class="img-responsive" alt=""></a>
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
                    </div>
                </div>
            </section>
            <!-- hotel -->
               <!--  <section class="hotel-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="title">
                                    <h2>Recommended Hotels</h2>
                                    <p>This is Amazing hotel in Paris !</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="hotel-item">
                                   
                                    <div class="hotel-image">
                                        <a href="#">
                                            <div class="img"><img src="/plantilla/assets/images/hotel-1.jpg"  alt="" class="img-responsive"></div>
                                        </a>
                                    </div>
                                  >
                                    <div class="hotel-body">
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                      
                                        <h3>Tours in Greece</h3>
                                        
                                        <p>Etiam maximus molestie accumsan. Sed metus sapien, fermentum nec lorem ac.</p>
                                        <div class="free-service">
                                            <i class="flaticon-television" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plasma TV with cable chanels"></i>
                                            <i class="flaticon-swimmer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swimming pool"></i>
                                            <i class="flaticon-wifi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free wifi"></i>
                                            <i class="flaticon-weightlifting" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitness center"></i>
                                            <i class="flaticon-lemonade" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restaurant"></i>
                                        </div>
                                    </div>
                                    <div class="hotel-right"> 
                                        <div class="hotel-person">from <span class="color-blue">$273</span> person</div>
                                        <a class="thm-btn" href="#">Details</a>
                                    </div>
                                </div>
                                <div class="hotel-item">
                                    
                                    <div class="hotel-image">
                                        <a href="#">
                                            <div class="img"><img src="/plantilla/assets/images/hotel-2.jpg"  alt="" class="img-responsive"></div>
                                        </a>
                                    </div>
                                    
                                    <div class="hotel-body">
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                      
                                        <h3>Tours in Greece</h3>
                                 ->
                                        <p>Etiam maximus molestie accumsan. Sed metus sapien, fermentum nec lorem ac.</p>
                                        <div class="free-service">
                                            <i class="flaticon-television" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plasma TV with cable chanels"></i>
                                            <i class="flaticon-swimmer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swimming pool"></i>
                                            <i class="flaticon-wifi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free wifi"></i>
                                            <i class="flaticon-weightlifting" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitness center"></i>
                                            <i class="flaticon-lemonade" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restaurant"></i>
                                        </div>
                                    </div>
                                    <div class="hotel-right"> 
                                        <div class="hotel-person">from <span class="color-blue">$273</span> person</div>
                                        <a class="thm-btn" href="#">Details</a>
                                    </div>
                                </div>
                                <div class="hotel-item">
                                    
                                    <div class="hotel-image">
                                        <a href="#">
                                            <div class="img"><img src="/plantilla/assets/images/hotel-3.jpg"  alt="" class="img-responsive"></div>
                                        </a>
                                    </div>
                                  
                                    <div class="hotel-body">
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                 >
                                        <h3>Burj Al Arab</h3>
                                     
                                        <p>Etiam maximus molestie accumsan. Sed metus sapien, fermentum nec lorem ac.</p>
                                        <div class="free-service">
                                            <i class="flaticon-television" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plasma TV with cable chanels"></i>
                                            <i class="flaticon-swimmer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swimming pool"></i>
                                            <i class="flaticon-wifi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free wifi"></i>
                                            <i class="flaticon-weightlifting" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitness center"></i>
                                            <i class="flaticon-lemonade" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restaurant"></i>
                                        </div>
                                    </div>
                                    <div class="hotel-right"> 
                                        <div class="hotel-person">from <span class="color-blue">$989</span> person</div>
                                        <a class="thm-btn" href="#">Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="hotel-item">
                                    
                                    <div class="hotel-image">
                                        <a href="#">
                                            <div class="img"><img src="/plantilla/assets/images/hotel-4.jpg"  alt="" class="img-responsive"></div>
                                        </a>
                                    </div>
                               
                                    <div class="hotel-body">
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    >
                                        <h3>Tours in Greece</h3>
                                      
                                        <p>Etiam maximus molestie accumsan. Sed metus sapien, fermentum nec lorem ac.</p>
                                        <div class="free-service">
                                            <i class="flaticon-television" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plasma TV with cable chanels"></i>
                                            <i class="flaticon-swimmer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swimming pool"></i>
                                            <i class="flaticon-wifi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free wifi"></i>
                                            <i class="flaticon-weightlifting" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitness center"></i>
                                            <i class="flaticon-lemonade" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restaurant"></i>
                                        </div>
                                    </div>
                                    <div class="hotel-right"> 
                                        <div class="hotel-person">from <span class="color-blue">$273</span> person</div>
                                        <a class="thm-btn" href="#">Details</a>
                                    </div>
                                </div>
                                <div class="hotel-item">
                                   
                                    <div class="hotel-image">
                                        <a href="#">
                                            <div class="img"><img src="/plantilla/assets/images/hotel-5.jpg"  alt="" class="img-responsive"></div>
                                        </a>
                                    </div>
                                   
                                    <div class="hotel-body">
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                       
                                        <h3>Tours in Greece</h3>
                                       
                                        <p>Etiam maximus molestie accumsan. Sed metus sapien, fermentum nec lorem ac.</p>
                                        <div class="free-service">
                                            <i class="flaticon-television" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plasma TV with cable chanels"></i>
                                            <i class="flaticon-swimmer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swimming pool"></i>
                                            <i class="flaticon-wifi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free wifi"></i>
                                            <i class="flaticon-weightlifting" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitness center"></i>
                                            <i class="flaticon-lemonade" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restaurant"></i>
                                        </div>
                                    </div>
                                    <div class="hotel-right"> 
                                        <div class="hotel-person">from <span class="color-blue">$273</span> person</div>
                                        <a class="thm-btn" href="#">Details</a>
                                    </div>
                                </div>
                                <div class="hotel-item">
                                   
                                    <div class="hotel-image">
                                        <a href="#">
                                            <div class="img"><img src="/plantilla/assets/images/hotel-6.jpg"  alt="" class="img-responsive"></div>
                                        </a>
                                    </div>
                                   
                                    <div class="hotel-body">
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                      
                                        <h3>Park Hyatt Hotel</h3>
                                        
                                        <p>Etiam maximus molestie accumsan. Sed metus sapien, fermentum nec lorem ac.</p>
                                        <div class="free-service">
                                            <i class="flaticon-television" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plasma TV with cable chanels"></i>
                                            <i class="flaticon-swimmer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swimming pool"></i>
                                            <i class="flaticon-wifi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free wifi"></i>
                                            <i class="flaticon-weightlifting" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitness center"></i>
                                            <i class="flaticon-lemonade" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restaurant"></i>
                                        </div>
                                    </div>
                                    <div class="hotel-right"> 
                                        <div class="hotel-person">from <span class="color-blue">$273</span> person</div>
                                        <a class="thm-btn" href="#">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
            
           
          

          
         
        </div>
        <!-- Footer Section -->
@endsection

@section('script')


@endsection


