
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
    position: absolute;
    left: 0;
    top: 0;
    border-right: 1px solid #eee;
    padding-bottom: 50px;
    height: 100%;
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
</style>
<div class="page-wrapper">
          
            
           
            <div class="container-fluid">
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                <div class="container bootstrap snippets bootdey">
                    <div class="tile tile-alt" id="messages-main">
                        <div class="ms-menu">
                            
                            
                            
                            
                            <div class="list-group lg-alt">
                                <a class="list-group-item media" href="">
                                    <div class="pull-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="img-avatar">
                                    </div>
                                    <div class="media-body">
                                        <small class="list-group-item-heading"> &nbsp Davil Parnell</small>
                                        
                                    </div>
                                </a>
                                <br>
                                <a class="list-group-item media" href="">
                                    <div class="pull-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="img-avatar">
                                    </div>
                                    <div class="media-body">
                                        <div class="list-group-item-heading">&nbsp Ann Watkinson</div>
                                       
                                    </div>
                                </a>
                                <br>
                                <a class="list-group-item media" href="">
                                    <div class="pull-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" class="img-avatar">
                                    </div>
                                    <div class="media-body">
                                        <div class="list-group-item-heading">&nbsp Marse Walter</div>
                                       
                                    </div>
                                </a>
                                <br>
                                <a class="list-group-item media" href="">
                                    <div class="lv-avatar pull-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="img-avatar">
                                    </div>
                                    <div class="media-body">
                                        <div class="list-group-item-heading">&nbsp Jeremy Robbins</div>
                                        
                                    </div>
                                </a>
                                <br>
                                <a class="list-group-item media" href="">
                                    <div class="lv-avatar pull-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="img-avatar">
                                    </div>
                                    <div class="media-body">
                                        <div class="list-group-item-heading">&nbsp Reginald Horace</div>
                                        
                                    </div>
                                </a>
                                <br>
                                <a class="list-group-item media" href="">
                                    <div class="pull-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="img-avatar">
                                    </div>
                                    <div class="media-body">
                                        <div class="list-group-item-heading">&nbsp Shark Henry</div>
                                       
                                    </div>
                                </a>
                                <br>
                                <a class="list-group-item media" href="">
                                    <div class="pull-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="img-avatar">
                                    </div>
                                    <div class="media-body">
                                        <div class="list-group-item-heading">&nbsp Paul Van Dack</div>
                                      
                                    </div>
                                </a>
                                <br>
                                <a class="list-group-item media" href="">
                                    <div class="lv-avatar pull-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="img-avatar">
                                    </div>
                                    <div class="media-body">
                                        <div class="list-group-item-heading">&nbsp James Anderson</div>
                                        
                                    </div>
                                </a>
                                <br>
                                <a class="list-group-item media" href="">
                                    <div class="lv-avatar pull-left">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="img-avatar">
                                    </div>
                                    <div class="media-body">
                                        <div class="list-group-item-heading">&nbsp Kane Williams</div>
                                        
                                    </div>
                                </a>
                            </div>
                    
                            
                        </div>
                        
                        <div class="ms-body">
                            <div class="action-header clearfix">
                                <div class="visible-xs" id="ms-menu-trigger">
                                    <i class="fa fa-bars"></i>
                                </div>
                                
                                <div class="pull-left hidden-xs">
                                  
                                    <div class="lv-avatar pull-left">
                                        
                                    </div>
                                    
                                </div>
                                 
                                <ul class="ah-actions actions">
                                    <li>
                                        <a href="">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </li>
                                  
                                                                    </ul>
                            </div>
                    <div class="chmd">
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
                                <textarea placeholder="What's on your mind..."></textarea>
                                <button><i class="fa fa-paper-plane-o"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.4.js" ></script>
            <script>
                $(function(){
   if ($('#ms-menu-trigger')[0]) {
        $('body').on('click', '#ms-menu-trigger', function() {
            $('.ms-menu').toggleClass('toggled'); 
        });
    }
});


                </script>
            @stop