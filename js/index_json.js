// Connection au données de emperors.json
function init_datas() {
    fetch('content/json/emperors.json')
    .then(response => {
        return response.json();
    })
    .then(data => {
        // Work with JSON data here
        console.log(data);
    })
    .catch(err => {
    // Do something for an error here
    });
}

init_datas();