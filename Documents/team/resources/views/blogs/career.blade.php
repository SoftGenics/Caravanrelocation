@php
    $html_tag_data = [];
    $title = 'Blogs List';
    $description= 'Acorn elearning platform quiz list.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
@endsection

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        :root {
            scroll-behavior: smooth;
        }

        @import url('https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap');

        .fo {
            font-family: 'Signika Negative', sans-serif;

        }

        .nav-pills>li.active>a,
        .nav-pills>li.active>a:hover,
        .nav-pills>li.active>a:focus {
            color: #fff !important;
            background-color: #198754 !important;
        }

        .post-item {
            background: #f9f9f9;
            width: 350px;
        }

        #main {
            margin-top: 90px;
        }

        /*--------------------------------------------------------------
        # Sections & Section Header
        --------------------------------------------------------------*/
        section {
            padding: 40px 0;
            overflow: hidden;
        }

        .section-header {
            border-bottom: 2px solid var(--color-black);
        }

        .section-header h2 {
            font-size: 50px;
            color: var(--color-black);
        }

        .section-header p {
            margin-bottom: 0;
        }

        /*--------------------------------------------------------------
        # Scroll top button
        --------------------------------------------------------------*/
        .scroll-top {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 15px;
            bottom: 15px;
            z-index: 99999;
            background: var(--color-primary);
            width: 40px;
            height: 40px;
            border-radius: 4px;
            transition: all 0.4s;
        }

        .scroll-top i {
            font-size: 24px;
            color: #fff;
            line-height: 0;
        }

        .scroll-top:hover {
            background: rgba(var(--color-primary-rgb), 0.8);
            color: #fff;
        }

        .scroll-top.active {
            visibility: visible;
            opacity: 1;
        }

        /*--------------------------------------------------------------
        # Page title
        --------------------------------------------------------------*/
        .page-title {
            font-size: 70px;
            color: var(--color-black);
        }

        /* Form Input Fieldds */
        .form-control:active,
        .form-control:focus {
            outline: none;
            box-shadow: none;
            border-color: var(--color-black);
        }

        .btn:active,
        .btn:focus {
            outline: none;
        }

        .btn.btn-primary {
            background-color: var(--color-black);
            color: var(--color-white);
            border-color: var(--color-black);
        }


        /*--------------------------------------------------------------
        # Posts
        --------------------------------------------------------------*/
        .post-entry-1 {
            margin-bottom: 30px;
        }

        .post-entry-1 img {
            margin-bottom: 30px;
        }

        .post-entry-1 h2 {
            margin-bottom: 20px;
            font-size: 20px;
            font-weight: 500;
            line-height: 1.2;
            font-weight: 500;
        }

        .post-entry-1 h2 a {
            color: var(--color-black);
        }

        .post-entry-1.lg h2 {
            font-size: 40px;
            line-height: 1;
        }

        .post-meta {
            font-size: 11px;
            letter-spacing: 0.07rem;
            text-transform: uppercase;
            font-weight: 600;
            font-family: var(--font-secondary);
            color: rgba(var(--color-black-rgb), 0.4);
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .custom-border {
                border: none !important;
            }
        }

        .author .photo {
            margin-right: 10px;
        }

        .author .photo img {
            width: 40px;
            border-radius: 50%;
            margin-bottom: 0;
        }

        .author .name h3 {
            margin: 0;
            padding: 0;
            font-size: 15px;
            font-family: var(--font-secondary);
        }

        .trending {
            border: 1px solid rgba(var(--color-black-rgb), 0.1);
        }

        .trending>h3 {
            color: var(--color-black);
            padding: 20px;
            border-bottom: 1px solid rgba(var(--color-black-rgb), 0.1);
        }

        .trending .trending-post {
            padding: 0;
            margin: 0;
        }

        .trending .trending-post li {
            padding: 0;
            margin: 0;
            list-style: none;
            display: block;
        }

        .trending .trending-post li a {
            display: block;
            padding: 20px;
            border-bottom: 1px solid rgba(var(--color-black-rgb), 0.1);
            position: relative;
            overflow: hidden;
        }

        .trending .trending-post li a .number {
            position: absolute;
            z-index: -1;
            font-size: 5rem;
            left: -10px;
            top: -20px;
            font-weight: 700;
            color: rgba(var(--color-black-rgb), 0.05);
        }

        .trending .trending-post li a h3 {
            font-size: 18px;
            color: rgba(var(--color-black-rgb), 0.9);
        }

        .trending .trending-post li a .author {
            color: rgba(var(--color-black-rgb), 0.7);
            font-weight: 500;
        }

        .trending .trending-post li a:hover h3 {
            color: rgba(var(--color-black-rgb), 1);
        }

        .trending .trending-post li:last-child a {
            border-bottom: none;
        }

        .post-entry-2 {
            margin-bottom: 30px;
        }

        .post-entry-2 .post-meta {
            font-size: 11px;
            letter-spacing: 0.07rem;
            text-transform: uppercase;
            font-weight: 600;
            font-family: var(--font-secondary);
            color: rgba(var(--color-black-rgb), 0.4);
            margin-bottom: 10px;
        }

        .post-entry-2 .author {
            color: rgba(var(--color-black-rgb), 0.7);
            font-weight: 500;
            margin-bottom: 20px;
            display: block;
        }

        .post-entry-2 .thumbnail {
            flex: 0 0 65%;
        }

        @media (max-width: 960px) {
            .post-entry-2 .thumbnail {
                flex: 0 0 100%;
                margin-bottom: 20px;
            }
        }

        .post-entry-2.half .thumbnail {
            flex: 0 0 50%;
        }

        @media (max-width: 768px) {
            .post-entry-2.half .thumbnail {
                flex: 0 0 100%;
                margin-bottom: 20px;
            }
        }

        .post-entry-2.small-img .thumbnail {
            flex: 0 0 30%;
        }

        @media (max-width: 768px) {
            .post-entry-2.small-img .thumbnail {
                flex: 0 0 100%;
                margin-bottom: 20px;
            }
        }

        .img-bg {
            height: 500px;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            background-position: center center;
        }

        @media (max-width: 768px) {
            .img-bg {
                height: 400px;
            }
        }

        .img-bg:before {
            position: absolute;
            content: "";
            background: rgb(0, 0, 0);
            background: linear-gradient(0deg, rgb(0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%);
            opacity: 0.5;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1;
            top: 0;
        }

        .img-bg .img-bg-inner {
            position: relative;
            z-index: 2;
            max-width: 700px;
            position: relative;
            padding-left: 100px;
            padding-right: 100px;
            margin-bottom: 50px;
        }

        @media (max-width: 768px) {
            .img-bg .img-bg-inner {
                padding-left: 30px;
                padding-right: 30px;
                margin-bottom: 50px;
            }
        }

        .img-bg .img-bg-inner h2,
        .img-bg .img-bg-inner p {
            color: var(--color-white);
        }

        @media (max-width: 500px) {
            .img-bg .img-bg-inner p {
                display: none;
            }
        }

        .custom-swiper-button-next,
        .custom-swiper-button-prev {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 9;
        }

        @media (max-width: 768px) {

            .custom-swiper-button-next,
            .custom-swiper-button-prev {
                display: none;
            }
        }

        .custom-swiper-button-next span,
        .custom-swiper-button-prev span {
            font-size: 20px;
            color: rgba(var(--color-white-rgb), 0.7);
            transition: 0.3s all ease;
        }

        .custom-swiper-button-next:hover span,
        .custom-swiper-button-next:focus span,
        .custom-swiper-button-prev:hover span,
        .custom-swiper-button-prev:focus span {
            color: rgba(var(--color-white-rgb), 1);
        }

        .custom-swiper-button-next {
            right: 40px;
        }

        .custom-swiper-button-prev {
            left: 40px;
        }

        .swiper-pagination .swiper-pagination-bullet {
            background-color: rgba(var(--color-white-rgb), 0.8);
        }

        .swiper-pagination .swiper-pagination-bullet-active {
            background-color: rgba(var(--color-white-rgb), 1);
        }

        .more {
            font-family: var(--font-secondary);
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 500;
            position: relative;
            display: inline-block;
            padding-bottom: 5px;
        }

        .more:before {
            content: "";
            position: absolute;
            height: 2px;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--color-black);
        }

        .post-content {
            padding-left: 10%;
            padding-right: 10%;
        }

        @media (max-width: 768px) {
            .post-content {
                padding-left: 15px;
                padding-right: 15px;
            }
            
        }

        .post-content .firstcharacter {
            float: left;
            font-family: Georgia;
            font-size: 75px;
            line-height: 60px;
            padding-top: 4px;
            padding-right: 8px;
            padding-left: 3px;
        }

        .post-content figure {
            position: relative;
            left: 52%;
            min-width: 990px;
            transform: translateX(-50%);
        }

        @media (max-width: 1255px) {
            .post-content figure {
                min-width: auto;
                left: auto !important;
                transform: none;
            }
        }

        .post-content figure figcaption {
            font-family: var(--font-secondary);
            font-size: 14px;
            padding: 10px 0 0 0;
        }

        .aside-title,
        .category-title {
            text-transform: uppercase;
            letter-spacing: 0.1rem;
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 30px;
            border-bottom: 2px solid var(--color-black);
        }

        .category-title {
            border-bottom: none;
        }

        .custom-pagination a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            font-family: var(--font-secondary);
            margin: 5px;
            transition: 0.3s all ease;
        }

        .custom-pagination a.active {
            background: var(--color-black);
            color: var(--color-white);
        }

        .custom-pagination a.active:hover {
            background: rgba(var(--color-black-rgb), 0.9);
        }

        .custom-pagination a:hover {
            background: rgba(var(--color-black-rgb), 0.1);
        }

        .custom-pagination a.prev,
        .custom-pagination a.next {
            width: auto !important;
            border-radius: 4px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .custom-pagination a.prev:hover,
        .custom-pagination a.next:hover {
            background: rgba(var(--color-black-rgb), 0.1);
        }

        /* custom tab nav on sidebar */
        .aside-block {
            margin-bottom: 30px;
        }

        .aside-block .custom-tab-nav .nav-item {
            display: inline-block;
        }

        .aside-block .custom-tab-nav .nav-item button {
            color: var(--color-black);
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            border-radius: 0;
            padding-left: 0;
            padding-right: 0;
            margin-right: 20px;
        }

        .aside-block .custom-tab-nav .nav-item button.active {
            background-color: var(--color-black) !important;
            background-color: transparent !important;
            color: var(--color-black);
            border-bottom: 2px solid var(--color-black);
        }

        .link-video {
            position: relative;
        }

        .link-video span {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 50%;
            text-align: center;
            display: inline-block;
            background-color: rgba(var(--color-black-rgb), 0.2);
            color: var(--color-white);
        }

        .aside-links li {
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid rgba(var(--color-black-rgb), 0.1);
        }

        .aside-links li a {
            display: block;
            color: rgba(var(--color-black-rgb), 0.7);
        }

        .aside-links li a:hover,
        .aside-links li a:focus {
            color: rgba(var(--color-black-rgb), 1);
        }

        .aside-tags li {
            display: inline-block;
        }

        .aside-tags li a {
            display: inline-block;
            color: rgba(var(--color-black-rgb), 0.7);
            padding: 7px 10px;
            border: 1px solid rgba(var(--color-black-rgb), 0.1);
            margin-bottom: 3px;
            transition: 0.3s all ease;
        }

        .aside-tags li a:hover,
        .aside-tags li a:focus {
            color: rgba(var(--color-black-rgb), 1);
            border: 1px solid rgba(var(--color-black-rgb), 0.5);
        }

        .col-md-3 a {
            color: green;
            font-size: 15px;
            font-weight: 600;
        }

        .glp {
            color: green;
        }

        .nav-pills a {
            color: #198754;
        }

     

      

    </style>




@section('content')
    <header class="py-5 bg-light border-bottom mb-4 fo" style="margin-top: 123px;">
        <div class="container">
         
            
            <div class="text-center mt-2 my-5">
                <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                <p class="lead mb-0">Pircuit blogs</p>

               
                    <button type="button" class="btn btn-success" data-toggle="modal" style="background: green;"
                        data-target="#staticBackdrop">
                        Write blog now
                    </button>
                
            </div>
            
        </div>

        <!-- searching form-->
        <button type="button" class="fw-bolder search-heading">Filter
          <i class="fa fa-filter" style="font-size:28px;color:rgb(16, 150, 108) "></i>
      </button>

      <div id="show-hide-form">
          <form class="row form-group mr-3" action="" style="background-color: #999999; padding:10px">
              <div class="col-12">
                  <input type="search" class="form-control" name="title" style="font-size:20px; padding-bottom:10px; padding-5px;" id="" aria-describedby="helpId"
                      placeholder="Enter your title">
              </div>
             

              <div class="col-2 mt-1">
                  <button type="submit" id="helpId" class="form-text text-muted btn btn-info"
                      style="margin-left:6px;">Search Details</button>
              </div>
          </form>
      </div>
      <!--end searching form-->
    </header>

    <section>
         <!-- header -->
                 
                    <!-- end header -->

        {{-- <div class="container"> --}}
        <div id="exTab3" class="container-fluid main_container "
            style="width: 100%;width: 100%;
        border: solid;
        border-radius: 17px;
        border-color: transparent;">


            <div class="row">

                <div class="col-md-9" data-aos="fade-up">
                    {{-- <h3 class="category-title">Category: Business</h3> --}}
                    @foreach ($blogs as $blog)
                        @if ($blog['status'] == '1')
                            @php
                                $dateValue = strtotime($blog['created_at']);
                                $mon = date('m', $dateValue);
                                //$dateObj   = DateTime::createFromFormat('!m', $mon);
                                $month = date('M', mktime(0, 0, 0, $mon, 10));
                                $datei = date('d', $dateValue);
                            @endphp
                            <div class="d-md-flex post-entry-2 half">
                                <a href="{{ url('blog/single/' . $blog['id']) }}" class="me-4 thumbnail">
                                    <img src="https://picruit.com/public/{{ $blog['mediafile'] }}" alt=""
                                        class="img-fluid" style="height:263px;width:414px;">
                                </a>
                                <div>
                                    <div class="post-meta"> <span class="mx-1">&bullet;</span> <span>{{ $month }}
                                            {{ $datei }}</span></div>
                                    <h3><a href="{{ url('blog/single/' . $blog['id']) }}"
                                            class="glp">{{ $blog['title'] }}</a></h3>
                                            
                                    <p>{!! strip_tags(html_entity_decode(substr($blog['body'], 0, 60) . '...')) !!}</p>
                                    <a href="{{ url('blog/single/' . $blog['id']) }}">Read more</a>
                                    <h3>Created By:
                                   <span>{{ $blog['name']?$blog['name']:"Name is hidden" }}</span> </h3>
                                </div>
                            </div>
                        @endif
                    @endforeach


                    {{-- <div class="text-start py-4">
              <div class="custom-pagination">
                <a href="#" class="prev">Prevous</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#" class="next">Next</a>
              </div>
            </div> --}}
                </div>

                <div class="col-md-3">
                    <!-- ======= Sidebar ======= -->
                    <div class="aside-block">

                        <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-popular" type="button" role="tab"
                                    aria-controls="pills-popular" aria-selected="true">Popular</button>
                            </li>

                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                            <!-- Popular -->
                            <div class="tab-pane show active" id="pills-popular" role="tabpanel"
                                aria-labelledby="pills-popular-tab">

                                <h3 class="sidebar-title"
                                    style="font-weight: 600; color: green;">
Trending Posts</h3>
                                <div class="sidebar-item recent-posts ">
                                    @php
                                        $k = 1;
                                    @endphp
                                    @if(isset($title))
                                    
                                    
                                    @else
                                    
                                    @endif
                                    @foreach (\App\Models\Blog::all()->sortByDesc as $tp)
                                        @if ($tp['status'] == '1' && $k <= 3)
                                            @php
                                                $dateValue = strtotime($tp['created_at']);
                                                $mon = date('m', $dateValue);
                                                $year = date('y', $dateValue);
                                                $month = date('M', mktime(0, 0, 0, $mon, 10)) . ' ';
                                                $datei = date('d', $dateValue) . ' ';
                                                $k++;
                                            @endphp
                                            <div class="post-item clearfix mb-3">
                                                <img src="https://picruit.com/public/{{ $tp['mediafile'] }}"
                                                    alt="" style="width: 100px; border-radius:5px;">
                                                <span class="mx-1 post-meta"></span> <span class="date">
                                                    {{ $datei . $month . $year }}</span>
                                                <br>
                                                <a href="{{ url('blog/single/' . $blog['id']) }}">{{ $tp['title'] }}</a>
                                                <br>

                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel" style="font-weight:bold">Write
                                            your
                                            blog</h5>


                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Title</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    placeholder="Blog Title" maxlength="70">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Upload blog image</label>
                                                <input type="file" class="form-control-file"
                                                    id="exampleFormControlFile1" accept="image/*">
                                            </div>
                                             <div class="form-group">
                                                <label for="exampleFormControlFile1">Write Your Name</label>
                                                <input type="text" class="form-control-file"
                                                    id="inputName" / >
                                            </div>
                                            <br /> <br /> <br />
                                            <div class="form-group">
                                                <label for="exampleFormControlbody1">Blog body</label>
                                                <textarea class="form-control" id="summernote" placeholder="Balabala" autofocus rows="3"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" style="background: green;"
                                            id="blogupload">Upload</button>
                                            <button type="button"  class="btn btn-primary" style="background: green; display:none"
                                            id="sending">Uploading......</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- End Tags -->

                    </div>

                </div>
            </div>


        </div>
        </div>
        {{-- </div> --}}
    </section>
    @php
        if (Session::has('users')) {
            $users = session()->get('users');
            $user_id = $users['id'];
        } else {
            $user_id = 'null';
        }
    @endphp
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        $(document).ready(() => {
          
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            // start popup
            $("#show-hide-form").hide(1000);
            $(".search-heading").click(function() {
                $("#show-hide-form").toggle(2000);
            });
            // end popup

            let profile;
            const user_id = "{{ $user_id }}";
            $("#blogupload").click(function() {
                const file = $('#exampleFormControlFile1')[0].files[0]
                let markupStr = $('#summernote').summernote('code');
                console.log(markupStr);
                let btitle = $("#exampleFormControlInput1").val();
                let name = $("#inputName").val();
               
                profile = file;
                var formData = new FormData();
                formData.append('profile', profile);
                formData.append('user_id', user_id);
                formData.append('name', name);
                formData.append('btitle', btitle);
                formData.append('bbody', markupStr);
                $.ajax({
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: 'post',
                    data: formData,
                    url: "{{ route('update-blog') }}",
                    beforeSend: function() {    
       $('#sending').show();
       $('#blogupload').hide();
        },
                    success: function(response) {
                        if (response.success) {
                           
                            Swal.fire(
                                'Good job!',
                                'Blog uploaded successfully!',
                                'success'
                            )
                             $('#sending').hide();
       $('#blogupload').show();
                        } else {
                            Swal.fire(
                                'Sorry!',
                                'some error occured',
                                'error'
                            )
                            console.log("test");
                        }
                        setTimeout(() => {
                            location.reload();
                        }, 2000);
                    },
                    error: function(data) {

                        var errors = data.responseJSON;
                        console.log(errors);
                    }
                });
            });
        });
    </script>
 @endsection
