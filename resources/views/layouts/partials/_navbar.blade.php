<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/{{-- {{ action('PostsController@index') }} --}}">Blog</a>
        </div>

        <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
        </ul>
        <ul class="nav navbar-nav pull-right">

            {{-- hide while logged in --}}
            <li><a href="/auth/login">Login</a></li>
            <li><a href="/auth/register">Register</a></li>
            
            {{-- hide while logged out and goes in a collapsable menu named by the logged in user name --}}
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">user <span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="{{ action('PostsController@create') }}">Add New Post</a></li>
                    <li><a href="{{ action('UsersController@show', 1)}}">My Posts</a></li>
                    <li><a href="{{ action('UsersController@show', 1)}}">My Profile</a></li>
                    <li><a href="auth/logout">Logout</a></li>
                </ul>
            </li>

        </ul>
    </div>
</nav>