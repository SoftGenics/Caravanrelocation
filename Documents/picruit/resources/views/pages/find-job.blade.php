@extends ('layouts.app')
@section('title', 'Find Job')
@section('content')
<!--https://fontawesome.com/icons/bookmark?f=sharp&s=solid-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link   href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link   href="/resources/demos/style.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap');

        html,
        body,
        .intro {
            height: 100%;
        }

        .form-hide-pop {
            position: fixed;
            top: 30%;
            left: 20%;
            z-index: 100;
            width: 1200px;
        }

         
 .res-table{position: relative; height: 445px; width:1500px;}
/* Styles for screens at least 360px wide */
@media screen and (min-width: 360px) and (max-width: 767px) {
    .form-hide-pop {
        top: 5%;
        left: 0.5%;
        z-index: 100;
        width: 1200px;
    }
    
    .res-table {
        position: relative;
        height: 300px;
        width: 400px;
        overflow: auto; /* Use overflow to enable scrolling if needed */
        font-size: 10px;
    }
}

/* Additional media query for smaller screens (e.g., mobile) */
@media screen and (max-width: 359px) {
    .form-hide-pop {
        /* Adjust the positioning for smaller screens */
        top: 2%;
        left: 0%;
        width: 800px;
    }
    
    .res-table {
        /* Adjust the table size or styles for smaller screens */
        position: relative;
        height: 200px;
        width: 90%;
        overflow: auto; /* Use overflow to enable scrolling if needed */
        font-size: 8px;
    }
}


      
        table td,
        table th {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            min-width: 200px;
            max-width: 200px;
            color: #ffffff;
            padding: 15px !important;
            font-size: 20px !important;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif !important;
            font-weight: 400 !important;
        }

        tbody td {
            font-weight: 500;
            color: #999999;
        }

        .view {
            color: #666666;
            color: #198754 !important;
            width: 50px !important;
        }

        .search-heading {
            font-size: 23px !important;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif !important;
            font-weight: 400 !important;
            border: none !important;
        }

        .search {
            color: #fff !important;
        }

        .details-heading {
            padding-right: 40px !important;
        }

        .end-button {
            font-size: 20px !important;
            border:none;
            margin-bottom:10px;
        }
        
        
         .nav-pills>li.active>a,
        .nav-pills>li.active>a:hover,
        .nav-pills>li.active>a:focus {
            color: #fff;
            background-color: #198754;
        }
        .table-container {
    position: relative;
}

.table thead {
    background: #198754;
    position: sticky;
    top: 0;
    z-index: 1;
}


    </style>
    
    
<div class="container-fuild pt-5 pb-5 pr-0">
           <div class="subscribe-newsletters footer-item mt-5 pt-3" >
                    @include('pages.ads_slide')
            </div>
    <header class="py-1 bg-light border-bottom mb-4 fo" style="margin-top: 50px; ">
        <section class="intro">
            <div class="mask d-flex align-items-center" style=" min-height:100vh; width:100%;">
                <div class="">
                    <!--start poup-->
                    <div id="hide-popup" class="form-hide-pop">
                        <div class="row">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-4 p-5 details-heading" style="background-color:#fff; border-radius:10px;">
                                 <div class="text-end w-100">
                                        <button class="button-view end-button"> <i class="fa fa-close" style="font-size:28px;color:rgb(16, 150, 108) "></i></button>
                                    </div> 
                                <div>
                                    <h1 class="pop-heading text-white text-center pb-2 pt-2 mb-2 btn-info"
                                        style="font-style:italic; background-color:#198754;">Apply Job
                                    </h1>
                                </div>
                                <div class="d-flex flex-column justify-content-center p-5 shadow-lg">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading mr-5">Title:-</h3>
                                            <h3 id="title"></h3>
                                        </div>
                                        
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">Date:- </h3>
                                            <h3 id="dob"></h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">Salary:- </h3>
                                            <h3 id="salary"></h3>to<h3 id="salary2"></h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">Start Time:- </h3>
                                            <h3 id="stime"></h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">End Time:- </h3>
                                            <h3 id="etime"></h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading" >Location:- </h3>
                                            <h3 id="area""></h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">Job Detail:- </h3>
                                            <h3 id="jobde"></h3>
                                        </div>
                                        <!--<div class="d-flex justify-content-between align-items-center">-->
                                        <!--    <h3 class="details-heading">Pincode:- </h3>-->
                                        <!--    <h3 id="pincode"></h3>-->
                                        <!--</div>-->
                                        <!--<div class="d-flex justify-content-between align-items-center">-->
                                        <!--    <h3 class="details-heading">Aera:- </h3>-->
                                        <!--    <h3 id="area"></h3>-->
                                        <!--</div>-->
                                        
                                        <form action="{{route('apply-job')}}" method="post" enctype='multipart/form-data'>
                                            
                                            @csrf
                                            <input type="hidden" name="jobpost_id" id="jobpost_id">
                                            <input type="hidden" name="for" id="for" value="635" />
                                            <input type="hidden" name="job_id" id="job_id">
                                            
                                            <div class="d-flex justify-content-center align-items-center" style="width:100%;">
                                            <textarea class="form-control mb-3" row="4" name="body" required></textarea>
                                            </div>
                                            
                                            <div class="d-flex justify-content-between align-items-center">
                                            <input class=""  type="file" name="files" /> 
                                            <button type="submit" class="btn-info" style="width:100px; height:25px;">Submit</button>
                                            </div>
                                            
                                            
                                        </form>
                                </div>
                                 
                            </div>
                        </div>
                    </div>
                    <!--end poup-->

                    <div class="text-center" style="margin:0; padding:0;">
                        <h1 class="fw-bolder">Welcome to find Job!</h1>
                        <p class="lead mb-0">Picruit Find job </p>
                    </div>
                    <!-- searching form-->
                    <button type="button" class="fw-bolder search-heading">Filter
                        <i class="fa fa-filter" style="font-size:28px;color:rgb(16, 150, 108) "></i>
                    </button>

                    <div id="show-hide-form">
                        <form class="row form-group mr-3" action="" style="background-color: #999999; padding:10px">
                            <div class="col-3">
                                <input type="search" class="form-control" name="title" id=""
                                    aria-describedby="helpId" placeholder="Enter your title">
                            </div>
                            
                            <div class="col-3">
                                <input type="search" class="form-control" name="minsalary" id="tags"
                                    aria-describedby="helpId" placeholder="Enter your minimum salary">
                            </div>
                            <div class="col-3">
                                <input type="search" class="form-control" name="maxsalary" id="tags"
                                    aria-describedby="helpId" placeholder="Enter your maximum salary">
                            </div>
                            

                            <!--<div class="col-2">-->
                            <!--    <input type="search" class="form-control" name="subject" id=""-->
                            <!--        aria-describedby="helpId" placeholder="Enter your subject">-->
                            <!--</div>-->

                            <!--<div class="col-2">-->
                            <!--    <input type="search" class="form-control" name="gender" id=""-->
                            <!--        aria-describedby="helpId" placeholder="Enter your gender">-->
                            <!--</div>-->

                            <div class="col-3">
                                <input type="search" class="form-control" name="location" id=""
                                    aria-describedby="helpId" placeholder="Enter your location">
                            </div>

                            <div class="col-2 col-lg-3 mt-1">
                                <button type="submit" id="helpId" class="form-text text-muted btn btn-info"
                                    style="margin-left:6px;">Search Details</button>
                            </div>
                        </form>
                    </div>

                    <!--end searching form-->
                     <!-- header -->
                    <div id="exTab3" 
                        style="width: 100%;width: 100%; background: #04470621; border: solid; border-radius: 17px; border-color: transparent;">
                        <ul class="nav nav-pills">

                            <li class="active">
                                <a href="{{ url('find-job') }}">
                                    <h3 style="font-family: 'League Spartan', sans-serif ;font-weight:600">All Jobs<h3>
                                </a>
                            </li>

                            <li><a href="{{ url('tutors') }}">
                                    <h3 style="font-family: 'League Spartan', sans-serif ;font-weight:600">All tutions<h3>
                                </a>
                            </li>

                            <li><a href="{{ url('globel/assignment') }}">
                                    <h3 style="font-family: 'League Spartan', sans-serif ;font-weight:600">Global
                                        assignments<h3>
                                </a>
                            </li>

                            <li><a href="{{ url('blog') }}">
                                    <h3 style="font-family: 'League Spartan', sans-serif ;font-weight:600">Blogs<h3>
                                </a>
                            </li>

                        </ul>

                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="1b" style="overflow: auto; position:relative;">
                                <div id="grid_table"></div>
                            </div>
                            <div class="tab-pane" id="2b" style="overflow: auto;">
                                <div id="grid_table1"></div>
                            </div>
                        </div>

                    </div>
                    <!-- end header -->

                    <div class="row justify-content-center">
                        <!-- table form -->
                        <div >
                            <div class="table-responsive bg-white res-table"
                                >

                                <table class="table">
                                    <thead style="background:#198754;">
             
                                            <th scope="col"></th>
                                            <th></th>
                                            <th scope="col"> Job Title</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Salary</th>
                                            <th scope="col">Start Day</th>
                                            <th scope="col">End Day</th>
                                             <th scope="col">Location</th> 
                                             
                                        </tr>
                                    </thead>
                                   

                                    @foreach ($persanal as $item)
                                        <tbody>
                                            <tr>
                                                <td class="view"><button class="button-view bg-success text-white"
                                                        onClick="showdata({{ $item['id'] }})"
                                                        style="border:none; border-radius:6px;"
                                                        type="button">Apply</button>
                                                </td>
                                               <td><a href="{{url('/save-job')}}/{{$item['id']}}"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="100" height="50" ><!--! Font Awesome Pro 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg> </a></td>
                                               
                                                <th scope="row" style="color: #666666;">{{ $item['title'] }}</th>
                                                <td>{{ $item['date'] }}</td>
                                                <td>{{ $item['minsalary'] }} - {{ $item['maxsalary'] }}</td>
                                                <td>{{ $item['start_time'] }}</td>
                                                <td>{{ $item['end_time'] }}</td>
                                                 <td>{{ $item['location'] }}</td>
                                            </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--end table form -->

                </div>
            </div>
 
        </section>

    </header>
</div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   

    <script>
   
        function showdata(data) {
          $.ajax({
                url: '/get-job-details/' + data, //this is your uri
                type: 'get', //this is your metho
                dataType: 'json',
                success: function(response) {

                    console.log(response);

                    $('#title').text(response['title'])
                    $('#dob').text(response['date'])
                    $('#salary').text(response['minsalary'])
                    $('#salary2').text(response['maxsalary'])
                    $('#stime').text(response['start_time'])
                    $('#etime').text(response['end_time'])
                    $('#area').text(response['location'])
                     $('#state').text(response['state'])
                    $('#jobde').text(response['job_detail'])
                     $('#job_id').val(response['id'])
                     $('#mode').text(response['mode'])


                    $("#hide-popup").show();
                }
            });
        }
        
        $(document).ready(function() {
            $("#show-hide-form").hide(1000);
            $(".search-heading").click(function() {
                $("#show-hide-form").toggle(2000);
            });
        });



        $(document).ready(function() {
            $("#hide-popup").hide();

            $(".button-view").click(function() {
                $("#hide-popup").toggle(2000);
            });
            
            $(".end-button").click(function(){
             $("#hide-popup").hide();
        });

        });
    </script>

@stop
