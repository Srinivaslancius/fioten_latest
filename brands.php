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
<title><?php echo $getSiteSettingsData['admin_title'] ?></title>
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
<link class="skin"  rel="stylesheet" type="text/css" href="css/skin/skin-2.css">
<link  rel="stylesheet" type="text/css" href="css/templete.css">

<!-- Revolution Slider Css -->
<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
<!-- Revolution Navigation Style -->
<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:300,400,500,600,700|Roboto:100,300,400,500,700,900" rel="stylesheet">
</head>
<body id="bg">
<div class="page-wraper">
    <!-- Header -->
	<header class="site-header header-style-1 dark style-2">
		<!-- main header -->
		<?php include_once 'header.php';?>
	</header>
    <!-- Header END -->
    <!-- Content -->
    <div class="page-content bg-white">
       
		
		<!-- About Us -->
		<?php $id = $_GET['catId']; $getCategory = getDataFromTables('categories',$status=NULL,'id',$id,$activeStatus=NULL,$activeTop=NULL); $getCat = $getCategory->fetch_assoc();  ?>
        <div class="section-full bg-white">
            <div class="container">
                <div class="section-content">
                    <div class="row m-b30">
                   
                    <div class="col-md-12 col-sm-8">
                        <h2 class="text-uppercase"> About <?php echo $getCat['category_name']; ?></h2>
                        <p><?php echo $getCat['description']; ?></p>
                        
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- About Us END -->
		<!-- Our Classes -->
		<?php $id = $_GET['catId']; $getProducts = getDataFromTables('products',$status=NULL,'category_id',$id,$activeStatus=NULL,$activeTop=NULL); ?>
		<div class="section-full text-white bg-img-fix content-inner overlay-gray-dark choose-us" style="background-image:url(images/background/bg1.jpg);">
            <div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="bg-primary m-b30">
							<div class="p-a30 text-white z-index10 relative">
								<h3 class="h3 m-t0">Consumer Laptops</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								<a href="#" class="site-button white">Read More</a>
							</div>
							<div class="our-classes-block">
								<img src="images/gym.png" alt=""/>
							</div>	
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="row">
							<?php while ($getPro = $getProducts->fetch_assoc()) { ?>
								<div class="col-md-6 col-sm-6 col-xs-6 m-b30">
	                                <div class="w3-media w3-img-effect rotate"> 
	                                	<?php  $getProImg = getDataFromTables('product_images',$status=NULL,'product_id',$getPro['id'],$activeStatus=NULL,$activeTop=NULL); 
	                                	       $getImg = $getProImg->fetch_assoc(); ?>
	                                	<img src="<?php echo $base_url . 'uploads/product_images/'.$getImg['product_image'] ?>" alt=""> 

	                            	</div>
	                                <h3><?php echo $getPro['product_name']; ?></h3>
								</div>
							<?php } ?>
							<!-- <div class="col-md-6 col-sm-6 col-xs-6 m-b30">
                                <div class="w3-media w3-img-effect rotate"> <img src="images/categories/hpspectra360.png" alt=""> </div>
                                <h3>HP Spectra 360</h3>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 m-b30">
                                <div class="w3-media w3-img-effect rotate"> <img src="images/categories/hp_omen.png" alt=""> </div>
                                <h3>HP OMEN</h3>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 m-b10">
                                <div class="w3-media w3-img-effect rotate"> <img src="images/categories/omen_desktop.png" alt=""> </div>
                                <h3>HP OMEN Desktop</h3>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 m-b10">
                                <div class="w3-media w3-img-effect rotate"> <img src="images/categories/omen_accessories.png" alt=""> </div>
                                <h3>HP OMEN Accessories</h3>
							</div> -->
						</div>
					</div>
				</div>
            </div>
        </div>
		<!-- Our Classes End -->
		<!-- Latest News -->
       	
		<!-- Latest News END -->
        <!-- Our Team -->
        
        <!-- Our Team END -->
		<!-- Testimonials -->
			
		<!-- Testimonials END -->
    </div>
    <!-- Content END-->
	<!-- Footer -->
    <footer class="site-footer">
       <?php include_once 'footer.php';?>
		<!-- Footer Bottom Part -->
    </footer>
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-caret-up" ></button>
</div>
<!-- JavaScript  files ========================================= -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- jquery.min js -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- bootstrap.min js -->
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<!-- Form js -->
<script type="text/javascript" src="js/jquery.bootstrap-touchspin.js"></script>
<!-- Form js -->
<script type="text/javascript" src="js/magnific-popup.js"></script>
<!-- magnific-popup js -->
<script type="text/javascript" src="js/waypoints-min.js"></script>
<!-- waypoints js -->
<script type="text/javascript" src="js/counterup.min.js"></script>
<!-- counterup js -->
<script type="text/javascript" src="js/imagesloaded.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="js/masonry-3.1.4.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="js/masonry.filter.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="js/owl.carousel.js"></script>
<!-- OWL  Slider  -->
<script type="text/javascript" src="js/custom.js"></script>
<!-- custom fuctions  -->
<script type="text/javascript" src="js/dz.carousel.js"></script>
<!-- sortcode fuctions  -->

<!-- switcher fuctions  -->
<script type="text/javascript" src="js/dz.ajax.js"></script>
<!-- contact-us js -->
<!-- revolution JS FILES -->
<script type="text/javascript" src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript"  src="js/rev.slider.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_4();
});	/*ready*/
</script>
</body>
</html>
