<?php
$dataRate = new ratesalaryController();
$nbrRate =$dataRate-> CountAllRate();

$rate_company = new ratecompanyController();
$nbrRate_company =$rate_company-> CountAllRate();

$int = new RateinterviewController();
$nbrinterview =$int-> CountAllInterview();

$pic = new workplaceController();
$nbrImg =$pic-> CountAllImage();

if(isset($_POST['follow'])){
    $follow_company = new companyController();
    $folllow = $follow_company->addfollow();

}

$check = new   companyController();
$check_follow = $check->checkFollower($company['id_entreprise']);
if($check_follow){

    $msg = '<button class="btn btn-rounded btn-info" name="follow" disabled>
    <i class="fa fa-plus"></i>
    <span>Followed</span>
    </button>';
}else{
    $msg =  '<button class="btn btn-rounded btn-info" name="follow">
    <i class="fa fa-plus"></i>
    <span>Unfollow</span>
     </button>';
}
?>


<div class="container-fluid">
    <div class="">
        <div class="panel profile-cover">
            <div class="profile-cover__img">
                <img src="./img/<?php  echo  $company['image'] ?>" alt="" width="100px" />
                <h3 class="h3"><?php echo $company['Name']; ?></h3>
            </div>
            <div class="profile-cover__action bg--img" data-overlay="0.3">
                <form method="post" >
                <?php
                 if(isset($msg)){ 
                    echo $msg ;
                } 
                  ?>
                   <input type="hidden" name="id_entreprise" value="<?php echo $company["id_entreprise"] ;?>">
                </form>
            </div>
            <div class="profile-cover__info">
                <ul class="nav">
                    <a href="affichage_Company?search=<?php echo $company['Name'] ?>" class="text-decoration-none"><li class=" text-dark"><strong><?php echo $nbrRate_company[0] ?></strong>Company Review</li></a>
                    <a href="afichage_Salary?search=<?php echo $company['Name'] ?>"  class="text-decoration-none"><li class=" text-dark"><strong><?php echo  $nbrRate[0] ?></strong>Salary</li></a>
                    <a href="affichage_Interview?search=<?php echo $company['Name'] ?>"  class="text-decoration-none"><li class=" text-dark"></li><li><strong><?php echo  $nbrinterview[0] ?></strong>Interview Review</li></a>
                    <a href="affichage_workplace?search=<?php echo $company['Name'] ?>"  class="text-decoration-none"><li class=" text-dark"></li><strong><?php echo  $nbrImg[0] ?></strong>Workplace Photo</li></a>
                </ul>
            </div>
        </div>