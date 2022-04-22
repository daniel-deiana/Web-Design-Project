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


function drawReviews(responseArray) {

    let container = document.getElementById('container-review');

    for (let i = 0; i < responseArray.length; i++) {

        let divReview = document.createElement('div');
        divReview.className = 'review';
        divReview.textContent = responseArray[i].testo;

        let p = document.createElement('p');
        p.textContent = responseArray[i].data;
        divReview.appendChild(p);

        container.appendChild(divReview);
    }
}