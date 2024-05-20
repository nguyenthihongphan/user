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
                 <div class="col-sm-4"><b>@lang('messages.listUsers')</b></div>
                  <div class="col-sm-8 row">
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-light nav-link" ><a style="text-decoration: none;" href=" {{route('addUser')}}"><i class="fa fa-plus"></i> Add New user </a></button>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-light nav-link" ><a style="text-decoration: none;" href=" {{route('search')}}"><i class="fa fa-search"></i> Search </a></button>
                    </div>
                    </div>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            @lang('messages.avatar')
                          </th>
                           <th>
                            @lang('messages.firstname')
                          </th>
                          <th>
                            @lang('messages.lastname')
                          </th>
                          <th>
                            @lang('messages.id')
                          </th>
                          <th>
                            @lang('messages.email')
                          </th>
                          <th>
                            @lang('messages.phone')
                          </th>
                          <th>
                            @lang('messages.information')
                          </th>
                          <th>
                            @lang('messages.address')
                          </th>
                          <th>
                            @lang('messages.birth')
                          </th>
                          
                          <th>
                            @lang('messages.role')
                          </th>
                          <th>
                            @lang('messages.action')
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($userList as $key=>$items )                                             
                        <tr>
                          <td class="py-1">
                            <img src="{{asset('storage/images/'.$items->avatar)}}" width="50px" height="50px">
                          </td>
                          <td>
                            {{$items->firstname}}
                          </td>                          
                            <td>
                            {{$items->lastname}}
                          </td>       
                          <td>
                            {{$items->id}}
                          </td>
                          <td>
                           {{$items->email}}
                          </td>
                           <td>
                            {{$items->phone}}
                          </td>
                          <td>
                            {{$items->information}}
                          </td>
                           <td>
                            {{$items->address}}
                          </td>
                           <td> 
                            {{$items->birth}}
                          </td>
                          <td>
                            {{$items->user_flg}}
                          </td>
                          <td>
                          	{{-- <a href="{{route('show',$items->id)}}" class="show" ><i class="material-icons remove_red_eye"></i></a> --}}
							<a href="{{route('editUser',$items->id)}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						 @csrf
                  @method('DELETE')
              <a href="{{ route('deleteUser', $items->id)}}" type="submit" class="delete" ><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    
                    </table>
                     {!! $userList->withQueryString()->links('pagination::bootstrap-5') !!}
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