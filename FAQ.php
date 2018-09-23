<?php  
require_once("header.php");
require_once("php_dao/FAQDAO.php");
?>

<head>  
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/FAQ.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

</head>

<div class="cab_banner_wrapper" style="background-image:url('/tigercabs/images/faq.jpg');height:500px; " >
	<div class="container">
		<div class="row" style='margin-left:25%'">
			<div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 col-sm-12 col-xs-12 col-sm-offset-0 col-xs-offset-0">
				<div class="cab_banner_detail text-center">
					<!--<a href="#"><img src="images/logo.png" alt=""></a>-->
				 
				</div>
			</div>
		</div>
	</div>
</div>

<section class="cd-faq">
 <div class="cd-faq-items">
		<ul id="basics" class="cd-faq-group">
			 
		<?php 
			$FAQ=getFAQ();

			if (count($FAQ))
			{
			 
				
				foreach ($FAQ as $key => $post)
				{
					?>
					<li>
				<a class="cd-faq-trigger" href="#0"><?php echo $post['Question'];?></a>
				<div class="cd-faq-content">
					<p><?php echo $post['Answer'];?> </p></div> <!-- cd-faq-content -->
					</li>


					<?php
				}
			}

		?>

	
			 
        </ul> <!-- cd-faq-group -->
</div>

</section>    
<?php
 require_once("footer.php");
 
 ?>

