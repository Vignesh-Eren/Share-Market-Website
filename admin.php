<?php
include_once 'connection09.php';
$result = mysqli_query($conn,"SELECT * FROM help");
?>

<!DOCTYPE html>
<html>
<head>
  <title>SHARE MARKET - ADMIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">SHARE MARKET - ADMIN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">CUSTOMER REQUESTS<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="admin2.php">CUSTOMERS LIST</a>
      </li>

    </ul>
  </div>
</nav>


<!-- TradingView BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "description": "SENSEX",
      "proName": "BSE:SENSEX"
    },
    {
      "description": "ADANIPORTS",
      "proName": "BSE:ADANIPORTS"
    },
    {
      "description": "ASIANPAINT",
      "proName": "BSE:ASIANPAINT"
    },
    {
      "description": "AXISBANK",
      "proName": "BSE:AXISBANK"
    },
    {
      "description": "BAJAJ-AUTO",
      "proName": "BSE:BAJAJ_AUTO"
    },
    {
      "description": "BAJAJFINSV",
      "proName": "BSE:BAJAJFINSV"
    },
    {
      "description": "BHARTIARTL",
      "proName": "BSE:BHARTIARTL"
    },
    {
      "description": "BPCL",
      "proName": "BSE:BPCL"
    },
    {
      "description": "BRITANNIA",
      "proName": "BSE:BRITANNIA"
    },
    {
      "description": "CIPLA",
      "proName": "BSE:CIPLA"
    },
    {
      "description": "COALINDIA",
      "proName": "BSE:COALINDIA"
    },
    {
      "description": "DIVISLAB",
      "proName": "BSE:DIVISLAB"
    },
    {
      "description": "DRREDDY",
      "proName": "BSE:DRREDDY"
    },
    {
      "description": "EICHERMOT",
      "proName": "BSE:EICHERMOT"
    },
    {
      "description": "GAIL",
      "proName": "BSE:GAIL"
    },
    {
      "description": "GRASIM",
      "proName": "BSE:GRASIM"
    },
    {
      "description": "HCLTECH",
      "proName": "BSE:HCLTECH"
    },
    {
      "description": "HDFC",
      "proName": "BSE:HDFC"
    },
    {
      "description": "HDFC BANK",
      "proName": "BSE:HDFCBANK"
    },
    {
      "description": "HDFC LIFE",
      "proName": "BSE:HDFCLIFE"
    },
    {
      "description": "HEROMOTOCO",
      "proName": "BSE:HEROMOTOCO"
    },
    {
      "description": "HINDALCO",
      "proName": "BSE:HINDALCO"
    },
    {
      "description": "HINDUNILVR",
      "proName": "BSE:HINDUNILVR"
    },
    {
      "description": "ICICI BANK",
      "proName": "BSE:ICICIBANK"
    },
    {
      "description": "INDUSINDBK",
      "proName": "BSE:INDUSINDBK"
    },
    {
      "description": "INFY",
      "proName": "BSE:INFY"
    },
    {
      "description": "IOC",
      "proName": "BSE:IOC"
    },
    {
      "description": "ITC",
      "proName": "BSE:ITC"
    },
    {
      "description": "JSW STEEL",
      "proName": "BSE:JSWSTEEL"
    },
    {
      "description": "KOTAKBANK",
      "proName": "BSE:KOTAKBANK"
    },
    {
      "description": "LT",
      "proName": "BSE:LT"
    },
    {
      "description": "M&M",
      "proName": "BSE:M_M"
    },
    {
      "description": "MARUTI",
      "proName": "BSE:MARUTI"
    },
    {
      "description": "NESTLEIND",
      "proName": "BSE:NESTLEIND"
    },
    {
      "description": "NTPC",
      "proName": "BSE:NTPC"
    },
    {
      "description": "ONGC",
      "proName": "BSE:ONGC"
    },
    {
      "description": "POWERGRID",
      "proName": "BSE:POWERGRID"
    },
    {
      "description": "RELIANCE",
      "proName": "BSE:RELIANCE"
    },
    {
      "description": "SBILIFE",
      "proName": "BSE:SBILIFE"
    },
    {
      "description": "SBIN",
      "proName": "BSE:SBIN"
    },
    {
      "description": "SHREECEM",
      "proName": "BSE:SHREECEM"
    },
    {
      "description": "SUNPHARMA",
      "proName": "BSE:SUNPHARMA"
    },
    {
      "description": "TATA MOTORS",
      "proName": "BSE:TATAMOTORS"
    },
    {
      "description": "TATA STEEL",
      "proName": "BSE:TATASTEEL"
    },
    {
      "description": "TCS",
      "proName": "BSE:TCS"
    },
    {
      "description": "TECHM",
      "proName": "BSE:TECHM"
    },
    {
      "description": "TITAN",
      "proName": "BSE:TITAN"
    },
    {
      "description": "ULTRACEMCO",
      "proName": "BSE:ULTRACEMCO"
    },
    {
      "description": "UPL",
      "proName": "BSE:UPL"
    },
    {
      "description": "WIPRO",
      "proName": "BSE:WIPRO"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "in"
}
  </script>
</div>
<!-- TradingView END -->

<section>
	<div class="container">
<div class="panel panel-default">
<div class="panel-body"></div>

<?php
if (mysqli_num_rows($result) > 0) {
?>
<div class="container">
<p>&nbsp;</p>
<p>&nbsp;</p>
<h1><b><CENTER>CUSTOMERS REQUESTS</b></h1>
<p>&nbsp;</p>
<div class="panel panel-default">
<div class="panel-body"> </div>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">MOBILE</th>
	  <th scope="col">E-MAIL</th>
      <th scope="col">UNIQUE ID</th>
	  <th scope="col">COMMENT</th>
    </tr>
  </thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["mobile"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["vrn"]; ?></td>
    <td><?php echo $row["comment"]; ?></td>
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


</section>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

		<footer>
		<p class="p-3 bg-dark text-white text-center">
		© 2021 ShareMarket All Rights Reserved</p>
		</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
