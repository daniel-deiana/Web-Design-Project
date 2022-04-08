function requestImage(name)
{
    // esegue una richiesta asincrona per un immagine relativa al nome del farmaco passato in ingresso
    let xhttp = new XMLHttpRequest;
    xhttp.onreadystatechange = () => {
        if (xhttp.readyState == 4 && xhttp.status == 200)
        {
            // richiesta andata a buon fine, ritorno il binary dell'immagine
        }
    }
    xhttp.open("POST","./../backendLogic/getMedImage.php?name=" + name, true);
};