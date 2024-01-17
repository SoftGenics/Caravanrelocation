@extends ('layouts.user')
@section('content')
<link href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/libs/raty-js/lib/jquery.raty.css" rel="stylesheet">
<div class="page-wrapper">
          
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Tutor rating and reviews</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Tutor rating and reviews</h1> 
                    </div>
                  
                    
                </div>
            </div>
           
            <div class="container-fluid">
               
                <div class="row">
                    <div class="col-md-4 col-xl-6 d-flex align-items-stretch">
                        <a href="javascript:void(0)" class="card bg-primary text-white w-100 card-hover">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div id="score-rating" style="cursor: pointer;"><img alt="1" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-on.png" title="bad">&nbsp;<img alt="2" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-on.png" title="poor">&nbsp;<img alt="3" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-on.png" title="regular">&nbsp;<img alt="4" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-off.png" title="good">&nbsp;<img alt="5" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-off.png" title="gorgeous"><input name="score" type="hidden" value="3"></div>
                              <div class="ms-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right fill-white"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                              </div>
                            </div>
                            <div class="mt-4">
                              <h4 class="card-title mb-1 text-white">Tutor name</h4>
                              <div class="form-group">
                      <textarea class="form-control" rows="3" spellcheck="false"></textarea>
                    </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="col-md-4 col-xl-6 d-flex align-items-stretch">
                        <a href="javascript:void(0)" class="card bg-primary text-white w-100 card-hover">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div id="score-rating" style="cursor: pointer;"><img alt="1" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-on.png" title="bad">&nbsp;<img alt="2" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-on.png" title="poor">&nbsp;<img alt="3" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-on.png" title="regular">&nbsp;<img alt="4" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-off.png" title="good">&nbsp;<img alt="5" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-off.png" title="gorgeous"><input name="score" type="hidden" value="3"></div>
                              <div class="ms-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right fill-white"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                              </div>
                            </div>
                            <div class="mt-4">
                              <h4 class="card-title mb-1 text-white">Tutor name</h4>
                              <div class="form-group">
                      <textarea class="form-control" rows="3" spellcheck="false"></textarea>
                    </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    
                      <div class="col-md-4 col-xl-6 d-flex align-items-stretch">
                        <a href="javascript:void(0)" class="card bg-primary text-white w-100 card-hover">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div id="score-rating" style="cursor: pointer;"><img alt="1" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-on.png" title="bad">&nbsp;<img alt="2" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-on.png" title="poor">&nbsp;<img alt="3" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-on.png" title="regular">&nbsp;<img alt="4" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-off.png" title="good">&nbsp;<img alt="5" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-off.png" title="gorgeous"><input name="score" type="hidden" value="3"></div>
                              <div class="ms-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right fill-white"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                              </div>
                            </div>
                            <div class="mt-4">
                              <h4 class="card-title mb-1 text-white">Tutor name</h4>
                              <div class="form-group">
                      <textarea class="form-control" rows="3" spellcheck="false"></textarea>
                    </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="col-md-4 col-xl-6 d-flex align-items-stretch">
                        <a href="javascript:void(0)" class="card bg-primary text-white w-100 card-hover">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div id="score-rating" style="cursor: pointer;"><img alt="1" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-on.png" title="bad">&nbsp;<img alt="2" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-on.png" title="poor">&nbsp;<img alt="3" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-on.png" title="regular">&nbsp;<img alt="4" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-off.png" title="good">&nbsp;<img alt="5" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/rating/star-off.png" title="gorgeous"><input name="score" type="hidden" value="3"></div>
                              <div class="ms-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right fill-white"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                              </div>
                            </div>
                            <div class="mt-4">
                              <h4 class="card-title mb-1 text-white">Tutor name</h4>
                              <div class="form-group">
                      <textarea class="form-control" rows="3" spellcheck="false"></textarea>
                    </div>
                            </div>
                          </div>
                        </a>
                      </div>
                </div>
          
        </div>
        
            @stop