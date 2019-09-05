@extends('public.es.layouts.master')

@section('content')
    <section style="background-image:url('/public/img/header/bg-1.jpg');" class="breadcrumbs">
        <div class="container">
          
            <h2 style="text-align: center; font-size: 25px; ">{{$detalleTour->nombre}} </h2>
          </div>
        </div>
      </section>
<div class="content-body">
      <section class="page-section pt-0 pb-50">
        <br/>
       
        <div class="container">
          <div id="flex-slider" class="flexslider">
            <ul class="slides">
                @foreach($multimedia as $item)
                    <li><img src="{{$item->img}}" alt ></li>
                @endforeach

            </ul>
          </div>
          <div id="flex-carousel" class="flexslider">
            <ul class="slides">
                 @foreach($multimedia as $item)
              <li><img src="{{$item->img}}" data-at2x="{{$item->img}}" alt ></li>
                  @endforeach

            </ul>
          </div>
        </div>
        <div class="container mt-30">
        
            
          <!--<h4 class="mb-20">DETALLES</h4>-->
          <div class="row">
            <div class="col-md-12">
              <div class="tabs">
                <div class="block-tabs-btn clearfix">
                    <div data-tabs-id="tabs3" class="tabs-btn active">Itinerarios</div>
                    <div data-tabs-id="tabs2" class="tabs-btn">Precios</div>
                    <div data-tabs-id="tabs1" class="tabs-btn">Incluye</div>
             
                
                </div>
                <!-- tabs keeper-->
                <div class="tabs-keeper">
                  <!-- tabs container-->
                  <div data-tabs-id="cont-tabs1" class="container-tabs ">
                    <h6 class="trans-uppercase"> </h6>
                    <p>{!!$detalleTour->organizacion!!} </p>
               
                  </div>
                  <!-- /tabs container-->
                  <!-- tabs container-->
                  <div data-tabs-id="cont-tabs2" class="container-tabs">
                   
                   <div class="row">
                            <div class="mb-md-50"><img src="pic/promo-2.jpg" alt class="mt-minus-100"></div>
                            <div class="col-md-12">
                     
                               <div class="search-hotels room-search pattern">
                                    <div class="search-room-title">
                                      <h5>Precios del tour</h5>
                                    </div>
                                    <div class="tours-container">
                                      <div class="tours-box">
                                        <div class="tours-search mb-10">
                                          <form method="post" class="form search divider-skew">
                                            <div class="search-wrap">
                                              <input type="text" placeholder="Destination" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                                            </div>
                                          </form>
                                         
                                          <div class="selection-box divider-skew"><i class="flaticon-suntour-adult box-icon"></i>
                                            <select>
                                              <option>Adult</option>
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                            </select>
                                          </div>
                                          <div class="selection-box divider-skew"><i class="flaticon-suntour-children box-icon"></i>
                                            <select>
                                              <option>Child</option>
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                            </select>
                                          </div>
                                          <div class="selection-box"><i class="flaticon-suntour-bed box-icon"></i>
                                            <select>
                                              <option>Room</option>
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                            </select>
                                          </div>
                                          <div class="button-search">GO</div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                               <div class="room-table">
                                <table class="table alt-2">
                                  <thead>
                                    <tr>
                                      <th>Room Type</th>
                                      <th>Max.</th>
                                      <th>Options</th>
                                      <th>Today's price</th>
                   
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td> <img src="pic/190x130.jpg" data-at2x="pic/190x130@2x.jpg" alt>
                                        <h6>Grand Hotel Wien</h6>
                                        <p class="mb-0">(Extra beds available: Crib, <br> Rollaway bed) Room sleeps <br> 4 guests (up to 3 children)</p>
                                      </td>
                                      <td> 
                                        <div class="table-icon"><i class="flaticon-people"></i><i class="flaticon-people"></i><i class="flaticon-people"></i><i class="flaticon-people"></i><i class="flaticon-people alt"></i></div>
                                        <p>4 guest</p>
                                      </td>
                                      <td> 
                                        <ul class="style-1">
                                          <li>Special conditions, pay when you stay</li>
                                          <li>Breakfast included</li>
                                          <li>Free Parking</li>
                                        </ul>
                                      </td>
                                      <td class="room-price">$120</td>
                                     
                                    </tr>
                                    <tr>
                                      <td> <img src="pic/190x130.jpg" data-at2x="pic/190x130@2x.jpg" alt>
                                        <h6>Deluxe Room, Sea View</h6>
                                        <p class="mb-0">(Extra beds available: Crib, <br> Rollaway bed)</p>
                                      </td>
                                      <td> 
                                        <div class="table-icon"><i class="flaticon-people"></i><i class="flaticon-people"></i><i class="flaticon-people alt"></i><i class="flaticon-people alt"></i><i class="flaticon-people alt"></i></div>
                                        <p>2 guest</p>
                                      </td>
                                      <td> 
                                        <ul class="style-1">
                                          <li>Special conditions, pay when you stay</li>
                                          <li>Breakfast included</li>
                                          <li>Free Parking</li>
                                          <li>Free Internet</li>
                                        </ul>
                                      </td>
                                      <td class="room-price">Sold out</td>
                                     
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                           
                            </div>
                    </div>
                 
                  </div>
                  <!-- /tabs container-->
                  <!-- tabs container-->
                  <div data-tabs-id="cont-tabs3" class="container-tabs active">
                
                         <div class="row">
                            <div class="mb-md-50"><img src="pic/promo-2.jpg" alt class="mt-minus-100"></div>
                            <div class="col-md-12"> 
                              
                              <div class="toggle style-2">
                                  
                                @foreach($itinerario as $item)
                                    @if($item->dia == '1')
                                        <div class="content-title active"> <span class="active"><i class="active-icon"></i>DÍA {{$item->dia}}: {{$item->itinerarionombre}}</span></div>
                                        <div class="content">{!!$item->descripcionitinerario!!}</div>
                                    @else
                                        <div class="content-title"> <span><i class="active-icon"></i>DÍA {{$item->dia}}: {{$item->itinerarionombre}}</span></div>
                                        <div class="content">{!!$item->descripcionitinerario!!} </div>
                                   @endif
                              @endforeach
                              </div>
              
                              
                            </div>
                    </div>
                   
                
                  </div>
                  <!-- /tabs container-->
                </div>
                <!-- /tabs keeper-->
              </div>
            </div>
            <!--<div class="col-md-8">-->
            <!-- hola-->
            <!--</div>-->
      
          </div>
        </div>

      </section>
    </div>

@endsection

@section('script')

<script>

function listar_categorias(categoria)
{
  
    $('#procesoCarga').html('<div class="loading"><img src="/public/img/carga2.gif" alt="loading" /><br/></div>');
     $.ajax({                        
                url:'{{ route('listar_tours_categoria',['idioma'=> 'es']) }}/'+categoria,
                type: 'GET',           
                dataType:'json',
                success: function(data)             
                {
           
                  $("#categoria").html(data);
                  $('#procesoCarga').html('');

                }
        });  
        
     return false;  
}
    
</script>


@endsection