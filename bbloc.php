<?php
include_once('connection.php');
if (isset($_POST['SUBMIT']));
{
$BBID = $_POST['bbid'];
$CITY = $_POST['city'];
$STATE = $_POST['state'];
$HOMELOC = $_POST['homeloc'];
$res=mysql_query("insert into bbloc (bbid,city,state,homeloc) values ('$BBID','$CITY','$STATE','$HOMELOC')");
if($res)
{
echo "insert hua";
}
else 
echo "inset nahin hua";
}
?>
<!DOCTYPE HTML>
<html>
        <head>
        </head>
<body>
<form  action="" method="post">
<p>BBID: <input type="text" name="bbid" /> </p>
<p>CITY: <input type="text" name="city" /> </p>
<p>STATE: <input type="text" name="state" /> </p>
<p>HOMELOC: <input type="text" name="homeloc" /> </p>
<p>SUBMIT: <input type="submit" name="submit" value="submit" /> </p>
</body>
</html>


