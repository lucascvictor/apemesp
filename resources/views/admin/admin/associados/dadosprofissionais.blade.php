<?php $cont =0;?>
<h3> Dados Profissionais </h3>
<center>
         <table class="table table-hover table-striped">
            <tbody>
               <tr>
                  <td><b>CEP:</b></td>
                  <?php $arquivorg = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/rg.pdf"; ?>
                
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/rg.pdf">dowload</a></td>
               </tr>
               <tr>
                  <td><b>Endereço:</b></td>
                  <?php $arquivocpf = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/cpf.pdf"; ?>
                
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/cpf.pdf">dowload</a></td>
               </tr>
               <tr>
                  <td><b>Complemento:</b></td>
                  <?php $arquivocnh = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/cnh.pdf"; ?>
                
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/cnh.pdf">dowload</a></td>
               </tr>
               <tr>
                  <td><b>Bairro:</b></td>
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/comprovante_e.pdf">dowload</a></td>
               </tr>
               <tr>
                  <td><b>Local:</b></td>
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/comprovante_e.pdf">dowload</a></td>
               </tr>
               <tr>
                  <td><b>Região:</b></td> 
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/comprovante_e.pdf">dowload</a></td>
               </tr>
               <tr>
                  <td><b>Especialidade de atendimento:</b></td> <!-- Cidade / Estado-->
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/comprovante_e.pdf">dowload</a></td>
               </tr>

                <tr>
                  <td><b>Linkedin:</b></td> <!-- Cidade / Estado-->
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/comprovante_e.pdf">dowload</a></td>
               </tr>

               <tr>
                  <td><b>Telefone:</b></td> <!-- Cidade / Estado-->
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/comprovante_e.pdf">dowload</a></td>
               </tr>
               <tr>
                  <td><b>Dias de atendimento:</b></td> <!-- Cidade / Estado-->
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/comprovante_e.pdf">dowload</a></td>
               </tr>

            </tbody>
         </table>
         <hr/>
      </center>