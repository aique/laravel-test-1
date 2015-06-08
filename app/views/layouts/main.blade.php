<!doctype html>
<html lang="en">

<head>

    @section('metas')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @show

    <title>Laravel Test 1 - {{$sectionTitle}}</title>

</head>

<body>

    <div class="container">

        {{Form::open(['action' => 'changeLang'])}}

            {{Form::select('lang', ['es' => Lang::get('lang.es'),'en' => Lang::get('lang.en')], App::getLocale(), ['onchange' => 'submit()', 'id' => 'lang-selector'])}}

        {{Form::close()}}

        @include('layouts.menu.main')

        @yield('sectionContent')

    </div>

</body>

    @section('css')

    {{HTML::style('vendor/bootstrap/css/bootstrap.min.css')}}
    {{HTML::style('css/main.css')}}

    @show

    @section('js')

    {{HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js')}}
    {{HTML::script('vendor/bootstrap/js/bootstrap.min.js')}}

    @show

</html>