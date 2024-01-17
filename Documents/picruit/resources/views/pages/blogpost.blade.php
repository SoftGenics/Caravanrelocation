@extends ('layouts.app')
@section('content')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap');

        .fo {
            font-family: 'Signika Negative', sans-serif;

        }

        .blog-listing {
            padding-top: 30px;
            padding-bottom: 30px;
        }


        .blog-grid {
            box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
            border-radius: 5px;
            overflow: hidden;
            background: #ffffff;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .blog-grid .blog-img {
            position: relative;
        }

        .blog-grid .blog-img .date {
            position: absolute;
            background: #198754;
            color: #ffffff;
            padding: 8px 15px;
            left: 10px;
            top: 10px;
            border-radius: 4px;
        }

        .blog-grid .blog-img .date span {
            font-size: 22px;
            display: block;
            line-height: 22px;
            font-weight: 700;
        }

        .blog-grid .blog-img .date label {
            font-size: 14px;
            margin: 0;
        }

        .blog-grid .blog-info {
            padding: 20px;
        }

        .blog-grid .blog-info h5 {
            font-size: 22px;
            font-weight: 700;
            margin: 0 0 10px;
        }

        .blog-grid .blog-info h5 a {
            color: #20247b;
        }

        .blog-grid .blog-info p {
            margin: 0;
        }

        .blog-grid .blog-info .btn-bar {
            margin-top: 20px;
        }


        /* Blog Sidebar
    -------------------*/
        .blog-aside .widget {
            box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
            border-radius: 5px;
            overflow: hidden;
            background: #ffffff;
            margin-top: 15px;
            margin-bottom: 15px;
            width: 100%;
            display: inline-block;
            vertical-align: top;
        }

        .blog-aside .widget-body {
            padding: 15px;
        }

        .blog-aside .widget-title {
            padding: 15px;
            border-bottom: 1px solid #eee;
        }

        .blog-aside .widget-title h3 {
            font-size: 20px;
            font-weight: 700;
            color: #198754;
            margin: 0;
        }

        .blog-aside .widget-author .media {
            margin-bottom: 15px;
        }

        .blog-aside .widget-author p {
            font-size: 16px;
            margin: 0;
        }

        .blog-aside .widget-author .avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
        }

        .blog-aside .widget-author h6 {
            font-weight: 600;
            color: #20247b;
            font-size: 22px;
            margin: 0;
            padding-left: 20px;
        }

        .blog-aside .post-aside {
            margin-bottom: 15px;
        }

        .blog-aside .post-aside .post-aside-title h5 {
            margin: 0;
        }

        .blog-aside .post-aside .post-aside-title a {
            font-size: 18px;
            color: #20247b;
            font-weight: 600;
        }

        .blog-aside .post-aside .post-aside-meta {
            padding-bottom: 10px;
        }

        .blog-aside .post-aside .post-aside-meta a {
            color: #6F8BA4;
            font-size: 12px;
            text-transform: uppercase;
            display: inline-block;
            margin-right: 10px;
        }

        .blog-aside .latest-post-aside+.latest-post-aside {
            border-top: 1px solid #eee;
            padding-top: 15px;
            margin-top: 15px;
        }

        .blog-aside .latest-post-aside .lpa-right {
            width: 90px;
        }

        .blog-aside .latest-post-aside .lpa-right img {
            border-radius: 3px;
        }

        .blog-aside .latest-post-aside .lpa-left {
            padding-right: 15px;
        }

        .blog-aside .latest-post-aside .lpa-title h5 {
            margin: 0;
            font-size: 15px;
        }

        .blog-aside .latest-post-aside .lpa-title a {
            color: #20247b;
            font-weight: 600;
        }

        .blog-aside .latest-post-aside .lpa-meta a {
            color: #6F8BA4;
            font-size: 12px;
            text-transform: uppercase;
            display: inline-block;
            margin-right: 10px;
        }

        .tag-cloud a {
            padding: 4px 15px;
            font-size: 13px;
            color: #ffffff;
            background: #20247b;
            border-radius: 3px;
            margin-right: 4px;
            margin-bottom: 4px;
        }

        .tag-cloud a:hover {
            background: #198754;
        }

        .blog-single {
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .article {
            box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
            border-radius: 5px;
            overflow: hidden;
            background: #ffffff;
            padding: 15px;
            margin: 15px 0 30px;
        }

        .article .article-title {
            padding: 15px 0 20px;
        }

        .article .article-title h6 {
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .article .article-title h6 a {
            text-transform: uppercase;
            color: #198754;
            border-bottom: 1px solid #fc5356;
        }

        .article .article-title h2 {
            color: #20247b;
            font-weight: 600;
        }

        .article .article-title .media {
            padding-top: 15px;
            border-bottom: 1px dashed #ddd;
            padding-bottom: 20px;
        }

        .article .article-title .media .avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            overflow: hidden;
        }

        .article .article-title .media .media-body {
            padding-left: 8px;
        }

        .article .article-title .media .media-body label {
            font-weight: 600;
            color: #198754;
            margin: 0;
        }

        .article .article-title .media .media-body span {
            display: block;
            font-size: 12px;
        }

        .article .article-content h1,
        .article .article-content h2,
        .article .article-content h3,
        .article .article-content h4,
        .article .article-content h5,
        .article .article-content h6 {
            color: #20247b;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .article .article-content blockquote {
            max-width: 600px;
            padding: 15px 0 30px 0;
            margin: 0;
        }

        .article .article-content blockquote p {
            font-size: 20px;
            font-weight: 500;
            color: #198754;
            margin: 0;
        }

        .article .article-content blockquote .blockquote-footer {
            color: #20247b;
            font-size: 16px;
        }

        .article .article-content blockquote .blockquote-footer cite {
            font-weight: 600;
        }

        .article .tag-cloud {
            padding-top: 10px;
        }

        .article-comment {
            box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
            border-radius: 5px;
            overflow: hidden;
            background: #ffffff;
            padding: 20px;
        }

        .article-comment h4 {
            color: #20247b;
            font-weight: 700;
            margin-bottom: 25px;
            font-size: 22px;
        }

        img {
            max-width: 100%;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        /* Contact Us
    ---------------------*/
        .contact-name {
            margin-bottom: 30px;
        }

        .contact-name h5 {
            font-size: 22px;
            color: #20247b;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .contact-name p {
            font-size: 18px;
            margin: 0;
        }

        .social-share a {
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            text-align: center;
            margin-right: 10px;
        }

        .social-share .dribbble {
            box-shadow: 0 8px 30px -4px rgba(234, 76, 137, 0.5);
            background-color: #ea4c89;
        }

        .social-share .behance {
            box-shadow: 0 8px 30px -4px rgba(0, 103, 255, 0.5);
            background-color: #0067ff;
        }

        .social-share .linkedin {
            box-shadow: 0 8px 30px -4px rgba(1, 119, 172, 0.5);
            background-color: #0177ac;
        }

        .contact-form .form-control {
            border: none;
            border-bottom: 1px solid #20247b;
            background: transparent;
            border-radius: 0;
            padding-left: 0;
            box-shadow: none !important;
        }

        .contact-form .form-control:focus {
            border-bottom: 1px solid #198754;
        }

        .contact-form .form-control.invalid {
            border-bottom: 1px solid #ff0000;
        }

        .contact-form .send {
            margin-top: 20px;
        }

        @media (max-width: 767px) {
            .contact-form .send {
                margin-bottom: 20px;
            }
        }

        .section-title h2 {
            font-weight: 700;
            color: #20247b;
            font-size: 45px;
            margin: 0 0 15px;
            border-left: 5px solid #198754;
            padding-left: 15px;
        }

        .section-title {
            padding-bottom: 45px;
        }

        .contact-form .send {
            margin-top: 20px;
        }

        .px-btn {
            padding: 0 50px 0 20px;
            line-height: 60px;
            position: relative;
            display: inline-block;
            color: #20247b;
            background: none;
            border: none;
        }

        .px-btn:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            border-radius: 30px;
            background: transparent;
            border: 1px solid rgba(252, 83, 86, 0.6);
            border-right: 1px solid transparent;
            -moz-transition: ease all 0.35s;
            -o-transition: ease all 0.35s;
            -webkit-transition: ease all 0.35s;
            transition: ease all 0.35s;
            width: 60px;
            height: 60px;
        }

        .px-btn .arrow {
            width: 13px;
            height: 2px;
            background: currentColor;
            display: inline-block;
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
            right: 25px;
        }

        .px-btn .arrow:after {
            width: 8px;
            height: 8px;
            border-right: 2px solid currentColor;
            border-top: 2px solid currentColor;
            content: "";
            position: absolute;
            top: -3px;
            right: 0;
            display: inline-block;
            -moz-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .post-comments {
            border-bottom: solid 2px;

            border-color: green;
            margin-bottom: 11px;
        }

        .comment-text-sm {
            font-size: 1.2em;
            font-weight: 600;
        }

        .mr-2 {
            font-size: 1.4em !important;
            color: green !important;
        }

        .actives {
            background-color: rgb(255, 0, 0) !important;
        }
    </style>

    <header class="py-5 bg-light border-bottom mb-4 fo" style="margin-top: 123px;">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder shadow-lg" style="font-style: italic;">Welcome to Blog Home!</h1>
                <p class="lead mb-0">Picruit blogs</p>
                @if (Session::has('users'))
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                        Write blog now
                    </button>
                @endif
            </div>
        </div>
    </header>
    <div class="blog-single ">
        <div class="container">
            <div class="row align-items-start">
                @foreach ($data as $blogsingle)
                    @if ($blogsingle['status'] == '1')
                        <div class="col-lg-8 m-15px-tb">
                            <article class="article">
                                <div class="article-img">
                                    <img src="https://picruit.com/public/{{ $blogsingle['mediafile'] }}" title=""
                                        alt="" style="width:100%; height:90vh">
                                </div>
                                <div class="article-title">
                                    @php
                                        $id = $blogsingle['id'];
                                        $user_id=Session::has('users');
                                        $comments = \App\Models\Comments::where('blog_id', $id)->get();
                                        $like = \App\Models\Like::where('blog_id', $id)->get();
                                         $liked = \App\Models\Like::where('blog_id', $id)->get();
                                         $checked=false;
                                         if($liked){
                                         $checked=false;
                                         }
                                         
                                        
                                        $total_com = count($comments);
                                        $total_like = count($like);
                                    @endphp
                                    <h2 style="font-family: roboto; text-transform: uppercase; color:#198754; font-weight:800;">{{ $blogsingle['title'] }} &nbsp &nbsp <span
                                            class="align-middle">{{ $total_like }}</span>
                                            @if($checked)
                                            <svg xmlns="http://www.w3.org/2000/svg" id="likefill" width="15"
                                                height="15" viewBox="0 0 20 20" fill="filled" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="acorn-icons acorn-icons-like text-primary me-1">
                                                <path
                                                    d="M7 16V9.67097C7 9.23919 7.13974 8.819 7.39832 8.47321L7.83416 7.8904C8.26979 7.30784 8.53833 6.61753 8.61086 5.89373L8.83055 3.70144C8.92826 2.72635 9.76756 1.85793 10.6682 2.24409 11.8877 2.76691 12.4524 4.15875 11.9236 6.69693 11.7865 7.35486 12.2627 8.00651 12.9348 8.00651L15.8519 8.00651C17.0126 8.00651 17.9296 8.99136 17.8468 10.1491L17.6805 12.4748C17.5611 14.1456 17.1521 15.7828 16.4718 17.3135 16.2862 17.7309 15.8722 18 15.4154 18H9C7.89543 18 7 17.1046 7 16zM4.5 9C4.96466 9 5.19698 9 5.39018 9.03843 6.18356 9.19624 6.80376 9.81644 6.96157 10.6098 7 10.803 7 11.0353 7 11.5L7 15.5C7 15.9647 7 16.197 6.96157 16.3902 6.80376 17.1836 6.18356 17.8038 5.39018 17.9616 5.19698 18 4.96466 18 4.5 18V18C4.03534 18 3.80302 18 3.60982 17.9616 2.81644 17.8038 2.19624 17.1836 2.03843 16.3902 2 16.197 2 15.9647 2 15.5L2 11.5C2 11.0353 2 10.803 2.03843 10.6098 2.19624 9.81644 2.81644 9.19624 3.60982 9.03843 3.80302 9 4.03535 9 4.5 9V9z">
                                                </path>
                                            </svg>

                                        
                                        @else
                                         <a
                                            href="{{ url('/bloglike') }}/{{ $id }}">

                                            <svg xmlns="http://www.w3.org/2000/svg" id="likefill" width="15"
                                                height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="acorn-icons acorn-icons-like text-primary me-1">
                                                <path
                                                    d="M7 16V9.67097C7 9.23919 7.13974 8.819 7.39832 8.47321L7.83416 7.8904C8.26979 7.30784 8.53833 6.61753 8.61086 5.89373L8.83055 3.70144C8.92826 2.72635 9.76756 1.85793 10.6682 2.24409 11.8877 2.76691 12.4524 4.15875 11.9236 6.69693 11.7865 7.35486 12.2627 8.00651 12.9348 8.00651L15.8519 8.00651C17.0126 8.00651 17.9296 8.99136 17.8468 10.1491L17.6805 12.4748C17.5611 14.1456 17.1521 15.7828 16.4718 17.3135 16.2862 17.7309 15.8722 18 15.4154 18H9C7.89543 18 7 17.1046 7 16zM4.5 9C4.96466 9 5.19698 9 5.39018 9.03843 6.18356 9.19624 6.80376 9.81644 6.96157 10.6098 7 10.803 7 11.0353 7 11.5L7 15.5C7 15.9647 7 16.197 6.96157 16.3902 6.80376 17.1836 6.18356 17.8038 5.39018 17.9616 5.19698 18 4.96466 18 4.5 18V18C4.03534 18 3.80302 18 3.60982 17.9616 2.81644 17.8038 2.19624 17.1836 2.03843 16.3902 2 16.197 2 15.9647 2 15.5L2 11.5C2 11.0353 2 10.803 2.03843 10.6098 2.19624 9.81644 2.81644 9.19624 3.60982 9.03843 3.80302 9 4.03535 9 4.5 9V9z">
                                                </path>
                                            </svg>
                                        </a>
                                        
                                        @endif
                                        
                                        <button type="button" id="btnchiefdom" class="btn btn-success"
                                            onclick="like({{ $blogsingle['id'] }})"><i
                                                class="bi bi-heart-fill"></i></button></a></h2>
                                                <!--<a href="/edit-blogs-form/{{ $blogsingle['id'] }}" class="btn btn-info">Edit</a>-->
                                                
                                    <div class="media">
                                        <div class="media-body">
                                            {{-- <label>Rachel Roth</label> --}}
                                            <span style="font-size:20px; color:#0a5844; font-weight:600;">{{ $blogsingle['created_at'] }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-content">
                                    {!! $blogsingle['body'] !!}
                                </div>

                            </article>
                            <div class="contact-form article-comment">
                                <h4>Comment</h4>

                                <div class="row">
                                    @if (Session::has('users'))
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" id="message" placeholder="Your comment *" rows="2" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="send">
                                                <button class="px-btn theme" id="sendcomm"><span>Send</span> <i
                                                        class="arrow"></i></button>
                                            </div>
                                        </div>
                                    @endif
                                    @php
                                        
                                        $b_id = $blogsingle['id'];
                                    @endphp
                                    @foreach (\App\Models\Comments::all()->where('blog_id', $b_id) as $comm)
                                        @if ($comm['status'] == '1')
                                            <br>
                                            @php
                                                $dateValue = strtotime($comm['created_at']);
                                                $mon = date('m', $dateValue);
                                                $year = date('y', $dateValue);
                                                $month = date('M', mktime(0, 0, 0, $mon, 10)) . ' ';
                                                $datei = date('d', $dateValue) . ' ';
                                            @endphp
                                            <div class="col-md-12 post-comments">

                                                <div class="commented-section mt-2">
                                                    <div class="d-flex flex-row align-items-center commented-user">
                                                        <h4 class="mr-2"><b>{{ $comm['user_name'] }}</b></h4><span
                                                            class="dot mb-1"></span>&nbsp &nbsp<span class="mb-1 ml-2"
                                                            style="font-weight:bold">{{ $datei . $month . $year }}</span>
                                                    </div>
                                                    <div class="comment-text-sm"><span>
                                                            <blockquote>{{ $comm['body'] }}</blockquote>
                                                        </span></div>

                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="col-lg-4 m-15px-tb blog-aside">

                    <div class="widget widget-latest-post">
                        <div class="widget-title">
                            <h3>Trending Now</h3>
                        </div>
                        <div class="widget-body">
                            @php
                                $k = 1;
                            @endphp
                            @foreach (\App\Models\Blog::all()->sortByDesc('rating') as $tp)
                                @if ($tp['status'] == '1' && $k <= 3)
                                    @php
                                        $dateValue = strtotime($tp['created_at']);
                                        $mon = date('m', $dateValue);
                                        $year = date('y', $dateValue);
                                        $month = date('M', mktime(0, 0, 0, $mon, 10)) . ' ';
                                        $datei = date('d', $dateValue) . ' ';
                                        $k++;
                                    @endphp
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="{{ url('blog/single/' . $tp['id']) }}">{{ $tp['title'] }}</a>
                                                </h5>
                                            </div>
                                            <div class="lpa-meta">

                                                <a class="date" href="#">
                                                    {{ $datei . $month . $year }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="blog/single/{{ $tp['id'] }}">
                                                <img src="https://picruit.com/public/{{ $tp['mediafile'] }}" title=""
                                                    alt="" style="height:45px;width:90px;">
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <div class="latest-post-aside media">
                                <div class="lpa-left media-body">
                                    <div class="lpa-title">
                                        <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    </div>
                                    <div class="lpa-meta">
                                        <a class="name" href="#">
                                            Rachel Roth
                                        </a>
                                        <a class="date" href="#">
                                            26 FEB 2020
                                        </a>
                                    </div>
                                </div>
                                <div class="lpa-right">
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/FFB6C1/000000" title=""
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="latest-post-aside media">
                                <div class="lpa-left media-body">
                                    <div class="lpa-title">
                                        <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                    </div>
                                    <div class="lpa-meta">
                                        <a class="name" href="#">
                                            Rachel Roth
                                        </a>
                                        <a class="date" href="#">
                                            26 FEB 2020
                                        </a>
                                    </div>
                                </div>
                                <div class="lpa-right">
                                    <a href="#">
                                        <img src="https://www.bootdey.com/image/400x200/FFB6C1/000000" title=""
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        $(document).ready(() => {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            let profile;
            const user_id = "{{ $b_id }}";
            $("#sendcomm").click(function() {

                let body = $("#message").val();

                var formData = new FormData();

                formData.append('bid', user_id);
                formData.append('bbody', body);

                $.ajax({
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: 'post',
                    data: formData,
                    url: "{{ route('update_comment') }}",
                    
                    success: function(response) {
                        if (response.success) {
                            Swal.fire(
                                'Good job!',
                                'comment sent',
                                'success'
                            )
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

        function like(i) {

            var formData = new FormData();
            formData.append('bid', i);


            $.ajax({
                cache: false,
                contentType: false,
                processData: false,
                type: 'post',
                data: formData,
                url: "{{ route('update_rating') }}",
                success: function(response) {
                    if (response.success) {
                        $('#btnchiefdom').addClass("actives");
                    } else {
                        Swal.fire(
                            'Sorry!',
                            'some error occured',
                            'error'
                        )
                        console.log("test");
                    }
                    //  setTimeout(() => {
                    //      location.reload();
                    //  }, 2000);
                },
                error: function(data) {

                    var errors = data.responseJSON;
                    console.log(errors);
                }
            });
        }
    </script>
@stop
