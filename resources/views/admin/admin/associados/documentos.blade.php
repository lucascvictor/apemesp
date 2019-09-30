<h3> Documentos </h3>
<center>
         <table class="table table-hover table-striped">
            <thead>
               <tr>
                  <th> </th>
                  <th>Arquivo enviado?</th>
                  <th>Link para Download</th>
                  <th></th>
                  <th colspan="2"></th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td><b>RG:</b></td>
                  <?php $arquivorg = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/rg.pdf"; ?>
                  <td>
                     <?php if (file_exists($arquivorg)) {
                        echo "SIM";
                        $documentacao[0] = 1;
                        } else {
                        echo "Não";
                        $documentacao[0] = 0;
                        } ?>
                  </td>
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/rg.pdf">download</a></td>
                  <td>
                     @if($documentacao[0] == 1)
                        <a href="/public/files/{{$associado->cpf}}/rg.pdf">Visualizar RG</a>
                     @endif
                  </td>
               </tr>
               <tr>
                  <td><b>CPF:</b></td>
                  <?php $arquivocpf = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/cpf.pdf"; ?>
                  <td>
                     <?php if (file_exists($arquivocpf)) {
                        echo "SIM";
                        $documentacao[1] = 1;
                        } else {
                        echo "Não";
                        $documentacao[1] = 0;
                        } ?>
                  </td>
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/cpf.pdf">download</a></td>
                  <td>
                     @if($documentacao[1] == 1)
                        <a href="/public/files/{{$associado->cpf}}/cpf.pdf">Visualizar CPF</a>
                     @endif
                  </td>
               </tr>
               <tr>
                  <td><b>CNH:</b></td>
                  <?php $arquivocnh = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/cnh.pdf"; ?>
                  <td>
                     <?php if (file_exists($arquivocnh)) {
                        echo "SIM";
                        $documentacao[2] = 1;
                        } else {
                        echo "Não";
                        $documentacao[2] = 0;
                        } ?>
                  </td>
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/cnh.pdf">download</a></td>
                  <td>
                     @if($documentacao[2] == 1)
                     <a href="/public/files/{{$associado->cpf}}/cnh.pdf">Visualizar CNH</a>
                     @endif
                  </td>
               </tr>
               <tr>
                  <td><b>Comprovante de Endereço:</b></td>
                  <?php $comprovante_e = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $associado->cpf . "/comprovante_e.pdf"; ?>
                  <td>
                     <?php if (file_exists($arquivocnh)) {
                        echo "SIM";
                        $documentacao[3] = 1;
                        } else {
                        echo "Não";
                        $documentacao[3] = 0;
                        }
                        ?>
                  </td>
                  <td><a href="/admin/associados/download/{{$associado->cpf}}/comprovante_e.pdf">download</a></td>
                  <td>
                     @if($documentacao[3] == 1)
                        <a href="/public/files/{{$associado->cpf}}/comprovante_e.pdf">Visualizar Comprovante</a>
                     @endif   
                  </td>
               </tr>
            </tbody>
         </table>
      </center>