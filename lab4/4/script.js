const std_number = document.getElementById('std_number');
const std_name = document.getElementById('std_name');
const std_surname = document.getElementById('std_surname');
const insertHere = document.getElementById('insertHere');
const std_btn = document.getElementById('btn_submit');

let order = 0;

std_btn.addEventListener('click', () => {
    order++;
    let newTr = document.createElement('tr');
    let newTd1 = document.createElement('td');
    let newTd2 = document.createElement('td');
    let newTd3 = document.createElement('td');
    let newTd4 = document.createElement('td');
    newTd1.innerHTML = order;
    newTd2.innerHTML = std_number.value;
    newTd3.innerHTML = std_name.value;
    newTd4.innerHTML = std_surname.value;
    newTr.appendChild(newTd1);
    newTr.appendChild(newTd2);
    newTr.appendChild(newTd3);
    newTr.appendChild(newTd4);
    insertHere.appendChild(newTr);
});