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

Route::post('/send', 'Emails\EmailController@send')->name('jomesp.email.send');
Route::get('/jomesp', 'Jomesp\JomespController@getIndex')->name('jomesp.index');
Route::get('/jomesp/contato', 'Jomesp\JomespController@getContato')->name('jomesp.contato');
Route::get('/jomesp/edicoes', 'Jomesp\JomespController@getEdicoes')->name('jomesp.edicoes');
Route::get('/contato/localizacao', 'Apemesp\ContatoController@getLocalizacao')->name('jomesp.localizacao');
Route::get('/contato/mensagens', 'Apemesp\ContatoController@getMensagens')->name('contato.mensagens');


Route::get('sobre', 'Apemesp\PagesController@getSobre')->name('apemesp.sobre');
Route::get('/', 'Apemesp\PagesController@getIndex')->name('apemesp.index');

Route::get('/apemesp/quemsomos', 'Apemesp\PagesController@getQuemSomos')->name('apemesp.quemsomos');
Route::get('/apemesp/estatuto', 'Apemesp\PagesController@getEstatuto')->name('apemesp.estatuto');
Route::get('/apemesp/acoes', 'Apemesp\PagesController@getAcoes')->name('apemesp.acoes');
Route::get('/apemesp/comissoes', 'Apemesp\PagesController@getComissoes')->name('apemesp.comissoes');
Route::get('/apemesp/search', 'Apemesp\PagesController@search')->name('apemesp.search');


Route::get('/musicoterapia/oquee', 'Apemesp\MusicoterapiaController@getOque')->name('apemesp.musicoterapia.oquee');
Route::get('/musicoterapia/formacao', 'Apemesp\MusicoterapiaController@getFormacao')->name('apemesp.musicoterapia.formacao');
Route::get('/musicoterapia/conquistas', 'Apemesp\MusicoterapiaController@getConquistas')->name('apemesp.musicoterapia.conquistas');
Route::get('/musicoterapia/literatura', 'Apemesp\MusicoterapiaController@getLiteratura')->name('apemesp.musicoterapia.literatura');
Route::get('/musicoterapia/literatura/indicacao', 'Apemesp\MusicoterapiaController@getIndicacao')->name('apemesp.musicoterapia.indicacao');
Route::get('/musicoterapia/linhadotempo', 'Apemesp\MusicoterapiaController@getLinhaDoTempo')->name('apemesp.musicoterapia.linhadotempo');


Route::get('/agenda', 'Apemesp\AgendaController@getAgenda')->name('apemesp.agenda');
Route::get('/encontreummt', 'Apemesp\EncontreUmMtController@getIndex')->name('apemesp.encontreummt');

Route::resource('posts', 'Admin\PostController');
Route::post('posts/{id}', 'Admin\PostController@update');
Route::get('post/{id}', 'Admin\PostController@update');
Route::get('posts/destroy/{id}', 'Admin\PostController@destroy');
Route::get('posts/search', 'Admin\PostController@search')->name('posts.search');


//Rotas de autenticação
Route::get('auth/login', 'Apemesp\PagesController@getIndex')->name('login');
Route::post('auth/login', 'Auth\AuthController@postLogin');


//Rotas de registro

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::auth();


Route::get('/home', 'Apemesp\HomeController@index');
Route::get('/admin', 'Admin\AdminController@index')->name('admin');

Route::get('/admin/usuarios', 'Admin\UsuarioController@index');
Route::get('/admin/usuarios/search', 'Admin\UsuarioController@search');

Route::get('/admin/associados', 'Admin\AssociadoController@index')->name('admin.associados');
Route::get('/admin/associados/search', 'Admin\AssociadoController@search')->name('associados.search');
Route::get('/admin/associados/perfil/{id}', 'Admin\AssociadoController@getPerfil');
Route::get('/admin/associados/perfil/editar/{id}', 'Admin\AssociadoController@editPerfil');

Route::get('/admin/paginas', 'Admin\AdminController@getPaginas')->name('paginas.show');
Route::get('/admin/paginas/edit/{id}', 'Admin\AdminController@editPagina')->name('pagina.edit');
Route::post('/admin/paginas/update/{id}', 'Admin\AdminController@updatePagina')->name('pagina.update');
Route::get('/admin/paginas/adicionar/literatura', 'Admin\PaginasController@addLiteratura');
Route::get('/admin/paginas/adicionar/conquista', 'Admin\PaginasController@addConquista');
Route::get('/admin/paginas/adicionar/formacao', 'Admin\PaginasController@addFormacao');
Route::get('/admin/paginas/adicionar/comissao', 'Admin\PaginasController@addComissao');
Route::get('/admin/paginas/adicionar/membro', 'Admin\PaginasController@addMembro');





Route::get('/admin/configs', 'Admin\ConfigsController@index')->name('configs');
Route::get('/admin/configs/addassunto', 'Admin\ConfigsController@getAssunto')->name('add.assunto');
Route::post('/admin/configs/addassunto', 'Admin\ConfigsController@setAssunto')->name('store.assunto');

Route::get('/admin/financeiro', 'Admin\FinanceiroController@index');

//Posts
Route::get('/admin/posts/', 'Admin\PostController@index');
Route::get('/admin/posts/create', 'Admin\PostController@create');
Route::post('/admin/posts/store', 'Admin\PostController@store');
Route::get('/admin/posts/show/{id}', 'Admin\PostController@show');
Route::get('/admin/posts/edit/{id}', 'Admin\PostController@edit');
Route::post('/admin/posts/update/{id}', 'Admin\PostController@update');
Route::post('/admin/posts/delete/{id}', 'Admin\PostController@destroy');
Route::get('/admin/posts/search', 'Admin\PostController@search')->name('posts.search');


//Post da pagina principal

Route::get('/pages/post/{id}', 'Apemesp\PagesController@getPost');




//Associados


//Dados Pessoais
Route::get('/associado/dadospessoais/', 'Associado\DadosPessoaisController@getDadosPessoais');
Route::post('/associado/dadospessoais/', 'Associado\DadosPessoaisController@storeDadosPessoais')->name('dadospessoais');
Route::post('/associado/dadospessoais/{id}', 'Associado\DadosPessoaisController@dadospessoaisUpdate')->name('dadospessoais.update');
Route::post('/associado/foto/{cpf}', 'Associado\DadosPessoaisController@fotoUpdate')->name('foto.update');
Route::get('/associado/ajax/{idEstado}', 'Associado\AssociadoController@getCidades'); //retorna as cidades recebendo o id do estado

//Dados Academicos
Route::get('/associado/dadosacademicos/', 'Associado\DadosAcademicosController@getDadosAcademicos')->name('dadosacademicos'); //Primeiro form para cadastro
Route::post('/associado/dadosacademicos/', 'Associado\DadosAcademicosController@storeDadosAcademicos')->name('formacao.store'); //Salvar os dados do Primeiro contato

Route::post('/associado/dadosacademicos/categoria', 'Associado\DadosAcademicosController@storeCategoria')->name('formacao.store.categoria'); //Salvar os dados do Primeiro contato

Route::get('/associado/formacao/edit/{id}', 'Associado\DadosAcademicosController@editFormacao')->name('formacao.edit'); //Editar formação recebendo o id especifico
Route::post('/associado/formacao/update/{id}', 'Associado\DadosAcademicosController@updateFormacao')->name('formacao.update'); //Atualiza formação recebendo o id especifico

Route::get('/associado/formacao/{id}', 'Associado\DadosAcademicosController@showFormacao')->name('formacao.show');

Route::get('/associado/download/{arquivo}', 'Associado\AssociadoController@getDownload')->name('download');

//Dados Profissionais
Route::get('/associado/dadosprofissionais/', 'Associado\DadosProfissionaisController@getDadosProfissionais');



//Documentação
Route::get('/associado/documentacao/', 'Associado\DocumentacaoController@getIndex');


//Financeiro do Associado
Route::get('/associado/financeiro/', 'Associado\FinanceiroController@getIndex');