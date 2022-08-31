function calculate() {
    let val1 = document.getElementById("value1").value;
    let val2 = document.getElementById("value2").value;
    let answer = parseInt(val1) + parseInt(val2)
    document.getElementById("result").innerHTML = "Result : " + answer;
    
    let pElement = document.createElement("p");
    let node = document.createTextNode(val1 + " + " + val2 + " = " + answer)
    pElement.appendChild(node);
    document.getElementById("container").appendChild(pElement)
}