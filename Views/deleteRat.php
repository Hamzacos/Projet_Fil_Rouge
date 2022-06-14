<?php


     if(isset($_POST['id_RateCompany'])){
        $exitRats = new ratecompanyController();
        $exitRats ->deleteRate();
        // echo $_POST['id_RateCompany'];
    }
    else echo'vide';
?>