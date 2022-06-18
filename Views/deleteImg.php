<?php


     if(isset($_POST['id_img'])){
        $exitSalary = new workplaceController();
        $exitSalary ->deleteImg();
        // echo $_POST['id_RateCompany'];
    }
    else echo'vide';
?>