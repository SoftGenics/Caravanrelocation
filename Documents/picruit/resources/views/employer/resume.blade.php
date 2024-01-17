@extends ('layouts.user')
@section('content')
<div class="page-wrapper">
          
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Search Resume</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Search Resume</h1> 
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
            <div class="col-md-4 col-xl-2 d-flex align-items-stretch">
                <a href="javascript:void(0)" class="card bg-info text-white w-100 card-hover">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <i class="mdi mdi-file-document display-6"></i>
                      <div class="ms-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right fill-white"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                      </div>
                    </div>
                    <div class="mt-4">
                      <h4 class="card-title mb-1 text-white">Manoj kumar</h4>
                      <h6 class="card-text fw-normal text-white-50">
                        View resume
                      </h6>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4 col-xl-2 d-flex align-items-stretch">
                <a href="javascript:void(0)" class="card bg-info text-white w-100 card-hover">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <i class="mdi mdi-file-document display-6"></i>
                      <div class="ms-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right fill-white"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                      </div>
                    </div>
                    <div class="mt-4">
                      <h4 class="card-title mb-1 text-white">Manoj kumar</h4>
                      <h6 class="card-text fw-normal text-white-50">
                        View resume
                      </h6>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4 col-xl-2 d-flex align-items-stretch">
                <a href="javascript:void(0)" class="card bg-info text-white w-100 card-hover">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      
                      <i class="mdi mdi-file-document display-6"></i>
                      <div class="ms-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right fill-white"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                      </div>
                    </div>
                    <div class="mt-4">
                      <h4 class="card-title mb-1 text-white">jack</h4>
                      <h6 class="card-text fw-normal text-white-50">
                        View resume
                      </h6>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4 col-xl-2 d-flex align-items-stretch">
                <a href="javascript:void(0)" class="card bg-info text-white w-100 card-hover">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <i class="mdi mdi-file-document display-6"></i>
                      <div class="ms-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right fill-white"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                      </div>
                    </div>
                    <div class="mt-4">
                      <h4 class="card-title mb-1 text-white">Jenny</h4>
                      <h6 class="card-text fw-normal text-white-50">
                        View resume
                      </h6>
                    </div>
                  </div>
                </a>
              </div>
              </div>
              </div>
          
        </div>

            @stop