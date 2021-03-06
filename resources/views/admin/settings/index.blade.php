@extends('admintle::page')


@section('title', 'Configurações')

@section('content_header')
    <h1>Configurações</h1>
@endsection

@section('content')

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

    @if(session('warning'))
    <div class="alert alert-success">
            {{session('warning')}}
        </div>
    @endif

<div class="card">

    <div class="card">
        <div class="card-body">
            <form action="{{route('settings.save')}}" method="POST" class="form-horizontal">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label class="col-sm-2 col-form-label">Titulo do Site</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" value="{{$setting['title']}}"  class="form-control"/>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 col-form-label">Sub-titulo do Site</label>
                    <div class="col-sm-10">
                        <input type="text" name="subtitle" value="{{$setting['subtitle']}}"  class="form-control"/>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 col-form-label">E-mail para contato</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" value="{{$setting['email']}}"  class="form-control"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-form-label">Cor do fundo</label>
                    <div class="col-sm-10">
                        <input type="color" name="bgcolor" value="{{$setting['bgcolor']}}"  class="form-control" style="with:70px"/>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 col-form-label">Cor do texto</label>
                    <div class="col-sm-10">
                        <input type="color" name="textcolor" value="{{$setting['textcolor']}}"  class="form-control" style="with:70px"/>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="submit" value="Salvar"  class="form-control"/>
                    </div>
                </div>


            </form>
        </div>
    </div>
@endsection
