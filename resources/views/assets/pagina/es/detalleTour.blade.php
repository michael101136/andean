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

</style>

 
         <section id="overview" class="header header-bg-9">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="header-content">
                                <div class="header-content-inner">
                                    <div class="toure-title">
                                        <i class="fa fa-eye"></i>
                                        <h1>Transfagarasan road trip</h1>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-2">
                                            <div class="trip">
                                                <i class="flaticon-cabin"></i>
                                                <h5>Lodging</h5>
                                                <p>Hotels, Eco Lodges, </p>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-2">
                                            <div class="trip">
                                                <i class="flaticon-dollar-coins"></i>
                                                <h5>Price</h5>
                                                <p>$3,695 per person</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-2">
                                            <div class="trip">
                                                <i class="flaticon-night"></i>
                                                <h5>Nights</h5>
                                                <p>9 Days / 8 Nights</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-2">
                                            <div class="trip">
                                                <i class="flaticon-road-perspective-of-curves"></i>
                                                <h5>PYGMY MILES</h5>
                                                <p>6,295km</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-2">
                                            <div class="trip">
                                                <i class="flaticon-bicycle"></i>
                                                <h5>Transport</h5>
                                                <p>Overland, Flights</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-2">
                                            <div class="trip">
                                                <i class="flaticon-cabin"></i>
                                                <h5>Lodging</h5>
                                                <p>Hotels, Eco Lodges, </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div  class="navbar-default tour-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
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
                                    <h2>Detalles del tour</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="experience-title">
                                    <h2>Experience</h2>
                                    <h3>Access to free education for everyone</h3>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
                                        into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum 
                                        passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five .</p>
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
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                </div>
                            </div>
                            <div class="col-md-offset-2 col-md-4">
                                <div class="section-title text-center">
                                    
                                </div>
                            </div>



                             <div class="col-sm-8">
                                <div class="experience-title">
                                    <h2>Itinerario</h2>
                                 <div class="row">
                                     <div class="col-md-12">
                                            <div id="accordion">
                                          <h3 class="tap_acoordion">Section 1</h3>
                                          <div>
                                            <p>
                                            Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam.
                                            </p>
                                          </div>
                                          <h3 class="tap_acoordion">Section 2</h3>
                                          <div>
                                            <p>
                                            Sed non urna. Donec et ante. Phasellus eu ligula.
                                            </p>
                                          </div>
                                          <h3 class="tap_acoordion">Section 3</h3>
                                          <div>
                                            <p>
                                            Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                            Phasellus pellentesque purus in massa. Aenean in pede.
                                            </p>
                                            <ul>
                                              <li>List item one</li>
                                              <li>List item two</li>
                                              <li>List item three</li>
                                            </ul>
                                          </div>
                                          <h3 class="tap_acoordion">Section 4</h3>
                                          <div>
                                            <p>
                                            Cras dictum. Pellentesque habitant morbi tristique senectus et netus.
                                            </p>
                                            <p>
                                            Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                                            </p>
                                          </div>
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
                                    <h2>GALLERY</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                </div>
                            </div>
                            <div class="col-md-offset-2 col-md-4">
                                <div class="section-title text-center">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                                 <section class="hotels-details-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div id="sync1" class="owl-carousel">
                                <div class="item"><img src="/plantilla/assets/images/hotel-750x420-1.jpg" class="img-responsive" alt=""></div>
                                <div class="item"><img src="/plantilla/assets/images/hotel-750x420-2.jpg" class="img-responsive" alt=""></div>
                                <div class="item"><img src="/plantilla/assets/images/hotel-750x420-3.jpg" class="img-responsive" alt=""></div>
                                <div class="item"><img src="/plantilla/assets/images/hotel-750x420-4.jpg" class="img-responsive" alt=""></div>
                                <div class="item"><img src="/plantilla/assets/images/hotel-750x420-5.jpg" class="img-responsive" alt=""></div>
                                <div class="item"><img src="/plantilla/assets/images/hotel-750x420-6.jpg" class="img-responsive" alt=""></div>
                                <div class="item"><img src="/plantilla/assets/images/hotel-750x420-1.jpg" class="img-responsive" alt=""></div>
                            </div>
                            <div id="sync2" class="owl-carousel">
                                <div class="item"><img src="/plantilla/assets/images/hotel-140x90-1.jpg" class="img-responsive" alt=""></div>
                                <div class="item"><img src="/plantilla/assets/images/hotel-140x90-2.jpg" class="img-responsive" alt=""></div>
                                <div class="item"><img src="/plantilla/assets/images/hotel-140x90-3.jpg" class="img-responsive" alt=""></div>
                                <div class="item"><img src="/plantilla/assets/images/hotel-140x90-4.jpg" class="img-responsive" alt=""></div>
                                <div class="item"><img src="/plantilla/assets/images/hotel-140x90-5.jpg" class="img-responsive" alt=""></div>
                                <div class="item"><img src="/plantilla/assets/images/hotel-140x90-6.jpg" class="img-responsive" alt=""></div>
                                <div class="item"><img src="/plantilla/assets/images/hotel-140x90-1.jpg" class="img-responsive" alt=""></div>
                            </div>
                            <h3>Description</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its 
                                layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web 
                                page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web 
                                sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                                (injected humour and the like).
                            </p>
                           

                            <div class="separator"></div>
                           
                        </div>
                       
                    </div>
                </div>
            </section>
                            </div>
                    </div> 
                </div>
            </main>
            <!-- Newsletter -->
       
        </div>





@endsection

@section('script')
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
@endsection