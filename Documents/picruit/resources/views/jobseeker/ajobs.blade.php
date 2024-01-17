@extends ('layouts.user')
@section('content')
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
 
  
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

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

        @media screen and (min-width:786px) {
            .form-hide-pop {
                width: 100%;
                top: 10%;
                left: 30%;
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
        }
        
        
         .nav-pills>li.active>a,
        .nav-pills>li.active>a:hover,
        .nav-pills>li.active>a:focus {
            color: #fff;
            background-color: #198754;
        }
    </style>
  <div class="page-wrapper">
          
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                      <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                      <li class="breadcrumb-item active" aria-current="page">All jobs</li>
                    </ol>
                  </nav>
                <h1 class="mb-0 fw-bold">All jobs</h1> 
            </div>
            
        </div>
    </div>
    <header class="py-5 bg-light border-bottom mb-4 fo" style="margin-top: 50px; ">
        <section class="intro">
            <div class="mask d-flex align-items-center" style=" min-height:100vh">
                <div class="container-fluid mt-5">
                   <!--start poup-->
                    <div id="hide-popup" class="form-hide-pop" style="display:none">
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
                                        <!--<div class="d-flex justify-content-between align-items-center">-->
                                        <!--    <h3 class="details-heading">L_Name:- </h3>-->
                                        <!--    <h3 id="f_ame"></h3>-->
                                        <!--</div>-->
                                        <!--<div class="d-flex justify-content-between align-items-center">-->
                                        <!--    <h3 class="details-heading">user_id:- </h3>-->
                                        <!--    <h3 id="f_nae"></h3>-->
                                        <!--</div>-->
                                        <!--<div class="d-flex justify-content-between align-items-center">-->
                                        <!--    <h3 class="details-heading">email:- </h3>-->
                                        <!--    <h3 id="f_ne"></h3>-->
                                        <!--</div>-->
                                        <!--<div class="d-flex justify-content-between align-items-center">-->
                                        <!--    <h3 class="details-heading">Number:- </h3>-->
                                        <!--</div>-->
                                         
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">Date:- </h3>
                                            <h3 id="dob"></h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">Salary:- </h3>
                                            <h3 id="salary"></h3>
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
                                            <h3 class="details-heading">Location:- </h3>
                                            <h3 id="state"></h3>
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
                                            <input class=""  type="file" name="files"  /> 
                                            <button type="submit" class="btn-info" style="width:100px; height:25px;">Submit</button>
                                            </div>
                                            
                                            
                                        </form>
                                </div>
                                 
                            </div>
                        </div>
                    </div>
                    <!--end poup-->
                   
<div style="color:green" id="msg" ></div>
 
                    <!-- searching form-->
                    <button type="button" class="fw-bolder search-heading">Fillter
                        <i class="fa fa-filter" style="font-size:28px;color:rgb(16, 150, 108) "></i>
                    </button>

                    <div id="show-hide-form">
                        <form class="row form-group mr-3" action="" style="background-color: #999999; padding:10px">
                            <div class="col-3">
                                <input type="search" class="form-control" name="title" id=""
                                    aria-describedby="helpId" placeholder="Enter your title">
                            </div>
                            <div class="col-3">
                                <select class="form-control" name="salary" id=""
                                    aria-describedby="helpId" placeholder="Enter your salary">
                                    
                                    <option value="20000">lass than 20000</option>
                                     <option value="30000">lass than 30000</option> 
                                     <option value="40000">lass than 40000</option>
                                    </select>
                            </div>

                            <div class="col-2">
                                <input type="search" class="form-control" name="subject" id=""
                                    aria-describedby="helpId" placeholder="Enter your subject">
                            </div>

                            <div class="col-2">
                                <input type="search" class="form-control" name="gender" id=""
                                    aria-describedby="helpId" placeholder="Enter your gender">
                            </div>

                            <div class="col-2">
                                <input type="search" class="form-control" name="qulification" id=""
                                    aria-describedby="helpId" placeholder="Enter your qulification">
                            </div>

                            <div class="col-2 mt-1">
                                <button type="submit" id="helpId" class="form-text text-muted btn btn-info"
                                    style="margin-left:6px;">Search Details</button>
                            </div>
                        </form>
                    </div>

                    <!--end searching form-->
                    
                    <div class="row justify-content-center">
                        <!-- table form -->
                        <div class="">
                            <div class="table-responsive bg-white" data-mdb-perfect-scrollbar="true"
                                style="position: relative; height: 445px; width:100%;">

                                <table class="table">
                                    <thead style="background:#198754;">
             
                                            <th scope="col"></th>
                                            <th scope="col"> Job Title</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Salary</th>
                                            <th scope="col">Start time</th>
                                            <th scope="col">End time</th>
                                             <th scope="col">Location</th>
                                             <th scope="col">Action</th>
                                             
                                        </tr>
                                    </thead>
                                    @php
                                        if (isset($infomation)) {
                                            print_r($infomation);
                                        }
                                        
                                    @endphp

                                    @foreach ($persanal as $item)
                                        <tbody>
                                            <tr>
                                                <td class="view"><button class="button-view bg-success text-white"
                                                        onClick="showdata({{ $item['id'] }})"
                                                        style="border:none; border-radius:6px;"
                                                        type="button">Apply</button>
                                                </td>
                                               
                                                <th scope="row" style="color: #666666;">{{ $item['title'] }}</th>
                                                <td>{{ $item['date'] }}</td>
                                                <td>{{ $item['salary'] }}</td>
                                                <td>{{ $item['start_time'] }}</td>
                                                <td>{{ $item['end_time'] }}</td>
                                                 <td>{{ $item['location'] }}</td>
                                                 <td>
                                        <button class="dropdown-item" onclick="deletejob({{$item['id']}})">Delete</button>
                                   </td> 
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
    <div class="container-fluid">
       <div class="row" style="overflow: auto;">
        <div class="jsgrid-container">

        <div id="grid_table"></div>
      </div>

       </div>
  
        
    </div>
  
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="module" src="node_modules/spin.js/spin.js"></script>

    <script>
    $("#msg").hide();
        function showdata(data) {
            

           $.ajax({
                url: '/get-job-details/' + data, //this is your uri
                type: 'get', //this is your metho
                dataType: 'json',
                success: function(response) {

                    console.log(response);

                    $('#title').text(response['title'])
                    $('#dob').text(response['date'])
                    $('#salary').text(response['salary'])
                    $('#stime').text(response['start_time'])
                    $('#etime').text(response['end_time'])
                    $('#area').text(response['location'])
                    // $('#state').text(response['location'])
                    $('#jobde').text(response['location'])
                    // $('#user_id').text(response['user_id'])
                    // $('#mode').text(response['mode'])
                    $('#job_id').val(response['id'])
                    


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


            // $(".button-view").click(function() {


            //     $("#hide-popup").toggle(2000);

            // });
            
            $(".end-button").click(function(){


             $("#hide-popup").hide();
        });

        });
     
    </script>


    @stop
          
