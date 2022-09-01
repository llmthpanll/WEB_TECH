let lang = {
    th: {
        name: 'ชื่อ',
        surname: 'นามสกุล',
        country: ['ประเทศ', [
            { name: 'เลือกประเทศ', value: '' },
            { name: 'ไทย', value: 'th' },
            { name: 'เวียดนาม', value: 'vn' },
            { name: 'ลาว', value: 'la' },
            { name: 'มาเลเซีย', value: 'my' },
            { name: 'สิงคโปร์', value: 'sg' },
            { name: 'ฟิลิปปินส์', value: 'ph' },
            { name: 'เมียนมา', value: 'mm' },
            { name: 'กัมพูชา', value: 'kh' },
            { name: 'บรูไน', value: 'bn' },
        ]],
        btnlabel: 'เปลี่ยนเป็นภาษาอังกฤษ',
    },
    en: {
        name: 'Name',
        surname: 'Surname',
        country: ['Country', [
            { name: 'Choose country', value: '' },
            { name: 'Thailand', value: 'th' },
            { name: 'Vietnam', value: 'vn' },
            { name: 'Laos', value: 'la' },
            { name: 'Malaysia', value: 'my' },
            { name: 'Singapore', value: 'sg' },
            { name: 'Philippines', value: 'ph' },
            { name: 'Myanmar', value: 'mm' },
            { name: 'Cambodia', value: 'kh' },
            { name: 'Brunei', value: 'bn' },
        ]],
        btnlabel: 'Change to Thai',
    }
}

function init(choose_lang) {
    document.body.innerHTML = '';
    let nameDiv = document.createElement('div');
    let nameLabel = document.createElement('label');
    nameLabel.for = 'name';
    nameLabel.innerHTML = `${lang[choose_lang].name}: `;
    let nameInput = document.createElement('input');
    nameInput.type = 'text';
    nameInput.id = 'name';

    nameDiv.appendChild(nameLabel);
    nameDiv.appendChild(nameInput);

    let surnameDiv = document.createElement('div');
    let surnameLabel = document.createElement('label');
    surnameLabel.for = 'surname';
    surnameLabel.innerHTML = `${lang[choose_lang].surname}: `;
    let surnameInput = document.createElement('input');
    surnameInput.type = 'text';
    surnameInput.id = 'surname';

    surnameDiv.appendChild(surnameLabel);
    surnameDiv.appendChild(surnameInput);

    let countryDiv = document.createElement('div');
    let countryLabel = document.createElement('label');
    countryLabel.for = 'country';
    countryLabel.innerHTML = `${lang[choose_lang].country[0]}: `;
    let countrySelect = document.createElement('select');
    for (let index = 0; index < lang[choose_lang].country[1].length; index++) {
        let country = lang[choose_lang].country[1][index];
        let option = document.createElement('option');
        option.value = country.value;
        option.innerHTML = country.name;
        countrySelect.appendChild(option);
    }

    countryDiv.appendChild(countryLabel);
    countryDiv.appendChild(countrySelect);

    let btn = document.createElement('button');
    btn.innerHTML = lang[choose_lang].btnlabel;
    btn.addEventListener('click', () => {
        if (choose_lang === 'th') {
            init('en');
        } else {
            init('th');
        }
    });

    document.body.appendChild(nameDiv);
    document.body.appendChild(surnameDiv);
    document.body.appendChild(countryDiv);
    document.body.appendChild(btn);
}

init('th');