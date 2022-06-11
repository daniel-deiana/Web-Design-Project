let position = 0 // posizione corrente all'interno del catalogo
let page_limit = 1; // page limit è l'indice dell'ultima pagina del catalogo


function requestMeds(direction) {
    // esegue una richiesta asincrona per stampare a schermo i farmaci
    
    if (page_limit > position || direction == -1)
        position += direction;
    
    // se il cursore è negativo resetto a zero
    if (position < 0)
        position = 0;
    
    console.log(position);

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
    xhttp.open("GET", "./../backendLogic/getMeds.php?start=" + position, true);
    xhttp.send();

}


    /*
        Renderizza a schermo i contenuti richiesti dalla requestMeds
    */


function drawMeds(arrMeds) {
    var containerElem = document.getElementById('container-med');

    let len = document.getElementsByClassName('card-med');

    /*  Dato che ogni volta carico sempre massimo 4 farmaci, se trovo che me ne vengono ritornati meno di 4,
        quella è l'ultima pagina del catalogo 
    */
    
    if (page_limit < position && arrMeds.length < 4)
        {
            page_limit = position + 1;
        }

    const boxes = document.querySelectorAll('.card-med');

    // elimino i div dei farmaci della pagina precedente del catalogo
    boxes.forEach(box => {
        box.remove();
    });


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