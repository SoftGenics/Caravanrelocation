
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap');

        html,
        body,
        .intro {
            height: 100%;
        }

        .form-hide-pop {
            position: fixed;
            top: 30%;
            left: 20%;
            z-index: 100;
            width: 1200px;
        }

        @media screen and (min-width:786px) {
            .form-hide-pop {
                width: 100%;
                top: 10%;
                left: 30%;
            }
        }

        table td,
        table th {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            min-width: 200px;
            max-width: 200px;
            color: #ffffff;
            padding: 15px !important;
            font-size: 20px !important;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif !important;
            font-weight: 400 !important;
        }

        tbody td {
            font-weight: 500;
            color: #999999;
        }

        .view {
            color: #666666;
            color: #198754 !important;
            width: 50px !important;
        }

        .search-heading {
            font-size: 23px !important;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif !important;
            font-weight: 400 !important;
            border: none !important;
        }

        .search {
            color: #fff !important;
        }

        .details-heading {
            padding-right: 40px !important;
        }

        .end-button {
            font-size: 20px !important;
        }

        .nav-pills>li.active>a,
        .nav-pills>li.active>a:hover,
        .nav-pills>li.active>a:focus {
            color: #fff;
            background-color: #198754;
        }
    </style>

@extends ('layouts.user')
@section('content')
<div class="page-wrapper">
  @if(Session::has('users'))  


  @php
  $users =Session::get('users');  
  $id=$users['id'];
  $arequirement=\App\Models\srequirement::all();
   $myrequirement=count(\App\Models\srequirement::where('user_id',$id)->get())/count($arequirement)*100;
  @endphp


  @else
  @include('pages.signin')
  @endif
  
          
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">All posts</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">All posts</h1> 
                    </div>
                  
                </div>
            </div>
           
            <div class="container-fluid">
              <!--<div class="row">-->
              <!--  <div class="col-lg-3 col-md-6">-->
              <!--    <div class="card">-->
              <!--      <div class="card-body">-->
              <!--        <div class="d-flex align-items-center mb-3">-->
              <!--          <div>-->
              <!--            <h3>{{$myrequirement }}%</h3>-->
              <!--            <h6 class="card-subtitle">Total Posts</h6>-->
              <!--          </div>-->
              <!--          <div class="ms-auto">-->
              <!--            <span class="text-success display-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box feather-xl"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></span>-->
              <!--          </div>-->
              <!--        </div>-->
              <!--        <div class="progress">-->
              <!--          <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--  <div class="col-lg-3 col-md-6">-->
              <!--    <div class="card">-->
              <!--      <div class="card-body">-->
              <!--        <div class="d-flex align-items-center mb-3">-->
              <!--          <div>-->
              <!--            <h3>40%</h3>-->
              <!--            <h6 class="card-subtitle">Pending Posts</h6>-->
              <!--          </div>-->
              <!--          <div class="ms-auto">-->
              <!--            <span class="text-info display-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cast feather-xl"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2" y2="20"></line></svg></span>-->
              <!--          </div>-->
              <!--        </div>-->
              <!--        <div class="progress">-->
              <!--          <div class="progress-bar bg-info" role="progressbar" style="width: 40%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--  <div class="col-lg-3 col-md-6">-->
              <!--    <div class="card">-->
              <!--      <div class="card-body">-->
              <!--        <div class="row">-->
              <!--          <div class="col-12">-->
              <!--            <div class="d-flex align-items-center mb-3">-->
              <!--              <div>-->
              <!--                <h3>56%</h3>-->
              <!--                <h6 class="card-subtitle">Found posts</h6>-->
              <!--              </div>-->
              <!--              <div class="ms-auto">-->
              <!--                <span class="text-primary display-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard feather-xl"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg></span>-->
              <!--              </div>-->
              <!--            </div>-->
              <!--          </div>-->
              <!--          <div class="col-12">-->
              <!--            <div class="progress">-->
              <!--              <div class="progress-bar bg-primary" role="progressbar" style="width: 56%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
              <!--            </div>-->
              <!--          </div>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--  <div class="col-lg-3 col-md-6">-->
              <!--    <div class="card">-->
              <!--      <div class="card-body">-->
              <!--        <div class="row">-->
              <!--          <div class="col-12">-->
              <!--            <div class="d-flex align-items-center mb-3">-->
              <!--              <div>-->
              <!--                <h3>26%</h3>-->
              <!--                <h6 class="card-subtitle">unverified posts</h6>-->
              <!--              </div>-->
              <!--              <div class="ms-auto">-->
              <!--                <span class="text-danger display-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy feather-xl"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></span>-->
              <!--              </div>-->
              <!--            </div>-->
              <!--          </div>-->
              <!--          <div class="col-12">-->
              <!--            <div class="progress">-->
              <!--              <div class="progress-bar bg-danger" role="progressbar" style="width: 26%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
              <!--            </div>-->
              <!--          </div>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->

              {{-- posts All --}}

                <div class="row">
                    <!-- Column -->
                    <!-- searching form-->
                    <div>
                       <button type="button" class="fw-bolder search-heading text-left">Filter
                        <i class="fa fa-filter" style="font-size:28px;color:rgb(16, 150, 108)"></i>
                    </button> 
                    </div>

                    <div id="show-hide-form">
                        <form class="row form-group mr-3" action="" style="background-color: #999999; padding:10px">
                            <div class="col-3">
                                <input type="search" class="form-control" name="s_name" id=""
                                    aria-describedby="helpId" placeholder="Enter your Name">
                            </div>
                            <div class="col-3">
                                <select type="search" class="form-control" name="mode" id=""
                                    aria-describedby="helpId" placeholder="Select your Mode">
                                     <option>Select Mode</option>
                                    <option>Online</option>
                                     <option>offline</option>
                                    </select>
                            </div>

                            <div class="col-2">
                                <input type="search" class="form-control" name="subject" id=""
                                    aria-describedby="helpId" placeholder="Enter your Subject">
                            </div>

                            <div class="col-2">
                                <input type="search" class="form-control" name="pincode" id=""
                                    aria-describedby="helpId" placeholder="Enter your Pincode">
                            </div>

                            <div class="col-2">
                                <input type="search" class="form-control" name="city" id=""
                                    aria-describedby="helpId" placeholder="Enter your City">
                            </div>

                            <div class="col-2 mt-1">
                                <button type="submit" id="helpId" class="form-text text-muted btn btn-info"
                                    style="margin-left:6px;">Search Details</button>
                            </div>
                        </form>
                    </div>

                    <!--end searching form-->
 

                    <div class="row justify-content-center"> <!-- table form --> 
                        <div class="">
                            <div class="table-responsive bg-white" data-mdb-perfect-scrollbar="true"
                                style="position: relative; height: 445px; width:100%;">

                                <table class="table">
                                    <thead style="background:#198754;">
                                        <tr>
                                          
                                            <th scope="col" style="color:fff;">Name</th>
                                            <th scope="col" style="color:fff;">Date</th>
                                            <th scope="col" style="color:fff;">Rate</th>
                                            <th scope="col" style="color:fff;">Pincode</th>
                                            <th scope="col" style="color:fff;">Class</th>
                                            <th scope="col" style="color:fff;">City</th>
                                            <th scope="col" style="color:fff;">Segment</th>
                                            <th scope="col" style="color:fff;">Mode</th>
                                             <th scope="col" style="color:fff;">Action</th>
                                        </tr>
                                    </thead>
                                    @php
                                        if (isset($infomation)) {
                                            print_r($infomation);
                                        }
                                        
                                    @endphp

                                    @foreach ($persanal as $item)
                                        <tbody>
                                            <tr>
                                                
                                                <th scope="row" style="color: #666666;">{{ $item['s_name'] }}</th>
                                              
                                                <td>{{ $item['date'] }}</td>
                                                <td>{{ $item['rate'] }}</td>
                                                <td>{{ $item['pincode'] }}</td>
                                                <td>{{ $item['class'] }}</td>
                                                <td>{{ $item['city'] }}</td>
                                                <td>{{ $item['subject'] }}</td>
                                                <td>{{ $item['mode'] }}</td>
                                                <td><form class="float-right m-0" method="post" action="deleterequirement/{{$item['id']}}">
                                        @method('delete')
                                        @csrf
                                        <button class="dropdown-item" href="deleterequirement/{{ $item['id'] }}">Delete</button>
                                    </form></td> 
                                            </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--end table form -->

                      <div class="resize-triggers"><div class="expand-trigger">  </div><div class="contract-trigger"></div></div></div>
                    </div>
                  </div>
                </div>
            </div>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <script>
            $(document).ready(function(){
                $("#show-hide-form").hide(1000);
              $(".search-heading").click(function(){
                $("#show-hide-form").toggle(2000);
              });
            });
            </script>
            @stop