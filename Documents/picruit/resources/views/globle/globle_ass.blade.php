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
    
<div class="container-fuild pt-5 pb-5 pr-0">
           <div class="subscribe-newsletters footer-item mt-5 pt-3" >
                    @include('pages.ads_slide')
            </div>
    <header class="py-1 bg-light border-bottom mb-4 fo" style="margin-top: 50px; ">
        <section class="intro">
            <div class="mask d-flex align-items-center" style=" min-height:100vh; width:100%;">
                <div class="">
                   

                    <div class="text-center" style="margin:0; padding:0;">
                        <h1 class="fw-bolder">Welcome to Global Assignment!</h1>
                        <p class="lead mb-0">Picruit Global Assignment </p>
                    </div>
                    <!-- searching form-->
                    <button type="button" class="fw-bolder search-heading">Filter
                        <i class="fa fa-filter" style="font-size:28px;color:rgb(16, 150, 108) "></i>
                    </button>

                    <div id="show-hide-form">
                        <form class="row form-group mr-3" action="" style="background-color: #999999; padding:10px">
                            <div class="col-4">
                                <input type="search" class="form-control" name="title" id=""
                                    aria-describedby="helpId" placeholder="Enter your title">
                            </div>
                            
                           
                            <div class="col-4">
                                <input type="search" class="form-control" name="date" id=""
                                    aria-describedby="helpId" placeholder="Enter your date">
                            </div>

                            <div class="col-2 col-lg-3 mt-1">
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

                            <li><a href="{{ url('tutors') }}">
                                    <h3 style="font-family: 'League Spartan', sans-serif ;font-weight:600">All tutions<h3>
                                </a>
                            </li>

                            <li class="active"><a href="{{ url('globel/assignment') }}">
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
                          <!-- table form -->
                    <div class="row justify-content-center">
                        <div class="">
                            <div class="table-responsive bg-white res-table" 
                                >

                                <table class="table">
                                    <thead style="background:#198754;">
                                        <tr>
                                           
                                          <th></th>
                                            <th scope="col">Assignment File</th>
                                            <th scope="col">Title</th>
                                             <th scope="col"> Assignment Detail</th>
                                           
                                            
                                           
                                          
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>


                                    @foreach ($persanal as $item)
                                   
                                        <tbody>
                                            <tr class="mt-5">
                                                <td><i class="fa fa-check" style="font-size:24px; color:#198754"></i></td>
                                                <td><i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i>
      <a href="https://admin.picruit.com/public/{{$item->assingmenet_file}}">Download</a> Resume</p>
    </td>
                                              
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->assignment }}</td>
                                                <td>{{ $item->date }}</td>
                                                
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
</div>
    



@stop
