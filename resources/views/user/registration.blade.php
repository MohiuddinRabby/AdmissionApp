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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

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
                    
                    @yield('content')
                    <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="panel panel-default">
                                <div class="panel-heading">Student Registration</div>

                                <div class="panel-body">
                                    <form class="form-horizontal" method="POST" action="{{URL::to('/user/submit')}}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="email" class="col-md-2 control-label">Name</label>

                                            <div class="col-md-6">
                                                <input id="email" type="text" class="form-control" name="name" value="" required autofocus>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-md-2 control-label">ssc GPA</label>

                                            <div class="col-md-6">
                                                <input id="email" type="text" class="form-control" name="ssc_gpa" value="" required autofocus>

                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="email" class="col-md-2 control-label">Hsc GPA</label>

                                            <div class="col-md-6">
                                                <input id="email" type="text" class="form-control" name="hsc_gpa" value="" required autofocus>

                                            </div>
                                        </div>
                                       <div class="form-group">
                                            <label class=" col-md-2 control-label" for="selectError3" >Select Unit</label>
                                            <div class="col-md-6">
                                              <select id="selectError3" name="unit" class="form-control">
                                                <option>select unit</option>
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="3">C</option>
                                              </select>
                                            </div>
                                      </div>
                                        <div class="form-group">
                                            <label for="email" class="col-md-2 control-label">E-Mail Address</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="col-md-2 control-label">Password</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control" name="password" required>

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-md-8 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Login
                                                </button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
