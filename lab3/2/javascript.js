function check() {
    let pnum = document.getElementById('personid').value
    // alert(pnum)
    // console.log("asdasdasdas")
    if (pnum.toString().length != 13) {
        // console.log("test")
        alert("หมายเลขบัตรประชาชนของคุณไม่ถูกต้อง")
        // return false
    }

    let name = document.getElementById("firstName").value
    let long = name.length
    if (long < 2 || long > 20) {
        alert("ใส่ชื่อไม่ถูกต้อง")
        // return false
    }

    let surname = document.getElementById("firstName").value
    let long_sur = surname.length
    if (long_sur < 2 || long_sur > 30) {
        alert("ใส่นามสกุลไม่ถูกต้อง")
        // return false
    }

    let address = document.getElementById("address").value
    let long_add = address.length
    if (long_add < 5) {
        alert("ใส่ที่อยู่ไม่ถูกต้อง")
        // return false
    }

    let tumbon = document.getElementById("tumbon").value
    let long_tum = tumbon.length
    if (long_tum < 2) {
        alert("ใส่ตำบลไม่ถูกต้อง")
        // return false
    }

    let ump = document.getElementById("legion").value
    let long_ump = ump.length
    if (long_ump < 2) {
        alert("ใส่อำเภอไม่ถูกต้อง")
        // return false
    }

    let postPass = document.getElementById("postPass").value
    let long_post = postPass.length
    if (long_post != 5) {
        alert("ใส่รหัสไปรษณีย์ไม่ถูกต้อง")
        // return false
    }
}