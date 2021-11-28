<?php
include 'db_connect.php';
$conn = connect();
$resp = new stdClass();
$subjects = array();
$descriptions = array();
$dates = array();

$email = $_REQUEST['email'];
$query = "SELECT * from user where email='$email'";
$result = $conn->query($query);
if ($result->num_rows === 0) {
    echo json_encode($resp);
} else {
    $id = $result->fetch_object()->id;
    $query = "SELECT * from feedback";
    $result = $conn->query($query);
    while (true) {
        $row = $result->fetch_object();
        if ($row) {
            $subject = $row->Subject;
            $description = $row->Description;
            $date = $row->UserSubmission;
            array_push($subjects, $subject);
            array_push($descriptions, $description);
            array_push($dates, $date);
        } else {
            break;
        }
    }
    $resp->subs = $subjects;
    $resp->descs = $descriptions;
    $resp->dates = $dates;

    $json_resp = json_encode($resp);
    echo $json_resp;
}

disconnect($conn);
