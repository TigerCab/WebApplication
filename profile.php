<?php  
require_once("header.php");
require_once("php_dao/userdao.php");
if(session_id() == '' || !isset($_SESSION)) 
{
    session_start();
 
}
$FAQ=getUserProfile($_SESSION['UID']);

 ?>
<div class="cab_banner_wrapper >
	<div class="container">
		<div class="row" style='margin-left:25%'">
			<div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 col-sm-12 col-xs-12 col-sm-offset-0 col-xs-offset-0">
				<div class="cab_banner_detail text-center">
					<!--<a href="#"><img src="images/logo.png" alt=""></a>-->
					<h1><span> My Profile  </span></h1>
				</div>
			</div>
		</div>
	</div>
</div>
 <section class="contactus">
<!-- contact us -->
<div class="container">
    <div class="row">
    <div class="col-12">
    
    <h2>User Profile </h2>
    </div> 
  </div>
  <?php
    
  
			if (count($FAQ))
			{
			 
				
				foreach ($FAQ as $key => $deals)
				{

          ?>
          <div class="row">
            <div class="col-6">
              <h3>Name</h3>
            </div> 
            <div class="col-6">
              <h3><?php echo $deals['userName'];?></h3>
           </div> 
        </div>


         <div class="row">
            <div class="col-6">
              <h3>Email</h3>
            </div> 
            <div class="col-6">
              <h3><?php echo $deals['userEmailId'];?></h3>
           </div> 
        </div>



         <div class="row">
            <div class="col-6">
              <h3>Phone</h3>
            </div> 
            <div class="col-6">
              <h3><?php echo $deals['phoneNo'];?></h3>
           </div> 
        </div>


 <div class="row">
            <div class="col-6">
              <h3>Accreditation No.</h3>
            </div> 
            <div class="col-6">
              <h3><?php echo $deals['driverAcceredationNo'];?></h3>
           </div> 
        </div>



  <?php
        }
      }

?>
 </div>
  </section>
<?php  require_once("footer.php"); ?>
