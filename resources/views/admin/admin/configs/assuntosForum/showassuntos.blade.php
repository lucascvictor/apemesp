@extends('admin.dashboard')

@section('titulo', 'Configurações')

@section('conteudo')
<div class="row">
                <div class="col-lg-10">
                    <h2>Assuntos da página de mensagens</h2>
                    <p><a class="btn btn-success" href="{{ url('/admin/configs/assuntos/forum/add') }}">Adicionar assunto </a></p>
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Assunto</th>
                                    <th colspan="2"> </th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach($assuntos as $assunto)
            <tr>
                                    <td>{{ $assunto->id }}</td>
                                    <td>{{ $assunto->name }}</td>
                                    <td><a class="btn btn-default" href="{{ url('/admin/configs/forumassuntos') }}/{{ $assunto->id }}">Editar</a></td>
                                    <td><a class="btn btn-danger" href="{{ url('/admin/configs/forumassuntos/delete') }}/{{ $assunto->id }}">Deletar</a></td>
                                </tr>

            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

</div>
<div class="row">
<p> {{ $assuntos->setPath('')->render() }} </p>

</div>


</div>
</div>

@endsection
