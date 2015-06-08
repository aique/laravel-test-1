@extends('layouts.main')

@section('css')

    @parent

    {{HTML::style('css/form.css')}}

@stop

@section('sectionContent')

<div class="container col-sm-6 col-sm-offset-3">

    <h1>Login</h1>

    @if($errors->has())

    <div class="alert alert-danger">

        @if($errors->has('email'))

            {{$errors->first('email')}}<br />

        @endif

        @if($errors->has('required'))

            {{$errors->first('required')}}<br />

        @endif

        @if($errors->has('authenticate_failed'))

            {{$errors->first('authenticate_failed')}}<br />

        @endif

    </div>

    @endif

    {{Form::open(array('url' => 'login', 'class' => 'form-horizontal', 'id' => 'login-form'))}}

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

        {{Form::submit('Login', array('class' => 'send-form-button'))}}

    {{Form::close()}}

</div>

@stop
