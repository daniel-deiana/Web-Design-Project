function updateCart(name, type) {
    
    // aggiorna la quantità di uno specifico medicinale sul carrello
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = () => {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            let toChange = document.getElementById('qt-' + name);
            num = parseInt(toChange.textContent) + type;
            toChange.textContent = num;
        }
    }
    xhttp.open("GET", "./../backendLogic/updateCart.php?med=" + name + "&type=" + type);
    xhttp.send();
}