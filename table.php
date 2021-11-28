<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/print.css" media="print">
    <title>Table of prices</title>
</head>

<body>
    <!--––header––-->
    <div class="head">
        <?php include 'include/header.php'; ?>
        <h1 id="headText">Table of prices</h1>
    </div>
    <hr>
    <!--––Links in the left––-->
    <div class="links">
        <?php include 'include/links.php'; ?>
    </div>

    <!--––content––-->
    <div class="content">
        <table class="ta" border="1" rules="groubs">
            <caption>List of prices</caption>
            <thead>
                <th>Time</th>
                <th>3 Hours</th>
                <th>6 Hours</th>
                <th>12 Hours</th>
                <th>1 Day</th>
                <th>3 Days</th>
                <th>1 Week</th>
            </thead>
            <tr>
                <th>Vogue</th>
                <td>170 SR</td>
                <td>300 SR</td>
                <td>550 SR</td>
                <td>950 SR</td>
                <td rowspan="2">2450 SR</td>
                <td>5000 SR</td>
            </tr>
            <tr>
                <th>G70</th>
                <td rowspan="2">150 SR</td>
                <td rowspan="2">270 SR</td>
                <td>500 SR</td>
                <td rowspan="2">900 SR</td>
                <td rowspan="2">5000 SR</td>
            </tr>
            <tr>
                <th>Mustang</th>
                <td>550 SR</td>
                <td>2350 SR</td>
            </tr>
            <tr>
                <th>Taycan</th>
                <td rowspan="3">100 SR</td>
                <td>180 SR</td>
                <td>340 SR</td>
                <td>620 SR</td>
                <td>1730 SR</td>
                <td>4000 SR</td>
            </tr>
            <tr>
                <th>300 C</th>
                <td rowspan="2">160 SR</td>
                <td rowspan="2">320 SR</td>
                <td>600 SR</td>
                <td>1650 SR</td>
                <td>3800 SR</td>
            </tr>
            <tr>
                <th>Malibu</th>
                <td>500 SR</td>
                <td>1350 SR</td>
                <td>3000 SR</td>
            </tr>
            <tr>
                <th>Continental-Gt</th>
                <td rowspan="2">250 SR</td>
                <td rowspan="2">450 SR</td>
                <td rowspan="2">850 SR</td>
                <td rowspan="2">1600 SR</td>
                <td rowspan="2">4700 SR</td>
                <td rowspan="2">10500 SR</td>
            </tr>
            <tr>
                <th>Phantom</th>
            </tr>
            <tr>
                <th>7 Series</th>
                <td rowspan="2">200 SR</td>
                <td>370 SR</td>
                <td rowspan="2">700 SR</td>
                <td>1250 SR</td>
                <td>3600 SR</td>
                <td rowspan="2">8400 SR</td>
            </tr>
            <tr>
                <th>Velar</th>
                <td>350 SR</td>
                <td>1300 SR</td>
                <td>3700 SR</td>

            </tr>
        </table>

    </div>


    <!--––footer––-->
    <div class="footer">
        <?php include 'include/footer.php'; ?>

    </div>
</body>

</html>