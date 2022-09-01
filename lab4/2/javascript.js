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
    const nameDiv = document.createElement('div');
    const nameLabel = document.createElement('label');
    nameLabel.for = 'name';
    nameLabel.innerHTML = `${lang[choose_lang].name}: `;
    const nameInput = document.createElement('input');
    nameInput.type = 'text';
    nameInput.id = 'name';

    nameDiv.appendChild(nameLabel);
    nameDiv.appendChild(nameInput);

    const surnameDiv = document.createElement('div');
    const surnameLabel = document.createElement('label');
    surnameLabel.for = 'surname';
    surnameLabel.innerHTML = `${lang[choose_lang].surname}: `;
    const surnameInput = document.createElement('input');
    surnameInput.type = 'text';
    surnameInput.id = 'surname';

    surnameDiv.appendChild(surnameLabel);
    surnameDiv.appendChild(surnameInput);

    const countryDiv = document.createElement('div');
    const countryLabel = document.createElement('label');
    countryLabel.for = 'country';
    countryLabel.innerHTML = `${lang[choose_lang].country[0]}: `;
    const countrySelect = document.createElement('select');
    for (let index = 0; index < lang[choose_lang].country[1].length; index++) {
        const country = lang[choose_lang].country[1][index];
        let option = document.createElement('option');
        option.value = country.value;
        option.innerHTML = country.name;
        countrySelect.appendChild(option);
    }

    countryDiv.appendChild(countryLabel);
    countryDiv.appendChild(countrySelect);

    const btn = document.createElement('button');
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