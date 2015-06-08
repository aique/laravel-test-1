@extends('layouts.main')

@section('css')

    @parent

    {{HTML::style('css/detail.css')}}

@stop

@section('sectionContent')

<ol class="breadcrumb">
    <li>{{HTML::linkRoute('home', 'LaravelTest1')}}</li>
    <li>{{HTML::linkRoute('users', 'Usuarios')}}</li>
    <li class="active">{{$user->name}}</li>
</ol>

<div class="container col-sm-8 col-sm-offset-2">

    <h1>{{$user->name}}</h1>

    <p class="attribute-name span4">Nombre</p>
    <p class="attribute-value span8">{{$user->name}}</p>

    <p class="attribute-name span4">Correo electrónico</p>
    <p class="attribute-value span8">{{$user->email}}</p>

    <p class="attribute-name relationship-title span4">Compras</p>

    @if(count($user->buys) > 0)

        <table class="table">

            <thead>
                <tr>
                    <th>Identificador</th>
                    <th>Disco</th>
                    <th>Unidades</th>
                    <th>Precio</th>
                </tr>
            </thead>

            <tbody>

            @foreach($user->buys as $buy)

                <tr>
                    <td>{{$buy->id}}</td>
                    <td>{{$buy->album->title}}</td>
                    <td>{{$buy->units}}</td>
                    <td>{{$buy->price}} €</td>
                </tr>

            @endforeach

            </tbody>

        </table>

    @else

        <p class="attribute-value span8">No hay ninguna compra.</p>

    @endif

</div>

@stop