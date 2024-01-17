@extends ('layouts.user')
@section('content')
<div class="page-wrapper">
          
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">All tutors</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">All tutors</h1> 
                    </div>
                    <div class="
                col-lg-4 col-md-6
                d-none d-md-flex
                align-items-center
                justify-content-end
              ">
              <select class="form-select theme-select border-0" aria-label="Default select example">
                <option value="1">Class 1</option>
                <option value="2">Class 2</option>
                <option value="3">Class 3</option>
                <option value="4">Class 4</option>
                <option value="5">Class 5</option>
                <option value="6">Class 6</option>
                <option value="7">Class 7</option>
                <option value="8">Class 8</option>
                <option value="9">Class 9</option>
              </select>
              &nbsp
              <select class="form-select theme-select border-0" aria-label="Default select example">
                <option value="1">Physics</option>
                <option value="2">Chemistry</option>
                <option value="3">Maths</option>
                <option value="3">Biology</option>
                <option value="3">Computer</option>
              </select>
              &nbsp
              <select class="form-select theme-select border-0" aria-label="Default select example">
                <option value="1">Most rated</option>
                <option value="2">Newest</option>
                <option value="3">Exprienced</option>
              </select>
              &nbsp
              <select class="form-select theme-select border-0" aria-label="Default select example">
                <option value="1">Delhi</option>
                <option value="2">Mumbai</option>
                <option value="3">Bangalore</option>
              </select>
              <a href="javascript:void(0)" class="btn btn-info d-flex align-items-center ms-2">
                <i class="ri-add-line me-1"></i>
                Filter
              </a>
            </div>
                </div>
            </div>
           
            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4">
                      <div class="card">
                        <div class="card text-center">
                        <center><img src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/users/1.jpg" class="rounded-3 img-fluid" width="90" style="margin-top: 30px;"></center>
                      <div class="mt-n2">
                        <span class="badge bg-primary">Editor</span>
                        <h4 class="mt-3">Matt Carlson</h4>
                        <h6 class="card-subtitle">San Francisco, CA</h6>
                      </div>
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
                                    <h5 class="mb-1">Dribble</h5>
                                    <p class="text-muted mb-0">
                                      Ecommerce Design, App Design
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
                                    <i class="ri-youtube-line display-8"></i>
                                  </div>
                                </div>
                                <div class="col-9 col-xl-10 d-flex align-items-center">
                                  <div>
                                    <h5 class="mb-1">Youtube</h5>
                                    <p class="text-muted mb-0">
                                      Waiting for new videos
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
                                    <h5 class="mb-1">Messanger</h5>
                                    <p class="text-muted mb-0">4 new notifcations</p>
                                  </div>
                                </div>
                              </div>
                       <br>
                          <h3 class="font-weight-medium">
                            Featured Hydroflora Pots Garden &amp; Outdoors
                          </h3>
                          <p class="mb-0 mt-2 text-muted">
                            Titudin venenatis ipsum ac feugiat. Vestibulum
                            ullamcorper quam.
                          </p>
                          <div class="text-end">
                            <button class="
                                btn btn-primary btn-rounded
                                waves-effect waves-light
                                mt-3
                              ">
                              Message now
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                          <div class="card text-center">
                          <center><img src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/users/1.jpg" class="rounded-3 img-fluid" width="90" style="margin-top: 30px;"></center>
                        <div class="mt-n2">
                          <span class="badge bg-primary">Editor</span>
                          <h4 class="mt-3">Matt Carlson</h4>
                          <h6 class="card-subtitle">San Francisco, CA</h6>
                        </div>
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
                                      <h5 class="mb-1">Dribble</h5>
                                      <p class="text-muted mb-0">
                                        Ecommerce Design, App Design
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
                                      <i class="ri-youtube-line display-8"></i>
                                    </div>
                                  </div>
                                  <div class="col-9 col-xl-10 d-flex align-items-center">
                                    <div>
                                      <h5 class="mb-1">Youtube</h5>
                                      <p class="text-muted mb-0">
                                        Waiting for new videos
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
                                      <h5 class="mb-1">Messanger</h5>
                                      <p class="text-muted mb-0">4 new notifcations</p>
                                    </div>
                                  </div>
                                </div>
                         <br>
                            <h3 class="font-weight-medium">
                              Featured Hydroflora Pots Garden &amp; Outdoors
                            </h3>
                            <p class="mb-0 mt-2 text-muted">
                              Titudin venenatis ipsum ac feugiat. Vestibulum
                              ullamcorper quam.
                            </p>
                            <div class="text-end">
                              <button class="
                                  btn btn-primary btn-rounded
                                  waves-effect waves-light
                                  mt-3
                                ">
                                Message now
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="card">
                          <div class="card text-center">
                          <center><img src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/users/1.jpg" class="rounded-3 img-fluid" width="90" style="margin-top: 30px;"></center>
                        <div class="mt-n2">
                          <span class="badge bg-primary">Editor</span>
                          <h4 class="mt-3">Matt Carlson</h4>
                          <h6 class="card-subtitle">San Francisco, CA</h6>
                        </div>
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
                                      <h5 class="mb-1">Dribble</h5>
                                      <p class="text-muted mb-0">
                                        Ecommerce Design, App Design
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
                                      <i class="ri-youtube-line display-8"></i>
                                    </div>
                                  </div>
                                  <div class="col-9 col-xl-10 d-flex align-items-center">
                                    <div>
                                      <h5 class="mb-1">Youtube</h5>
                                      <p class="text-muted mb-0">
                                        Waiting for new videos
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
                                      <h5 class="mb-1">Messanger</h5>
                                      <p class="text-muted mb-0">4 new notifcations</p>
                                    </div>
                                  </div>
                                </div>
                         <br>
                            <h3 class="font-weight-medium">
                              Featured Hydroflora Pots Garden &amp; Outdoors
                            </h3>
                            <p class="mb-0 mt-2 text-muted">
                              Titudin venenatis ipsum ac feugiat. Vestibulum
                              ullamcorper quam.
                            </p>
                            <div class="text-end">
                              <button class="
                                  btn btn-primary btn-rounded
                                  waves-effect waves-light
                                  mt-3
                                ">
                                Message now
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
            @stop