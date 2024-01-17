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
        .overlap{
           position: fixed; /* Sit on top of the page content */
  display: none; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 100; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
        }
        .msgbox{
            position:fixed;
            background-color:white;
            text-align:center;
            border:2px solid black;
            padding:10px;
            top: 30%;
  left: 30%;
  
            box-shadow:4px;
        }
    </style>


@extends ('layouts.user')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
<div class="page-wrapper">

  <div class="page-breadcrumb">
    <div class="row align-items-center">
      <div class="col-6">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 d-flex align-items-center">
            <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">saved Students</li>
          </ol>
        </nav>
        <h1 class="mb-0 fw-bold">Saved Students</h1>
      </div>
 
    
        <section class="intro">
            <div class="mask d-flex align-items-center" style=" min-height:100vh">
                <div class="container-fluid mt-5">
                    <!--start poup-->
                    <div id="hide-popup" class="form-hide-pop">
                        <div class="row">
                            
                            <div class="col-6 p-5 details-heading" style="background-color:#fff; border-radius:10px;">
                                <div class="close" style="color:red; text-align:right;"><span style="background-color:black;cursor:pointer;padding: 0px 10px 0px 10;border-radius:50%">X</span></div>
                                
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
                                        <h3 class="details-heading mr-5">Name:-</h3>
                                        <h3 id="f_name"></h3>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading">Rate:- </h3>
                                        <h3 id="rate"></h3>
                                    </div>
                                  
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading">Number:- </h3>
                                        <h3 id="number"></h3>
                                    </div>
                                   
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading">Segment:- </h3>
                                        <h3 id="segment"></h3>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading">Address:- </h3>
                                        <h3 id="area"></h3>
                                        

                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading">Country:- </h3>
                                        <h3 id="country"></h3>
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
                        
                    </div>
                    <!-- searching form-->
                    <button type="button" class="fw-bolder search-heading">Fillter
                        <i class="fa fa-filter" style="font-size:28px;color:rgb(16, 150, 108) "></i>
                    </button>

                    <div id="show-hide-form">
                        <form class="row form-group " action="" style="background-color: #999999; padding:10px">
                            <div class="col-md-1 col-lg-4">
                                <input type="search" class="form-control" name="name" id=""
                                    aria-describedby="helpId" placeholder="Enter your Name">
                            </div>
                            <!--<div class="col-md-1 col-lg-3">-->
                            <!--    <select type="search" class="form-control" name="mode" id=""-->
                            <!--        aria-describedby="helpId" placeholder="Select your mode">-->
                            <!--         <option>Select Mode</option>-->
                            <!--        <option>Online</option>-->
                            <!--         <option>offline</option>-->
                            <!--        </select>-->
                            <!--</div>-->

                            <div class="col-md-1 col-lg-4">
                                <input type="search" class="form-control" name="subject" id=""
                                    aria-describedby="helpId" placeholder="Enter your subject">
                            </div>

                            <!--<div class="col-md-1 col-lg-3">-->
                            <!--    <input type="search" class="form-control" name="class" id=""-->
                            <!--        aria-describedby="helpId" placeholder="Enter your class">-->
                            <!--</div>-->

                            <div class="col-md-1 col-lg-4">
                                <input type="search" class="form-control" name="pincode" id=""
                                    aria-describedby="helpId" placeholder="Enter your pincode">
                            </div>

                            <div class="col-md-2 mt-1">
                                <button type="submit" id="helpId" class="form-text text-muted btn btn-info"
                                    style="margin-left:6px;">Search Details</button>
                            </div>
                        </form>
                    </div>

                    <!--end searching form-->
                 
                    <!-- end header -->

                    <div class="row"> <!-- table form --> 
                        <div style="margin:0; padding:0;">
                            <div class="table-responsive bg-white" data-mdb-perfect-scrollbar="true"
                                style="position: relative; height: 445px; width:100%;">
<!--fetch_data_tutor-->
                                <table class="table">
                                    <thead style="background:#198754;">
                                        <tr>
                                            <th style="color:#fff;">Status</th>
                                            <th scope="col" style="color:#fff;">Name</th>
                                            <th scope="col" style="color:#fff;">Country</th>
                                            <th scope="col" style="color:#fff;">Pincode</th>
                                            <th scope="col" style="color:#fff;">State</th>
                                            <th scope="col" style="color:#fff;">City</th>
                                            <th scope="col" style="color:#fff;">Gender</th>
                                           
                                           
                                        </tr>
                                    </thead>
                                    @php
                                        if (isset($infomation)) {
                                            
                                        }
                                        
                                    @endphp
                                    <div class="overlap">
                                    <div class="msgbox" id="confirm">
                                        <h3>Pay ₹100 to view details of Tutor</h3>
                                        <button onClick="closemsg()">Cancel</button>
                                        <input type="hidden" id="user_id"/>
                                         <button onclick="razorpaycall()">Next</button>
                                    </div>
                                    </div>

                                    @foreach ($persanal as $item)
                                    <!--msg box-->
                                    
                                    
                                        <tbody>
                                            <tr>
                                                <td class="view"><button class="button-view bg-success text-white"
                                                        onClick="showdata({{ $item->user_id }})"
                                                        style="border:none; border-radius:6px;"
                                                        type="button" >view</button>
                                                </td>
                                                
                                                <th scope="row" style="color: #666666;"> {{ $item->name }} </th>
                                              
        
                                                <td>{{ $item->country }}</td>
                                                
                            
                                                <td>{{$item->pincode }}</td>
                                                <td>{{ $item->state }}</td>
                                                <td>{{ $item->city}}</td>
                                                <td>{{ $item->gender}}</td>
                                                
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

    

    </div>
  </div>
@stop

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="module" src="node_modules/spin.js/spin.js"></script>
 <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
   
    
    function show(){
            $("#confirm").hide();
            $('.overlap').hide();
           var data= $("#user_id").val();
          
            $.ajax({
                url: '/get-tutor-details/' + data, //this is your uri
                type: 'get', //this is your metho
                dataType: 'json',
                success: function(response) {

                    console.log(response);


                    $('#f_name').text(response[0]['f_name'])
                                        $('#l_name').text(response[0]['l_name'])

                    
                   
                    $('#fees').text(response[0]['fees'])
                    $('#city').text(response[0]['city'])
                    $('#area').text(response[0]['area'])
                     $('#country').text(response[0]['country'])
                     
                     $('#Stream').text(response[0]['Stream'])
                    $('#Exprienceoffline').text(response[0]['Exprienceoffline'])
                     $('#Exprienceonline').text(response[0]['Exprienceonline'])
                     $('#Specialachievements').text(response[0]['Specialachievements'])
                    $('#subject').text(response[0]['subject'])
                     $('#offer_free').text(response[0]['offer_free'])
                

                    $('#segment').text(response[0]['segment'])
                    $('#pincode').text(response[0]['pincode'])
                    $('#state').text(response[0]['state'])
                    $('#user_id').text(response[0]['user_id'])
                    $('#number').text(response[0]['number'])


                    $("#hide-popup").show();
                }
            });


            console.log(data);
        }
    function closemsg() {
        
                 $("#confirm").hide();
                 $('.overlap').hide();
            }
    
        function showdata(data) {
           $("#confirm").show();
           $("#user_id").val(data);
            $('.overlap').show();
          
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
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
         
            var options = {
    "key": "rzp_test_d9jpNUdNIk8HY4", // Enter the Key ID generated from the Dashboard
    "amount":100*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Picruit",
    "description": "Pay for Download file",
    "image": "https://i.ibb.co/fSbpWtd/imageedit-5-4738129310.jpg",
    //"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": {
        "name": "",
        "email": "",
        "contact": ""
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    },
    "handler":function(response){
alert(response.razorpay_payment_id);
      document.getElementById('PaymentId')
        console.log(response);
    show();
    creatPaymentHistory(response.razorpay_payment_id,100);
    recentchecked();
    },
    
};
var rzp1 = new Razorpay(options);
 function razorpaycall(e)
{  
    rzp1.open();
    e.preventDefault();
    
   
    
}

function  creatPaymentHistory(transection_id, amount){
    
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
 
var formData = new FormData();
        formData.append('payment_id', transection_id);
        formData.append('amount', amount);
        $.ajax({
            cache: false,
            contentType: false,
            processData: false,
            type: 'post',
            data: formData,
            url: "{{ url('addPayment') }}",
            success: function (response) {
                if (response) {
                    console.log(response)
                    $('#successMessage').show();
                    $('#successMessage').text(response.message);
                } else {
                    $('#failedMessage').show();
                    $('#failedMessage').text(response.message);
                console.log("test");
                }
                
            },
            error: function(data){
            
            var errors = data.responseJSON;
            console.log(errors);
            }
        });
}
function  recentchecked(){
    
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
 
var formData = new FormData();
        var checked_id=$('#user_id').val();
        formData.append('checked_id',checked_id);
        $.ajax({
            cache: false,
            contentType: false,
            processData: false,
            type: 'post',
            data: formData,
            url: "{{ route('recent-checked') }}",
            success: function (response) {
                if (response) {
                    console.log(response)
                    $('#successMessage').show();
                    $('#successMessage').text(response.message);
                } else {
                    $('#failedMessage').show();
                    $('#failedMessage').text(response.message);
                console.log("test");
                }
               
            },
            error: function(data){
            
            var errors = data.responseJSON;
            console.log(errors);
            }
        });
}



</script>
   

