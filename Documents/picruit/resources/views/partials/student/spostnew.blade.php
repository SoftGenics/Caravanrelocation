@extends ('layouts.user')
@section('content')
<div class="page-wrapper">
  @if(Session::has('users'))  


  @php
  $users =Session::get('users');  
  $id=$users['id'];
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
                              <li class="breadcrumb-item active" aria-current="page">Post</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Post new requirements</h1> 
                    </div>
                    
                </div>
            </div>
           
            <div class="container-fluid">
               <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">New post</h4>
                        <h5 class="card-subtitle mb-3 pb-3 border-bottom">
                          Teacher requirements
                        </h5>
                        <form class="" action="{{route('add_requirment')}}" method="post" >
                          @csrf
                          <input type="hidden" value="{{$id}}" name="user_id" >
                          <div class="form-floating mb-3">
                           
                            <input type="text" class="form-control border border-info" placeholder="" name="s_name">
                            <label><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-sm text-info fill-white me-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg><span class="border-start border-info ps-3">Student name</span></label>
                          </div>
                          <div class="form-floating mb-3 ">
                           
                            <input type="date" class="form-control  border border-info" id="date" name="date">
                            <label><svg  xmlns="http://www.w3.org/2000/svg"  style="color:#7bc5fd;" width="24" height="24" fill="currentcolor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                              <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                              <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>&nbsp<span class="border-start border-info ps-3">Date</span></label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="number" class="form-control border border-info" placeholder="" name="rate">
                            <label><svg xmlns="http://www.w3.org/2000/svg" style="color:#7bc5fd;" width="24" height="24" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                              <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z"/>
                            </svg>&nbsp<span class="border-start border-info ps-3">Rate per hour</span></label>
                          </div>
                          <div class="form-floating mb-3">
                              <input type="time" class="form-control  border border-info" id="stime" name="stime">
                            
                            <label><svg xmlns="http://www.w3.org/2000/svg" style="color:#7bc5fd;" width="24" height="24" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                              <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                              <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                            </svg>&nbsp<span class="border-start border-info ps-3">Start time</span></label>
                          </div>
                          <div class="form-floating mb-3">
                           
                              <input type="time" class="form-control border border-info" id="etime" name="etime">
                            
                            <label><svg xmlns="http://www.w3.org/2000/svg" style="color:#7bc5fd;" width="24" height="24" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                              <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                              <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                            </svg>&nbsp<span class="border-start border-info ps-3">End Time</span></label>
                          </div>
                          <div class="form-floating mb-3"> 
                            <input type="text" class="form-control border border-info"  name="notes">
                            <label><svg xmlns="http://www.w3.org/2000/svg" style="color:#7bc5fd;" width="24" height="24" fill="currentColor" class="bi bi-journal-check" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                              <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                              <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>&nbsp<span class="border-start border-info ps-3">Notes</span></label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="number" class="form-control border border-info" placeholder="" name="pincode">
                            <label><svg xmlns="http://www.w3.org/2000/svg" style="color:#7bc5fd;" width="24" height="24" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                              <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
                              <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
                            </svg>&nbsp<span class="border-start border-info ps-3">Pincode</span></label>
                          </div>
                          <div class="row">
                            <div class="col-sm-12 col-md-6">
                              <div class="mb-3">
                                <label class="control-label col-form-label">Class</label>
                                <select class="form-select border border-info" name="class">
                                  <option>Choose Your Option</option>
                                  <option>Class 1</option>
                                  <option>Class 2</option>
                                  <option>Class 3</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                              <div class="mb-3">
                                <label class="control-label col-form-label">Subject</label>
                                <select class="form-select border border-info" name="subject">
                                  <option>Choose Your Option</option>
                                  <option>Physics</option>
                                  <option>Chemistry</option>
                                  <option>Biology</option>
                                  <option>Maths</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                              <div class="mb-3">
                                <label class="control-label col-form-label">City</label>
                                <select class="form-select border border-info" name="city">
                                  <option>Choose Your Option</option>
                                  <option>Bangalore</option>
                                  <option>Mumbai</option>
                                  <option>Kerela</option>
                                </select>
                              </div>
                            </div>
                          </div>
      
                          <div class="d-md-flex align-items-center">
                            <div class="form-check mr-sm-2">
                              <input type="checkbox" class="form-check-input" id="sf2" value="check">
                              <label class="form-check-label" for="sf2">Checked</label>
                            </div>
                            <div class="mt-3 mt-md-0 ms-auto">
                              <button type="submit" class="
                                  btn btn-info
                                  font-weight-medium
                                  rounded-pill
                                  px-4
                                ">
                                <div class="d-flex align-items-center">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send feather-sm fill-white me-2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                  Submit
                                </div>
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        @stop