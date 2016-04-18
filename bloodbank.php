<?php
include_once('connection.php');
if (isset($_POST['SUBMIT']));
{
$BBID = $_POST['bbid'];
$BBNAME = $_POST['bbname'];
$PHONE = $_POST['phone'];
$EMAIL = $_POST['email'];
$res=mysql_query("insert into bloodbank (bbid,bbname,phone,email) values ('$BBID','$BBNAME','$PHONE','$EMAIL')");
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
</style>
        </head>
<body>
<ul>
  <li><a class="active" href="bloodbank.php">Home</a></li>
  <li><a href="donor.php">Donor</a></li>
  <li><a href="receiver.php">Receiver</a></li>
  <li><a href="employee.php">Employee</a></li>
  <li><a href="index.php">Admin login</a></li>
  <li><a href="searchbybbidform.php">Blood Bank Query</a></li>
  <li><a href="print.php">Showall query</a></li>
  <li><a href="index.php">logout</a></li>

</ul>
 <body style='background-color:#008887;'>
<table style='background-color:#ffffff;border-spacing:0px;width:760px;max-width:760px;margin:20px auto 10px auto;border-width:3px;border-style:solid;border-color:#000066;'>  <tr>    <td style='vertical-align:top;text-align:center;padding:5px 5px 5px 5px;'><br>       <span style='position:relative;font-family:Arial;color:#000099;font-size:28px;font-weight:bold;font-style:normal;text-decoration:none;' id=titleid1>BLOOD BANK INSERT FORM</span>    </td>  </tr>  <tr><td style='padding:10px;'>      <table style='border-spacing:1px;width:99%;vertical-align:top;margin: 0 auto;border-collapse:collapse;'>

<form  action="" method="post">
<form  action="" method="post">
<p>BBID: <input type="text" name="bbid" /> </p>
<p>BBNAME: <input type="text" name="bbname" /> </p>
<p>PHONE: <input type="text" name="phone" /> </p>
<p>EMAIL: <input type="text" name="email" /> </p>
<p>SUBMIT: <input type="submit" name="submit" value="submit" /> </p>
</body>
</html>



