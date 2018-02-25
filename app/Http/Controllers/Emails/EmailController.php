<?php

namespace Apemesp\Http\Controllers\Emails;

use Illuminate\Http\Request;

use Apemesp\Http\Requests;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Apemesp\Models\Assunto;

use Mail;

use Session;

class EmailController extends Controller
{
	protected	$email;
    protected   $nome;
    protected   $mensagem;
    protected   $telefone;
    protected   $date;

    public function send(Request $request){
    	$this->setEmail($request->email);
       	$this->setNome($request->nome);
    	$this->setTelefone($request->telefone);
    	$this->setMensagem($request->mensagem);
    	$this->setDate(date("m-d-Y H:i:s"));

		$assunto = $request->assunto;
		$pagina = $request->pagina;

		$oEmail = Assunto::where('id', '=', $assunto)->orWhere('assunto', '=', $assunto)->select('*')->get()->first();
		
		$dados = array(
			'titulo' => $oEmail->assunto,
			'mensagem' => $this->getMensagem(), 
			'nome' => $this->getNome(),
			'telefone' => $this->getTelefone(),
			'email' => $this->getEmail(),
			'data' => $this->getDate(),
			);
			
    	Mail::send('emails.send', $dados, function ($message) use ($oEmail)
    	{
    		$message->from($this->getEmail(), $this->getNome());
    		$message->to($oEmail->email)->subject($oEmail->assunto);
    	});
    	
    	Session::flash('sucesso', 'A mensagem foi enviada com sucesso');
		
		if($pagina == 'jomesp') {
			return redirect()->route('jomesp.contato');
		} else {
			return redirect()->route('contato.mensagens');
		}
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getMensagem(){
		return $this->mensagem;
	}

	public function setMensagem($mensagem){
		$this->mensagem = $mensagem;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}


	public function getDate(){
		return $this->date;
	}

	public function setDate($date){
		$this->date = $date;
	}
}
