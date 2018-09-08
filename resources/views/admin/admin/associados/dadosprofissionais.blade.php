<?php $cont =0;?>
<h3> Dados Profissionais </h3>
@foreach($dadosprofissionais as $dadoprofissional)
<center>
         <table class="table table-hover table-striped">
            <tbody>
               <tr>
                  <td><b>CEP:</b></td>
                  <?php $arquivorg = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadoprofissional->cpf . "/rg.pdf"; ?>
                
                  <td>{{$dadoprofissional->cep}}</td>
               </tr>
               <tr>
                  <td><b>Endereço:</b></td>
                  <?php $arquivocpf = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadoprofissional->cpf . "/cpf.pdf"; ?>
                
                  <td>{{$dadoprofissional->endereco}}</td>
               </tr>
               <tr>
                  <td><b>Complemento:</b></td>
                  <?php $arquivocnh = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadoprofissional->cpf . "/cnh.pdf"; ?>
                
                  <td>{{$dadoprofissional->complemento}}</td>
               </tr>
               <tr>
                  <td><b>Bairro:</b></td>
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadoprofissional->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td>{{$dadoprofissional->bairro}}</td>
               </tr>
               <tr>
                  <td><b>Local:</b></td>
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadoprofissional->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td>{{$dadoprofissional->id_cidade}}/{{$dadoprofissional->id_estado}}</td>
               </tr>
               <tr>
                  <td><b>Região:</b></td> 
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadoprofissional->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td>{{$dadoprofissional->id_proximidade}}</td>
               </tr>
               <tr>
                  <td><b>Especialidade de atendimento:</b></td> 
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadoprofissional->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td>{{$dadoprofissional->id_especialidade}}</td>
               </tr>

                <tr>
                  <td><b>Linkedin:</b></td> 
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadoprofissional->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td>{{$dadoprofissional->linkedin}}</td>
               </tr>

               <tr>
                  <td><b>Telefone:</b></td> 
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadoprofissional->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td>{{$dadoprofissional->telefone}}</td>
               </tr>
               <tr>
                  <td><b>Dias de atendimento:</b></td> 
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadoprofissional->cpf . "/comprovante_e.pdf"; ?>
                  
                  <td>{{$dadoprofissional->id_dias_atendimento}}</td>
               </tr>

            </tbody>
         </table>
         <hr/>
      </center>
@endforeach