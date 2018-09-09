<?php $cont =0;?>
<h3> Dados Academicos </h3>
@foreach($dadosacademicos as $dadoacademico)
<center>
   <table class="table table-hover table-striped">
      <tbody>
         <tr>
            <td><b>Categoria:</b></td>
            @if($dadoacademico->id_categoria_formacao == 1)
                <td>Graduação</td>
            @elseif($dadoacademico->id_categoria_formacao == 2)
                <td>Especialização</td>
            @elseif($dadoacademico->id_categoria_formacao == 3)
                <td>Outros</td>
            @endif
         </tr>
         <tr>
            <td><b>Nome da IES:</b></td>
            <td>{{$dadoacademico->nomeies}}</td>
         </tr>
         <tr>
            <td><b>Titulo:</b></td>
            <td>{{$dadoacademico->titulo}}</td>
         </tr>
         <tr>
            <td><b>Ano de Conclusão/ Previsão:</b></td>
            <td>{{$dadoacademico->anodeconclusao}}</td>
         </tr>
         <tr>
            <td><b>Titulo do TCC:</b></td>
            <td>{{$dadoacademico->titulotcc}}</td>
         </tr>
         <tr>
            <td><b>Local:</b></td>
            <td>
            @foreach($cidades as $cidade)
              @if($dadoacademico->id_cidade == $cidade->id)
                {{ $cidade->nome }}
              @endif
            @endforeach
            /
            @foreach($estados as $estado)
              @if($dadoacademico->id_estado == $estado->id)
                {{ $estado->nome }}
              @endif
            @endforeach
            </td>
         </tr>
         <tr>
            <td><b>Download Certificado/TCC:</b></td>
            <td><a href="/admin/associados/download/{{ $associado->cpf }}/{{$dadoacademico->arquivotcc}}">{{$dadoacademico->arquivotcc}}</a></td>
         </tr>
         <tr>
            <td><b>Carga Horária:</b></td>
            <td>{{$dadoacademico->cargahoraria}}</td>
         </tr>
      </tbody>
   </table>
   <hr>
</center>
@endforeach