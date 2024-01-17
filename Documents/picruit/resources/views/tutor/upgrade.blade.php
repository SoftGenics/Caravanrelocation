@extends ('layouts.user')
@section('content')

<button id="rzp-button1">Pay with Razorpay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
function pay(amount){

var options = {
    "key": "rzp_test_d9jpNUdNIk8HY4", // Enter the Key ID generated from the Dashboard
    "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Acme Corp",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    //"order_id": "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
   if(response){
       
       
       creatPaymentHistory(response.razorpay_payment_id,amount);
    
       
   }
    },
    "prefill": {
        "name": "Gaurav Kumar",
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
function payment(e){
    rzp1.open();
    e.preventDefault();
}
payment();


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
                setTimeout(() => {
                    location.reload();
                }, 2000);
            },
            error: function(data){
            
            var errors = data.responseJSON;
            console.log(errors);
            }
        });
}
}
</script>
<div class="page-wrapper">
          
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Upgrade membership</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Upgrade membership</h1> 
                    </div>
                    
                </div>
            </div>
            @php
           $subs=App\Models\subscription::all();
          
           @endphp
            <div class="container-fluid">
               <div class="row">
                   @foreach($subs as $subscript)
                   <!--//'zone', 'lan_category', 'price', 'validity', 'required'-->
<div class="col-lg-3 col-xlg-2 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <h1 class="card-title pricing-card-title" style="font-size: 42px;">{{$subscript->price}} <input type="hidden"  id="money" value="{{$subscript->price}}"/>
                                <small class="text-muted">/ mo</small></h1>
                                  
                                    <div class="row text-center justify-content-md-center">
                                        
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted">{{$subscript->plan}}</small>
                               
                            <center><button type="button" class="btn btn-primary btn-lg btn-block " onclick="razorpaycall({{$subscript->price}})">Get started</button></center>
                             </div>
                             <button onclick="pay({{$subscript->price}})">Pay now</button>
                        </div>
                    </div>
                    @endforeach
                  
                  
                    </div>
          
                
            </div>
          
        </div>

  
            @stop
          
           

            