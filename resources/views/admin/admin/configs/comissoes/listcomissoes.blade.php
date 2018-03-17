@extends('admin.dashboard')

@section('titulo', 'Configurações')

@section('conteudo')
<div class="row">
                <div class="col-lg-10">
                    <h2>comissoes da página de mensagens</h2>
                    <p><a class="btn btn-success" href="{{ url('/admin/paginas/adicionar/comissao') }}">Adicionar comissao </a></p>
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>comissao</th>

                                    <th colspan="2"> </th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach($comissoes as $comissao)
            <tr>
                                    <td>{{ $comissao->comissao }}</td>

                                    <td><a class="btn btn-default" href="{{ url('/admin/paginas/comissao') }}/{{ $comissao->id }}">Editar</a></td>
                                    <td><a class="btn btn-danger" href="{{ url('/admin/configs/comissoes/delete') }}/{{ $comissao->id }}">Deletar</a></td>
                                </tr>

            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

</div>
<div class="row">
<p> {{ $comissoes->render() }} </p>

</div>


</div>
</div>

@endsection
