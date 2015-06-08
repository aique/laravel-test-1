@if(Sentry::check())

    @include('layouts.menu.logged')

@else

    @include('layouts.menu.unlogged')

@endif