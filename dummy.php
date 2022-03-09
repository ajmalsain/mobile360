<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#quantity").on('change',function () {
                $('#total').text($('#price').attr('data-price') * $(this).val());
            });
        });
    </script>
</head>
<body>
<?php 
include 'home.php';
$s1=$_POST['t2'];
?>
<div class="container-fluid my-5">
  <div class="row">
  
    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 ">
      <div class="text-center">
      <b>Item</b>
      </div>
      <div class="row">
        <?php 
        include 'connect.php';
        $s=mysql_query("select * from products where pid=$s1");
        
        while($row=mysql_fetch_array($s))
        {
            echo"<div class='col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 my-3 d-flex justify-content-end'>
            <img class='img-fluid' src='./Pimage/$row[5]'>
            </div>
            <div class='col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 my-3 d-flex justify-content-start d-flex align-self-center'>
            <h5>$row[1]</h5>
            </div>";
        }
        ?>
        </div>
      </div>
      
      <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1 col-12 ">
      <div class="text-center">
      <b>price</b>
      </div>
      <?php 
        include 'connect.php';
        $s=mysql_query("select * from products where pid=$s1");
        while($row=mysql_fetch_array($s))
        {   
            echo "<div class='my-3 d-flex justify-content-center'>
           <h5>$row[3]</h5>
            </div>";
        }
        ?>
      </div>
      
      <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-12 ">
      <div class="text-center">
      <b>Other details</b>
      </div>
      <div class="my-3 d-flex justify-content-center">
      <p> offers not available now...</p>
      </div>
      </div>
      
      <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-12 ">
      <div class="text-center">
      <b>Sub Total</b>
      </div>
      <div class="my-3 d-flex justify-content-center">
      
          
        <?php  echo "<h5>Rs.<span id='total'></span></h5>"; ?>
        
      </div>
      </div>
     
  </div>
</div>
<div class='container-fluid my-3'>
  <div class='row'>
  
  <div class='my-3 d-flex justify-content-end bg-warning'>
  <?php echo"<h2>Amount Payable: Rs.";
  echo "<span id='total'></span></h2>"; ?>
  </div>"; 
  
  </div>
  <div class="row">
  <div class=" d-flex justify-content-center">
   <form action="orderplace.php" method="POST">
    <button class="btn btn-danger h-100" type="submit"><b>PLACE ORDER</b></button>
    </form>
  </div>
  
  </div>
  </div>

</body>
<script src="js/bootstrap.bundle.min.js">
</script>
</html>
