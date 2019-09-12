@extends('public.es.layouts.master')

@section('content')
            <!-- page header -->
            <section class="header header-bg-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner">
                                    <h1>LET'S TALK !</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since </p>
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-4">
                                            <div class="contact-icon">
                                                <a href="#">
                                                    <i class="flaticon-facebook"></i>
                                                    <h5>Facebook</h5> 
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-4">
                                            <div class="contact-icon">
                                                <a href="#">
                                                    <i class="flaticon-smartphone"></i>
                                                    <h5>001620214460</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="contact-icon">
                                                <a href="#">
                                                    <i class="flaticon-mail"></i>
                                                    <h5>admin@hotmail.com</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ui breadcrumb">
                                        <a href="index.html" class="section">Home</a>
                                        <div class="divider"> / </div>
                                        <div class="active section">Contact</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact -->
            <section class="contact-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact_map">
                                <!-- The element that will contain Google Map. This is used in both the Javascript and CSS above. -->
                                <div id="map"></div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="contact-form">
                                <form>
                                    <h2>Let's Talk!</h2>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter your First Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Enter Your Last Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <textarea class="form-control" id="message" name="message" placeholder="Your Comment" rows="5"></textarea>
                                    </div>
                                    <a href="#" class="thm-btn">Submit</a>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact-details">
                                <h2>Contact Details</h2>
                                <div class="contact-content">
                                    <h4>Hours of Operation</h4>
                                    <p>
                                        We’re in the studio brainstorming, designing, and working away to create the best product we can from 9-5pm EST.
                                    </p>
                                </div>
                                <div class="contact-content">
                                    <h4>General Inquiries</h4>
                                    <p>
                                        Phone 718 369 0016 <br>
                                        <a href="mailto:hello@gmail.com">hello@gmail.com</a>
                                    </p>
                                </div>
                                <div class="contact-content">
                                    <h4>Address</h4>
                                    <p>
                                        67 35th St. <br>
                                        Unit 22 / Suite B528 <br>
                                        Brooklyn, NY <br>
                                        11232
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <!--         
   <section style="background-image:url('public/img/header/bg-1.jpg');" class="breadcrumbs">
        <div class="container">
          
            <h2 style="text-align: center;"><span>Contactos</span></h2>
          </div>
        </div>
      </section>

<div class="content-body">
      <div class="container page">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-item">
              <h4 class="title-section mt-30"><span class="font-bold">Contáctenos</span></h4>
              <div class="cws_divider mb-25 mt-5"></div>
              <ul class="icon">
                <li> <a href="#">reservas@machupicchugolden.com , info@machupicchugolden.com <i class="flaticon-suntour-email"></i></a></li>
                <li> <a href="#">(723)-700-1183<i class="flaticon-suntour-phone"></i></a></li>
                <li> <a href="#">Av. 28 de Julio Mz. R-2 Oficina 201 - Cusco<i class="flaticon-suntour-map"></i></a></li>
              </ul>
              <p class="mt-20">Si desea mayor información sobre los paquetes turisticos, absolver dudas, darnos sugerencias, etc; escribanos por el formulario de contáctenos.  </p>
              <div class="contact-cws-social"><a href="#" class="cws-social fa fa-twitter"></a><a href="#" class="cws-social fa fa-facebook"></a><a href="#" class="cws-social fa fa-google-plus"></a><a href="#" class="cws-social fa fa-linkedin"></a></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.0501372233057!2d-71.96276460039489!3d-13.532514651103106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd5faad2fcf35%3A0x41d3623d466dc332!2sEasy+Wash!5e0!3m2!1ses!2spe!4v1561503356877!5m2!1ses!2spe" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25295.930156304785!2d16.371063311644324!3d48.208404844730474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d07986fcad78b%3A0x73f5a4d267cc4174!2zTmFnbGVyZ2Fzc2UgMTAsIDEwMTAgV2llbiwg0JDQstGB0YLRgNC40Y8!5e0!3m2!1sru!2sua!4v1453294615596" allowfullscreen=""></iframe>->
            </div>
          </div>
        </div>
      </div>
      <div class="element-section pattern bg-gray-3 relative pt-60 pb-100">
        <div class="container">
          <h4 class="title-section mb-20"><span class="font-bold">Contáctenos</span></h4>
          <div class="widget-contact-form pb-0">
            <!-- contact-form->
            <div class="email_server_responce"></div>
            <form action="php/contacts-process.php" method="post" class="form contact-form alt clearfix">
              <div class="row">
                <div class="col-md-6 clearfix">
                  <div class="input-container">
                    <input type="text" name="name" value="" size="40" placeholder="Nombre" aria-invalid="false" aria-required="true" class="form-row form-row-first">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-container">
                    <input type="text" name="email" value="" size="40" placeholder="Correo electrónico" aria-required="true" class="form-row form-row-last">
                  </div>
                </div>
              </div>
              <div class="input-container">
                <textarea name="message" cols="40" rows="4" placeholder="Mensaje" aria-invalid="false" aria-required="true"></textarea>
              </div>
              <input type="submit" value="Enviar" class="cws-button alt">
            </form>
            <!-- /contact-form->
          </div>
        </div>
      </div>
    </div> 
-->


@endsection

@section('script')
@endsection
