@extends ('layouts.user')
@section('content')
<div class="page-wrapper">
          
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Badges</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Your Badges</h1> 
                    </div>
                    
                </div>
            </div>
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                      <div class="card bg-inverse text-white">
                        <div class="card-body">
                          <div class="d-flex no-block align-items-center">
                            <a href="JavaScript: void(0);"><i class="display-6 " ><img src="https://cdn-icons-png.flaticon.com/512/8859/8859816.png" style="
                                width: 65px;
                                height: 65px"/></i></a>
                            <div class="ms-3 mt-2">
                              <h4 class="font-weight-medium mb-0 text-white">
                                Good conduct
                              </h4>
                              <h5 class="text-white">100#</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                      <div class="card bg-cyan text-white">
                        <div class="card-body">
                          <div class="d-flex no-block align-items-center">
                            <a href="JavaScript: void(0);"><i class="display-6 " ><img src="https://cdn-icons-png.flaticon.com/512/1959/1959455.png" style="
                                width: 65px;
                                height: 65px"/></i></a>
                            <div class="ms-3 mt-2">
                              <h4 class="font-weight-medium mb-0 text-white">
                                Study wizard
                              </h4>
                              <h5 class="text-white">#900</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                      <div class="card bg-orange text-white">
                        <div class="card-body">
                          <div class="d-flex no-block align-items-center">
                            <a href="JavaScript: void(0);"><i class="display-6 " ><img src="https://cdn-icons-png.flaticon.com/512/1959/1959455.png" style="
                                width: 65px;
                                height: 65px"/></i></a>
                            <div class="ms-3 mt-2">
                              <h4 class="font-weight-medium mb-0 text-white">
                                Meritorious
                              </h4>
                              <h5 class="text-white">#600</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                      <div class="card bg-info text-white">
                        <div class="card-body">
                          <div class="d-flex no-block align-items-center">
                            <a href="JavaScript: void(0);"><i class="display-6 " ><img src="https://cdn-icons-png.flaticon.com/512/3513/3513513.png" style="
                                width: 65px;
                                height: 65px"/></i></a>
                            <div class="ms-3 mt-2">
                              <h4 class="font-weight-medium mb-0 text-white">
                            Brilliant
                              </h4>
                              <h5 class="text-white">#700</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          
        </div>

            @stop