<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
                        {{ config('app.name', 'Laravel') }}
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
                                    {{ Session::get('user_name') }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/studentLogout">
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
            <div class="box-content">
                <h2>Unit: {{$ch}}</h2>
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                  <thead>
                      <tr>
                          <th>Id</th>
                          <th>University Name</th>
                          <th>Admission Date</th>
                          <th>Admission Time</th>
                      </tr>
                  </thead>   
                  @php
                    $i = 1;
                  @endphp
                  @foreach($allUniversity as $university)
                  <tbody>
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$university->name}}</td>
                        <td>{{$university->admission_date}}</td>
                        <td>{{$university->admission_time}}</td>
                    </tr>
                    
                  </tbody>
                  @endforeach
              </table>  

              <h2>Unit: D</h2>
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                  <thead>
                      <tr>
                          <th>Id</th>
                          <th>University Name</th>
                          <th>Admission Date</th>
                          <th>Admission Time</th>
                      </tr>
                  </thead>   
                  @php
                    $i = 1;
                  @endphp
                  @foreach($d_university as $dd_university)
                  <tbody>
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$dd_university->name}}</td>
                        <td>{{$dd_university->admission_date}}</td>
                        <td>{{$dd_university->admission_time}}</td>
                    </tr>
                    
                  </tbody>
                  @endforeach
              </table>            
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
