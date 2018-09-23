<?php  
require_once("header.php");
require_once("php_dao/carsDAO.php");
?>
<head>
     <link rel="stylesheet" type="text/css" media="screen" href="css/cars.css" />
  
</head>

 <main>
        <!--Our cars-->
        
        <div class="cab_banner_wrapper >
            <div class="container">
                <div class="row" style='margin-left:25%'">
                    <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 col-sm-12 col-xs-12 col-sm-offset-0 col-xs-offset-0">
                        <div class="cab_banner_detail text-center" style="color:white">
                            <!--<a href="#"><img src="images/logo.png" alt=""></a>-->
                            <?php 
                                $FAQ=getcarHeader();
                                if (count($FAQ))
			                    {
			                    	foreach ($FAQ as $key => $cars)
				                    {
                            ?>
                            <h2><?php echo $cars['vehicleType'];  ?></h2>
                            <h4><?php echo $cars['description'];  ?></h4>
                           

<!--                        <h2>Our cars</h2>
                            <h4 class="inset-2" >Our company offers three cab variants, these are 
                            assiduously chosen to cater to every type of event or need. The three 
                            models of vehicles offered are Maxi, Sedan and Suv. Depending on the 
                            preference of the customer and whatever need they need have to enlist a car 
                            for, these vehicles fit the suit. </h4>-->
                            <?php 
                                    }}
                                    ?>

                        </div>
                    </div>
                </div>
            </div>
        

       <!-- <section class="text-center">
            <div class="container-fluid container-inset marker well-md bg-aside bg-aside-right">
                <div class="row">
                        <div class="col-md-6 text-md-left">
                            <h2>Our cars</h2>
                            <h4 class="uppercase">We propose the largest selection of prestige cars</h4>
                            <p class="inset-2">We propose only the latest car models for hiring and work with the most prestigious car brands (Aston Martin, Audi, Bentley, BMW, Ferrari, Lamborghini, Maserati, McLaren, Mercedes-Benz, Mini, Porsche, Land Rover, Jaguar and Rolls Royce). We also propose a selection of unique supercars.
                                Car Rental offers a bespoke and high-end car rental service in many cities across the Europe.</p>
                        </div>
                    <div class="col-md-6">
                        <div class="img-wrap img-wrap-md">
                           <!-- <img src="images/page-4_img01.jpg" alt="" style="height: 420px;"> 
                        </div>
                        </div>
                </div>
            </div>
        </section>
        <!--End Our cars-->
 
        <!--Full width-->
        <!--<section>
            <div class="row row-no-gutter">
                <div class="col-sm-6 col-md-4">
                    <div class="product">
                        <img src="images/sedan.jpg" alt="">
                        <div class="product__cnt">
                            <h5 class="uppercase">sedan</h5>
                            <ul class="pricing-table">
                                <li>LEASE PRICE : <span class="price strike text-primary">$175.00/Per Day</span></li>
                                
                            </ul>
                               
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="product">
                        <img src="images/maxi.jpg" alt="">
                        <div class="product__cnt">
                            <h5 class="uppercase">Maxi</h5>
                            <ul class="pricing-table">
                                <li>LEASE PRICE : <span class="price strike text-primary">$199.99 /Per Day</span></li>
                                 
                            </ul>  
                   </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="product">
                        <img src="images/suv.jpg" alt="">
                        <div class="product__cnt">
                            <h5 class="uppercase">SUV</h5>
                            <ul class="pricing-table">
                                <li>LEASE PRICE : <span class="price strike text-primary">$250.00 /Per Day</span></li>
                               
                            </ul>
                          
                        </div>
                    </div>
                </div>
                
            </div>-->

<section>
<div class="container-fluid">
<?php 
			$FAQ=getcars();
   
			if (count($FAQ))
			{
		 
				foreach ($FAQ as $key => $cars)
				{
				?>
                  <div class="row" style=" padding: 30px;">
                        <div class ="col-md-4">
                            <div class="product">
                                <img src=<?php echo $cars['ImagePath'];  ?> alt="">
                                    
                            </div>
                       </div>
                        <div class ="col-md-8">  
                            <h1><?php echo $cars['vehicle'];  ?></h1>
                            <p>
                            <?php echo $cars['vehicleDescription'];  ?>
                            </p>
                            <h4>LEASE PRICE : <span class="price strike text-primary">$<?php echo $cars['price'];  ?>/Per Day</span></h4>

                             <?php
                              
                                    if (isset($_SESSION['UID']))
                                    {?>
                                     <a class="text-uppercase btn btn-primary" style="background-color:black" href="booking.php?id=<?php echo $cars['id']; ?>">Book This Car Now</a>
 <?php
                                    }
                                ?>

                        </div>
                </div>
                <?php
           }
        }
                ?>
 

    
</div>
 
        </section>
        <!--End full-width-->
 
 

<?php
 require_once("footer.php");
  ?>
