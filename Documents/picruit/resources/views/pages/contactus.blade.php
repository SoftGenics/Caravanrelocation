@extends ('layouts.app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"  
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    {{-- @import url('https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap'); --}}



@section('content')


    <header class="py-5 bg-light border-bottom mb-4 fo" style="margin-top: 60px;">
        
         <div class="container-fuild p-5">
            <div class="row">
                <div class="col-lg-7"  data-aos="fade-right" data-aos-delay="50" data-aos-duration="800">
                    <div class="section-heading">
                        <h2>Feel free to <em>Contact</em> us <span></span></h2>
                        <div id="map" >
                            <div class="mapouter" style="width: 100%;">
                                <div class="gmap_canvas" style="width: 100%;">
                                    <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=pioneer academy ludhiana&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Game</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:100%!important;height:500px!important;}</style></div>
                        </div>
                        
                        <div class="info" style="margin-top:20px;">
                            <span><i class="fa fa-phone"></i> <a href="#" style="color:#000; ">+919878865747<br></a></span>
                            <span><i class="fa fa-envelope"></i> <a href="#" style="color:red;">picruit.pioneer@gmail.com<br></a></span>
                        </div>
                        
                    </div>
                </div>
                 <!-- form-raj -->
                 @include('sweet::alert')
                <div class="col-lg-5 align-self-center" style="padding-left:1px;" data-aos="fade-left" data-aos-delay="100"
                    data-aos-duration="800">
                    <form id="contact" action="{{route('feel-free')}}" method="post">
                        @csrf
                        <div class="row"> 
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Name"
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="surname" name="number" id="surname" placeholder="phone number"
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input   name="yourrequest" id="website" placeholder="Your request"
                                        required="" />
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" style="width: 100%;" id="form-submit" class="main-button">Submit Request <i class="fa fa-paper-plane-o"
                                        style="color:rgb(248, 251, 248); padding-top:5px; padding-left:5px;"></i></button>

                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
              <!-- form-raj -->
            </div>
        </div>
    </header>

@stop
