
<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style1.css">
<title>Untitled Document</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<script language="javascript">
function abc()
{

if(document.form2.t1.value==""|| document.form2.t2.value==""|| document.form2.t3.value==""|| document.form2.fname.value=="")
{
  alert ("Please Enter all details");
  return(false);
}
  
}
</script>
<?php
include("adminprocess.php")
?>
   <div class="container-fluid align-self-center h-100 my-5">
	<div class="row justify-content-center align-self-center w-100">
	
        <div class="col-lg-4 col-md-8 col-12 justify-content-center py-4 border_radius_20px bg-primary">
          <form name="form2" method="post" onSubmit="return abc()" enctype="multipart/form-data" action="addproduct2.php">
   
	       <div class="text-center fs-5 fw-bold">
	            Add Product
	    </div>
	    <div class="row justify-content-center align-self-center w-100">
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    
	    <label class="my-3">Product Name</label>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <input class="my-2" name="t1" type="text" id="t1">
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <p><label class="mb-2">Brand Name</label></p>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	      <select name="brand" id="brand">
		            
		            <option value="Iphone" selected>Iphone</option>
		            <option value="Oppo">Oppo</option>
					<option value="Realme">Realme</option>
		            <option value="Redmi">Redmi</option>
		            <option value="Samsung">Samsung</option>
		            <option value="Vivo">Vivo</option>
		            </select>
	     
	     </div>
	     <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    
	    <p><label class="mb-12">Price</label></p>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	     <input class="my-2" name="t3" type="text" id="t3">
	     </div>
	     
	     <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    
	    <p><label class="mb-12">Quantity</label></p>
	    </div>
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	     <input class="my-2" name="t4" type="text" id="t4">
	     </div>
	   <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <p><label class="mb-2">Upload Image1</label></p>
	    </div>	 
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">	     
	    <input class="my-2" name="fname1" id="fname1" type="file">
	    </div>
	    
	     <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <p><label class="mb-2">Upload Image2</label></p>
	    </div>	 
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">	     
	    <input class="my-2" name="fname2" id="fname2" type="file">
	    </div>
	    
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <p><label class="mb-2">Upload Image3</label></p>
	    </div>	 
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">	     
	    <input class="my-2" name="fname3" id="fname3" type="file">
	    </div>
	    
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
	    <p><label class="mb-2">Upload Image4</label></p>
	    </div>	 
	    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">	     
	    <input class="my-2" name="fname4" id="fname4" type="file">
	    </div>
	  
	    </div>
	     <div class="text-center py-3">
	       <button class="btn btn-secondary btn-md" type="submit"><b>Add Product</b></button>
                
              </div>
          
        </form>
        </div>
        </div>
       </div>
	   
</body>
<script src="bootstrap.bundle.min.js">
</script>
</html>
