<!DOCTYPE html>
<html>
  <head>
    <title>
      Memo Tracker @yield('title')
    </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="icon" href="{{ asset('mtlogo.png') }}">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome icon-->
    <script src="{{ asset('assets/fontawesome/all.js') }}"></script>
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="{{ asset('assets/GoogleFont/poppins.css') }}">
    <!-- orion icons-->
    <link rel="stylesheet" href="{{ asset('assets/css/orionicons.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.default.css') }}">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <!-- Datatables CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/datatables/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/jquery-confirm/jquery-confirm.min.css')}}">
    @yield('style')
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-4 bg-white shadow">
        <a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead">
          <i class="fas fa-align-left"></i>
        </a>
        <a href="{{ url('/') }}" class="navbar-brand font-weight-bold text-uppercase text-base">
          Memo Tracker
        </a>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar shrink show">
        <ul class="sidebar-menu list-unstyled">
          <li class="sidebar-list-item"><a href="{{ url('/') }}" class="sidebar-link text-muted {{ request()->is('/') ? 'active' : '' }}"><i class="o-home-1 mr-3 text-gray"></i><span>Home</span></a></li>
          <li class="sidebar-list-item"><a href="{{ url('/create') }}" class="sidebar-link text-muted {{ request()->is('create') ? 'active' : '' }}"><i class="o-survey-1 mr-3 text-gray"></i><span>Create Memo</span></a></li>
          <li class="sidebar-list-item"><a href="{{ url('/view') }}" class="sidebar-link text-muted {{ request()->is('view') ? 'active' : '' }}"><i class="o-table-content-1 mr-3 text-gray"></i><span>View Memo</span></a></li> 
          @yield('edit')             
        </ul>
      </div>
      @yield('content')
    </div>
  <!-- JavaScript files-->
  <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/jquery-confirm/jquery-confirm.min.js') }}"></script>
  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/datatables/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/js/front.js') }}"></script>
  @yield('script')
  </body> 
</html>