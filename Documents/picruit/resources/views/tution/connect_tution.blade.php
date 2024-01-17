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
            top: 0%!important;
            left: 20%;
            z-index: 100;
            width: 1200px;
            height:800px;
            overflow: scroll !important;
        }
        .connect_tutor{
    background-image: url("https://picruit.com/public/images/Are-you-ready-for-hike-in-your-career-_3_-_1_.webp");
background-size: 100% auto;
    background-position: center;
    background-repeat: no-repeat;
   margin-top:150px; 
   height:400px;
}
       
        @media screen and (max-width: 767px) {
    .connect_tutor {
        background-size: 100% auto;
         margin-top:5px !important;
         height:90px;
    }
    
    
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

    <header class="py-5 bg-light border-bottom mb-4 fo">
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
                                        style="font-style:italic; background-color:#198754;">Tutor Details
                                    </h1>
                                </div>
                                <div class="d-flex flex-column justify-content-center p-5 shadow-lg">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading mr-5">Name:-</h3>
                                        <h3 id="f_name"></h3>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading mr-5">offer free:-</h3>
                                        <h3 id="offer_free"></h3>
                                    </div><div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading mr-5">Subject:-</h3>
                                        <h3 id="subject"></h3>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading mr-5">Specialachievements:-</h3>
                                        <h3 id="Specialachievements"></h3>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading mr-5">Stream:-</h3>
                                        <h3 id="Stream"></h3>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading mr-5">Exprience offline:-</h3>
                                        <h3 id="Exprienceoffline"></h3>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading mr-5">Exprience online:-</h3>
                                        <h3 id="Exprienceonline"></h3>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="details-heading">Rate:- </h3>
                                        <h3 id="fees"></h3>
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


                    <div class="text-center my-5 connect_tutor">
                        
                    </div>
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
                                             <th scope="col"></th>
                                          
                                            <th scope="col" style="color:#fff;">Name</th>
                                            <th scope="col" style="color:#fff;">Name_of_id</th>
                                            <th scope="col" style="color:#fff;">Segment</th>
                                            <th scope="col" style="color:#fff;">subject</th>
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
                                        <tbody>
                                            <tr>
                                                 <td class="view"><button class="button-view bg-success text-white"
                                                        onClick="showdata({{ $item->user_id }})"
                                                        style="border:none; border-radius:6px;"
                                                        type="button" >view</button>
                                                </td>
                                                                                               <td><a href="{{url('/save-tutor')}}/{{$item->user_id}}"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="100" height="50" ><!--! Font Awesome Pro 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg> </a></td>
                                                
                                                <th scope="row" style="color: #666666;"> {{ $item->f_name }} </th>
                                              
        
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->segment }}</td>
                                                <td>{{ $item->subject }}</td>
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

    </header>

@stop
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    
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
