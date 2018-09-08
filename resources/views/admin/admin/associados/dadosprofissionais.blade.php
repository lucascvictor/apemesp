<?php $cont =0;?>
<h3> Dados Profissionais </h3>
@foreach($dadosprofissionais as $dadoprofissional)
<center>
   <table class="table table-hover table-striped">
      <tbody>
         <tr>
            <td><b>CEP:</b></td>
            <td>{{$dadoprofissional->cep}}</td>
         </tr>
         <tr>
            <td><b>Endereço:</b></td>
            <td>{{$dadoprofissional->endereco}}</td>
         </tr>
         <tr>
            <td><b>Complemento:</b></td>
            <td>{{$dadoprofissional->complemento}}</td>
         </tr>
         <tr>
            <td><b>Bairro:</b></td>
            <td>{{$dadoprofissional->bairro}}</td>
         </tr>
         <tr>
            <td><b>Local:</b></td>
            <td>
            @foreach($cidades as $cidade)
              @if($dadoprofissional->id_cidade == $cidade->id)
                {{ $cidade->nome }}
              @endif
            @endforeach
            /
            @foreach($estados as $estado)
              @if($dadoprofissional->id_estado == $estado->id)
                {{ $estado->nome }}
              @endif
            @endforeach
            </td>
         </tr>
         <tr>
            <td><b>Região:</b></td>
            <td>
            @foreach($regioes as $regiao)
              @if($dadoprofissional->id_proximidade == $regiao->id)
                {{ $regiao->localidade }}
              @endif
            @endforeach
            </td>
         </tr>
         <tr>
            <td><b>Especialidade de atendimento:</b></td>
            
            <td>
            @foreach($especialidades as $especialidade)
              @if($dadoprofissional->id_especialidade == $especialidade->id)
                {{ $especialidade->nome }}
              @endif
            @endforeach
            </td>
         </tr>
         <tr>
            <td><b>Linkedin:</b></td>
            <td>{{$dadoprofissional->linkedin}}</td>
         </tr>
         <tr>
            <td><b>Telefone:</b></td>
            <td>{{$dadoprofissional->telefone}}</td>
         </tr>
         <tr>
            <td><b>Dias de atendimento:</b></td>
            <td>
            @foreach($atendimento as $escala)
              @if($dadoprofissional->id_dias_atendimento == $escala->id)
                {{ $escala->escala }}
              @endif
            @endforeach
            </td>
         </tr>
      </tbody>
   </table>
   <hr/>
</center>
@endforeach