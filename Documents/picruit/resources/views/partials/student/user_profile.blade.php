@extends ('layouts.user')
@section('content')
<style>
    .file-upload input[type='file'] 
    {
  display: none;
}
</style>
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Profile</h1> 
                    </div>
                    <div class="col-6">
                       
                    </div>
                </div>
            </div>
            @php
            $users=session()->get('users');
            $user_id=$users['id'];
           
            $image=\App\Models\Profile_pics::where('user_id',  $user_id)->first();
            $user=\App\Models\Profile::where('user_id',  $user_id)->first();
            @endphp

      
            <div class="container-fluid">
              
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="alert alert-danger" role="alert" id="failedMessage" style="display: none"></div>
                            <div class="alert alert-success" role="alert" id="successMessage" style="display: none"></div>
                            <div class="card-body">
                                <center class="m-t-30"> 
                                    @if($image)
                                    
                                    <img src="{{"https://picruit.com/public/".$image['image']}}" id="imgPreview" alt="pic" style="
                                    height: 150px;
                                    width: 150px;"
                                        class="rounded-circle" width="150" />
                                    
                                    @else
                                    
                                        <img src="adminlte/assets/images/users/5.jpg" id="imgPreview" alt="pic" style="
                                        height: 150px;
                                        width: 150px;"
                                            class="rounded-circle" width="150" />
                                            @endif
                                        <div class="col-sm-12">
                                            <label for="fileUpload" class="file-upload btn btn-warning btn-block rounded-pill shadow"><i class="fa fa-upload mr-2"></i>&nbsp change profile pic
                                                <input id="fileUpload"  type="file">
                                            </label>
                                        </div>
                                    <h4 class="card-title m-t-10">{{$user['name']}}</h4>
                                    {{-- <h6 class="card-subtitle">Accoubts Manager Amix corp</h6> --}}
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="icon-people"></i>
                                                <font class="font-medium">254</font>
                                            </a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="icon-picture"></i>
                                                <font class="font-medium">54</font>
                                            </a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6>{{$users['email']}}</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>{{$user['whatappno']}}</h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6>{{$user['address']}}</h6>
                                <div class="map-box">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508"
                                        width="100%" height="150" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                                </div> <small class="text-muted p-t-30 db">Social Profile</small>
                                <br />
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" action="{{route('details-update')}}" method="post">
                                    @csrf
       
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="your name" name="name"
                                                class="form-control form-control-line" value="{{$user['name']}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Parent Name/Student name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="psname" placeholder="if a student, your parent's name or vice versa"
                                                class="form-control form-control-line"  value="{{$user['psname']}}">
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="example-email" class="col-md-12" >Email</label>
                                        <div class="col-md-12">
                                            <input type="email" 
                                                class="form-control form-control-line" name="email"
                                                id="example-email" value="{{$user['email']}}">
                                        </div>
                                    </div> --}}
                                    
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="123 456 7890" name="whatappno"
                                                class="form-control form-control-line" value="{{$user['whatappno']}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Address</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" name="address" class="form-control form-control-line">{{$user['address']}}</textarea>
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label class="col-md-12">City</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="city name" name="city"
                                                class="form-control form-control-line" value="{{$user['city']}}">
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label class="col-md-12">State</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="state" name="state"
                                                class="form-control form-control-line" value="{{$user['state']}}">
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label class="col-md-12">Pincode</label>
                                        <div class="col-md-12">
                                            <input type="number" placeholder="Pincode" name="pincode"
                                                class="form-control form-control-line" value="{{$user['pincode']}}"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Select Country</label>
                                        <div class="col-sm-12">
                                            <select class="form-select shadow-none form-control-line" name="country" >
                                                <option>{{$user['country']}}</option>
                                                <option>London</option>
                                                <option>India</option>
                                                <option>Usa</option>
                                                <option>Canada</option>
                                                <option>Thailand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success text-white">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script>
                $(document).ready(() => {
                    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    
                    let profile;
        const user_id = "{{ $user_id }}";
                    $("#fileUpload").change(function () {
                        const file = this.files[0];
                        if (file) {
                            let reader = new FileReader();
                            reader.onload = function (event) {
                                $("#imgPreview")
                                  .attr("src", event.target.result);
                            };
                            reader.readAsDataURL(file);
                        }
                        console.log("hl");
                        profile = file;
            var formData = new FormData();
            formData.append('profile', profile);
            formData.append('user_id', user_id);
            $.ajax({
                cache: false,
                contentType: false,
                processData: false,
                type: 'post',
                data: formData,
                url: "{{ route('update-image') }}",
                success: function (response) {
                    if (response.success) {
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
                    });
                });
            </script>
            
            @stop