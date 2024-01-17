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
              
            </div>
            
        </div>
    </div>
    <header class="py-5 bg-light border-bottom mb-4 fo" style="margin-top: 50px; ">
        <section class="intro">
            <div class="mask d-flex align-items-center" style=" min-height:100vh">
                <div class="container-fluid mt-5">

                    <div class="text-center my-5">
                        <h1 class="fw-bolder">Applied Jobs!</h1>
                        <p class="lead mb-0">Pircuit Candidate </p>
                    </div>
                    <!-- searching form-->
                    <button type="button" class="fw-bolder search-heading">Fillter
                        <i class="fa fa-filter" style="font-size:28px;color:rgb(16, 150, 108) "></i>
                    </button>

                    <div id="show-hide-form">
                        <form class="row form-group mr-3" action="" style="background-color: #999999; padding:10px">
                            <div class="col-3">
                                <input type="search" class="form-control" name="apply_id" id=""
                                    aria-describedby="helpId" placeholder="Enter your apply_id">
                            </div>
                            <div class="col-3">
                                <input type="search" class="form-control" name="job_id" id=""
                                    aria-describedby="helpId" placeholder="Enter your job_id">
                            </div>

                            <div class="col-2">
                                <input type="search" class="form-control" name="jobpost_id" id=""
                                    aria-describedby="helpId" placeholder="Enter your jobpost_id">
                            </div>

                            <div class="col-2">
                                <input type="search" class="form-control" name="for" id=""
                                    aria-describedby="helpId" placeholder="Enter your for">
                            </div>

                            <div class="col-2">
                                <input type="search" class="form-control" name="status" id=""
                                    aria-describedby="helpId" placeholder="Enter your status">
                            </div>

                            <div class="col-2 mt-1">
                                <button type="submit" id="helpId" class="form-text text-muted btn btn-info"
                                    style="margin-left:6px;">Search Details</button>
                            </div>
                        </form>
                    </div>
                    <!--end searching form-->

                  
                     <!-- table form -->
                    <div class="row justify-content-center">
                        <div class="">
                            <div class="table-responsive bg-white" data-mdb-perfect-scrollbar="true"
                                style="position: relative; height: 445px; width:100%;">

                                <table class="table">
                                    <thead style="background:#198754;">
                                        <tr>
                                            <th scope="col"></th>
                                           
                                            <th scope="col">Job_id</th>
                                            <th scope="col">Job Titile</th>
                                            <th scope="col">Job Description</th>
                                            <th scope="col">Salary</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>


                                    @foreach ($candidate as $item)
                                        <tbody>
                                            <tr class="mt-5">
                                                <td><i class="fa fa-check" style="font-size:24px; color:#198754"></i></td>
                                               
                                                <td>{{ $item->job_id }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->body }}</td>
                                                <td>{{ $item->salary }}</td>
                                               @if($item->apply_status==0) <td style="background-color:yellow;border:10px solid white">waiting</td>
                                               @else
                                               <td style="background-color:green">Verified</td>
                                               @endif
                                               <td><a href="/rating/{{ $item->id }}">Rating us</a></td>
                                            </tr>

                                        </tbody>
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
          

