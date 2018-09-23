<?php  
require_once("header.php");
?>


<section style="height: 800px;background: url('images/10.jpg');padding: 10px; background-size: 1400px 836px;
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
<a href="register.php" class="float-right btn btn-outline-warning">Sign up</a>
<h4 class="card-title mb-4 mt-1">Sign in</h4>
<form action="php_dao/userdao.php?action=login" method="post">
    <div class="form-group">
    	<label>Your email</label>
        <input name="email" class="form-control" placeholder="Email" type="email">
    </div> <!-- form-group// -->
    <div class="form-group">
    	<a class="float-right" href="#">Forgot?</a>
    	<label>Your password</label>
        <input name="pass" class="form-control" placeholder="password" type="password">
    </div> <!-- form-group// --> 
    <div class="form-group"> 
    <div class="checkbox">
      <label> <input type="checkbox"> Save password </label>
    </div> <!-- checkbox .// -->
    </div> <!-- form-group// -->  
    <div class="form-group">
        <button type="submit" class="btn btn-warning btn-block"> Login  </button>
    </div> <!-- form-group// -->                                                           
</form>
</article>
</div> <!-- card.// -->

	</aside> <!-- col.// -->
	
</div> <!-- row.// -->

</div> 
<!--container end.//-->

<br><br><br>

</article>
</section>
