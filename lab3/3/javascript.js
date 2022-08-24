let count = 1
function change() {
    if (count == 1) {
        document.getElementById("box1").src = "http://10.0.15.20/312lab3/images/3.png"
        document.getElementById("box2").src = "http://10.0.15.20/312lab3/images/1.png"
        document.getElementById("box3").src = "http://10.0.15.20/312lab3/images/4.png"
        document.getElementById("box4").src = "http://10.0.15.20/312lab3/images/2.png"
        count++
    }
    else if (count == 2) {
        document.getElementById("box1").src = "http://10.0.15.20/312lab3/images/4.png"
        document.getElementById("box2").src = "http://10.0.15.20/312lab3/images/3.png"
        document.getElementById("box3").src = "http://10.0.15.20/312lab3/images/2.png"
        document.getElementById("box4").src = "http://10.0.15.20/312lab3/images/1.png"
        count++
    }
    else if (count == 3) {
        document.getElementById("box1").src = "http://10.0.15.20/312lab3/images/2.png"
        document.getElementById("box2").src = "http://10.0.15.20/312lab3/images/4.png"
        document.getElementById("box3").src = "http://10.0.15.20/312lab3/images/1.png"
        document.getElementById("box4").src = "http://10.0.15.20/312lab3/images/3.png"
        count++
    }
    else if (count == 4) {
        document.getElementById("box1").src = "http://10.0.15.20/312lab3/images/1.png"
        document.getElementById("box2").src = "http://10.0.15.20/312lab3/images/2.png"
        document.getElementById("box3").src = "http://10.0.15.20/312lab3/images/3.png"
        document.getElementById("box4").src = "http://10.0.15.20/312lab3/images/4.png"
        count = 1
    }
}