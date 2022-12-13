function create_elements(name_element, class_name){
    let element = document.createElement(name_element);
    if(class_name !== '') {
        element.className = class_name;
    }
    return element;
}

function dispose_informations(datas){
    let cards_section = document.querySelector('#cards_section');
    console.log(cards_section);
    //let row_cards = document.createElement('div');
    //row_cards.className = 'row';
    row_cards = create_elements('div', 'row');
    cards_section.appendChild(row_cards);

    console.log(datas.data);
    let size_tab = datas.data.length;
    console.log(size_tab);

    datas.data.forEach(element => {
        console.log(element);
        col_card = create_elements('div', 'col s6 m4');
        row_cards.appendChild(col_card);

        card_large = create_elements('div', 'card large');
        col_card.appendChild(card_large);

        // Card image and title part
        card_image = create_elements('div', 'card-image');
        card_large.appendChild(card_image);

        img_card = create_elements('img', '');
        img_card.src = `content/images/${element.emperor.replaceAll('\'', '_').replaceAll(' ', '_').toLowerCase()}.jpg`;
        img_card.alt = `${element.emperor}`;
        card_image.appendChild(img_card);

        card_title = create_elements('span', 'card-title card-opacity flow-text');
        card_title.innerText = `${element.emperor}`;
        card_image.appendChild(card_title);

        link_button = create_elements('a', 'btn-floating btn-large halfway-fab waves-effect waves-light indigo darken-1');
        link_button.href = `#${element.id}`;
        link_button.innerHTML = '<i class="material-icons">add</i>';
        card_image.appendChild(link_button);

        // Card content part
        card_content = create_elements('div', 'card-content');
        card_large.appendChild(card_content);

        card_content_text = create_elements('p', 'flow-text');
        card_content_text.innerHTML = element.desc;
        card_content.appendChild(card_content_text);
    });
}


// Connection au données de emperors.json
function init_datas() {
    fetch('content/json/emperors.json')
    .then(response => {
        return response.json();
    })
    .then(data => {
        // Work with JSON data here
        dispose_informations(data);
        /* console.log('oui cela marche');
        console.log(data);
        console.log(data); */
        
    })
    .catch(err => {
    // Do something for an error here
    });
}



init_datas();