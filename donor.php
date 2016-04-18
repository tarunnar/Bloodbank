<!DOCTYPE HTML>
<?php
include_once('connection.php');
if (isset($_POST['SUBMIT']));
{
$BBID = $_POST['bbid'];
$PHONE = $_POST['phone'];
$DID = $_POST['did'];
$DNAME = $_POST['dname'];
$BGROUP = $_POST['bgroup'];
$EMAIL = $_POST['email'];
$BAMOUNT = $_POST['bamount'];
$res=mysql_query("insert into donor (bbid,phone,did,dname,bgroup,email,bamount) values ('$BBID','$PHONE','$DID','$DNAME','$BGROUP','$EMAIL','$BAMOUNT')");
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
        <title>blood donation  </title>
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
 </div>         </head>
<body>
<ul>
  <li><a class="active" href="bloodbank.php">Home</a></li>
  <li><a href="donor.php">Donor</a></li>
  <li><a href="receiver.php">Receiver</a></li>
  <li><a href="admin.php">Admin</a></li>
 <li><a href="employee.php">Employee</a></li>

</ul>
<div class="posi">
<ul>
  <li><a class="active" href="donorloc.php">Add location</a></li>
  <li><a href="availform.php">Check Availability</a></li>
   <li><a href="donorstoreupdateform.php">donate Blood form Data</a></li>
   <li><a href="donorall.php">showall donor</a></li>

</ul>
</div>
<div class="box" style='background-color:#008888;'>
<table style='background-color:#ffffff;border-spacing:0px;width:760px;max-width:760px;margin:20px auto 10px auto;border-width:3px;border-style:solid;border-color:#000066;'>  <tr>    <td style='vertical-align:top;text-align:center;padding:5px 5px 5px 5px;'><br>       <span style='position:relative;font-family:Arial;color:#000099;font-size:28px;font-weight:bold;font-style:normal;text-decoration:none;' id=titleid1>Donor Registration Form</span>    </td>  </tr>  <tr><td style='padding:10px;'>      <table style='border-spacing:1px;width:99%;vertical-align:top;margin: 0 auto;border-collapse:collapse;'>
<form  action="" method="post">
<form  action="" method="post">
<p>BBID: <input type="text" name="bbid" /> </p>
<p>PHONE: <input type="text" name="phone" /> </p>
<p>DID: <input type="text" name="did" /> </p>
<p>DNAME: <input type="text" name="dname" /> </p>
<p>BGROUP: <input type="text" name="bgroup" /> </p>
<p>EMAIL: <input type="text" name="email" /> </p>
<p>BAMOUNT: <input type="text" name="bamount" /> </p>

<p>SUBMIT: <input type="submit" name="submit" value="submit" /> </p>
</body>
</html>


