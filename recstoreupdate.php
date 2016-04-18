<?php

$link = mysqli_connect("localhost", "root", "tkn21560", "project");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo "m chala";
$BBID=$_POST['bbid'];
$BGROUP=$_POST['bgroup'];
$AMOUNT=$_POST['amount'];
$sql = "SELECT * FROM bloodstore where (bbid='$BBID' AND bgroup='$BGROUP') ";
$res =mysqli_query($link, $sql);
$sak=mysqli_fetch_array($res);
echo "m yahan pahuncha";
$var1=$sak['amount'];

echo $var1;
$lok=$var1-$AMOUNT;
echo $lok;
if($lok>0){
$sql1 = "UPDATE bloodstore SET amount=amount-$AMOUNT where (bbid=$BBID and bgroup='$BGROUP')";
$res1=mysqli_query($link, $sql1);
echo "if me query chali";
}
else
{
echo "itna khoon na h";
}
?>
