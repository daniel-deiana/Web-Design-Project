
/*
    Questa funzione mostra la storia relativa 
    alle prenotazioni dei farmaci relativamente ad un cliente
*/

function requestBookHistory() {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = () => {
        if (xhttp.status == 200 && xhttp.readyState == 4) {
            drawBookHistory(xhttp.responseText);
        }
    }

    xhttp.open("GET", './../backendLogic/getBookHistory.php');
    xhttp.send();
}

// Renderizza la storia delle prenotazioni dell'utente
function drawBookHistory() {
    
}