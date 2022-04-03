function requestMeds(startID) {

    // esegue una richiesta asincrona per stampare a schermo i farmaci

    console.log('ciao')

    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = () => {
        if (xhttp.readyState == DONE && xhttp.status == 200) {
            // richiesta pronta ed andata a buon fine 
            arrMeds = JSON.parse(xhttp.responseText);
            drawMeds(arrMeds);
        }

    };

    xhttp.open("GET", "./../php/backendLogic/getMeds.php?startID=" + startID, true);
    xhttp.send();

}

function drawMeds(arrMeds) {
    console.log(arrMeds);
}
