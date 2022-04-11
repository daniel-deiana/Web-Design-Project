
/* 
    effettua una chiamata asincrona al server 
    per richiedere informazioni dettagliate per un determinato medicinale
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

    // nome
    let elemName = document.createElement('p');
    elemName.textContent = medObject[0].nome;

    // immagine
    let image = document.createElement('img');
    loadImage(medObject[0].nome, image);

    // descrizione 
    let elemDescription = document.createElement('p');
    elemDescription.textContent = medObject[0].descrizione; 

    // prezzo
    let elemPrice = document.createElement('p');
    elemPrice.textContent = medObject[0].prezzo;

    // tipo ? 


    container.appendChild(elemName);
    container.appendChild(image);
    container.appendChild(elemDescription);
    container.appendChild(elemPrice);
    

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





