<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <title>Confirm Feed back</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="shortcut icon" type="image/png" href="images/icon.png" />
</head>

<body>
    <!--––header––-->
    <div class="head">
        <?php include 'include/header.php'; ?>
        <h1 id="headText">Feedback</h1>
    </div>
    <hr>
    <!--––Links in the left––-->
    <div class="links">
        <?php include 'include/links.php'; ?>
    </div>

    <div class="content">
        <!-- <img class="thanks" src="images/thanks.png" alt="Thank you!" /> -->
        <?php

        include 'db_connct.php';
        $conn = connect();
        $email = $_POST["email"];
        $subject = $_POST["title"];
        $description = $_POST["description"];
        $fname = $_POST['fName'];
        $lname = $_POST['lName'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $area = $_POST['area'];
        $offer = $_POST['offer'];
        $mailingList = $offer === "on" ? 1 : 0;
        $query = "Select Count(*) as c from user1";
        $len = 1;
        $result = $conn->query($query);
        if ($result) {
            $len = $len + $result->fetch_object()->c;
        }
        $query = "Select * from user1 WHERE user1.email=\"$email\"";
        $result = $conn->query($query);
        $insert = "";
        if ($result->num_rows !== 0) {
            $id = $result->fetch_object()->id;
            $insert = "INSERT INTO feedback(Subject, Description, UserSubmission) VALUES('$subject', '$description', $id)";
            $conn->query($insert);
            echo "<h1>the User exist and the Feedback was added successfully </h1>";
        } else {
            $insertUser = "INSERT INTO user1(email, fName, lName, phone, city, area, id, gender, mailingList) VALUES
    ('$email','$fname', '$lname', '$phone','$city', '$area' , $len, '$gender' , $mailingList)";
            $bol = $conn->query($insertUser);
            if ($bol === true) {
                $last_id = $conn->insert_id;
                echo "<h1>the User was added successfully </h1>";
            } else {
                echo "<h1>the $insertUser was not added successfully because: $conn->error </h1>";
            }
            $insert = "INSERT INTO feedback(Subject, Description, UserSubmission) VALUES('$subject', '$description', $len)";
            $bol = $conn->query($insert);
            if ($bol === true) {
                $last_id = $conn->insert_id;
                echo "<h1>the Feedback was added successfully </h1>";
            } else {
                echo "<h1>the $insertUser was not added successfully because: $conn->error </h1>";
            }
        }
        disconnect($conn);
        ?>
    </div>
    <div class="footer">
        <?php include 'include/footer.php'; ?>
    </div>
</body>

</html>