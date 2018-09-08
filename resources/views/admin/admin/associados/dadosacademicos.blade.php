<?php $cont =0;?>
<h3> Dados Academicos </h3>

@foreach($dadosacademicos as $dadoacademico)
<center>
         <table class="table table-hover table-striped">
            <tbody>
               <tr>
                  <td><b>Categoria:</b></td>
                  <?php $arquivorg = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadoacademico->cpf . "/rg.pdf"; ?>
                
                  <td>{{$dadoacademico->id_categoria_formacao}}</td>
               </tr>
               <tr>
                  <td><b>Nome da IES::</b></td>
                  <?php $arquivocpf = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadoacademico->cpf . "/cpf.pdf"; ?>
                
                  <td>{{$dadoacademico->nomeies}}</td>
               </tr>
               <tr>
                  <td><b>Titulo:</b></td>
                  <?php $arquivocnh = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadoacademico->cpf . "/cnh.pdf"; ?>
                
                  <td>{{$dadoacademico->titulo}}</td>
               </tr>
               <tr>
                  <td><b>Ano de Conclusão/ Previsão:</b></td>
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadoacademico->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td>{{$dadoacademico->anodeconclusao}}</td>
               </tr>
               <tr>
                  <td><b>Titulo do TCC::</b></td>
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadoacademico->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td>{{$dadoacademico->titulotcc}}</td>
               </tr>
               <tr>
                  <td><b>Local:</b></td> 
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadoacademico->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td>{{$dadoacademico->id_estado}}/{{$dadoacademico->id_cidade}}</td>
               </tr>
               <tr>
                  <td><b>Download Certificado/TCC:</b></td> 
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadoacademico->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td>{{$dadoacademico->arquivotcc}}</td>
               </tr>

                <tr>
                  <td><b>Carga Horária:</b></td> 
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadoacademico->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td>{{$dadoacademico->cargahoraria}}</td>
               </tr>

            </tbody>
         </table>
         <hr>
      </center>
@endforeach