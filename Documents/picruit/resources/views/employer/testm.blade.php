@extends ('layouts.user')
@section('content')
<style>
  
  @import url('https://fonts.googleapis.com/css2?family=Bad+Script&family=Lobster+Two&display=swap');


    a.link{
        color:black;
        font-family: 'Lobster Two', cursive;

        font-size: 1.9em !important;
        font-weight: 600;
    }
</style>
<div class="page-wrapper">
          
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">   Testimonials</h1> 
                    </div>
                    
                </div>
            </div>
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-12 d-flex align-items-stretch">
                      <div class="card w-100 border-start border-success">
                        <div class="p-3 d-flex align-items-stretch h-100">
                          <div class="row">
                            <div class="col-4 col-xl-2 col-md-3 d-flex align-items-center">
                              <img src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/big/img6.jpg" class="rounded img-fluid">
                            </div>
                            <div class="col-8 col-xl-10 col-md-9 d-flex align-items-center">
                              <div>
                                <a href="javascript:void(0)" class="font-weight-medium fs-4 link lh-sm">A teacher's job is to take a bunch of live wires and see that they are well-grounded.</a><i class="mdi mdi-format-quote" style="    font-size: 2.9em;
                                color: black;"></i>
                                <h6 class="card-subtitle mt-2 mb-0 fw-normal">
                                  By Daniel Jubile
                                </h6>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-12 d-flex align-items-stretch">
                      <div class="card w-100 border-start border-info">
                        <div class="p-3 d-flex align-items-stretch h-100">
                          <div class="row">
                            <div class="col-4 col-xl-2 col-md-3 d-flex align-items-center">
                              <img src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/big/img6.jpg" class="rounded img-fluid">
                            </div>
                            <div class="col-8 col-xl-10 col-md-9 d-flex align-items-center">
                              <div>
                               <a href="javascript:void(0)" class="font-weight-large fs-4 link lh-sm">Teaching is more than imparting knowledge; it is inspiring change. Learning is more than absorbing facts; it is acquiring understanding
                                </a><i class="mdi mdi-format-quote" style="    font-size: 2.9em;
                                color: black;"></i> 
                                <h6 class="card-subtitle mt-2 mb-0 fw-normal">
                                  By John Smith
                                </h6>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-12 d-flex align-items-stretch">
                      <div class="card w-100 border-start border-orange">
                        <div class="p-3 d-flex align-items-stretch h-100">
                          <div class="row">
                            <div class="col-4 col-xl-2 col-md-3 d-flex align-items-center">
                              <img src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/big/img6.jpg" class="rounded img-fluid">
                            </div>
                            <div class="col-8 col-xl-10 col-md-9 d-flex align-items-center">
                              <div>
                                <a href="javascript:void(0)" class="font-weight-medium fs-4 link lh-sm">A good teacher is like a candle—it consumes itself to light the way for others.</a><i class="mdi mdi-format-quote" style="    font-size: 2.9em;
                                color: black;"></i>
                                <h6 class="card-subtitle mt-2 mb-0 fw-normal">
                                  By Nancy Deo
                                </h6>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
            </div>
            @stop