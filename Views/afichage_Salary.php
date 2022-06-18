<?php
  
   $data = new companyController();
   $company = $data->getCompanyByName();

   if(!$company) {
    header('location: suggest');

  }
  if(isset($_GET['search'])){
    $data = new ratesalaryController();
    $rate = $data->getSalaryByName();
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

  <?php require_once('navbar.php'); ?>
  <?php require_once ('headerAffichage.php'); ?>
        <div class="panel">
            <div class="panel-heading">
                <h2 class="panel-title">Find <?php echo $company['Name']; ?> Salaries by Job Title</h2>
            </div>
            <div class="panel-content panel-activity">

            <?php foreach($rate as $key): ?>

                    <div class="row">
                        <div class="col-5">
                            <h5 class="text-primary"><?php echo $key['job']; ?></h5>
                            <p class="fw-bold"><?php echo $key['base_salary']; ?> <?php echo $key['devise']; ?>/<?php echo $key['per']; ?> <?php echo $key['years']; ?></p>
                        </div>
                        <div class="col-4">
                            <h6>Former Employee, more than <?php echo $key['years']; ?> <?php echo $key['per']; ?> </h6>
                            <p class="text-primary"><?php echo $key['location']; ?></p>
                        </div>
                    </div>
                    <hr>
                    <?php endforeach; ?>
                    <!-- <div class="row">
                        <div class="col-5">
                            <h5 class="text-primary">Job Title</h5>
                            <p class="fw-bold">123$/per Yr</p>
                        </div>
                        <div class="col-4">
                            <h6>Former Employee, more than 8 years</h6>
                            <p class="text-primary">Adrese</p>
                        </div>
                    </div> -->
            </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>