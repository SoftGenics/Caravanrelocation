@extends ('layouts.app')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    
    <style>
@media screen and (max-width: 767px) {
    .resume {
        background-size: contain;
         margin-top:5px !important;
    }
    
    
.resume{
    background-image: url("https://picruit.com/images/resumeformimage.webp");
background-size: 100% auto;
    background-position: center;
    background-repeat: no-repeat;
   margin-top:540px; 
 height:500px !important;
}

</style>
@section('content')

<div >
  
 <div class="resume"></div>
    <div class="bg-light " style="margin-top: 123px;">
        
        <div class="container-fuild p-4">
         
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">First Name</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Last Name</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="First Name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Edication</label>
                        <input type="Edication" class="form-control" id="inputPassword4" placeholder="Edication">
                    </div>
                </div>

                <div class="form-group" style="margin-left:10px;">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip Code</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>
               
               
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
    </div>
    </div>
