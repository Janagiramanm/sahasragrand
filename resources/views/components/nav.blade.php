    @php
        $user = \Illuminate\Support\Facades\Auth::user();
    @endphp
      
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item <?php if(\Request::is('admin/home')){ echo 'active'; } ?>">
                <a class="nav-link " href="/admin/home">
                  <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> -->
                  <i class="fa fa-tachometer" aria-hidden="true"></i> <label> Dashboard </label>
                </a>
              </li>
              <li class="nav-item <?php if(\Request::is('admin/user-list')){ echo 'active'; } ?>">
                <a class="nav-link" href="/admin/user-list">
                  <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> -->
                  <i class="fa fa-users" aria-hidden="true"></i>
                  <label> Users </label>
                 
                </a>
              </li>
              <li class="nav-item  <?php if(\Request::is('admin/blocks*')){ echo 'active'; } ?>">
                <a class="nav-link" href="/admin/blocks">
                  <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg> -->
                  <i class="fa fa-th" aria-hidden="true"></i>
                  <label> Blocks </label>
                  
                </a>
              </li>
              <li class="nav-item <?php if(\Request::is('admin/flats*')){ echo 'active'; } ?>">
                <a class="nav-link" href="/admin/flats">
                  <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg> -->
                  <i class="fa fa-home" aria-hidden="true"></i>
                  <label> Flats </label>
                  
                </a>
              </li>
              <li class="nav-item <?php if(\Request::is('admin/amenities*')){ echo 'active'; } ?>">
                <a class="nav-link" href="/admin/amenities">
                  <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg> -->
                  <i class="fa fa-universal-access" aria-hidden="true"></i>
                  <label> Amenities </label>
                  
                </a>
              </li>
              <li class="nav-item <?php if(\Request::is('admin/bookings*')){ echo 'active'; } ?>">
                <a class="nav-link" href="/admin/bookings">
                  <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg> -->
                  <i class="fa fa-book" aria-hidden="true"></i>
                  <label> Bookings </label>
                  
                </a>
              </li>
              <li class="nav-item <?php if(\Request::is('admin/tickers*')){ echo 'active'; } ?>">
                <a class="nav-link" href="/admin/tickers">
                  <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg> -->
                  <i class="fa fa-indent" aria-hidden="true"></i>
                  <label> Tickers </label>
                  
                </a>
              </li>
              <li class="nav-item <?php if(\Request::is('admin/messages*')){ echo 'active'; } ?>">
                <a class="nav-link" href="/admin/messages">  
                  <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg> -->
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <label> SMS Templates </label>
                  </a>
              </li>
              <li class="nav-item <?php if(\Request::is('admin/notifications*')){ echo 'active'; } ?>">
                <a class="nav-link" href="/admin/notifications/create">  
                  <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg> -->
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <label> Notification </label>
                  </a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-vote-yea" aria-hidden="true"></i>  <label> Election </label>
                  </a>
                  <div class="dropdown-menu  <?php if(\Request::is('admin/election*')){ echo 'show'; } ?>" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item  <?php if(\Request::is('admin/election/postings*')){ echo 'active'; } ?>" href="/admin/election/postings">Postings</a>
                    <a class="dropdown-item  <?php if(\Request::is('admin/election/nominees*')){ echo 'active'; } ?>" href="/admin/election/nominees">Nominees</a>
                    <a class="dropdown-item" href="#">Settings</a>
                  </div>
                </li>
             
              
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Last quarter
                </a>
              </li>
              
              
            </ul>
          </div>
         
        </nav>
    
    







































</nav>

    </nav>
    <style>
    .user-cls{
        color:white;
        text-align:center;
    }
    </style>

    <script>
        $(document).ready(function () {
            $('.child-nav').each(function () {
                if ($(this).hasClass('active')) {
                    $(this).parent().removeClass('collapse');
                }
            });
        });

        // $('.collapse').collapse();
        // $('.collapse1').collapse();
        // $('.collapsemnfst').collapse();

    </script>


