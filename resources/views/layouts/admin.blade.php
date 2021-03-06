<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sahasra Grand</title>
    <!-- <title>{{ config('app.name', 'Sahasra Grand') }}</title> -->

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>    
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="{{ asset('js/multiselect.js') }}" defer></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    
 
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <!-- Bootstrap core CSS -->
     <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/calendar.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/admin/admin_style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/multiselect.css') }}" rel="stylesheet">
</head>
<body cz-shortcut-listen="true">
    <nav class="navbar navbar-dark fixed-top top-navbar flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 p-3" href="/">SAHASRA GRAND</a>
      <div class="navbar-header">
       
      <i class="fa fa-bars" id="menu-humberger-btn" aria-hidden="true"></i>
      
    </div>
      <!-- <button name="" id="btn-tg"  class="btn text-white" >Menu</button> -->
      <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
      <ul class="navbar-nav px-3 logout-sec">
      <li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
        <li class="nav-item text-nowrap">
          <a class="dropdown-item " href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
    
      <div class="row">
            
            @component('components.nav')
            @endcomponent
        

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                  <div class="breadcrumb-sec">
                    <div class="d-flex">
                      <div class="breadcrumb">
                                      <a href="{{ url('/admin/home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                      @yield('parent_link')
                        <span class="breadcrumb-item active">@yield('breadcrum')</span>
                      </div>

                      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                  </div>
             @yield('content')
        </main>
      </div>
    </div>
   


</body>

</html>
