<?php  
require_once("header.php");
require_once("php_dao/feedbackDao.php");
?>
<div class="cab_banner_wrapper" style="background-image:url('/tigercabs/images/feedback.jpg');height:500px; " >
	<div class="container">
		<div class="row" style='margin-left:25%'>
			<div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 col-sm-12 col-xs-12 col-sm-offset-0 col-xs-offset-0">
				<div class="cab_banner_detail text-center">
					<!--<a href="#"><img src="images/logo.png" alt=""></a>-->
				 
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
<?php
if (isset($_SESSION['UID']))
    {
    $strposts = getFeedback();
     
    
    }
    if (count($strposts))
    {
        $counter=0;
        
        foreach ($strposts as $key => $post)
        {
            $counter++;
        ?>
            <section class="post">            
            <div class="post-header">
                   <p class="post-action">
                    <a href="#"><?php echo $post['name'] ?></a>
                    <a href="#"><?php echo $post['feedbackDate'] ?></a> 
                    <a href="#"><?php echo $post['emailid'] ?></a> 

                    
                </p>
            </div>                      
                <p class="postText"> <?php  echo $post['comments'];  ?></p> 
                <p>
                <a href="#" >
                    <?php
                        if (isset($_SESSION['UID']))
                        { 
                            echo '<a href=feedback.php?action=Reply&&ReplyId='.$post['id'].'>Replay</a>';
                         }
                    ?>
                
                    </a>
                        </p>
                         
            </section>
            <hr/>
        <?php 
        }}
         ?>

 

</div>
<?php  
require_once("footer.php");
 

?>