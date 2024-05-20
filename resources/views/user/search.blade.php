
<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="_token" content="{{ csrf_token() }}">
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
          <form class="form-horizontal" id="validation"  action="{{ route('search') }}" enctype="multipart/form-data" >
            
              <div class="row">
              <div class="col-md-6 row ">
                <div class="col-md-2">
                     <label class="form-label ">Search</label>
                </div>
                <div class="col-md-7">
                  <div class="input-group input-group-outline ">                
              <input name="search" type="text" class="form-control " id="search" placeholder="search">
                </div>
             </div>
              </div>
              <div class="col-md-6 row ">
              <div class="col-md-2">
                     <label class="form-label ">Email</label>
                </div>
               <div class="col-md-7">
                  <div class="input-group input-group-outline ">                
              <input name="email" type="email" class="form-control " value="{{$data['email']}}" id="search" placeholder="email">
                </div>
            </div>
            </div><br> <br>
            {{--  --}}
            <div class="row">
              <div class="col-md-6 row">
                <div class="col-md-2">
                     <label class="form-label ">Birth</label>
                </div>
                <div class="col-md-4">
                  <div class="input-group input-group-outline ">                
              <input name="birth" type="date" class="form-control " value="{{$data['birth']}}" id="birth" placeholder="">
                </div>
             </div>
              </div>
              <div class="col-md-6 row ">
              <div class="col-md-2">
                     <label class="form-label ">Role</label>
                </div>
               <div class="col-md-7">
                  <div class="input-group input-group-outline ">  
                  <div class="form-check">              
              <input name="user_flg" type="radio"class=""  id="user_flg" @checked('1'== $data['user_flg']) value="1" placeholder="">Admin
              <input name="user_flg" type="radio" id="user_flg" value="0"@checked('0'== $data['user_flg'])  placeholder="">User
</div>
                </div>
            </div>
            </div><br><br>
            {{--  --}}
             <div class="row">
              <div class="col-md-6 row">
                <div class="col-md-2">
                     <label class="form-label ">Phone</label>
                </div>
                <div class="col-md-4">
                  <div class="input-group input-group-outline ">                
              <input name="phone" type="phone" class="form-control "value="{{$data['phone']}}" id="phone" placeholder="">
                </div>
             </div>
             </div>
             <div class="col-md-6 row">
                 <div class="input-group input-group-outline ">     
                  @lang('messages.orderFrom') <input type="date" name="orderFrom" id="orderFrom" value="{{$data['orderFrom']}}"  class="input-group col-md-2 form-control " />
                          @lang('messages.orderTo') <input type="date" name="orderTo" id="orderTo" value="{{$data['orderTo']}}" class=" col-md-3 form-control"  /><br>
                       </div>
                       </div>
             </div><br><br>
             {{--  --}}
             <div class="row">
              <div class="col-md-12" style="margin:left">
                  <div class="input-group input-group-outline">       
                  <button type="submit" name="search" class="btn btn-info " id="submit">@lang('messages.search')</button>&ensp;
                    <button type="button" id="btnClear" style=" text-decoration: none"  class="btn btn-info"><a style=" text-decoration: none; color:white" href="{{route('search')}}">@lang('messages.clear')</a></button>&ensp;
                    <button type="button" class="btn btn-success " id="btnExportPDF"> @lang('messages.exportPDF')</button> &ensp;
                    <button type="button" class="btn btn-success " name='' id="btnExportCSV"> Export</button>  &ensp;           
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#importModal"> @lang('messages.import')</button>&ensp;
                         
                </div>
             </div>
             </div>
</div>          
                   <div class="table-responsive">
                    <table class="table table-striped" id="order_table">
                      <thead>
                        <tr>
                          <th>@lang('messages.id')</th>
                           <th>@lang('messages.name')</th>
                          <th>
                            @lang('messages.email')
                          </th>
                          <th>
                            @lang('messages.phone')
                          </th>
                          <th>
                           @lang('messages.birth')
                          </th>
                         
                          <th>
                            @lang('messages.role')
                          </th>
                           {{-- <th>@lang('messages.information')</th>   --}}
                           
                          <th>@lang('messages.lastOrder')</th>                          
                        </tr>
                      </thead>
                      <tbody>
                        @if (!empty($users) && $users->count())
                      @foreach ($users as $items )                                             
                        <tr>
                          <td>
                            <a href="{{route('editUser',$items->id)}}" style=" text-decoration: none"> {{$items->id}}<a>
                          </td>
                          <td>
                            {{$items->firstname}}  {{$items->lastname}}
                          </td>                               
                          <td>
                           {{$items->email}}
                          </td>
                           <td>
                            {{$items->phone}}
                          </td>
                          <td>
                             {{$items->birth}}
                          </td>                         
                          @if ($items->user_flg == 0)
                                        <td>@lang('messages.user')</td>
                                    @else
                                        <td>@lang('messages.admin')</td>
                          @endif  
                            
                             {{--@php
                                       $order = $items->order->last()->created_at ?? '';
                                    @endphp
                                    <td>{{$order}}</td> --}}
                                    @php
                                        $order=$items->order->last()->created_at??'';
                                    @endphp
                                    <td>{{$order}}</td>
                        @endforeach
                         @else
                            <tr>
                                <td colspan="9" id="center">not for found</td>
                            </tr>
                        @endif

                      </tbody>
                    
                    </table>               
                     {{-- {!! $users->links('pagination::bootstrap-5') !!} --}}
                  </div> 
   </form>              
{{-- Modal Import --}}
<div class ="modal fade" id="importModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="importModal">@lang('messages.import')</h5>
      <button class="btn-close" type="button" data-bs-dimiss="modal" aria-label="Close"></button>
    </div>
     <form action="{{route('importUser')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="modal-body">
        <div class="form-group">
        <input type="file" class="form-control" name="file" id="file" required>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('messages.cancel')</button>
        <button type="submit" class="btn btn-primary">@lang('messages.SaveChanges')</button>
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
<link href="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script src="{{asset('assets/css/js/validate.js')}}"></script>
{{-- <script src="<%=ResolveUrl("~/Scripts/jquery-1.3.2.js")%>" type="text/javascript"></script> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script> 

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js" integrity="sha512-csNcFYJniKjJxRWRV1R7fvnXrycHP6qDR21mgz1ZP55xY5d+aHLfo9/FcGDQLfn2IfngbAHd8LdfsagcCqgTcQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

</html>
{{-- Ajax  ExportCSV--}}
<script type="text/javascript">
  $('#btnExportCSV').click(function(){
        var email = $('input[name=email]').val();
        var phone = $('input[name=phone]').val();
        var birth = $('input[name=birth]').val();
        var role = $('input[name=user_flg]:checked').val();
        var orderFrom = $('input[name=orderFrom]').val();
        var orderTo = $('input[name=orderTo]').val();
  if(role == undefined){
    role= null;
  }
  var data={
    email:email,
    phone:phone,
    birth:birth,
    user_flg:role,
    orderFrom:orderFrom,
    orderTo:orderTo,

  }
  $.ajaxSetup({
    headers:{
                'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
    }
  });
    $.ajax({
      method:"GET",
      url:"{{route('exportCSV')}}",
      data:data,
      success: function(data){
        var link=document.createElement('a');
        var binaryData=[];
        binaryData.push(data);
        link.href = window.URL.createObjectURL(new Blob(binaryData,{type:"application/zip"}))
        link.download=`users.csv`;
        link.click()
        swal("Well","Export success","success");
      },
      error: function(data){
        swal("Fail","Something went wrong","error");

      }
      
    });
  });
</script>

