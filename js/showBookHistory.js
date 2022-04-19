
/*
    Questa funzione mostra la storia relativa 
    alle prenotazioni dei farmaci relativamente ad un cliente
*/

function requestBookHistory() {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = () => {
        if (xhttp.status == 200 && xhttp.readyState == 4) {
            drawBookHistory(JSON.parse(xhttp.responseText));
        }
    }

    xhttp.open("GET", './../backendLogic/getBookHistory.php');
    xhttp.send();
}

// Renderizza la storia delle prenotazioni dell'utente
function drawBookHistory(response) {

    let cont = document.getElementById('container-history')
    let table = document.createElement('table');

    for (let i = 0; i < response.length; i++) {

        let r = document.createElement('tr');
        table.appendChild(r);

        let c1 = document.createElement('td');
        c1.textContent = response[i].farmaco
        r.appendChild(c1);


        let c2 = document.createElement('td');
        c2.textContent = response[i].data
        r.appendChild(c2);

    }

    cont.appendChild(table);

}