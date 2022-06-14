<?php
  
   $data = new companyController();
   $company = $data->getCompanyByName();

   if(!$company) {
    echo "error";
    die();  
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Salary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'> 
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/profile.css" rel="stylesheet">
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <a class="navbar-brand" href="#"><img src="assets/img/logo.png" style="width: 60px;height: 60px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="d-flex w-100">
    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
        <div>
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item active">
          <a class="nav-link" href="#"><img src="assets/img/cm.svg" style="width: 30px;height: 27px">Company</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="#"><img src ="assets/img/m.svg" style="width: 30px;height: 27px" >Salaries</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#"><img src ="assets/img/w.svg" style="width: 30px;height: 27px">Career</a>
        </li>
      </ul>
    </div>
      <div class="d-flex w-50 justify-content-end">
      <form class="form-inline my-2 my-lg-0 d-flex w-100">
        <input class="form-control mr-sm-2 me-2 w-" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    <div class="d-flex space-bteween">
        <a class="nav-link" href=""><img src="assets/img/user-profile-svgrepo-com.svg" width="25px" height="25px" /></a>
      <a class="nav-link" href=""><img src="assets/img/SE.svg" width="25px" height="25px" /></a>
    </div>
</div>
      
    </div>
</div>
  </nav> -->

  <?php require_once('navbar.php'); ?>
<div class="container-fluid">
    <div class="">
        <div class="panel profile-cover">
            <div class="profile-cover__img">
                <img src="./assets/img/logo_google.png" alt="" width="100px" />
                <h3 class="h3">Google</h3>
            </div>
            <div class="profile-cover__action bg--img" data-overlay="0.3">
                <button class="btn btn-rounded btn-info">
                    <i class="fa fa-plus"></i>
                    <span>Follow</span>
                </button>
            </div>
            <div class="profile-cover__info">
                <ul class="nav">
                    <a href="affichage_Company?search=<?php echo $company['Name'] ?>" class="text-decoration-none"><li class=" text-dark"><strong>26</strong>Company Review</li></a>
                    <a href="afichage_Salary?search=<?php echo $company['Name'] ?>"  class="text-decoration-none"><li class=" text-dark"><strong>33</strong>Salary</li></a>
                    <a href="#"  class="text-decoration-none"><li class=" text-dark"></li><li><strong>136</strong>Interview Review</li></a>
                    <a href="#"  class="text-decoration-none"><li class=" text-dark"></li><strong>136</strong>Workplace Photo</li></a>
                </ul>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h2 class="panel-title">Find Google Salaries by Job Title</h2>
            </div>
            <div class="panel-content panel-activity">
                    <div class="row">
                        <div class="col-5">
                            <h5 class="text-primary">Job Title</h5>
                            <p class="fw-bold">123$/per Yr</p>
                        </div>
                        <div class="col-4">
                            <h6>Former Employee, more than 8 years</h6>
                            <p class="text-primary">Adrese</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-5">
                            <h5 class="text-primary">Job Title</h5>
                            <p class="fw-bold">123$/per Yr</p>
                        </div>
                        <div class="col-4">
                            <h6>Former Employee, more than 8 years</h6>
                            <p class="text-primary">Adrese</p>
                        </div>
                    </div>
            </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>