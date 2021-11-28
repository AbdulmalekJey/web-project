<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Main Page</title>
</head>

<body>
    <!--––header––-->
    <div class="head">
        <?php include 'include/header.php'; ?>
        <h1 id="headText">Welcome to car rental company</h1>
    </div>
    <hr>
    <!--––Links in the left––-->
    <div class="links">
        <?php include 'include/links.php'; ?>
    </div>

    <!--––content––-->
    <div class="content">
        <p>
            If you are looking for a luxury car... <br>
            you have Just arrived at the right place <br>
            we provide variety of cars with very suitable prices just for your comfort
        </p>
        <a href="pages/gallery.php">
            <img src="images/1.png" alt="">
            <img src="images/2.png" alt="">
        </a>

        <h2>Why go with Luxury Rides?</h2>
        <ul>
            <li>Variety of luxury car options</li>
            <li>Competitive prices</li>
            <li>Hihg quality cars</li>
            <li>Car dilverd to you</li>
            <li>On road service</li>
        </ul>

    </div>


    <!--––footer––-->
    <div class="footer">
        <?php include 'include/footer.php'; ?>

    </div>


</body>

</html>