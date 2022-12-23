<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>User Login | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/sweetalert/sweetalert.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/login.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
    <div class="row">
      <div class="col s12">
        <div class="container"><div id="login-page" class="row">
  <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
    <form class="login-form" id="login_form">
      <div class="row">
        <div class="input-field col s12">
          <h5 class="ml-4">Sign in</h5>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">mail_outline</i>
          <input id="email" type="text" name="email">
          <label for="email" class="center-align">Email</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input id="password" type="password" name="password">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m12 l12 ml-2 mt-1">
          <p>
            <label>
                <input type="checkbox" id="showPassword"/>
                <span>Show Password</span>
            </label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <button class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12" type="submit" onclick="">Login</button>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 m6 l6">
          <p class="margin medium-small"><a href="{{ url('/register') }}">Register Now!</a></p>
        </div>
        <div class="input-field col s6 m6 l6">
          
        </div>
      </div>
    </form>
  </div>
</div>
        </div>
        <div class="content-overlay"></div>
      </div>
    </div>

    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/sweetalert/sweetalert.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="app-assets/js/plugins.js"></script>
    <script src="app-assets/js/search.js"></script>
    <script src="app-assets/js/custom/custom-script.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script>
        $(function() {
          $('#showPassword').click(function(){
            if($(this).is(':checked')){
              $('#password').attr('type', 'text');
            }else{
              $('#password').attr('type', 'password');
            }
          });

          $("#login_form").submit(function(event) {
            event.preventDefault();
            if($('#email').val() !== '' && $('#password').val() !== ''){
              $.ajax({
                url: '{{ url("login/auth") }}',
                type: 'POST',
                dataType: 'JSON',
                contentType: false,
                processData: false,
                data: new FormData($('#login_form')[0]),
                cache: true,
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function() {
                
                },
                success: function(response) {
                  if(response.status == 200) {
                    setTimeout(function() {
                      location.reload();
                    }, 1500);							
                    swal({
                      title: 'Success',
                      text: response.message,
                      icon: 'success'
                    });
                  } else if(response.status == 422) {
                    swal({
                      title: 'Validation',
                      text: response.message,
                      icon: 'warning'
                    });
                  } else {
                                  swal({
                      title: 'Validation',
                      text: 'No response',
                      icon: 'warning'
                    });
                  }
                },
                error: function() {
                  
                  swal({
                    title: 'Ups!',
                    text: 'Check your internet connection.',
                    icon: 'error'
                  });
                }
              });
            }else{
              swal({
                title: 'Ups, error.',
                text: 'Please fill in the forms.',
                icon: 'error'
              });
            }
          });

          /* Contoh penggunaan API 
            $("#login_form").submit(function(event) {
            event.preventDefault();
              $.ajax({
              type: "POST",
              url: "http://localhost/api/login",
              data: JSON.stringify({ email : $('#email').val(), password : $('#password').val() }),
              contentType: "application/json; charset=utf-8",
              dataType: "json",
              success: function (data, status, jqXHR) {
                alert(data.success);
              },
              error: function (jqXHR, status) {

              }
            });
          }); */
        });
    </script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>