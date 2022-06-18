<?php
require_once './autoload.php';
require_once './controllers/homeController.php';
require_once './Views/alert.php';

 $home = new homeController();

 $pages = ['login','Sing_up','dashbord','Dashbord_Admin','logout','Ajouter_Company','updateCompany','deleteCompany',
           'navbar','RateCompany','Form_Cont','AD_Company','profile_timeline','affichage_Company','deleteRat',
           'afichage_Salary','RateSalary','AD_Salary','deleteSal','RateInterview','AD_Interview','deleteINT','affichage_Interview',
          'headerAffichage.php','workPlace','AD_WorkPlace','affichage_workplace','deleteImg','suggest','msg','deletSuggest'];

 if(isset($_SESSION['logged']) && $_SESSION['logged'] === true ){      
        if(isset($_GET['page'])){
            if(in_array($_GET['page'],$pages)){
            $page = $_GET['page'];
            $home->index($page);
            }else {
            include('views/includes/404.php');
            }
         }else{
            $home->index('login');
         }
 }else if(isset($_GET['page']) && $_GET['page'] === 'Sing_up'){
     $home->index('Sing_up');
 }else{
     $home->index('login');
 }
?>