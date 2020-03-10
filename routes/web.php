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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function(){ 

    Route::get('/veiculo', '\App\Http\Controllers\VeiculoController@index')->name('veiculo');
    Route::get('/veiculo/create', '\App\Http\Controllers\VeiculoController@create')->name('veiculo.create');
    Route::post('/veiculo/store', '\App\Http\Controllers\VeiculoController@store')->name('veiculo.store');
    Route::get('/veiculo/{id}/edit', '\App\Http\Controllers\VeiculoController@edit')->name('veiculo.edit');
    Route::put('/veiculo/{id}/update', '\App\Http\Controllers\VeiculoController@update')->name('veiculo.update');
    Route::delete('/veiculo/{id}/destroy', '\App\Http\Controllers\VeiculoController@destroy')->name('veiculo.destroy');
    Route::get('/veiculo/{id}/show', '\App\Http\Controllers\VeiculoController@show')->name('veiculo.show');
    Route::post('/modelo/search', '\App\Http\Controllers\ModeloController@search')->name('modelo.search');


    //Rotas da Loja
    Route::get('/loja', '\App\Http\Controllers\LojaController@index')->name('loja');
    Route::get('/loja/create', '\App\Http\Controllers\LojaController@create')->name('loja.create');
    Route::post('/loja/store', '\App\Http\Controllers\LojaController@store')->name('loja.store');
    Route::get('/loja/{id}/edit', '\App\Http\Controllers\LojaController@edit')->name('loja.edit');
    Route::put('/loja/{id}/update', '\App\Http\Controllers\LojaController@update')->name('loja.update');
    Route::delete('/loja/{id}/destroy', '\App\Http\Controllers\LojaController@destroy')->name('loja.destroy');
    Route::post('/estado/search', '\App\Http\Controllers\EnderecoController@searchEstado')->name('endereco.estado.search');
    Route::post('/cidade/search', '\App\Http\Controllers\EnderecoController@searchCidade')->name('endereco.cidade.search');
    Route::post('/bairro/search', '\App\Http\Controllers\EnderecoController@searchBairro')->name('endereco.bairro.search');
    Route::post('/endereco/search', '\App\Http\Controllers\EnderecoController@search')->name('endereco.search');

    Route::get('/galeria/{id}/show', '\App\Http\Controllers\GaleriaController@show')->name('galeria.show');
    Route::post('/galeria/{id}/save', '\App\Http\Controllers\GaleriaController@save')->name('galeria.save');


    Route::get('/redirect', function (Request $request) {
        $query = http_build_query([
            'client_id' => '5',
            'redirect_uri' => 'http://localhost:8000/code/',
            'response_type' => 'code',
            'scope' => '',
            'state' => '',
        ]);

        return redirect('http://localhost:8000/oauth/authorize?'.$query);
    });
    /*Route::get('/callback', function (Request $request) {
    
        $http = new GuzzleHttp\Client;

        $response = $http->post('http://localhost:8000/oauth/token', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'client_id' => '5',
                'client_secret' => 'UANjUArikzqFEfT8UVVbNNcJxHUIJA1qRm5mPLuU',
                'redirect_uri' => 'http://localhost:8000/code/',
                'code' => 'def50200a1f9591208c5d23611b5d4ac2773c2ea85ad94d0750dded36561687ec3a8a7f729204da022468b523d52c7d500a94c0e7ef034018595c086c1dfad891fc5f8e5b2f8575c59f5e60729ac37b78604fda27813b62f6a72615e5ce0dd46a13da1a387b10826d23817815a0569a9d38dcb5263a8ec87557990334c92eb9619bf405fd6a3bf5a675a0ebfe4ed73e6046e6a248544720d34aa466ccf9f3696e1091e62a8470813d5c45c57f0527f50b2e7f7cfaa046f5759549b435c0ac374cfa95aed5d5c8a9d620c044b7a4a0cf9463e1efe7481a1f45253dc34ff27d59493f45ea4501d93e84deae9b4a542cb6074efcb3cbef0a57e6f5d88f643911b5bea2b3c5a473732d173deffca103fd26dba3939f9384313e7a0f18690d5141cb221bcaa60b93083986d6663b8b649ec106b0ac21dbd1c7ea310ab13b21a1221b52dfc26a540a0ea9f7008e4be1853539ad7cafbfb405f2cf7db9f3de9',
            ],
        ]);

        return json_decode((string) $response->getBody(), true);
    });*/
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
