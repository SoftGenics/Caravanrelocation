

    <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <style>
            .star-rating input {
                display: none;
            }

            .star-rating {
                margin: 50px auto;
                display: table;
                width: 350px;
            }

            .star-rating label {
                padding: 10px;
                float: right;
                font-size: 44px;
                color: #eee;
            }

            .star-rating label:hover,
            .star-rating label:hover~label {
                color: #ffc107 !important;
            }

            .star-rating input:checked {
                color: #646157;
            }

            .star-rating label:active {
                transform: scale(0.8);
                transition: 0.3s ease;
            }

            .rating-container {
                width: 400px;
                max-height: 470px;
                border-radius: 8px;
                padding: 10px;
                background-color: #807373;
                position: fixed;
                left: 40%;
                z-index: 100;
            bottom:10%;
            }
        </style>
    </head>

@extends ('layouts.user')
@section('content')
       @php
                    $id = request('id');
                   
                     $rating=App\Models\rating::find($id);
                @endphp
        <!-- Modal -->
        <div class="rating-container p-3 " id="showhide">
            <div class=" d-flex flex-column  align-items-center shadow-lg" style="width: 100%;">
                <div class="modal-header d-flex justify-content-between align-items-center shadow-lg" style="width:100%;">
                    <h5 class="modal-title " id="exampleModalLabel">Rating title</h5>
                    <button type="button" class="close">
                        close
                    </button>
                </div>
                <div class="p-1" style="width:100%; height:130px; shadow-lg">
                    <div class="star-rating">
                        <div class="star-input">
                            <label for="rating-5" class="fas fa-star" id="rating5">
                                <input type="radio" name="rating" id="rating-5"></label>
                            <label for="rating-4" class="fas fa-star" id="rating4">
                                <input type="radio" name="rating" id="rating-4"></label>
                            <label for="rating-3" class="fas fa-star" id="rating3">
                                <input type="radio" name="rating" id="rating-3"></label>
                            <label for="rating-2" class="fas fa-star" id="rating2">
                                <input type="radio" name="rating" id="rating-2"></label>
                            <label for="rating-1" class="fas fa-star" id="rating1">
                                <input type="radio" name="rating" id="rating-1"></label>
                        </div>
                    </div>
                </div>

                
                
                <form class="form-check" action={{url("rating-update")}} style="width: 100%;">
                    <div class="form-group" style="padding-right: 20px;">
                        <label for="">write your comment</label>
                        <textarea class="form-control" style="width: 100%;" name="description" id="" rows="3" required>{{$rating->description}}</textarea>
                    </div>

                    <div class="form-group" style="padding-right: 20px;">
                        <input type="hidden" class="form-control" id="inputRating" placeholder="Enter Your rating" name="rating" />
                    </div>

                    {{-- <div class="form-group" style="padding-right: 20px;">
                        <input type="hidden" class="form-control" placeholder="Enter Your by_id" name="by_id" value={{$by_id}} />
                    </div> --}}

                    <div class="form-group" style="padding-right: 20px;">
                        <input type="hidden" class="form-control" placeholder="Enter Your user_id" name="user_id" value={{$id}} />
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close">Close</button>
                        <button type="submit" class="btn btn-primary" id="sub">Save changes</button>
                    </div>
                </form>
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
        $(document).ready(function() {
            var rating = 0;
            $("#rating-1").click(function() {
                rating = 1;
                 $("#rating1").css("color","#ffc107");
                  $("#rating2").css("color","#eee");
                   $("#rating3").css("color","#eee");
                    $("#rating4").css("color","#eee");
                    $("#rating5").css("color","#eee");
            });

            $("#rating-2").click(function() {
                rating = 2;
                 $("#rating1").css("color","#ffc107");
                  $("#rating2").css("color","#ffc107");
                   $("#rating3").css("color","#eee");
                    $("#rating4").css("color","#eee");
                    $("#rating5").css("color","#eee");
            });

            $("#rating-3").click(function() {
                rating = 3;
                 $("#rating1").css("color","#ffc107");
                  $("#rating2").css("color","#ffc107");
                   $("#rating3").css("color","#ffc107");
                    $("#rating4").css("color","#eee");
                    $("#rating5").css("color","#eee");
            });

            $("#rating-4").click(function() {
                rating = 4;
                 $("#rating1").css("color","#ffc107");
                  $("#rating2").css("color","#ffc107");
                   $("#rating3").css("color","#ffc107");
                    $("#rating4").css("color","#ffc107");
                    $("#rating5").css("color","#eee");
            });

            $("#rating-5").click(function() {
                rating = 5;
                 $("#rating1").css("color","#ffc107");
                  $("#rating2").css("color","#ffc107");
                   $("#rating3").css("color","#ffc107");
                    $("#rating4").css("color","#ffc107");
                    $("#rating5").css("color","#ffc107");
            });
            $("#sub").click(function() {
                $("#inputRating").val(rating);
               
            });
          
            $(".close").click(function() {
                $("#showhide").hide();
            });


            $(".pop-but").click(function() {
                $("#showhide").show();
            });
            
            var rating={{$rating->rating}}
            if(rating==1)
            {
                $("#rating1").css("color","#ffc107");
            }
            else if(rating==2){
                 $("#rating1").css("color","#ffc107");
                  $("#rating2").css("color","#ffc107");
            }
            else if(rating==3){
                 $("#rating1").css("color","#ffc107");
                  $("#rating2").css("color","#ffc107");
                   $("#rating3").css("color","#ffc107");
            }
            else if(rating==4){
                 $("#rating1").css("color","#ffc107");
                  $("#rating2").css("color","#ffc107");
                   $("#rating3").css("color","#ffc107");
                    $("#rating4").css("color","#ffc107");
                  
            }
            else if(rating==5){
                 $("#rating1").css("color","#ffc107");
                  $("#rating2").css("color","#ffc107");
                   $("#rating3").css("color","#ffc107");
                    $("#rating4").css("color","#ffc107");
                    $("#rating5").css("color","#ffc107");
            }
            
        });
    </script>
@stop

