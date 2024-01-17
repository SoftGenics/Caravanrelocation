

    <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
       
 

        <style>
        body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
}
            .star-rating input {
                display: none;
            }

            .star-rating {
                display: table;
                width: 100%;
            }
            .star-input{
                width: 100%;
            }

            .star-rating label {
                padding: 10px;
                float: right;
                font-size: 20px;
                color: #eee;
            }
            
             @media screen and (min-width: 768px){
                .star-rating label{
                   font-size: 30px;
                } 
             }

            .star-rating label:checked {
                color: #646157;
            }

           @media screen and (min-width: 768px){
                .rating-container {
                    width: 600px;
                    margin-left: 400px;
                    margin-bottom: 100px
               }
            }

            .rating-container {
                width: 300px;
                max-height: 470px;
                border-radius: 8px;
                padding: 10px;
                background-color: #807373;
                position: fixed;
                left: 10%;
                z-index: 100;
                bottom:10%;
            }
        </style>
    </head>

@extends ('layouts.user')
@section('content')
  
        <!-- Modal -->
        <div class="rating-container p-3 " id="showhide">
            <div class=" d-flex flex-column  align-items-center shadow-lg" style="width: 100%;">
                <div class="modal-header d-flex justify-content-between align-items-center shadow-lg" style="width:100%;">
                    <h5 class="modal-title " id="exampleModalLabel">Rating title</h5>
                    <button type="button" class="close">
                        close
                    </button>
                </div>
                <div class="p-1" style="width:100%; height:60px; shadow-lg">
                    <div class="star-rating">
                        <div class="star-input modal-review d-flex justify-content-around align-items-center">
                            <label for="rating-5" class="fas fa-star" id="lable-5" >
                                <input type="radio" name="rating" id="rating-5"></label>
                            <label for="rating-4" class="fas fa-star" id="lable-4" >
                                <input type="radio" name="rating" id="rating-4"></label>
                            <label for="rating-3" class="fas fa-star" id="lable-3" >
                                <input type="radio" name="rating" id="rating-3"></label>
                            <label for="rating-2" class="fas fa-star"  id="lable-2">
                                <input type="radio" name="rating" id="rating-2"></label>
                            <label for="rating-1" class="fas fa-star"  id="lable-1">
                                <input type="radio" name="rating" id="rating-1" ></label>
                                
                        </div>
                    </div>
                </div>

                @php
                    $id = request('id');
                    
                @endphp
                
                
                    
                    <div class="form-group" style="padding-right: 20px;">
                        <label for="">write your comment</label>
                        <textarea class="form-control" style="width: 100%;" name="description" id="description" rows="3" required></textarea>
                    </div>

                    <div class="form-group" style="padding-right: 20px;">
                        <input type="hidden" class="form-control" id="inputRating" placeholder="Enter Your rating" name="rating" />
                    </div>

                    {{-- <div class="form-group" style="padding-right: 20px;">
                        <input type="hidden" class="form-control" placeholder="Enter Your by_id" name="by_id" id="by_id" value={{$by_id}} />
                    </div> --}}

                    <div class="form-group" style="padding-right: 20px;">
                        <input type="hidden" class="form-control" placeholder="Enter Your user_id" name="user_id" id="user_id" value={{$id}} />
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close">Close</button>
                        <button type="submit" class="btn btn-primary" id="submit">Save changes</button>
                    </div>
               
            </div>
        </div>
        <!-- end Modal -->

        <div class="container">
              
            <!-- Title and Top Buttons Start -->
             <div class="mb-5">
                                <p class="text-small text-muted mb-2">CONTACT</p>

                                <a href="#" class="d-block body-link">
                                    <i data-acorn-icon="email" class="me-2" data-acorn-size="17"></i>
                                    <span class="align-middle">
                                       
                                    </span>
                                </a>
                                <!-- Button trigger modal -->
                            <!--    <button type="button" class="pop-but btn btn-primary mt-3">-->
                            <!--        Rating this persion-->
                            <!--    </button>-->
                            </div>

                   </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
   
            var rating = 0;
            $("#rating-1").click(function() {
                rating = 1;
               $("#lable-1").css("color","#ffc107"); 
               
            });

            $("#rating-2").click(function() {
                rating = 2;
                 $("#lable-2").css("color","#ffc107"); 
            });

            $("#rating-3").click(function() {
                rating = 3;
                 $("#lable-3").css("color","#ffc107"); 
            });

            $("#rating-4").click(function() {
                rating = 4;
                $("#lable-4").css("color","#ffc107"); 
            });

            $("#rating-5").click(function() {
                rating = 5;
                 $("#lable-5").css("color","#ffc107"); 
            });
            $("#sub").click(function() {
                $("#inputRating").val(rating);
                console.log(rating);
            });
          
            $(".close").click(function() {
                $("#showhide").hide();
            });


            $(".pop-but").click(function() {
                $("#showhide").show();
            });
    
    </script>
    
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        $(document).ready(() => {
          
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
       

       
            $("#submit").click(function() {
                
             const description=$("#description");
        const by_id=$("#by_id");
            const user_id ={{ $id }};
           
                var formData = new FormData();
                formData.append('description', description);
                 formData.append('rating', rating);
                formData.append('user_id', user_id);
                formData.append('by_id', by_id);
                
                $.ajax({
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: 'post',
                    data: formData,
                    url: "{{route("rating-submit")}}",
                    beforeSend: function() {    
       $('#sending').show();
       $('#blogupload').hide();
        },
                    success: function(response) {
                       
                        if (response.success==false) {
                           alert("fail") 
                            Swal.fire(
                                'Good job!',
                                'Blog uploaded successfully!',
                                'success'
                            )
                             $('#sending').hide();
       $('#blogupload').show();
                        } else {
                             alert("success");
                            Swal.fire(
                                'Sorry!',
                                'some error occured',
                                'error'
                            )
                            console.log("test");
                        }
                        setTimeout(() => {
                            location.reload();
                        }, 2000);
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

