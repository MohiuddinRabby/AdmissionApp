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
                    <a class="navbar-brand" href="#">
                        Admin
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{Session::get('admin_name')}} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/adminlogout">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
            
                <div class="col-md-4">
                
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="/dashboard">Home</a>
                        </li>
                        <li class="list-group-item">
                            <a href="">All User</a>
                        </li>
                        <li class="list-group-item">
                            <a href="/allUniversity">All University</a>
                        </li>
                        <li class="list-group-item">
                            <a href="/addUniversity">Add University</a>
                        </li>
                        <li class="list-group-item">
                            <a href="/addNotice">Add a notice</a>
                        </li>
                        <li class="list-group-item">
                            <a href="/allNotice">All Notice</a>
                        </li>
                        
                    </ul>
                </div>
                
                <div class="col-md-8">
                    
                    @yield('content')
                    
                </div>
            </div>
        </div>

        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>
