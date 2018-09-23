<?php  
require_once("header.php");
 

?>

<section style="height: 800px;background: url('images/10.jpg');padding: 20px; background-size: 1400px 836px;
background-repeat: no-repeat">

<div class="container-fluid">
<br>  
<p class="text-center">
</p>
<hr>

<div class="row">
<aside class="col-sm-8">
</aside>

<aside class="col-sm-4">
 
<div class="card">
<article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1">Sign Up</h4>
	<hr>
	<?php
 
	
if (isset($_GET['res']))
{
 
//echo "<p class='text-success text-center'>".$_GET['res']."</p>";
echo "<div class='alert alert-success' role='alert'>"
.$_GET['res']."</div>";
unset($_GET['res']);
}

?>
	<form action="php_dao/userdao.php?action=signup" method="post">
    <div class="form-group">
	    <div class="input-group">
		    <div class="input-group-prepend">
		        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		    </div>
			<input name="fname" class="form-control" placeholder="First Name" type="text" required>
			<div class="input-group-prepend">
		        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
			</div>
			<input name="lname" class="form-control" placeholder="Last Name" type="text" required>

	    </div> <!-- input-group.// -->
    </div> <!-- form-group// -->
    

	<div class="form-group">
	    <div class="input-group">
		    <div class="input-group-prepend">
		        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		    </div>
		    <input name="email" class="form-control" placeholder="Email or login" type="email" required>
	    </div> <!-- input-group.// -->
	</div> <!-- form-group// -->
	
	<div class="form-group">
	    <div class="input-group">
		    <div class="input-group-prepend">
		        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		    </div>
		    <input name="accno" class="form-control" placeholder="Accreditation No." type="text" required>
	    </div> <!-- input-group.// -->
	</div> <!-- form-group// -->
	<div class="form-group">
	    <div class="input-group">
		    <div class="input-group-prepend">
		        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		    </div>
		    <input name="phoneno" class="form-control" placeholder="Phone No." type="text" required>
	    </div> <!-- input-group.// -->
	</div> <!-- form-group// -->
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
	    <input name="pass" class="form-control" placeholder="Create Password" type="password" required>
	</div> <!-- input-group.// -->
	</div> <!-- form-group// -->
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
	    <input class="form-control" placeholder="Repeat Password" type="password" required>
	</div> <!-- input-group.// -->
	</div> <!-- form-group// -->




	<div class="form-group">
	<button type="submit" class="btn btn-warning btn-block"> Create an Account  </button>
	</div> <!-- form-group// -->
	<p class="text-center">Have an account? <a href="login.php">Log In</a> </p>        
	</form>
</article>
</div> <!-- card.// -->

	</aside> <!-- col.// -->
	
</div> <!-- row.// -->

</div> 
<!--container end.//-->

<br><br><br>
 
</section>
<?php  
require_once("footer.php");
 

?>