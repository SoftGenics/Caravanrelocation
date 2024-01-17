@extends ('layouts.user')
@section('content')
<style>
    .welcome-card::before {
    background-image: url("https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/background/welcome-bg.png");
    background-repeat: no-repeat;
    background-position: right;
    content: "";
    position: absolute;
    left: 0;
    width: 100%;
    height: 100%;
    }
    .bg-light-info {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-light-info-rgb),var(--bs-bg-opacity))!important;
}
</style>
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> --}}
<div class="page-wrapper">
          
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Train yourself</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Train yourself</h1> 
                    </div>
                  
                    
                </div>
            </div>
           
            <div class="container-fluid">
               
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card welcome-card overflow-hidden bg-light-info border-0">
                          <div class="card-body">
                            <h3 class="text-primary position-relative">Hey (username),</h3>
                            <h2 class="text-primary position-relative">
                              Train yourself with our courses
                            </h2>
                            <a href="#" class="btn btn-info mb-4 mt-3 position-relative">Enroll Now</a>
                          </div>
                        </div>
                        
                      </div>
                </div>
                <div class="row ">
                    <!-- Column -->
                    
                    <div class="col-lg-4 item">
                      <div class="card">
                        <div class="card text-center">
                        <img class="card-img-top img-responsive" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/big/img4.jpg" alt="Card image cap">
                      
                      <div class="row mt-3 justify-content-center">
                        <div class="col-6 col-xl-3">
                          <div class="
                              py-2
                              px-3
                              bg-light
                              rounded-pill
                              d-flex
                              align-items-center
                            ">
                            <span class="text-warning"><i class="mdi mdi-star-outline fs-7"></i></span>
                            <div class="ms-2 text-start">
                              <h6 class="fw-normal text-muted mb-0">Reviews</h6>
                              <h4 class="mb-0">368</h4>
                            </div>
                          </div>
                        </div>
                        <div class="col-6 col-xl-3 ">
                          <div class="
                              py-2
                              px-3
                              bg-light
                              rounded-pill
                              d-flex
                              align-items-center
                            ">
                            <span class="text-primary"><i class=" mdi mdi-account-multiple-outline fs-7"></i></span>
                            <div class="ms-2 text-start">
                              <h6 class="fw-normal text-muted mb-0">Students</h6>
                              <h4 class="mb-0">1200</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                        <div class="card-body">
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
                                    <i class="ri-dribbble-line display-8"></i>
                                  </div>
                                </div>
                                <div class="col-9 col-xl-10 d-flex align-items-center">
                                  <div>
                                    <h5 class="mb-1">Feature title</h5>
                                    <p class="text-muted mb-0">
                                      Feature describe
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
                                    <i class="ri-Feature title-line display-8"></i>
                                  </div>
                                </div>
                                <div class="col-9 col-xl-10 d-flex align-items-center">
                                  <div>
                                    <h5 class="mb-1">Feature title</h5>
                                    <p class="text-muted mb-0">
                                     Feature describe
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="row pt-3">
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
                                    <i class="ri-messenger-line display-8"></i>
                                  </div>
                                </div>
                                <div class="col-9 col-xl-10 d-flex align-items-center">
                                  <div>
                                    <h5 class="mb-1">Feature title</h5>
                                    <p class="text-muted mb-0">Feature describe</p>
                                  </div>
                                </div>
                              </div>
                       <br>
                          <h3 class="font-weight-medium">
                            describe course / training .........
                          </h3>
                          <p class="mb-0 mt-2 text-muted">
                            describe course / training .........
                          </p>
                          <div class="text-end">
                            <button class="
                                btn btn-primary btn-rounded
                                waves-effect waves-light
                                mt-3
                              ">
                             Enroll now
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 item">
                        <div class="card">
                          <div class="card text-center">
                          <img class="card-img-top img-responsive" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/big/img4.jpg" alt="Card image cap">
                        
                        <div class="row mt-3 justify-content-center">
                          <div class="col-6 col-xl-3">
                            <div class="
                                py-2
                                px-3
                                bg-light
                                rounded-pill
                                d-flex
                                align-items-center
                              ">
                              <span class="text-warning"><i class="mdi mdi-star-outline fs-7"></i></span>
                              <div class="ms-2 text-start">
                                <h6 class="fw-normal text-muted mb-0">Reviews</h6>
                                <h4 class="mb-0">3k</h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-6 col-xl-3">
                            <div class="
                                py-2
                                px-3
                                bg-light
                                rounded-pill
                                d-flex
                                align-items-center
                              ">
                              <span class="text-primary"><i class=" mdi mdi-account-multiple-outline fs-7"></i></span>
                              <div class="ms-2 text-start">
                                <h6 class="fw-normal text-muted mb-0">Students</h6>
                                <h4 class="mb-0">1200</h4>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                          <div class="card-body">
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
                                      <i class="ri-dribbble-line display-8"></i>
                                    </div>
                                  </div>
                                  <div class="col-9 col-xl-10 d-flex align-items-center">
                                    <div>
                                      <h5 class="mb-1">Feature title</h5>
                                      <p class="text-muted mb-0">
                                        Feature describe
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
                                      <i class="ri-Feature title-line display-8"></i>
                                    </div>
                                  </div>
                                  <div class="col-9 col-xl-10 d-flex align-items-center">
                                    <div>
                                      <h5 class="mb-1">Feature title</h5>
                                      <p class="text-muted mb-0">
                                       Feature describe
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row pt-3">
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
                                      <i class="ri-messenger-line display-8"></i>
                                    </div>
                                  </div>
                                  <div class="col-9 col-xl-10 d-flex align-items-center">
                                    <div>
                                      <h5 class="mb-1">Feature title</h5>
                                      <p class="text-muted mb-0">Feature describe</p>
                                    </div>
                                  </div>
                                </div>
                         <br>
                            <h3 class="font-weight-medium">
                              describe course / training .........
                            </h3>
                            <p class="mb-0 mt-2 text-muted">
                                describe course / training .........
                            </p>
                            <div class="text-end">
                              <button class="
                                  btn btn-primary btn-rounded
                                  waves-effect waves-light
                                  mt-3
                                ">
                               Enroll now
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 item">
                        <div class="card">
                          <div class="card text-center">
                          <img class="card-img-top img-responsive" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/big/img4.jpg" alt="Card image cap">
                        
                        <div class="row mt-3 justify-content-center">
                          <div class="col-6 col-xl-3">
                            <div class="
                                py-2
                                px-3
                                bg-light
                                rounded-pill
                                d-flex
                                align-items-center
                              ">
                              <span class="text-warning"><i class="mdi mdi-star-outline fs-7"></i></span>
                              <div class="ms-2 text-start">
                                <h6 class="fw-normal text-muted mb-0">Reviews</h6>
                                <h4 class="mb-0">368</h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-6 col-xl-3">
                            <div class="
                                py-2
                                px-3
                                bg-light
                                rounded-pill
                                d-flex
                                align-items-center
                              ">
                              <span class="text-primary"><i class=" mdi mdi-account-multiple-outline fs-7"></i></span>
                              <div class="ms-2 text-start">
                                <h6 class="fw-normal text-muted mb-0">Students</h6>
                                <h4 class="mb-0">1200</h4>
                              </div>
                            </div>
                          </div>
                          </div>
                          </div>
                          <div class="card-body">
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
                                      <i class="ri-dribbble-line display-8"></i>
                                    </div>
                                  </div>
                                  <div class="col-9 col-xl-10 d-flex align-items-center">
                                    <div>
                                      <h5 class="mb-1">Feature title</h5>
                                      <p class="text-muted mb-0">
                                        Feature describe
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
                                      <i class="ri-Feature title-line display-8"></i>
                                    </div>
                                  </div>
                                  <div class="col-9 col-xl-10 d-flex align-items-center">
                                    <div>
                                      <h5 class="mb-1">Feature title</h5>
                                      <p class="text-muted mb-0">
                                       Feature describe
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row pt-3">
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
                                      <i class="ri-messenger-line display-8"></i>
                                    </div>
                                  </div>
                                  <div class="col-9 col-xl-10 d-flex align-items-center">
                                    <div>
                                      <h5 class="mb-1">Feature title</h5>
                                      <p class="text-muted mb-0">Feature describe</p>
                                    </div>
                                  </div>
                                </div>
                         <br>
                            <h3 class="font-weight-medium">
                              describe course / training .........
                            </h3>
                            <p class="mb-0 mt-2 text-muted">
                                describe course / training .........
                            </p>
                            <div class="text-end">
                              <button class="
                                  btn btn-primary btn-rounded
                                  waves-effect waves-light
                                  mt-3
                                ">
                               Enroll now
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="card">
                          <div class="card text-center">
                          <img class="card-img-top img-responsive" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/big/img4.jpg" alt="Card image cap">
                        
                        <div class="row mt-3 justify-content-center">
                          <div class="col-6 col-xl-3">
                            <div class="
                                py-2
                                px-3
                                bg-light
                                rounded-pill
                                d-flex
                                align-items-center
                              ">
                              <span class="text-warning"><i class="mdi mdi-star-outline fs-7"></i></span>
                              <div class="ms-2 text-start">
                                <h6 class="fw-normal text-muted mb-0">Reviews</h6>
                                <h4 class="mb-0">368</h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-6 col-xl-3">
                            <div class="
                                py-2
                                px-3
                                bg-light
                                rounded-pill
                                d-flex
                                align-items-center
                              ">
                              <span class="text-primary"><i class=" mdi mdi-account-multiple-outline fs-7"></i></span>
                              <div class="ms-2 text-start">
                                <h6 class="fw-normal text-muted mb-0">Students</h6>
                                <h4 class="mb-0">1200</h4>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                          <div class="card-body">
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
                                      <i class="ri-dribbble-line display-8"></i>
                                    </div>
                                  </div>
                                  <div class="col-9 col-xl-10 d-flex align-items-center">
                                    <div>
                                      <h5 class="mb-1">Feature title</h5>
                                      <p class="text-muted mb-0">
                                        Feature describe
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
                                      <i class="ri-Feature title-line display-8"></i>
                                    </div>
                                  </div>
                                  <div class="col-9 col-xl-10 d-flex align-items-center">
                                    <div>
                                      <h5 class="mb-1">Feature title</h5>
                                      <p class="text-muted mb-0">
                                       Feature describe
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row pt-3">
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
                                      <i class="ri-messenger-line display-8"></i>
                                    </div>
                                  </div>
                                  <div class="col-9 col-xl-10 d-flex align-items-center">
                                    <div>
                                      <h5 class="mb-1">Feature title</h5>
                                      <p class="text-muted mb-0">Feature describe</p>
                                    </div>
                                  </div>
                                </div>
                         <br>
                            <h3 class="font-weight-medium">
                              describe course / training .........
                            </h3>
                            <p class="mb-0 mt-2 text-muted">
                              describe course / training .........
                            </p>
                            <div class="text-end">
                              <button class="
                                  btn btn-primary btn-rounded
                                  waves-effect waves-light
                                  mt-3
                                ">
                               Enroll now
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="card">
                          <div class="card text-center">
                          <img class="card-img-top img-responsive" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/big/img4.jpg" alt="Card image cap">
                        
                        <div class="row mt-3 justify-content-center">
                          <div class="col-6 col-xl-3">
                            <div class="
                                py-2
                                px-3
                                bg-light
                                rounded-pill
                                d-flex
                                align-items-center
                              ">
                              <span class="text-warning"><i class="mdi mdi-star-outline fs-7"></i></span>
                              <div class="ms-2 text-start">
                                <h6 class="fw-normal text-muted mb-0">Reviews</h6>
                                <h4 class="mb-0">368</h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-6 col-xl-3">
                            <div class="
                                py-2
                                px-3
                                bg-light
                                rounded-pill
                                d-flex
                                align-items-center
                              ">
                              <span class="text-primary"><i class=" mdi mdi-account-multiple-outline fs-7"></i></span>
                              <div class="ms-2 text-start">
                                <h6 class="fw-normal text-muted mb-0">Students</h6>
                                <h4 class="mb-0">1200</h4>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                          <div class="card-body">
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
                                      <i class="ri-dribbble-line display-8"></i>
                                    </div>
                                  </div>
                                  <div class="col-9 col-xl-10 d-flex align-items-center">
                                    <div>
                                      <h5 class="mb-1">Feature title</h5>
                                      <p class="text-muted mb-0">
                                        Feature describe
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
                                      <i class="ri-Feature title-line display-8"></i>
                                    </div>
                                  </div>
                                  <div class="col-9 col-xl-10 d-flex align-items-center">
                                    <div>
                                      <h5 class="mb-1">Feature title</h5>
                                      <p class="text-muted mb-0">
                                       Feature describe
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row pt-3">
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
                                      <i class="ri-messenger-line display-8"></i>
                                    </div>
                                  </div>
                                  <div class="col-9 col-xl-10 d-flex align-items-center">
                                    <div>
                                      <h5 class="mb-1">Feature title</h5>
                                      <p class="text-muted mb-0">Feature describe</p>
                                    </div>
                                  </div>
                                </div>
                         <br>
                            <h3 class="font-weight-medium">
                              describe course / training .........
                            </h3>
                            <p class="mb-0 mt-2 text-muted">
                              describe course / training .........
                            </p>
                            <div class="text-end">
                              <button class="
                                  btn btn-primary btn-rounded
                                  waves-effect waves-light
                                  mt-3
                                ">
                               Enroll now
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 item">
                        <div class="card">
                          <div class="card text-center">
                          <img class="card-img-top img-responsive" src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/big/img4.jpg" alt="Card image cap">
                        
                        <div class="row mt-3 justify-content-center">
                          <div class="col-6 col-xl-3">
                            <div class="
                                py-2
                                px-3
                                bg-light
                                rounded-pill
                                d-flex
                                align-items-center
                              ">
                              <span class="text-warning"><i class="mdi mdi-star-outline fs-7"></i></span>
                              <div class="ms-2 text-start">
                                <h6 class="fw-normal text-muted mb-0">Reviews</h6>
                                <h4 class="mb-0">368</h4>
                              </div>
                            </div>
                          </div>
                          <div class="col-6 col-xl-3">
                            <div class="
                                py-2
                                px-3
                                bg-light
                                rounded-pill
                                d-flex
                                align-items-center
                              ">
                              <span class="text-primary"><i class=" mdi mdi-account-multiple-outline fs-7"></i></span>
                              <div class="ms-2 text-start">
                                <h6 class="fw-normal text-muted mb-0">Students</h6>
                                <h4 class="mb-0">1200</h4>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                          <div class="card-body">
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
                                      <i class="ri-dribbble-line display-8"></i>
                                    </div>
                                  </div>
                                  <div class="col-9 col-xl-10 d-flex align-items-center">
                                    <div>
                                      <h5 class="mb-1">Feature title</h5>
                                      <p class="text-muted mb-0">
                                        Feature describe
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
                                      <i class="ri-Feature title-line display-8"></i>
                                    </div>
                                  </div>
                                  <div class="col-9 col-xl-10 d-flex align-items-center">
                                    <div>
                                      <h5 class="mb-1">Feature title</h5>
                                      <p class="text-muted mb-0">
                                       Feature describe
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row pt-3">
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
                                      <i class="ri-messenger-line display-8"></i>
                                    </div>
                                  </div>
                                  <div class="col-9 col-xl-10 d-flex align-items-center">
                                    <div>
                                      <h5 class="mb-1">Feature title</h5>
                                      <p class="text-muted mb-0">Feature describe</p>
                                    </div>
                                  </div>
                                </div>
                         <br>
                            <h3 class="font-weight-medium">
                              describe course / training .........
                            </h3>
                            <p class="mb-0 mt-2 text-muted">
                              describe course / training .........
                            </p>
                            <div class="text-end">
                              <button class="
                                  btn btn-primary btn-rounded
                                  waves-effect waves-light
                                  mt-3
                                ">
                               Enroll now
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                
          
        </div>
        {{-- <script>
            $('.owl-carousel').owlCarousel({
                
        items:3,
        itemsDesktop:[1000,3],
        itemsDesktopSmall:[979,3],
        itemsTablet:[768,2],
        nav:true,
        pagination:true,
        navigation:true,
        navigationText:["",""],
        autoplay:true,
      
    autoplayTimeout:5000,
    autoplayHoverPause:true
});
        </script> --}}
            @stop