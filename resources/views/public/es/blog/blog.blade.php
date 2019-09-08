@extends('public.es.layouts.master')

@section('content')
    <section style="background-image:url('public/img/header/bg-1.jpg');" class="breadcrumbs">
        <div class="container">
          
            <h2 style="text-align: center;"><span>Blog</span></h2>
          </div>
        </div>
      </section>
<div class="content-body">
    <div class="container page" >

      <div class="content-body"  style=" margin-top: -103px;">
      <div class="container page">
 
        <div class="row">
          <div class="col-md-8 mb-60"  id="principal_blog">
          <h6 class="title-section-top font-4" style="margin-top: -74px;">ÚLTIMOS ARTÍCULOS</h6>
                  <div class="cws_divider mb-25 mt-5"></div>
            <!-- Blog item-->
            @foreach($data as $item)
            <div class="blog-item clearfix mb-30 border">
              <!-- Blog Image-->
              <div class="blog-media"><a href="{{route('detalleBlog',['blog'=>$item->url])}}">
                  <div class="pic"><img src="{{ $item->urlimagen}}" data-at2x="pic/blog/270x270/1@2x.jpg" alt  style="width: 270px; height: 270px;"></div></a></div>
              <!-- blog body-->
              <div class="blog-item-body clearfix">
                <!-- title--><a href="{{route('detalleBlog',['blog'=>$item->url])}}">
                  <h6 class="blog-title">{{$item->titulo}}</h6></a>
                <div class="blog-item-data">{{$item->fechaPublicacion}}</div>
                <!-- Text Intro-->
                <!-- <p> {{$item->descripcioncorta}} </p><a href="/detalleBlog" class="blog-button">Leer más</a> -->

                <p> {{$item->descripcioncorta}} </p><a href="{{route('detalleBlog',['blog'=>$item->url])}}" class="blog-button">Leer más</a>
               
              </div>
            </div>
            @endforeach
             {!! $data->render() !!}

          </div>
          <div class="col-md-4 sidebar">
            <aside class="sb-right pb-50-imp" style="margin-top: -56px;">
      
              
              <div class="cws-widget">
                <div class="widget-categories">
                  <h2 class="widget-title">Categorias</h2>
                  <ul>
                        @foreach($categoria as $item)
                            <li class="cat-item cat-item-1"><a href="{{route('blogPorCategoria',['blog'=>$item->nombre])}}">{{$item->nombre}}</a></li>
                        @endforeach 
                  </ul>
                </div>
              </div>
              <!-- ! widget category-->
              <!-- widget post-->
              <div class="cws-widget">
                <div class="widget-post">
                  <h2 class="widget-title alt">ÚLTIMOS ARTICULOS</h2>
                  <!-- item recent post-->
                  @foreach($data as $item)
                  <div class="item-recent clearfix">
                    <div class="widget-post-media"><img src="{{$item->urlimagen}}" data-at2x="pic/blog/80x80/1@2x.jpg" alt style="height:60px"></div>
                    <h3 class="title"><a href="{{route('detalleBlog',['blog'=>$item->url])}}">{!!str_limit($item->titulo,50)!!}.</a></h3>
                    <div class="date-recent">{{$item->fechaPublicacion}} </div>
                  </div>
                  @endforeach
            
             
                </div>
              </div>
              
            
          </div>
          
        </div>
      </div>
    </div>





            </div>
            
          </div>
          
        </div>
      </div>
    </div>




@endsection

@section('script')



  
<script>



$(document).on('click','.pagination a', function(e){

    e.preventDefault();
    var page=$(this).attr('href').split('page=')[1];

     $.ajax({                        
                url:'{{ route('listar_blog') }}',
                data:{page:page},
                type: 'GET',           
                dataType:'json',
                success: function(data)             
                {
                
                  $("#principal_blog").html(data);

                }
        });  

});

       
     
</script>

@endsection


