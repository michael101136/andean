@extends('assets.pagina.es.layouts.master')

@section('content')
 

        <!-- page header -->
             <section class="header header-bg-10" style="margin-top: -200px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner" style="margin-top: 100px;">
                                    <h1>Detalle</h1>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog details -->
            <section class="blog-details-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-8">
                            <!-- blog post -->
                             @foreach($blogs as $data)
                            <div class="blog-post">
                                <img src="{{$data->urlimagen}}" class="img-responsive" alt="img">
                                <div class="blog-post-inner">
                                    <h3>{{$data->titulo}}</h3>
                                    <p>{{$data->descripcioncorta}}</p>
                                  

                                    <div class="post-tags">
                                        <span>Tags:</span> 
                                          @foreach($tack as $data)
                                                <a class="ui tag">{{$data->nombre}}</a>
                                         @endforeach
                                    </div>
                                </div>
                            </div>
                           @endforeach
                           
                         
                        </div>
                        <!-- sideber -->
                        <div class="col-md-3 col-sm-4">
                           
                           
                            <!-- tags -->
                            <div class="sidber-box tags-widget">
                                <div class="cats-title">Tags </div>
                                <div class="tags-inner">
                                     @foreach($tack as $data)
                                            <a class="ui tag">{{$data->nombre}}</a>
                                     @endforeach
                                </div>
                            </div>
                            <!-- help center -->
                            <div class="sidber-box help-widget">
                                <i class="flaticon-photographer-with-cap-and-glasses"></i>
                                <h4>Necesita <span>ayuda?</span></h4>
                                <a href="#" class="phone">+51 (84) 229-911</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Newsletter -->
            
        </div>


@endsection

@section('script')

@endsection