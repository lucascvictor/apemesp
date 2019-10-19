<div class="modal fade" id="observacaoModal{{ $avaliacao->id }}" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Observação:</h4>
            </div>
            <div class="modal-body">
                {{ $avaliacao->observacoes }}
            </div>
        </div>
        </div>
</div>    