@extends ('layouts.app')
@section('content')
    <link   href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css' />
    <link   href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bad+Script&display=swap');

        .demo {
            background: #f8f7f6;
        }

        #testimonial-slider {
            padding: 98px 39px 37px 24px;
            background: #fff;
            text-align: center;
            box-shadow: 0 0 115px 19px rgb(236 236 236);
            border-radius: 15px;
        }

        #testimonial-slider .owl-nav .owl-prev {
            width: 46px;
            height: 46px;
            background-color: #198754;
            display: inline-block;
            text-align: center;
            line-height: 46px;
            border-radius: 50%;
            color: #fff;
            content: '\f104';
            font-size: 22px;
            font-family: 'FontAwesome';
            transition: all .5s;
            opacity: 0.5;
        }

        #testimonial-slider .owl-nav .owl-next {
            width: 46px;
            height: 46px;
            background-color: #198754;
            display: inline-block;
            text-align: center;
            line-height: 46px;
            border-radius: 50%;
            color: #fff;
            content: '\f105';
            font-size: 22px;
            font-family: 'FontAwesome';
            transition: all .5s;
            opacity: 0.5;
        }

        #testimonial-slider .owl-nav .owl-next:hover {
            opacity: 1
        }

        #testimonial-slider .owl-nav .owl-prev:hover {
            opacity: 1
        }

        .testimonial .description {
            font-size: 24px;
            color: #777;
            line-height: 26px;
            text-indent: 30px;
            position: relative;
        }

        .testimonial .description:before {
            content: "\f10d";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            position: absolute;
            top: 0;
            left: -15px;
        }

        .testimonial .title {
            font-size: 24px;
            font-weight: bold;
            color: #363636;
            text-transform: capitalize;
            margin: 0;
        }

        .testimonial .post {
            display: block;
            font-size: 15px;
            color: #363636;
        }

        .owl-buttons {
            width: 100%;
            height: 40px;
            position: absolute;
            bottom: 40%;
            left: 0;
        }

        .owl-prev,
        .owl-next {
            position: absolute;
            left: 0;
            transition: all 0.4s ease-in-out 0s;
        }

        .owl-next {
            left: auto;
            right: 0;
        }

        .owl-buttons .owl-prev:before,
        .owl-buttons .owl-next:before {
            content: "\f104";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            font-size: 60px;
            font-weight: 900;
            color: #cacaca;
            line-height: 20px;
            opacity: 1;
        }

        .owl-buttons .owl-next:before {
            content: "\f105";
        }

        .owl-buttons .owl-prev:hover:before,
        .owl-buttons .owl-next:hover:before {
            opacity: 1;
        }

        .owl-theme .owl-controls .owl-buttons div {
            background: transparent;
        }

        .owl-theme .owl-controls {
            margin-top: 40px;
        }

        .owl-theme .owl-controls .owl-page span {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 4px solid #ccc;
            background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_q3zNM_dIG78YnvVRSZdvRm8h0UcFn5sFPw&usqp=CAU") no-repeat;
            background-size: cover;
            transition: all 0.3s ease-in-out 0s;
        }

        .owl-theme .owl-controls .owl-page:nth-child(2) span {
            background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2WtP8bzmRVj2uceNb_HkZzKiZKASDtzhlwQ&usqp=CAU") no-repeat;
            background-size: cover;
        }

        .owl-theme .owl-controls .owl-page:nth-child(3) span {
            background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRq0RlGJVa8AAceIGHdtbesX17dsU49HwjYPg&usqp=CAU") no-repeat;
            background-size: cover;
        }

        .owl-theme .owl-controls.clickable .owl-page:hover span {
            opacity: 0.5;
        }

        .owl-theme .owl-controls .owl-page.active span,
        .owl-theme .owl-controls .owl-page.active:hover span {
            border-color: #d133ff;
            opacity: 1;
        }

        @media only screen and (max-width: 479px) {
            .owl-buttons {
                bottom: 30%;
            }
        }

        .drops {
            position: relative;
            left: 0;
            z-index: 1;
            float: left;
            min-width: 160px;
            padding: 5px 0;
            margin: 0px 0px 5px;
            font-size: 18px;
            text-align: center;
            list-style: none;
            background-color: #f2f6f3;
            ;
            background-clip: padding-box;
            border-radius: 5px;
        }
        /* Default styles for mobile (hide desktop image) */
.desktop-img {
    display: none;
}

.mapouter{
    display: block; /* Hide mobile image */
}
.mapoutermob{
         display: none;
    }
/* Show desktop image for larger screens (desktop) */
@media (min-width: 768px) {
    .desktop-img {
        display: block; /* Show desktop image */
    }

    .mobile-img {
        display: none; /* Hide mobile image */
    }
    
    .mapoutermob{
         display: block;
    }
.mapouter{
    display: none; /* Hide mobile image */
}

  
}



form#contact {
  margin-left: -30px !important;
  position:static;
  z-index: 1;
  background-image: url(../images/contact-form-bg.png);
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
  padding: 40px 100px;
  border-radius: 20px;
}
.info {
  margin-top: 30px;
  position: relative;
  z-index: 5;
  display: inline-flex;
}

 .info span {
  opacity: 1;
  display: inline-flex;
  margin-right: 30px;
}

 .info span i {
  float: left;
  width: 46px;
  height: 46px;
  display: inline-block;
  text-align: center;
  line-height: 46px;
  background: rgb(255,104,95);
  background: linear-gradient(105deg, #198754 0%, rgb(122 175 38) 100%);
  border-radius: 50%;
  color: #fff;
  font-size: 22px;
  margin-left: 30px;
  margin-right: 15px;
}

.info span a {
  color: #85aeea;
  font-size: 14px;
  font-weight: 400;
  line-height: 25px;
  text-transform: none;
}

    </style>
   
  
    <div class="main-banner" id="vantabck">
        
        <nav class="social-nav">
            <ul>
                <li class="snav"><a href="https://www.facebook.com/pioneeracademyldh?mibextid=ZbWKwL"><i
                            class="bi bi-facebook"></i></a></li>
                <li class="snav"><a href="https://www.linkedin.com/company/pioneer-ludhiana/"><i
                            class="bi bi-linkedin"></i></a></li>
                {{-- <li class="snav"><a href="#"><i class="bi bi-instagram"></i></a></li> --}}
                <li class="snav"><a href="https://instagram.com/pioneerldh?igshid=ZDdkNTZiNTM="><i
                            class="bi bi-instagram"></i></a></li>

            </ul>
        </nav>
        <div class="container">
            <div class="row">
                  @include('sweet::alert')
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="owl-carousel owl-banner">
                                <div class="item header-text">
                                    {{-- <h6>Tag line</h6> --}}
                                    <h2 class="title-ban"style="color: white; font-weight:bolder; font-style: italic;">
                                        PIONEER
                                        {{-- <span>...</span>..... --}}
                                    </h2>
                                    {{-- <p ><h3 ><em style="font-weight:bolder;
    font-family: monospace;">Register for</em></h3>
    <h4 style="line-height: 1.5;color: white; font-weight:bolder;">
HR Services & Placements,
Freelancing work,<br>
Tuitions-Online/offline Batches,<br>
GATE/IES/JE/SDE,<br>UGC/IAS/PCS,<br>
11th/12th/ IIT- JEE/NEET/CA,</h4> --}}
                                    <h3 style="color: white; font-style: italic;"><span><b>Hire the best services and
                                                freelancers<b> </span><span> </span></h3>
                                    </p>
                                    <div class="down-buttons">

                                        {{-- <div class="main-blue-button-hover">
                      <a href="href="{{ url('signup') }}"">Join now</a>
                    </div> --}}
                                        <details class="dropdown">
                                            <summary role="button">
                                              <a class="button btn dropdown-toggle" style="font-style: italic; background-color: #eee;" >Post job / Teacher
                                                    requirment</a>  
                                            </summary>
                                            <ul class="drops" style="font-style: italic;">
                                                <li><a href="/epostnew" style="color:green">Post work</a></li>
                                                <div class="dropdown-divider"></div>
                                                <li><a href="{{ url('post/tution/req') }}" style="color:green">Post Tutor Request</a></li>
                                                <div class="dropdown-divider"></div>
                                                <li><a href="{{url('/find-job')}}" style="color:green">Find work</a></li>
                                                <div class="dropdown-divider"></div>
                                                <li><a href="/connect/tution" style="color:green">Connect Tutor</a></li>

                                            </ul>
                                        </details>
                                    </div>
                                    <h3 style="font-style: italic;">ONLINE AND OFFLINE</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="services" class="our-services section">
        <div class="services-right-dec">

        </div>
        <div class="container">
            <div class="services-left-dec">

            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Get your career on <span>right path</span></h2>
                        <span>tag line...</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-services">
                        <div class="item" data-aos="fade-right" data-aos-delay="50" data-aos-duration="800">
                            <h4>For freelancers</h4>
                            <div class="icon"><img
                                    src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/freelancer.png"
                                    alt="freelancer"></div>
                            <p>The ultimate online destination for freelancers of all kinds.</p>
                        </div>
                        <div class="item" data-aos="fade-left" data-aos-delay="50" data-aos-duration="800">
                            <h4>Teachers</h4>
                            <div class="icon"><img
                                    src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/teacher.png"
                                    alt="teacher"></div>
                            <p>Learn, teach and grow with the online community of tutors.</p>
                        </div>
                        <div class="item" data-aos="fade-right" data-aos-delay="50" data-aos-duration="800">
                            <h4>Search jobs</h4>
                            <div class="icon"><img
                                    src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/job.png"
                                    alt="job"></div>
                            <p>The online platform that connects job seekers and employers in a fast and easy way.</p>
                        </div>
                        <div class="item" data-aos="fade-left" data-aos-delay="50" data-aos-duration="800">
                            <h4>Students</h4>
                            <div class="icon"><img
                                    src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/students.png"
                                    alt="student"></div>
                            <p>The best tutors for your academic success.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
 @php
                    $stud = \App\Models\User::where('category','1')->get();
                    $Teacfa = \App\Models\User::where('category','2')->get();
                    $Freel = \App\Models\User::where('category','4')->get();
                     $emp = \App\Models\User::where('category','3')->get();
                    $student =count($stud);
                    $teacher =count($Teacfa);
                    $freelancer =count($Freel);
                    $employer =count($emp);
                    
                @endphp
    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-image" data-aos="fade-right" data-aos-delay="50" data-aos-duration="800">
                        <img src="https://www.pngall.com/wp-content/uploads/12/Illustration-PNG-Images.png"
                            alt="Two Girls working together">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>our Community</h2>
                        <p>We are a global community working in different sectors with following database and going on rise with each passing day. You can find Best Hr for every  segment  here</p>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="fact-item">
                                    <div class="count-area-content">
                                        <div class="icon">
                                            <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/students.png"
                                                alt="students">
                                        </div>
                                        <div class="count-digit" data-aos="fade-up" data-aos-delay="50"
                                            data-aos-duration="800">{{$student}}</div>
                                        <div class="count-title">Students</div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="fact-item">
                                    <div class="count-area-content">
                                        <div class="icon">
                                            <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/freelancer.png"
                                                alt="freelancer">
                                        </div>
                                        <div class="count-digit" data-aos="fade-up" data-aos-delay="50"
                                            data-aos-duration="800">{{$freelancer}}</div>
                                        <div class="count-title">Freelancers</div>
                                       
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-3">
                                <div class="fact-item">
                                    <div class="count-area-content">
                                        <div class="icon">
                                            <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/freelancer.png"
                                                alt="freelancer">
                                        </div>
                                        <div class="count-digit" data-aos="fade-up" data-aos-delay="50"
                                            data-aos-duration="800">{{$employer}}</div>
                                        <div class="count-title">Employer</div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="fact-item">
                                    <div class="count-area-content">
                                        <div class="icon">
                                            <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/teacher.png"
                                                alt="teacher">
                                        </div>
                                        <div class="count-digit" data-aos="fade-up" data-aos-delay="50"
                                            data-aos-duration="800">{{ $teacher}}</div>
                                        <div class="count-title">Teachers</div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="portfolio" class="our-portfolio section">
        {{-- <div class="portfolio-left-dec">
      <img src="assets/images/portfolio-left-dec.png" alt="">
    </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2 style="font-family: 'Bad Script', cursive;font-size:36px; font-weight:900;">Blogging &nbsp<em>Tree</em> </h2>

                    </div>
                </div>
            </div>
        </div>
      <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="owl-carousel owl-portfolio">
                @php
                    $K = 0;
                @endphp
                @foreach (\App\Models\Blog::all() as $blog)
                    @if ($blog['status'] == '1' && $K < 8)
                        <div class="item">
                            <div class="thumb">
                                <a rel="sponsored" href="{{ url('blog/single/' . $blog['id']) }}" target="_parent">
                                    <img src="https://picruit.com/public/{{ $blog['mediafile'] }}" alt="blog image"
                                        style="width:400px;height:400px;object-fit: cover; object-position: 25% 25%;">
                                    <div class="hover-effect shadow-lg">
                                        <div class="inner-content">
                                            <h4>{{ $blog['title'] }}</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @php
                            $K++;
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

    <!--</div>-->
    <br>
    <br>
    <div class="row">
        <div class="col-md-offset-2 col-md-8 ">
            <div id="testimonial-slider" class="owl-carousel">
                <div class="testimonial">
                    <p class="description">
                        Excellent "platform" for connecting tutors and pupils. The Pircuit staff is very helpful. They seem
                        to enjoy working in a friendlier fashion all the time. Really, in this extremely competitive
                        environment, it's wonderful for students, parents, and tutors as well.
                    </p>
                    <h3 class="title">Manoj gupta</h3>
                    <span class="post">Delhi</span>
                </div>

                <div class="testimonial">
                    <p class="description">
                        This is a very helpful website that is also free, and they offer free mock tests as well as
                        findings. This website really does amaze me.
                    </p>
                    <h3 class="title">T.K Agarwal</h3>
                    <span class="post">Bhopal</span>
                </div>

                <div class="testimonial">
                    <p class="description">
                        I registered as a tutor on Pircuit two months ago. This platform gives me the confidence to start my
                        own work and help me to grow within small time period. I reached to the potential client. Thank you
                        LearnPick.
                    </p>
                    <h3 class="title">Miranda Joy</h3>
                    <span class="post">kolkata</span>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="video" class="our-videos section">
        <div class="videos-left-dec">
            <img style="filter: brightness(0) saturate(100%) invert(39%) sepia(99%) saturate(393%) hue-rotate(100deg) brightness(87%) contrast(84%);"
                src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/videos-left-dec.png"
                alt="videos left dec">
        </div>
        <div class="videos-right-dec">
            <img style="filter: brightness(0) saturate(100%) invert(39%) sepia(99%) saturate(393%) hue-rotate(100deg) brightness(87%) contrast(84%);"
                src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/videos-right-dec.png"
                alt="video right dec">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-8">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <iframe width="100%" height="auto"
                                                        src="https://www.youtube.com/embed/JynGuQx4a1Y"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                    <div class="overlay-effect">
                                                        <a href="#">
                                                            <h4>Project One</h4>
                                                        </a>
                                                        <span>Edu &amp; pipeline</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <iframe width="100%" height="auto"
                                                        src="https://www.youtube.com/embed/RdJBSFpcO4M"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                    <div class="overlay-effect">
                                                        <a href="#">
                                                            <h4>Second Project</h4>
                                                        </a>
                                                        <span>Advertising &amp; pipeline</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <iframe width="100%" height="auto"
                                                        src="https://www.youtube.com/embed/ZlfAjbQiL78"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                    <div class="overlay-effect">
                                                        <a href="#">
                                                            <h4>Project Three</h4>
                                                        </a>
                                                        <span>Digital &amp; pipeline</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <iframe width="100%" height="auto"
                                                        src="https://www.youtube.com/embed/mx1WseE7-0Y"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                    <div class="overlay-effect">
                                                        <a href="#">
                                                            <h4>Fourth Project</h4>
                                                        </a>
                                                        <span>Edu &amp; Advertising</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <div class="menu">
                                        <div class="active">
                                            <div class="thumb">
                                                <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/video-thumb-01.png"
                                                    alt="">
                                                <div class="inner-content">
                                                    <h4>Project One</h4>
                                                    <span>Edu &amp; pipeline</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/video-thumb-02.png"
                                                    alt="">
                                                <div class="inner-content">
                                                    <h4>Second Project</h4>
                                                    <span>Advertising &amp; pipeline</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/video-thumb-03.png"
                                                    alt="pipeline">
                                                <div class="inner-content">
                                                    <h4>Project Three</h4>
                                                    <span>Digital &amp; pipeline</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/video-thumb-04.png"
                                                    alt="Edu Work">
                                                <div class="inner-content">
                                                    <h4>Fourth Project</h4>
                                                    <span>Edu &amp; Advertising</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-7 col-sm-12" data-aos="fade-right" data-aos-delay="50" data-aos-duration="600">
                    <div class="section-heading">
                        <h2>Feel free to <em>Contact</em> us <span></span></h2>
                        <div id="map">
                            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=pioneer academy ludhiana&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Game</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div>
                            <div class="mapoutermob"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=pioneer academy ludhiana&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Game</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div>
                        </div>
                        <div class="info row" >
                            <div class="col-lg-6 col-sm-12 mt-sm-2">
                            <span ><i class="fa fa-phone"></i> <a href="tel:+919878865747" style="color:#0c9cf7"><b>+919878865747</b>
                                    </a></span>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 mt-md-3 mt-sm-8">
                                         <span><i class="fa fa-envelope"></i> <a 
                                    href="mailto:picruit.pioneer@gmail.com" style="color:#0c9cf7"><b>picruit.pioneer@gmail.com</b></a></span> </div>
                           
                        </div>
                    </div>
                </div>
                
                 <!-- form-raj -->
                 @include('sweet::alert')
                <div class="col-lg-5 col-sm-12" data-aos="fade-left" data-aos-delay="100"
                    data-aos-duration="800">
                    <form id="contact" action="{{route('feel-free')}}" method="post">
                        @csrf
                        <div class="row"> 
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Name"
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="surname" name="number" id="surname" placeholder="phone number"
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text"  style="width: 100%; margin-bottom:15px;" name="yourrequest" id="website" placeholder="Your request"
                                        required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 ">
                                <fieldset>
                                    <button type="submit" style="width: 100%;" id="form-submit" class="main-button col-sm-12">Submit Request <i class="fa fa-paper-plane-o"
                                        style="color:rgb(248, 251, 248); padding-top:5px; padding-left:5px;"></i></button>

                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                
       </div>
       </div>
   
    
    <div class="footer-dec">
    <img class="desktop-img" src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/footer-dec.png"
        alt="footer-dec for desktop">
    <img class="mobile-img" src="https://picruit.com/public/mobileimage/footer.webp" alt="footer-dec for mobile">
</div>
@stop
