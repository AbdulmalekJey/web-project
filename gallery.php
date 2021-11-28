<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="JS/gallery.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Gallery</title>
</head>

<body>
    <!--––header––-->
    <div class="head">
        <?php include 'include/header.php'; ?>
        <h1 id="headText">Gallery</h1>
    </div>
    <hr>
    <!--––Links in the left––-->
    <div class="links">
        <?php include 'include/links.php'; ?>
    </div>

    <!--––content––-->
    <div class="temp">
        <div class="galleryImg">
            <img id="selImg" src="images/1.png" alt="Images" />
        </div>

        <!--buttons-->
        <div class="buttons">
            <img src="images/left-arrow.png" alt="Left Arrow" class="lfBT" onclick="next()">
            <img src="images/right-arrow.png" alt="Right Arrow" class="rtBT" onclick="prev()">
        </div>
    </div>

    <ul class="thumbs">
        <li onclick="thumbsChange(1)">
            <img src="images/1.png" alt="First Img" />
        </li>
        <li onclick="thumbsChange(2)">
            <img src="images/2.png" alt="Second Img" />
        </li>
        <li onclick="thumbsChange(3)">
            <img src="images/3.png" alt="third Img" />
        </li>
        <li onclick="thumbsChange(4)">
            <img src="images/4.png" alt="fourth Img" />
        </li>
        <li onclick="thumbsChange(5)">
            <img src="images/5.png" alt="fifth Img" />
        </li>
        <li onclick="thumbsChange(6)">
            <img src="images/6.png" alt="sixth Img" />
        </li>
        <li onclick="thumbsChange(7)">
            <img src="images/7.png" alt="seventh Img" />
        </li>
        <li onclick="thumbsChange(8)">
            <img src="images/8.png" alt="eighth Img" />
        </li>
        <li onclick="thumbsChange(9)">
            <img src="images/9.png" alt="ninth Img" />
        </li>
        <li onclick="thumbsChange(10)">
            <img src="images/10.png" alt="tenth Img" />
        </li>
    </ul>

    <!--––footer––-->
    <div class="footer">
        <?php include 'include/footer.php'; ?>

    </div>
</body>

</html>