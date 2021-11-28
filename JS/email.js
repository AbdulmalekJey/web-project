function scrambleEmail() {

    var banderEmail = "&#98&#97&#110&#100&#97&#114&#45&#121&#97&#104&#121&#97&#49&#64&#104&#111&#116&#109&#97&#105&#108&#46&#99&#111&#109";
    var banderString = "";
    var banderarr = banderEmail.split('&#');
    for (var i = 1; i < banderarr.length; i++) {
        banderString = banderString + String.fromCharCode(banderarr[i]);
    }

    var abdulmalekEmail = "&#97&#98&#109&#110&#49&#52&#49&#57&#64&#103&#109&#97&#105&#108&#46&#99&#111&#109";
    var abdulmalekString = "";
    var abdulazizarr = abdulmalekEmail.split('&#');
    for (var i = 1; i < abdulazizarr.length; i++) {
        abdulmalekString = abdulmalekString + String.fromCharCode(abdulazizarr[i]);
    }

    var abdulelahEmail = "&#97&#98&#100&#117&#108&#101&#108&#97&#104&#120&#122&#64&#103&#109&#97&#105&#108&#46&#99&#111&#109";
    var abdulelahString = "";
    var abdulelaharr = abdulelahEmail.split('&#');
    for (var i = 1; i < abdulelaharr.length; i++) {
        abdulelahString = abdulelahString + String.fromCharCode(abdulelaharr[i]);
    }

    return {
        bander: banderString,
        abdulmalek: abdulmalekString,
        abdulelah: abdulelahString,
    };
}