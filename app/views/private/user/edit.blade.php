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

    <h1>Editar usuario</h1>

    @if($errors->has())

    <div class="alert alert-danger">

        @foreach($errors->all() as $error)

            {{$error}}<br />

        @endforeach

    </div>

    @endif

    {{Form::model($user, array('route' => array('editUser', $user->id), 'class' => 'form-horizontal'))}}

    <div class="form-group">

        {{Form::label('name', 'Nombre', array('class' => 'col-sm-4'))}}

        <div class="col-sm-8">
            {{Form::text('name', $user->name)}}
        </div>

    </div>

    <div class="form-group">

        {{Form::label('email', 'Dirección de correo', array('class' => 'col-sm-4'))}}

        <div class="col-sm-8">
            {{Form::text('email', $user->email)}}
        </div>

    </div>

    {{Form::submit('Editar', array('class' => 'send-form-button'))}}

    {{Form::close()}}

</div>

@stop