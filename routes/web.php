<?php


Route::get('/', 'Web\MainController@home')->name('web.main.home');

Route::get('/portafolio', 'Web\MainController@portafolio')->name('web.main.portafolio');

Route::get('/proyecto/{proyectoSlug}', 'Web\MainController@proyecto')->name('web.main.proyecto');

Route::post('/formulario', 'Web\MainController@formulario')->name('web.main.formulario');


// Route::get('/password', function (Request $request) {

// 	$user = App\User::find(1);
// 	$user->save();
//     return 'listo';
    
// });
Route::get('/laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\LfmController@upload');

Route::group(['prefix' => 'admin'], function () {
    include_once 'admin.php';
});


Route::group(['prefix' => 'administrador'], function () {
    Voyager::routes();
});
