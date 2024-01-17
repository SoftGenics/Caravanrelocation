<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Carousel Slider Index</title>
   <style>
       .close{
          border:2px solid black;
          border-radius:150%;
           
           
       }
       
       
   </style>
   <script>
       $('close').click(function(){
           
       })
       
   </script>
   
</head>
<body>
    <div class="container-fuild">
        <div class="row">
            <div class="col-12 mt-5" id="find_job" style="display:none">
                
                <div class="close">X</div>
                   
                      @php
            $ads=App\Models\ad::where('usertype' ,'find_job')->get();
            @endphp
            @if($ads)
            
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner " >
                            @foreach($ads as $ad)
            @if($ad->status==true)
          
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <div class="slider-image text-center">
                                        <img src="{{$ad->file}}" class="d-inline-block border text-center rounded" alt="{{ $ad->file }}" height="300" width="100">
                                    </div>
                                </div>
                                 
            
                                 @endif
          @endforeach
                             
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                      @endif
                
            </div>
          
        </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
let url=window.location.pathname;
if(url=="/find-job" || "/tutors" || "/globel/assignment"){
$("#find_job").show();
}

</script>
</body>
</html>