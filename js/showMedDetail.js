
/* 
    funzione che effettua una chiamata asincrona al server 
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

function drawMedDetail() {
    
    let container = document.getElementById('med-details');
    

}








