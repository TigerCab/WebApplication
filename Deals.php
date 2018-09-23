<?php  
require_once("header.php");
require_once("php_dao/dealsDao.php");

?>
<div class="cab_banner_wrapper >
	<div class="container">
		<div class="row" style='margin-left:25%'">
			<div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 col-sm-12 col-xs-12 col-sm-offset-0 col-xs-offset-0">
				<div class="cab_banner_detail text-center">
					<!--<a href="#"><img src="images/logo.png" alt=""></a>-->
					<h1><span>Tiger Cabs </span>Our Deals </h1>
				</div>
			</div>
		</div>
	</div>
</div>

<section>
<div class="container-fluid">
<?php 
			$FAQ=getdeals();
   
			if (count($FAQ))
			{
			 
				
				foreach ($FAQ as $key => $deals)
				{
				?>
                  <div class="row" style=" padding: 30px;">
                    <div class ="col-md-7">
                        <h1><?php echo $deals['deal'];  ?></h1>
                            <p>
                            <?php echo $deals['description'];  ?>
                            </p>
                            <h4>
                            <span class="price strike text-primary">
                            Offer :</span>
                            <?php echo $deals['offer'];  ?></h4>

                    </div>
                    <div class ="col-md-5">
                       <img style="width: 80%;height:auto" src=<?php echo $deals['ImagePath'];  ?> alt="">
                    </div>
                    <hr/>
                 </div>
                <?php
           }
        }
                ?>
 

    
</div>
 
        </section>


<!--
<div class="container-fluid">
<div class="row" style="background-color: #f0be14;padding: 30px;">
        <div class ="col-md-6">
            <h1>FUEL AT OTR</h1>
            <p>
            There are never-ending benefits provided to the customers by Tiger Cabs in cohesion with South Australia’s convenience giants OTR, currently redeemable are:
            Fill up your tanks at any OTR site and get a free car wash! 
           </p>

        </div>
        <div class ="col-md-6">
        <h1>GET CAR WASH FREE </h1>
        <img src="images/carwash.jpg"></img>
        </div>
</div>
<div class="row" style="background-color: #20a28b;padding: 30px;">
<div class ="col-md-6">
<h1>GET $50 FROM OFFICE  </h1>
<img src="images/refer.png"></img>
        </div>

        <div class ="col-md-6">
            <h1>REFER A FRIEND</h1>
           
            <p>
            If you have a friend or you get referred by a friend to Tiger Cabs, you’re indisputably eligible for a $50 voucher!
            </p>

        </div>
       
</div>    
   

</div>
 </section>-->
<?php  
require_once("footer.php");
 

?>