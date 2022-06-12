<div id='container-review' class='sidebar'>
    <p id='descr'>Opinioni</p>
    <script>
        requestReviews('<?php echo $_GET['medName'] ?>', 0);
    </script>
    <div>
        <?php echo  "<button class='form-button' onclick=requestReviews('". $_GET['medName'] . "',1)>avanti</button>" ?>
        <?php echo  "<button class='form-button' onclick=requestReviews('" . $_GET['medName'] . "',-1)>indietro</button>" ?>
    </div>
</div>