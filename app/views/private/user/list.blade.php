@extends('layouts.main')

@section('sectionContent')

<ol class="breadcrumb">
    <li>{{HTML::linkRoute('home', 'LaravelTest1')}}</li>
    <li>Usuarios</li>
</ol>

<div class="container col-sm-10 col-sm-offset-1">

    <h1>Usuarios</h1>

    @if(count($users) > 0)

        <table class="table">

            <thead>

                <tr>

                    <th>Nombre</th>
                    <th>Correo electrónico</th>
                    <th>Acciones</th>

                </tr>

            </thead>

            <tbody>

                @foreach($users as $user)

                    <tr>

                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>

                            {{HTML::linkRoute('detailUser', 'Detalle', array($user->id))}}
                            {{HTML::linkRoute('editUser', 'Editar', array($user->id))}}
                            {{HTML::linkRoute('deleteUser', 'Eliminar', array($user->id))}}

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

        {{$users->links()}}

    @else

        <p>No hay ningún usuario</p>

    @endif

</div>

@stop