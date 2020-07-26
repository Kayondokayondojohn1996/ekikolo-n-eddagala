<!DOCTYPE html>
<html lang="en">
<head>
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="diseasesearch.css">
</head>
<body>


<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
        <div id="logo" class="fl_left">
      <h1><a href="index.html">EKIKOLO N'EDDAGALA</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="Aboutus.php">About</a></li>
        <li><a href="contactus.php">Contact</a></li>
        <li><a href="pages/gallery.html">Gallery</a></li>
  
        <li><a href="index.html">Logout</a>
       
          
    </nav>
      </header>
</div>

<?php
                    $connection = mysqli_connect('localhost','root','','ekikolo_ne_ddagala');
                    if(isset($_POST['search'])) {
                        $searchKey = $_POST['search'];
                        $sql = "SELECT * FROM herbs WHERE herb LIKE '%$searchKey%'";
                    }else{
                    $sql = "SELECT * FROM herbs";
                    $searchKey ="";
                    }
                    $result = mysqli_query($connection,$sql);

?>
<div class ="results">
<form action="" method="POST" class= "search">

<div class ="buttons">
    <div class ="button1">
    <input type="text" name="search" placeholder="what is bothering your health?"/>
</div>
<div class ="button1">
    <button class ="click" name ="reset">search</button>
</div>
</div>
                </form>
<div class="content">

<!------------------------------------------------------------>
<table class="table table-bordered">
                    <tr>
                        <th>Herb</th>
                        <th>Prescription</th>
                        <th></th>
                    </tr>
                    <?php while($row = mysqli_fetch_object($result)) { ?>
                    <tr>
                        <td><?php echo $row->herb ?></td>
                        <td><?php echo $row->prescription ?></td>
                    </tr>
                    <?php }?>
                    </table>
<!---------------------------------------------------------------------> 
                    </div>                   
</div>

<div class="wrapper row3">
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
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
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>

</body>
</html>