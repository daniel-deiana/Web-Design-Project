function updateCart(name, type) {

    // aggiorna la quantità di uno specifico medicinale sul carrello
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = () => {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            let toChange = document.getElementById('qt-' + name);
            num = parseInt(toChange.textContent) + type;
            if (num == 0) {
                document.getElementById('cart-bar-' + name).remove();
                document.location.reload(true);
            }

            if (num > 3) {
                num = 3
                alert('al massimo 3 pezzi per articolo');
            }
            toChange.textContent = num;
        }
    }
    xhttp.open("GET", "./../backendLogic/updateCart.php?med=" + name + "&type=" + type);
    xhttp.send();
}