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
<!--meterial-->
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
<style>


:hov

.cls

element.style {
}
bundle.d10c52.css:6142
._2beYZw {
    background-color: #388e3c;
}
bundle.d10c52.css:6131
.hGSR34 {
    line-height: normal;
    display: inline-block;
    color: #fff;
    padding: 2px 4px 2px 4px;
    border-radius: 3px;
    font-weight: 500;
    font-size: 12px;
    vertical-align: middle;
}

bundle.d10c52.css:3322
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
user agent stylesheet
div {
    display: block;
}
.question {
    border-radius: 50%;
    background-color: #fff;
    color: #878787;
    font-weight: 500;
    width: 16px;
    height: 16px;
    font-size: 11px;
    line-height: 16px;
    text-align: center;
    display: inline-block;
    border: solid 1px #e0e0e0;
    box-shadow: 0 0 1px 0 rgba(0, 0, 0, .2);
    vertical-align: middle;
    margin: 0 2px 0 8px;
    cursor: pointer;
}

 .green-line{
			width: 250px; 
			color: #008000; 
			background-color: #008000; 
			height: 2px;
		}
	._3Oywxf ._2my7m5 ._2IqPSX .EJrIpC ._3X4tVa{
	font-weight: 500;
    font-size: 14px;
    border: none !important;
    outline: none;
    width: 144px;
    padding-left: 6px;
    vertical-align: middle;
	}
	
	._3Oywxf ._2my7m5 ._2IqPSX .EJrIpC {
    display: inline-block;
    line-height: 25px;
	
}

bundle.d10c52.css:3322
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
user agent stylesheet
form {
    display: block;
    margin-top: 0em;
}
._3Oywxf ._2my7m5 ._2IqPSX ._2aK_gu {
    font-weight: 500;
    cursor: pointer;
    font-size: 14px;
    color: #2874f0;
    margin-left: auto;
    position: relative;
}
.table-bordered-N{
border:none;
}
.table-bordered-N td{
padding:0px !important;}
#example {
  display: hidden;
}
</style>
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
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <?php $id = $_GET['proId']; $getSubcat = getDataFromTables('sub_categories','0','id',$id,$activeStatus=NULL,$activeTop=NULL); $getSubcat1 = $getSubcat->fetch_assoc(); ?>
        <div class="w3-bnr-inr overlay-black-middle" style="background-image:url(<?php echo $base_url . 'uploads/sub_category_images/'.$getSubcat1['sub_category_image'] ?>);">
            <div class="container">
                <div class="w3-bnr-inr-entry">
                    <h1 class="text-white">Product Details</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Product Details</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-area bg-white">
            <!-- Product details -->
            <div class="container woo-entry">
                <div class="row m-b30">
                    <div class="blog-post blog-md date-style-2">
                        <div class="col-md-4 col-sm-4 m-b30">
                        	<section id="gallery" class="simplegallery">
                        		<?php $id = $_GET['proId']; $getProductsImages = getDataFromTables('product_images','0','product_id',$id,$activeStatus=NULL,$activeTop=NULL);  ?>
                        		<?php  while ($getPro1 = $getProductsImages->fetch_assoc()) { ?>
					            <div class="content">
					                <img style="width:90%" src="<?php echo $base_url . 'uploads/product_images/'.$getPro1['product_image'] ?>" class="image_<?php $getPro1['id']; ?>" alt="" />
					            </div>
					            <div class="clear"></div>
					            <div class="thumbnail">
					                <div class="thumb">
					                    <a href="#" rel="">
					                        <img src="<?php echo $base_url . 'uploads/product_images/'.$getPro1['product_image'] ?>" id="thumb_<?php $getPro1['id']; ?>" alt="" />
					                    </a>
					                </div>
					            </div>
					            <?php }?>
					        </section>

                        	<div class="col-md-4 col-sm-4 m-b30">
							  <!-- Trigger the modal with a button -->
							  <?php if(isset($_SESSION['user_login_session_id']) && $_SESSION['user_login_session_id']!='') { ?>
							  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-top: 50px; background-color: #56529c; border: none">Place Order</button>

							  <!-- Modal -->
							  <form method="post" action="save_orders.php">
							  <div class="modal fade" id="myModal" role="dialog">
							    <div class="modal-dialog">
							    
							      <!-- Modal content-->
							      <div class="modal-content">
							        <div class="modal-header">
							          	
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title" style="color:black;text-align:center;">Place Order</h4>
							        </div>
							        
							        <div class="modal-body">
							        	<?php $id = $_SESSION['user_login_session_id']; $sql = "SELECT * FROM users WHERE id = '$id' AND status= 0 ";
                							$result = $conn->query($sql);
                							$row = $result->fetch_assoc();
                						?>
							        	<div class="form-group">
						                    <label for="form-control-2" class="control-label">Name</label>
						                    <input type="text" class="form-control" name="name" value="<?php echo $_SESSION['user_login_session_name'];?>" required>
						                    <div class="help-block with-errors"></div>
						                </div>
						                <div class="form-group">
						                    <label for="form-control-2" class="control-label">Email</label>
						                    <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['user_login_session_email'];?>" required>
						                    <div class="help-block with-errors"></div>
						                </div>
						                <div class="form-group">
						                    <label for="form-control-2" class="control-label">Mobile</label>
						                    <input type="text" class="form-control" name="mobile" placeholder="Please Enter Mobile No" maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)" required>
						                    <div class="help-block with-errors"></div>
						                </div>
						                <div class="form-group">
						                    <input type="hidden" class="form-control" name="address" value="<?php echo $row['user_address'];?>" required>
						                    <div class="help-block with-errors"></div>
						                </div>
			                            <?php $id = $_GET['proId']; $getProducts = getDataFromTables('products','0','id',$id,$activeStatus=NULL,$activeTop=NULL); $getPro = $getProducts->fetch_assoc();?>
			                            <div class="form-group">
						                    <input type="hidden" class="form-control" name="product_id" id="product_id" value="<?php echo $getPro['id'];?>" required>
						                    <div class="help-block with-errors"></div>
						                </div>
						                <div class="form-group">
						                    <input type="hidden" class="form-control" name="product_name" value="<?php echo $getPro['product_name'];?>" required>
						                    <div class="help-block with-errors"></div>
						                </div>
						                <div class="form-group">
						                    <input type="hidden" class="form-control" name="product_price" id="product_price" value="<?php echo $getPro['selling_price'];?>" required>
						                    <div class="help-block with-errors"></div>
						                </div>
						                <div class="form-group">
						                    <input type="hidden" class="form-control" name="product_total_price" value="<?php echo $getPro['selling_price'];?>" required>
						                    <div class="help-block with-errors"></div>
						                </div>
			                            <div class="form-group">
						                    <label for="form-control-2" class="control-label">Product Quantity</label>
						                    <input type="number" id="product_quantity" class="form-control" name="product_quantity" min="<?php echo $getPro['minimum_order_quantity'];?>" max="<?php echo $getPro['quantity'];?>" value="<?php echo $getPro['minimum_order_quantity'];?>" required>
						                    <div class="help-block with-errors"></div>
						                </div>
						                <?php
						                	$order_total = $getPro['selling_price']*$getPro['minimum_order_quantity'];
						                ?>
						                <div class="form-group">
						                	<label for="form-control-2" class="control-label">Order Total</label>
						                    <input type="text" readonly class="form-control" id="order_total" name="order_total" value="<?php echo $order_total;?>" required>
						                    <div class="help-block with-errors"></div>
						                </div>
							        </div>
							        <div class="modal-footer">

							          <button type="submit" class="site-button" value="submit" name="submit">Submit</button>

							        </div>
							      </div>
							    </div>
							  </div>
							</form>
							<?php } else { ?>
							  <div class="extra-nav">
								<div class="extra-cell">
		                            <a href="login.php"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="background-color: #56529c; border: none">Place Order</button></a>
								</div>
							  </div>
							<?php } ?>
							</div>
                        </div>
						<div class="clearfix">
                        <div class="col-md-8 col-sm-8">
                            
							  <div class="row">
							  	<?php $id = $_GET['proId']; $getProducts = getDataFromTables('products','0','id',$id,$activeStatus=NULL,$activeTop=NULL); $getPro = $getProducts->fetch_assoc();?>
                            <table class="table table-bordered" >
                                <tr>
                                    <td><h4 class="post-title"><b><?php echo $getPro['product_name'];?></b></h4></td>
                                   
                                </tr>
                                <tr>
                                	
                                    <td><!-- <h5 class="post-title"><b><?php echo $getPro['product_name'];?></b></h5> -->
									<div class="col-sm-3">
									<p class="m-tb10">Availability</p>
									</div>
									<div class="col-sm-9">
										<p class="m-tb10" style="color:#12e812;"><?php if($getPro['availability_id'] == 0 ){ echo "In Stock";} else{ echo "Out Of Stock";}?></p>
									</div>
									<div class="col-sm-3">
									<p class="m-tb10">Price</p>
									</div>
									<div class="col-sm-9">
										<strike style="color:red"><p class="m-tb10">RS. <?php echo $getPro['product_price'];?></p></strike>
									</div>
									
									<div class="col-sm-3">
									<p class="m-tb10">Selling Price</p>
									</div>
									<div class="col-sm-9">
										<p class="m-tb10">RS. <?php echo $getPro['selling_price'];?></p>
									</div>
									
									
									</div></td>
                                    
                                </tr>
                                <!-- <tr>
                                    <td><h5 class="post-title">Processor And Memory Features</h5></td>
                                   
                                </tr> -->
                                <tr>
                                    <td>
									<a data-toggle="tab" href="#graphic-design-1"><div id="example">
									<h5 class="post-title"><b>More Info</b></h5></div></a>
							 <div class="tab-content">
							 <div id="graphic-design-1" class="tab-pane">
                                    <table class="table table-bordered-N" >
                                    <tr>
										<td style="border-top:0px"><h5 class="post-title"><b>Key Features</b></h5>
										<div class="row">
											<!-- <div class="col-sm-3"> -->
												<!-- <p class="m-tb10">Key Features</p> -->
											<!-- </div> -->
											<div class="col-sm-12">
												<p class="m-tb10"><?php echo $getPro['key_features'];?></p>
											</div>
										</div>
										</td>
									</tr>
									 <tr>
										<td><h5 class="post-title"><b>Specifications</b></h5>
										<div class="row">
										<div class="col-sm-12">
										<p class="m-tb10"><?php echo $getPro['specifications'];?></p>

										</div>
									</div>
									</td>
									</tr>
									<tr>
										<td><h5 class="post-title"><b>Product Info</b></h5>
									<div class="row">		
										<div class="col-sm-12">
										<p class="m-tb10"><?php echo $getPro['product_info'];?></p>
										</div>
									</div>
									</td>
									</tr>
                                </table>
                                </div>
								</div>
								</div></td>
                                   
                                </tr>
								 
                            </table>
							</div>
                       </div>
					   </div>
                   
                    </div>
                </div>
             
            </div>
            <!-- Product details -->
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
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
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_YEzHx_YCQvqQSB_xuSC18BT81BlKVvI&amp;sensor=false"></script>
 --><!-- google map  -->
<script type="text/javascript"  src="js/custom.min.js"></script>
<!-- custom fuctions  -->
<script type="text/javascript"  src="js/dz.carousel.js"></script>
<!-- sortcode fuctions  -->
<!-- switcher fuctions -->
<script type="text/javascript"  src="js/switcher.min.js"></script>

<!-- thumb images added in fiotern details product -->
<link rel="stylesheet" type="text/css" href="./src/simplegallery.demo1.min.css" />
<script type="text/javascript" src="./src/simplegallery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#gallery').simplegallery({
            galltime : 400,
            gallcontent: '.content',
            gallthumbnail: '.thumbnail',
            gallthumb: '.thumb'
        });

    });
</script>

<script>
$(document).ready(function(){
			
			$("#example").click(function(){
				$(this).hide();
			});		
		});
		</script>
<script type="text/javascript">
	$(document).ready(function(){
        $("#product_quantity").change(function(){
        	var product_price=$("#product_price").val();
        	var product_id=$("#product_id").val();
        	var product_quantity=$("#product_quantity").val();
        	$.ajax({
                  type:"post",
                  url:"get_pricing.php",
                  data:"&product_price="+product_price+"&product_id="+product_id+"&product_quantity="+product_quantity,
                  success:function(result){
                      $('#order_total').val(result);
                  }

                });
        });
    });
</script>
<script type="text/javascript">
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
<div id="loading-area"></div>

</body>
</html>
