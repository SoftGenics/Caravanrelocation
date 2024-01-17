@extends ('layouts.app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap');

    .option{
        font-family: "Roboto";
        font-size: 15px;
        font-weight: 400;
        color: rgb(6, 102, 70);
    }

    .drop-down{
        font-family: "Roboto";
        font-size: 30px;
        font-weight: 500;
        color: rgb(6, 102, 70);
    }
    </style>


@section('content')

    <header class="py-5 bg-light border-bottom mb-4 fo" style="margin-top: 123px;">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Study Material Home!</h1>
                <p class="lead mb-0">Picruit Study Material </p>
            </div>

            
            <div class="row">
                <form class="form-group" action="">
                    <label for="category"
                        style="font-size:30px; font-family:roboto; color:rgb(18, 158, 149); font-family:roboto; font-weight:500; margin-left:8px; font-size:18px;">CATEGORY</label>
                    <select class="form-control drop-down" name="category">
                        <option class="option">Medical</option>
                        <option class="option">Engineering</option>
                        <option class="option">Noramal_Course</option>
                    </select>
                    <button type="submit" class="col-6 col-md-2 m-2 btn btn-info">Search Category</button>
                </form>
            </div>
            

            @foreach ($media as $item)

                <div class="row shadow-lg m-4 rounded-6">
                    <div class="col-5 m-5">
                         <i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i>
      <a href="https://picruit.com/public/img/{{$item['mediafile']}}">Download</a>
                       
                    </div>
                    <div class="col-5 m-5">
                        <h2 class="heding"
                            style="font-style:italic; color:rgb(18, 158, 149); font-family:roboto; font-weight:700;">
                            File_Name:- <Span
                                style="font-style:italic;color:rgb(76, 158, 138);  font-family:roboto; font-weight:700;">{{ $item['title'] }}</Span>
                        </h2>

                        
                        <h2 class="heding"
                            style="font-style:italic; color:rgb(18, 158, 149); font-family:roboto; font-weight:700;">
                            About_Media:- {{ $item['about_media'] }}
                        </h2>
                        <h5 class="heding"
                            style="font-style:italic; color:rgb(18, 158, 149); font-family:roboto; font-weight:700;">
                            Date:- {{ $item['created_at'] }}
                        </h5>
                    </div>
                </div>
            @endforeach
        </div>
    </header>

@stop
