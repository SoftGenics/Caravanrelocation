@extends ('layouts.user')
@section('content')
<div class="page-wrapper">
          
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Interviews</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Interviews</h1> 
                    </div>
                    <div class="
                col-lg-4 col-md-6
                d-none d-md-flex
                align-items-center
                justify-content-end
              ">
              <select class="form-select theme-select border-0" aria-label="Default select example">
                <option value="1">job title #001</option>
                <option value="1">job title #002</option>
                <option value="1">job title #003</option>
                <option value="1">job title #004</option>
                
              </select>
              &nbsp
              
              <a href="javascript:void(0)" class="btn btn-info d-flex align-items-center ms-2">
                <i class="ri-add-line me-1"></i>
                Filter
              </a>
                    </div>
                    
                </div>
            </div>
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">James Smith</h5>
                          <h6 class="
                              card-subtitle
                              mb-2
                              text-muted
                              d-flex
                              align-items-center
                            ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin me-2 feather-sm"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>Albania
                          </h6>
                          <p class="card-text pt-2">
                            Interview scheduled
                          </p>
                          <a href="#" class="card-link">4.30 pm</a>
                          <a href="#" class="card-link">View profile</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Michael Smith</h5>
                          <h6 class="
                              card-subtitle
                              mb-2
                              text-muted
                              d-flex
                              align-items-center
                            ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin me-2 feather-sm"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>Belize
                          </h6>
                          <p class="card-text pt-2">
                            Some quick example text to build on the card title and make
                            up the bulk of the card's content.
                          </p>
                          <a href="#" class="card-link">Follow</a>
                          <a href="#" class="card-link">View profile</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Maria Hernandez</h5>
                          <h6 class="
                              card-subtitle
                              mb-2
                              text-muted
                              d-flex
                              align-items-center
                            ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin me-2 feather-sm"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>Colombia
                          </h6>
                          <p class="card-text pt-2">
                            Some quick example text to build on the card title and make
                            up the bulk of the card's content.
                          </p>
                          <a href="#" class="card-link">Follow</a>
                          <a href="#" class="card-link">View profile</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">David Margaret</h5>
                          <h6 class="
                              card-subtitle
                              mb-2
                              text-muted
                              d-flex
                              align-items-center
                            ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin me-2 feather-sm"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>Egypt
                          </h6>
                          <p class="card-text pt-2">
                            Some quick example text to build on the card title and make
                            up the bulk of the card's content.
                          </p>
                          <a href="#" class="card-link">Follow</a>
                          <a href="#" class="card-link">View profile</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          
        </div>

            @stop