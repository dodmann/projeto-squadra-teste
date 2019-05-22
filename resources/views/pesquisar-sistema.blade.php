@extends('layouts.app')

@section('title', 'Pesquisar Sistema')

@section('tituloCaixa', 'Pesquisar Sistema')

@section('subtituloCaixa', 'Filtro de Consulta')

@section('content')
            <form action="{{ url('/') }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input class="form-control" type="text" name="descricao">
                </div>
                <div class="form-group">
                    <label for="sigla">Sigla</label>
                    <input class="form-control" type="text" name="sigla">
                </div>
                <div class="form-group">
                    <label for="emailAtendimento">Email de atendimento do sistema</label>
                    <input class="form-control" type="email" name="emailAtendimento">
                </div>

                <div>Resultados</div>

                @foreach ($resultado as $item)

                    <div>Descricao: {{ $item->descricao }}</div>
                    <div>Sigla:{{ $item->sigla }}</div>
                    <div>Email de antendimento:{{ $item->emailAtendimento }}</div>
                    <div>URL: {{ $item->url }}</div>

                @endforeach

                <div>{{ $resultado->links() }}</div>

            <a href="/create"><button>Novo Sistema</button></a>
            <button type="submit" class="reset btn btn-default">Limpar</button>
            <button type="submit" class="btn btn-default">Pesquisar</button>
            </form>
@endsection