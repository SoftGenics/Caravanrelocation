@extends ('layouts.app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
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
         .table-container {
    position: relative;
}

.table thead {
    background: #198754;
    position: sticky;
    top: 0;
    z-index: 1;
}
.res-table{position: relative; height: 445px; width:1500px}

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
        top: 0%;
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

    </style>
    <div class="container-fluid pt-5">
     @include('pages.ads_slide')
     <div class="text-center my-5">
        <h1 class="fw-bolder">Welcome to Connect Tutions Home!</h1>
        <p class="lead mb-0">Picruit Connect Tuitions </p>
    </div>
    <header class="py-5 bg-light border-bottom mb-4 fo" >
        <!--<section class="intro " style="width:100%; padding-top:5px;">-->
            
            <div class="mask d-flex align-items-center" >
                
                <div class="">
                    <!--start poup-->
                    <div id="hide-popup" class="form-hide-pop">
                        <div class="row">
                            
                            <div class="col-3 p-5 details-heading" style="background-color:#fff; border-radius:10px;">
                                <div class="close" style="color:red">x</div>
                                
                                {{-- <div class="align-self-end">
                                        <button class="button-view end-button"> <i class="fa fa-close" style="font-size:28px;color:rgb(16, 150, 108) "></i></button>
                                    </div> --}}
                                    
                                <div
                                    
                                   
                                    <h1 class="pop-heading text-white text-center pb-2 pt-2 mb-2"
                                        style="font-style:italic; background-color:#198754;">Welcome to User
                                    </h1>
                                </div>
                                <div class="d-flex flex-column justify-content-center p-5 shadow-lg">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading mr-5">S_Name:-</h3>
                                        <h3 id="f_name"></h3>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading">Date:- </h3>
                                        <h3 id="date"></h3>
                                        
                  
                   
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading">Rate:- </h3>
                                        <h3 id="f_rat"></h3>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading">email:- </h3>
                                        <h3 id="email"></h3>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading">Number:- </h3>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading">Notes:- </h3>
                                        <h3 id="dob"></h3>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading">Class:- </h3>
                                        <h3 id="class"></h3>
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
                                        <h3 class="details-heading">Mode:- </h3>
                                        <h3 id="mode"></h3>
                                    </div>
                                      
                                        <form action="{{route('apply-tuition')}}" method="post" enctype='multipart/form-data'>
                                            
                                            @csrf
                                           
                                      
                                            <input type="hidden" name="std_id" id="std_id">
                                             <input type="hidden" name="tuition_id" id="tuition_id">
                                             <input type="hidden" name="std_name" id="std_name">
                                            
                                            <div class="d-flex justify-content-center align-items-center" style="width:100%;">
                                            <textarea class="form-control mb-3" row="4" name="discription" required></textarea>
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

                    <!-- searching form-->
                    <button type="button" class="fw-bolder search-heading">Filter
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
                                    aria-describedby="helpId" placeholder="Enter your Mode">
                            </div>
                            <!--<div class="col-3">-->
                            <!--    <select type="search" class="form-control" name="mode" id=""-->
                            <!--        aria-describedby="helpId" placeholder="Select your mode">-->
                            <!--         <option>Select your Mode...</option>-->
                            <!--        <option>Online</option>-->
                            <!--         <option>offline</option>-->
                            <!--        </select>-->
                            <!--</div>-->

                            <div class="col-2">
                                <input type="search" class="form-control" name="subject" id=""
                                    aria-describedby="helpId" placeholder="Enter your subject">
                            </div>

                            <div class="col-2">
                                <input type="search" class="form-control" name="class" id=""
                                    aria-describedby="helpId" placeholder="Enter your class">
                            </div>

                            <div class="col-2">
                                <input type="search" class="form-control" name="pincode" id=""
                                    aria-describedby="helpId" placeholder="Enter your pincode">
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

                            <li >
                                <a href="{{ url('find-job') }}">
                                    <h3 style="font-family: 'League Spartan', sans-serif ;font-weight:600">All Jobs<h3>
                                </a>
                            </li>

                            <li class="active"><a href="{{ url('tutors') }}">
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

                    <div class="row justify-content-center"> <!-- table form --> 
                        <div class="">
                            <div class="table-responsive bg-white res-table" 
                                >

                                <table class="table">
                                    <thead style="background:#198754;">
                                        <tr>
                                            <th></th>
                                           <th></th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Rate</th>
                                            <th scope="col">Pincode</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">City</th>
                                            <th scope="col">Segment</th>
                                            <th scope="col">Mode</th>
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
                                                <td><a href="{{url('/save-tuition')}}/{{$item['id']}}"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="100" height="50" ><!--! Font Awesome Pro 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg> </a></td>
                                                <th scope="row" style="color: #666666;">{{ $item['s_name'] }}</th>
                                              
                                                <td>{{ $item['date'] }}</td>
                                                <td>{{ $item['rate'] }}</td>
                                                <td>{{ $item['pincode'] }}</td>
                                                <td>{{ $item['class'] }}</td>
                                                <td>{{ $item['city'] }}</td>
                                                <td>{{ $item['subject'] }}</td>
                                                <td>{{ $item['mode'] }}</td>
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

        <!--</section>-->

    </header>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    

    <script>
        function showdata(data) {
            $.ajax({
                url: '/get-tuition-details/' + data, //this is your uri
                type: 'get', //this is your metho
                dataType: 'json',
                success: function(response) {

                    console.log(response);

                    $('#f_name').text(response[0]['s_name'])
                    $('#date').text(response[0]['date'])
                    $('#f_rat').text(response[0]['rate'])
                    $('#email').text(response[0]['email'])
                     $('#number').text(response[0]['number'])
                    $('#dob').text(response[0]['notes'])
                    $('#class').text(response[0]['class'])
                    $('#pincode').text(response[0]['pincode'])
                 $('#city').text(response[0]['city'])
                    $('#user_id').text(response[0]['user_id'])
                    $('#mode').text(response[0]['mode'])
                       $('#tuition_id').val(response[0]['id'])
                        $('#std_id').val(response[0]['user_id'])
                         $('#std_name').val(response[0]['s_name'])
                      
                    


                    $("#hide-popup").toggle(100);
                }
            });


            console.log(data);
        }
        $(document).ready(function() {
            $("#show-hide-form").hide(1000);
            $(".search-heading").click(function() {
                $("#show-hide-form").toggle(2000);
            });
             $(".close").click(function() {
                $("#hide-popup").toggle(2000);
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
