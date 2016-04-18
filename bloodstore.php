<?php
include_once('connection.php');
if (isset($_POST['SUBMIT']));
{
$BBID = $_POST['bbid'];
$BGROUP = $_POST['bgroup'];
$AMOUNT = $_POST['amount'];

$res=mysql_query("insert into bloodstore (bbid,bgroup,amount) values ('$BBID','$BGROUP','$AMOUNT')");
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
              <IMG STYLE="position:absolute; TOP:35px; LEFT:170px; WIDTH:50px; HEIGHT:50px" SRC="blood.png">
       
        </head>
<body>
 <body style='background-color:#008888;'>
<table style='background-color:#ffffff;border-spacing:0px;width:760px;max-width:760px;margin:20px auto 10px auto;border-width:3px;border-style:solid;border-color:#000066;'>  <tr>    <td style='vertical-align:top;text-align:center;padding:5px 5px 5px 5px;'><br>       <span style='position:relative;font-family:Arial;color:#000099;font-size:28px;font-weight:bold;font-style:normal;text-decoration:none;' id=titleid1>BLOOD STORE START</span>    </td>  </tr>  <tr><td style='padding:10px;'>      <table style='border-spacing:1px;width:99%;vertical-align:top;margin: 0 auto;border-collapse:collapse;'>
<form  action="" method="post">
<form  action="" method="post">
<p>BBID: <input type="text" name="bbid" /> </p>
<p>BGROUP: <input type="text" name="bgroup" /> </p>
<p>AMOUNT: <input type="text" name="amount" /> </p>
<p>SUBMIT: <input type="submit" name="submit" value="submit" /> </p>
</body>
</html>


