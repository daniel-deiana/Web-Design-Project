
/* 
    effettua una chiamata asincrona al server 
    per richiedere le informazioni per un determinato medicinale
*/

function requestMedDetail(name) {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = () => {
        if (xhttp.status == 200 && xhttp.readyState == 4) {
            drawMedDetail(JSON.parse(xhttp.responseText));
        }
    }

    xhttp.open("GET", './../backendLogic/getMedDetail.php?medName=' + name, true);
    xhttp.send();
}

/*
    funzione che si occupa di rendererizzare a schermo 
    tutte le informazioni dell'oggetto json passato in ingresso
*/

function drawMedDetail(medObject) {

    let container = document.getElementById('med-details');
    container.style.backgroundColor = 'white';

    // nome
    let elemName = document.createElement('p');
    elemName.textContent = medObject[0].nome;
    elemName.className = 'text-tag'
    elemName.name = 'medName';
    
    // immagine
    let image = document.createElement('img');
    image.width = image.height = 400;
    image.className = 'image-med'
    loadImage(medObject[0].nome, image);

    let divImage = document.createElement('div');

    divImage.appendChild(image);

    // Disponibilità
    let elemDisp = document.createElement('div');
    elemDisp.textContent = medObject[0].disponibilita;
    elemDisp.className = 'text-tag'


    // descrizione 
    let elemDescription = document.createElement('p');
    elemDescription.textContent = medObject[0].descrizione;
    elemDescription.className = 'text-tag'

    // prezzo
    let elemPrice = document.createElement('p');
    elemPrice.textContent = 'prezzo al pubblico: ' + medObject[0].prezzo +"€";
    elemPrice.className = 'text-tag';

    // link per bottone prenota
    let aElem = document.createElement('a');
    aElem.href = './../backendLogic/addCartItem.php?medName=' + medObject[0].nome + '&quantity=1';
    aElem.className = 'text-tag'
    aElem.style.backgroundColor = '#4bdb87'

    // bottone prenota
    let elemPrenota = document.createElement('div');
    elemPrenota.id = 'prenota-button';
    elemPrenota.textContent = 'Prenota';
    elemPrenota.style.color = 'black';

    aElem.appendChild(elemPrenota);

    // renderizzo il contenuto sulla pagina  
    container.appendChild(elemName);
    container.appendChild(divImage);
    container.appendChild(elemDescription);
    container.appendChild(elemPrice);
    container.appendChild(aElem);

}

// ------------------- DA RENDERE MODULARE ----------------------

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





