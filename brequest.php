<?php
include_once('connection.php');
if (isset($_POST['SUBMIT']));
{
$REQID = $_POST['reqid'];
$BBID = $_POST['bbid'];

$res=mysql_query("insert into brequest (reqid,bbid) values ('$REQID','$BBID')");
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
<p>REQID: <input type="text" name="reqid" /> </p>
<p>BBID: <input type="text" name="bbid" /> </p>
<p>SUBMIT: <input type="submit" name="submit" value="submit" /> </p>
</body>
</html>


