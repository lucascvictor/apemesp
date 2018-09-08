<?php $cont =0;?>
<h3> Dados Academicos </h3>

@foreach($dadosacademicos as $dadoacademico)
<center>
         <table class="table table-hover table-striped">
            <tbody>
               <tr>
                  <td><b>Categoria:</b></td>
                  <?php $arquivorg = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/rg.pdf"; ?>
                
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/rg.pdf">dowload</a></td>
               </tr>
               <tr>
                  <td><b>Nome da IES::</b></td>
                  <?php $arquivocpf = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/cpf.pdf"; ?>
                
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/cpf.pdf">dowload</a></td>
               </tr>
               <tr>
                  <td><b>Titulo:</b></td>
                  <?php $arquivocnh = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/cnh.pdf"; ?>
                
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/cnh.pdf">dowload</a></td>
               </tr>
               <tr>
                  <td><b>Ano de Conclusão/ Previsão:</b></td>
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/comprovante_e.pdf">dowload</a></td>
               </tr>
               <tr>
                  <td><b>Titulo do TCC::</b></td>
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/comprovante_e.pdf">dowload</a></td>
               </tr>
               <tr>
                  <td><b>Local:</b></td> <!-- Cidade / Estado-->
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/comprovante_e.pdf">dowload</a></td>
               </tr>
               <tr>
                  <td><b>Download Certificado/TCC:</b></td> <!-- Cidade / Estado-->
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/comprovante_e.pdf">dowload</a></td>
               </tr>

                <tr>
                  <td><b>Carga Horária:</b></td> <!-- Cidade / Estado-->
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/comprovante_e.pdf">dowload</a></td>
               </tr>

            </tbody>
         </table>
         <hr>
      </center>
@endforeach