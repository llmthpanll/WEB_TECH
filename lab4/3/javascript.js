let seq = 1;
function regis() {
    let std_id = document.getElementById('std_id').value;
    let std_name = document.getElementById('std_name').value;
    let std_surname = document.getElementById('std_surname').value;
    let insertHere = document.getElementById('insert');
    let row = document.createElement("tr");
    let col1 = document.createElement("td");
    let col2 = document.createElement("td");
    let col3 = document.createElement("td");
    let col4 = document.createElement("td");
    let text1 = document.createTextNode(seq);
    let text2 = document.createTextNode(std_id);
    let text3 = document.createTextNode(std_name);
    let text4 = document.createTextNode(std_surname);
    col1.appendChild(text1);
    col2.appendChild(text2);
    col3.appendChild(text3);
    col4.appendChild(text4);
    row.appendChild(col1);
    row.appendChild(col2);
    row.appendChild(col3);
    row.appendChild(col4);
    insertHere.appendChild(row);
    seq++
}