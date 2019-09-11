<?php
namespace App\Helpers;
use App\Language;
use App\Tour;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class publicTours
{
	public static function tours($idioma,$estadoPublicado)
	{
		
         

         $toursPublic = DB::table('languages')
			        ->select('tours.id', DB::raw('count(*) as dias'),'tours.name','tours.description_short','tours.img','tours.price','tours.slug','categories.name as categoriesName','itineraries.department')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->leftJoin('itineraries', 'itineraries.tour_id', '=', 'tours.id')
			        ->where("tours.principal","=",$estadoPublicado)
			        ->where("languages.abbr","=",$abbr)
			        ->groupBy('tours.name')
			        ->paginate(6);

		return $toursPublic;

	}

	public static function toursTreck($idioma,$estadoPublicado)
	{
		

         $toursTreck = DB::table('tours')
			             ->select('tours.nombre as nombretour','tipo_categoria_tours.nombre as categoriatour','tours.img','tours.slug')
			             ->join('tour_categoria','tour_categoria.tour_id','=','tours.id')
			             ->join('tipo_categoria_tours','tipo_categoria_tours.id','=','tour_categoria.categoria_id')
			             ->join('languages','languages.id','=','tipo_categoria_tours.lenguaje_id')
			              ->where("tours.principal","=",$estadoPublicado)
			              ->where("languages.abrr","=",$idioma)
			             ->paginate(8);

		return $toursTreck;

	}
	
	public static function toursUnaPersona($idioma,$estadoPublicado)
	{
		

         $toursPublic = DB::table('languages')
			        ->select('tours.id','tours.name','tours.description_short','tours.img','tours.price','tours.slug','categories.description as categoriesName')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->where("tours.principal","=",$estadoPublicado)
			        ->where("languages.abbr","=",$idioma)
			        ->paginate(4);

		return $toursPublic;

	}
	public static function toursCan($idioma)
	{
		

         $toursCan = DB::table('languages')
			        ->select('tours.id','tours.name','tours.description_short','tours.img','tours.price','tours.price_can','tours.slug','categories.description as categoriesName')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->where("tours.price","!=",'null')
			        ->where("tours.price_can","!=",'null')
			        ->where("languages.abbr","=",$idioma)
			        ->paginate(6);

		return $toursCan;

	}
	public static function toursRecomendadosTren($idioma,$estadoPublicado)
	{
		

         $toursPublic = DB::table('languages')
			        ->select('tours.id','tours.name','tours.description_short','tours.img','tours.price','tours.slug','categories.description as categoriesName')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->where("languages.abbr","=",$idioma)
			        ->where("tours.tipo_viaje","=",'tren')
			        ->orderByRaw('tours.name ASC')
			        ->paginate(6);

		return $toursPublic;

	}
	
		public static function toursRecomendadosCarro($idioma,$estadoPublicado)
	{
		

         $toursPublic = DB::table('languages')
			        ->select('tours.id','tours.name','tours.description_short','tours.img','tours.price','tours.slug','categories.description as categoriesName')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->where("languages.abbr","=",$idioma)
			        ->where("tours.tipo_viaje","=",'carro')
			        ->orderByRaw('tours.name ASC')
			        ->paginate(6);

		return $toursPublic;

	}


	public static function toursIndex($abbr,$estadoPublicado)
	{
		
         $toursPublic = DB::table('languages')
			           ->select('tours.id', DB::raw('count(*) as dias'),'tours.name','tours.img','tours.slug','categories.name as categoriesName')
			           ->join('categories', 'languages.id', '=', 'categories.language_id')
			           ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			           ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			           ->where("tours.principal","=",$estadoPublicado)
			           ->where("languages.abbr","=",$abbr)
			           ->groupBy('tours.name')
			           ->paginate(6);

		return $toursPublic;

	}
	public static function toursRelacionados($abbr,$catagoriaId)
	{
		
         $toursPublic = DB::table('languages')
			        ->select('tours.id','tours.name','tours.tipo_tour','tours.description_short','tours.img','tours.price','tours.slug','categories.name as categoriesName')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			     //   ->leftJoin('itineraries', 'itineraries.tour_id', '=', 'tours.id')
			        ->where("categories.id","=",$catagoriaId)
			        ->where("languages.abbr","=",$abbr)
			     //   ->where('tours.principal', '1')
			        ->groupBy('tours.name','tours.id','tours.tipo_tour','tours.description_short','tours.img','tours.price','tours.slug','categories.name')
			        ->paginate(4);
			     //   dd( $toursPublic);

		return $toursPublic;

	}

		public static function todoTours($abbr)
		{
		
         

         $toursPublic = DB::table('languages')
			        ->select('tours.id','tours.name','tours.tipo_tour','tours.description_short','tours.img','tours.price','tours.slug','categories.name as categoriesName')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->where("languages.abbr","=",$abbr)

			        ->paginate(12);

				return $toursPublic;

		}

		public static function searchTours($abbr,$search)
		{
		
         $toursPublic = DB::table('languages')
			        ->select('tours.id','tours.name','tours.tipo_tour','tours.description_short','tours.img','tours.price','tours.slug','categories.name as categoriesName')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->where("languages.abbr","=",$abbr)
			        ->where("categories.name","=",$search)
			        ->paginate(50);    

				return $toursPublic;

		}

		public static function searchToursPais($abbr,$search)
		{
		
         $toursPublic = DB::table('languages')
			        ->select('tours.id','tours.name','tours.tipo_tour','tours.description_short','tours.img','tours.price','tours.slug','categories.name as categoriesName')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->where("languages.abbr","=",$abbr)
			        ->where("tours.lugar","=",$search)
			        ->paginate(12);    

				return $toursPublic;

		}
		
		public static function searchToursCan($abbr,$search)
		{
		
      
         $toursPublic = DB::table('languages')
			        ->select('tours.id','tours.name','tours.tipo_tour','tours.description_short','tours.img','tours.price','tours.slug','categories.name as categoriesName')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->where("languages.abbr","=",$abbr)
			        ->where("tours.principal","=",$search)
			        ->paginate(12);    

				return $toursPublic;

		}
		public static function searchToursPrecio($idioma,$precio,$departamento)
		{
		
		
		$precio = explode("-", $precio);
		$precioMin=$precio[0];
		$precioMax=$precio[1];

         $toursPublic = DB::table('languages')
			        ->select('tours.id','tours.name','tours.tipo_tour','tours.description_short','tours.img','tours.price','tours.slug','categories.name as categoriesName')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->where("languages.abbr","=",$idioma)
			     //   ->where("tours.price","<=",$precio)
			        ->whereBetween("tours.price", [$precioMin,$precioMax])
			        ->where("tours.lugar","=",$departamento)
			        ->get();   
            // 	dd($toursPublic);
				return $toursPublic;

		}
		

		public static function searchSeries($abbr)
		{
		$toursPublic = DB::table('languages')
			        ->select('tours.id', DB::raw('count(*) as dias'),'tours.tipo_tour','tours.name','tours.description_short','tours.img','tours.price','tours.slug','categories.name as categoriesName','itineraries.department')
			        ->join('categories', 'languages.id', '=', 'categories.language_id')
			        ->join('categories_has_tours as cat_t', 'cat_t.categorie_id', '=', 'categories.id')
			        ->join('tours', 'cat_t.tour_id', '=', 'tours.id')
			        ->leftJoin('itineraries', 'itineraries.tour_id', '=', 'tours.id')
			        ->where("languages.abbr","=",$abbr)
			        ->where ('tours.tipo_tour','serie')
			        ->groupBy('tours.name')
			        ->paginate(12);
				return $toursPublic;    
		}


}