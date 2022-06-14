<?php
     if(isset($_POST['id_entreprise'])){
        $exitParents = new companyController();
        $exitParents->deleteCompanys();
    }
?>