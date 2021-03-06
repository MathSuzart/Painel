@extends('admintle::page')



@section('title', 'Usuários')

@section('content_header')

<h1>
    Novo Usuário
<h1>

@endsection('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                <h4><i class="icon fas fan-ban">Ocorreu um ERRO.</i></h4>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
    @endif
<div class="card">

    <div class="card-body">
    <form action="{{route('users.store')}}" method="POST" class="form-horizontal">
        @csrf

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nome Completo</label>
            </div>
            <div class="col-sm-10">
                <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalide @enderror" />
            </div>


            <div class="form-group">
                <label class="col-sm-2 col-form-label">E-mail</label>
            </div>
            <div class="col-sm-10">
                <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalide @enderror" />
            </div>


            <div class="form-group">
                <label class="col-sm-2 col-form-label">Senha</label>
            </div>
            <div class="col-sm-10">
                <input type="password" name="password" value="{{old('password')}}" class="form-control @error('password') is-invalide @enderror" />
            </div>


            <div class="form-group">
                <label class="col-sm-2 col-form-label">Confirmação da Senha</label>
            </div>
            <div class="col-sm-10">
                <input type="password" name="password_confirmation" value="{{old('password')}}" class="form-control @error('password_confirmation') is-invalide @enderror" />
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-form-label"></label>
            </div>
            <div class="col-sm-10">
                <input type="submit" value="Salvar" class="btn btn-success" />
            </div>

    </form>
    </div>
</div>

</div>
@endsection
