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
            'Apemesp\Composers\MaisVistosComposer'  => ['partials._sidebar'] 
        ]);
         View::composers([
            'Apemesp\Composers\PropagandasComposer'  => ['partials._sidebar'] 
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
            Session::flash('sucesso', 'Seus dados foram salvos com sucesso');
            return redirect()->route('admin');
        } else {
            Session::flash('cuidado', 'O e-mail informado já foi cadastrado ou é inválido, por favor tente novamente ou entre em contato');
            return redirect()->back();
        }
    }

    public function getLogin(){
        
        return ("man");
    }

  
}
