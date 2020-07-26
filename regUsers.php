<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registration.css">
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
     
      <li><a href="diseasesearch.php" class="cool">PRESCRIPTIONS & DISEASES</a></li>
        
  
        <li><a href="index.html">Logout</a>
          
    </nav>
      </header>
</div>

   
        <?php
                    $connection = mysqli_connect('localhost','root','','ekikolo_ne_ddagala');
                  
                    $sql = "SELECT * FROM usertable";
                  
                    
                    $result = mysqli_query($connection,$sql);

?>

   
<form action ="regUser.php"method ="post">

<table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>NIN</th>
                        
                        <th>Address</th>
                        <th>Mail</th>
                        <th>Phone Number</th>
                        <th>Status</th>
                        <th>Language</th>
                    </tr>
                    <?php while($row = mysqli_fetch_object($result)) { ?>
                    <tr>
                        <td><?php echo $row->name ?></td>
                        <td><?php echo $row->nin ?></td>
                        <td><?php echo $row->address ?></td>
                        <td><?php echo $row->mail ?></td>
                        <td><?php echo $row->phone_number ?></td>
                        
                        <td><?php echo $row->radioD ?></td>
                        <td><?php echo $row->language ?></td>
                    </tr>
                    <?php }?>
                    </table>

</form> 
</div>
</div>

</body>
</html>