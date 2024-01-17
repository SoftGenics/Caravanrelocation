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

 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">


<div class="page-wrapper">
  @include('sweet::alert')
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
                  <ul class="list-unstyled mt-5">
                    <li class="d-flex align-items-start">
                      <img class="me-3 rounded" src="../../assets/images/users/2.jpg" width="60" alt="Generic placeholder image">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1">User Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel
                        metus scelerisque ante sollicitudin. Cras purus odio,
                        vestibulum in vulputate at, tempus viverra turpis. Fusce
                        condimentum nunc ac nisi vulputate fringilla. Donec
                        lacinia congue felis in faucibus.
                      </div>
                    </li>
                    <hr>
                    <li class="d-flex align-items-start my-4">
                      <img class="me-3 rounded" src="../../assets/images/users/1.jpg" width="60" alt="Generic placeholder image">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1">Agent Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel
                        metus scelerisque ante sollicitudin. Cras purus odio,
                        vestibulum in vulputate at, tempus viverra turpis. Fusce
                        condimentum nunc ac nisi vulputate fringilla. Donec
                        lacinia congue felis in faucibus.
                      </div>
                    </li>
                    <hr>
                    <li class="d-flex align-items-start">
                      <img class="me-3 rounded" src="../../assets/images/users/2.jpg" width="60" alt="Generic placeholder image">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1">User Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel
                        metus scelerisque ante sollicitudin. Cras purus odio,
                        vestibulum in vulputate at, tempus viverra turpis. Fusce
                        condimentum nunc ac nisi vulputate fringilla. Donec
                        lacinia congue felis in faucibus.
                      </div>
                    </li>
                    <hr>
                    <li class="d-flex align-items-start">
                      <img class="me-3 rounded" src="../../assets/images/users/2.jpg" width="60" alt="Generic placeholder image">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1">User Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel
                        metus scelerisque ante sollicitudin. Cras purus odio,
                        vestibulum in vulputate at, tempus viverra turpis. Fusce
                        condimentum nunc ac nisi vulputate fringilla. Donec
                        lacinia congue felis in faucibus.
                      </div>
                    </li>
                    <hr>
                    <li class="d-flex align-items-start my-4">
                      <img class="me-3 rounded" src="../../assets/images/users/1.jpg" width="60" alt="Generic placeholder image">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1">Agent Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel
                        metus scelerisque ante sollicitudin. Cras purus odio,
                        vestibulum in vulputate at, tempus viverra turpis. Fusce
                        condimentum nunc ac nisi vulputate fringilla. Donec
                        lacinia congue felis in faucibus.
                      </div>
                    </li>
                    <hr>
                    <li class="d-flex align-items-start">
                      <img class="me-3 rounded" src="../../assets/images/users/2.jpg" width="60" alt="Generic placeholder image">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1">User Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel
                        metus scelerisque ante sollicitudin. Cras purus odio,
                        vestibulum in vulputate at, tempus viverra turpis. Fusce
                        condimentum nunc ac nisi vulputate fringilla. Donec
                        lacinia congue felis in faucibus.
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
          
            
          </div>
          </div>
          
</div>
  
            @stop