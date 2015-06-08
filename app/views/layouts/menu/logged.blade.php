<nav class="navbar navbar-default">

    <div class="container">

        <div class="navbar-header">

            {{HTML::linkRoute('home', 'LaravelTest1', null, array('class' => 'navbar-brand'))}}

        </div>

        <div id="navbar">

            <ul class="nav navbar-nav">

                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <span class="caret"></span></a>

                    <ul class="dropdown-menu">

                        <li>{{HTML::linkRoute('users', 'Listado')}}</li>
                        <li>{{HTML::linkRoute('createUser', 'Crear')}}</li>

                    </ul>

                </li>

                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Discos <span class="caret"></span></a>

                    <ul class="dropdown-menu">

                        <li>{{HTML::linkRoute('albums', 'Listado')}}</li>

                    </ul>

                </li>

                <li>{{HTML::linkRoute('logout', 'Logout')}}</li>

            </ul>

            <p class="user-name navbar-text pull-right">Bienvenido, {{Sentry::getUser()->name}}</p>

        </div>

    </div>

</nav>