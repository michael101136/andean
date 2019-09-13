@extends('assets.pagina.es.layouts.master')

@section('content')
  

    <!-- page header -->
   
            <section class="header header-bg-10" style="margin-top: -200px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner" style="margin-top: 100px;">
                                    <h1>CONTACTO</h1>
                                
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
                    
                        <div class="col-sm-8">
                            <div class="contact-form">
                                
                                    <h2>CONTÁCTENOS</h2>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nombres</label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Ingrese su primer nombre">
                                                <p style="color:red;">{{ $errors->first('name') }}</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Apellidos</label>
                                                <input type="text" class="form-control" id="apellido" name="apellido" value="{{old('apellido')}}" placeholder="Ingrese sus apellidos">
                                                <p style="color:red;">{{ $errors->first('apellido') }}</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Ingrese su correo electrónico">
                                                <p style="color:red;">{{ $errors->first('email') }}</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Número telefónico</label>
                                                <input type="text" class="form-control" id="phone" name="phone"   value="{{old('phone')}}" placeholder="Numero telefónico">
                                                <p style="color:red;">{{ $errors->first('phone') }}</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nacionalidad</label>
                                                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad"   value="{{old('nacionalidad')}}" placeholder="Nacionalidad">
                                                <p style="color:red;">{{ $errors->first('nacionalidad') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <textarea class="form-control" id="message" name="message"  value="{{old('message')}}"  placeholder="Ingrese su consulta" rows="5"></textarea>
                                        <p style="color:red;">{{ $errors->first('message') }}</p>
                                    </div>
                           
                                    <button type="submit" class="thm-btn" > enviar </button> 
                         
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact-details">
                                <h2>UBIQUENOS</h2>
                                <div class="contact-content">
                                    <h4>DIRECCIÓN</h4>
                                    <p>
                                        Urb. Lucrepata E-13, Cusco, Peru
                                    </p>
                                </div>
                                <div class="contact-content">
                                    <h4>CORREO ELECTRÓNICO</h4>
                                    <p>
                                        <a href="sales@andeanadventuresperu.com">   sales@andeanadventuresperu.com</a>
                                        <!-- <a href="info@machupicchugolden.com">info@machupicchugolden.com</a>
                                        <a href="ventas@machupicchugolden.com">ventas@machupicchugolden.com </a>    -->
                                    </p>
                                </div>
                                
                                <div class="contact-content">
                                    
                                    <p>
                                        
                                  
                                    <SMALL> <b>TELÉFONO : </b>  (+51 84) 229911 / (+51 84) 263498</SMALL><br/>
                                    <SMALL> <b>MOVISTAR : </b>  +51 984 948 057</SMALL><br/>
                                    

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           
        </div>

@endsection

@section('script')
   
   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxJnaq8H2Ib6E0bBT1sTnSnGZ5tqONxFI"></script>

  <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 16, scrollwheel: false,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(-13.5325399, -71.9628923), //turkey
                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#444444"}]}, {"featureType": "administrative.locality", "elementType": "labels.text.stroke", "stylers": [{"visibility": "on"}]}, {"featureType": "administrative.locality", "elementType": "labels.icon", "stylers": [{"visibility": "on"}, {"color": "#f1c40f"}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]}, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 45}]}, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]}, {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#fec107"}, {"visibility": "on"}]}]
                };
                // image from external URL

                var myIcon = '/plantilla/assets/images/marker.png';

               
                var catIcon = {
                    url: myIcon,
                }

              
                var mapElement = document.getElementById('map');

              
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
           
                

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(-13.5325399,-71.9628923), //spain
                    map: map,
                    icon: catIcon,
                    title: 'MACHUPICCHU GOLDEN',
                    animation: google.maps.Animation.DROP,
                });
            }
        </script>
@endsection