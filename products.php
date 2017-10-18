<?php include_once "main_header_scripts.php"; ?>
<!DOCTYPE html>

<!--[if IE 7 ]>  <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>  <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>  <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!-- Meta -->
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
<link rel="stylesheet" type="text/css" href="css/switcher.css"/>
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:300,400,500,600,700|Roboto:100,300,400,500,700,900" rel="stylesheet">
</head>
<body id="bg">
<div class="page-wraper">
    <!-- header -->
   <header class="site-header header-style-1 dark style-2">
        <!-- Main Header -->
        <?php include_once 'header.php';?>
        <!-- Main Header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <?php $id = $_GET['subCatId']; $getSubcat = getDataFromTables('sub_categories','0','id',$id,$activeStatus=NULL,$activeTop=NULL); $getSubcat1 = $getSubcat->fetch_assoc(); ?>
        <div class="w3-bnr-inr overlay-black-middle" style="background-image:url(<?php echo $base_url . 'uploads/sub_category_images/'.$getSubcat1['sub_category_image'] ?>);">
            <div class="container">
                <div class="w3-bnr-inr-entry">
                    <h1 class="text-white">Products</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Products</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-area">
            <!-- Product -->
            <div class="container">
                <div class="row">

                     <?php $id = $_GET['subCatId']; $getProducts = getDataFromTables('products','0','sub_category_id',$id,$activeStatus=NULL,$activeTop=NULL); ?>
                     <?php while ($getPro = $getProducts->fetch_assoc()) { ?>
                    <div class="col-md-3 col-sm-6 m-b30">
                        <div class="w3-box p-a20 border-1 bg-gray">
                            <div class="w3-thum-bx w3-img-overlay1 w3-img-effect zoom">
                                <?php $id = $_GET['subCatId']; $getProductsImages = getDataFromTables('product_images','0','product_id',$getPro['id'],$activeStatus=NULL,$activeTop=NULL); $getProductsImage = $getProductsImages->fetch_assoc();  ?> 
                                <img src="<?php echo $base_url . 'uploads/product_images/'.$getProductsImage['product_image'] ?>" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="product_details.php?proId=<?php echo $getPro['id']; ?>"> <i class="fa fa-eye icon-bx-xs"></i> </a></div>
                                </div>
                            </div>
                            <div class="w3-info p-t20 text-center">
                                <h4 class="w3-title m-t0 text-uppercase"><a href="#"><?php echo $getPro['product_name'];?></a></h4>
                                <h2 class="m-b0">Price <?php echo $getPro['product_price'];?></h2>
                                <a href="product_details.php?proId=<?php echo $getPro['id']; ?>" class="site-button  m-t15">View</a> </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!-- Product END -->
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
   <!-- Footer -->
   <footer class="site-footer">
        <!-- Company Stats -->
        <?php include_once 'footer.php';?>
    </footer>
    <!-- Footer END-->
    <button class="scroltop fa fa-arrow-up" ></button>
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
<script type="text/javascript" src="js/imagesloaded.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="js/masonry-3.1.4.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="js/masonry.filter.js"></script>
<!-- masonry  -->
<script type="text/javascript"  src="js/owl.carousel.js"></script>
<!-- OWL  Slider  -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_YEzHx_YCQvqQSB_xuSC18BT81BlKVvI&amp;sensor=false"></script>
<!-- google map  -->
<script type="text/javascript"  src="js/custom.min.js"></script>
<!-- custom fuctions  -->
<script type="text/javascript"  src="js/dz.carousel.js"></script>
<!-- sortcode fuctions  -->
<!-- switcher fuctions -->
<script type="text/javascript"  src="js/switcher.min.js"></script>
<div id="loading-area"></div>

</body>

<!-- Mirrored from www.w3itexperts.com/powergym/xhtml/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2017 06:17:49 GMT -->
</html>
