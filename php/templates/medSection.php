
<div id='container'>
    <p id='descr'>Catalogo farmaci</p>
    <div id='container-med'>

        <script>
            requestMeds(0);
        </script>
    </div>
    <div id='cont-button'>
        <button class='form-button' class='text-tag' onclick="requestMeds(-1)">indietro</button>
        <button class='form-button' class='text-tag' onclick="requestMeds(1)">avanti</button>
    </div>
</div>