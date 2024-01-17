@extends ('layouts.app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    {{-- @import url('https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap'); --}}



@section('content')


    <header class="py-5 bg-light border-bottom mb-4 fo" style="margin-top: 123px;">
        <div class="container">
            <h2 class="fw-bolder">Welcome to  Promote Yourself Home!</h2>

            <form class="form-group" action="">
              <label for="" class="fw-bolder">Searching Candidate</label>
              <input type="search"
                class="form-control" name="search" id="" aria-describedby="helpId" placeholder="search">
              <button type="submit" id="helpId" class="col-2 form-text text-muted btn btn-info mt-2" style="margin-left:6px;">Search Details</button>
            </form>

            <div class="text-center my-5" style="overflow-y: auto; overflow-x: scroll; height:65vh;">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Candidate_id</th>
                            <th>Qulification</th>
                            <th>D.O.B</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="mt-5">
                            <td>Raj</td>
                            <td>Raj0234@gmail.com</td>
                            <td>475</td>
                            <td>BCA</td>
                            <td>07/10/2010</td>  
                        </tr>
                       
                    </tbody>

                    <tbody>
                        <tr class="mt-5">
                            <td>Raj</td>
                            <td>Raj0234@gmail.com</td>
                            <td>475</td>
                            <td>BCA</td>
                            <td>07/10/2010</td>  
                        </tr>
                       
                    </tbody>

                </table>
            </div> 
        </div>
    </header>

@stop 
