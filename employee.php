<?php
include_once('connection.php');
if (isset($_POST['submit']));
{
$BBID = $_POST['bbdid'];
$PHONE = $_POST['phone'];
$EID = $_POST['eid'];
$DESIGNATION = $_POST['designation'];
$EMAIL = $_POST['email'];
$res=mysql_query("insert into employee (bbid,phone,eid,designation,email) values ('$BBID','$PHONE','$EID','$DESIGNATION','$EMAIL')");
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
          <title>employee </title>
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
margin-left:30px;
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
</ul>
<div class="posi">
<ul>
  <li><a class="active" href="emploc.php">Add location</a></li>
  <li><a href="availform.php">Check Availability</a></li>
 
  
</ul>
</div>
<div class="box" style='background-color:#008888;'>
<table style='background-color:#ffffff;border-spacing:0px;width:760px;max-width:760px;margin:20px auto 10px auto;border-width:3px;border-style:solid;border-color:#000066;'>  <tr>    <td style='vertical-align:top;text-align:center;padding:5px 5px 5px 5px;'><br>       <span style='position:relative;font-family:Arial;color:#000099;font-size:28px;font-weight:bold;font-style:normal;text-decoration:none;' id=titleid1>Employee Data</span>    </td>  </tr>  <tr><td style='padding:10px;'>      <table style='border-spacing:1px;width:99%;vertical-align:top;margin: 0 auto;border-collapse:collapse;'>
<form  action="" method="post">
<p>BBID: <input type="text" name="bbid" /> </p>
<p>PHONE: <input type="text" name="phone" /> </p>
<p>EID: <input type="text" name="eid" /> </p>
<p>DESIGNATION: <input type="text" name="designation" /> </p>
<p>EMAIL: <input type="text" name="email" /> </p>
<p>SUBMIT: <input type="submit" name="submit" value="submit" /> </p>
</body>
</html>


