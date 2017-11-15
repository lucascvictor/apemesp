<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Apemesp\PagesController@getIndex')->name('apemesp.index');
Route::post('/send', 'Emails\EmailController@send')->name('jomesp.email.send');
Route::get('/contato/localizacao', 'Apemesp\ContatoController@getLocalizacao')->name('jomesp.localizacao');
Route::get('/contato/mensagens', 'Apemesp\ContatoController@getMensagens')->name('contato.mensagens');
Route::get('/sobre', 'Apemesp\PagesController@getSobre')->name('apemesp.sobre');
Route::get('/pages/post/{id}', 'Apemesp\PagesController@getPost');
Route::get('/tags/{id}', 'Apemesp\PagesController@getPostsTag');

Route::group(['prefix' => 'apemesp'], function () {
    Route::get('/quemsomos', 'Apemesp\PagesController@getQuemSomos')->name('apemesp.quemsomos');
    Route::get('/estatuto', 'Apemesp\PagesController@getEstatuto')->name('apemesp.estatuto');
    Route::get('/acoes', 'Apemesp\PagesController@getAcoes')->name('apemesp.acoes');
    Route::get('/comissoes', 'Apemesp\PagesController@getComissoes')->name('apemesp.comissoes');
    Route::get('/search', 'Apemesp\PagesController@search')->name('apemesp.search');
});


Route::group(['prefix' => 'jomesp'], function () {
    Route::get('', 'Jomesp\JomespController@getIndex')->name('jomesp.index');
    Route::get('/contato', 'Jomesp\JomespController@getContato')->name('jomesp.contato');
    Route::get('/edicoes', 'Jomesp\JomespController@getEdicoes')->name('jomesp.edicoes');
    Route::get('/sobre', 'Jomesp\JomespController@getSobre')->name('jomesp.sobre');
    Route::get('/pages/post/{id}', 'Jomesp\JomespController@getPost');
});

Route::group(['prefix' => 'musicoterapia'], function () {
    Route::get('/oquee', 'Apemesp\MusicoterapiaController@getOque')->name('apemesp.musicoterapia.oquee');
    Route::get('/formacao', 'Apemesp\MusicoterapiaController@getFormacao')->name('apemesp.musicoterapia.formacao');
    Route::get('/conquistas', 'Apemesp\MusicoterapiaController@getConquistas')->name('apemesp.musicoterapia.conquistas');
    Route::get('/literatura', 'Apemesp\MusicoterapiaController@getLiteratura')->name('apemesp.musicoterapia.literatura');
    Route::get('/literatura/indicacao', 'Apemesp\MusicoterapiaController@getIndicacao')->name('apemesp.musicoterapia.indicacao');
    Route::get('/linhadotempo', 'Apemesp\MusicoterapiaController@getLinhaDoTempo')->name('apemesp.musicoterapia.linhadotempo');
});


Route::get('/agenda', 'Apemesp\AgendaController@getAgenda')->name('apemesp.agenda');
Route::get('/encontreummt', 'Apemesp\EncontreUmMtController@getIndex')->name('apemesp.encontreummt');




//Rotas de autenticação
Route::get('auth/login', 'Apemesp\PagesController@getIndex')->name('login');
Route::post('auth/login', 'Auth\AuthController@postLogin');


//Rotas de registro

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::auth();


Route::get('/home', 'Apemesp\HomeController@index');

Route::group(['prefix' => 'admin'], function () {
    Route::get('', 'Admin\AdminController@index')->name('admin');

    Route::group(['prefix' => 'usuarios'], function () {
        Route::get('', 'Admin\UsuarioController@index')->name('users.index');
        Route::get('/search', 'Admin\UsuarioController@search');
        Route::get('/reset/{id}', 'Admin\UsuarioController@resetPassword');
        Route::get('/usuarios/mensagem/{id}', 'Adimin\UsuarioController@mensagem');

    });

    Route::group(['prefix' => 'associados'], function () {
        Route::get('', 'Admin\AssociadoController@index')->name('admin.associados');
        Route::get('/search', 'Admin\AssociadoController@search')->name('associados.search');
        Route::get('/perfil/{id}', 'Admin\AssociadoController@getPerfil');
        Route::get('/perfil/editar/{id}', 'Admin\AssociadoController@editPerfil');
    });

    Route::group(['prefix' => 'paginas'], function () {
        Route::get('', 'Admin\AdminController@getPaginas')->name('paginas.show');
        Route::get('/edit/{id}', 'Admin\AdminController@editPagina')->name('pagina.edit');
        Route::post('/update/{id}', 'Admin\AdminController@updatePagina')->name('pagina.update');

        Route::group(['prefix' => 'adicionar'], function () {
          Route::get('/literatura', 'Admin\PaginasController@addLiteratura');
          Route::get('/conquista', 'Admin\PaginasController@addConquista');
          Route::get('/formacao', 'Admin\PaginasController@addFormacao');
          Route::get('/comissao', 'Admin\PaginasController@addComissao');
          Route::get('/membro', 'Admin\PaginasController@addMembro');
        });

    });

    Route::group(['prefix' => 'configs'], function () {
        Route::get('', 'Admin\ConfigsController@index')->name('configs');
        Route::get('/addassunto', 'Admin\ConfigsController@getAssunto')->name('add.assunto');
        Route::post('/addassunto', 'Admin\ConfigsController@setAssunto')->name('store.assunto');
    });

    Route::get('/financeiro', 'Admin\FinanceiroController@index');

    Route::group(['prefix' => 'posts'], function () {
        Route::get('', 'Admin\PostController@index');
        Route::get('/create', 'Admin\PostController@create');
        Route::post('/store', 'Admin\PostController@store')->name('posts.store');
        Route::get('/show/{id}', 'Admin\PostController@show')->name('posts.show');
        Route::get('/edit/{id}', 'Admin\PostController@edit')->name('posts.edit');
        Route::post('/update/{id}', 'Admin\PostController@update')->name('posts.update');
        Route::get('destroy/{id}', 'Admin\PostController@destroy');
        Route::get('/search', 'Admin\PostController@search')->name('posts.search');
        Route::resource('posts', 'Admin\PostController');
        Route::post('{id}', 'Admin\PostController@update');
        Route::get('{id}', 'Admin\PostController@update');
    });
});



Route::group(['prefix' => 'associado'], function () {
    Route::group(['prefix' => 'dadospessoais'], function () {
        Route::get('', 'Associado\DadosPessoaisController@getDadosPessoais');
        Route::post('', 'Associado\DadosPessoaisController@storeDadosPessoais')->name('dadospessoais');
        Route::post('/{id}', 'Associado\DadosPessoaisController@dadospessoaisUpdate')->name('dadospessoais.update');
    });

    Route::post('/foto/{cpf}', 'Associado\DadosPessoaisController@fotoUpdate')->name('foto.update');
    Route::get('/ajax/{idEstado}', 'Associado\AssociadoController@getCidades'); //retorna as cidades recebendo o id do estado

    Route::group(['prefix' => 'dadosacademicos'], function () {
        Route::get('', 'Associado\DadosAcademicosController@getDadosAcademicos')->name('dadosacademicos'); //Primeiro form para cadastro
        Route::post('', 'Associado\DadosAcademicosController@storeDadosAcademicos')->name('formacao.store'); //Salvar os dados do Primeiro contato
        Route::post('/categoria', 'Associado\DadosAcademicosController@storeCategoria')->name('formacao.store.categoria'); //Salvar os dados do Primeiro contato
    });

    Route::get('/formacao/edit/{id}', 'Associado\DadosAcademicosController@editFormacao')->name('formacao.edit'); //Editar formação recebendo o id especifico
    Route::post('/formacao/update/{id}', 'Associado\DadosAcademicosController@updateFormacao')->name('formacao.update'); //Atualiza formação recebendo o id especifico

    Route::get('/formacao/{id}', 'Associado\DadosAcademicosController@showFormacao')->name('formacao.show');

    Route::get('/download/{arquivo}', 'Associado\AssociadoController@getDownload')->name('download');

    //Dados Profissionais
    Route::group(['prefix' => 'dadosprofissionais'], function () {
      Route::get('', 'Associado\DadosProfissionaisController@getDadosProfissionais');
      Route::post('/especialidade', 'Admin\EspecialidadeController@storeEspecialidade');


    });


    //Documentação
    Route::get('/documentacao/', 'Associado\DocumentacaoController@getIndex');


    //Financeiro do Associado
    Route::get('/financeiro/', 'Associado\FinanceiroController@getIndex');
});
