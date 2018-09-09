@extends('admin.dashboard')

@section('titulo', 'Controle financeiro')

@section('extrastyle')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('conteudo')
    <div class="row">
        <div class="col-md-4">
        <a style="background-color: orange;color: white; border-color:orange;" class="btn btn-success btn-block" href="" data-toggle="modal" data-target="#lancFinanceiro">Adicionar lançamento financeiro</a>
        </div>
    </div>    

    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        <a class="btn btn-success" href="" data-toggle="modal" data-target="#dadosBancarios">Visualizar Dados Bancários da APEMESP</a>
        </div>
    </div>
       
<fieldset>
   <legend>Anuidades</legend>
   <div class="row">
      <div class="col-lg-12">
         <table class="table table-hover table-striped">
            <thead>
               <tr>
                  <th>Ano </th>
                  <th>Arquivo enviado?</th>
                  <th>Arquivo validado?</th>
                  <th>Status</th>
                  <th></th>
                  <th>Download</th>
               </tr>
            </thead>
            <tbody>
               <?php $i = 0; ?>
               @foreach ($anuidades as $anuidade)
               <tr>
                  <td><b>{{ $anuidade->ano }}</b></td>
                  <?php $arquivo = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $cpf . "/comprovante_" . $anuidade->ano .".pdf" ?>

                  <td>
                     <?php if (file_exists($arquivo)) {
                        echo "SIM";
                        $documentacao[$i] = 1;
                        } else {
                        echo "Não";
                        $documentacao[$i] = 0;
                        } ?>
                  </td>
                  <td><?php if ($anuidade->arq_avaliado == 0) { echo "Não"; } else
                     {	echo "Sim"; } ?>
                  </td>
                  <td>
                  @foreach($status as $st)
                        @if($anuidade->status == $st->id)
                            {{ $st->descricao }}
                        @endif
                  @endforeach
                  </td>
                  <td><a class="btn btn-default" href="" data-toggle="modal" data-target="#enviar_{{ $anuidade->ano }}">Editar</a></td>
                  <td><a href="/associado/download/comprovante_{{ $anuidade->ano }}.pdf">dowload</a></td>
               </tr>
               <?php $i++; ?>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
   @foreach ($anuidades as $anuidade)
   <div class="modal fade" id="enviar_{{ $anuidade->ano }}" role="dialog">
      <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Enviar comprovante de {{ $anuidade->ano }}</h4>
            </div>
            <div class="modal-body">
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/associado/financeiro/comprovante') }}/{{ $anuidade->ano}}">
                  {{ csrf_field() }}
                  <!-- Botão de Arquivo para CPF -->
                  <div class="form-group" id="mensagem1">
                     <label class="col-md-4 control-label" for="filebutton">Comprovante: </label>
                     <div class="col-md-4">
                        <input id="comprovante" name="comprovante" class="input-file" type="file">
                        <input id="ano" name="ano" type="hidden" value="{{ $anuidade->ano }}">
                        <br />
                        <button class="btn btn-success" id="botao1">
                        Enviar
                        </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   @endforeach
</fieldset>

@include('admin.associado.financeiro.modal')
@endsection

