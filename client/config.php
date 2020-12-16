<?php
    $dbhost ='localhost';
    $dbuser ='root';
    $dbpass ='';
    $dbname ='tugas_pabo';
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if ($mysqli->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

  /*  $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
    }*/
?>