@extends('assets.pagina.es.layouts.master')

@section('content')
 


            <section class="header header-bg-10" style="margin-top: -200px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner" style="margin-top: 100px;">
                                    <h1>TOURS LIST</h1>
                                
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
                        @foreach($data as $item)
                            <div class="col-sm-6 col-md-6">
                          <div class="hotel-list-content">
                                 <div class="hotel-item">
                                    <!-- hotel Image-->
                                    <div class="hotel-image">
                                        <a href="#">
                                            <div class="img"><img src="{{ $item->img}}"  alt="" class="img-responsive"></div>
                                        </a>
                                    </div>
                                    <!-- hotel body-->
                                    <div class="hotel-body">
                                      
                                        <!-- title-->
                                        <h3></h3>
                                        <!-- Text Intro-->
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                            standard dummy text ever since the 1500s, when an unknown</p>
                                     <a class="thm-btn" href="{{route('detalletourEs',['es'=>'es','tour' => $item->slug])}}">Details</a>
                                    </div>

                                   <!--  <div class="hotel-right"> 
                                        <div class="hotel-person">from <span class="color-blue">$273</span> person</div>
                                        <a class="thm-btn" href="#">Details</a>
                                    </div> -->
                                </div>
                          </div>                        
                            </div>
                        @endforeach

                        
                    </div>
                </div>
            </section>



            
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

