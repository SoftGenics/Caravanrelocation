@extends ('layouts.app')
@section('content')
<div class="container-fuild pb-5 mb-2" style="padding-top:150px;">
    <div class="row justify-content-center">
        <div class="col-6 text-center">
            <div class="card p-4 bg-secondary">
                <div class="card-heading">
                    <!--<h>{{$id}}</h>-->
                    <h class="" style="font-style:italic; font-size:25px; color:#184D47; font-weight:800; ">Plese Edit Blog</h>
                </div>
                <button type="button" class="btn btn-success" data-toggle="modal" style="background: green;"
                        data-target="#staticBackdrop">
                        Edit blog now
                    </button>
                 <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="true"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel" style="font-weight:bold">Write
                                            your
                                            blog</h5>
                                            @php 
                                            $id=request('id');
                                            $blog=\App\Models\Blog::find($id);
                                            @endphp


                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Title</label>
                                                <input type="text" class="form-control" value="{{$blog->title}}" id="exampleFormControlInput1"
                                                    placeholder="Blog Title" maxlength="70">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Upload blog image</label>
                                                <input type="file" class="form-control-file"
                                                    id="exampleFormControlFile1" accept="image/*">
                                            </div>
                                            <br /> <br /> <br />
                                            <div class="form-group">
                                                <label for="exampleFormControlbody1">Blog body</label>
                                                <textarea class="form-control" id="summernote" placeholder="Balabala" autofocus rows="3">{{$blog->body}}</textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" style="background: green;"
                                            id="blogupload">Upload</button>
                                            <button type="button"  class="btn btn-primary" style="background: green; display:none"
                                            id="sending">Uploading......</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                <!--<div class="card-body">                      -->
                <!--      <form action="/edit-blogs" method="POST" enctype="multipart/form-data">-->
                <!--          @csrf-->
                <!--        <input type="hidden" name="id" value={{$id}}>-->
                <!--        <input type="file" name="mediafile"  required><br>-->
                <!--        <button type="submit">upload</button>-->
                <!--      </form>-->
                <!--</div>-->
            </div>
        </div>
    </div>
</div>
@php
        if (Session::has('users')) {
            $users = session()->get('users');
            $user_id = $users['id'];
        } else {
            $user_id = 'null';
        }
    @endphp

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        $(document).ready(() => {
            
         
          
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            // start popup
            $("#show-hide-form").hide(1000);
            $(".search-heading").click(function() {
                $("#show-hide-form").toggle(2000);
            });
            // end popup

            let profile;
            const user_id = "{{ $id }}";
            $("#blogupload").click(function() {
                
                const file = $('#exampleFormControlFile1')[0].files[0]
                let markupStr = $('#summernote').summernote('code');
       
                let btitle = $("#exampleFormControlInput1").val();
                profile = file;
                var formData = new FormData();
                formData.append('profile', profile);
                formData.append('id', user_id);
                formData.append('btitle', btitle);
                formData.append('bbody', markupStr);
               console.log(user_id)
                $.ajax({
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: 'post',
                    data: formData,
                    url: "{{ url('/edit-blogs') }}",
                    beforeSend: function() {    
       $('#sending').show();
       $('#blogupload').hide();
        },
                    success: function(response) {
                        console.log(response)
                        if (response) {
                            console.log(response)
                       Swal.fire(
                             'Good job!',
                               'Blog uploaded successfully!',
                                 'success'
                             )
                          $('#sending').hide();
       $('#blogupload').show();
                        } else {
                            Swal.fire(
                                'Sorry!',
                                'some error occured',
                                'error'
                            )
                            
                        }
                        // setTimeout(() => {
                        //     location.reload();
                        // }, 2000);
                    },
                    error: function(data) {

                        var errors = data.responseJSON;
                        console.log(errors);
                    }
                });
            });
        });
    </script>

@stop