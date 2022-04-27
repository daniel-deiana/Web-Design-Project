<?php   

    require_once 'queryManager.php';

    session_start();

    if (!isset($_SESSION['username'])) {
        echo "ACCESSO NEGATO";
        exit;
    }

    $review = $_POST['reviewText'];
    $med = $_SESSION['med'];
    $_SESSION['med'] = null; 

    if(!checkBookHistory($med, $_SESSION['username'])){
        echo "NON PUOI ESEGUIRE UNA REVIEW DEL FARMACO SENZA AVERLO RITIRATO IN FARMACIA";
        exit;
    }

    if (checkReview($med,$_SESSION['username']) ) {
        echo "HAI GIA FATTO LA REVIEW DEL FARMACO IN PRECENDENZA";
        exit;
    };

    putReview($review,$_SESSION['username'],$med);
    echo $_SESSION['med'];

    header("location: ./../pages/medPage.php?medName=".$med);

    // questa funzione controlla che l'utente non abbia gia lasciato una review per il farmaco


?>