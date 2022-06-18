<?php
  
   $data = new companyController();
   $company = $data->getCompanyByName();

   if(!$company) {
    header('location: suggest');
  }

  if(isset($_GET['search'])){
    $data = new RateinterviewController();
    $interview = $data->getInterviewByName();
  }

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>COMPANY REVIEW</title>
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
                <h2 class="panel-title"><?php  echo  $company['Name'] ?> Interview Questions</h2>
            </div>
            <div class="panel-content panel-activity">

            <?php foreach($interview as $key): ?>
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-header text-primary">
                           <?php echo $key['job']; ?>
                    </div>
                    <div class="card-body">
                      <h6 class="card-title">
                        <p><?php echo $key['difficulty']; ?> / Accepted: <?php echo $key['offer']; ?></p>
                      </h6>
                      <label for="" class="fw-bold">Interview Process : </label>
                      <p class="card-text"><?php echo $key['process']; ?>.</p>
                      <label for="" class="fw-bold">Questions</label>
                      <p class="card-text"><?php echo $key['questions']; ?>.</p>
                      <label for="" class="fw-bold">Answer</label>
                      <p class="card-text"><?php echo $key['answer']; ?>.</p>
                      <hr>
                      <h6>Be the first to find this review helpful</h6>
                      <button type="button" class="btn btn-secondary"> <i class='bi bi-emoji-smile'></i></button>
                    </div>
                  </div>
              <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/search.js"></script>
</body>
</html>