<?php  
require_once("header.php");

require_once("php_dao/feedbackDao.php");

$replyId=0;

if (isset($_GET['ReplyId']))
{
	
	$replyId=$_GET['ReplyId'];
	
	
}

?>
<div class="cab_banner_wrapper" style="background-image:url('/tigercabs/images/feedback.jpg');height:500px; " >
	<div class="container">
		<div class="row" style="margin-left:25%">
			<div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 col-sm-12 col-xs-12 col-sm-offset-0 col-xs-offset-0">
				<div class="cab_banner_detail text-center">
					<!--<a href="#"><img src="images/logo.png" alt=""></a>-->
			 	</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
            <!--<div class="imagebg"></div>-->
            <div class="row" style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
                    <h2>Feedback</h2> 
                 
                    <p> Please provide your feedback below: </p>
                    <form role="form" method="post" action="php_dao/feedbackDao.php?action=Save">
                       
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments"> Comments:</label>
                                <textarea required class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> Your Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                
                                <input type="hidden"  class="form-control" id="reviewId" value="<?php echo $replyId;
                                ?>" name="reviewId" >
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-warning btn-block" >Post </button>
                            </div>
                        </div>
                    </form>
                    <?php


                    if (isset($_GET['res']))
                    {
                        echo "<div  style='width:100%; height:100%;'> <h3>Posted your feedback successfully!</h3> </div>";
                        unset($_GET['res']);
                        
                    }


                        ?>
                    
            <div id="error_message" style="width:100%; height:100%; display:none; "> 
                <h3>Error</h3> Sorry there was an error sending your form. 
            </div>
        </div>
    </div>
</div>


<?php  
require_once("footer.php");

?>