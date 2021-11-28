<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <script src="JS/validation.js"></script>
    <title>Feedback</title>
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

    <!--––content––-->
    <div class="content">

        <h1>Please Share Us your Experience</h1>
        <form class="fromstyle" action="connection.php" onsubmit="return validate(event)" name="myForm" method="post">
            <div style="width: 50%; margin-left:15%; margin-right: auto;">
                <label for="fName">First Name <span>*</span></label>
                <input type="text" name="fName" placeholder="Your first name.." required>
                <label for="lName">Last Name <span>*</span></label>
                <input type="text" name="lName" placeholder="Your last name.." required>
                <label for="emailField">Email <span>*</span></label>
                <label for="error" id="emailerror" hidden> * (Wrong email formatting)</label>
                <input type="text" name="email" placeholder="Your Email.." required>
                <label for="phoneField">Phone Number <span>*</span></label>
                <label for="error" id="phoneError" hidden> * (Wrong phone number)</label>
                <input type="text" name="phone" placeholder="Your Phone number.." required>
                <div class="radio">
                    <label for="gender">Gender</label><br><br>
                    <input type="radio" name="gender" id="male" value="male" checked="checked">
                    <label for="male" id="maleLabel">Male</label>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female" id="femaleLabel">Female</label>
                    <label for="country"> <br> City</label>
                    <select id="city" name="city">
                        <option value="Jeddah">Jeddah</option>
                        <option value="Makkah">Makkah</option>
                        <option value="Yanbu">Yanbu</option>
                        <option value="Medina">Medina</option>
                        <option value="Riyadh">Riyadh</option>
                        <option value="Dammam">Dammam</option>
                    </select>
                    <label for="area">Area <span>*</span></label>
                    <input type="text" name="area" placeholder="Area.." required>
                </div>
                <label for="titleField">Title <span>*</span></label>
                <input type="text" id="titleField" name="title" placeholder="Title..." required>
                <label for="description">Subject <span>*</span></label>
                <textarea id="description" name="description" placeholder="Write something..." required></textarea>
                <input type="checkbox" name="offer">
                <label for="checbox">I want to recive more offers about the Service</label><br><br>
                <input type="submit" value="Submit" name="submit">
            </div>
    </div>


    <!--––footer––-->
    <div class="footer">
        <?php include 'include/footer.php'; ?>

    </div>
</body>

</html>