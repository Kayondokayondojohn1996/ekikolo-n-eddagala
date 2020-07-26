<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registration.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
  

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
        <div id="logo" class="fl_left">
      <h1><a href="index.html">EKIKOLO N'EDDAGALA</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
      <li class="active"><a href="#">ADD PRESCRIPTIONS</a>
      <li><a href="regUsers.php">REGISTERED USERS</a>
      <li><a href="diseasesearch.php" class="cool">PRESCRIPTIONS & DISEASES</a></li>
        
  
        <li><a href="admin.php">Logout</a>
          
    </nav>
      </header>
</div>
<center>
<br> <br> <br> <br> <br> <br> <br> 
<form action ="addherbback.php"method ="post">

Disease : <input type="text" name="disease" /><br><br>
Disease Prescription : <textarea name="diseaseA" ></textarea><br><br>

</p>
<input type="submit"  value="ADD"  class ="button">
</form> 
</div>
</div>
</center>
</body>
</html>