<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
   <!-- <link rel="icon" type="image/png" sizes="16x16" href="{{asset('storage/images/favicon.png')}}"> -->
    <title>Food App Admin</title>
        <!-- Color picker plugins css -->
        <link href="{{asset('assets/plugins/jquery-asColorPicker-master/dist/css/asColorPicker.css')}}" rel="stylesheet">
        <!-- toast CSS -->
       <!-- <link href="{{asset('assets/css/toastr.min.css')}}" rel="stylesheet">-->
        <link href="{{asset('assets/plugins/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/plugins/dropify/dist/css/dropify.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstraptoggle.min.css')}}">
    <link href="{{asset('assets/plugins/wizard/steps.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('assets/css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <link href="{{asset('assets/css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('assets/old_assets/css/fontawesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/smartphone.css')}}" rel="stylesheet">
    <script src="{{asset('assets/old_assets/js/axios.js')}}"></script>
    <script src="{{asset('assets/old_assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/old_assets/js/fontawesome.min.js')}}"></script>
    <script src="{{asset('assets/old_assets/js/Chart.min.js')}}"></script>
    <!--          -->
    
    <style type="text/css">
      .ui-autocomplete-row
      {
        padding:8px;
        background-color: #f4f4f4;
        border-bottom:1px solid #ccc;
        font-weight:bold;
      }
      .ui-autocomplete-row:hover
      {
        background-color: #ddd;
      }
   

      .multiselect {
  width: 100%;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}
    </style>
</head>

<body class="fix-header card-no-border" >
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <h3>Food App Admin</h3>
                            <!-- Light Logo icon -->
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
        
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                   
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                       
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a> </form>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="{{ asset('assets/images/user.jpg') }}" alt="user" /> </div>
                                            <div class="u-text">
                                                <h4></h4>
                                        </div>
                                    </li>
                                    
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{url('Compte')}}"><i class="ti-user"></i>Users</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{url('listRoles')}}"><i class="ti-settings"></i> Roles</a></li>
                             
                                    <li role="separator" class="divider"></li>
                                    <li><a href=""
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form1').submit();"><i class="fa fa-power-off"></i> Logout</a>
                                   
              <form id="logout-form1" action="" method="POST" style="display: none;">
              @csrf
              </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="{{ asset('assets/images/user.jpg') }}" alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></a>
                        <div class="dropdown-menu animated flipInY">

                            <a href="{{url('Compte')}}" class="dropdown-item"><i class="ti-user"></i> Users</a>
                            <div class="dropdown-divider"></div> <a href="{{url('listRoles')}}" class="dropdown-item"><i class="ti-settings"></i> Roles</a>  
                            <div class="dropdown-divider"></div> <a href=""
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form2').submit();" class="dropdown-item"><i class="fa fa-power-off"></i> Logout
                                                     <form id="logout-form2" action="" method="POST" style="display: none;">
                                                     @csrf
              </form>
                                                     </a>
                          
                                   
              
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PERSONAL</li>
                        <li>
                           <!-- <a href="{{url('')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a> -->
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Dashboard</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{url('/')}}">Partenaires</a></li>
                                <li><a href="{{ url('getdashboard2') }}">Consommateur</a></li>
                                <li><a href="{{url('getdashboard3')}}">Comportement de Consommateur</a></li>
                                <li><a href="{{url('getformnotifs')}}">Notifications</a></li>
                            </ul>
                        </li>
                    <!--    <li>
                            <a  href="/* {{url('orders')}} */" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Orders <span class="label label-rounded label-success" id="ordersnumb">
                       
                            </span></span></a>
                        </li> 
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Gestion du stock</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="/* {{url('produit')}} */">Produits</a></li>
                                <li><a href="/* {{url('categorie')}} */">Catégories</a></li>
                                <li><a href="/* {{url('sousCategorie')}} */">Sous-Catégories</a></li>
                            </ul>
                        </li> 
                       <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Page d'accueil</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="/* {{url('slide')}} */">slider</a></li>
                                <li><a href="/* {{url('promotion')}} */">promotion</a></li>
                                <li><a href="/* {{url('limitee')}} */">edition_limitée</a></li>
                                <li><a href="/* {{url('collesctions')}} */">New_Collection</a></li>
                            </ul>
                        </li> 
                   <     <li>
                        <a  href="/* {{url('static')}} */" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Page static </span></a>
                        </li>
                        <li>
                        <a  href="/* {{url('ville')}} */" aria-expanded="false"><i class="mdi mdi-truck-delivery"></i><span class="hide-menu">Livraison par ville </span></a>
                        </li> -->
                        
                  
                  
             
                              
                      
                      
                
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <a href="#" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item-->
                <a href="#" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi"></i></a>
                <!-- item-->
                <a href=""
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form3').submit();" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i>
                                                     <form id="logout-form3" action="" method="POST" style="display: none;">
                                                     @csrf
              </form>
                                                     </a>

     
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                @yield('content')
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2019 Pastel by Smartmove
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <div class="modal" id='conf-modal' tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: coral">
        <h5 class="modal-title" >Erreur !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <p id="pmsg"> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" >Ok</button>
      </div>
    </div>
  </div>
</div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->



    <input type="hidden" value="{{Session::get('success')}}" id="success">
<input type="hidden" value="{{session()->get('warning')}}" id="warning">
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('assets/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- axios JS -->
    <script src="{{asset('assets/js/axios.js')}}"></script>
    <script src="{{asset('assets/old_assets/js/axios.js')}}"></script>
    <!-- Style switcher -->
    <!--<script src="{{asset('assets/js/toastr.min.js')}}"></script>-->
    <script src="{{asset('assets/plugins/toast-master/js/jquery.toast.js')}}"></script>
    <script src="{{asset('assets/js/toastr.js')}}"></script>
    <!-- ============================================================== -->
    <script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-toggle.min.js')}}"></script>
        <!-- Color Picker Plugin JavaScript -->
        <script src="{{asset('assets/plugins/jquery-asColor/dist/jquery-asColor.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-asGradient/dist/jquery-asGradient.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js')}}"></script>
    <script src="{{asset('assets/plugins/dropify/dist/js/dropify.min.js')}}"></script>
    <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
    <script src="{{asset('assets/plugins/wizard/jquery.steps.min.js')}}"></script>
    <script src="{{asset('assets/plugins/wizard/jquery.validate.min.js')}}"></script>
    
    <script src="{{asset('assets/js/jquery.repeatable.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <!-- Sweet-Alert  -->
    <script src="{{asset('assets/plugins/wizard/steps.js')}}"></script>
    <script type="text/javascript">
            var sc = $('#success').val();
	        var wr = $('#warning').val();
           
	if(sc!="")
    $.toast({
    heading: 'Information',
    text: sc,
    position: 'bottom-right',
    icon: 'success',
    loader: true,        // Change it to false to disable loader
})
		
    if(wr!="")
    $.toast({
    heading: 'Error',
    text: wr,
    position: 'bottom-right',
    showHideTransition: 'fade',
    icon: 'error'
})
</script>
@yield('vuejsscript')
</body>


</html>
