

/*
    Codice per aggiornare i caratteri rimanenti nella sezione di testo
    della review, se si prova a fare submit e si sono superati i caratteri allora viene
    lanciato un alert e l'operazione non viene eseguita
*/


const max = 300;

let form = document.getElementById('login')
let elem = document.getElementById('text-block');
let doc = document.getElementById('login');
let button = document.getElementById('btn');

let p = document.createElement('p');

doc.append(p);

elem.onchange = () => {
    let len = elem.value.length;

    p.textContent = 'Caratteri rimanenti: ' + (max - len);
}


button.onclick = () => {
    
    let len = elem.value.length;

    if (len <= max) {
        form.submit();
    }
    else
        alert('testo troppoo lungo')
}