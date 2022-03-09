
<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style1.css">
<title>Add Specification</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php
include("adminprocess.php")
?>
   <div class="container-fluid align-self-center h-100 my-5">
	<div class="row justify-content-center align-self-center w-100">
	
        <div class="col-lg-4 col-md-8 col-12 justify-content-center py-4 border_radius_20px bg-primary">
          <form name="form2" method="post" onSubmit="return abc()" enctype="multipart/form-data" action="addspecdetails2.php">
             <?php 
           include 'connect.php';
           $s0=$_POST['t0'];
           $s1=$_POST['t1'];
           $s2=$_POST['t2'];
           $s3=$_POST['t3'];
           $s4=$_POST['t4'];
           $s5=$_POST['t5'];
           $s6=$_POST['t6'];
           $spec=$_POST['spec'];
           ?>
	       <div class="text-center fs-5 fw-bold">
	            Add Specification
	    </div>
	    <div class="row justify-content-center align-self-center w-100">
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    
	    <label class="my-3 d-flex justify-content-end">Color</label>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <input class="my-2" name="t0" type="text" value="<?php echo$s0; ?>" id="t0">
	    </div>
	    
	    <div class="row justify-content-center align-self-center w-100">
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    
	    <label class="my-3 d-flex justify-content-end">Display-Size</label>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <input class="my-2" name="t1" type="text" value="<?php echo $s1; ?>" id="t1">
	    </div>
	    
	    <div class="row justify-content-center align-self-center w-100">
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    
	    <label class="my-3 d-flex justify-content-end">Display-Type</label>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <input class="my-2" name="t2" type="text" value="<?php echo $s2; ?>" id="t2">
	    </div>
	    
	    <div class="row justify-content-center align-self-center w-100">
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    
	    <label class="my-3 d-flex justify-content-end">RAM</label>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <input class="my-2" name="t3" type="text" value="<?php echo $s3; ?>" id="t3">
	    </div>
	    
	    <div class="row justify-content-center align-self-center w-100">
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    
	    <label class="my-3 d-flex justify-content-end">Internal Memory</label>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <input class="my-2" name="t4" type="text" value="<?php echo $s4; ?>" id="t4">
	    </div>
	    
	    <div class="row justify-content-center align-self-center w-100">
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    
	    <label class="my-3 d-flex justify-content-end">Main Camera</label>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <input class="my-2" name="t5" type="text" value="<?php echo $s5; ?>" id="t5">
	    </div>
	    
	    <div class="row justify-content-center align-self-center w-100">
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    
	    <label class="my-3 d-flex justify-content-end">Battery</label>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <input class="my-2" name="t6" type="text" value="<?php echo $s6; ?>" id="t6">
	    </div>
	    </div>
	    
	    <?php 
	       include 'connect.php';
	       $sid=20021000;
	       $s=mysql_query("select * from spec order by sid desc");
	       if($row=mysql_fetch_array($s))
	       {
	           $sid=$row[0];
	       }
	       $sid++;
	       $s="insert into spec values('$sid','$s0','$s1','$s2','$s3','$s4','$s5','$s6','$spec')";
	       
	       mysql_query($s);
	       ?>
                
             <div class="text-center">
			<p class="text-white"> Add Specification Successfully...</p>
			
			 <p><a class="text-white" href="addproduct1.php">Add Next Product</a></p>
	     </div>
	     </div>
	     </div>
	     </div>
	     </div>
	     </div>
	     </div>
	     </form>
	     </div>
	     </div>
	     </div>
</body>
<script src="bootstrap.bundle.min.js">
</script>
</html>

