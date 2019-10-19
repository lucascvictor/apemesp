<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Menu;

use Apemesp\Apemesp\Repositories\Admin\ValidacaoCadastralRepository;

use Apemesp\Apemesp\Repositories\Associado\DocumentacaoRepository;

use Apemesp\Apemesp\Models\User;

use Auth;

use Session;

use View;

use Mail;

class ValidacaoCadastralController extends Controller
{


	 public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

        View::composers([
            'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'],
            'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens']
        ]);

    }

     public function status(Request $request){

        $documentacao = new DocumentacaoRepository;
        $validacao = new ValidacaoCadastralRepository;
        $documentacao->changeCadastro($request->id, $request->validacao);
        $validacao->status($request->id, $request->validacao, $request->observacoes);
        Session::flash('sucesso', 'A avaliação cadastral foi salva com sucesso!');
        return redirect()->back();
    }

    public function email(Request $request)
    {
        $user = User::findOrFail($request->id);
        $validacao = new ValidacaoCadastralRepository;
        if($user) {
            Mail::send('emails.validacao_cadastral', ['mensagem' => $request->mensagem], function ($m) use ($user) {
                $m->from('site.apemesp@gmail.com', 'APEMESP');
                $m->to($user->email, $user->name)->subject('Avaliação de dados cadastrais!');
            });
            Session::flash('sucesso', 'O e-mail foi enviado!');
            $validacao->email($request);
        } else {
            Session::flash('cuidado', 'Não foi possivel enviar o e-mail');
        }   

        return redirect()->back();
    }

}
