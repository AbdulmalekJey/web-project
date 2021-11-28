<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/table.css">
    <script src="JS/email.js"></script>
    <title>Contact Us</title>
</head>

<body>
    <!--––header––-->
    <div class="head">
        <?php include 'include/header.php'; ?>
        <h1 id="headText">Contact Us</h1>
    </div>
    <hr>
    <!--––Links in the left––-->
    <div class="links">
        <?php include 'include/links.php'; ?>
    </div>

    <!--––content––-->
    <div class="content">
        <table class="ta" border="1" rules="groubs">
            <thead>
                <th>Name</th>
                <th>Employee ID</th>
                <th>E-mail</th>
            </thead>

            <tr>
                <td>Bander Yahya Abusinn</td>
                <td>1847457</td>
                <td id=email1></td>
            </tr>

            <tr>
                <td>Abdulmalek Mohammed Noor</td>
                <td>1847212</td>
                <td id=email2></td>
            </tr>

            <tr>
                <td>Abdulelah Mohammed</td>
                <td>1849536</td>
                <td id=email3></td>
            </tr>
        </table>


    </div>
    <!--––footer––-->
    <div class="footer">
        <?php include 'include/footer.php'; ?>

    </div>
</body>
<Script>
    var emails = scrambleEmail();

    var email1 = document.getElementById("email1");
    email1.innerHTML = `Email : ${emails.bander}`;
    console.log(email1);

    var email2 = document.getElementById("email2");
    email2.innerHTML = `Email : ${emails.abdulmalek}`;
    console.log(email2);

    var email3 = document.getElementById("email3");
    email3.innerHTML = `Email : ${emails.abdulelah}`;
    console.log(email3);

</Script>

</html>