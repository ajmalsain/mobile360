
<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style1.css">
<title>Untitled Document</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<script src="js/vaild1.js">
</script>
<body>
<?php
include("adminprocess.php")
?>

  <div class="container-fluid align-self-center my-5 h-100">
	<div class="row justify-content-center align-self-center w-100">
	
        <div class="col-lg-4 col-md-8 col-12 justify-content-center py-4 border_radius_20px bg-primary">
          <form name="form1" method="post" action="addproduct2.php">
       
       <?php 
         $s1=$_POST['t1'];
         $s2=$_POST['brand'];
         $s3=$_POST['t3'];
         $s4=$_POST['t4'];
         ?>
	       <div class="text-center fs-5 fw-bold">
	    Add Product
	    </div>
	    <div class="row justify-content-center align-self-center w-100">
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <label class="my-3">Product Name</label>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <input class="my-2" name="t1" value="<?php echo $s1; ?>" type="text" id="t1">
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <p><label class="mb-2">Brand Name</label></p>
	    </div>
	     <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	     <input class="my-1" name="brand" value="<?php echo $s2; ?>" type="text" id="brand">
	     </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <p><label class="mb-12">Price</label></p>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <input class="my-2" name="t3" value="<?php echo $s3; ?>" type="text" id="t3">
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <p><label class="mb-2">Upload Image</label></p>
	   
	    </div>
	    
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">

	    <p><?php echo "All file uploded"; ?></p>
	    
	    </div>
	    </div>
			<?php
include ("connect.php");

$Pid=2022000;
$s=mysql_query("select * from products order by Pid desc");
if($row=mysql_fetch_array($s))
{
$Pid=$row[0];
}
$Pid++;
$filename=$_FILES['fname1']['name'];
$filename1=$_FILES['fname2']['name'];
$filename2=$_FILES['fname3']['name'];
$filename3=$_FILES['fname4']['name'];
$filename="$Pid";
$filename1="$Pid"."1";
$filename2="$Pid"."2";
$filename3="$Pid"."3";
move_uploaded_file($_FILES["fname1"]["tmp_name"],"./Pimage/$filename");
move_uploaded_file($_FILES["fname2"]["tmp_name"],"./Pimage/$filename1");
move_uploaded_file($_FILES["fname3"]["tmp_name"],"./Pimage/$filename2");
move_uploaded_file($_FILES["fname4"]["tmp_name"],"./Pimage/$filename3");
$s="insert into products values('$Pid','$s1','$s2','$s3','$s4','$filename','$filename1','$filename2','$filename3')";
mysql_query($s);
			?>
			<div class="text-center">
			<p class="text-white"> Add Product Successfully...</p>
			
			 <p><a class="text-white" href="addproduct1.php">Add Next Product</a></p>
	     </div>
        </form>
        <?php 
        echo "<form action='addspecdetails.php' method='POST'>
           <div class='text-center'>
			<button class='btn btn-secondary' type='Submit' name='submit'><b>Add Specification</b></button>
			<input type='hidden' name='spec' value='$Pid'>
			</div>
			</form>";
			?>
        </div>
        </div>
       </div>
	   
</body>
<script src="bootstrap.bundle.min.js">
</script>
</html>


	
