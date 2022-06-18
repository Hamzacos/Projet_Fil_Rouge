<?php

     if(isset($_POST['id_interview'])){
        $exitRats = new RateinterviewController();
        $exitRats ->deleteRate();
        // echo $_POST['id_RateCompany'];
    }
    else echo'vide';
?>