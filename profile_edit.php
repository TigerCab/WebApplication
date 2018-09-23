<?php  
require_once("header.php");
require_once("php_dao/userdao.php");
if(session_id() == '' || !isset($_SESSION)) 
{
    session_start();
}
 


$userProfile=getUserProfile($_SESSION['UID']);


foreach ($userProfile as $key => $list)
        { 
/*$FAQ=getUserProfile($_SESSION['UID']);*/
?>
<!--
<div class="cab_banner_wrapper >
	<div class="container">
		<div class="row" style='margin-left:25%'">
			<div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 col-sm-12 col-xs-12 col-sm-offset-0 col-xs-offset-0">
				<div class="cab_banner_detail text-center">
					<!--<a href="#"><img src="images/logo.png" alt=""></a>-->
			<!--		<h1 style="font-size:50px !important;"><span>Edit Profile of <?php echo $list['userName']; ?></span></h1>
					
					
				</div>
			</div>
		</div>
	</div>
</div>
-->

<div class="container">
<div class="row" style="padding:30px;">
</div>

    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3" >
        <!--<div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>-->
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <h3>Personal info</h3>
<?php
      if (isset($_GET['res']))
      {
       
      //echo "<p class='text-success text-center'>".$_GET['res']."</p>";
      echo "<div class='alert alert-success' role='alert'>"
      .$_GET['res']."</div>";
      unset($_GET['res']);
      }
  
?>

        <form class="form-horizontal" role="form" method="POST" action="php_dao/userdao.php?action=updateProfile">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="fname" type="text" value=<?php echo $list['firstName']; ?>>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="lname" type="text" value=<?php echo $list['lastName']; ?>>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" value=<?php echo $list['userEmailId']; ?>>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone Number</label>
            <div class="col-lg-8">
              <input class="form-control" name="phoneno" type="text" value=<?php echo $list['phoneNo']; ?>>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Date of Birth</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="dob" value=<?php echo $list['dob']; ?>>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Accreditation No.</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="accno" value=<?php echo $list['driverAcceredationNo']; ?>>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Accreditation Date</label>
            <div class="col-lg-8">
              <input class="form-control" name="accdate" type="text" value=<?php echo $list['driverAcceredationDate']; ?>>
            </div>
          </div>


          
           
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
             <!-- <input type="reset" class="btn btn-default" value="Cancel">-->
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>

<?php
        }
 require_once("footer.php");
 
 ?>