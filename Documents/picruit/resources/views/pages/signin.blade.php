@extends ('layouts.app')
@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Itim&display=swap');

        .register-photo {
            background: #f1f7fc;
            padding: 80px 0;
            margin-top: 92px;
        }

        .register-photo .image-holder {
            display: table-cell;
            width: auto;
            background: url(https://www.betterteam.com/images/job-orientation-5472%C3%973648-20201210.jpg?crop=21:16,smart&width=420&dpr=2);
            background-size: cover;
        }

        .register-photo .form-container {
            display: table;
            max-width: 900px;
            width: 90%;
            margin: 0 auto;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
        }

        .register-photo form {
            display: table-cell;
            width: 400px;
            background-color: #ffffff;
            padding: 40px 60px;
            color: #505e6c;
        }

        @media (max-width:991px) {
            .register-photo form {
                padding: 40px;
            }
        }

        .register-photo form h2 {
            font-size: 24px;
            line-height: 1.5;
            margin-bottom: 30px;
        }

        .register-photo form .form-control {
            background: #f7f9fc;
            border: none;
            border-bottom: 1px solid #dfe7f1;
            border-radius: 0;
            box-shadow: none;
            outline: none;
            color: inherit;
            text-indent: 6px;
            height: 40px;
        }

        .register-photo form .form-check {
            font-size: 13px;
            line-height: 20px;
        }

        .register-photo form .btn-primary {
            background: #f4476b;
            border: none;
            border-radius: 4px;
            padding: 11px;
            box-shadow: none;
            margin-top: 35px;
            text-shadow: none;
            outline: none !important;
        }

        .register-photo form .btn-primary:hover,
        .register-photo form .btn-primary:active {
            background: #eb3b60;
        }

        .register-photo form .btn-primary:active {
            transform: translateY(1px);
        }

        .register-photo form .already {
            display: block;
            text-align: center;
            font-size: 12px;
            color: #6f7a85;
            opacity: 0.9;
            text-decoration: none;
        }

        .or-seperator {
            margin: 50px 0 15px;
            text-align: center;
            border-top: 1px solid #e0e0e0;
        }

        .or-seperator b {
            padding: 0 10px;
            width: 40px;
            height: 40px;
            font-size: 16px;
            text-align: center;
            line-height: 40px;
            background: #fff;
            display: inline-block;
            border: 1px solid #e0e0e0;
            border-radius: 50%;
            position: relative;
            top: -22px;
            z-index: 1;
        }
        .password-input {
    position: relative;
}

.toggle-password {
    position: absolute;
    right: 5px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    width: 20px;
    height: 20px;
    background: url('eye-icon.png') no-repeat center center; /* Replace 'eye-icon.png' with your image */
    z-index:1;
}

/* Styling for the eye icon when it's clicked or active */
.toggle-password.active {
    background: url('eye-icon-active.png') no-repeat center center; /* Replace 'eye-icon-active.png' with your active image */
}

    </style>
    <link   href="https://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
    <!--<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>-->
    <link   href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>

	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
            @include('sweet::alert')
            

            <form method="post" action="{{ route('login.perform') }}">
                
              @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <h2 class="text-center"><strong>Log in</strong></h2>
                <div class="text-center social-btn">
                    <div class="col-sm-4">
	
	</div>
                    <a href="{{ route('facebook.login') }}"   class="btn btn-primary btn-lg btn-block"><i class="fa fa-facebook"></i> Continue with
                        <b>Facebook</b></a>
                    <a href="{{route('instagram.login')}}" class="btn btn-info btn-lg btn-block"><i class="fa fa-instagram"></i> Continue with
                        <b>Instagram</b></a>
                    <a href="{{ route('google.login') }}" class="btn btn-danger btn-lg btn-block"><i
                            class="fa fa-google"></i> Continue with <b>Google</b></a>
                </div>
                 <!-- Insert this script at the bottom of the HTML, but before you use any Firebase services -->
  
                <div class="or-seperator"><b>or</b></div>
                <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username">
                </div>
                <div class="form-group password-input"><input class="form-control" type="password" id="password" name="password" placeholder="Password">
                <span class="toggle-password" onClick="unhide()" id="togglePassword"><i class="fa fa-eye"></i></span>
                </div>

                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input"
                                type="checkbox">I agree to the license terms.</label></div>
                </div>
                <a href="fpass" class="already">Forgot password?</a>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign in</button></div>
                <a href="{{ route('register.show') }}" class="already">You don't have account? Sign up here.</a>
            </form>
        </div>
    </div>
@stop

<script>
function unhide(){
    const passwordField = document.getElementById('password');
const togglePassword = document.getElementById('togglePassword');


    const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordField.setAttribute('type', type);
    togglePassword.querySelector('i').classList.toggle('fa-eye');
    togglePassword.querySelector('i').classList.toggle('fa-eye-slash');

}
    
</script>


	
