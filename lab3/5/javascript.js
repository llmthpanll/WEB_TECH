function submit() {
    let fname = document.getElementById("name").value;
    let pnum = document.getElementById("telephone").value;
    let mail = document.getElementById("email").value;
    let com = document.getElementById("company").value;
    console.log
    if (fname == '' || pnum == '' || mail == '' || com == '') {
        alert("Plese enter all")
        return false
    }
    else {
        document.getElementById("name2").innerHTML = fname;
        document.getElementById("telephone2").innerHTML = pnum;
        document.getElementById("email2").innerHTML = mail;
        document.getElementById("company2").innerHTML = com;
    }
}