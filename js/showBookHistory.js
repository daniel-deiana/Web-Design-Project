
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

    table.id = 'table-history'
    
    let r0 = document.createElement('tr');
    let c = document.createElement('th');
    c.textContent = 'farmaco'
    r0.appendChild(c);

    let c1 = document.createElement('th');
    c1.textContent = 'data prenotazione'
    r0.appendChild(c1);

    let c2 = document.createElement('th');
    c2.textContent = 'stato'
    r0.appendChild(c2);

    table.appendChild(r0);

    for (let i = 0; i < response.length; i++) {

        let r = document.createElement('tr');
        table.appendChild(r);

        let c1 = document.createElement('td');
        c1.className = 'elem-table'
        c1.textContent = response[i].nome
        r.appendChild(c1);


        let c2 = document.createElement('td');
        c2.className = 'elem-table'
        c2.textContent = response[i].data
        r.appendChild(c2);

        let c0 = document.createElement('td');
        c0.textContent = response[i].stato
        c0.className = 'elem-table'
        r.appendChild(c0);

        let c3 = document.createElement('td');
        c3.className = 'elem-table'
        c3.id = 'elem-review'
        r.appendChild(c3);

        // bottone per lasciare l'esperienza con il farmaco
        let a = document.createElement('a');
        a.textContent = 'Review';
        a.href = "./../pages/reviewPage.php?medName=" + response[i].nome;

        c3.appendChild(a);
    }

    cont.appendChild(table);

}