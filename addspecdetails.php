
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
             <?php $s0=$_POST['spec']; ?>
	       <div class="text-center fs-5 fw-bold">
	            Add Specification
	    </div>
	    <div class="row justify-content-center align-self-center w-100">
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    
	    <label class="my-3 d-flex justify-content-end">Color</label>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <input class="my-2" name="t0" type="text" id="t0">
	    </div>
	    
	    <div class="row justify-content-center align-self-center w-100">
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    
	    <label class="my-3 d-flex justify-content-end">Display-Size</label>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <input class="my-2" name="t1" type="text" id="t1">
	    </div>
	    
	    <div class="row justify-content-center align-self-center w-100">
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    
	    <label class="my-3 d-flex justify-content-end">Display-Type</label>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <input class="my-2" name="t2" type="text" id="t2">
	    </div>
	    
	    <div class="row justify-content-center align-self-center w-100">
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    
	    <label class="my-3 d-flex justify-content-end">RAM</label>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <input class="my-2" name="t3" type="text" id="t3">
	    </div>
	    
	    <div class="row justify-content-center align-self-center w-100">
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    
	    <label class="my-3 d-flex justify-content-end">Internal Memory</label>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <input class="my-2" name="t4" type="text" id="t4">
	    </div>
	    
	    <div class="row justify-content-center align-self-center w-100">
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    
	    <label class="my-3 d-flex justify-content-end">Main Camera</label>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <input class="my-2" name="t5" type="text" id="t5">
	    </div>
	    
	    <div class="row justify-content-center align-self-center w-100">
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    
	    <label class="my-3 d-flex justify-content-end">Battery</label>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <input class="my-2" name="t6" type="text" id="t6">
	    </div>
	    </div>
	    <div class="text-center py-3">
	       <button class="btn btn-secondary btn-md" type="submit"><b>Add Product</b></button>
                <?php echo "<input type='hidden' name='spec' value='$s0'"; ?>
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
