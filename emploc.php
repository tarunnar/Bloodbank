<?php
include_once('connection.php');
if (isset($_POST['SUBMIT']));
{
$EID = $_POST['eid'];
$CITY = $_POST['city'];
$STATE = $_POST['state'];
$HOMELOC = $_POST['homeloc'];

$res=mysql_query("insert into emploc (eid,city,state,homeloc) values ('$EID','$CITY','$STATE','$HOMELOC')");
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
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}



li a:hover {
    background-color: #111;
}
.posi{
width:10%;
float: left;
background-color:#660000;

}
.box{
margin-top:-20px;
}
.img img{
margin-top:55px;
margin-left:03px;
}
</style>
<div class="img"><IMG STYLE="position:absolute; TOP:35px; LEFT:170px; WIDTH:50px; HEIGHT:50px" SRC="blood.png">
 </div> 
        </head>
<body>
<ul>
  <li><a class="active" href="bloodbank.php">Home</a></li>
  <li><a href="donor.php">Donor</a></li>
  <li><a href="receiver.php">Receiver</a></li>
  <li><a href="admin.php">Admin</a></li>
    <li><a href="employee.php">Employee</a></li>

</ul>
<div class="posi">
</div>
<div class="box" style='background-color:#008888;'>
<table style='background-color:#ffffff;border-spacing:0px;width:760px;max-width:760px;margin:20px auto 10px auto;border-width:3px;border-style:solid;border-color:#000066;'>  <tr>    <td style='vertical-align:top;text-align:center;padding:5px 5px 5px 5px;'><br>       <span style='position:relative;font-family:Arial;color:#000099;font-size:28px;font-weight:bold;font-style:normal;text-decoration:none;' id=titleid1>Enter Emloyee Location</span>    </td>  </tr>  <tr><td style='padding:10px;'>      <table style='border-spacing:1px;width:99%;vertical-align:top;margin: 0 auto;border-collapse:collapse;'>
<form  action="" method="post">
<p>EID: <input type="text" name="eid" /> </p>
<p>CITY: <input type="text" name="city" /> </p>
<p>STATE: <input type="text" name="state" /> </p>
<p>HOMELOC: <input type="text" name="homeloc" /> </p>

<p>SUBMIT: <input type="submit" name="submit" value="submit" /> </p>
</body>
</html>


