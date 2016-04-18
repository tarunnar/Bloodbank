<?php

/*

Attempt MySQL server connection. Assuming you are running MySQL

server with default setting (user 'root' with no password)

*/

$link = mysqli_connect("localhost", "root", "tkn21560", "project");

 

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

// Attempt select query execution with order by clause

$sql = "SELECT * FROM donor  ";

if($result = mysqli_query($link, $sql)){

    if(mysqli_num_rows($result) > 0){

        echo "<table border=1 cellpadding='5' align='center'>";

            echo "<tr>";

                echo "<th>BBID</th>";

                

                echo "<th>PHONE</th>";

                echo "<th>DID</th>";
                echo "<th>DNAME</th>";
                 echo "<th>BGROUP</th>";
                  echo "<th>EMAIL</th>";

            echo "</tr>";

        while($row = mysqli_fetch_array($result)){

            echo "<tr>";

                echo "<td>" . $row['bbid'] . "</td>";

                echo "<td>" . $row['phone'] . "</td>";

                echo "<td>" . $row['did'] . "</td>";

                echo "<td>" . $row['dname'] . "</td>";
                                echo "<td>" . $row['bgroup'] . "</td>";
                                   echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['bamount'] . "</td>";

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

 

// Close connection

mysqli_close($link);

?>
