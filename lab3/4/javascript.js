let count = 0
function ViewChart() {
    let length = Math.floor(Math.random() * 10);
    if (count==0) {
        document.getElementById("Math").style.width = Math.floor(Math.random() * 500);
        document.getElementById("Thai").style.width = Math.floor(Math.random() * 500);
        document.getElementById("English").style.width = Math.floor(Math.random() * 500);
        document.getElementById("Science").style.width = Math.floor(Math.random() * 500);
        document.getElementById("Social").style.width = Math.floor(Math.random() * 500);
        count = 1;
        console.log("Asdd")
    }
    else if (count==1) {
        document.getElementById("Math").style.width = "75px";
        document.getElementById("Thai").style.width = "75px";
        document.getElementById("English").style.width = "75px";
        document.getElementById("Science").style.width = "75px";
        document.getElementById("Social").style.width = "75px";
        count = 0;
        console.log("asdfgbiojo")
    }
}