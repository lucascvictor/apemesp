<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Adicionar especialidade</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" id="especialidade" method="POST" action="{{ url('/associado/especpro')}}">
                {{ csrf_field() }}
                <legend>Digite abaixo a sua especialidade</legend>
                <input class="col-md-10" name="especialidade" id="especialidade" type="text" required="">
                <br />
                <div class="modal-footer">
                <button class="btn btn-success btn-block" type="submit">
                OK
                </button>
                <center>
                    <p style="color: red;">Esta especialidade pode ser removida pelo administrador caso seja necessário</p>
                </center>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
