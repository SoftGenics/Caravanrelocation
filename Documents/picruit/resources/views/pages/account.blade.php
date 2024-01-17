@if(Session::has('users'))  


@php
$users =Session::get('users');  

@endphp 

@else
@include('pages.signin')
@endif



@extends ('layouts.user')
@section('content')
<style>
.shadow-primary-lg {
    box-shadow: 0 0 50px rgb(55 125 255 / 40%) !important;
}
.bg-primary {
    background-color: #377dff !important;
}
.text-white-70 {
    color: rgba(255, 255, 255, 0.7);
}
.h6{
        font-weight: 500;
        font-size:1.5rem;
}
.font-weight-medium {
    font-weight: 500 !important;
}
.font-size-3 {
    font-size: 2rem;
}
.rounds{
        border-radius: 17px!important;
}

 .overlap{
           position: fixed; /* Sit on top of the page content */
  display: none; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 100; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
        }
        .msgbox{
            position:fixed;
            background-color:white;
            text-align:center;
            border:2px solid black;
            padding:10px;
            top: 30%;
  left: 30%;
  
            box-shadow:4px;
        }
</style>
    <div class="container page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Account</h1> 
                    </div>
                    
                </div>
            </div>
              <!-- End Title -->

              <!-- Clipboard Input -->
          <div class="col-md-6 col-lg-4 pl-2">
            <!-- Stats -->
            <div class="bg-primary shadow-primary-lg rounds pt-4 pb-5 px-5">
              <!-- Title & Settings -->
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="h6 text-white mb-0">Total Points</h4>

                
                <!-- End Settings Dropdown -->
              </div>
              <!-- End Title & Settings -->

              <hr class="opacity-md mt-3 mb-4" style="color: white; opacity: 1;">

              <!-- Referral Info -->
              <div class="py-2">
                <div class="row">
                  <div class="col-6">
                    <div class="mb-3">
                      <span class="d-block text-white-70 font-size-1">Overall:</span>
                      <span class="align-top text-white">$</span>
                      <span class="text-white font-size-3 font-weight-medium text-lh-sm">0</span>
                    </div>
                    <span class="text-white-70 font-size-1">Monthly:</span>
                    <span class="text-white font-weight-medium font-size-1">$0</span>
                  </div>

                 
                </div>
              </div>
              <!-- End Referral Info -->
            </div>
            <!-- End Stats -->
          </div>
          
          <div class="overlap">
                                    <div class="msgbox" id="msgconfirm">
                                        <h3>Are you sure to delete blog</h3>
                                        <button id="close">Cancel</button>
                                        <input type="hidden" id="user_id"/>
                                         <button id="confirm">yes</button>
                                    </div>
                                    
                                    <div id="deletemsg" style="display:none">
                                        <h3 style="color:green">Delete successfully </h3>
                                        
                                    </div>
                                    </div>
          
          <!-- start card view-->
          <h1 style="font-style:italic; font-size:25px; font-weight:700; color:green; margin-top:20px;">See The Blogs..</h1>
           @php
              $sessionId = session('users')->id;
              $blogs = App\Models\Blog::where('user_id', $sessionId)->get();
              @endphp
          <div class="row">
            <div class="col-md-12 col-lg-8 ">
                @foreach ($blogs as $item)
                     <div class="card-body shadow d-flex flex-column flex-md-row justify-content-around align-items-center" style="padding:10px; margin:10px; ">
                        <img src="https://picruit.com/public/{{$item['mediafile']}}" style="width:500px; height:300px; border-radius:5px;"/>
                        <div class="card-heading" style="width:200px;">
                        <h1>{!! strip_tags(html_entity_decode(substr($item['title'], 0, 60) . '...')) !!}</h1>
                        <p>{!! strip_tags(html_entity_decode(substr($item['body'], 0, 60) . '...')) !!}</p>
                        <buttom class="btn btn-danger" id="btn-delete" onclick="blogdelete({{$item['id']}})">Delete</buttom>
                         <a href="/edit-blogs-form/{{ $item['id'] }}" class="btn btn-info">Edit</a>
                        </div>
                        
                    </div>       
                @endforeach
                
            </div>
        </div>
        <!--end card view-->
        
        
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="module" src="node_modules/spin.js/spin.js"></script>

    <script>
        function  blogdelete(data) {
           
            
            let id=data;
            $('.overlap').show();
           
            
            $("#confirm").click(function(){
              confirm(id);   
            });
            $("#close").click(function(){
                 $(".overlap").hide();
            });
           
        }
            
        function confirm(id){
            console.log(id);
            
          $.ajax({
                url: 'deleteblog/' + id, //this is your uri
                type: 'get', //this is your metho
                dataType: 'json',
                success: function(response) {

                    console.log(response);
                    $(".msgbox").hide();

                    location.reload(true);
                   $("#deletemsg").show();
                     $(".overlap").hide(3000);
                }
            });
        }
        
       


       

       
    </script>

    
   
        
		
@stop