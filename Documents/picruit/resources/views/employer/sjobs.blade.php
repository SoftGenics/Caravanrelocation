@extends ('layouts.user')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .jsgrid-pager-current-page, .jsgrid-pager-nav-button a, .jsgrid-pager-page a {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    display: inline-block;
    min-width: 1.5em;
    padding: 0.5em 1em;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    color: #67757c;
    border: 1px solid #ddd;
    }
    
  </style>
  @php
  $users =Session::get('users');   
$id= $users->id;
  @endphp
  <div class="page-wrapper">
          
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                      <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                      <li class="breadcrumb-item active" aria-current="page">Hired employees</li>
                    </ol>
                  </nav>
                <h1 class="mb-0 fw-bold">Hired employees</h1> 
            </div>
            
        </div>
    </div>
   
    <div class="container-fluid">
       <div class="row">
         <header class="py-5 bg-light border-bottom mb-4 fo" style="margin-top: 50px; ">
        <section class="intro">
            <div class="mask d-flex align-items-center" style=" min-height:100vh">
                <div class="container-fluid mt-5">

                    <div class="text-center my-5">
                        <h1 class="fw-bolder">Welcome to Candidate Home!</h1>
                        <p class="lead mb-0">Pircuit Candidate </p>
                    </div>
                    <!-- searching form-->
                    <button type="button" class="fw-bolder search-heading">Fillter
                        <i class="fa fa-filter" style="font-size:28px;color:rgb(16, 150, 108) "></i>
                    </button>

                    <div id="show-hide-form">
                        <form class="row form-group mr-3" action="" style="background-color: #999999; padding:10px">
                            <div class="col-3">
                                <input type="search" class="form-control" name="apply_id" id=""
                                    aria-describedby="helpId" placeholder="Enter your apply_id">
                            </div>
                            <div class="col-3">
                                <input type="search" class="form-control" name="job_id" id=""
                                    aria-describedby="helpId" placeholder="Enter your job_id">
                            </div>

                            <div class="col-2">
                                <input type="search" class="form-control" name="jobpost_id" id=""
                                    aria-describedby="helpId" placeholder="Enter your jobpost_id">
                            </div>

                            <div class="col-2">
                                <input type="search" class="form-control" name="for" id=""
                                    aria-describedby="helpId" placeholder="Enter your for">
                            </div>

                           

                            <div class="col-2 mt-1">
                                <button type="submit" id="helpId" class="form-text text-muted btn btn-info"
                                    style="margin-left:6px;">Search Details</button>
                            </div>
                        </form>
                    </div>
                    <!--end searching form-->

                   
  
                     <!-- table form -->
                    <div class="row justify-content-center">
                        <div class="">
                            <div class="table-responsive bg-white" data-mdb-perfect-scrollbar="true"
                                style="position: relative; height: 445px; width:100%;">

                                <table class="table">
                                    <thead style="background:#198754;">
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Resume</th>
                                            <th scope="col">Condidate Name</th>
                                            
                                            <th scope="col">Job_id</th>
                                           
                                            <th scope="col">Condidate View</th>
                                            <th scope="col">Apply For</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>


                                    @foreach ($candidate as $item)
                                    @if($item->apply_status==true && $item->user_id==$id )
                                      @php 
                                    $con= \App\Models\jobshikharprofile::where('user_id',$item->apply_id)->first();
                                    @endphp
                                    @if($con)
                                        <tbody>
                                            <tr class="mt-5">
                                                <td><i class="fa fa-check" style="font-size:24px; color:#198754"></i></td>
                                                <td><i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i>
      <a href="https://picruit.com/public/{{$item->resume}}">Download</a> Resume</p>
    </td>
                                                <td>{{ $con->name }}</td>
                                                <td>{{ $item->job_id }}</td>
                                                <td>{{ $item->body }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->apply_status==1?"True":"False" }}</td>
                                                @if( $item->approve==false)
                                                <td><a href="/approve/{{ $item->id }}">Approve</a></td>
                                                @else
                                                <td><a>Approved</a></td>
                                                @endif
                                                <td><a href="/reject/{{ $item->id }}">Reject</a></td>
                                            </tr>

                                        </tbody>
                                        @endif
                                        @endif
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--end table form -->

                </div>
            </div>

        </section>

    </header>

       </div>
  
        
    </div>
  
</div>


<script>
  

    </script>
    @stop
          

