@extends ('layouts.user')
@section('content')
<style>
    .container{
        max-width: 1623px ;
    }
    #messages-main {
    position: relative;
    margin: 0 auto;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}
#messages-main:after, #messages-main:before {
    content: " ";
    display: table;
}
#messages-main .ms-menu .list-group-item-heading
{
    color: black;
    font-weight: bold;
}
#messages-main .ms-menu {
    position:absolute;
    left: 0;
    top: 0;
    border-right: 1px solid #eee;
    padding-bottom: 50px;
    
    min-height:100%;
    width: 240px;
    background: #fff;
    margin-top: 5%;
}
@media (min-width:768px) {
    #messages-main .ms-body {
    padding-left: 240px;
}
}@media (max-width:767px) {
    #messages-main .ms-menu {
    height: calc(100% - 58px);
    display: none;
    z-index: 1;
    top: 58px;
}
#messages-main .ms-menu.toggled {
    display: block;
}
#messages-main .ms-body {
    overflow: hidden;
}
}
#messages-main .ms-user {
    padding: 15px;
    background: #f8f8f8;
}
#messages-main .ms-user>div {
    overflow: hidden;
    padding: 3px 5px 0 15px;
    font-size: 11px;
}
#messages-main #ms-compose {
    position: fixed;
    bottom: 120px;
    z-index: 1;
    right: 30px;
    box-shadow: 0 0 4px rgba(0, 0, 0, .14), 0 4px 8px rgba(0, 0, 0, .28);
}
#ms-menu-trigger {
    user-select: none;
    position: absolute;
    left: 0;
    top: 0;
    width: 50px;
    height: 100%;
    padding-right: 10px;
    padding-top: 19px;
}
#ms-menu-trigger i {
    font-size: 21px;
}
#ms-menu-trigger.toggled i:before {
    content: '\f2ea'
}
.fc-toolbar:before, .login-content:after {
    content: ""
}
.message-feed {
    padding: 20px;
}
#footer, .fc-toolbar .ui-button, .fileinput .thumbnail, .four-zero, .four-zero footer>a, .ie-warning, .login-content, .login-navigation, .pt-inner, .pt-inner .pti-footer>a {
    text-align: center;
}
.message-feed.right>.pull-right {
    margin-left: 15px;
}
.message-feed:not(.right) .mf-content {
    background: #03a9f4;
    color: #fff;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
    margin-left: 5px;

}
.message-feed.right .mf-content {
    background: #eee;
}
.mf-content {
    padding: 12px 17px 13px;
    border-radius: 12px;
    display: inline-block;
    max-width: 46%
}
.mf-date {
    display: block;
    color: #B3B3B3;
    margin-top: 7px;
}
.mf-date>i {
    font-size: 14px;
    line-height: 100%;
    position: relative;
    top: 1px;
}
.msb-reply {
    box-shadow: 0 -20px 20px -5px #fff;
    position: relative;
    margin-top: 30px;
    border-top: 1px solid #eee;
    background: #f8f8f8;
}
.four-zero, .lc-block {
    box-shadow: 0 1px 11px rgba(0, 0, 0, .27);
}
.msb-reply textarea {
    width: 100%;
    font-size: 13px;
    border: 0;
    padding: 10px 15px;
    resize: none;
    height: 60px;
    background: 0 0;
}
.msb-reply button {
    position: absolute;
    top: 0;
    right: 0;
    border: 0;
    height: 100%;
    width: 60px;
    font-size: 25px;
    color: #2196f3;
    background: 0 0;
}
.msb-reply button:hover {
    background: #f2f2f2;
}
.img-avatar {
    height: 37px;
    border-radius: 50%;
    width: 37px;
}
.list-group.lg-alt .list-group-item {
    border: 0;
}
.p-15 {
    padding: 15px!important;
}
.btn:not(.btn-alt) {
    border: 0;
}
.action-header {
    position: relative;
    background: #f8f8f8;
    padding: 15px 13px 15px 17px;
}
.ah-actions {
    z-index: 3;
    float: right;
    margin-top: 7px;
    position: relative;
}
.actions {
    list-style: none;
    padding: 0;
    margin: 0;
}
.actions>li {
    display: inline-block;
}

.actions:not(.a-alt)>li>a>i {
    color: #939393;
}
.actions>li>a>i {
    font-size: 20px;
}
.actions>li>a {
    display: block;
    padding: 0 10px;
}
.ms-body{
    background:#fff;    
}
#ms-menu-trigger {
    user-select: none;
    position: absolute;
    left: 0;
    top: 0;
    width: 50px;
    height: 100%;
    padding-right: 10px;
    padding-top: 19px;
    cursor:pointer;
}
#ms-menu-trigger, .message-feed.right {
    text-align: right;
}
#ms-menu-trigger, .toggle-switch {
    -webkit-user-select: none;
    -moz-user-select: none;
}
.chmd{
    overflow-y: scroll;
    height: 70%;
}
.user-list{
  position:absolute;
    height:90vh;
    overflow:scroll;
}
</style>
<div class="page-wrapper">
          
            
           
            <div class="container-fluid">
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                <div class="container-fuild bootstrap snippets bootdey">
                    <div class="tile tile-alt" id="messages-main">
                        <div class="ms-menu">
                            
                            
                            
                            @php
$users =Session::get('users');  
if($users['category']==2 || $users['category']==3){
    $cat=2;$disp="hierarchy1";$cv="h2name";$disp1="hierarchy2";
}
else{
   $cat=1;$disp="hierarchy2";$cv="h1name";$disp1="hierarchy1";
}

$id=$users['id'];
@endphp
                            <div class="list-group lg-alt user-list">
                                @foreach(\App\Models\User::all() as $userz)
                                
                                @if($userz['id']==$id)
                                @else
                                <a class="list-group-item media" href="javascript:chatwith({{$userz['id']}})" id="{{$userz['id']}}">
                                    
                                    <div class="pull-left">
                                        <input type="hidden" id="outgoinng_id" value="{{$userz->id}}"/>
                                        @php
                                        $useri=\App\Models\Profile_pics::where("user_id",$userz['id'])->first();
                                        
                                        @endphp
                                        @if($useri)
                                        <img src="https://picruit.com/public/{{$useri?$useri['image']:""}}" alt="" class="img-avatar" id="im{{$useri?$userz[$disp1]:""}}">
                                        @else
                                        <img src="https://picruit.com/public/images/profile.webp" alt="" class="img-avatar" id="im{{$useri?$userz[$disp1]:""}}">
                                        @endif
                                       
                                    </div>
                                    
                                    <div class="media-body">
                                        <div class="list-group-item-heading">{{$userz->name?$userz->name:"Name"}}</div>
                                        @if($userz['login_at'])
                                        <div class="list-group-item-heading" style="color:green">Online</div>
                                      @else
                                      <div class="list-group-item-heading" style="color:red">{{$userz['last_seen']?Carbon\Carbon::parse($userz['last_seen'])->diffForHumans():""}}</div>
                                      @endif
                                    </div>
                                </a>
                                <br>
                                @endif
                                @endforeach
                              
                            </div>
                    
                            
                        </div>
                        
                        <div class="ms-body">
                            <div class="action-header clearfix" style="padding-bottom: 35px;">
                                <div class="visible-xs"  id="ms-menu-trigger">
                                  
                                    <i class="fa fa-bars"></i>
                                </div>
                                 
                                <div class="pull-left hidden-xs">
                                  
                                    <div class="lv-avatar pull-left">
                                         
                                    </div>
                                    
                                </div>
                                 
                                <ul class="ah-actions actions">
                                    {{-- <li>
                                        <a href="">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </li> --}}
                                   <div id="head"></div>
                                                                    </ul>
                            </div>
                    <div class="chmd" id="chatplay">
                       
                            <div class="message-feed media">
                                <div class="pull-left">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="img-avatar">
                                </div>
                                <div class="media-body">
                                    <div class="mf-content">
                                        Quisque consequat arcu eget odio cursus, ut tempor arcu vestibulum. Etiam ex arcu, porta a urna non, lacinia pellentesque orci. Proin semper sagittis erat, eget condimentum sapien viverra et. Mauris volutpat magna nibh, et condimentum est rutrum a. Nunc sed turpis mi. In eu massa a sem pulvinar lobortis.
                                    </div>
                                    <small class="mf-date"><i class="fa fa-clock-o"></i> 20/02/2015 at 09:00</small>
                                </div>
                            </div>
                            
                            <div class="message-feed right">
                                <div class="pull-right">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="img-avatar">
                                </div>
                                <div class="media-body">
                                    <div class="mf-content">
                                        Mauris volutpat magna nibh, et condimentum est rutrum a. Nunc sed turpis mi. In eu massa a sem pulvinar lobortis.
                                    </div>
                                    <small class="mf-date"><i class="fa fa-clock-o"></i> 20/02/2015 at 09:30</small>
                                </div>
                            </div>
                            
                            <div class="message-feed media">
                                <div class="pull-left">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="img-avatar">
                                </div>
                                <div class="media-body">
                                    <div class="mf-content">
                                        Etiam ex arcumentum
                                    </div>
                                    <small class="mf-date"><i class="fa fa-clock-o"></i> 20/02/2015 at 09:33</small>
                                </div>
                            </div>
                            
                            <div class="message-feed right">
                                <div class="pull-right">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="img-avatar">
                                </div>
                                <div class="media-body">
                                    <div class="mf-content">
                                        Etiam nec facilisis lacus. Nulla imperdiet augue ullamcorper dui ullamcorper, eu laoreet sem consectetur. Aenean et ligula risus. Praesent sed posuere sem. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    </div>
                                    <small class="mf-date"><i class="fa fa-clock-o"></i> 20/02/2015 at 10:10</small>
                                </div>
                            </div>
                            
                            <div class="message-feed media">
                                <div class="pull-left">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="img-avatar">
                                </div>
                                <div class="media-body">
                                    <div class="mf-content">
                                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ac tortor ut elit sodales varius. Mauris id ipsum id mauris malesuada tincidunt. Vestibulum elit massa, pulvinar at sapien sed, luctus vestibulum eros. Etiam finibus tristique ante, vitae rhoncus sapien volutpat eget
                                    </div>
                                    <small class="mf-date"><i class="fa fa-clock-o"></i> 20/02/2015 at 10:24</small>
                                </div>
                            </div>
                    </div>
                            <div class="msb-reply">
                                <textarea placeholder="What's on your mind..." id="msg"></textarea>
                                <button id="send"><i class="fa fa-paper-plane-o"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            @php
             $imgus="https://cdn-icons-png.flaticon.com/512/149/149071.png";
        if(Session::get('userimage'))
        {
            $imgus=session()->get('userimage');
        
        }
        else {
            $imgus=session()->get('userimage');
        }
            @endphp
            
            <script src="https://code.jquery.com/jquery-3.6.4.js" ></script>
            <script>
                const outgoing = {{$id}};
    var cid = "null";
    var prev = "null";
    var im = "null";
    var imgus = "{{$imgus}}";
                $(function(){
   if ($('#ms-menu-trigger')[0]) {
        $('body').on('click', '#ms-menu-trigger', function() {
            $('.ms-menu').toggleClass('toggled'); 
            
             $(".ms-menu").show();
        });
        
        
    }
    
});

$(document).ready(function () {
     
        
    
    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
});
});
 function chatwith(i)
    {
         if($(window).width() < 767)
    {
        $(".ms-menu").hide();
    }
   
        
        if(prev!=null)
        {
            $(prev).css("background", "transparent");
        }
         im="#im"+i;
        cid=i;
     //  console.log($(im).attr('src'));    //console for testing
       prev="#"+i;
       $(prev).css("background", "#1a9bfca8");
      
       $("#chatplay").html(" ");

       var data = {
                            cmd: 'register',
                            fr_uid:outgoing,
                            per_uid:i,
                           
                            
                     };
                     $.ajax({
                                type: "POST",
                                url: "{{ route('msg_hist') }}",
                                data: data,
                                cache: false,
                                dataType: 'JSON',
                                success: function(result)
                                {
                           
                                 console.log(result);
                                 var len=result.length;
                                 if(len!=0)
                                 {
                                     $('#head').html('<img src="https://picruit.com/public/'+result[0]["outgoing_user_id_img"]+'" alt="" class="img-avatar">');
                                 //console.log(result[0]["message"])
                                 for (var j = 0; j< len; j++) {
                                    if(result[j]["type"]=="s")
                                    {
                                        $("#chatplay").append(' <div class="message-feed right"><div class="pull-right"><img src="https://picruit.com/public/'+result[j]["img"]+'" alt="" class="img-avatar"></div><div class="media-body"><div class="mf-content">'+result[j]["message"]+'</div><small class="mf-date"><i class="fa fa-clock-o"></i>'+result[j]["Date"]+'</small></div></div>');
                                    }
                                    else
                                    {
                                        $("#chatplay").append(' <div class="message-feed media"><div class="pull-left"><img src="https://picruit.com/public/'+result[j]["img"]+'" alt="" class="img-avatar"></div><div class="media-body"><div class="mf-content">'+result[j]["message"]+'</div><small class="mf-date"><i class="fa fa-clock-o"></i> '+result[j]["Date"]+'</small></div></div>');
                                    }
                                 }
                                 var mdiv=document.getElementById("chatplay");  
                                 mdiv.scrollTop=mdiv.scrollHeight; 
                                }                                
                                },
                                error: function (request, error) {
                                    
                                   
                                }
                            });
                            let intervalId = setInterval(function() {  chatrec(i); }, 1000);
                            
                            function chatrec(m)
                            {
                                var data = {
                            cmd: 'register',
                            fr_uid:outgoing,
                            per_uid:cid,
                           
                            
                     };
                     console.log(data,"msg_rec");
                     $.ajax({
                                type: "POST",
                                url: "{{ route('msg_rec') }}",
                                data: data,
                                cache: false,
                                dataType: 'JSON',
                                success: function(result)
                                {
                           
                                 console.log(result);
                                 var len=result.length;
                                 if(len!=0)
                                 {
                                 $("#chatplay").append(' <div class="message-feed media"><div class="pull-left"><img src="https://picruit.com/public/'+result[0]["img"]+'" alt="" class="img-avatar"></div><div class="media-body"><div class="mf-content">'+result[0]["message"]+'</div><small class="mf-date"><i class="fa fa-clock-o"></i> '+result[0]["Date"]+'</small></div></div>');
                                    
                                 
                                        var mdiv=document.getElementById("chatplay");  
                                 mdiv.scrollTop=mdiv.scrollHeight; 
                                 }
                                                              
                                },
                                error: function (request, error) {
                                    
                                   
                                }
                            });
                            }
                            
                            
    }
    $( "#send" ).click(function() {
        
        
       
       //alert( $("#msg").val());
       //alert(cid);
       if($("#msg").val()!="" && im!=null)
       {
        console.log($(im).attr('src'),"send img");
       // alert( $("#msg").val());
       var mk = $("#msg").val();
        var data = {
            cmd: 'register',
            fr_uid: outgoing,
            per_uid: cid,
            msg: $("#msg").val(),
            img: imgus, // Use the JavaScript variable here
        };
                     $.ajax({
                                type: "POST",
                                url: "{{ route('msg_send') }}",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                           
                                 console.log(result);
                                 var td = new Date().toISOString().slice(0, 10);
// console.log(todayDate);
                                $("#chatplay").append(' <div class="message-feed right"><div class="pull-right"><img src="https://picruit.com/public/{{$imgus}}" alt="" class="img-avatar"></div><div class="media-body"><div class="mf-content">'+mk+'</div><small class="mf-date"><i class="fa fa-clock-o"></i>'+td+'</small></div></div>');
                                //$("#msg").val()="";
                                document.getElementById("msg").value="";
                                var mdiv=document.getElementById("chatplay");  
                                 mdiv.scrollTop=mdiv.scrollHeight;    
                                                              
                                },
                                error: function (request, error) {
                                    
                                   
                                }
                            });
       }
});
                </script>
            @stop