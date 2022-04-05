function requestMeds(startID) {

    // esegue una richiesta asincrona per stampare a schermo i farmaci

    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = () => {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            // richiesta pronta ed andata a buon fine 
            drawMeds(JSON.parse(xhttp.responseText));
        }
    };

    // invio la richiesta al server 
    xhttp.open("GET", "./../backendLogic/getMeds.php?startID=" + startID, true);
    xhttp.send();
}

function drawMeds(arrMeds) {

    // prende in ingresso l'array di oggetti json

    console.log(arrMeds);
    var containerElem = document.getElementById('container-med');

    for (let i = 0; i < arrMeds.length ; i++) {

        // creo il div che contiene la card del farmaco
        let divMed = document.createElement('div');

        // costruisco il sotto albero del div
        let pMed = document.createElement('p');
        pMed.textContent = arrMeds[i].nome;

        divMed.className = 'elem-med';

        divMed.appendChild(pMed);

        // aggiungo il div del farmaco alla pagina
        containerElem.appendChild(divMed);
    }
}


