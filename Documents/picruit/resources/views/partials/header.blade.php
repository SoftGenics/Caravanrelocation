<!DOCTYPE html>
<html lang="en">
<head>
   
   <style>
        .main-navbar-cont{
            display: flex;
            justify-content: space-between; 
            align-items: center;
            width: 100%;
        } 
      
    </style>
</head> 
<body> 



    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container-fluid">
        <div class="row">
            
                 
                <nav class="main-nav d-flex justify-content-between align-items-center">
                   <div class="mobile-logo">
                <a href="{{ url('/') }}" class="logo d-flex justify-content-center align-items-center">
                                <img class="logo-image " src="https://picruit.com/public/img/logo.svg"
                                    style="width:120px; height:70px; " alt="logo"/>
                            </a>
            </div>
                    <ul class="nav main-navbar-cont">

                        <li class="nav-item-r  d-none d-md-inline">
                            <a href="{{ url('/') }}" class="logo d-flex justify-content-center align-items-center">
                                <img class="logo-image " src="https://picruit.com/public/img/logo.svg"
                                    style="width:120px; height:70px; " alt="logo"/>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#"
                                style="font-size: 18px;color:#000000;font-weight:bold;" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Jobs
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
                                <a class="dropdown-item111" href="{{ url('find-job') }}">Find jobs</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item111" href="{{ url('epostnew') }}">Post a job</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item111" href="{{ url('/resume') }}">Resumes</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item111" href="{{ url('/Eadv') }}">Promote Yourself</a>
                                <div class="dropdown-divider"></div>
                             
                                <a class="dropdown-item111" href="{{ url('/candidate') }}">Candidates</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="font-size: 18px;color:#000000;font-weight:bold;"
                                href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Freelancing
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item111" href="{{ url('find-job') }}" style="color:black;">Find
                                    work</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item111" href="{{ url('working-progress') }}" style="color:black;">Post work</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item111" href="{{ url('/connect/freelancer') }}" style="color:black;">Connect Freelancer</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item111" href="{{ url('/Jadv') }}" style="color:black;">Promote Yourself</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="font-size: 18px;color:#000000;font-weight:bold;"
                                href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Tuition
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item111" href="{{ url('tutors') }}" style="color:black;">Browse
                                    Tuitions</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item111" href="{{ url('post/tution/req') }}" style="color:black;">Post Tutor Request</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item111" href="{{ url('connect/tution') }}" style="color:black;">Connect Tutor</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item111" href="{{url('advertisment')}}" style="color:black;">Promote Yourself</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item111" href="{{ url('study-material') }}"style="color:black;">Study
                                    Material</a>
                            </div>
                        </li>

                        <li class="scroll-to-section"><a href="{{ url('blog') }}"
                                style="font-size: 18px;color#363637;font-weight:bold;">Blog</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"
                                style="font-size: 18px;color:#000000 ;font-weight:bold;" href="#"
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Reach us
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item111" href="{{ url('contactus') }}" style="color:black;">Contact us</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item111" href="/aboutus" style="color:black;">About us</a>
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item111" href={{ url('career') }} style="color:black;">Careers</a>


                            </div>
                        </li>
                        @if (!Session::has('users'))
                            <li class="scroll-to-section pb-3">
                                <div class="main-red-button-hover"><a href="{{ route('login.show') }}"
                                    style="font-size: 16px;color: #17358f; font-family: sans-serif; font-weight: bold;">Sign in </a></div>
                            </li>
                            <li class="scroll-to-section pb-3">
                                <div class="main-red-button-hover"><a href="{{ route('register.show') }}"
                                    style="font-size: 16px;color:#086527; font-family: sans-serif; font-weight: bold; #10339f; font-weigth:bold;">Sign up</a></div>
                            </li>
                        @endif
                        @if (Session::has('users'))
                            @php
                                $users = Session::get('users');
                                //echo $users['email'];
                            @endphp
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-flex justify-content-center align-items-center mb-3"
                                    style="font-size: 18px;color:#000000;font-weight:bold;" href="#"
                                    id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    @if (Session::get('userimage'))
                                        <img src="{{ 'https://picruit.com/public/' . session()->get('userimage') }}"
                                            class="img-circle" style="width: 40px; height: 40px;">
                                    @else
                                        <img src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG-High-Quality-Image.png"
                                            class="img-circle " style="width: 40px;  height: 40px;">
                                    @endif
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item111" href="{{ url('dashboard') }}"
                                        style="color:black;">{{ $users['email'] }}</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item111" href="{{ url('dashboard') }}"
                                        style="color:black;">Dashboard</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item111" href="{{ route('logout.perform') }}"
                                        style="color:black;">Log out</a>

                                </div>
                            </li>
                        @endif
                        <li class="nav-item ">

                        </li>


                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>

                </nav>
            
        </div>
    </div>
</header>
<div id="chatbox" style="display: none; margin-bottom:30">
    <div class="card mt-5" style="width: 300px;
      border: none;
      border-radius: 15px;">
        <div class="d-flex flex-row justify-content-between p-3 adiv text-white">

            <span class="pb-3">Live chat</span>
            <a href="javascript:popchat()" style="font-size: 28px;
      font-weight: bold;"> <i
                    class="bi bi-x"></i></a>
        </div>
        <div class="d-flex flex-row p-3">
            <img src="https://img.icons8.com/color/48/000000/circled-user-female-skin-type-7.png"
                style="width:30px; height:30px;">
            <div class="chat ml-2 p-3">Hello and thankyou for visiting birdlymind. Please click the video above</div>
        </div>

        <div class="d-flex flex-row p-3">
            <div class="bg-white mr-2 p-3"><span class="text-muted">Hello and thankyou for visiting birdlynind.</span>
            </div>
            <img src="https://img.icons8.com/color/48/000000/circled-user-male-skin-type-7.png"
                style="width:30px; height:30px;">
        </div>

        <div class="d-flex flex-row p-3">
            <img src="https://img.icons8.com/color/48/000000/circled-user-female-skin-type-7.png"
                style="width:30px; height:30px;">
            <div class="myvideo ml-2"><img src="https://imgur.com/GOxU1jx.png" width="200"></div>
        </div>

        <div class="d-flex flex-row p-3">
            <img src="https://img.icons8.com/color/48/000000/circled-user-female-skin-type-7.png"
                style="width:30px; height:30px;">
            <div class="chat ml-2 p-3"><span class="text-muted dot">. . .</span></div>
        </div>

        <div class="form-group px-3">
            <textarea class="form-control" rows="2" placeholder="Type your message"></textarea>
        </div>
         <div class="form-group px-3" >
             <button type="submit" style="background-color:#25d366;color:white; border-radius:5px;margin-left:80%">Send <i class="fa fa-paper-plane-o"
                                        ></i></button>

          
        </div>
        
    </div>
</div>
<!--<a href="javascript:popchat()" class="float">-->
<!--    <div style="justify-content:center; align-item:center;margin-top:10" id="chatbotbox"> <i class="bi bi-chat-dots my-float"></i></div>-->
   
<!--</a>-->

</body>
</html>

