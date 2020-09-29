<?php
//Login, mapa y salir.
Route::group(['prefix' => '/'], function () {
    Route::get('/', 'AdministradorController@Login')->name('Login');
    Route::post('/Login', 'AdministradorController@Logeo')->name('Logeo');
    Route::Get('/Logout', 'AdministradorController@Logout')->name('Logout');
    Route::get('/Map', 'AdministradorController@Mapa')->name('Mapa');
    Route::get('/Module', 'AdministradorController@Module')->name('module');
});
//Alerts
Route::group(['prefix' => 'alerts'], function () {
    Route::get('/', 'FindController@alerts')->name('alertas');
    Route::get('/{type}', 'FindController@alertType');
    Route::get('/delete/{id}', 'FindController@deleteAlert')->name('deleteAlert');
});
//Estadisticas
Route::group(['prefix' => 'statistic'], function () {
    Route::get('/', 'FindController@graph')->name('graph');
});
//Business
Route::group(['prefix' => 'places'], function () {
    Route::get('/', 'PlacesController@Places')->name('places');
    Route::get('/addPlace', 'PlacesController@addPlace')->name('addPlace');
    Route::post('/addPlace', 'PlacesController@addPlaces')->name('addPlaces');
    Route::get('/{id}', 'PlacesController@editPlace')->name('editPlace');
    Route::post('/', 'PlacesController@editPlaces')->name('editPlaces');
    Route::get('/deletePlace/{id}', 'PlacesController@deletePlace')->name('deletePlace');
});

//Evacuation Points
Route::group(['prefix' => 'evacuation'], function () {
    Route::get('/', 'PlacesController@EvacuationPoints')->name('points');
    Route::get('/addPoint', 'PlacesController@addEvacuationPoint')->name('addPoint');
    Route::post('/addPoint', 'PlacesController@addEvacuationPoints')->name('addPoints');
    Route::get('/{id}', 'PlacesController@editEvacuationPoint')->name('editPoint');
    Route::post('/', 'PlacesController@editEvacuationPoints')->name('editPoints');
    Route::get('/deletePoint/{id}', 'PlacesController@deleteEvacuationPoints')->name('deletePoint');
});

Route::group(['prefix' => 'institutions'], function () {
    Route::get('/', 'PlacesController@PublicInstitutions')->name('institutes');
    Route::get('/addInstitution', 'PlacesController@addPublicInstitution');
    Route::post('/addInstitution', 'PlacesController@addPublicInstitutions')->name('addInstitution');
    Route::get('/{id}', 'PlacesController@editPublicInstitution')->name('editInstitution');
    Route::post('/', 'PlacesController@editPublicInstitutions')->name('editInstitutions');
    Route::get('/deleteInstitution/{id}', 'PlacesController@deletePublicInstitutions')->name('deleteInstitution');
});

Route::group(['prefix' => 'users'], function(){
    Route::get('/', 'AdministradorController@Users')->name('users');
    Route::get('/addUser', 'AdministradorController@addUser')->name('addUser');
    Route::post('/addUser', 'AdministradorController@addUsers')->name('addUsers');
    Route::get('/{id}', 'AdministradorController@editUser')->name('editUser');
    Route::put('/', 'AdministradorController@editUsers')->name('editUsers');
    Route::get('/delete/{id}', 'AdministradorController@deleteUsers')->name('deleteUser');
});





Route::group(['prefix' => 'blog'], function () {
    Route::get('/', 'BlogController@blog')->name('Blog');
    /* Nosotros */
    Route::get('/nosotros/new', 'BlogController@home')->name('addHome');
    Route::post('/nosotros/new', 'BlogController@addHome')->name('saveHome');
    Route::get('/nosotros/edit/{id}', 'BlogController@getHome')->name('getHome');
    Route::post('/nosotros/edit', 'BlogController@editHome')->name('editHome');
    Route::get('/nosotros/delete/{id}', 'BlogController@deleteHome')->name('deleteHome');

    /* Noticias */
    Route::get('/noticias/new', 'BlogController@news')->name('addNews');
    Route::post('/noticias/new', 'BlogController@addNews')->name('saveNews');
    Route::get('/noticias/edit/{id}', 'BlogController@getNews')->name('getNews');
    Route::post('/noticias/edit', 'BlogController@editNews')->name('editNews');
    Route::get('/noticias/delete/{id}', 'BlogController@deleteNews')->name('deleteNews');

    /* Eventos */
    Route::get('/eventos/new', 'BlogController@events')->name('newEvents');
    Route::post('/eventos/new', 'BlogController@addEvents')->name('saveEvents');
    Route::get('/eventos/edit/{id}', 'BlogController@getEvents')->name('getEvents');
    Route::post('/eventos/edit', 'BlogController@editEvents')->name('editEvents');
    Route::get('/eventos/delete/{id}', 'BlogController@deleteEvents')->name('deleteEvents');
});

    Route::get('/excel', 'AdministradorController@excel')->name('excel');

  // Descarga de EXCEL 
    Route::get('/download/{opcion}/{nombreExcel}', 'AdministradorController@descargarExcel')
    ->name('DescargarExcelGeneral');