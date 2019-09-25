<!DOCTYPE html>
<!-- dir="ltr">-->

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/assets/images/favicon.png') }}">
    <title>Manipal:Register</title>
    <!-- Custom CSS -->
    <link href="{{ asset('admin/dist/css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}"></script>
<![endif]-->
<style>
  label{
    color:aliceblue;
  }
 html {
  height: 100%!important;
}

html, body {
  overflow-x: auto;
  overflow-y: auto;
}

body {
  min-height: 100%;
  background-color: rgb(240, 245, 248);
}

.wrapper {
  max-width: 700px;
  padding: 35px 0;
  margin: 0 auto;
}

.radio,
.radio__label,
.radio__label:after,
.radio__label:before {
  box-sizing: border-box;
}

// For demonstration only
.radio__container {
  &:nth-child(1) {
    padding-bottom: 35px;
    margin-bottom: 28px;
    border-bottom: 1px dotted rgb(219, 219, 219);
  }
}

.radio__container {
  .radio-inline {
    display: inline-block;
    margin-right: 10px;
  }
  
  .radio {
    display: inline;
    opacity: 0;
    width: 0;
    margin: 0;
    overflow: hidden;
    -webkit-appearance: none;
  }
  
  .radio__label {
    display: inline-block;
    height: 50px;
    position: relative;
    padding: 15px 10px 15px 28px;
    cursor: pointer;
    vertical-align: bottom;
    color: rgba(0, 0, 0, .54);
    font: 300 14px/20px Helvetica, Arial, sans-serif;
    transition: color 200ms ease;
    
    &:before, &:after {
      position: absolute;
      content: "";
      border-radius: 50%;
      transition: transform 200ms ease, border-color 200ms ease;
    }
    
    &:before {
      left: 0;
      top: 15px;
      width: 20px;
      height: 20px;
      border: 2px solid rgb(219, 219, 219);
    }
    
    &:after {
      top: 20px;
      left: 5px;
      width: 10px;
      height: 10px;
      transform: scale(0);
      background-color: rgb(60, 145, 230);
    }
    
    &:hover {
      color: rgb(60, 145, 230);
      
      &:before {
        border-color: rgb(251, 135, 43);
      }
    }
  }
  
  .radio:checked {
    & + .radio__label {
      color: rgba(0, 0, 0, .87);
    }
    
    & + .radio__label:before {
      border-color: rgb(60, 145, 230);
    }
    
    & + .radio__label:after {
      transform: scale(1);
    }
  }
}
  </style>
  </head>

  <body>
    <div class="main-wrapper">
      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <div class="preloader">
        <div class="lds-ripple">
          <div class="lds-pos"></div>
          <div class="lds-pos"></div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
        <div class="auth-box bg-dark border-top border-secondary">
          <div>
            <div class="text-center p-t-20 p-b-20">
              {{-- <span class="db"><img src="{{ asset('admin/assets/images/logo.png') }}" alt="logo" /></span> --}}
            </div>
            <!-- Form -->
            {{-- <form class="form-horizontal m-t-20" action="index.html"> --}}

              <form class="form-horizontal m-t-20" method="POST"  action="{{ action('WebAuth@register') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
                    {{ csrf_field() }}
        
      <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 


              <div class="row p-b-30">
                <div class="col-12">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-success text-white" id="basic-addon1"><i
                          class="ti-user"></i></span>
                    </div>
                    <input id="name" name="name" type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username"
                      aria-describedby="basic-addon1" required>
                  </div>
                  <!-- email -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-danger text-white" id="basic-addon1"><i
                          class="ti-email"></i></span>
                    </div>
                    <input name="email" type="email" class="form-control form-control-lg" placeholder="Email Address"
                      aria-label="Username" aria-describedby="basic-addon1" required>
                  </div>

                  {{-- Password --}}
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-warning text-white" id="basic-addon2"><i
                          class="ti-pencil"></i></span>
                    </div>
                    <input name="password" id="password" type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password"
                      aria-describedby="basic-addon1" required>
                  </div>

                  {{-- Repeat Password --}}
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-info text-white" id="basic-addon2"><i
                          class="ti-pencil"></i></span>
                    </div>
                    <input type="password" class="form-control form-control-lg" placeholder=" Confirm Password"
                      aria-label="Password" aria-describedby="basic-addon1" id="confirm_password" required>
                  </div>


                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="" id="message" style="color:aliceblue"></span>
                    </div>
                    
                  </div>


   

              <div class="radio__container" >
                <div>
                  <input class="radio"  id="role_id" name="radioBlock" type="radio" value="1" checked>
                  <label class="radio__label" for="">General User</label>    
                </div>
                <div>
                  <input class="radio" id="role_id" name="radioBlock" type="radio" value="2" checked>
                  <label class="radio__label" for="">Doctor</label>    
                </div>
                <div><div>
                  <input class="radio" id="role_id" name="radioBlock" type="radio" value="3" checked>
                  <label class="radio__label" for="">Hospital</label>    
                </div>
                <div><div>
                  <input class="radio" id="role_id" name="radioBlock" type="radio" value="4" checked>
                  <label class="radio__label" for="">Pharmacy</label>    
                </div>
                <div><div>
                  <input class="radio" id="role_id" name="radioBlock" type="radio" value="5" checked>
                  <label class="radio__label" for="">Blood Bank</label>    
                </div>
                <div>
              </div>
            </div>

          </div>
              </div>
              <div class="row border-top border-secondary">
                <div class="col-12">
                  <div class="form-group">
                    <div class="p-t-20">
                      <input id="Button" class="btn btn-block btn-lg btn-info" type="submit">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right Sidebar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right Sidebar -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ asset('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('admin/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
      $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    </script>

    <script>
     $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
    // document.getElementById('Button').addAttribute("disabled");
    
  } else 
    $('#message').html('Not Matching').css('color', 'red');
    // document.getElementById('Button').disabled = true;
});
    </script>

  </body>

</!-->