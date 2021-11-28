function thumbsChange(num) {
    var thumb = 'images/' + num + ".png";
    document.getElementById("selImg").src = thumb;
}

function next() {
    var img = document.getElementById("selImg").src;
    var num = img.lastIndexOf("/");
    num = img.substring(num + 1, img.lastIndexOf("."));
    var number = parseInt(num);
    if (num < 10) {
        number = number + 1;
    } else {
        number = 1;
    }
    console.log(num)
    console.log(number)
    var thumb = 'images/' + number + ".png";
    document.getElementById("selImg").src = thumb;
}

function prev() {
    var img = document.getElementById("selImg").src;
    var num = img.lastIndexOf("/");
    num = img.substring(num + 1, img.lastIndexOf("."));
    var number = parseInt(num);
    if (num > 1) {
        number = number - 1;
    } else {
        number = 10;
    }
    console.log(number)
    var thumb = 'images/' + number + ".png";
    document.getElementById("selImg").src = thumb;
}