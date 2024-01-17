<head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>  
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css"> </head>
  
   @include('sweet::alert')

@extends ('layouts.user')
@section('content')
@if(Session::has('users'))  


@php
$users =Session::get('users');  
if($users['category']==1){
    $cat=2;
}
else{
   $cat=1;
}
@endphp 
@if(!$users['category']){
    @include('pages.categories')
}
@endif
@else
@include('pages.signin')
@endif

 



<div class="page-wrapper">
  
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Ticket</li>
                            </ol>
                          </nav>
                          
                        <h1 class="mb-0 fw-bold">Create Ticket</h1> 
                    </div>
                    
                </div>
            </div>
           <div class="container-fluid">
              
         <div class="row">
        
                  <div class="card">
                <div class="card-body">
                  <h4 class="mb-3">Write a query</h4>
                  <form method="post" action="{{route('ticket-add')}}">
                    @csrf
                                  
                                   <input type="hidden" name="user_id" value="{{$users['id'] }}" />
                     <div class="card">
              <textarea id="summernote" name="ticket" ></textarea>
             </div>
                   <button type="submit" class="mt-3 btn waves-effect waves-light btn-success">
                     Send
                   </button>
                   {{-- <button type="button" class="mt-3 btn waves-effect waves-light btn-info">
                     Send &amp; close
                   </button> --}}
                 </form>
                </div>
              </div>
            </div>
              <div class="card">
                <div class="card-body">
                    
                  <h4 class="card-title">Ticket Replies</h4>
                  @if($data)
                  @foreach($data as $msg )
                  <ul class="list-unstyled mt-5">
                    <li class="d-flex align-items-start">
                      
                      <div class="media-body">
                           <h5 class="mt-0 mb-1">{{$msg->ticket}}</h5>
                        <h5 class="mt-0 mb-2">{{$msg->reply_name}}:{{$msg->reply?$msg->reply:"No Reply "}}</h5>
                       
                      </div>
                    </li>
                    <hr>
                    </ul>
                    @endforeach
                    
                    @else
                    <ul class="list-unstyled mt-5">
                    <li class="d-flex align-items-start">
                      <img class="me-3 rounded" src="../../assets/images/users/2.jpg" width="60" alt="Generic placeholder image">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1">Empty </h5>
                      
                      </div>
                    </li>
                    <hr>
                    </ul>
                    @endif
                </div>
              </div>
          
            
          </div>
          </div>
          
</div>
  
            @stop