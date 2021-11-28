<?php
function connect()
{
    $dbhost = "localhost:3306";
    $dbuser = "id18021218_root";
    $dbpass = "ug5U[OHA?z8GD^|R";
    $db = "id18021218_temp";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Failed to connect." . $conn->error);

    return $conn;
}

function disconnect($conn)
{
    $conn->close();
}
