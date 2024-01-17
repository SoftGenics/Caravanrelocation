

@if(Session::has('users'))  


@php
$users =Session::get('users');   
$id=$users['id'];
$user=\App\Models\media::all();
@endphp 
@else
@include('pages.signin')
@endif
 




<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


@extends ('layouts.user')
@section('content')
<div class="page-wrapper">
          
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Media upload</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Media</h1> 
                    </div>
                    
                </div>
            </div>
           <div class="container-fluid">
            @include('sweet::alert')

<form action="{{ route('Tutor_media') }}" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="row">
                   <div class="card-body">
                    <h4 class="card-title">Requirements</h4>
                    <div class="mb-3 row">
                      <label for="com1" class="col-sm-3 text-end control-label col-form-label">Title</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="com1" placeholder="Media Name Here" name='title' >
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 text-end control-label col-form-label">Media category</label>
                      <div class="col-sm-9">
                        <select class="form-select" name='category'>
                          <option>Choose Your Option</option>
                          <option>engineering</option>
                          <option>Medical</option>
                          <option>Arts</option>
                        </select>
                      </div>
                    </div>
                 
                    <div class="mb-3 row">
                      <label class="col-sm-3 text-end control-label col-form-label">Select File</label>
                      <div class="col-sm-9">
                        <div class="input-group mb-3">
                          <span class="input-group-text">Upload</span>

                          <div class="custom-file">
                            <input type="file" class="form-control"  name='mediafile'>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="abpro" class="col-sm-3 text-end control-label col-form-label">About media</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="abpro" placeholder="About media Here" name="about_media">
                      </div>
                    </div>
                  </div>
                  <div class="p-3 border-top">
                    <div class="text-end">
                      <button type="submit" class="
                          btn btn-info
                          rounded-pill
                          px-4
                          waves-effect waves-light
                        " id="media">
                        Save
                      </button>
                      <button type="submit" class="
                          btn btn-dark
                          rounded-pill
                          px-4
                          waves-effect waves-light
                        ">
                        Cancel
                      </button>
                    </div>
                  </div>
                </div>
</form>
                <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h3>Your media files</h3>




                </div>
              </div>
            </div>
          </div>
                <div class="row">
                <!-- Column -->

                
                @foreach ($user as $item)
@if($item['user_id']==$id)

                <div class="col-lg-4">
               
                  <div class="card">
                      <object data="https://picruit.com/public/img/{{$item['mediafile']}}" type="application/pdf" width="100%" height="500px">
      <p>Unable to display PDF file. <a href="https://picruit.com/public/img/{{$item['mediafile']}}">Download</a> instead.</p>
    </object>
                   
                    <div class="card-body">
                      <div class="d-flex no-block align-items-center mb-3">
                        <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar feather-sm me-1"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                          {{$item['created_at']}}</span>
                        <div class="ms-auto">
                          <a href="javascript:void(0)" class="link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle feather-sm me-1"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                           </a>
                        </div>
                      </div>
                      <h3 class="font-weight-medium">
                        {{$item['title']}}
                      </h3>
                      <p class="mb-0 mt-2 text-muted">
                        {{$item['about_media']}}
                      </p>
                      <div class="text-end">
                        <button class="
                            btn btn-primary btn-rounded
                            waves-effect waves-light
                            mt-3
                          ">
                          Read more
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                @endif

                    
                @endforeach
               
               
                <!-- Column -->
              </div>
            </div>
          
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
{{-- <script>
    $(document).ready(() => {
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

        let profile;
const user_id = "{{ $user_id }}";
        $("#media").click(function () {
            const file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function (event) {
                    $("#mediafile")
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
</script> --}}

            @stop