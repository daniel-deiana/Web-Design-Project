function requestMeds(startID) {

    // esegue una richiesta asincrona per stampare a schermo i farmaci

    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = () => {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            // richiesta pronta ed andata a buon fine 
            //prima chiedo di caricare l'immagine e poi carico tuttto il contenuto
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

    for (let i = 0; i < arrMeds.length; i++) {

        // creo il div che contiene la card del farmaco
        let divMed = document.createElement('div');
        divMed.className = 'card-med';

        // costruisco il sotto albero del div
        let pMed = document.createElement('p');
        pMed.textContent = arrMeds[i].nome;
        divMed.appendChild(pMed);

        // richiedo l'immagine del medicinale 
        let image = document.createElement('img')
        loadImage(arrMeds[i].nome, image)
        image.height = image.width = 150;
        divMed.appendChild(image);

        let aElem = document.createElement('a');
        aElem.href = './../pages/medPage.php?medName=' + arrMeds[i].nome;
        aElem.id = 'show-button';

        // bottone per andare alla pagina personale del medicinale
        let showButton = document.createElement('div');
        showButton.textContent = 'Mostra';
        aElem.appendChild(showButton);

        divMed.appendChild(aElem);

        // aggiungo il div del farmaco alla pagina
        containerElem.appendChild(divMed);
    }
}

function loadImage(name, image) {
    // esegue una richiesta asincrona per un immagine relativa al nome del farmaco passato in ingresso

    let xhttp = new XMLHttpRequest;
    xhttp.onreadystatechange = () => {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            // richiesta andata a buon fine, ritorno il binary dell'immagine
            image.setAttribute('src', "data:image/jpg;base64," + xhttp.responseText);
        }
    }
    xhttp.open("POST", "./../backendLogic/getMedImage.php?name=" + name, true);
    xhttp.send();
};