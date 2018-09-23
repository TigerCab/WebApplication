<?php
if(session_id() == '' || !isset($_SESSION)) 
{
    session_start();
 
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tiger Cabs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/mystyle.css" />
  

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <!-- <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />-->
 
    <link rel="stylesheet" href="css2/linearicons.css">
		    <link rel="stylesheet" href="css2/magnific-popup.css">
			<link rel="stylesheet" href="css2/nice-select.css">					
			<link rel="stylesheet" href="css2/animate.min.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
      <link rel="stylesheet" href="css2/owl.carousel.css">
      <link rel="stylesheet" href="css/booking.css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!--<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>-->
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<div class="tw-head">
    <div class="container">
    <div class="row">
     <div class="col-md-2">
     <a class="navbar-brand tw-nav-brand" href="index.php"> <img src="images/logo.png" class="img-fluid"> </a>
     </div>
 
     <div class="col-md-10">
  

<nav id="" class="navbar navbar-light bg-light navbar-inner" style="height: 100%;">
  
  <ul class="nav nav-pills">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="aboutus.php">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contactus.php">Contact Us</a>
    </li>
    <?php 
    if (isset($_SESSION['UID']))
      {
          ?>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      Booking </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="BookingSearch.php">Search Booking</a>
        <a class="dropdown-item" href="BookingCancel.php">Cancel Booking</a>
        <a class="dropdown-item" href="myBookings.php">My Bookings</a>

 
      </div>
    </li>
<?php
}
?>



    <li class="nav-item">
      <a class="nav-link" href="cars.php">Vehicles</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="Deals.php">Deals</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Faq.php">FAQ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="location.php">Location</a>
    </li>
    <?php 
    if (!isset($_SESSION['UID']))
      {
          ?>
          <li class="nav-item">
          <a class="nav-link btnBack" style="margin-right: 7px;" href="register.php">Sign up</a>
          </li>
          <li class="nav-item">
          <a class="nav-link btnBack" href="login.php">Login</a>
          </li>
        
        <?php
     }
     else if (isset($_SESSION['UID']))
     {
       ?>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <?php echo "Hi,".$_SESSION['FirstName']; ?></a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="profile.php?action=profile">Profile</a>
        <a class="dropdown-item" href="profile_edit.php">Edit Profile</a>
        <a class="dropdown-item" href="feedback.php">Feedback</a>
        <a class="dropdown-item" href="reviews.php">Reviews</a>
        
        <div role="separator" class="dropdown-divider"></div>
        <a class="dropdown-item" href="php_dao/userdao.php?action=logout">Logout</a>
      </div>
    </li>

    <?php
     }
    ?>


    
    
  </ul>
</nav>
    </div>
    </div>
    </div>
