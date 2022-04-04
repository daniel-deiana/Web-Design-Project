<!DOCTYPE html>
<html>

<head>
    <title>WebPharma</title>
    <link rel='stylesheet' href='./../../css/global.css'>

    </link>
</head>

<body id='container'>
    <?php require './../templates/navbar.php' ?>
    <div id='container-med'></div>
    <script>
        requestMeds(0)

        function requestMeds(startID) {

            // esegue una richiesta asincrona per stampare a schermo i farmaci
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = () => {
       
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    
                    // richiesta pronta ed andata a buon fine 

                    arrMeds = JSON.parse(xhttp.responseText);
                    console.log(arrMeds);
                    drawMeds(arrMeds);
                    return;
                }   
            };
       
            xhttp.open("GET", "./../backendLogic/getMeds.php?startID=0", true);
            xhttp.send();
        }

        function drawMeds(arrMeds) {
            console.log(arrMeds);
        }
    </script>
</body>
</html>