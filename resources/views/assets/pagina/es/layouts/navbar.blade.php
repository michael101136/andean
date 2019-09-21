 <!-- page loader -->
        <div class="se-pre-con"></div>
        <div id="page-content">
            <!-- navber -->
            <nav id="mainNav" class="navbar navbar-fixed-top">
                <div class="container">
                    <!--Brand and toggle get grouped for better mobile display--> 
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="/">
                            <img src="/plantilla/logo.png" class="img-resposive" alt="" style="height: 90px;width: 120px;margin-top: -20px;z-index: 100;">
                        </a>
                    </div>
                    <!--Collect the nav links, forms, and other content for toggling--> 
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/">Inicio</a></li>
                          
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Tours <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'aventura'])}}">Treck</a></li>
                                   
                                </ul>
                            </li> -->
                            <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'inca-rail'])}}">Inca Rail</a></li>
                            <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'treck-&-bikes'])}}">Treck & Bikes</a></li>
                            <li><a href="{{route('paquete',['idioma'=> 'es','categoria'=>'tours'])}}">Tours</a></li>
                            <li><a href="{{route('aboutEs',['es'=>'es'])}}">Amazon</a></li>
                            <li><a href="{{route('aboutEs',['es'=>'es'])}}">Nosotros</a></li>
                            <li><a href="{{route('blogEs',['es'=>'es'])}}">Blog</a></li>
                            <li><a href="{{route('contactEs',['es'=>'es'])}}">Blog</a></li>

                        </ul>

                    </div> <!-- /.navbar-collapse --> 
                </div> <!-- /.container --> 
            </nav> 