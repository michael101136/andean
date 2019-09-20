@extends('assets.pagina.es.layouts.master')

@section('content')
 
            <section class="header header-bg-10" style="margin-top: -200px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner" style="margin-top: 100px;">
                                    <h1>TOURS</h1>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


     <section class="hotel-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="tools-ber">
                                <div class="row">
                                    <div class="col-sm-3 col-md-3 hidden-xs">
                                        <div class="input-group custom-search">
                                            <input type="text" class="form-control" placeholder="Search" />
                                            <span class="input-group-btn">
                                                <button class="btn hotel-search" type="button">
                                                    <span class="fa fa-search"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 col-md-2">
                                        <!-- filters select -->
                                        <div class="select-filters">
                                            <select name="sort_price" id="sort-price">
                                                <option value="" selected="">Sort by price</option>
                                                <option value="lower">Lowest price</option>
                                                <option value="higher">Highest price</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 col-md-2">
                                        <!-- filters select -->
                                        <div class="select-filters">
                                            <select name="sort_price" id="sort-rank">
                                                <option value="" selected="">Sort by ranking</option>
                                                <option value="lower">Rank one</option>
                                                <option value="higher">Rank one</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-5 hidden-xs text-right">
                                       
                                        <a href="{{route('paquete',['idioma'=> 'es','categoria'=>'aventura'])}}" class="filters-btn"><i class="flaticon-squares-gallery-grid-layout-interface-symbol"></i></a>
                                        <a href="{{route('tourlist',['idioma'=> 'es','categoria'=>'aventura'])}}" class="filters-btn"><i class="flaticon-bulleted-list"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- collapse map -->
                        <div class="col-sm-12">
                            <div class="collapse" id="collapseMap">
                                <!-- The element that will contain Google Map. This is used in both the Javascript and CSS above. --> 
                                <div id="map"></div>
                            </div>
                        </div>
                        <!-- sideber -->
                        <!-- <div class="col-sm-4 col-md-3">
                            
                            <div class="sidber-box cats-price">
                                <div class="cats-title">Price</div>
                                <div class="price-Pips">
                                    <input type="text" id="range" value="range" name="range" />
                                </div>
                            </div>
                            
                            <div class="sidber-box cats-star">
                                <div class="cats-title">
                                    Star Category
                                </div>
                                <div class="checkbox-star">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sidber-box cats-facility">
                                <div class="cats-title">
                                    Facility
                                </div>
                                <div class="facility">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Pet allowed
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Fitness center
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Restaurant
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Tour guides
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Groups allowed
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Parking
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sidber-box help-widget">
                                <i class="flaticon-photographer-with-cap-and-glasses"></i>
                                <h4>Need <span>Help?</span></h4>
                                <a href="#" class="phone">+001620214460</a>
                                <small>Monday to Friday 9.00am - 7.30pm</small>
                            </div>
                        </div> -->
                        <div class="col-sm-12 col-md-12">
                            <div class="hotel-list-content">
                                <div class="row grid-margin">
                                  @foreach($data as $item)
                                    <div class="col-md-3 col-sm-6 col-xs-12 grid-item">
                                        <div class="grid-item-inner">
                                            <div class="grid-img-thumb">
                                                <a href="{{route('detalletourEs',['es'=>'es','tour' => $item->slug])}}"><img src="{{ $item->img}}" alt="1" class="img-responsive" /></a>
                                            </div>
                                            <div class="grid-content">
                                                <!-- <div class="grid-price text-right">
                                                    Only <span><sub>$</sub>785</span>
                                                </div> -->
                                                <div class="grid-text">
                                                    <div class="place-name">{{ $item->nombretour}}</div>
                                                    <div class="travel-times">
                                                        <h4 class="pull-left">3 days 2 nights </h4>
                                                        <!-- <span class="pull-right">
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
                    </div>
                </div>
            </section>

          <!--   <section class="hotel-inner"> 
                <div class="container">
                  
                    <div class="row">
                  
                        <div class="col-sm-12">
                            <div class="tools-ber">
                                <div class="row">
                                    
                                    
                                    <div class="col-sm-6 col-md-6">
                                        <div class="input-group custom-search">
                                            <input type="text" class="form-control" placeholder="Buscar tours"  name="buscarTours" id="buscarTours"/>
                                            <span class="input-group-btn">
                                                <button class="btn hotel-search" type="button">
                                                    <span class="fa fa-search"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    
                                  <div id="carga" style="position: absolute;z-index: 12;text-align: right;"> </div>
                                      <div id="lugares">
                                             
                                                <ul class="list-group" id="lista" style="position: absolute;width: 540px;margin-top: 34px;z-index:10;background: white; font-size:12px; ">
                                                    
                                                </ul>
                                            
                                      </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                  
                        <div class="col-sm-4 col-md-3">

                            <div class="sidber-box cats-price">
                                <div class="cats-title">
                                    TOUR POR PRECIOS
                                </div> 
                                <div class="price-Pips">
                                    <input type="text" id="range" value="range" name="range" />
                                </div>
                            </div>
                           
                            <div class="sidber-box cats-facility">
                                <div class="cats-title">
                                    CATEGORÍA
                                </div>
                                <div class="facility">
                                   
                                </div>
                            </div>
                   
                            <div class="sidber-box help-widget">
                                <i class="flaticon-photographer-with-cap-and-glasses"></i>
                                <h4>Necesitas  <span>ayuda?</span></h4>
                                <a href="#" class="phone">+0051 084 584 272</a>
                                <small>De lunes a domingo 9.00am - 8.30pm</small>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-9">
                            <div class="hotel-list-content" id="idTours">

                                @foreach($data as $item)
                                    <div class="hotel-item">
                                        <div class="hotel-image">
                                            <a href="{{route('detalletourEs',['es'=>'es','tour' => $item->slug])}}">
                                                <div class="img"><img src="{{ $item->img}}"  alt="" class="img-responsive"></div>
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
                                            <h3> <a href="{{route('detalletourEs',['es'=>'es','tour' => $item->slug])}}">{{ $item->nombretour}}</a></h3>
                                            <p>
                                                  
                                              
                                            </p>
                                            <div class="free-service">
                                                <i class="flaticon-television" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plasma TV with cable chanels"></i>
                                                <i class="flaticon-swimmer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swimming pool"></i>
                                                <i class="flaticon-wifi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free wifi"></i>
                                                <i class="flaticon-weightlifting" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitness center"></i>
                                                <i class="flaticon-lemonade" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restaurant"></i>
                                            </div>
                                            
                                            
                                           
                                        </div>
                                         <div class="hotel-right"> 
                                            <div class="hotel-person">  <span class="color-blue"> </span> </div>
                                            
                                                <a  href="{{route('detalletourEs',['es'=>'es','tour' => $item->slug])}}" class="btn btn-warning">MÁS DETALLE</a>

                                        </div>
                                    </div>
                                @endforeach 

                            </div>
                           
                        </div>
                    </div>
                </div>
            </section> -->


            
        </div>
        
  

@endsection

@section('script')
  
   @if (Session::has('estado')=='agregar') 
    <script>
            $(document).ready(function(){
                 $("#myModal").modal('show');
            });
    </script>                                     
   @endif
   
  
  
 <script type="text/javascript">
        //range slide
        $("#range").ionRangeSlider({
            type: "double",
            grid: true,
            min: 0,
            max: 5000,
            from: 0,
            to: 5000,
            step: 100,
            prefix: "$",
            onChange: function (data) {
                        
                $("#idTours" ).html('');

                var htmlTours='';
                $.ajax({
                          url:'',
                          type: 'POST',

                          data:{
                            "_token": "{{ csrf_token() }}",
                            "min":data.from,
                            "max":data.to,
                            "idioma":'es',
                          },
                          dataType: 'JSON',
                          success: function(respuesta) 
                          {
                                $("#idTours" ).html('');

                            $.each(respuesta.data,function(index,element)
                             { 
                                 
                                                
                              });

                                $("#idTours ").append(htmlTours);
                           
                            },
                          error: function(e){
                            if (e.statusText==='timeout'){
                              console.log('Tiempo de espera agotado');
                            }
                            else{
                              console.log(e.statusText);
                            }
                           },
                           timeout: 20000
                    });
                 return false;

            }
            
        });

    var catagoria = [];
   
     function tourOpcionCategoria(id,element)
    {
        element.checked = !element.checked;
        if(element.checked==true)
        {
            catagoria.push(id);
        }else {
           catagoria.splice(catagoria.indexOf(id),1);
        }
        var cantidaPeticion=catagoria.length;
        $("#tours" ).html('');
        var htmlTours='';
        $.ajax({
                 url:'',
                 type: 'POST',
                 data:{
                        "_token": "{{ csrf_token() }}",
                         "abbr":"es", "catagoria":catagoria,"cantidaPeticion":cantidaPeticion
                    },
                 dataType: 'JSON',
                 beforeSend: function() {
                 },
                 error: function() {
                 },
                  success: function(respuesta) 
                  {
                    $("#idTours" ).html('');

                        $.each(respuesta.data,function(index,element)
                         { 
                             
                        });
                        
                       $("#idTours ").append(htmlTours);  

                 }
        
         });
    }

    $(document).on('click','.pagination a', function(event){

           event.preventDefault();

           var page = $(this).attr('href');
           console.log(page);


    });
    
    $("#buscarTours").on( "keyup", function() 
                {
                    event.preventDefault();
                    var buscarTours=$("#buscarTours").val();
                        $("#lista" ).html('');
                        var html='';
                     $.ajax({
                                 
                             url:'',
                             type: 'POST',
                             data:{
                                    "_token": "{{ csrf_token() }}",
                                     "buscarTours":buscarTours,
                                     "idioma":'es',
                                     "categoria":'',
                                     
                                },
                             dataType: 'JSON',
                             beforeSend: function() {
                             },
                             error: function() {
                             },
                              success: function(respuesta) 
                              {
                              
                                
                                  $("#lista").html('');

                                  $.each(respuesta.data,function(index,element)
                                    {
                                        
                                            
                                            
                                             html=html +"<div class='hotel-item'>"+
                                                "<div class='hotel-image'>"+
                                                    "<a href='/es/tours/detalle/"+element.slug+"'>"+
                                                        "<div class='img'><img src='/"+element.img+"'  alt='' class='img-responsive'></div>"+
                                                    "</a>"+
                                                "</div>"+
                                                "<div class='hotel-body'>"+
                                                   
                                                    "<h3><a href='/es/tours/detalle/"+element.slug+"'>"+element.name+"</a></h3>"+
                                                   
                                                    "<a class='thm-btn btn-xs' href='/es/add-to-cart/"+element.id+" '><i class='fa fa-shopping-cart' aria-hidden='true'></i> Agregar al carrrito</a>"+
                                                "</div>"+
                                                "<div class='hotel-right'>"+
                                                    "<div class='hotel-person'> <span class='color-blue'>$ "+element.price+" </span> </div>"+
                                                    "<a class='btn btn-warning' href='/es/tours/detalle/"+element.slug+"'>MÁS DETALLE</a>"+
                                               "</div>"+
                                            "</div>";
                                            
                                   
                            
                            
                                    });
                                        
                        $("#lista").append(html);   
                                      
                                     
                                    
                             }
                        
                         });
                    
            });
            
            $("html").click(function() {
                 $("#lista").html('');
                 $("#buscarTours").val('');
        });


 </script>
@endsection

