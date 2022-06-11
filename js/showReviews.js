/* 
    codice che carica in maniera dinamica le opinioni degli utenti riguardo un determinato farmaco
*/


function requestReviews(name) {

    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = () => {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            drawReviews(JSON.parse(xhttp.responseText));
        }
    }
    xhttp.open("GET", "./../backendLogic/getReviews.php?medName=" + name);
    xhttp.send();
}

// renderizza il contenuto relativo alle review

function drawReviews(responseArray) {

    let container = document.getElementById('container-review');

    for (let i = 0; i < responseArray.length; i++) {

        let divReview = document.createElement('div');
        divReview.style.position = 'relative'
        divReview.className = 'review';
        divReview.style.height = 'fit-content'
        divReview.style.wordBreak = 'word-break';
        divReview.textContent = responseArray[i].testo;
        divReview.style.padding = '20px'
        divReview.style.margin = '10px';

        let p0 = document.createElement('div');
        p0.style.textAlign = 'center';
        p0.style.position = 'absolute';
        p0.style.top = 0;
        p0.style.width = '100%'
        p0.style.left = 0;
        p0.style.borderStartStartRadius = '15px';
        p0.style.borderStartEndRadius = '15px';
        p0.style.color = 'white';
        p0.style.fontWeight = 600;
        p0.style.backgroundColor = '#3e78d5';
        p0.textContent = "Esperienza di: " + responseArray[i].utente;
        divReview.appendChild(p0);

        let p = document.createElement('div');
        p.style.textAlign = 'center';
        p.style.position = 'relative';
        p.style.bottom = 0;
        p.style.width = '100%'
        p.style.color = 'white';
        p.style.left = 0;
        p.style.borderStartEndRadius = '15px';
        p.style.borderStartStartRadius = '15px';
        p.style.borderEndStartRadius = '15px';
        p.style.borderEndEndRadius = '15px';
        p.style.backgroundColor = '#3e78d5';
        p.style.fontWeight = 600;
        p.textContent = "In data: " + responseArray[i].data;
        divReview.appendChild(p);
        container.appendChild(divReview);
    }
}
