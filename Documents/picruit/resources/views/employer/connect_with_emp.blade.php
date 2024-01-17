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
                                        style="font-style:italic;">Welcome to User
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
                        <h1 class="fw-bolder">Welcome to Connect with!</h1>
                        <p class="lead mb-0">Pircuit connect with </p>
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

                    <div class="row justify-content-center">
                        <!-- table form -->
                        <div class="">
                            <div class="table-responsive bg-white" data-mdb-perfect-scrollbar="true"
                                style="position: relative; height: 445px; width:100%;">

                                <table class="table">
                                    <thead style="background:#198754;">
                                        <tr>
                                            
                                            <th scope="col"></th>
                                            <th scope="col">NAME</th>
                                            <th scope="col">COUNTRY</th>
                                            
                                            <th scope="col">DESIGNATION</th>
                                            <th scope="col">INDUSTRY</th>
                                            <th scope="col">LOCATION</th>
                                            <th scope="col">STATUS</th>
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
                                                <th scope="row" style="color: #666666;">{{ $item['name'] }}</th>
                                                <td>{{ $item['cname'] }}</td>
                                                <td>{{ $item['designation'] }}</td>
                                                <td>{{ $item['industry'] }}</td>
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
