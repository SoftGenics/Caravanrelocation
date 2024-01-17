@extends ('layouts.user')
@section('content')
<div class="page-wrapper">
  @if(Session::has('users'))  


  @php
  $users =Session::get('users');  
  $id=$users['id'];
  $arequirement=\App\Models\srequirement::all();
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
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-3">
                        <div>
                          <h3>86%</h3>
                          <h6 class="card-subtitle">Total Posts</h6>
                        </div>
                        <div class="ms-auto">
                          <span class="text-success display-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box feather-xl"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></span>
                        </div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-3">
                        <div>
                          <h3>40%</h3>
                          <h6 class="card-subtitle">Pending Posts</h6>
                        </div>
                        <div class="ms-auto">
                          <span class="text-info display-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cast feather-xl"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2" y2="20"></line></svg></span>
                        </div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 40%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex align-items-center mb-3">
                            <div>
                              <h3>56%</h3>
                              <h6 class="card-subtitle">Found posts</h6>
                            </div>
                            <div class="ms-auto">
                              <span class="text-primary display-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard feather-xl"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 56%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex align-items-center mb-3">
                            <div>
                              <h3>26%</h3>
                              <h6 class="card-subtitle">unverified posts</h6>
                            </div>
                            <div class="ms-auto">
                              <span class="text-danger display-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy feather-xl"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 26%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              {{-- posts All --}}

                <div class="row">
                    <!-- Column -->
                  
                    <div class="row">
                      @foreach ($arequirement as $requirement)
                      @if($requirement['user_id']==$id)
                      
                      <div class="col-lg-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex align-items-start">
                              <div>
                                <h3>{{$requirement['subject']}}</h3>
                                <h6 class="card-subtitle">Teacher required</h6>
                              </div>
                              <div class="ms-auto">
                                <div class="dropdown">
                                  <a href="#" class="link" id="new" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-sm"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="new" style="">
                                    <li>
                                      <a class="dropdown-item" href="#">Pause</a>
                                    </li>
                                    <li>
                                      <form class="float-right m-0" method="post" action="deleterequirement/{{$requirement['id']}}">
                                        @method('delete')
                                        @csrf
                                        <button class="dropdown-item" href="deleterequirement/{{$requirement['id']}}">Delete</button>
                                    </form>
                                      
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                         
                          <div class="card-body">
                            <div class="d-flex flex-row align-items-center">
                              <div class="
                                  round
                                  rounded-circle
                                  text-white
                                  d-inline-block
                                  text-center
                                  bg-success
                                ">
                                <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 13px;" width="24" height="24" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                  <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z"/>
                                </svg>
                              </div>
                              <div class="ms-3 align-self-center">
                                <h3 class="mb-0">{{$requirement['rate']}}</h3>
                                <span class="text-muted">Rate per hour</span>
                              </div>
                            </div>
                            <div class="d-flex no-block align-items-center mb-3">
                              <span class="d-flex align-items-center"></span>
                              <div class="ms-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar feather-sm me-1"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                {{$requirement['date']}}
                              </div>
                            </div>
                            <div class="row pb-3 border-bottom">
                              <div class="col-3 col-xl-2">
                                <div class="
                                    bg-light-primary
                                    text-primary text-center
                                    py-2
                                    rounded-3
                                    round round-lg
                                    d-flex
                                    align-items-center
                                    justify-content-center
                                  ">
                                  <i class="display-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color:white;" width="28" height="28" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                      <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                      <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                    </svg>
                                  </i>
                                </div>
                              </div>
                              <div class="col-9 col-xl-10 d-flex align-items-center">
                                <div>
                                  <h5 class="mb-1">class</h5>
                                  <p class="text-muted mb-0">
                                    {{$requirement['class']}}
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="row py-3 border-bottom">
                              <div class="col-3 col-xl-2">
                                <div class="
                                    bg-light-danger
                                    text-danger text-center
                                    py-2
                                    rounded-3
                                    round round-lg
                                    d-flex
                                    align-items-center
                                    justify-content-center
                                  ">
                                  <i class="display-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color:white;" width="28" height="28" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                      <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                      <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                    </svg>
                                  </i>
                                </div>
                              </div>
                              <div class="col-9 col-xl-10 d-flex align-items-center">
                                <div>
                                  <h5 class="mb-1">Subjects</h5>
                                  <p class="text-muted mb-0">
                                    {{$requirement['subject']}}
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="row pt-3 border-bottom">
                              <div class="col-3 col-xl-2">
                                <div class="
                                    bg-light-info
                                    text-info text-center
                                    py-2
                                    rounded-3
                                    round round-lg
                                    d-flex
                                    align-items-center
                                    justify-content-center
                                  ">
                                  <i class="display-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color:white;" width="28" height="28" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                      <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                      <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                    </svg>
                                  </i>
                                </div>
                              </div>
                              <div class="col-9 col-xl-10 d-flex align-items-center">
                                <div>
                                  <h5 class="mb-1">Time</h5>
                                  <p class="text-muted mb-0">{{$requirement['stime']}} --  {{$requirement['etime']}}</p>
                                </div>
                              </div>
                            </div>
                            <div class="row pt-3 border-bottom">
                              <div class="col-3 col-xl-2">
                                <div class="
                                    bg-light-info
                                    text-info text-center
                                    py-2
                                    rounded-3
                                    round round-lg
                                    d-flex
                                    align-items-center
                                    justify-content-center
                                  ">
                                  <i class="display-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color:white;" width="28" height="28" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                      <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                      <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                    </svg>
                                  </i>
                                </div>
                              </div>
                              <div class="col-9 col-xl-10 d-flex align-items-center">
                                <div>
                                  <h5 class="mb-1">Start date</h5>
                                  <p class="text-muted mb-0">{{$requirement['date']}}</p>
                                </div>
                              </div>
                            </div>
                            <div class="row pt-3 border-bottom">
                              <div class="col-3 col-xl-2">
                                <div class="
                                    bg-light-info
                                    text-info text-center
                                    py-2
                                    rounded-3
                                    round round-lg
                                    d-flex
                                    align-items-center
                                    justify-content-center
                                  ">
                                  <i class="display-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color:white;" width="28" height="28" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                      <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                      <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                    </svg>
                                  </i>
                                </div>
                              </div>
                              <div class="col-9 col-xl-10 d-flex align-items-center">
                                <div>
                                  <h5 class="mb-1">Mode</h5>
                                  <p class="text-muted mb-0">Offline</p>
                                </div>
                              </div>
                            </div>
                            <div class="row pt-3 border-bottom">
                              <div class="col-3 col-xl-2">
                                <div class="
                                    bg-light-info
                                    text-info text-center
                                    py-2
                                    rounded-3
                                    round round-lg
                                    d-flex
                                    align-items-center
                                    justify-content-center
                                  ">
                                  <i class="display-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color:white;" width="28" height="28" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                      <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                      <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                    </svg>
                                  </i>
                                </div>
                              </div>
                              <div class="col-9 col-xl-10 d-flex align-items-center">
                                <div>
                                  <h5 class="mb-1">Location</h5>
                                  <p class="text-muted mb-0">{{$requirement['city']}} -- {{$requirement['pincode']}}</p>
                                </div>
                              </div>
                            </div>
                            <div class="row pt-3 ">
                              <div class="col-3 col-xl-2">
                                <div class="
                                    bg-light-info
                                    text-info text-center
                                    py-2
                                    rounded-3
                                    round round-lg
                                    d-flex
                                    align-items-center
                                    justify-content-center
                                  ">
                                  <i class="display-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color:white;" width="28" height="28" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                      <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                      <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                    </svg>
                                  </i>
                                </div>
                              </div>
                              <div class="col-9 col-xl-10 d-flex align-items-center">
                                <div>
                                  <h5 class="mb-1">Notes</h5>
                                  <p class="text-muted mb-0">{{$requirement['notes']}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        <div class="resize-triggers"><div class="expand-trigger">  </div><div class="contract-trigger"></div></div></div>
                        </div>
                      
                      @endif
                  @endforeach  

                      <div class="resize-triggers"><div class="expand-trigger">  </div><div class="contract-trigger"></div></div></div>
                    </div>
                  </div>
                </div>
            </div>
            @stop