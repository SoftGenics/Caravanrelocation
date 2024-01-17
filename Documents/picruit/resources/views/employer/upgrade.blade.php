@extends ('layouts.user')
@section('content')
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
                                <center class="m-t-30"> <h1 class="card-title pricing-card-title" style="font-size: 42px;">{{$subscript->price}} <small class="text-muted">/ mo</small></h1>
                                    <h4 class="card-title m-t-10">ECO</h4>
                                    <h6 class="card-subtitle">Tag line</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                                                <font class="font-medium">254</font>
                                            </a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                                                <font class="font-medium">54</font>
                                            </a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted">Dummy title 1</small>
                                <h6>Dummy text1</h6> <small class="text-muted p-t-30 db">Dummy title 2</small>
                                <h6>Dummy text2</h6> <small class="text-muted p-t-30 db">Dummy title 3</small>
                                <h6>Dummy text3</h6><small class="text-muted">Dummy title 4</small>
                                <h6>Dummy text4</h6> <small class="text-muted p-t-30 db">Dummy title 5</small>
                                <h6>Dummy text5</h6> <small class="text-muted p-t-30 db">Dummy title 6</small>
                                <h6>Dummy text6</h6>
                            <center><button type="button" class="btn btn-primary btn-lg btn-block" id="rzp-button1">Get started</button></center>
                             </div>
                        </div>
                    </div>
                    @endforeach
                  
                  
                    </div>
          
                
            </div>
          
        </div>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
            var options = {
    "key": "rzp_live_a19Cf6Z9ZHtmrV", // Enter the Key ID generated from the Dashboard
    "amount": 2*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Picruit",
    "description": "Pay for Download file",
    "image": "logo.png",
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
    
    },
    
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
    
   
    
}

</script>
        

            @stop