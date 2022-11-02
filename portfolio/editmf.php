<?php

include('config.php');

if (isset($_POST['submit']))
{
$id=$_POST['id'];
$name=mysqli_real_escape_string($db, $_POST['product_name']);
$price=mysqli_real_escape_string($db, $_POST['price']);
$quant=mysqli_real_escape_string($db, $_POST['quantity']);
$tot=mysqli_real_escape_string($db, $_POST['tot']);
$date=mysqli_real_escape_string($db, $_POST['date']);

mysqli_query($db,"UPDATE fund SET product_name='$name', price='$price' ,quantity='$quant',tot='$tot',date='$date' WHERE product_id='$id'");

header("Location:mf.php");
}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($db,"SELECT * FROM fund WHERE product_id=".$_GET['id']);

$row = mysqli_fetch_array($result);

if($row)
{

$id = $row['product_id'];
$name = $row['product_name'];
$price = $row['price'];
$quant=$row['quantity'];
$tot=$row['tot'];
$date=$row['date'];

}
else
{
echo "No results!";
}
}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Edit Item</title>
</head>
<body>



<form action="" method="post" action="editmf.php">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<table border="1">
<tr>
<td colspan="2"><b><font color='Red'>Edit Mutual Fund </font></b></td>
</tr>
<tr>
<td width="179"><b><font >Scheme<em>*</em></font></b></td>
<td><label>
<input type="text" name="product_name" value="<?php echo $name; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Inv Price<em>*</em></font></b></td>
<td><label>
<input type="text" name="price" value="<?php echo $price ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Quantity<em>*</em></font></b></td>
<td><label>
<input type="text" name="quantity" value="<?php echo $quant;?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Value<em>*</em></font></b></td>
<td><label>
<input type="text" name="tot" value="<?php echo $tot;?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Date<em>*</em></font></b></td>
<td><label>
<input type="date" name="date" value="<?php echo $date;?>" />
</label></td>
</tr>

<tr align="Right">
<td colspan="2"><label>
<input type="submit" name="submit" value="Edit Records">
</label></td>
</tr>
</table>
</form>
</body>
</html>
