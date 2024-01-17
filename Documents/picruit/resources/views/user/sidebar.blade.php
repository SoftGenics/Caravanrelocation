<aside class="left-sidebar" data-sidebarbg="skin6">
  <!-- Sidebar scroll-->
  
  
  @if(Session::has('users'))  


  @php
  $users =Session::get('users');   
  @endphp 
  @else
  @include('pages.signin')
  @endif
  
     
  
  <div class="scroll-sidebar">
      <!-- Sidebar navigation--> @if($users['category']=='2')
      <nav class="sidebar-nav">
     <h3 style="margin-left: 26px;">Tutor</h3>
          <ul id="sidebarnav">
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="{{url('dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                          class="hide-menu">Dashboard</span></a></li>
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="{{url('profile')}}" aria-expanded="false"><i
                          class="mdi mdi-account-network"></i><span class="hide-menu">Profile</span></a></li>
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="{{url('upgrade')}}" aria-expanded="false"><i class=" mdi mdi-arrow-up-bold"></i><span
                          class="hide-menu">Upgrade Membership</span></a></li>
             
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="media" aria-expanded="false"><i class="mdi mdi-file-image"></i><span
                          class="hide-menu">  Media</span></a></li>
                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{url('tasks')}}" aria-expanded="false"><i class="mdi mdi-file-image"></i><span
                                class="hide-menu">  Tasks</span></a></li>
                           <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="{{url('adv')}}" aria-expanded="false"><i class="mdi mdi-trending-up"></i><span
                          class="hide-menu">Advertise with us</span></a></li>
                    
                 <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false"><i class="m-r-10 mdi mdi-chevron-right"></i><span
                          class="hide-menu">Student</span></a> 

<div class="collapse" id="dashboard-collapse" style="">
<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
  <li class="sidebar-item"><a href="{{url('slist')}}" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-account-box"></i>All Students</a></li>
  <!--<li class="sidebar-item"><a href="{{url('hslist')}}" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-history"></i>Students History</a></li>-->
  <li class="sidebar-item"><a href="{{url('hslist')}}" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-history"></i>Saved for later</a></li>
  {{-- <li class="sidebar-item"><a href="{{url('rate')}}" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-star"></i>Ratings</a></li>
  <li class="sidebar-item"><a href="#" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-eye"></i>Previews</a></li> --}}
</ul>
</div></li>
<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
href="{{url('testm')}}" aria-expanded="false"><i class="mdi mdi-star"></i><span
    class="hide-menu">  Testimonials</span></a></li>
    
             <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="{{url('/account')}}" aria-expanded="false"><i class="mdi mdi-account"></i><span
                          class="hide-menu">Account</span></a></li>
   
<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link rounded collapsed" data-bs-toggle="collapse"  data-bs-target="#dashboard-collapse1" aria-expanded="false"><i class="m-r-10 mdi mdi-chevron-right"></i><span
                          class="hide-menu">Contact us</span></a> 

<div class="collapse" id="dashboard-collapse1" style="">
<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
  <li class="sidebar-item"><a href="{{url('/schats')}}" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-wechat"></i>Chat with us</a></li>
   <li class="sidebar-item"><a href="{{url('scontact')}}" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-phone"></i>Contact us</a></li>
  
  
</ul>
</div></li>

                           <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="{{url('refferal')}}" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                          class="hide-menu">Referral</span></a></li>
          </ul>

      </nav>
      @elseif($users['category']=='1')
      <nav class="sidebar-nav">
      <h3 style="margin-left: 26px;">Student</h3>
          <ul id="sidebarnav">
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="{{url('dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                          class="hide-menu">Dashboard</span></a></li>
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="{{url('sprofile')}}" aria-expanded="false"><i
                          class="mdi mdi-account-network"></i><span class="hide-menu">Profile</span></a></li>
            
               
               <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false"><i class="m-r-10 mdi mdi-chevron-right"></i><span
                  class="hide-menu">My Tutors</span></a> 
<div class="collapse" id="dashboard-collapse" style="">
<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">

<li class="sidebar-item"><a href="{{url('atutors')}}" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-account-multiple"></i>All tutors</a></li>
<li class="sidebar-item"><a href="{{url('rtutors')}}" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-account-box"></i>Recently checked Tutors</a></li>
<li class="sidebar-item"><a href="{{url('stutors')}}" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-account-plus"></i>Saved Tutors</a></li>
<li class="sidebar-item"><a href="{{url('ftutors')}}" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-account-check"></i>Finalised Tutors</a></li>
</ul>
</div></li>
             
                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{url('schats')}}" aria-expanded="false"><i class="mdi mdi-wechat"></i><span
                                class="hide-menu">Chats</span></a></li>
                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse2" aria-expanded="false"><i class="m-r-10 mdi mdi-chevron-right"></i><span
                              class="hide-menu">My Requirements</span></a> 
  <div class="collapse" id="dashboard-collapse2" style="">
    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
     
      <li class="sidebar-item"><a href="{{url('apostnew')}}" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-account-search"></i>All </a></li>
      <!--<li class="sidebar-item"><a href="fpostnew" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi  mdi-account-check"></i>Found</a></li>-->
      <li class="sidebar-item"><a href="{{url('/sspostnew')}}" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-upload"></i>Post new</a></li>
    </ul>
  </div></li>
  
             <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="{{url('/account')}}" aria-expanded="false"><i class="mdi mdi-account"></i><span
                          class="hide-menu">Account</span></a></li>
                           
                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{url('rate')}}" aria-expanded="false"><i class="mdi mdi-star"></i><span
                                class="hide-menu">Rate Tutors</span></a></li>
                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="{{url('srefer')}}" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                          class="hide-menu">Referral</span></a></li>
                 <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse3" aria-expanded="false"><i class="m-r-10 mdi mdi-chevron-right"></i><span
                          class="hide-menu">Help center</span></a> 
<div class="collapse" id="dashboard-collapse3" style="">
<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
 
  <li class="sidebar-item"><a href="{{url('scontact')}}" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-phone"></i>Contact us</a></li>

</ul>
</div></li>
          </ul>

      </nav>
      @elseif($users['category']=='3')
      <nav class="sidebar-nav">
      <h3 style="margin-left: 26px;">Employer</h3>
          <ul id="sidebarnav">
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="{{url('dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                          class="hide-menu">Dashboard</span></a></li>
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="{{url('eprofile')}}" aria-expanded="false"><i
                          class="mdi mdi-account-network"></i><span class="hide-menu">Profile</span></a></li>
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                   href="{{url('epostnew')}}" aria-expanded="false"><i class="mdi mdi-upload"></i><span class="hide-menu">Post a job</span></a></li>
               <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark  rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false"><i class="m-r-10 mdi mdi-chevron-right"></i><span
                  class="hide-menu">Jobs</span></a> 
<div class="collapse" id="dashboard-collapse" style="">
<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">

<li class="sidebar-item"><a href="{{url('ajobs')}}" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-account-multiple"></i>All jobs</a></li>
<li class="sidebar-item"><a href="{{url('rjobs')}}" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-account-box"></i>Closed Jobs</a></li>
<li class="sidebar-item"><a href="{{url('sjobs')}}" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-account-check"></i>Hired Employees</a></li>

</ul>
</div></li>

<!--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"-->
<!--href="{{url('advertisment')}}" aria-expanded="false"><i class="mdi mdi-upload"></i><span class="hide-menu">Advertise with us</span></a></li>-->
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="{{url('advertisment')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span
                          class="hide-menu">Campaigns</span></a></li>
                          {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{url('schats')}}" aria-expanded="false"><i class="mdi mdi-wechat"></i><span
                                class="hide-menu">Chats</span></a></li> --}}
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="{{url('/account')}}" aria-expanded="false"><i class="mdi mdi-account"></i><span
                          class="hide-menu">Account</span></a></li>
                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse2" aria-expanded="false"><i class="m-r-10 mdi mdi-chevron-right"></i><span
                              class="hide-menu">My Activites</span></a> 
                              
             
  <div class="collapse" id="dashboard-collapse2" style="">
    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
     
      <li class="sidebar-item"><a href="{{url('candidates')}}" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-account-search"></i>Candidates</a></li>
      
    </ul>
  </div></li>
   <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                  href="{{url('upgrade')}}" aria-expanded="false"><i class="mdi mdi-account"></i><span
                                      class="hide-menu">Upgrade membership</span></a></li>
             <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="{{url('rate')}}" aria-expanded="false"><i class="mdi mdi-account"></i><span
                          class="hide-menu">Rate us</span></a></li>
                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="{{url('/srefer')}}" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                          class="hide-menu">Referral</span></a></li>
                 <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse3" aria-expanded="false"><i class="m-r-10 mdi mdi-chevron-right"></i><span
                          class="hide-menu">Help center</span></a> 
<div class="collapse" id="dashboard-collapse3" style="">
<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
 
  <li class="sidebar-item"><a href="scontact" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-phone"></i>Contact us</a></li>
<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{url('/schats')}}" aria-expanded="false"><i class="mdi mdi-wechat"></i><span
                                class="hide-menu">Chat us</span></a></li>
</ul>
</div></li>
          </ul>

      </nav>
      @elseif($users['category']=='4')
      <nav class="sidebar-nav">
      <h3 style="margin-left: 26px;">Job Seeker</h3>
          <ul id="sidebarnav">
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="{{url('dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                          class="hide-menu">Dashboard</span></a></li>
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="jprofile" aria-expanded="false"><i
                          class="mdi mdi-account-network"></i><span class="hide-menu">Profile</span></a></li>
              {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                   href="spostnew" aria-expanded="false"><i class="mdi mdi-upload"></i><span class="hide-menu">Post a job</span></a></li> --}}
               <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark  rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false"><i class="m-r-10 mdi mdi-chevron-right"></i><span
                  class="hide-menu">My Jobs and projects</span></a> 
<div class="collapse" id="dashboard-collapse" style="">
<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">

<li class="sidebar-item"><a href="ajjobs" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-account-multiple"></i>All jobs</a></li>
<li class="sidebar-item"><a href="apjobs" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-account-box"></i>Applied Jobs</a></li>
<li class="sidebar-item"><a href="sjjobs" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-account-check"></i>Saved Jobs</a></li>
<li class="sidebar-item"><a href="comjobs" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-account-plus"></i>Completed jobs and project</a></li>
</ul>
</div></li>


              <!--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"-->
              <!--        href="ljobs" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span-->
              <!--            class="hide-menu">Latest jobs and projects</span></a></li>-->
                          <!--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"-->
                          <!--  href="{{url('rate')}}" aria-expanded="false"><i class="mdi mdi-star"></i><span-->
                          <!--      class="hide-menu">Company reviews</span></a></li>-->
                               
            
                          <!--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"-->
                          <!--  href="train" aria-expanded="false"><i class="mdi mdi-rocket"></i><span-->
                          <!--      class="hide-menu">Train yourself</span></a></li>-->
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                  href="{{url('/upgrade')}}" aria-expanded="false"><i class="mdi mdi-account"></i><span
                                      class="hide-menu">Upgrade membership</span></a></li>
                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="jrefer" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                          class="hide-menu">Referral</span></a></li>
                          
             <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="{{url('/account')}}" aria-expanded="false"><i class="mdi mdi-account"></i><span
                          class="hide-menu">Account</span></a></li>
                 <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse3" aria-expanded="false"><i class="m-r-10 mdi mdi-chevron-right"></i><span
                          class="hide-menu">Help center</span></a> 
<div class="collapse" id="dashboard-collapse3" style="">
<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
 
  <li class="sidebar-item"><a href="scontact" class="sidebar-link waves-effect waves-dark sidebar-link"><i class="mdi mdi-phone"></i>Contact us</a></li>
<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{url('/schats')}}" aria-expanded="false"><i class="mdi mdi-wechat"></i><span
                                class="hide-menu">Chat us</span></a></li>
</ul>
</div></li>
          </ul>

      </nav>

      @else
      <h4>some error occured</h4>

       @endif
      <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>