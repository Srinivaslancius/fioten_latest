<?php include_once 'admin_includes/main_header.php'; ?>
<?php  
$id = $_GET['pid'];
if (!isset($_POST['submit']))  {
            echo "";
} else  {
    //echo "<pre>"; print_r($_POST); die;
    //Save data into database
    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $product_price = $_POST['product_price'];
    $price_type = $_POST['price_type'];
    $offer_price = $_POST['offer_price'];
    $selling_price = $_POST['selling_price'];
    $deal_start_date = $_POST['deal_start_date'];
    $deal_end_date = $_POST['deal_end_date'];
    $quantity = $_POST['quantity'];
    $minimum_order_quantity = $_POST['minimum_order_quantity'];
    $key_features = $_POST['key_features'];
    $product_info = $_POST['product_info'];
    $specifications = $_POST['specifications'];
    $availability_id = $_POST['availability_id'];
    $status = $_POST['status'];
    $created_at = date("Y-m-d h:i:s");
    $created_by = $_SESSION['admin_user_id'];
    //save product images into product_images table    
    
    $sql1 = "UPDATE products SET product_name = '$product_name',category_id ='$category_id',product_price ='$product_price',price_type ='$price_type',offer_price ='$offer_price',selling_price ='$selling_price', deal_start_date = '$deal_start_date', deal_end_date ='$deal_end_date',quantity = '$quantity',minimum_order_quantity = '$minimum_order_quantity',key_features = '$key_features',product_info = '$product_info',specifications = '$specifications',availability_id = '$availability_id',status = '$status' WHERE id = '$id'"; 
    
    if ($conn->query($sql1) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }
    $result1=$conn->query($sql1);
    $product_images = $_FILES['product_images']['name'];
    foreach($product_images as $key=>$value){

        $product_images1 = $_FILES['product_images']['name'][$key];
        $file_tmp = $_FILES["product_images"]["tmp_name"][$key];
        $file_destination = '../uploads/product_images/' . $product_images1;
        if($product_images1!=''){
            move_uploaded_file($file_tmp, $file_destination);        
            $sql = "INSERT INTO product_images ( `product_id`,`product_image`) VALUES ('$id','$product_images1')";
            $result = $conn->query($sql);
        }        
    }
     
     if($result1==1){
        echo "<script type='text/javascript'>window.location='products.php?msg=success'</script>";
    } else {
       echo "<script type='text/javascript'>window.location='products.php?msg=fail'</script>";
    }
}
?>

      <div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Products</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <?php $getProductsData = getDataFromTables('products',$status=NULL,'id',$id,$activeStatus=NULL,$activeTop=NULL);
                $getProducts = $getProductsData->fetch_assoc();
                $getCategories = getDataFromTables('categories',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);;
                ?>
                
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your Category</label>
                    <select id="form-control-3" name="category_id" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Category</option>
                      <?php while($row = $getCategories->fetch_assoc()) {  ?>
                        <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == $getProducts['category_id']) { echo "selected=selected"; }?> ><?php echo $row['category_name']; ?></option>
                    <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Product Name</label>
                    <input type="text" class="form-control" id="form-control-2" name="product_name" data-error="Please enter product name." required value="<?php echo $getProducts['product_name']; ?>">
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Product Price</label>
                    <input type="text" class="form-control" id="form-control-2" name="product_price" data-error="Please enter product price." required value="<?php echo $getProducts['product_price']; ?>">
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Select Price Type</label>
                    <select id="price_type" name="price_type" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Price Type</option>
                        <option value="1" <?php if($getProducts['price_type'] == 1) { echo "Selected=Selected"; }?>>Price</option>
                        <option value="2" <?php if($getProducts['price_type'] == 2) { echo "Selected=Selected"; }?>>Percentage</option>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Offer Price</label>
                    <input type="text" class="form-control" id="offer_price" name="offer_price" placeholder="Product Price" data-error="Please enter product price." required value="<?php echo $getProducts['offer_price']; ?>" onkeypress="return isNumberKey(event)">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div id="clickview"></div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Selling Price</label>
                    <input type="text" class="form-control" readonly id="selling_price" name="selling_price" placeholder="Product Price" data-error="Please enter Selling price." required value="<?php echo $getProducts['selling_price']; ?>" onkeypress="return isNumberKey(event)">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Select Deal Start Date</label>
                    <input type="text" class="form-control" id="deal_start_date" name="deal_start_date" placeholder="Select deal start date" data-error="Please enter deal start date." required value="<?php echo $getProducts['deal_start_date']; ?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Select Deal End Date</label>
                    <input type="text" class="form-control" id="deal_end_date" name="deal_end_date" placeholder="Select deal start date" data-error="Please enter deal start date." required value="<?php echo $getProducts['deal_end_date']; ?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Quantity</label>
                    <input type="text" class="form-control" id="form-control-2" name="quantity" data-error="Please enter Quantity." required value="<?php echo $getProducts['quantity']; ?>">
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Minimum Order Quantity</label>
                    <input type="text" class="form-control" id="minimum_order_quantity" name="minimum_order_quantity" placeholder="minimum order quantity" data-error="Please enter minimum quantity order." required onkeypress="return isNumberKey(event)" value="<?php echo $getProducts['minimum_order_quantity']; ?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Key Features</label>
                    <textarea name="key_features" class="form-control" id="key_features" placeholder="Product Info" data-error="This field is required." required value="<?php echo $getProducts['key_features']; ?>"><?php echo $getProducts['key_features']; ?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Product Info</label>
                    <textarea name="product_info" class="form-control" id="product_info" placeholder="Product Info" data-error="This field is required." required value="<?php echo $getProducts['product_info']; ?>"><?php echo $getProducts['product_info']; ?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Specifications</label>
                    <textarea name="specifications" class="form-control" id="specifications" placeholder="Product Info" data-error="This field is required." required value="<?php echo $getProducts['product_info']; ?>"><?php echo $getProducts['specifications']; ?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Avalability</label>
                    <select id="form-control-3" name="availability_id" class="custom-select" data-error="This field is required." required>
                      <option value="">Avalability</option>
                      <option value="0" <?php if($getProducts['availability_id'] == 0) { echo "Selected=Selected"; }?>>In Stock</option>
                      <option value="1" <?php if($getProducts['availability_id'] == 1) { echo "Selected=Selected"; }?>>Out Of Stock</option>
                    </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                      <?php  $pid = $_GET['pid'];                                                           
                      $sql = "SELECT id,product_image FROM product_images where product_id = '$pid' ";
                      $getImages= $conn->query($sql);                                                             
                      while($row=$getImages->fetch_assoc()) {
                          echo "<img id='output' src= '../uploads/product_images/".$row['product_image']."' width=80px; height=80px;/> <a style='cursor:pointer' class='ajax_img_del' id=".$row['id'].">Delete</a> <br />";
                      }                               
                     ?>
                  </div>
                  <div class="form-group">
                    <label for="form-control-4" class="control-label">Product Image</label>
                    <div>
                      <?php if($getImages->num_rows > 0){ ?>
                        <input type="file" name="product_images[]" accept="image/*" onchange="loadFile(event)">
                      <?php } else { ?>
                      <img id="output" width="80" height="80">
                      <label class="btn btn-default file-upload-btn">
                          
                        <input type="file" name="product_images[]" accept="image/*" onchange="loadFile(event)" required >
                      </label>
                      <?php } ?>
                      <a style="cursor:pointer" id="add_more" class="add_field_button">Add More Fields</a>
                    </div>
                  </div>

                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getProducts['status']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>

                  <button type="submit" name="submit" value="Submit"  class="btn btn-primary btn-block">Submit</button>
                </form>
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
      <?php include_once 'admin_includes/footer.php'; ?>
      <script src="js/tables-datatables.min.js"></script>
      <script src="js/tables-datatables.min.js"></script>
   <!-- Below script for ck editor -->
<script src="//cdn.ckeditor.com/4.7.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'key_features' );
    CKEDITOR.replace( 'product_info' ); 
    CKEDITOR.replace( 'specifications' );
</script>

<script type="text/javascript">
$(document).ready(function() {
var abc = 0;
    $('#add_more').click(function () {
        $(this).before("<div><input type='file' id='file' name='product_images[]' accept='image/*'required><a href='#' class='remove_field'>Remove</a> </div>");
    });
    $('body').on('change', '#file', function () {
        if (this.files && this.files[0])
        {
            abc += 1; //increementing global variable by 1
            var z = abc - 1;
            var x = $(this).parent().find('#previewimg' + z).remove();
            $(this).before("<div id='abcd" + abc + "' class='abcd'><img id='previewimg" + abc + "' src='' width='150' height='150'/></div>");
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
        }
    });
        //image preview
    function imageIsLoaded(e) {
        $('#previewimg' + abc).attr('src', e.target.result);
    };
    $(this).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
  });
</script>
<!--Multiple images script end here -->
<script type="text/javascript">

$(document).ready(function() {

    //Change price type starts here
    $("#price_type").change(function () {
        if ($(this).val() == 1) {
            $(".show_price").show();
            $('.price_change_text').html('Enter Discount Price');
        } else if($(this).val() == 2) {
            $(".show_price").show();
            $('.price_change_text').html('Enter Offer Percentage');
        } else {
            $(".show_price").hide();
        }
        $('#offer_price, #selling_price').val('');
    });
    //End
    //Check validation for prodcut price empty or not and calaculate selling price
    $('#offer_price').keyup(function() {
        if($('#product_price').val()==''){
            alert("Please Enter Product Price");
            $('#offer_price').val('');
            return false;
        } else if($('#price_type').val() == 1) {
            calcPrice = ($('#product_price').val() - $('#offer_price').val());
        } else if($('#price_type').val() == 2) {
            calcPrice = $('#product_price').val() - ( ($('#product_price').val()/100) * $('#offer_price').val());
            if (parseInt($('#offer_price').val())>99) {
                alert("Please enter the percentage less than 100 ");
                $('#selling_price').val('');
                $('#offer_price').val('');
                return false;
            };
        }
        discountPrice = calcPrice.toFixed(2);
        $('#selling_price').val(discountPrice);
        if(parseInt($('#offer_price').val()) > parseInt($('#product_price').val())) {
            alert("Please Enter Discount value less than Product Price");
            $('#selling_price').val('');
            $('#offer_price').val('');
        }
    });
    //End
    
    //End date should be greater than Start date
    $("#deal_end_date").change(function () {
        var startDate = document.getElementById("deal_start_date").value;
        if ($('#deal_start_date').val()=='') {
        alert("Please Enter Deal Start date");
        document.getElementById("deal_end_date").value = "";
    };
        var endDate = document.getElementById("deal_end_date").value;
     
        if ((Date.parse(endDate) <= Date.parse(startDate))) {
            alert("Deal End date should be greater than Deal Start date");
            document.getElementById("deal_end_date").value = "";
        }
    });
    
   //Minimum order quantity should be less than quantity
   $("#minimum_order_quantity").keyup(function () {
        if($('#quantity').val()==''){
            alert("Please Enter Quantity");
            $('#minimum_order_quantity, #quantity').val('');
        } else {
            if(parseInt($('#minimum_order_quantity').val()) > parseInt($('#quantity').val())) {
                alert("The quantity value must be larger than the minimum quantity");
                $('#minimum_order_quantity').val('');
                return false;
            }
        }
   });
   
  });
</script>
<script type="text/javascript">
$(function(){
    $(document).on('click','.ajax_img_del',function(){
        var del_id= $(this).attr('id');
        var $ele = $(this).parent().parent();
        var r = confirm("Are you sure you want to delete?");
        if(r == true){
        $.ajax({
            type:'POST',
            url:'delete_image.php',
            data:{'del_id':del_id},
            success: function(data){              
                 if(data=="YES"){
                   location.reload();
                 }else{
                    alert("Deleted Failed");  
                }
             }

           });
         } else{
            location.reload();
         }
        });
});
</script>












                  




                      

                  
