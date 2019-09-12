<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/{lang?}', [ 'uses' => 'PublicController@lang' ])->name('idiomas');
Route::get('{es?}/detalletour/{slug?}',['uses'=>'PublicController@detalleTour'])->name('detalletourEs');
Route::get('/', function () {
    return redirect('/es');
});

// Route:: get('/detalle_tour1','PublicController@detalleTour1')->name('detalle_tour1');


// Route::get('/{es?}', 'PublicController@index');





// Route::get('/contacto', 'PublicController@contacto');

// Route::get('/nosotros', 'PublicController@contacto');
Route::get('/{es?}', 'PublicController@index');
Route::get('/contacto', 'PublicController@contacto');
Route::get('{es?}/blog',['uses'=>'PublicController@blog'])->name('blogEs');
Route::get('/nosotros', 'PublicController@nosotros');

// /*__________________inicio estañol_________________________________________________________________*/
// Route::get('{lang?}/nosotros/', [ 'uses' => 'PublicController@about' ])->name('nosotrosEs');
// Route::get('{lang?}/testimonio/', [ 'uses' => 'PublicController@testimony' ])->name('testimonioEs');
// Route::get('{lang?}/categoria/{search?}', [ 'uses' => 'PublicController@tours' ])->name('paquetesCategoriaES');
// Route::get('{lang?}/blog/', [ 'uses' => 'PublicController@blog' ])->name('blogEs');
// Route::get('{lang?}/contacto/', [ 'uses' => 'PublicController@contact' ])->name('contactoEs');
// /*__________________fin español_________________________________________________________________*/
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');




// Route::get('/home', 'HomeController@index');

// Route::resource('tipoAlojamientos', 'TipoAlojamientoController');

// Route::resource('categoriaAlojamientos', 'CategoriaAlojamientoController');

// Route::resource('tipoHabitacions', 'tipo_habitacionController');

// Route::resource('alojamientos', 'alojamientoController');
// Route::resource('ubigeos', 'UbigeoController');

// Route::resource('multimedia', 'multimediaController');
// Route:: POST('/saveContenidoMultimedia', 
// [
// 	'uses' => 'multimediaController@saveContenidoMultimedia',
// 	'as' => 'multimedia.contenidoMultimedia'
// ]);
// Route:: POST('/images-multimedia', 
// [
// 	'uses' => 'multimediaController@storeImagen',
// 	'as' => 'multimedia.storeImagen'
// ]);
// Route::resource('imagen','ImageController');
// Route::get('image/listar/{id?}', [ 'uses' => 'ImageController@listarImagenes' ])->name('listarImagenes');
// Route::get('image/delete/{id?}',[ 'uses' => 'ImageController@delete_img' ])->name('EliminarImagenes');


// Route::resource('languages', 'languagesController');

// Route::resource('paises', 'paisesController');



// Route::resource('testimonios', 'TestimonioController');
// // Route::get('/paquete','PublicController@tours');

// Route::get('{es}/paquete/{categoria?}',['uses'=>'PublicController@tours'])->name('paquete');
// Route:: get('{es}/listar_tours/{categoria}', ['uses' => 'PublicController@tours','as' => 'listar_tours']);

// Route:: get('{es}/listar_tours_categoria/{categoria?}', ['uses' => 'PublicController@toursCategoria','as' => 'listar_tours_categoria']);



// Route::resource('tipoCategoriaTours', 'TipoCategoriaTourController');

// Route::resource('tours', 'toursController');
// Route:: POST('/tours_save', 
// [
// 	'uses' => 'toursController@storeTours',
// 	'as' => 'tours.save'
// ]);

// Route:: POST('/saveCambioImagenTours', 
// [
// 	'uses' => 'toursController@saveCambioImagenTours',
// 	'as' => 'blog.cambioImagenTours'
// ]);

// Route::resource('itinerarios', 'itinerariosController');

// Route::get('tourItinerario/{id?}','itinerariosController@tourItinerarioShow')->name('tourItinerario');

// Route::get('tourItinerarioCreate/{id?}','itinerariosController@tourItinerarioCreate')->name('tourItinerarioCreate');

// Route::resource('userControllers', 'userControllerController');

// Route::resource('categoriaBlogs', 'CategoriaBlogController');

// Route::resource('blogs', 'BlogController');

// Route::get('/blog','PublicController@blog');
// Route:: get('/listar_blog', 
// [
// 	'uses' => 'PublicController@blog',
// 	'as' => 'listar_blog'
// ]);

// Route:: get('/listar_categoria_blog/{categoria?}', 
// [
// 	'uses' => 'PublicController@blogPorCategoria',
// 	'as' => 'listar_categoria_blog'
// ]);

// Route::get('/nosotros','PublicController@nosotros');

// Route::get('/testimonios','PublicController@testimonios');

// // Route::get('/blogPorCategoria','PublicController@blogPorCategoria');

// Route::get('/blogPorCategoria/{categoria?}',['uses'=>'PublicController@blogPorCategoria'])->name('blogPorCategoria');
// // Route::get('/detalleBlog','PublicController@detalleBlog');
// Route::get('/detalle/{slug?}',['uses'=>'PublicController@detalleBlog'])->name('detalleBlog');

// Route::post('/images-delete', 'BlogController@destroyImagen');
// Route::get('/images-show', 'BlogController@indexImagen');

// Route:: POST('/images-save', 
// [
// 	'uses' => 'BlogController@storeImagen',
// 	'as' => 'blog.save'
// ]);

// Route:: POST('/saveContenidoBlog', 
// [
// 	'uses' => 'BlogController@saveContenidoBlog',
// 	'as' => 'blog.contenido'
// ]);

// Route:: POST('/saveCambioImagenBlog', 
// [
// 	'uses' => 'BlogController@saveCambioImagenBlog',
// 	'as' => 'blog.cambioImagen'
// ]);

// Route::get('/contacto', 'PublicController@contacto');




