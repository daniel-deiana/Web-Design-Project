function insertCartItem(name,quantity)
{
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = () => {
        if (xhttp.status == 200 && xhttp.readyState == 4) {
            return true
        }
    }

    xhttp.open("GET", './../backendLogic/addCartItem.php?medName=' + name + '&quantity=' + quantity);
}