<link   href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
@extends ('layouts.app')
@section('content')

<style>
.career-form {
  background-color: #ffffff;
  border-radius: 5px;
  padding: 0 16px;
  color:black;
}

.career-form .form-control {
  background-color: rgb(162 255 0 / 20%);
   border: 5px;
  padding: 21px 15px;
border-radius: 5px;
  width: 100%;
  color: black;
  border-color:black;
}
.search{
    margin-top:500px;
}

.career-form .form-control::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: black;
}

.career-form .form-control::-moz-placeholder {
  /* Firefox 19+ */
  color: black;
}

.career-form .form-control:-ms-input-placeholder {
  /* IE 10+ */
  color: black;
}

.career-form .form-control:-moz-placeholder {
  /* Firefox 18- */
  color: black;
}

.career-form .custom-select {
  background-color: rgb(162 255 0 / 20%);
  border: 5px;
  padding: 12px 15px;
  color: #000;
  width: 100%;
  border-radius: 5px;
  text-align: left;
  height: auto;
  background-image: none;
}

.career-form .custom-select:focus {
  -webkit-box-shadow: none;
          box-shadow: none;
}

.career-form .select-container {
  position: relative;
}

.career-form .select-container:before {
  position: absolute;
  right: 15px;
  top: calc(50% - 14px);
  font-size: 18px;
  color: #ffffff;
  
  font-family: "Material-Design-Iconic-Font";
}

.filter-result .job-box {
  -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
          box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
  border-radius: 10px;
  padding: 10px 35px;
}

ul {
  list-style: none; 
}

.list-disk li {
  list-style: none;
  margin-bottom: 12px;
}

.list-disk li:last-child {
  margin-bottom: 0;
}

.job-box .img-holder {
  height: 65px;
  width: 65px;
  background-color: #5ecf35;
 
  background-image:  linear-gradient(to right, rgb(27 227 52 / 90%) 0%, #3f6c28 100%);
  font-family: "Open Sans", sans-serif;
  color: #fff;
  font-size: 22px;
  font-weight: 700;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 65px;
}

.career-title {
  background-color: #4e63d7;
  color: #fff;
  padding: 15px;
  text-align: center;
  border-radius: 10px 10px 0 0;
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
  background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
}

.job-overview {
  -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
          box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
  border-radius: 10px;
}

@media (min-width: 992px) {
  .job-overview {
    position: -webkit-sticky;
    position: sticky;
    top: 70px;
  }
}

.job-overview .job-detail ul {
  margin-bottom: 28px;
}

.job-overview .job-detail ul li {
  opacity: 0.75;
  font-weight: 600;
  margin-bottom: 15px;
}

.job-overview .job-detail ul li i {
  font-size: 20px;
  position: relative;
  top: 1px;
}

.job-overview .overview-bottom,
.job-overview .overview-top {
  padding: 35px;
}

.job-content ul li {
  font-weight: 600;
  opacity: 0.75;
  border-bottom: 1px solid #ccc;
  padding: 10px 5px;
}

@media (min-width: 768px) {
  .job-content ul li {
    border-bottom: 0;
    padding: 0;
  }
 
  
}
@media screen and (max-width: 767px) {
    .bgsvg {
        background-size: contain;
         margin-top:5px !important;
    }
    
    .search{
    margin-top:220px;
}
}

.job-content ul li i {
  font-size: 20px;
  position: relative;
  top: 1px;
}
.mb-30 {
    margin-bottom: 30px;
}

.bgsvg{
    background-image: url("https://picruit.com/public/images/Are-you-ready-for-hike-in-your-career-_1_-_1_.webp");
background-size: 100% auto;
    background-position: center;
    background-repeat: no-repeat;
   margin-top:140px; 
}

  


.article .article-content h1,
        .article .article-content h2,
        .article .article-content h3,
        .article .article-content h4,
        .article .article-content h5,
        .article .article-content h6 {
            color: #20247b;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .article .article-content blockquote {
            max-width: 600px;
            padding: 15px 0 30px 0;
            margin: 0;
        }

        .article .article-content blockquote p {
            font-size: 20px;
            font-weight: 500;
            color: #198754;
            margin: 0;
        }

        .article .article-content blockquote .blockquote-footer {
            color: #20247b;
            font-size: 16px;
        }

        .article .article-content blockquote .blockquote-footer cite {
            font-weight: 600;
        }
</style>

            <header class="  border-bottom mb-4 fo bgsvg " >
            <div class="container">
                <div class="text-center search">
               
<br>
                     <form action="" class="career-form mb-60">
                            <div class="row">
                                <div class="col-md-8 col-lg-9 mt-3">
                                    <div class="input-group position-relative">
                                        <input type="text" class="form-control" placeholder="Enter Your Keywords" id="keywords" name="title">
                                    </div>
                                </div>
                                
                                <div class="col-md-4 col-lg-3 mt-3">
                                    <button type="submit" class="btn btn-lg btn-block btn-success btn-custom" id="contact-submit">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </header>
<div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="career-search mb-60">

                      

                        <div class="filter-result">
                        <br>
                            <p class="mb-30 ff-montserrat">  </p>
<br>
@foreach($blogs as $blog)


                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                   
                                    <div class="job-content">
                                        <div class="article-img">
                                            

                                    <img src="https://picruit.com/public/{{ $blog['mediafile'] }}" title=""
                                        alt="" style="width:100%; height:90vh">
                                </div>
                                        <h5 class="text-center text-md-left">{{$blog->title}}</h5>
                                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans" style="margin-left: 36px;">
                                            <li class="mr-md-4">
                                                 &nbsp<i class="zmdi zmdi-pin mr-2"></i> 
                                                 
                                                 <div class="article-content">
                                    {!! $blog['body'] !!}
                                </div>
                                               
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                               
                            </div>
                            @endforeach
<!--end-->
                            

                    <!-- START Pagination -->
                    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
                    <!-- END Pagination -->
                </div>
            </div>

        </div>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    

    <script>
        
          $.ajax({
                url: '/career-blog/', //this is your uri
                type: 'get', //this is your metho
                dataType: 'json',
                success: function(response) {

                    console.log(response.title);

                  
                }
            });
        
        $("#keywords").on('keyup', function(){
           
            var value = $(this).val().toLowerCase();
            
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
        })
    



     
    </script>
        @stop