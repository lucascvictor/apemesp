<?php


Route::get('/', 'Apemesp\PagesController@getIndex')->name('apemesp.index');
Route::post('/send', 'Emails\EmailController@send')->name('jomesp.email.send');
Route::get('/contato/localizacao', 'Apemesp\ContatoController@getLocalizacao')->name('jomesp.localizacao');
Route::get('/contato/mensagens', 'Apemesp\ContatoController@getMensagens')->name('contato.mensagens');
Route::get('/sobre', 'Apemesp\PagesController@getSobre')->name('apemesp.sobre');
Route::get('/pages/post/{id}', 'Apemesp\PagesController@getPost');
Route::get('/tags/{id}', 'Apemesp\PagesController@getPostsTag');
Route::post('/verificar', 'Associado\AssociadoController@verificarCpf')->name('apemesp.verificar');
Route::get('/confirm/{code}', 'Auth\AuthController@confirm')->name('apemesp.confirm');
Route::get('/reenviar/', 'Auth\AuthController@reenviar')->name('apemesp.reenviar');
Route::get('/redefinir/', 'Auth\AuthController@redefinir')->name('apemesp.redefinir');
Route::get('/reset/{token}', 'Auth\AuthController@reset')->name('apemesp.reset');


Route::group(['prefix' => 'apemesp'], function () {
    Route::get('/quemsomos', 'Apemesp\PagesController@getQuemSomos')->name('apemesp.quemsomos');
    Route::get('/estatuto', 'Apemesp\PagesController@getEstatuto')->name('apemesp.estatuto');
    Route::get('/estatuto/download', 'Apemesp\PagesController@downloadEstatuto')->name('apemesp.estatuto.download');
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
    Route::get('/edicoesjomesp/download/{arquivo}', 'Jomesp\JomespController@download');
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

Route::group(['prefix' => 'encontreummt'], function () {
  Route::post('/search', 'Apemesp\EncontreUmMtController@search')->name('apemesp.encontreummt.search');
  Route::get('', 'Apemesp\EncontreUmMtController@getIndex')->name('apemesp.encontreummt');
});



//Rotas de autenticação
Route::get('auth/login', 'Apemesp\PagesController@getIndex')->name('login');
Route::post('auth/login', 'Auth\AuthController@postLogin');


//Rotas de registro

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::post('register/create', 'Auth\AuthController@postRegister')->name('apemesp.register');


Route::auth();


Route::get('/home', 'Apemesp\HomeController@index');

Route::group(['prefix' => 'admin'], function () {
    Route::get('', 'Admin\AdminController@index')->name('admin');

    Route::get('perfil', 'Admin\AdminController@perfil')->name('admin');

    Route::group(['prefix' => 'usuarios'], function () {
        Route::get('', 'Admin\UsuarioController@index')->name('users.index');
        Route::get('/search', 'Admin\UsuarioController@search');
        Route::get('/reset/{id}', 'Admin\UsuarioController@resetPassword');
        Route::get('/usuarios/mensagem/{id}', 'Adimin\UsuarioController@mensagem');

    });

    Route::group(['prefix' => 'edicoesjomesp'], function () {
      Route::get('', 'Jomesp\EdicoesJomespController@index')->name('edicoesJomesp.index');
      Route::get('/{id}', 'Jomesp\EdicoesJomespController@editEdicao');
      Route::post('', 'Jomesp\EdicoesJomespController@storeEdicao');
      Route::post('{id}', 'Jomesp\EdicoesJomespController@updateEdicao');
      Route::get('/download/{arquivo}', 'Jomesp\EdicoesJomespController@download');
      Route::delete('{id}', 'Jomesp\EdicoesJomespController@dropEdicao');

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
        Route::post('/update/estatuto/pdf', 'Admin\AdminController@updateEstatutoPdf');
        Route::group(['prefix' => 'adicionar'], function () {
          Route::get('/literatura', 'Admin\LiteraturaController@addLiteratura');
          Route::get('/conquista', 'Admin\ConquistaController@addConquista');
          Route::get('/formacao', 'Admin\FormacaoController@addFormacao');
          Route::get('/comissao', 'Admin\ComissaoController@addComissao');
          Route::get('/membro', 'Admin\MembroController@addMembro');
          Route::get('/propaganda', 'Admin\PropagandaController@addPropaganda');
        });


          Route::post('/literatura', 'Admin\LiteraturaController@storeLiteratura');
          Route::post('/conquista', 'Admin\ConquistaController@storeConquista');
          Route::post('/formacao', 'Admin\FormacaoController@storeFormacao');
          Route::post('/comissao', 'Admin\ComissaoController@storeComissao');
          Route::post('/membro', 'Admin\MembroController@storeMembro');
          Route::post('/propaganda', 'Admin\PropagandaController@storePropaganda');


          Route::get('/literaturas', 'Admin\LiteraturaController@listLiteratura')->name('list.literatura');
          Route::get('/conquistas', 'Admin\ConquistaController@listConquista')->name('list.conquista');
          Route::get('/formacoes', 'Admin\FormacaoController@listFormacao')->name('list.formacao');
          Route::get('/comissoes', 'Admin\ComissaoController@listComissoes')->name('list.comissoes');
          Route::get('/membros', 'Admin\MembroController@listMembro')->name('list.membro');
          Route::get('/propagandas', 'Admin\PropagandaController@listPropaganda')->name('list.propaganda');


          Route::get('/literatura/destroy/{id}', 'Admin\LiteraturaController@destroyLiteratura');
          Route::get('/conquista/destroy/{id}', 'Admin\ConquistaController@destroyConquista');
          Route::get('/formacao/destroy/{id}', 'Admin\FormacaoController@destroyFormacao');
          Route::get('/comissao/destroy/{id}', 'Admin\ComissaoController@destroyComissao');
          Route::get('/membro/destroy/{id}', 'Admin\MembroController@destroyMembro');
          Route::get('/propaganda/destroy/{id}', 'Admin\PropagandaController@destroyPropaganda');


          Route::get('/literatura/{id}', 'Admin\LiteraturaController@editLiteratura');
          Route::get('/conquista/{id}', 'Admin\ConquistaController@editConquista');
          Route::get('/formacao/{id}', 'Admin\FormacaoController@editFormacao');
          Route::get('/comissao/{id}', 'Admin\ComissaoController@editComissao');
          Route::get('/membro/{id}', 'Admin\MembroController@editMembro');
          Route::get('/propaganda/{id}', 'Admin\PropagandaController@editPropaganda');


          Route::post('/literatura/{id}', 'Admin\LiteraturaController@updateLiteratura');
          Route::post('/conquista/{id}', 'Admin\ConquistaController@updateConquista');
          Route::post('/formacao/{id}', 'Admin\FormacaoController@updateFormacao');
          Route::post('/comissao/{id}', 'Admin\ComissaoController@updateComissao');
          Route::post('/membro/{id}', 'Admin\MembroController@updateMembro');
          Route::post('/propaganda/{id}', 'Admin\PropagandaController@updatePropaganda');
          Route::post('/propagandaativa', 'Admin\PropagandaController@updatePropagandaAtiva');

    });

    Route::group(['prefix' => 'configs'], function () {
      Route::group(['prefix' => 'assuntos'], function () {
        Route::get('/', 'Admin\AssuntoController@index')->name('show.assuntos');
        Route::get('/add', 'Admin\AssuntoController@addAssunto')->name('add.assuntos');
        Route::get('{id}', 'Admin\AssuntoController@editAssunto')->name('edit.assuntos');
        Route::post('{id}', 'Admin\AssuntoController@updateAssunto')->name('update.assuntos');
        Route::post('/', 'Admin\AssuntoController@storeAssunto')->name('store.assunto');
        Route::get('/delete/{id}', 'Admin\AssuntoController@destroyAssunto')->name('destroy.assunto');
      });




      Route::group(['prefix' => 'escalas'], function () {
        Route::get('/', 'Admin\EscalaController@index');
        Route::get('/addescala', 'Admin\EscalaController@addEscala')->name('add.escala');
        Route::post('/', 'Admin\EscalaController@storeEscala')->name('store.escala');
      });
      Route::group(['prefix' => 'proximidades'], function () {
        Route::get('/', 'Admin\ProximidadeController@index');
        Route::get('/addproximidade', 'Admin\ProximidadeController@addProximidade')->name('add.proximidade');
        Route::post('/', 'Admin\ProximidadeController@storeProximidade')->name('store.proximidade');
      });

      Route::get('', 'Admin\ConfigsController@index')->name('configs');

    });

    Route::get('/financeiro', 'Admin\FinanceiroController@index');

    Route::group(['prefix' => 'posts'], function () {
        Route::get('', 'Admin\PostController@index');
        Route::get('/apemesp/list', 'Admin\PostController@indexApemesp');
        Route::get('/jomesp/list', 'Admin\PostController@indexJomesp');
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
    });

    Route::group(['prefix' => 'formacao'], function () {
      Route::get('/edit/{id}', 'Associado\DadosAcademicosController@editFormacao')->name('formacao.edit'); //Editar formação recebendo o id especifico
      Route::post('/update/{id}', 'Associado\DadosAcademicosController@updateFormacao')->name('formacao.update'); //Atualiza formação recebendo o id especifico
      Route::get('/{id}', 'Associado\DadosAcademicosController@showFormacao')->name('formacao.show');
      Route::delete('/{id}', 'Associado\DadosAcademicosController@deleteFormacao')->name('formacao.delete');
    });

    Route::get('/download/{arquivo}', 'Associado\AssociadoController@getDownload')->name('download');

    //Dados Profissionais
    Route::group(['prefix' => 'dadosprofissionais'], function () {
      Route::get('', 'Associado\DadosProfissionaisController@getDadosProfissionais');
      Route::get('/atendimento', 'Associado\DadosProfissionaisController@storeOpcaoDeAtendimento');
      Route::get('{id}', 'Associado\DadosProfissionaisController@showDadosProfissionais');
      Route::post('{id}', 'Associado\DadosProfissionaisController@updateDadosProfissionais');
      Route::get('/edit/{id}', 'Associado\DadosProfissionaisController@editDadosProfissionais');
      Route::post('', 'Associado\DadosProfissionaisController@storeDadosProfissionais');
      Route::post('/especialidade', 'Admin\EspecialidadeController@storeEspecialidade');

    });


    //Documentação
    Route::group(['prefix' => 'documentacao'], function () {
      Route::get('/', 'Associado\DocumentacaoController@getIndex');
      Route::post('/rg', 'Associado\DocumentacaoController@storeRG');
      Route::post('/cpf', 'Associado\DocumentacaoController@storeCPF');
      Route::post('/cnh', 'Associado\DocumentacaoController@storeCNH');
      Route::post('/comprovante', 'Associado\DocumentacaoController@storeComprovante');
      Route::post('/', 'Associado\DocumentacaoController@updateDocumentacao')->name('documentacao.update');
    });

    //Financeiro do Associado
    Route::group(['prefix' => 'financeiro'], function () {
      Route::get('', 'Associado\FinanceiroController@getIndex');
    });


    //Certeirinha do Associado
    Route::group(['prefix' => 'carteirinha'], function () {
      Route::get('', 'Associado\CarteirinhaController@getIndex');
    });
});
