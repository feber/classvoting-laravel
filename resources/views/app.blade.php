<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" media="screen" title="no title" charset="utf-8">
    <style media="screen">
        body {
            padding-top: 60px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url() }}">Survey</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    @can('manage-prodi', Auth::user())
                    <li><a href="{{ url('prodi') }}">Program Studi</a></li>
                    @endcan
                    @can('manage-makul', Auth::user())
                    <li><a href="{{ url('makul') }}">Mata Kuliah</a></li>
                    @endcan
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                    @if(Auth::check())
                        <a href="{{ url('auth/logout') }}"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Sign Out</a>
                    @else
                        <a href="{{ url('auth/login') }}"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Sign In</a>
                    @endif
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
</body>

</html>
