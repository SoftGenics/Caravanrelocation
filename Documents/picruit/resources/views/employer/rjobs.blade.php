@extends ('layouts.user')
@section('content')
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
                                                        type="button">Job closed</button>
                                                </td>
                                               
                                                <th scope="row" style="color: #666666;">{{ $item['title'] }}</th>
                                                <td>{{ $item['date'] }}</td>
                                                <td>{{ $item['salary'] }}</td>
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
    <div class="container-fluid">
       <div class="row" style="overflow: auto;">
        <div class="jsgrid-container">

        <div id="grid_table"></div>
      </div>

       </div>
  
        
    </div>
  
</div>


    @stop
          

