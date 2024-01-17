@extends ('layouts.app')
@section('content')
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
        .res-table{position: relative; height: 445px; width:1500px}

        @media screen and (min-width:786px) {
            .form-hide-pop {
               top: 30%;
            left: 20%;
            z-index: 100;
            width: 1200px;
            }
            .res-table{position: relative; height: 300px; width:900px!important; scroll:true;font-size:10px}
        }
         @media screen and (min-width: 360px) and (max-width: 767px) {
    .form-hide-pop {
        top: 30%;
        left: 20%;
        z-index: 100;
        width: 400px;
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
        top: 10%;
        left: 5%;
        width: 90%;
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
        }
         .nav-pills>li.active>a,
        .nav-pills>li.active>a:hover,
        .nav-pills>li.active>a:focus {
            color: #fff;
            background-color: #198754;
        }
    </style>

    <header class="py-5 bg-light border-bottom mb-4 fo" style="margin-top: 50px; ">
        <section class="intro">
            <div class="mask d-flex align-items-center" style=" min-height:100vh">
                <div class="container-fluid mt-5">
                    <!--start poup-->
                    <div id="hide-popup" class="form-hide-pop">
                        <div class="row">
                            <div class="col-3 p-5 details-heading" style="background-color:#fff; border-radius:10px;">
                                {{-- <div class="align-self-end">
                                        <button class="button-view end-button"> <i class="fa fa-close" style="font-size:28px;color:rgb(16, 150, 108) "></i></button>
                                    </div> --}}
                                <div>
                                    <h1 class="pop-heading text-white text-center pb-2 pt-2 mb-2 btn-info"
                                        style="font-style:italic; background-color:#198754;">Welcome to User
                                    </h1>
                                </div>
                                <div class="d-flex flex-column justify-content-center p-5 shadow-lg">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading mr-5">F_Name:-</h3>
                                            <h3 id="f_name"></h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">L_Name:- </h3>
                                            <h3 id="f_ame"></h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">user_id:- </h3>
                                            <h3 id="f_nae"></h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">email:- </h3>
                                            <h3 id="f_ne"></h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">Number:- </h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">dob:- </h3>
                                            <h3 id="dob"></h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">Gender:- </h3>
                                            <h3 id="gender"></h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">Address:- </h3>
                                            <h3 id="f_name"></h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">Country:- </h3>
                                            <h3 id="area"></h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">State:- </h3>
                                            <h3 id="state"></h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">City:- </h3>
                                            <h3 id="city"></h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">Pincode:- </h3>
                                            <h3 id="pincode"></h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="details-heading">Aera:- </h3>
                                            <h3 id="area"></h3>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end poup-->

                    <div class="text-center my-5">
                        <h1 class="fw-bolder">Welcome to Find Work!</h1>
                        <p class="lead mb-0">Pircuit Find Work </p>
                    </div>
                    <!-- searching form-->
                    <button type="button" class="fw-bolder search-heading">Fillter
                        <i class="fa fa-filter" style="font-size:28px;color:rgb(16, 150, 108) "></i>
                    </button>

                    <div id="show-hide-form">
                        <form class="row form-group mr-3" action="" style="background-color: #999999; padding:10px">
                            <div class="col-3">
                                <input type="search" class="form-control" name="city" id=""
                                    aria-describedby="helpId" placeholder="Enter your city">
                            </div>
                            <div class="col-3">
                                <input type="search" class="form-control" name="mode" id=""
                                    aria-describedby="helpId" placeholder="Enter your mode">
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
                     <!-- header -->
                    <div id="exTab3" class=""
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
                        <div class="">
                            <div class="table-responsive bg-white res-table" >

                                <table class="table">
                                    <thead style="background:#198754;">
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">CITY</th>
                                            <th scope="col">MODE</th>
                                            <th scope="col">SUBJECT</th>
                                            <th scope="col">GENDER</th>
                                            <th scope="col">QULIFICATION</th>
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
                                                        type="button">view</button>
                                                </td>
                                                <th scope="row" style="color: #666666;">{{ $item['city'] }}</th>
                                                <td>System Architect</td>
                                                <td>2011/04/25</td>
                                                <td>{{ $item['gender'] }}</td>
                                                <td>tnixon12@example.com</td>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="module" src="node_modules/spin.js/spin.js"></script>

    <script>
        function showdata(data) {
            $.ajax({
                url: '/get-details/' + data, //this is your uri
                type: 'get', //this is your metho
                dataType: 'json',
                success: function(response) {

                    console.log(response);

                    $('#f_name').text(response['f_name'])
                    $('#address').text(response['address'])
                    $('#area').text(response['area'])
                    $('#city').text(response['city'])
                    $('#dob').text(response['dob'])
                    $('#gender').text(response['gender'])
                    $('#pincode').text(response['pincode'])
                    $('#state').text(response['state'])
                    $('#user_id').text(response['user_id'])


                    $("#hide-popup").toggle(2000);
                }
            });


            console.log(data);
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

        });
    </script>

@stop
