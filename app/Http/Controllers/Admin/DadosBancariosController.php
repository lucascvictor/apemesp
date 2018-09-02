<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Requests;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Apemesp\Repositories\Admin\DadosBancariosRepository;

use Session;

use View;

class DadosBancariosController extends Controller
{

    public function __construct()
    {
    	$this->middleware('auth', ['except' => 'logout']);
    	
        View::composers([
            'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'] ,
            'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens']
        ]);

        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dadosBancarios =  new DadosBancariosRepository;
        $dadosBancarios->store($request);
        Session::flash("sucesso", "Os dados foram salvos com sucesso");
        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dadosBancarios =  new DadosBancariosRepository;
        $dados = $dadosBancarios->update($request, $id);
        return redirect()->route('admin.dadosbancarios');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dadosBancarios =  new DadosBancariosRepository;
        $dados = $dadosBancarios->edit($id);
        return view('admin.admin.financeiro.dadosbancarios.edit')->with('dadosbancarios', $dados);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dadosBancarios =  new DadosBancariosRepository;
        $dados = $dadosBancarios->destroy($id);
        return redirect()->route('admin.dadosbancarios');
    }
}
