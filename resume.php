<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Resume</title>
</head>

<body>
    <!--––header––-->
    <div class="head">
        <?php include 'include/header.php'; ?>
        <h1 id="headText">Resume</h1>
    </div>
    <hr>
    <!--––Links in the left––-->
    <div class="links">
        <?php include 'include/links.php'; ?>
    </div>

    <!--––content––-->
    <div class="cv">

        <table class="ta">
            <tr>
                <td>
                    <p> <b>Abdulmalek CV</b> </p>
                </td>
            </tr>

            <tr>
                <td>
                    <object data="cv/Abdulmalek_CV.pdf" width="85%" height="600" type="application/pdf">
                        <p>Something went wrong might,Your browser doesn't support PDF.</p>
                    </object>
                </td>

            </tr>

            <tr>
                <td>
                    <p> <b>Bander CV</b></p>
                </td>
            </tr>

            <tr>
                <td>
                    <object data="cv/Bander_CV.pdf" width="85%" height="600" type="application/pdf">
                        <p>Something went wrong might, Your browser doesn't support PDF.</p>
                    </object>
                </td>
            </tr>

            <tr>
                <td>
                    <p><b>Abdulelah CV</b></p>
                </td>
            </tr>

            <tr>
                <td>
                    <object data="cv/Abdulelah_CV.pdf" width="85%" height="600" type="application/pdf">
                        <p>Something went wrong might, Your browser doesn't support PDF.</p>
                    </object>
                </td>
            </tr>

        </table>


    </div>


    <!--––footer––-->
    <div class="footer">
        <?php include 'include/footer.php'; ?>

    </div>
</body>

</html>