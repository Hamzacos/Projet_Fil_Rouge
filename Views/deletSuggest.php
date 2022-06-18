<?php


     if(isset($_POST['id_suggest'])){
        $exitSuggest = new suggestController();
        $exitSuggest ->deleteSuggest();
        // echo $_POST['id_RateCompany'];
    }
    else echo'vide';
?>