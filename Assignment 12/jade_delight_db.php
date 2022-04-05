<?php
$server = "localhost";// your server
$userid = "ufeobkyhemkzs"; // your user id
$pw = "wedbpass"; // your pw
$db= "dbmnwqnxhpg3a8"; // your database

// Create connection
$conn = new mysqli($server, $userid, $pw );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully<br>";

//select the database
$conn->select_db($db);

//run a query
$sql = "SELECT * FROM pets";
$result = $conn->query($sql);

//get results
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        echo $row["name"]. " " . $row["breed"]. "  ". $row["age"]. "<br>";
    }
}
else
    echo "no results";

//close the connection
$conn->close();
?>