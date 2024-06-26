

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        <!-- Fonts -->      
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('assets/css/login.css')}}" type="text/css"/>
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>
    </head>
    <body>
   <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-5">
   <div class="card">
     <h2 class="card-title text-center">@lang('messages.account.register')</h2>
      <div class="card-body py-md-4">
       <form _lpchecked="1"  action="{{ route('createAccount') }}" method="POST">
       @csrf
          <div class="form-group">
              <input type="text" id="name" class="form-control"   name="firstname" placeholder="first name" required autofocus>
                                  
        </div>
        <div class="form-group">
              <input type="text" id="name" class="form-control" name="lastname" placeholder="last name" required autofocus>
                                
        </div>
        <div class="form-group">
           <input type="text" id="email" class="form-control"  placeholder="Email"  name="email" required autofocus>
                              
                                  </div>
                            
                          
   <div class="form-group">

    <input type="password" id="password" class="form-control"placeholder="Password"  name="password" required>
                               
   </div>
   {{-- <div class="form-group">

    <input type="password" id="repassword" class="form-control"value="{{$data['password']??''}}"  placeholder="Re_Password"  name="repassword" required>
                               
   </div> --}}
   {{-- <div class="form-group">
                    <select class="form-select" data-label="city" id="city" name="city">
                        @foreach($data['city'] as $city)
                                @if(isset($data['cities']) && $data['cities'] == $city->id)
                        <option>select name</option>
                        <option value="{{$city->id}}" selected>{{$city->name}}</option>
                        @else
                        <option value="{{$city->id}}" selected>{{$city->name}}</option>
                        @endif
                        @endforeach
                    </select>
        </div>
            <br>
 
        <div class="form-group">
                        <select class="form-select" data-label="district" id="district" name="district">
                            <option> District name</option>
                            
                                @if(isset($data['district_name']))
                            <option value="{{$data['district']}}" selected>{{$data['district_name']}}</option>
                                @endif 
                        </select>                                  
                    </div> <br> --}}
    <div class="new-account mt-3">
                                <p>@lang('messages.account.account')</p>
                            </div>
                            
   <div class="d-flex flex-row align-items-center justify-content-between">
      <a href="{{route('login')}}">Login</a>
                                <button type="submit" class="btn btn-primary">@lang('messages.account.continue')</button>
          </div>
       </form>
     </div>
  </div>
</div>
</div>
</div>
    </body>
    </html>
       {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">


       <script src="{{asset('assets/js/Address.js')}}"></script>
    {{-- <script>
  let password = document.getElementById('password');
  let strengthBadge = document.getElementById('StrengthDisp');
let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})');
</script> --}}
{{-- <script>
var addressUrl = '{{route('district')}}';
 $(document).ready(function(){
            $('#city').on('change', function () {
                var idCity = $('#city').val();
                 if(idCity != ''){
                var idDistrict = $('#district').val();
               $.ajax({
            url: addressUrl,
            method: "GET",
            data: {city_id:idCity},
            success: function(data){
                var district = data.district;
                var options = '';
                options += '<option>' +  + '</option>';
                for(var i = 0; i < district.length; i++){
                    var district_id = district[i].id;
                    var district_name = district[i].name;
                    if(district_id == idDistrict){
                        options += '<option value="'+district_id+'" selected>'+district_name+'</option>';
                    } else {
                        options += '<option value="'+district_id+'">'+district_name+'</option>';
                    }
                }
                $('#district').html(options);
            }
        });
    }
   
      });
        });
 </script> --}}
