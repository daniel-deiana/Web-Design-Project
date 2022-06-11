/*   

    Codice utilizzato dalla pagina di un farmacista per caricare i dati delle prenotazioni degli utenti

    Viene passato in input il codice della prenotazione e se esiste viene renderizzato a schermo
    
    La ricerca della prenotazione viene fatta in maniera dinamica ogni volta che si cambia il valore presente
    nella casella di input
*/



let text_input = document.getElementById('book-search');


text_input.onchange = () => {

    if (!text_input.value.match(/^[0-9]+$/)) {
        alert('inserisci un valore numerico')
        return
    }

    // prendo il contenuto dell'input testuale
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = () => {
        if (xhttp.status == 200 && xhttp.readyState == 4) {
            drawBookRecord(JSON.parse(xhttp.responseText));
        }
    }
    xhttp.open("GET", './../backendLogic/getBookRecords.php?name='+ text_input.value, true);
    xhttp.send();
}

// renderizza a schermo la prenotazione cercata dal farmacista

function drawBookRecord(array_book) {
    
    if (document.getElementById('table-book') != null)
        document.getElementById('table-book').remove();

    let cont = document.getElementById('container-book')
    let table = document.createElement('table');
    table.id = 'table-book';
    cont.appendChild(table);


    for (let i = 0; i < array_book.length; i++) {
        let r = document.createElement('tr');
        table.appendChild(r);

        let c1 = document.createElement('td');

        c1.className = 'elem-table';
        c1.textContent = array_book[i].username;
        r.appendChild(c1);

        let c2 = document.createElement('td');
        c2.className = 'elem-table';
        c2.textContent = array_book[i].data;
        r.appendChild(c2);

        let c3 = document.createElement('td');
        c3.className = 'elem-table';
        c3.textContent = array_book[i].quantita;
        r.appendChild(c3);

        let c4 = document.createElement('td');
        let select = document.createElement('select');
        select.name = 'stato';
        c4.appendChild(select);

        let op1 = document.createElement('option');
        op1.textContent = 'ritirato';
        op1.value = 0;

        let op2 = document.createElement('option');
        op2.textContent = 'annullato';
        op2.value = -1;

        select.appendChild(op1)
        select.appendChild(op2)

        r.appendChild(c4);
    }
}