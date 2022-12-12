function dispose_informations(datas){
    let cards_section = document.querySelector('#cards_section');
    console.log(cards_section);
    let row_cards = document.createElement('div');
    row_cards.className = 'row';
    cards_section.appendChild(row_cards);

    console.log(datas.data);
    let size_tab = datas.data.length;
    console.log(size_tab);

    datas.data.forEach(element => {
        console.log(element);
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