<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Portfolio Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.php"><img src="images/SM2.jpg" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="index.php" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>

                            </li>



                            <li>
                                <a href="table.php" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Stocks</span></a>

                            </li>
                            <li>
                                <a href="mf.php" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Mutual Funds</span></a>

                            </li>
							<li>
                                <a href="comd.php" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Commodities</span></a>

                            </li>
							<li>
                                <a href="cur.php" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Currency</span></a>

                            </li>
							<li class="active">
                                <a href="other.php" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Others</span></a>

                            </li>
                            

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->



        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>

                    <!-- profile info & task notification-->
                    <div class="col-md-6 col-sm-4 clearfix">

                    </div>
                </div>
            </div>

            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>other</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']; ?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">

                               <a class="dropdown-item" href="index.php?logout='1'">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div>
<p>&nbsp;</p>
     <h1 style="text-align:center"><b>ADD OTHER INVESTMENT HERE</b></h1>
            <p>&nbsp;</p>
			<body>
<form method="POST" class="form-inline" action="addother.php">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="product_name">

  </div>
  <div class="form-group">
    <label for="name">Inv Price</label>
    <input type="text" class="form-control" name="price">
  </div>
  <div class="form-group">
        <label for="name">Quantity</label>
        <input type="number" name="quant" id="quant" min="1" max="">
    </div>
	<div class="form-group">
        <label for="name">Inv Date</label>
        <input type="date" name="date" id="date">
    </div>
  <button type="submit" class="btn btn-default" name="add">Add</button>
  
</form>




</body>
            <div class="main-content-inner">
                <div class="row">

                    <!-- Contextual Classes start -->
                    <div class="col-lg-6 mt-5">
                        
                            
                                
                                
                                    
                                        
			<?php
               $conn = new mysqli("localhost","root","","portfolio");
               
			   $query = "SELECT SUM(tot) AS sum FROM `other` WHERE username='".$_SESSION['username']."'";
               $query_result = mysqli_query($conn , $query);
			   while($row = mysqli_fetch_assoc($query_result)){
				   $output = "Total Other Investments : ₹"." ".$row['sum'];
			   }
			   
			   $sql = "SELECT * FROM other";
               $result = $conn->query($sql);
					$count=0;
               if ($result -> num_rows >  0) {

                 while ($row = $result->fetch_assoc())
				 {
					  $count=$count+1;
                   ?>


                   
            <?php

                 }
               }

            ?>

                                            </tbody>
                                        </table>

                                    
                                
                           
                        
                        <div>


</div>
                    </div>
					
					
					
					
					<?php
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM other WHERE username='".$_SESSION['username']."'");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>


					<div class="container">
<p>&nbsp;</p>
<p>&nbsp;</p>
<center>
<button style="font-size:30px" type="button" class="btn btn-success"><?php 
					       echo $output;
				    ?></button>
</center>
<p>&nbsp;</p>
<h1><b><CENTER>PORTFOLIO - OTHER INVESTMENTS</b></h1>
<p>&nbsp;</p>
<div class="panel panel-default">
<div class="panel-body"> </div>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      
      <th scope="col">NAME</th>
      <th scope="col">INV PRICE</th>
      <th scope="col">QUANTITY</th>
	  <th scope="col">VALUE ( ₹ )</th>
	  <th scope="col">INV DATE</th>
	  <th scope="col">ACTION</th>
    </tr>
  </thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    
    <td><?php echo $row["product_name"]; ?></td>
    <td><?php echo $row["price"]; ?></td>
    <td><?php echo $row["quantity"]; ?></td>
	<td><?php echo $row["tot"]; ?></td>
	<td><?php echo $row["date"]; ?></td>
    <td><a href="up"Edit></a><a href="editother.php?id=<?php echo $row["product_id"] ?>"><button type="button" class="btn btn-outline-warning">Edit</button></a> <a href="up"Edit></a><a href="deleteother.php?id=<?php echo $row["product_id"] ?>"><button type="button" class="btn btn-outline-danger">Delete</button></a></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</div>
</div>
                    <!-- Contextual Classes end 
					
					

        <!-- main content area end -->

<html>
<head>
	<title>Add Item</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>

</html>







    </div>
    <!-- page container area end -->
    <!-- offset area start -->

    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
