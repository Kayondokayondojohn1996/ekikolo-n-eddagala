 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactus</title>
    <link rel="stylesheet" href="Aboutus.css">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="style.css" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="diseasesearch.css">
   
</head>
<body>
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
  
    <div class="fl_left">
      <ul class="nospace">
        <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
      
        <li><a href="login.php">Login</a></li>
        <li><a href="registration.php">Register</a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +256 73 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@prescription.com</li>
      </ul>
    </div>
      </div>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
        <div id="logo" class="fl_left">
      <h1><a href="index.html">EKIKOLO N'EDDAGALA</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="Aboutus.php">About</a></li>
        
        <li><a href="pages/gallery.html">Gallery</a></li>
  
        <li><a href="admin.php">Admin</a>
          
    </nav>
      </header>
</div>


    <div class="wrapper bgded overlay" style="background-image:url('img/4.jpg');">
  <div id="pageintro" class="hoc clear"> 
   
    <article>
     
      <h3 class="heading">EKIKOLO NE'DDAGALA </h3>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="#">Contact us</a></li>
          
        </ul>
      </footer>
    </article>
      </div>
</div>
</div>



<div class="container">
  <form action="action_page.php" post="diseasesearch.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="language">Language</label>
    <select id="language" name="language">
      <option value="Luganda">Luganda</option>
      <option value="English">English</option>
      <option value="French">French</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>



<!-- Footer Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('img/9.jpg');"> 
    <div class="wrapper row4">
    <footer id="footer" class="hoc clear"> 
            <div class="one_quarter first">
        <h6 class="heading">Find Us</h6>
        <ul class="nospace btmspace-30 linklist contact">
          <li><i class="fa fa-map-marker"></i>
            <address>
            kampala Rd  Plot65, Ndeeba, 
            </address>
          </li>
          <li><i class="fa fa-phone"></i> +256 73 456 7890</li>
          <li><i class="fa fa-envelope-o"></i> info@prescriptions.com</li>
        </ul>
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading">Services</h6>
        <ul class="nospace linklist">
          <li><a href="#">Herbal Medicine</a></li>
          <li><a href="#">Prescriptions</a></li>
          <li><a href="#">Herbal Research</a></li>
          <li><a href="#">Counselling</a></li>
          <li><a href="#">Treatment</a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading">Infections</h6>
        <ul class="nospace linklist">
          <li><a href="#">Skin Infections</a></li>
          <li><a href="#">Ulcers</a></li>
          <li><a href="#">Man Power</a></li>
          <li><a href="#">Presure</a></li>
          <li><a href="#">Pneamonia</a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading">Newsletter</h6>
        <p class="nospace btmspace-15">Subscribe to our Newsletter for Updates. To get in touch with Expert</p>
        <form method="post" action="#">
          <fieldset>
            <legend>Newsletter:</legend>
            <input class="btmspace-15" type="text" value="" placeholder="Name">
            <input class="btmspace-15" type="text" value="" placeholder="Email">
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>
      </div>
          </footer>
  </div>
        <div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
            <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">EKIKOLO N'EDDAGALA</a></p>
      <p class="fl_right">Designed by <a target="_blank" href="#" >John</a></p>
          </div>
  </div>
  </div>
<!-- End Footer Background Image Wrapper -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>

<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>