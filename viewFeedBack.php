<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/form.css"/>
    <link rel="stylesheet" href="css/main.css">
    <title>View Feedback</title>
    <script>
        function fetch(e) {
            e.preventDefault();

            function func() {
                var x = function(index) {
                    var d = resp['descs'][index];
                    var desc = document.getElementById("decsriptionList");
                    desc.innerHTML = d;
                }
                return x(this.selectedIndex);
            }
            var resp = {};
            var xmlhttp = new XMLHttpRequest();
            var email = document.getElementById("emailSearch").value;
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("listSubjects").innerHTML = "";
                    console.log(this.responseText);
                    resp = JSON.parse(this.responseText);
                    if (!resp['subs']) {
                        return;
                    }
                    for (var i = 0; i < resp['subs'].length; i++) {
                        var option = document.createElement("option");
                        document.getElementById("listSubjects").appendChild(option);
                        option.value = resp['subs'][i];
                        option.innerHTML = resp['subs'][i];
                        option.selectedIndex = i;
                        option.onclick = func;
                    }
                }
            };
            xmlhttp.open("GET", "fetch.php?email=" + email, true);
            xmlhttp.send();
        }
    </script>
</head>

<body>
    <!--––header––-->
    <div class="head">
        <?php include 'include/header.php'; ?>
        <h1 id="headText">View Feedback</h1>
    </div>
    <hr>
    <!--––Links in the left––-->
    <div class="links">
        <?php include 'include/links.php'; ?>
    </div>

    <!--––content––-->
    <div class="leftSide lab">
        <form action="" onsubmit="fetch(event)">
            <label for="emailSearch">Email </label>
            <input type="text" name="email" placeholder="Your Email.." id="emailSearch" required>
            <input type="submit">
        </form>
        <div class="labels">
            <label for="list">Search results</label><br>
            <label for="dates" id="Dates">Description</label>
        </div>
        <div class="view">
            <select name="list" id="listSubjects" size="10"></select>
            <textarea name="resultList" id="decsriptionList" cols="30" rows="10" disabled></textarea>
        </div>
    </div>


    <!--––footer––-->
    <div class="footer">
        <?php include 'include/footer.php'; ?>

    </div>
</body>

</html>