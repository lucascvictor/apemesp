<?php

Route::post('/enviarreset', 'Auth\AuthController@enviarRedefinicao');
Route::get('/', 'Apemesp\PagesController@getIndex')->name('apemesp.index');
Route::post('/send', 'Emails\EmailController@send')->name('jomesp.email.send');
Route::get('/contato/localizacao', 'Apemesp\ContatoController@getLocalizacao')->name('jomesp.localizacao');
Route::get('/contato/mensagens', 'Apemesp\ContatoController@getMensagens')->name('contato.mensagens');
Route::get('/pages/post/{id}', 'Apemesp\PagesController@getPost');
Route::get('/tags/{id}', 'Apemesp\PagesController@getPostsTag');
Route::get('/confirm/{code}', 'Auth\AuthController@confirm')->name('apemesp.confirm');
Route::get('/reenviar', 'Auth\AuthController@reenviar')->name('apemesp.reenviar');
Route::post('/reenviarconfirmacao', 'Auth\AuthController@reenviarconfirmacao');
Route::get('/redefinir', 'Auth\AuthController@redefinir')->name('apemesp.redefinir');
Route::get('/reset/{token}', 'Auth\AuthController@reset')->name('apemesp.reset');
Route::get('/verificar', 'Apemesp\PagesController@verificarCpf');

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
    Route::get('/materiais', 'Apemesp\MusicoterapiaController@getMateriais')->name('apemesp.musicoterapia.materiais');
    Route::get('/literatura', 'Apemesp\MusicoterapiaController@getLiteratura')->name('apemesp.musicoterapia.literatura');
    Route::get('/literatura/indicacao', 'Apemesp\MusicoterapiaController@getIndicacao')->name('apemesp.musicoterapia.indicacao');
    Route::post('/literatura/indicacao', 'Apemesp\MusicoterapiaController@storeIndicacao');
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
    Route::post('/chart', 'Admin\AdminController@indexChart')->name('admin');

    Route::group(['prefix' => 'perfil'], function () {
      Route::get('', 'Admin\PerfilController@perfil')->name('admin.perfil');
      Route::post('/alteraremail', 'Admin\PerfilController@alterarEmail')->name('admin.alteraremail');
      Route::post('/alterarsenha', 'Admin\PerfilController@alterarSenha')->name('admin.alterarsenha');
      Route::post('/alteraropcaoprofissional', 'Admin\PerfilController@alterarOpcaoProfissional')->name('admin.alteraropcaoprofissional');
    });

    Route::group(['prefix' => 'usuarios'], function () {
        Route::get('', 'Admin\UsuarioController@index')->where('page', '.*')->name('users.index');
        Route::get('/new', 'Admin\UsuarioController@new')->name('users.new');
        Route::get('/new/admin', 'Admin\UsuarioController@newAdmin')->name('users.new_admin');
        Route::get('/new/comum', 'Admin\UsuarioController@newComum')->name('users.new_comum');
        Route::get('/new/redator', 'Admin\UsuarioController@newRedator')->name('users.new_redator');
        Route::post('/new/admin', 'Admin\UsuarioController@storeAdmin')->name('users.store_admin');
        Route::post('/new/comum', 'Admin\UsuarioController@storeComum')->name('users.store_comum');
        Route::post('/new/redator', 'Admin\UsuarioController@storeRedator')->name('users.store_redator');
        Route::get('/search', 'Admin\UsuarioController@search');
        Route::get('/reset/{id}', 'Admin\UsuarioController@resetPassword');
        Route::get('/usuarios/mensagem/{id}', 'Adimin\UsuarioController@mensagem');
        Route::get('/updated', 'Admin\UsuarioController@orderByUpdate');
        Route::get('/desativar/{id}', 'Admin\UsuarioController@desativar');
        Route::get('/reativar/{id}', 'Admin\UsuarioController@reativar');

    });

    Route::group(['prefix' => 'indicacoesliterarias'], function () {
      Route::get('', 'Admin\LiteraturaController@adminIndex')->name('admin.literatura.index');
      Route::get('{id}', 'Admin\LiteraturaController@avaliar');
      Route::get('aprovar/{id}', 'Admin\LiteraturaController@aprovar');
      Route::get('excluir/{id}', 'Admin\LiteraturaController@excluir');
    });

    Route::group(['prefix' => 'edicoesjomesp'], function () {
      Route::get('', 'Jomesp\EdicoesJomespController@index')->name('edicoesJomesp.index');
      Route::get('/{id}', 'Jomesp\EdicoesJomespController@editEdicao');
      Route::post('', 'Jomesp\EdicoesJomespController@storeEdicao');
      Route::post('{id}', 'Jomesp\EdicoesJomespController@updateEdicao');
      Route::get('/download/{arquivo}', 'Jomesp\EdicoesJomespController@download');
      Route::delete('{id}', 'Jomesp\EdicoesJomespController@dropEdicao');
    });

    Route::group(['prefix' => 'representantelegal'], function () {
      Route::get('', 'Admin\RepresentanteLegalController@index')->name('representantelegal.index');
      Route::get('{id}', 'Admin\RepresentanteLegalController@editRepresentante');
      Route::post('{id}', 'Admin\RepresentanteLegalController@updateRepresentante');
    });

    Route::group(['prefix' => 'carteirinhas'], function () {
      Route::get('/search', 'Admin\CarteirinhaController@search');
      Route::get('', 'Admin\CarteirinhaController@index')->name('carteirinha.index');
      Route::get('associado/{id}', 'Admin\CarteirinhaController@editCarteirinha');
      Route::post('{id}', 'Admin\CarteirinhaController@updateRepresentante');
    });

    Route::group(['prefix' => 'associados'], function () {
        Route::get('', 'Admin\AssociadoController@index')->name('admin.associados');
        Route::get('/search', 'Admin\AssociadoController@search')->name('associados.search');
        Route::get('/perfil/{id}', 'Admin\AssociadoController@getPerfil');
        Route::get('/perfil/editar/{id}', 'Admin\AssociadoController@editPerfil');
        Route::get('/updated', 'Admin\AssociadoController@orderByUpdate');
        Route::get('/certificado', 'Admin\CertificadoController@index');
        Route::get('/download/{cpf}/{arquivo}', 'Admin\AssociadoController@getDownload')->name('admin.download');
    }); 

    Route::group(['prefix' => 'paginas'], function () {
        Route::get('', 'Admin\AdminController@getPaginas')->name('paginas.show');
        Route::get('/edit/{id}', 'Admin\AdminController@editPagina')->name('pagina.edit');
        Route::post('/update/{id}', 'Admin\AdminController@updatePagina')->name('pagina.update');
        Route::post('/update/estatuto/pdf', 'Admin\AdminController@updateEstatutoPdf');
        Route::group(['prefix' => 'adicionar'], function () {
          Route::get('/literatura', 'Admin\LiteraturaController@addLiteratura');
          Route::get('/material', 'Admin\MaterialController@addMaterial');
          Route::get('/conquista', 'Admin\ConquistaController@addConquista');
          Route::get('/formacao', 'Admin\FormacaoController@addFormacao');
          Route::get('/comissao', 'Admin\ComissaoController@addComissao');
          Route::get('/membro', 'Admin\MembroController@addMembro');
          Route::get('/propaganda', 'Admin\PropagandaController@addPropaganda');
          Route::get('/footer', 'Admin\FooterController@addItem');
          Route::get('/linhadotempo', 'Admin\LinhaDoTempoController@addItem');
        });

          Route::post('/literatura', 'Admin\LiteraturaController@storeLiteratura');
          Route::post('/material', 'Admin\MaterialController@storeMaterial');
          Route::post('/conquista', 'Admin\ConquistaController@storeConquista');
          Route::post('/formacao', 'Admin\FormacaoController@storeFormacao');
          Route::post('/comissao', 'Admin\ComissaoController@storeComissao');
          Route::post('/membro', 'Admin\MembroController@storeMembro');
          Route::post('/propaganda', 'Admin\PropagandaController@storePropaganda');
          Route::post('/footer', 'Admin\FooterController@storeItem');
          Route::post('/linhadotempo', 'Admin\LinhaDoTempoController@storeItem');
        

          Route::get('/literaturas', 'Admin\LiteraturaController@listLiteratura')->name('list.literatura');
          Route::get('/material', 'Admin\MaterialController@listMateriais')->name('list.materiais');
          Route::get('/conquistas', 'Admin\ConquistaController@listConquista')->name('list.conquista');
          Route::get('/formacoes', 'Admin\FormacaoController@listFormacao')->name('list.formacao');
          Route::get('/comissoes', 'Admin\ComissaoController@listComissoes')->name('list.comissoes');
          Route::get('/membros', 'Admin\MembroController@listMembro')->name('list.membro');
          Route::get('/propagandas', 'Admin\PropagandaController@listPropaganda')->name('list.propaganda');
          Route::get('/footer', 'Admin\FooterController@listFooter')->name('list.footer');
          Route::get('/linhadotempo', 'Admin\LinhaDoTempoController@listTimeLine')->name('list.linhadotempo');


          Route::get('/literatura/destroy/{id}', 'Admin\LiteraturaController@destroyLiteratura');
          Route::get('/material/destroy/{id}', 'Admin\MaterialController@destroyMaterial');
          Route::get('/conquista/destroy/{id}', 'Admin\ConquistaController@destroyConquista');
          Route::get('/formacao/destroy/{id}', 'Admin\FormacaoController@destroyFormacao');
          Route::get('/comissao/destroy/{id}', 'Admin\ComissaoController@destroyComissao');
          Route::get('/membro/destroy/{id}', 'Admin\MembroController@destroyMembro');
          Route::get('/propaganda/destroy/{id}', 'Admin\PropagandaController@destroyPropaganda');
          Route::get('/linhadotempo/destroy/{id}', 'Admin\LinhaDoTempoController@destroyItem');
          Route::get('/footer/destroy/{id}', 'Admin\FooterController@destroyItem');


          Route::get('/literatura/{id}', 'Admin\LiteraturaController@editLiteratura');
          Route::get('/material/{id}', 'Admin\MaterialController@editMaterial');
          Route::get('/conquista/{id}', 'Admin\ConquistaController@editConquista');
          Route::get('/formacao/{id}', 'Admin\FormacaoController@editFormacao');
          Route::get('/comissao/{id}', 'Admin\ComissaoController@editComissao');
          Route::get('/membro/{id}', 'Admin\MembroController@editMembro');
          Route::get('/propaganda/{id}', 'Admin\PropagandaController@editPropaganda');
          Route::get('/linhadotempo/{id}', 'Admin\LinhaDoTempoController@editItem');
          Route::get('/footer/{id}', 'Admin\FooterController@editItem');


          Route::post('/literatura/{id}', 'Admin\LiteraturaController@updateLiteratura');
          Route::post('/material/{id}', 'Admin\MaterialController@updateMaterial');
          Route::post('/conquista/{id}', 'Admin\ConquistaController@updateConquista');
          Route::post('/formacao/{id}', 'Admin\FormacaoController@updateFormacao');
          Route::post('/comissao/{id}', 'Admin\ComissaoController@updateComissao');
          Route::post('/membro/{id}', 'Admin\MembroController@updateMembro');
          Route::post('/propaganda/{id}', 'Admin\PropagandaController@updatePropaganda');
          Route::post('/propagandaativa', 'Admin\PropagandaController@updatePropagandaAtiva');
          Route::post('/linhadotempo/{id}', 'Admin\LinhaDoTempoController@updateItem');
          Route::post('/footer/{id}', 'Admin\FooterController@updateItem');
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

      Route::group(['prefix' => 'forumassuntos'], function () {
        Route::get('', 'Admin\AssuntoController@indexForum')->name('show.assunto.forum');
        Route::get('/add', 'Admin\AssuntoController@addAssuntoForum')->name('add.assuntos.forum');
        Route::get('{id}', 'Admin\AssuntoController@editAssuntoForum')->name('edit.assuntos.forum');
        Route::post('{id}', 'Admin\AssuntoController@updateAssuntoForum')->name('update.assuntos.forum');
        Route::post('/', 'Admin\AssuntoController@storeAssuntoForum')->name('store.assunto.forum');
        Route::get('/delete/{id}', 'Admin\AssuntoController@destroyAssuntoForum')->name('destroy.assunto.forum');
      });

    
      Route::group(['prefix' => 'escalas'], function () {
        Route::get('/', 'Admin\EscalaController@index')->name('index.escala');
        Route::get('/addescala', 'Admin\EscalaController@addEscala')->name('add.escala');
        Route::post('/', 'Admin\EscalaController@storeEscala')->name('store.escala');
        Route::get('/{id}', 'Admin\EscalaController@edit')->name('edit.escala');
        Route::get('/destroy/{id}', 'Admin\EscalaController@delete')->name('delete.escala');
        Route::post('/update', 'Admin\EscalaController@update')->name('update.escala');
      });

      Route::group(['prefix' => 'proximidades'], function () {
        Route::get('/', 'Admin\ProximidadeController@index')->name('index.proximidade');
        Route::get('/add', 'Admin\ProximidadeController@add')->name('add.proximidade');
        Route::post('/', 'Admin\ProximidadeController@store')->name('store.proximidade');
        Route::post('/update', 'Admin\ProximidadeController@update')->name('update.proximidade');
        Route::get('/destroy/{id}', 'Admin\ProximidadeController@delete')->name('delete.proximidade');
        Route::get('/{id}', 'Admin\ProximidadeController@edit')->name('edit.proximidade');
      });

      Route::group(['prefix' => 'especialidades'], function () {
        Route::get('/', 'Admin\EspecialidadeController@index')->name('index.especialidade');
        Route::get('/add', 'Admin\EspecialidadeController@add')->name('add.especialidade');
        Route::get('/{id}', 'Admin\EspecialidadeController@edit')->name('edit.especialidade');
        Route::post('/', 'Admin\EspecialidadeController@storeEspecialidade')->name('store.especialidade');
        Route::post('/update', 'Admin\EspecialidadeController@updateEspecialidade')->name('update.especialidade');
        Route::get('/destroy/{id}', 'Admin\EspecialidadeController@delete')->name('delete.especialidade');
      });

      Route::get('', 'Admin\ConfigsController@index')->name('configs');

    });

    Route::group(['prefix' => 'financeiro'], function () {
      Route::get('', 'Admin\FinanceiroController@index')->name('admin.financeiro');
      Route::get('associado/{id}', 'Admin\FinanceiroController@getAssociado');
      Route::get('associado/{id}/{ano}', 'Admin\FinanceiroController@avaliarLancamento');
      Route::post('associado/{id}/{ano}', 'Admin\FinanceiroController@salvarAvaliacao');
      Route::post('anuidade', 'Admin\FinanceiroController@storeAnuidade');
      Route::get('search', 'Admin\FinanceiroController@search');      
        Route::group(['prefix' => 'dadosbancarios'], function () {
          Route::get('', 'Admin\FinanceiroController@indexDadosBancarios')->name('admin.dadosbancarios');
          Route::get('{id}', 'Admin\DadosBancariosController@edit');
          Route::post('', 'Admin\DadosBancariosController@store');
          Route::post('{id}', 'Admin\DadosBancariosController@update');
          Route::get('destroy/{id}', 'Admin\DadosBancariosController@destroy');
        });
    });

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
        Route::get('', 'Associado\DadosPessoaisController@getDadosPessoais')->name('dadospessoais');
        Route::post('', 'Associado\DadosPessoaisController@storeDadosPessoais')->name('dadospessoais.store');
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
      Route::post('/destroy/{id}', 'Associado\DadosProfissionaisController@destroyDadosProfissionais');
    });

    Route::post('especpro', 'Admin\EspecialidadeController@storeEspecialidade');

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
      Route::post('', 'Associado\FinanceiroController@storeAnuidade');
      Route::post('comprovante/{ano}', 'Associado\FinanceiroController@updateAnuidade');
    });


    //Certeirinha do Associado
    Route::group(['prefix' => 'carteirinha'], function () {
      Route::get('', 'Associado\CarteirinhaController@getIndex');
      Route::post('/old', 'Associado\CarteirinhaController@storeOld');
      Route::get('/certificado', 'Associado\CarteirinhaController@getCertificado');
    });
});
