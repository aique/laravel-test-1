@extends('layouts.main')

@section('css')

    @parent

    {{HTML::style('css/form.css')}}

@stop

@section('sectionContent')

<ol class="breadcrumb">
    <li>{{HTML::linkRoute('home', 'LaravelTest1')}}</li>
    <li>{{HTML::linkRoute('users', 'Usuarios')}}</li>
    <li class="active">Nuevo usuario</li>
</ol>

<div class="container col-sm-8 col-sm-offset-2">

    <h1>Nuevo usuario</h1>

    @if($errors->has())

    <div class="alert alert-danger">

        @foreach($errors->all() as $error)

            {{$error}}<br />

        @endforeach

    </div>

    @endif

    {{Form::open(array('url' => 'createUser', 'class' => 'form-horizontal', 'id' => 'login-form'))}}

    <div class="form-group">

        {{Form::label('name', 'Nombre', array('class' => 'col-sm-4'))}}

        <div class="col-sm-8">
            {{Form::text('name', Input::get('name'))}}
        </div>

    </div>

    <div class="form-group">

        {{Form::label('email', 'Dirección de correo', array('class' => 'col-sm-4'))}}

        <div class="col-sm-8">
            {{Form::text('email', Input::get('email'))}}
        </div>

    </div>

    <div class="form-group">

        {{Form::label('password', 'Contraseña', array('class' => 'col-sm-4'))}}

        <div class="col-sm-8">
            {{Form::password('password')}}
        </div>

    </div>

    <div class="form-group">

        {{Form::label('password_confirmation', 'Confirmar contraseña', array('class' => 'col-sm-4'))}}

        <div class="col-sm-8">
            {{Form::password('password_confirmation')}}
        </div>

    </div>

    {{Form::submit('Crear', array('class' => 'send-form-button'))}}

    {{Form::close()}}

</div>

@stop