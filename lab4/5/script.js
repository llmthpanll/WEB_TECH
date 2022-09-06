function addList(clicked_id) {
    let list = document.getElementById("list");
    let addOrder = document.createElement("li");
    let orderAtt = document.createAttribute("class");
    orderAtt.value = "list-group-item";
    addOrder.setAttributeNode(orderAtt);
    if (clicked_id == "water1") {
        let orderText = document.createTextNode("ชานมไข่มุก");
        addOrder.appendChild(orderText);
    } else if (clicked_id == "water2") {
        let orderText = document.createTextNode("ชาเขียวปั่นถั่วแดง");
        addOrder.appendChild(orderText);
    } else if (clicked_id == "water3") {
        let orderText = document.createTextNode("นมชมพู");
        addOrder.appendChild(orderText);
    }
    let addOne = document.createElement("div");
    let oneAtt = document.createAttribute("class");
    oneAtt.value = "float-end";
    addOne.setAttributeNode(oneAtt);
    addOne.innerHTML = "x1";
    addOrder.appendChild(addOne);
    list.appendChild(addOrder);
}