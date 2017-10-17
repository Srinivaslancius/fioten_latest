<?php include_once "main_header_scripts.php"; ?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="description" content="" />
<meta name="format-detection" content="telephone=no">
<!-- Favicons Icon -->
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<!-- Page Title Here -->
<title>Fioten</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif]-->
<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="plugins/scroll/scrollbar.css">
<link class="skin"  rel="stylesheet" type="text/css" href="css/skin/skin-2.css">
<link  rel="stylesheet" type="text/css" href="css/templete.css">

<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:300,400,500,600,700|Roboto:100,300,400,500,700,900" rel="stylesheet">
</head>
<body id="bg">
<div class="page-wrapers">
    <header class="site-header header-style-1 dark style-2">
		<!-- Main Header -->
		<?php include_once 'header.php';?>
		<!-- Main Header END -->
	</header>
    <!-- Content -->
    <div class="page-content w3-login p-t50">
        <div class="login-form">
            <div class="tab-content">
                <div id="login" class="tab-pane active text-center">
                    <form class="p-a30 w3-form  m-t100">
                        <h3 class="form-title m-t0">Sign In</h3>
                        <div class="w3-separator-outer m-b5">
                            <div class="w3-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your e-mail address and your password. </p>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="User Name" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control " placeholder="Type Password" type="password"/>
                        </div>
                        <div class="form-group text-left">
                            <button class="site-button">login</button>
                            <label>
                            <input type="checkbox"/>
                            <label> Remember me</label>
                            </label>
                            <a data-toggle="tab" href="#forgot-password" class="m-l15"><i class="fa fa-unlock-alt"></i> Forgot Password</a> </div>
                    </form>
                    <div class="bg-primary p-a15 "> <a data-toggle="tab" href="#developement-1" class="text-white">Create an account</a> </div>
                </div>
                <div id="forgot-password" class="tab-pane fade ">
                    <form class="p-a30 w3-form m-t100 text-center">
                        <h3 class="form-title m-t0">Forget Password ?</h3>
                        <div class="w3-separator-outer m-b5">
                            <div class="w3-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your e-mail address below to reset your password. </p>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Email Id" type="text"/>
                        </div>
                        <div class="form-group text-left"> <a class="site-button outline gray" data-toggle="tab" href="#login">Back</a>
                            <button class="site-button pull-right">Submit</button>
                        </div>
                    </form>
                </div>
                <div id="developement-1" class="tab-pane fade">
                    <form class="p-a30 w3-form text-center text-center">
                        <h3 class="form-title m-t0">Sign Up</h3>
                        <div class="w3-separator-outer m-b5">
                            <div class="w3-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your personal details below: </p>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Full Name" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Email Id" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Address" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="City/Town" type="text"/>
                        </div>
                        <label class="text-left m-b20">Enter your account details below: </label>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="User Name" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Password" type="text"/>
                        </div>
                        <div class="">
                            <input name="dzName" required="" class="form-control" placeholder="Re-type Your Password" type="text"/>
                        </div>
                        <label class="m-b30">
                        <input type="checkbox"/>
                        <label>I agree to the <a href="#">Terms of Service </a>& <a href="#">Privacy Policy </a></label>
                        </label>
                        <div class="form-group text-left "> <a class="site-button outline gray" data-toggle="tab" href="#login">Back</a>
                            <button class="site-button pull-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
</div>
<!-- JavaScript  files ========================================= -->
<script type="text/javascript"  src="js/jquery.min.js"></script>
<!-- jquery.min js -->
<script type="text/javascript"  src="js/bootstrap.min.js"></script>
<!-- bootstrap.min js -->
<script type="text/javascript"  src="js/bootstrap-select.min.js"></script>
<!-- Form js -->
<script type="text/javascript"  src="js/jquery.bootstrap-touchspin.js"></script>
<!-- Form js -->
<script type="text/javascript"  src="js/magnific-popup.js"></script>
<!-- magnific-popup js -->
<script type="text/javascript"  src="js/waypoints-min.js"></script>
<!-- waypoints js -->
<script type="text/javascript"  src="js/counterup.min.js"></script>
<!-- counterup js -->
<script type="text/javascript"  src="js/jquery.countdown.js"></script>
<!-- jquery countdown -->
<script type="text/javascript" src="js/imagesloaded.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="js/masonry-3.1.4.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="js/masonry.filter.js"></script>
<!-- masonry  -->
<script type="text/javascript"  src="js/owl.carousel.js"></script>
<!-- OWL  Slider  -->
<script type="text/javascript"  src="js/custom.js"></script>
<!-- custom fuctions  -->
<script type="text/javascript"  src="js/dz.carousel.js"></script>
<!-- sortcode fuctions  -->
<!-- switcher fuctions -->


</body>
</html>
