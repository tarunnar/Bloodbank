<?php


$link = mysqli_connect("localhost", "root", "tkn21560", "project");
if($link == false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}
$BBID = $_POST['bbid'];
$BGROUP = $_POST ['bgroup'];
// Attempt select query execution with order by clause
$sql = "SELECT * FROM bloodstore where bbid='$BBID' and bgroup='$BGROUP'";

if($result = mysqli_query($link, $sql)){

    if(mysqli_num_rows($result) > 0){

        echo "<table border=1 cellpadding='5' align='center'>";

            echo "<tr>";

                echo "<th>BBID</th>";

                echo "<th>BGROUP</th>";

                echo "<th>AMOUNT</th>";

               

            echo "</tr>";

        while($row = mysqli_fetch_array($result)){

            echo "<tr>";

                echo "<td>" . $row['bbid'] . "</td>";
                echo "<td>" . $row['bgroup'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        // Close result set

        mysqli_free_result($result);

    } else{

        echo "No records matching your query were found.";

    }

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
mysqli_close($link);
?>
