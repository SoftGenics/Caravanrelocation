@extends ('layouts.user')
@section('content')
<div class="page-wrapper">
          
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Latest jobs and projects</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Latest jobs and projects</h1> 
                    </div>
                    <div class="
                col-lg-4 col-md-6
                d-none d-md-flex
                align-items-center
                justify-content-end
              ">
              <select class="form-select theme-select border-0" aria-label="Default select example">
                <option value="1">3 months older</option>
                <option value="2">1 year older</option>
                <option value="3">oldest</option>
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
                    <div class="col-lg-3 col-md-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex align-items-center mb-3">
                            <div>
                              <h3>8</h3>
                              <h6 class="card-subtitle">Total Projects</h6>
                            </div>
                            <div class="ms-auto">
                              <span class="text-success display-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box feather-xl"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex align-items-center mb-3">
                            <div>
                              <h3>4</h3>
                              <h6 class="card-subtitle">Completed Projected</h6>
                            </div>
                            <div class="ms-auto">
                              <span class="text-info display-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cast feather-xl"><path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><line x1="2" y1="20" x2="2" y2="20"></line></svg></span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                  <h3>8</h3>
                                  <h6 class="card-subtitle">Total jobs</h6>
                                </div>
                                <div class="ms-auto">
                                  <span class="text-primary display-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard feather-xl"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg></span>
                                </div>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 100%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                  <h3>6</h3>
                                  <h6 class="card-subtitle">Past jobs</h6>
                                </div>
                                <div class="ms-auto">
                                  <span class="text-danger display-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy feather-xl"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></span>
                                </div>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 60%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-4 d-flex align-items-stretch">
                      <div class="card w-100">
                        <div class="p-3 d-flex align-items-stretch h-100">
                          <div class="row">
                            <div class="col-4 col-xl-2 col-md-3 d-flex align-items-center">
                              <img src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/product/prd1.jpg" class="rounded img-fluid">
                            </div>
                            <div class="col-8 col-xl-10 col-md-9 d-flex align-items-center">
                              <div>
                                <a href="javascript:void(0)" class="font-weight-medium fs-4 link lh-sm">Project 1</a>
                                
                                <h6 class="card-subtitle mt-2 mb-0 fw-normal">
                                  For company name
                                </h6>
                                <div class="d-flex no-block align-items-center mb-3">
                                    <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar feather-sm me-1"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                      20 May 2021</span>
                                    
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 d-flex align-items-stretch">
                        <div class="card w-100">
                          <div class="p-3 d-flex align-items-stretch h-100">
                            <div class="row">
                              <div class="col-4 col-xl-2 col-md-3 d-flex align-items-center">
                                <img src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/product/prd1.jpg" class="rounded img-fluid">
                              </div>
                              <div class="col-8 col-xl-10 col-md-9 d-flex align-items-center">
                                <div>
                                  <a href="javascript:void(0)" class="font-weight-medium fs-4 link lh-sm">Project 1</a>
                                  
                                  <h6 class="card-subtitle mt-2 mb-0 fw-normal">
                                    For company name
                                  </h6>
                                  <div class="d-flex no-block align-items-center mb-3">
                                      <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar feather-sm me-1"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        20 May 2021</span>
                                      
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4 col-xl-4 d-flex align-items-stretch">
                        <div class="card w-100">
                          <div class="p-3 d-flex align-items-stretch h-100">
                            <div class="row">
                              <div class="col-4 col-xl-2 col-md-3 d-flex align-items-center">
                                <img src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/product/prd1.jpg" class="rounded img-fluid">
                              </div>
                              <div class="col-8 col-xl-10 col-md-9 d-flex align-items-center">
                                <div>
                                  <a href="javascript:void(0)" class="font-weight-medium fs-4 link lh-sm">Project 1</a>
                                  
                                  <h6 class="card-subtitle mt-2 mb-0 fw-normal">
                                    For company name
                                  </h6>
                                  <div class="d-flex no-block align-items-center mb-3">
                                      <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar feather-sm me-1"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        20 May 2021</span>
                                      
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4 col-xl-4 d-flex align-items-stretch">
                        <div class="card w-100">
                          <div class="p-3 d-flex align-items-stretch h-100">
                            <div class="row">
                              <div class="col-4 col-xl-2 col-md-3 d-flex align-items-center">
                                <img src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/product/prd1.jpg" class="rounded img-fluid">
                              </div>
                              <div class="col-8 col-xl-10 col-md-9 d-flex align-items-center">
                                <div>
                                  <a href="javascript:void(0)" class="font-weight-medium fs-4 link lh-sm">Project 1</a>
                                  
                                  <h6 class="card-subtitle mt-2 mb-0 fw-normal">
                                    For company name
                                  </h6>
                                  <div class="d-flex no-block align-items-center mb-3">
                                      <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar feather-sm me-1"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        20 May 2021</span>
                                      
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4 col-xl-4 d-flex align-items-stretch">
                        <div class="card w-100">
                          <div class="p-3 d-flex align-items-stretch h-100">
                            <div class="row">
                              <div class="col-4 col-xl-2 col-md-3 d-flex align-items-center">
                                <img src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/product/prd1.jpg" class="rounded img-fluid">
                              </div>
                              <div class="col-8 col-xl-10 col-md-9 d-flex align-items-center">
                                <div>
                                  <a href="javascript:void(0)" class="font-weight-medium fs-4 link lh-sm">Project 1</a>
                                  
                                  <h6 class="card-subtitle mt-2 mb-0 fw-normal">
                                    For company name
                                  </h6>
                                  <div class="d-flex no-block align-items-center mb-3">
                                      <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar feather-sm me-1"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        20 May 2021</span>
                                      
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4 col-xl-4 d-flex align-items-stretch">
                        <div class="card w-100">
                          <div class="p-3 d-flex align-items-stretch h-100">
                            <div class="row">
                              <div class="col-4 col-xl-2 col-md-3 d-flex align-items-center">
                                <img src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/product/prd1.jpg" class="rounded img-fluid">
                              </div>
                              <div class="col-8 col-xl-10 col-md-9 d-flex align-items-center">
                                <div>
                                  <a href="javascript:void(0)" class="font-weight-medium fs-4 link lh-sm">Project 1</a>
                                  
                                  <h6 class="card-subtitle mt-2 mb-0 fw-normal">
                                    For company name
                                  </h6>
                                  <div class="d-flex no-block align-items-center mb-3">
                                      <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar feather-sm me-1"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        20 May 2021</span>
                                      
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
          
        </div>

            @stop