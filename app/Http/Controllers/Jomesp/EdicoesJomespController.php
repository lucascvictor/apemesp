<?php

namespace Apemesp\Http\Controllers\Jomesp;

use Illuminate\Http\Request;

use App\Http\Requests;

use View;

use DB;

use Session;

use Response;

use Apemesp\Http\Controllers\Controller;


class EdicoesJomespController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth', ['except' => 'logout']);

      View::composers([
          'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav']
      ]);
  }

  public function index()
  {
        $edicoes =  DB::table('edicoes_jomesp')->select('*')->orderBy('edicoes_jomesp.id', 'desc')->paginate(8);

        return view('admin.redator.edicoesjomesp.edicoes')->with('edicoes', $edicoes);

  }

  public function editEdicao($id)
  {
    $edicao =  DB::table('edicoes_jomesp')->find($id);
    if(count($edicao) == 0) {
      return view('errors.404');
    } else {
      return view('admin.redator.edicoesjomesp.editar')->with('edicao', $edicao);
    }
  }

  public function storeEdicao(Request $request)
  {

    /* O controle do tamanho do upload dos arquivos fica no php.ini */
    $edicao =  DB::table('edicoes_jomesp')->where('edicao','=',$request->edicao)->select('edicao')->get();

    if(count($edicao) > 0) {
      Session::flash('cuidado','O arquivo/edição foi enviado anteriormente');
      return redirect()->back();

    } elseif($request->file('arquivo') == null) {
      $nomeArquivo = 'Arquivo não enviado';
      $this->storeData($nomeArquivo,$request->edicao,$request->linkexterno);

    } else {
      $arquivo = $request->file('arquivo');
      $pastaDestino = base_path() . DIRECTORY_SEPARATOR . 'public/files/edicoesJomesp';
      $fileName = $request->edicao;
      $fileName = str_replace(" ","",$fileName);
      $nomeArquivo = $fileName . '.' . $request->file('arquivo')->getClientOriginalExtension();

      $request->file('arquivo')->move($pastaDestino, $nomeArquivo);

      $this->storeData($nomeArquivo,$request->edicao,$request->linkexterno);
    }

    Session::flash('sucesso','O arquivo/edição foi enviado com sucesso');
    return redirect()->back();

  }

  public function storeData($nomeArquivo, $edicao, $linkexterno)
  {
    DB::table('edicoes_jomesp')->insert([
    ['arquivo' => $nomeArquivo, 'edicao' => $edicao,'linkexterno' => $linkexterno, 'created_at' => date("Y-m-d H:i:s")]
    ]);
  }

  public function download($arquivo)
  {
      $file= public_path(). "/files/edicoesJomesp" . "/" . $arquivo;
      $headers = array('Content-Type: application/pdf',);
      if (file_exists($file)) {
        return Response::download($file, 'edicaoJomesp.pdf', $headers);
      } else {
        Session::flash('cuidado','Arquivo não encontrado para download');
        return redirect()->back();
      }
  }


  public function updateEdicao(Request $request, $id)
  {

    $edicao =  DB::table('edicoes_jomesp')->where('id','=',$id)->select('edicao')->get();

    if(count($edicao) == 0) {
      Session::flash('cuidado','Não foi possivel realizar a alteração');
      return redirect()->back();

    } elseif($request->file('arquivo') == null) {
      $arquivo = public_path(). "/files/edicoesJomesp" . "/" . $request->arquivoAnterior;

      if (file_exists($arquivo)) {
        $pastaDestino = base_path() . DIRECTORY_SEPARATOR . 'public/files/edicoesJomesp';
        if(substr($arquivo,-3) == "pdf") {
           $extensao = "pdf";
         } else {
           $extensao = "desc";
         }
        $fileName = $request->edicao;
        $fileName = str_replace(" ","",$fileName);
        $nomeArquivo = $fileName . '.' . $extensao;
        rename($arquivo, $pastaDestino . DIRECTORY_SEPARATOR . $nomeArquivo);
      } else {
        $nomeArquivo = "Arquivo não enviado";
      }
      DB::table('edicoes_jomesp')
              ->where('id', $id)
              ->update(['edicao' => $request->edicao, 'arquivo' => $nomeArquivo,'linkexterno'=> $request->linkexterno, 'updated_at' =>  date("Y-m-d H:i:s")]);

    } else {
      $arquivoAnterior = public_path(). "/files/edicoesJomesp" . "/" . $request->arquivoAnterior;
      array_map( "unlink", glob( $arquivoAnterior ) );

      $pastaDestino = base_path() . DIRECTORY_SEPARATOR . 'public/files/edicoesJomesp';
      $fileName = $request->edicao;
      $fileName = str_replace(" ","",$fileName);
      $nomeArquivo = $fileName . '.' . $request->file('arquivo')->getClientOriginalExtension();
      $request->file('arquivo')->move($pastaDestino, $nomeArquivo);

      DB::table('edicoes_jomesp')
              ->where('id', $id)
                ->update(['edicao' => $request->edicao,'arquivo' => $nomeArquivo, 'linkexterno'=> $request->linkexterno, 'updated_at' =>  date("Y-m-d H:i:s")]);

    }

    Session::flash('sucesso','A edição Jomesp foi alterada com sucesso');



    return redirect()->route('edicoesJomesp.index');
  }


  public function dropEdicao($id)
  {
    $edicao =  DB::table('edicoes_jomesp')->find($id);
    if(count($edicao) > 0) {
      $arquivo = public_path(). "/files/edicoesJomesp" . "/" . $edicao->arquivo;
      array_map( "unlink", glob( $arquivo ) );
      DB::table('edicoes_jomesp')->where('id', '=', $id)->delete();
    }
    return redirect()->route('edicoesJomesp.index');
  }

}
