<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="/">__________ __)!</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ (Request::is('categories') ? 'active' : '') }}">
                    {!! link_to_action('CategoriesController@index', 'Categories') !!}
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                <li class="{{ (Request::is('login') ? 'active' : '') }}">
                    <a href="{{ URL::to('auth/login') }}">
                        <i class="fa fa-sign-in"></i> Login
                    </a>
                </li>
                <li class="{{ (Request::is('register') ? 'active' : '') }}">
                    <a href="{{ URL::to('auth/register') }}">Register</a>
                </li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-user"></i> Welcome {{ Auth::user()->name }} 
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        @if(Auth::check())
                        @if(Auth::user()->admin==1)
                        <li>
                            <a href="{{ URL::to('admin/dashboard') }}"><i class="fa fa-tachometer"></i> Admin Dashboard</a>
                        </li>
                        <li role="presentation" class="divider"></li>
                        @endif
                        @endif
                        <li>
                            <a href="{{ URL::to('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
