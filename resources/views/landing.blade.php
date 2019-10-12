<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Front page</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('Manipal/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Manipal/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('Manipal/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Manipal/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Manipal/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Manipal/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('Manipal/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('Manipal/css/jQuery.verticalCarousel.css') }}">
    <link rel="stylesheet" href="{{ asset('Manipal/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Manipal/responsive.css') }}">
</head>

<body class="loading">
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-3 col-xs-12">
                        <div class="logo">
                            <a href="#"><img {{ asset('Manipal/imglogo2.png') }} alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-9 col-xs-12">
                        <div class="menu">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href={{ url( '/login') }}>Login</a></li>
                                <li><a href={{ url( '/register') }}>Register</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#text">Contact Us</a></li>
                            </ul>
                            <!-- <div class="sign_up">
                                <p><a href="#">sign up</a></p>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="text">
                            <h3>Smart City- An Integrated HealthCare System</h3>
                            <h6>An Integrated healthcare includes all the features and facilities that makes a rural and  urban city a smart city.</h6>
                            <a class="button" href={{ url( '/login') }}>Login</a>
                            <a class="button white" href={{ url( '/register') }}>Register</a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </header>
        <section class="project">
            <div class="text">
                <h2>Entities</h2>
                <p>The system provide allows various stakeholders such as Hospital,Doctors,Bloodbank,Pharmacy to integrate and provide users with better medical service and assistence.</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 project_icon">
                        <div class="single_project">
                            <i class="icofont icofont-hospital"></i>
                            <h3>Hospitals</h3>
                            <p style="text-align:center">The main entity of the smart city includes hospitals.Hospitals allows the users to to get an insight into hospitals by adding the availabilty of beds,Specializations,Afiliated Doctors detail.</p>
                        </div>
                    </div>
                    <div class="col-md-4 project_icon">
                        <div class="single_project">
                            <i class="icofont icofont-doctor"></i>
                            <h3>Doctors</h3>
                            <p>The system allows doctors to get registered with the application making easy access to the users to search for specific doctor.</p>
                        </div>
                    </div>
                    <div class="col-md-4 project_icon">
                        <div class="single_project">
                            <i class="icofont icofont-blood-drop"></i>
                            <h3>BloodBank</h3>
                            <p>The Bloodbank is another important feature of smart city,where bloodbank gets registered and give details of blood available in the bearby vicinity.</p>
                        </div>
                    </div>
                    <div class="col-md-4 project_icon">
                        <div class="single_project">
                            <i class="icofont icofont-pills"></i>
                            <h3>Pharmacy</h3>
                            <p>The pharmacys can integrate with system and store details related to medicine availability which can be viewed by users whenever in need.</p>
                        </div>
                </div>
            </div>
        </section>
       
        <section class="services">
            <div class="text"id="services">
                <h2>Services</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="services_area">
                            <div id="accordion">
                                <h3><i class="material-icons first">local_hospital</i>Hospitals<i class="material-icons last">arrow_drop_down</i></h3>
                                <div class="slide_up">
                                    <div class="accordion_img">
                                        <img {{ asset('Manipal/imghospital.jpg') }} alt="">
                                    </div>
                                    <p>The hospitals Gets registered to the system by providing proper validation documents and then can gain access to various facilities given by the system.</p>
                                    <p>Hospitals can perform various functions such as add afiliated doctor details,bed availabilty details and details of various facilities provided by hospitals such as MRI,X-RAY,Citi-Scan,etc.</p>
                                </div>
                                <h3><i class="material-icons first">perm_identity</i>Doctors<i class="material-icons last">arrow_drop_down</i></h3>
                                <div class="slide_up">
                                    <div class="accordion_img">
                                        <img {{ asset('Manipal/imgdoctors.jpg') }} alt="">
                                    </div>
                                    <p>The Doctors gets regsitered to the system by providing verified details and documents.</p>
                                    <p>Doctors can add their degree,their secializations with easy access form and can reach patients nation wide.</p>
                                </div>
                                <h3><i class="material-icons first">local_drink</i>BloodBanks<i class="material-icons last">arrow_drop_down</i></h3>
                                <div class="slide_up">
                                    <div class="accordion_img">
                                        <img {{ asset('Manipal/imgbloodbank.jpg') }} alt="">
                                    </div>
                                    <p>BloodBanks can register to the system by proving the basic details such as name,locations,blood type. </p>
                                    <p>BloodBanks can add various blood availabilty details and campaign details held by them at various locations</p>
                                </div>
                                <h3><i class="material-icons first">home_work</i>Pharmacys<i class="material-icons last">arrow_drop_down</i></h3>
                                <div class="slide_up">
                                    <div class="accordion_img">
                                        <img {{ asset('Manipal/imgpharmacy.jpg') }} alt="">
                                    </div>
                                    <p>Pharmacys can register themselves to the system by providing basic such as pharmacy name,location,phone number,etc </p>
                                    <p>Pharmacy can add various details such as availability of various medicines in the phramacy and can update the medicine stock whenever new stocks are stored,thus providing the dynamic medicine availability to the users.>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="contact_area">
            <div class="text">
                <h2>Contact Us</h2>
                <p>For any Query feel free to conatct us.</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col md-12">
                        <div class="form_area">
                            <form action="#" method="post">
                                <div class="input_area">
                                    <input type="text" name="" placeholder="First Name">
                                    <input type="text" name="" placeholder="Last Name">
                                    <input type="email" name="" placeholder="Email">
                                    <input type="text" name="" placeholder="Phone">
                                </div>
                                
                                <input type="submit" value="SEND">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container" id="text">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-logo">
                            <a href="#"><img {{ asset('Manipal/imglogo.png') }} alt=""></a>
                        </div>
                        <div class="footer_first_menu">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">About Us</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="footer_last_menu">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#services">Service</a></li>
                                        <li><a href="#text">Help</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="footer_last_icon">
                                    <p><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script {{ asset('Manipal/js/jquery-3.1.1.min.js') }}></script>
    <script {{ asset('Manipal/js/bootstrap.min.js') }}></script>
    <script {{ asset('Manipal/js/owl.carousel.min.js') }}></script>
    <script {{ asset('Manipal/js/jquery.flexslider.js') }}></script>
    <script {{ asset('Manipal/js/jQuery.verticalCarousel.js') }}></script>
    <script {{ asset('Manipal/js/jquery-ui.js') }}></script>
    <script {{ asset('Manipal/js/active.js') }}></script>
</body>

</html>