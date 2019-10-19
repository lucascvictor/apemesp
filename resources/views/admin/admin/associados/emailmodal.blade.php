<div class="modal fade" id="emailModal{{ $email->id }}" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">E-mail:</h4>
            </div>
            <div class="modal-body">
                {{ $email->mensagem }}
            </div>
        </div>
        </div>
    </div>
    