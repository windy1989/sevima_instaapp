
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>InstaApp | InstaApp Imitation</title>
    <link rel="apple-touch-icon" href="app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/sweetalert/sweetalert.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-gradient-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-gradient-menu-template/style.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/custom/custom.css?v=0">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-gradient-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-gradient-menu" data-col="2-columns">

    <div class="loader" id="loader">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue-only">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light">
                <div class="nav-wrapper">
                    <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
                        <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore histories" data-search="template-list">
                        <ul class="search-list collection display-none"></ul>
                    </div>
                    <ul class="navbar-list right">
                        <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                        <li class="hide-on-large-only search-input-wrapper"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
                        <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a></li>
                        <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="app-assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>
                    </ul>
                    <!-- notifications-dropdown-->
                    <ul class="dropdown-content" id="notifications-dropdown">
                        <li>
                            <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
                        </li>
                        <li class="divider"></li>
                        <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                        </li>
                        <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                        </li>
                        <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                        </li>
                        <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                        </li>
                        <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                        </li>
                    </ul>
                    <!-- profile-dropdown-->
                    <ul class="dropdown-content" id="profile-dropdown">
                        <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
                        <li><a class="grey-text text-darken-1" href="app-chat.html"><i class="material-icons">satellite</i> My Posts</a></li>
                        <li><a class="grey-text text-darken-1" href="page-faq.html"><i class="material-icons">help_outline</i> Help</a></li>
                        <li class="divider"></li>
                        <li><a class="grey-text text-darken-1" href="user-lock-screen.html"><i class="material-icons">lock_outline</i> Lock</a></li>
                        <li><a class="grey-text text-darken-1" href="{{ url('/logout') }}"><i class="material-icons">keyboard_tab</i> Logout</a></li>
                    </ul>
                </div>
                <nav class="display-none search-sm">
                    <div class="nav-wrapper">
                        <form id="navbarForm">
                            <div class="input-field search-input-sm">
                                <input class="search-box-sm mb-0" type="search" required="" id="search" placeholder="Explore histories" data-search="template-list">
                                <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                                <ul class="search-list collection search-list-sm display-none"></ul>
                            </div>
                        </form>
                    </div>
                </nav>
            </nav>
        </div>
    </header>
    <!-- END: Header-->

    <!-- BEGIN: Page Main-->
    <div id="main" style="padding-left: 0px !important;">
        <div class="row">
            <div class="pt-3 pb-1" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Histories</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Public Posts
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <!--Gradient Card-->
                    <div id="cards-extended">

                        <!--Blog Card-->
                        <div id="card-panel-type" class="section">
                            <h4 class="header">Newest Histories</h4>
                            <div class="row mt-2">
                                @foreach($post as $row)
                                <div class="col s12 m6 l4 card-width">
                                    <div class="card-panel border-radius-6 mt-10 card-animation-1">
                                        <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="{{ $row->attachment() }}" alt="images" />
                                        <h6><a href="#" class="mt-5">{{ $row->title }}</a></h6>
                                        <p>{{ $row->description }}</p>
                                        <div class="row mt-4">
                                            <div class="col s2">
                                                <a href="#"><img src="app-assets/images/user/9.jpg" width="40" alt="fashion" class="circle responsive-img mr-3" /></a>
                                            </div>
                                            <a href="#">
                                                <div class="col s3 p-0 mt-1">
                                                    <span class="pt-2">
                                                    {{ $row->user->name.' '.($row->user_id == session('bo_id') ? '(You)' : '') }}
                                                    </span>
                                                </div>
                                            </a>
                                            <div class="col s7 mt-1 right-align">
                                                <a href="#"><span class="material-icons">favorite_border</span></a>
                                                <span class="ml-3 vertical-align-top">{{ $row->like()->exists() ? $row->like()->count() : 0 }}</span>
                                                <a href="#"><span class="material-icons ml-10">chat_bubble_outline</span></a>
                                                <span class="ml-3 vertical-align-top">{{ $row->comment()->exists() ? $row->comment()->count() : 0 }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div><!-- START RIGHT SIDEBAR NAV -->

                    <div id="modal1" class="modal modal-fixed-footer" style="min-height: 80%;">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col s12">
                                    <ul class="tabs">
                                        <li class="tab col m3"><a class="active" href="#history_tab">History</a></li>
                                    </ul>
                                </div>
                                <div id="history_tab" class="col s12 mt-3">
                                    <h4>Add New History</h4>
                                    <form class="row" id="form_data">
                                        <div class="col s12">
                                            <div id="validation_alert" style="display:none;"></div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field col s12">
                                                <input type="hidden" id="temp" name="temp">
                                                <input id="title" name="title" type="text">
                                                <label for="title">Title</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <textarea id="description" name="description" rows="2" placeholder="Description"></textarea>
                                            </div>
                                            <div class="input-field col s6">
                                                <div class="file-field input-field">
                                                    <div class="btn">
                                                        <span>File</span>
                                                        <input type="file" id="filehistory" name="filehistory" accept="image/png, image/gif, image/jpeg">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-field col s6 center-align">
                                                <h6>Preview</h6>
                                                <div id="previewImg">
                                                    <img src="{{ url('app-assets/images/icon/doc.png') }}" alt="..." width="150px">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <a href="javascript:void(0);" class="modal-action modal-close waves-effect waves-red btn-flat">Close</a>
                            <a href="javascript:void(0);" class="modal-action waves-effect waves-red btn-flat" onclick="send()">Send</a>
                        </div>
                    </div>
                    
                    <!-- END RIGHT SIDEBAR NAV -->
                    <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
                        <a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow modal-trigger" href="#modal1"><i class="material-icons">add</i></a>
                    </div>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
    <!-- END: Page Main-->

    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-light navbar-border navbar-shadow">
        <div class="footer-copyright">
            <div class="container"><span>&copy; 2020 <a href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">WINDOT</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a href="#">WINDOT</a></span></div>
        </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/sweetalert/sweetalert.min.js"></script>
    <script src="app-assets/vendors/chartist-js/chartist.min.js"></script>
    <script src="app-assets/vendors/chartjs/chart.min.js"></script>
    <script src="app-assets/fonts/fontawesome/js/all.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="app-assets/js/plugins.js"></script>
    <script src="app-assets/js/search.js"></script>
    <script src="app-assets/js/custom/custom-script.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/cards-extended.js?v=1"></script>
    <script src="app-assets/js/custom/custom-script.js?v=1"></script>
    <!-- END PAGE LEVEL JS-->
    <script>
        $(function() {
			$('#modal1').modal({
				dismissible: false,
				onOpenStart: function(modal,trigger) {
					
				},
				onOpenEnd: function(modal, trigger) {
					
				},
				onCloseEnd: function(modal, trigger){

				}
			});

            $("#filehistory").on('change', function () {

                if (typeof (FileReader) != "undefined") {

                    var image_holder = $("#previewImg");
                    image_holder.empty();

                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("<img />", {
                            "src": e.target.result,
                            "class": "thumb-image",
                            "width": "300px"
                        }).appendTo(image_holder);
                    };
                    image_holder.show();
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            });
        });

        function send(){
            $.ajax({
                url: '{{ url("/create") }}',
                type: 'POST',
                dataType: 'JSON',
                data: new FormData($('#form_data')[0]),
                contentType: false,
                processData: false,
                cache: true,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function() {
                    $('#validation_alert').hide();
                    $('#validation_alert').html('');
                    openLoader();
                },
                success: function(response) {
                    closeLoader();
                    if(response.status == 200) {
                        M.toast({
                            html: response.message,
                            completeCallback: function(){
                                location.reload(); 
                            }
                        });
                    } else if(response.status == 422) {
                        $('#validation_alert').show();
                        $('.modal-content').scrollTop(0);
                        M.toast({
                            html: 'Check your form.'
                        });
                        
                        $.each(response.error, function(i, val) {
                            $.each(val, function(i, val) {
                                $('#validation_alert').append(`
                                    <div class="card-alert card red">
                                        <div class="card-content white-text">
                                            <p>` + val + `</p>
                                        </div>
                                        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                `);
                            });
                        });
                    } else {
                        M.toast({
                            html: response.message
                        });
                    }
                },
                error: function() {
                    closeLoader();
                    $('.modal-content').scrollTop(0);
                }
            });
        }
    </script>
</body>

</html>