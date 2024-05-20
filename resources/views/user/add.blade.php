<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">

<title>
  
   index 
</title>
<!--     Fonts and icons     -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->
<link id="pagestyle" href="{{asset('assets/css/material-dashboard.css')}}" rel="stylesheet" />
  </head>
  <body class="g-sidenav-show  bg-gray-100">   
      <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
      <img src="{{asset('assets/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">phan</span>
    </a>
  </div>


  <hr class="horizontal light mt-0 mb-2">

  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      

      
        

          

          
  
<li class="nav-item">
  <a class="nav-link text-white " href="{{route('admin.index')}}">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">dashboard</i>
      </div>
    
    <span class="nav-link-text ms-1">Dashboard</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-white " href="">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">table_view</i>
      </div>
    
    <span class="nav-link-text ms-1">User</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-white " href="./billing.html">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">receipt_long</i>
      </div>
    
    <span class="nav-link-text ms-1">Product</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link text-white " href="./profile.html">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">person</i>
      </div>
    
    <span class="nav-link-text ms-1">Profile</span>
  </a>
</li>   
    </ul>
  </div>  
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
    </div>
    
  </div>
  
</aside>

      <main class="main-content border-radius-lg ">
        <!-- Navbar -->

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">index</li>
      </ol>
      <h6 class="font-weight-bolder mb-0">User/list</h6>
      
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          
          <div class="input-group input-group-outline">
            <label class="form-label">Type here...</label>
            <input type="text" class="form-control">
          </div>
          
      </div>
      <ul class="navbar-nav  justify-content-end">
        <li class="nav-item d-flex align-items-center">
          <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="https://www.creative-tim.com/builder/material?ref=navbar-dashboard">Online Builder</a>
        </li>
        <li class="nav-item d-flex align-items-center">
          <a href="{{route('login')}}" class="nav-link text-body font-weight-bold px-0">
            <i class="fa fa-user me-sm-1"></i>
            
            <span class="d-sm-inline d-none">Sign In</span>
            
          </a>
        </li>
        <li class="nav-item d-flex align-items-center">
          <a href="{{route('logout')}}" class="nav-link text-body font-weight-bold px-0">
            <i class="fa fa-user me-sm-1"></i>
            
            <span class="d-sm-inline d-none">logout</span>
            
          </a>
        </li>
        <li class="nav-item px-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0">
            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
          </a>
        </li>
        <li class="nav-item dropdown pe-2 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-bell cursor-pointer"></i>
          </a>

          <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="javascript:;">
               
                  <div class="my-auto">
                     <a href="{{route('login')}}" class="nav-link text-body font-weight-bold px-0">
            <i class="fa fa-user me-sm-1"></i>
            
            <span class="d-sm-inline d-none">Sign In</span>
            
          </a>
              
           <a href="{{route('register')}}" class="nav-link text-body font-weight-bold px-0">  
            <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none">Sign up</span>
            
          </a>
               <a href="{{route('logout')}}" class="nav-link text-body font-weight-bold px-0">
            <i class="fa fa-user me-sm-1"></i>
            
            <span class="d-sm-inline d-none">Logout</span>
            
          </a>
              
      </ul>
    </div>
  </div>
</nav>

<!-- End Navbar -->
<div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <div class="col-sm-8"><b>@lang('messages.adduser')</b></div>
                 <div>
    <br />
          <form class="form-horizontal" id="validation" method="POST" action="{{ route('store') }}" enctype="multipart/form-data" >
              @csrf
          <div class="form-group">
              <label class="control-label col-sm-2" for="firstname">@lang('messages.firstname')</label>
              <div class="col-sm-10">
              <input name="firstname" class="form-control error" id="firstname" placeholder="@lang('messages.firstname')">
              {{-- <h6 id="firstnameCheck" style="color: red;">
                        *Firstname is required
                    </h6> --}}
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="lastname">@lang('messages.lastname')</label>
              <div class="col-sm-10">
              <input class="form-control error"name="lastname" id="lastname" placeholder="@lang('messages.lastname')">
               {{-- <h6 id="lastnameCheck" style="color: red;">
                        *Lastname is required
                    </h6> --}}
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">@lang('messages.email')</label>
              <div class="col-sm-10">
              <input type="email" class="form-control error" name="email" id="email" placeholder="Email">
              {{-- <small id="emailCheck" class="form-text
                text-muted invalid-feedback">
                        Your email must be a valid email
                    </small> --}}
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="password">@lang('messages.password')</label>
              <div class="col-sm-10">
              <input type="password" class="form-control error" name="password" id="password" placeholder="@lang('messages.password')">
               {{-- <h6 id="passwordCheck" style="color: red;">
                        *Password is required
                    </h6> --}}
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="re-password">@lang('messages.repassword')</label>
              <div class="col-sm-10">
             <input type="password" class="form-control error" name="repassword" id="repassword" placeholder="@lang('messages.repassword')">
               {{-- <h6 id="repasswordCheck" style="color: red;">
                        *Please enter your correct password
                    </h6> --}}
              </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="role">@lang('messages.role')</label>
            <div class="col-sm-5">
            <select name="user_flg" class="form-control error ">
            <option value="">@lang('messages.select')</option>
                                  <option value="1">@lang('messages.admin')</option>
                                  <option value="0">@lang('messages.user')</option>
                              </select>
                              </div>
                               {{-- <h6 id="roleCheck" style="color: red;">
                        *Role is required
                    </h6> --}}
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="birth">@lang('messages.birth')</label>
              <div class="col-sm-5">
              <input type="date" class="form-control error" name="birth" id="birth" placeholder="@lang('messages.birth')">
               {{-- <h6 id="birthCheck" style="color: red;">
                        *Birth is required
                    </h6> --}}
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="address">@lang('messages.address')</label>
              <div class="col-sm-5">
              <input class="form-control error" id="address" name="address" placeholder="@lang('messages.address')">
               {{-- <h6 id="addressCheck" style="color: red;">
                        *Address is required
                    </h6> --}}
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="phone">@lang('messages.phone')</label>
              <div class="col-sm-5">
              <input class="form-control error" id="phone" type="phone" name="phone" placeholder="phone">
               {{-- <h6 id="phoneCheck" style="color: red;">
                        *Phone is required
                    </h6> --}}
              </div>
            </div>
            {{-- <div class="form-group">
              <label class="control-label col-sm-2" for="avatar">@lang('messages.avatar')</label>
              <div class="col-sm-5">
              <input type="file" class="form-control"  id="avatar"  name="avatar" placeholder="">
                <img width="50px" src="{{asset('images/')}}" height="50px">
              </div>
            </div> --}}
            <div class="form-group">
              <label class="control-label col-sm-2" for="information">@lang('messages.information')</label>
              <div class="col-sm-10">
              <textarea style="resize: none;" rows="7" cols="50" name="information" class="form-control" placeholder="@lang('messages.information')"></textarea>
               {{-- <h6 id="informationCheck" style="color: red;">
                        *Information is required
                    </h6> --}}
              </div>
            </div>
            <br>
            <br>
            <div class="form-group row">
              <div class=" col-sm-2">
                <button type="submit" class="btn btn-light"><a class="nav-link btn bnt-light">@lang('messages.adduser')</a></button>
              </div>           
            <div class=" col-sm-2">
              <button  class="btn btn-light"><a class="nav-link btn bnt-light" href="{{ route('listUser')}}">@lang('messages.cancel')</a></button>
            </div>
          </div>
        </form>
          </div>
            </div>
          </div>
        </div>
    </div>
  </div>
    </div>   
  </div>
<!--   Core JS Files   -->
<script  src="{{asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>
  </body>

</html>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script src="{{asset('assets/css/js/validate.js')}}"></script>