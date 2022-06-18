<?php


     if(isset($_POST['id_salary'])){
        $exitSalary = new ratesalaryController();
        $exitSalary ->deleteSal();
        // echo $_POST['id_RateCompany'];
    }
    else echo'vide';
?>