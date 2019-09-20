<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Blog;
use App\Models\tours;
use App\Helpers\publicTours;
class PublicController extends Controller
{
   public function index()
   {
       
    return redirect('/es');

   }
   public function lang($abbr='es')
   {
      if($abbr =='es' || $abbr=='en' )
      {
         $dataTreck = publicTours::toursTreck($abbr,'1'); 

         return view('assets.pagina.'.$abbr.'.inicio',['dataTreck'=>$dataTreck]);
      }
     
    }



   // public function blog(Request $request)
   // {

   //    $data = DB::table('blogs')
   //       ->select('blogs.url','blogs.descripcioncorta','blogs.fechaPublicacion','blogs.id','blogs.titulo','blogs.contenido','blogs.urlimagen','categoria_blogs.nombre as tipoblog')
   //       ->join('categoria_blogs','categoria_blogs.id','=','blogs.categoria_blog_id')
   //       ->paginate(4);

   //    $cultura = DB::table('blogs')
   //       ->select('blogs.url','blogs.descripcioncorta','blogs.fechaPublicacion','blogs.id','blogs.titulo','blogs.contenido','blogs.urlimagen','categoria_blogs.nombre as tipoblog')
   //       ->join('categoria_blogs','categoria_blogs.id','=','blogs.categoria_blog_id')
   //       ->where('categoria_blogs.nombre','=','cultura')
   //       ->paginate(2);

   //    $gastronomia = DB::table('blogs')
   //       ->select('blogs.url','blogs.descripcioncorta','blogs.fechaPublicacion','blogs.id','blogs.titulo','blogs.contenido','blogs.urlimagen','categoria_blogs.nombre as tipoblog')
   //       ->join('categoria_blogs','categoria_blogs.id','=','blogs.categoria_blog_id')
   //       ->where('categoria_blogs.nombre','=','gastronomia')
   //       ->paginate(2);

   //    $destinos =DB::table('blogs')
   //       ->select('blogs.url','blogs.descripcioncorta','blogs.fechaPublicacion','blogs.id','blogs.titulo','blogs.contenido','blogs.urlimagen','categoria_blogs.nombre as tipoblog')
   //       ->join('categoria_blogs','categoria_blogs.id','=','blogs.categoria_blog_id')
   //       ->where('categoria_blogs.nombre','=','destinos')
   //       ->paginate(2);

   //    $noticias = DB::table('blogs')
   //       ->select('blogs.url','blogs.descripcioncorta','blogs.fechaPublicacion','blogs.id','blogs.titulo','blogs.contenido','blogs.urlimagen','categoria_blogs.nombre as tipoblog')
   //       ->join('categoria_blogs','categoria_blogs.id','=','blogs.categoria_blog_id')
   //       ->where('categoria_blogs.nombre','=','noticias')
   //       ->paginate(2);
      
      

   //    if($request->ajax()) 
   //    {
   //        return response()->json(view("public.es.blog.principal_blog.pricipal_blog",compact('data'))->render());
   //    }

   //    $categoria = DB::table('categoria_blogs')
   //       ->select('*') 
   //       ->get();

   //    return view("public.es.blog.blog",compact('data','categoria','cultura','gastronomia','destinos','noticias'));
   // }

   public function detalleBlog($url)
   {
      
      $tipocategoria = DB::table('categoria_blogs')
      ->select('*') 
      ->get();

      //Detalle de cada blog
      $detalleBlog = Blog::where('url', '=', $url)->get()[0];
    
      // fin

      $post= DB::table('blogs')
         ->select('*')
         ->paginate(4);

      return view('public.es.blog.detalleBlog',['detalleBlog'=>$detalleBlog,'tipocategoria'=>$tipocategoria,'post'=>$post]);
   }

   public function blogPorCategoria($categoria='',Request $request)
   {
   
      
      //Obtener el id de la categoria por nombre
      $idCategoria=DB::table('categoria_blogs')
                        ->select('id')
                        ->where('nombre','=',$categoria)
                        ->get();
      
      $id=0;

      foreach($idCategoria as $item)
      {
         $id=$item->id;
      }

      $blog=DB::table('blogs')
         ->select('*')
         ->where('categoria_blog_id','=',$id)
         ->paginate(2);

      if($request->ajax()) 
      {            
         return response()->json(view("public.es.blog.principal_blog.principal_blog_categoria",compact('blog'))->render());
      }

      return view('public.es.blog.blogPorCategoria',['blog'=>$blog,'categoria'=>$categoria]);
   }

   public function tours($es='', $categoria='',Request $request)
   {
    
    
      $nameCategoria=str_replace("-", " ", $categoria);
      $idCategoria=DB::table('tipo_categoria_tours')
                    ->select('id')
                    ->where('slug','=',$categoria)
                    ->get();
                    
      $id=0;

         foreach($idCategoria as $item)
         {
            $id=$item->id;
         }
         
         if($categoria=='tours')
         {
            $data=db::table('tours')
              ->select('tours.nombre as nombretour','tours.descripcion as descripciontour','tours.img','tours.slug')
              ->join('tour_categoria','tour_categoria.tour_id','=','tours.id')
              ->join('tipo_categoria_tours','tipo_categoria_tours.id','=','tour_categoria.categoria_id')
              ->paginate(10);

         }else
         {
          $data=db::table('tours')
              ->select('tours.nombre as nombretour','tours.descripcion as descripciontour','tours.img','tours.slug')
              ->join('tour_categoria','tour_categoria.tour_id','=','tours.id')
              ->join('tipo_categoria_tours','tipo_categoria_tours.id','=','tour_categoria.categoria_id')
              ->where('tipo_categoria_tours.id','=',$id) 
              ->paginate(10);
         }
        
       
       
        if($request->ajax()) 
          {
                return response()->json(view("public.es.tour.categoria.categoria",compact('data'))->render());     
          }
      
      return view('assets.pagina.es.tours',['data'=>$data,'categoria'=>$categoria,'nameCategoria'=>$nameCategoria]);
   }


   public function toursList($es='', $categoria='',Request $request)
   {
    
     
      $idCategoria=DB::table('tipo_categoria_tours')
                    ->select('id')
                    ->where('nombre','=',$categoria)
                    ->get();
                    
      $id=0;

         foreach($idCategoria as $item)
         {
            $id=$item->id;
         }
         
        $data=db::table('tours')
              ->select('tours.nombre as nombretour','tours.descripcion as descripciontour','tours.img','tours.slug')
              ->join('tour_categoria','tour_categoria.tour_id','=','tours.id')
              ->join('tipo_categoria_tours','tipo_categoria_tours.id','=','tour_categoria.categoria_id')
              ->where('tipo_categoria_tours.id','=',$id) 
              ->paginate(3);
       
       
        if($request->ajax()) 
          {
                return response()->json(view("public.es.tour.categoria.categoria",compact('data'))->render());     
          }
      
      return view('assets.pagina.es.toursList',['data'=>$data,'categoria'=>$categoria]);
   }

    public function toursCategoria($es='',$categoria='')
    {
      
      $idCategoria=DB::table('tipo_categoria_tours')
                          ->select('id')
                          ->where('nombre','=',$categoria)
                          ->get();
                          
      $id=0;

         foreach($idCategoria as $item)
         {
            $id=$item->id;
         }
       
       $data=db::table('tours')
                  ->select('tours.nombre as nombretour','tours.descripcion as descripciontour','tours.img','tours.slug')
                  ->join('tour_categoria','tour_categoria.tour_id','=','tours.id')
                  ->join('tipo_categoria_tours','tipo_categoria_tours.id','=','tour_categoria.categoria_id')
                  ->where('tipo_categoria_tours.id','=',$id) 
                  ->paginate(3);
       
        return response()->json(view("public.es.tour.categoria.categoria",compact('data'))->render());     
         
    }

   public function detalleTour($idioma,$slug)
   {
        
        $detalleTour = tours::where('slug', '=', $slug)->get()[0];
       
        $multimedia = db::table('tours')
            ->select('tours.multimedia_id','imagen.url as img')
            ->join('multimedia','multimedia.id','=','tours.multimedia_id')
            ->join('imagen','imagen.multimedia_id','=','multimedia.id')
            ->where('tours.slug','=',$slug)
            ->get();
        $itinerario = db::table('itinerarios')
            ->select('itinerarios.nombre as itinerarionombre','tours.slug','itinerarios.descripcion as descripcionitinerario','itinerarios.dia')
            ->join('tours','tours.id','=','itinerarios.id_tour')
            ->where('tours.slug','=',$slug)
            ->get();
     
        return view('assets.pagina.'.$idioma.'.detalletour',['detalleTour'=>$detalleTour,'multimedia'=>$multimedia,'itinerario'=>$itinerario]);
   }
   



   public function contacto($idioma='es')
   {
    
      return view('assets.pagina.'.$idioma.'.contact');
   }
 
  
   public function testimonios()
   {
       return view('public.es.testimonios.index');
   }

  public function detalleTour1($idioma,$slug)
  {
    
      return view('assets.pagina.es.detalleTour');
  }

  public function blog($idioma)
  {
      return view('assets.pagina.'.$idioma.'.blog');
  }
  public function about($idioma)
  {
      return view('assets.pagina.'.$idioma.'.about_us');
  }
}
