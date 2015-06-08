@extends('layouts.main')

@section('css')

    @parent

    {{HTML::style('css/list.css')}}

@stop

@section('js')

    @parent

    {{HTML::script('js/album.js')}}

@stop

@section('sectionContent')

<ol class="breadcrumb">
    <li>{{HTML::linkRoute('home', 'LaravelTest1')}}</li>
    <li>Discos</li>
</ol>

<div class="container col-sm-10 col-sm-offset-1">

    <h1>Discos</h1>

    @if(count($albums) > 0)

    {{Form::open(array('id' => 'album-title-search'))}}

        {{Form::label('album_title', 'Búsqueda por título' ) }}
        {{Form::text('album_title')}}

    {{Form::close()}}

        <table class="table">

            <thead>

                <tr>

                    <th>Título</th>
                    <th>Artista</th>
                    <th>Año</th>
                    <th>Acciones</th>

                </tr>

            </thead>

            <tbody>

                @foreach($albums as $album)

                    <tr>

                        <td>{{$album->title}}</td>
                        <td>{{$album->artist}}</td>

                        <td>

                            @if($album->year)

                                {{$album->year}}

                            @else

                                <span class="no-year">-</span>

                            @endif

                        </td>

                        <td></td>


                    </tr>

                @endforeach

            </tbody>

        </table>

        {{$albums->links()}}

    @else

        <p>No hay ningún disco</p>

    @endif

</div>

@stop