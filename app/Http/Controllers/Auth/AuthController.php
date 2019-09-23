<?php

namespace Apemesp\Http\Controllers\Auth;

use Apemesp\Apemesp\Models\User;
use Validator;
use View;
use Apemesp\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Apemesp\Apemesp\Repositories\Apemesp\UserRepository;
use Auth;
use Session;
use Input;
use Mail;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    
    protected $redirectTo = '/admin';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
         View::composers([
            'Apemesp\Composers\MaisVistosComposer'  => ['partials._sidebar'],
            'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens'],
            'Apemesp\Composers\PropagandasComposer'  => ['partials._sidebar'],
            'Apemesp\Composers\FooterComposer'  => ['partials._footer'] 
        ]);
   
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function postRegister(Request $request)
    {
        $user = new UserRepository;
        $result = $user->create($request);
        if ($result) {
            Session::flash('sucesso', 'Seus dados foram salvos com sucesso. Por favor verifique o seu e-mail.');
            $confirmCode = $this->generateCode();
            $user->storeCode($result, $confirmCode);
            $this->sendEmailAdministradores($result);
            $this->sendEmailReminder($result, $confirmCode);
        } else {
            Session::flash('cuidado', 'O e-mail informado já foi cadastrado ou é inválido, por favor tente novamente ou entre em contato');
        }
        return redirect()->back();
    }

    public function sendEmailAdministradores($id)
    {

        $user = User::findOrFail($id);
        $userRepo = new UserRepository;

        $administradores = $userRepo->findAllAdmins();
        foreach($administradores as $administrador) {
            Mail::send('emails.administradores', ['nome' => $user->name, 'email' => $user->email], function ($m) use ($user, $administrador) {
                $m->from('site.apemesp@gmail.com', 'APEMESP');

                $m->to($administrador->email, $administrador->name)->subject('Novo usuário cadastrado!');
            });
        }
    }

    public function getLogin(){
        
        return ("man");
    }

    public function generateCode()
    {
        return  uniqid(rand(), true);
    }

      /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate()
    {
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            if (User::id_status != 4) {
                return redirect()->intended('dashboard');
            } else {
                Auth::logout();
                return redire()->back();
           }
        }
    }

      /**
     * Send an e-mail reminder to the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function sendEmailReminder($id, $confirmCode)
    {
        $user = User::findOrFail($id);

        Mail::send('emails.reminder', ['confirmCode' => $confirmCode], function ($m) use ($user) {
            $m->from('site.apemesp@gmail.com', 'APEMESP');

            $m->to($user->email, $user->name)->subject('Validação de cadastro!');
        });
    }

    public function sendEmailReset($id, $resetCode)
    {
        $user = User::findOrFail($id);
        Mail::send('emails.reset', ['resetCode' => $resetCode], function ($m) use ($user) {
            $m->from('site.apemesp@gmail.com', 'APEMESP');

            $m->to($user->email, $user->name)->subject('Redefinição de senha!');
        });
    }

    public function confirm($code)
    {
        $aud = new UserRepository;
        $user = $aud->findCode($code);

        if (!empty($user->id)) {
            $aud->updateAditionalUserData($user->id);
            Session::flash('sucesso', 'E-mail confirmado com sucesso. Prossiga com o seu Login.');
        } else {
            Session::flash('cuidade', 'Código de verificação inválido tente novamente');
        }
        
        return redirect()->route('apemesp.index');
    }


    public function reenviar()
    {
        return view('emails.resend');
    }

    public function reenviarconfirmacao(Request $request)
    {
        $aud = new UserRepository;
        $user = $aud->findAditionalUserByEmail($request->email);
        
        if (empty($user->email)) {

            Session::flash('cuidado', 'O e-mail informado é inválido ou não consta em nosso banco de dados.');
            return redirect()->back();

        } else {
            $confirmCode = $this->generateCode();
            $aud->storeCode($user->id, $confirmCode);       
            $dadosEmail = $aud->findUserById($user->id);
            Mail::send('emails.reminder', ['confirmCode' => $dadosEmail->code], function ($m) use ($user) {
                $m->from('site.apemesp@gmail.com', 'APEMESP');
                $m->to($user->email, $user->name)->subject('Validação de cadastro!');
            });

           Session::flash('sucesso', 'O e-mail de confirmação foi reenviado');

            return redirect()->route('apemesp.index');
        }
    }

    public function reset($code)
    {
        $user = new UserRepository;
        $usuario = $user->resetPasswordByCode($code);
        Session::flash('sucesso', 'A senha foi reconfigurada');
        return redirect()->route('apemesp.index');
    }

    public function redefinir()
    {
        return view('auth.passwords.email');
    }

    public function enviarRedefinicao(Request $request)
    {
        $user = new UserRepository;
        $result = $user->findAditionalUserByEmail($request->email);
        if ($result) {
            Session::flash('sucesso', 'Seu código de redefinição de senha foi enviado ao seu email.');
            $resetCode = $this->generateCode();
            $user->updateResetCodeById($result, $resetCode);
            $this->sendEmailReset($result->id, $resetCode);
        } else {
            Session::flash('cuidado', 'O e-mail informado ainda não foi cadastrado ou é inválido, por favor tente novamente ou entre em contato');
        }
        return redirect()->route('apemesp.index');
    }
  
}
