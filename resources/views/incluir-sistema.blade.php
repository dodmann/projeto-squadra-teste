@extends('layouts.app')

@section('title', 'Manter Sistema')

@section('content')
    <form action="{{ url('/') }}" method="post">
        {{csrf_field()}}

        <label for="descricao">Descrição</label>
        <input class="form-control input-md {{ $errors->has('descricao') ? 'is-invalid': '' }}" 
               value="{{ old('descricao')}}" 
               type="text" 
               name="descricao"
               
        >
        <div class="invalid-feedback">{{ $errors->first('descricao') }}</div>

        <label for="sigla">Sigla</label>
        <input class="form-control input-md {{ $errors->has('sigla') ? 'is-invalid': '' }}" 
               value="{{ old('sigla')}}" 
               type="text" 
               name="sigla"
        >
        <div class="invalid-feedback">{{ $errors->first('sigla') }}</div>

        <label for="emailAtendimento">Email de atendimento do sistema</label>
        <input class="form-control input-md {{ $errors->has('emailAtendimento') ? 'is-invalid': '' }}" 
               value="{{ old('emailAtendimento')}}" 
               type="text" 
               name="emailAtendimento"
        >
        <div class="invalid-feedback">{{ $errors->first('emailAtendimento') }}</div>

        <label for="url">URL</label>
        <input class="form-control input-md {{ $errors->has('url') ? 'is-invalid': '' }}" 
               value="{{ old('url')}}" 
               type="text" 
               name="url"
        >
        <div class="invalid-feedback">{{ $errors->first('url') }}</div>
        
        <button type="submit" class="btn btn-default">Enviar</button>
    </form>
@endsection