<?php
  
   $data = new companyController();
   $company = $data->getCompanyByName();

   if(!$company) {
    echo "error";
    die();  
  }

  $dataRate = new ratecompanyController();
  $nbrRate =$dataRate-> CountAllRate();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>profile Company</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/profile.css" rel="stylesheet">
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <?php require_once('navbar.php'); ?>

<div class="container-fluid">
    <div class="">
        <div class="panel profile-cover">
            <div class="profile-cover__img">
                <img src="./img/<?php  echo  $company['image'] ?>" alt="" width="100px" />
                <img class="rounded">
                <h3 class="h3"><?php echo $company['Name'] ?></h3>
            </div>
            <div class="profile-cover__action bg--img" data-overlay="0.3">
                <button class="btn btn-rounded btn-info">
                    <i class="fa fa-plus"></i>
                    <span>Follow</span>
                </button>
            </div>
            <div class="profile-cover__info">
                <ul class="nav">
                    <a href="affichage_Company?search=<?php echo $company['Name'] ?>"  class="text-decoration-none"><li class=" text-dark"><strong><?php echo $nbrRate[0]; ?></strong>Company Review</li></a>
                    <a href="afichage_Salary?search=<?php echo $company['Name'] ?>"    class="text-decoration-none"><li class=" text-dark"><strong>33</strong>Salary</li></a>
                    <a href="#"  class="text-decoration-none"><li class=" text-dark"></li><li><strong>136</strong>Interview Review</li></a>
                    <a href="#"  class="text-decoration-none"><li class=" text-dark"></li><strong>136</strong>Workplace Photo</li></a>
                </ul>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h2 class="panel-title">Google Overview</h2>
            </div>
            <div class="panel-content panel-activity">
                <form class="form-inline row">
                    <div class="form-group mb-3 col-6">
                      <label for="Name">Name of Company : </label>
                      <input type="text" value="<?php echo $company['Name'] ?>" class="border-0">
                    </div>
                    <div class="form-group mb-3 col-6">
                        <label for="Name">E-mail of Company : </label>
                        <input type="text" value="<?php echo $company['email'] ?>" class="border-0">
                      </div>
                      <div class="form-group mb-3 col-6">
                        <label for="Name">Secteur: </label>
                        <input type="text" value="<?php echo $company['secteur'] ?>" class="border-0">
                      </div>
                      <div class="form-group mb-3 col-6">
                        <label for="Name">City : </label>
                        <input type="text" value="<?php echo $company['city'] ?>" class="border-0">
                      </div>
                      <div class="form-group mb-3 col-6">
                        <label for="Name">Phone : </label>
                        <input type="text" value="<?php echo $company['phone'] ?>" class="border-0">
                      </div>
                      <div class="form-group mb-3 col-6">
                        <label for="Name">Website : </label>
                        <input type="text" value="<?php echo $company['url'] ?>" class="border-0">
                      </div>
                      <div class="form-group mt-3">
                        <label for="exampleFormControlTextarea1">Descrition : </label>
                        <!-- <input type="text" value="" class="border-0"> -->
                        <p class="fw-bold"><?php echo $company['description'] ?></p>
                      </div>

                  </form>
        </div>
    </div>
</div>

<script type="text/javascript"></script>
<script src="assets/js/search.js"></script>
</body>
</html>