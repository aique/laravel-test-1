<nav class="navbar navbar-default">

    <div class="container">

        <div class="navbar-header">

            {{HTML::linkRoute('home', 'LaravelTest1', null, array('class' => 'navbar-brand'))}}

        </div>

        <div id="navbar">

            <ul class="nav navbar-nav">

                <li><li>{{HTML::linkRoute('login', 'Login')}}</li></li>

            </ul>

        </div>

    </div>

</nav>