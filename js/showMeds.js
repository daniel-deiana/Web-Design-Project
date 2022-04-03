function requestMeds(startID) {

    // esegue una richiesta asincrona per stampare a schermo i farmaci

    console.log('ciao')

    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = () => {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            // richiesta pronta ed andata a buon fine 
            arrMeds = xhttp.responseText
            console.log(arrMeds)
            drawMeds(arrMeds);
        }
    };

    xhttp.open("GET", "./../php/backendLogic/getMeds.php?startID=" + startID, true);
    xhttp.send();
}

function drawMeds(arrMeds) {
    console.log(arrMeds);
}
