<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admission Helpline') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/toastr.min.css')}}">
    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Admission Helpline') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    
                </div>
            </div>
        </nav>
        <div class="container">
            <h2 >There is some notice for admission</h2>
            @foreach($allnotices as $notice)
                <p>{{$notice->title}}</p>
                <a href="/fullNotice/{{$notice->id}}">Click Here for details</a>
                <br><br>
            @endforeach
        </div>

        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/toastr.min.js')}}"></script>
    @yield('scripts')

    <script type="text/javascript">
        @if(Session::has('message'))
            toastr.success("{{Session::get('message')}}");
        @endif
        @if(Session::has('info'))
            toastr.info("{{Session::get('info')}}");
        @endif
    </script>
</body>
</html>
