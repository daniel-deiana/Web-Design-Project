<?php
    session_start();

    
    $echoString = '<script>
                            let medName = "'.$_GET['medName'].'";
                            requestMedDetail(medName);
                  </script>';
    echo $echoString;
?>
<div class='container-form' id='med-details'>
    
</div>