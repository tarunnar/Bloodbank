<?php

$link = mysqli_connect("localhost", "root", "tkn21560", "project");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$BBID=$_POST['bbid'];
$BGROUP=$_POST['bgroup'];
$AMOUNT=$_POST['amount'];

$sql1 = "UPDATE bloodstore SET amount=amount+$AMOUNT where (bbid=$BBID and bgroup='$BGROUP')";
$res=mysqli_query($link, $sql1);
if(!$res)
{
echo "khoon na diya";
}
else 
{
echo "khoon  de diya";
}
?>

