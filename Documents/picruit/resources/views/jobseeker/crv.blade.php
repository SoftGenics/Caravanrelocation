@extends ('layouts.user')
@section('content')
<style>
  .star-rating {
  font-size: 0;
  white-space: nowrap;
  display: inline-block;
  /* width: 250px; remove this */
  height: 50px;
  overflow: hidden;
  position: relative;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating i {
  opacity: 0;
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  /* width: 20%; remove this */
  z-index: 1;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
  .star-rating input {
  -moz-appearance: none;
  -webkit-appearance: none;
  opacity: 0;
  display: inline-block;
  /* width: 20%; remove this */
  height: 100%;
  margin: 0;
  padding: 0;
  z-index: 2;
  position: relative;
}
.star-rating input:hover + i,
.star-rating input:checked + i {
  opacity: 1;
}
.star-rating i ~ i {
  width: 40%;
}
.star-rating i ~ i ~ i {
  width: 60%;
}
.star-rating i ~ i ~ i ~ i {
  width: 80%;
}
.star-rating i ~ i ~ i ~ i ~ i {
  width: 100%;
}
::after,
::before {
  height: 100%;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  text-align: center;
  vertical-align: middle;
}

.star-rating.star-5 {width: 250px;}
.star-rating.star-5 input,
.star-rating.star-5 i {width: 20%;}
.star-rating.star-5 i ~ i {width: 40%;}
.star-rating.star-5 i ~ i ~ i {width: 60%;}
.star-rating.star-5 i ~ i ~ i ~ i {width: 80%;}
.star-rating.star-5 i ~ i ~ i ~ i ~i {width: 100%;}

</style>
<link href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/libs/raty-js/lib/jquery.raty.css" rel="stylesheet">
<div class="page-wrapper">
          
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Tutor rating and reviews</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Tutor rating and reviews</h1> 
                    </div>
                  
                    
                </div>
            </div>
            @php
            $users =Session::get('users');  
            if($users['category']==2 || $users['category']==3){
                $cat=2;$disp="hierarchy1";$cv="h2name";$misp="hierarchy2";
            }
            else{
               $cat=1;$disp="hierarchy2";$cv="h1name";$misp="hierarchy1";
            }
          
            $id=$users['id'];
            @endphp 
            <div class="container-fluid">
              @if(session('statuses'))
              <div class="alert alert-success">
                  {{ session('statuses') }}
              </div>
            @endif
                <div class="row">
                  @foreach(\App\Models\Linking::where($disp, $id)->get() as $userz)
                    <div class="col-md-4 col-xl-6 d-flex align-items-stretch">
                      
                        <a href="javascript:void(0)" class="card bg-success text-white w-100 card-hover">
                          <form action="{{route('store_rating')}}" method="post" enctype="multipart/form-data">
                            @csrf
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                              <span class="star-rating star-5">
                                <input type="radio" name="rating{{$userz[$misp]}}" value="1"><i></i>
                                <input type="radio" name="rating{{$userz[$misp]}}" value="2"><i></i>
                                <input type="radio" name="rating{{$userz[$misp]}}" value="3"><i></i>
                                <input type="radio" name="rating{{$userz[$misp]}}" value="4"><i></i>
                                <input type="radio" name="rating{{$userz[$misp]}}" value="5"><i></i>
                              </span>
                            </div>
                            <div class="mt-4">
                              <h4 class="card-title mb-1 text-white">{{$userz[$cv]}}</h4>
                              <div class="form-group">
                                <input type="hidden" name="for" value="{{$userz[$misp]}}">
                      <textarea class="form-control" name="review" rows="3" spellcheck="false"></textarea>
                      <button type="submit" class="btn waves-effect waves-light btn-warning">
                        Send
                      </button>
                    </div>
                            </div>
                          </div>
                        </form>
                        </a>
                      
                      
                      </div>
                      @endforeach
                      <div class="col-md-4 col-xl-6 d-flex align-items-stretch">
                        <a href="javascript:void(0)" class="card bg-primary text-white w-100 card-hover">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                              <span class="star-rating star-5">
                                <input type="radio" name="rating" value="1"><i></i>
                                <input type="radio" name="rating" value="2"><i></i>
                                <input type="radio" name="rating" value="3"><i></i>
                                <input type="radio" name="rating" value="4"><i></i>
                                <input type="radio" name="rating" value="5"><i></i>
                              </span>
                            </div>
                              <h4 class="card-title mb-1 text-white">Tutor name</h4>
                              <div class="form-group">
                      <textarea class="form-control" rows="3" spellcheck="false"></textarea>
                    </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    
                      <div class="col-md-4 col-xl-6 d-flex align-items-stretch">
                        <a href="javascript:void(0)" class="card bg-primary text-white w-100 card-hover">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                              <span class="star-rating star-5">
                                <input type="radio" name="rating" value="1"><i></i>
                                <input type="radio" name="rating" value="2"><i></i>
                                <input type="radio" name="rating" value="3"><i></i>
                                <input type="radio" name="rating" value="4"><i></i>
                                <input type="radio" name="rating" value="5"><i></i>
                              </span>
                            </div>
                            <div class="mt-4">
                              <h4 class="card-title mb-1 text-white">Tutor name</h4>
                              <div class="form-group">
                      <textarea class="form-control" rows="3" spellcheck="false"></textarea>
                    </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="col-md-4 col-xl-6 d-flex align-items-stretch">
                        <a href="javascript:void(0)" class="card bg-primary text-white w-100 card-hover">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                              <span class="star-rating star-5">
                                <input type="radio" name="rating" value="1"><i></i>
                                <input type="radio" name="rating" value="2"><i></i>
                                <input type="radio" name="rating" value="3"><i></i>
                                <input type="radio" name="rating" value="4"><i></i>
                                <input type="radio" name="rating" value="5"><i></i>
                              </span>
                            </div>
                            <div class="mt-4">
                              <h4 class="card-title mb-1 text-white">Tutor name</h4>
                              <div class="form-group">
                      <textarea class="form-control" rows="3" spellcheck="false"></textarea>
                    </div>
                            </div>
                          </div>
                        </a>
                      </div>
                </div>
          
        </div>
        
            @stop