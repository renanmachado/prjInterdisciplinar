<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title> @yield('title') </title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="/cms/assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="/cms/assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="/cms/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/cms/assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="/cms/assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/> 
        <link href="/cms/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>  
        <link href="/cms/assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>  
        <link href="/cms/assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="/cms/assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="/cms/assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/> 
        <link href="/cms/assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>   
        <link href="/cms/assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet" type="text/css"/>  
        <link href="/cms/assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>    

        <link href="/cms/assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>    
        <link href="/cms/assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/> 
        <link href="/cms/assets/plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css">
        <link href="/cms/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
            
        <!-- Theme Styles -->
        <link href="/cms/assets/css/modern.css" rel="stylesheet" type="text/css"/>
        <link href="/cms/assets/css/themes/white.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="/cms/assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="/cms/assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="/cms/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        @yield('styles')
        
    </head>
    <body class="page-header-fixed">
        <div class="overlay"></div>
        
        
        <div class="menu-wrap">
            <nav class="profile-menu">
                <div class="profile"><img src="/cms/assets/images/avatar6.png" width="52" alt="David Green"/><span>Admin</span></div>
                <div class="profile-menu-list">
                    <!-- <a href="#"><i class="fa fa-star"></i><span>Favorites</span></a>
                    <a href="#"><i class="fa fa-bell"></i><span>Alerts</span></a>
                    <a href="#"><i class="fa fa-envelope"></i><span>Messages</span></a>
                    <a href="#"><i class="fa fa-comment"></i><span>Comments</span></a> -->
                </div>
            </nav>
            <button class="close-button" id="close-button">Close Menu</button>
        </div>
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="/" target ="target" class="logo-text"><span>QI</span></a>
                    </div><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>        
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                                </li>
                                <!-- <li>
                                    <a href="#cd-nav" class="waves-effect waves-button waves-classic cd-nav-trigger"><i class="fa fa-diamond"></i></a>
                                </li>
                                <li>        
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                                </li> -->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <i class="fa fa-cogs"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Header 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-header-check" checked>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Sidebar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Horizontal bar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right horizontal-bar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Toggle Sidebar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Compact Menu 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right compact-menu-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Hover Menu 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right hover-menu-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Boxed Layout 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right boxed-layout-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Choose Theme Color
                                                    <div class="color-switcher">
                                                        <a class="colorbox color-blue" href="?theme=blue" title="Blue Theme" data-css="blue"></a>
                                                        <a class="colorbox color-green" href="?theme=green" title="Green Theme" data-css="green"></a>
                                                        <a class="colorbox color-red" href="?theme=red" title="Red Theme" data-css="red"></a>
                                                        <a class="colorbox color-white" href="?theme=white" title="White Theme" data-css="white"></a>
                                                        <a class="colorbox color-purple" href="?theme=purple" title="purple Theme" data-css="purple"></a>
                                                        <a class="colorbox color-dark" href="?theme=dark" title="Dark Theme" data-css="dark"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="no-link"><button class="btn btn-default reset-options">Reset Options</button></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>    
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                                </li>
                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name">{{ Auth::user()->name }}<i class="fa fa-angle-down"></i></span>
                                        <img class="img-circle avatar" src="/cms/assets/images/avatar6.png" width="40" height="40" alt="">
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li role="presentation"><a href="/admin/minha-conta"><i class="fa fa-user"></i>Minha conta</a></li>
                                        <li role="presentation"><a href="/admin/sair"><i class="fa fa-sign-out m-r-xs"></i>Sair</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/admin/sair" class="log-out waves-effect waves-button waves-classic">
                                        <span><i class="fa fa-sign-out m-r-xs"></i>Sair</span>
                                    </a>
                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <div class="sidebar-header">
                        <div class="sidebar-profile">
                            <a href="javascript:void(0);" id="profile-menu-link">
                                <div class="sidebar-profile-image">
                                    <img src="/cms/assets/images/avatar6.png" class="img-circle img-responsive" alt="">
                                </div>
                                <div class="sidebar-profile-details">
                                    <span>{{ Auth::user()->name }} <br><small>ADMIN</small></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <ul class="menu accordion-menu">
                        <li class=""><a href="/admin" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                       {{--  <li class="{{ preg_match("/admin\/minha-conta/",Route::getCurrentRoute()->getPath()) ? 'active' : '' }}"> <a href="/admin/minha-conta" class="waves-effect waves-button"><span class="menu-icon  glyphicon glyphicon-user"></span><p>Minha Conta</p></a></li> --}}
                        <li class="{{ preg_match("/admin\/evento/",Route::getCurrentRoute()->getPath()) ? 'active' : '' }}"> <a href="/admin/evento" class="waves-effect waves-button"><span class="menu-icon  icon-calendar "></span><p>Eventos</p></a></li>
                        <li class="{{ preg_match("/admin\/palestra/",Route::getCurrentRoute()->getPath()) ? 'active' : '' }}"> <a href="/admin/palestra" class="waves-effect waves-button"><span class="menu-icon icon-pin"></span><p>Palestras</p></a></li>
                        <li class="{{ preg_match("/admin\/sala/",Route::getCurrentRoute()->getPath()) ? 'active' : '' }}"> <a href="/admin/sala" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Salas</p></a></li>
                        <li class="{{ preg_match("/admin\/palestrante/",Route::getCurrentRoute()->getPath()) ? 'active' : '' }}"> <a href="/admin/palestrante" class="waves-effect waves-button"><span class="menu-icon icon-graduation"></span><p>Palestrantes</p></a></li>
                        <li class="{{ preg_match("/admin\/recurso/",Route::getCurrentRoute()->getPath()) ? 'active' : '' }}"> <a href="/admin/recurso" class="waves-effect waves-button"><span class="menu-icon fa fa-tasks"></span><p>Recursos</p></a></li>
                   
                        <li class="{{ preg_match("/admin\/equipe/",Route::getCurrentRoute()->getPath()) ? 'active' : '' }}"> <a href="/admin/equipe" class="waves-effect waves-button"><span class="menu-icon icon-users"></span><p>Equipes</p></a></li>
                        <li class="{{ preg_match("/admin\/aluno/",Route::getCurrentRoute()->getPath()) ? 'active' : '' }}"> <a href="/admin/aluno" class="waves-effect waves-button"><span class="menu-icon fa fa-group"></span><p>Alunos</p></a></li>
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            <div class="page-inner">

                @yield('content')
                
                <div class="page-footer">
                    <p class="no-s">2016 &copy; Renan Machado.</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <nav class="cd-nav-container" id="cd-nav">
            <header>
                <h3>Navigation</h3>
                <a href="#0" class="cd-close-nav">Close</a>
            </header>
            <ul class="cd-nav list-unstyled">
                <li class="cd-selected" data-menu="index">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li data-menu="profile">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <p>Profile</p>
                    </a>
                </li>
                <li data-menu="inbox">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                        <p>Mailbox</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span>
                        <p>Tasks</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-cog"></i>
                        </span>
                        <p>Settings</p>
                    </a>
                </li>
                <li data-menu="calendar">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                        <p>Calendar</p>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="cd-overlay"></div>
    

        <!-- Javascripts -->
        <script src="/cms/assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="/cms/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="/cms/assets/plugins/pace-master/pace.min.js"></script>
        <script src="/cms/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="/cms/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="/cms/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="/cms/assets/plugins/switchery/switchery.min.js"></script>
        <script src="/cms/assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="/cms/assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="/cms/assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="/cms/assets/plugins/waves/waves.min.js"></script>
        <script src="/cms/assets/plugins/3d-bold-navigation/js/main.js"></script> 

        <script src="/cms/assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
        <script src="/cms/assets/plugins/moment/moment.js"></script>
        <script src="/cms/assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="/cms/assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
        <script src="/cms/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="/cms/assets/js/modern.js"></script>
        <script src="/cms/assets/js/pages/table-data.js"></script>
        <script src="/cms/assets/plugins/bootbox.min.js"></script>
        <script src="/cms/assets/js/remove.js"></script> 

        @yield('scripts')
        
    </body>
</html>