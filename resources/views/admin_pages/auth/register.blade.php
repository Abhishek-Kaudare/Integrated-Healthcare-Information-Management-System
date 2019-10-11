<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('colorlib-regform-8/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('colorlib-regform-8/css/style.css') }}">
</head>
<body>

    <div class="main">

        <section class="signup">
           
            <div class="container">
                <div class="signup-content">
                    
                        <form class="signup-form" method="POST"  action="{{ action('WebAuth@register') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
                        <h2 class="form-title"style="color:#0d47a1;font-family:Sans">Create account</h2>
                        <div class="form-group">
                            
                            <input id="name" name="name" type="text" class="form-input" placeholder="User Name" aria-label="Username" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email Id" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" required/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="confirm_password" placeholder="Confirm password" required/>
                            <div class="input-group-prepend">
                            <span class="" id="message" style="color:aliceblue"></span>
                            </div>
                       
                            


                        <div class="form-check">
                                <label class="form-check-label" for="radio1">
                                  <input type="radio" class="form-check-input" style="font-family: sans-serif" name="radioBlock" type="radio" value="3" id="role_id" checked>Hospital
                                </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" style="font-family: sans-serif" name="radioBlock" type="radio" value="2" id="role_id">Doctor
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="radio2">
                                
                                <input type="radio" class="form-check-input" style="font-family: sans-serif" name="radioBlock" type="radio" value="5" id="role_id">Blood Bank
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="radio2">
                                <input type="radio" class="form-check-input" style="font-family: sans-serif" name="radioBlock" type="radio" value="4" id="role_id">Pharmacy
                            </label>
                        </div>
                    </div>



                    

                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                    </div>
                              
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href={{ url( '/login') }} class="loginhere-link">Login Here</a> 
                        
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('colorlib-regform-8/vendor/jquery/jquery.min.js') }}"></script>
    
    <script src="{{ asset('colorlib-regform-8/js/main.js') }}"></script>

    <script>
        
     $('#password, #confirm_password').on('keyup', function () {
    if ($('#password').val() == $('#confirm_password').val()) {
        $('#message').html('Matching').css('color', 'green');
        document.getElementById("Button").disabled = false;
        
    } else 
        $('#message').html('Not Matching').css('color', 'red');
        document.getElementById('Button').disabled = true;
    });
        </script>

</body>
</html>