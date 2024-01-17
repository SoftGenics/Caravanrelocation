<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
      
          
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">   
  

@extends ('layouts.user')
@section('content')
<style>
    .file-upload input[type='file'] 
    {
  display: none;
}
</style>
<div class="page-wrapper">
            
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
                        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
                       @include('sweet::alert')
                    </div>
                    <div class="col-6">
                       
                    </div>
                </div>
            </div>
            @php
            $users=session()->get('users');
            $user_id=$users['id'];
           
            $image=\App\Models\Profile_pics::where('user_id',  $user_id)->first();
            $euser=\App\Models\Eprofile::where('user_id',  $user_id)->first();
            @endphp
            <div class="container-fluid">
                @if(session('statuses'))
                <div class="alert alert-success">
                    {{ session('statuses') }}
                </div>
              @endif
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> 
                                    @if($image)
                                    
                                    <img src="https://picruit.com/public/{{$image['image']}}" id="imgPreview" alt="pic" style="
                                    height: 150px;
                                    width: 150px;"
                                        class="rounded-circle" width="150" />
                                    
                                    @else
                                    
                                        <img src="https://picruit.com/public/images/users/5.jpg" id="imgPreview" alt="pic" style="
                                        height: 150px;
                                        width: 150px;"
                                            class="rounded-circle" width="150" />
                                            @endif
                                        <div class="col-sm-12">
                                            <label for="fileUpload" class="file-upload btn btn-warning btn-block rounded-pill shadow"><i class="fa fa-upload mr-2"></i>&nbsp change profile pic
                                                <input id="fileUpload"  type="file">
                                            </label>
                                        </div>
                                    <h4 class="card-title m-t-10">{{$euser?$euser['name']:""}}</h4>
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
                                <h6>{{$euser?$euser['cemail']:""}}</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>{{$euser?$euser['location']:""}}</h6> <small class="text-muted p-t-30 db">Address</small>
                                {{-- <h6>{{$euser?$user['address']:""}}</h6> --}}
                               
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2"  action="{{route('store_form')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Your company Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="cname"
                                                class="form-control form-control-line" name="cname" value="{{$euser?$euser['cname']:""}}">
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Company Phone no</label>
                                        <div class="col-md-12">
                                            <input type="number" placeholder="758xxxxxxx"
                                                class="form-control form-control-line" name="cphone"
                                                id="example-email" value="{{$euser?$euser['cphone']:""}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email id</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="company@domain.com"
                                                class="form-control form-control-line" name="cemail"
                                                id="example-email" value="{{$euser?$euser['cemail']:""}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Your first name and last name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="samuel .."
                                                class="form-control form-control-line" name="name" value="{{$euser?$euser['cname']:""}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Your phone no</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="758xxxxxxx"
                                            class="form-control form-control-line" name="phone" value="{{$euser?$euser['phone']:""}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Your company no of employee</label>
                                        <div class="col-sm-12">
                                            <select class="form-select shadow-none form-control-line" name="cem_no">
                                                 <option>{{$euser?$euser['cem_no']:""}}</option>
                                                <option>1-10</option>
                                                <option>11-23</option>
                                                <option>25-70</option>
                                                <option>80-200</option>
                                              
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Your Designation</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="."
                                                class="form-control form-control-line" name="designation" value="{{$euser?$euser['designation']:""}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Your company Industry</label>
                                        <div class="col-sm-12">
                                            <select class="form-select shadow-none form-control-line" name="industry">
                                                <option>{{$euser?$euser['industry']:""}}</option>
                                                <option>industry 1</option>
                                                <option>industry 2</option>
                                                <option>industry 3</option>
                                                <option>industry 4</option>
                                              
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Your comapany location</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="location"
                                                class="form-control form-control-line" name="location" value="{{$euser?$euser['location']:""}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Your Pincode</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="pincode"
                                                class="form-control form-control-line" name="pincode" value="{{$euser?$euser['pincode']:""}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Comapany description</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line" name="description" >{{$euser?$euser['description']:""}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Comapany docs</label>
                                        <div class="col-md-12">
                                            <input class="form-control" type="file" id="formFile" name="docsimages" {{$euser?$euser['docsimages']:""}}>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white" type="submit">Update Profile</button>
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