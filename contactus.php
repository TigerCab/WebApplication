<?php  
require_once("header.php");

if (isset($_GET['action']))
{
require_once("php_dao/userdao.php");
if (isset($_POST['YourName']))
{
$YourName=$_POST['YourName'];
$YourEmail=$_POST['YourEmail'];
$Yourtelephone=$_POST['Yourtelephone'];
$Yourdescription=$_POST['Yourdescription'];
if (ContactUs($YourName,$YourEmail,$Yourtelephone,$Yourdescription))
{
?>
<div class="alert alert-success" role="alert">
 Thanks for your Enquiry 
</div>

<?php
} 
}
}

else
{
?>


 

<section id="contact">
			<div class="section-content">
				<h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
				 
			</div>
			<div class="contact-section">
			<div class="container">
				<form action="contactus.php?action=submit" method="POST">
          <div class="row">
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Your name</label>
					    	<input type="text" class="form-control" name="YourName" placeholder=" Enter Name" required>
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Email Address</label>
					    	<input type="email" class="form-control" name="YourEmail" placeholder=" Enter Email id" required>
					  	</div>	
					  	<div class="form-group">
					    	<label for="telephone">Mobile No.</label>
					    	<input type="tel" class="form-control" name="Yourtelephone" placeholder=" Enter 10-digit mobile no." required>
			  			</div>
			  		</div>
			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<label for ="description"> Message</label>
			  			 	<textarea  class="form-control" name="Yourdescription" placeholder="Enter Your Message" stype="height: 130px;" required></textarea>
			  			</div>
			  			<div>

			  				<button type="submit" class="btn btn-success"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
			  			</div>
			  			
          </div>
</div>

				</form>
			</div>
    </section>
    <?php
    
    }
    ?>

<?php  require_once("footer.php"); ?>
