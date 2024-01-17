

<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
      
         <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>  
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">   
 
@if(Session::has('users'))  


@php
$users =Session::get('users');
$time =Session::get('sTime');
$user_id=$users->id;
 $image=\App\Models\Profile_pics::where('user_id',  $user_id)->first();
if($users['category']==2 || $users['category']==3){
    $cat=2;$disp="hierarchy1";$cv="h2name";
}
else{
   $cat=1;$disp="hierarchy2";$cv="h1name";
}
//category 2 for teachers and 3 for employers
//if category 2 0r 3 disp will be from heirachy 1
//Blog::
$id=$users['id'];
@endphp 
@if(!$users['category']){
    @include('pages.categories')
}
@endif
@else
@include('pages.signin')
@endif

 
              
@extends ('layouts.user')
@section('content')


<div class="page-wrapper">
   
         
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Dashboard </li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Dashboard </h1> 
                        
                        @include('sweet::alert')
                    </div>
                    <div class="col-6">
                        
                    </div>
                </div>
            </div>
           
            <div class="container-fluid">
    
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body text-center">
                              <div class=" mb-3 mt-3">
                                @if(isset($image))
                                    
                                    <img src="https://picruit.com/public/{{$image['image']}}" id="imgPreview" alt="pic" style="
                                    height: 150px;
                                    width: 150px;"
                                        class="rounded-circle" width="150" />
                                    
                                    @else
                                    
                                        <img src="https://picruit.com/public/images/profile.webp" id="imgPreview" alt="pic" style="
                                        height: 150px;
                                        width: 150px;"
                                            class="rounded-circle" width="150" />
                                            @endif
                                {{-- <h4 class="mt-3 mb-0">tutor or institution</h4> --}}
                              <br>
                                <a href="mailto:danielkristeen@gmail.com">{{$users['email']}}</a>
                                {{$time}}
                              </div>
                             
                            
                              
                              
                            </div>
                           
                          </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                @if($users['category']==1)
                                <h4 class="card-title">Teachers</h4>
                               @elseif($users['category']==2)
                               <h4 class="card-title">Students</h4>
                               @elseif($users['category']==3)
                               
                               <h4 class="card-title">Employees</h4>
                               @else
                               {{$users['category']}}
                               <h4 class="card-title">Employers</h4>
                               @endif
                            </div>
                          
                            <div class="comment-widgets scrollable">
                                @foreach(\App\Models\Linking::where($disp, $id)->get() as $userz)
                               

                                       
                                       
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><img src="adminlte/assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">{{$userz[$cv]}}</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">{{$userz['created_at']}}</span> <span class="badge bg-primary">Student</span> <span class="action-icons">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                              



@endforeach
                                <!-- Comment Row -->
                            
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
                     

        
    

            
          
@stop