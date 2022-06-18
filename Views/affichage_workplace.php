<?php
  
   $data = new companyController();
   $company = $data->getCompanyByName();

   if(!$company) {
    header('location: suggest');

  }

  if(isset($_GET['search'])){
    $place = new workplaceController();
    $img = $place-> getImageyByName();
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
                <h2 class="panel-title"><?php echo $company['Name'] ?> Office Photos</h2>
            </div>
            <div class="panel-content panel-activity">

                <section class="photo-gallery">
                    <div class="container">
                   
                        <div class="row mb-5">
                            <!-- <div class="col-md-8 col-xl-6 text-center mx-auto">
                                <h2>Heading</h2>
                                <p class="w-lg-50">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
                            </div> -->
                        </div>
                        <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox>
                            <?php foreach($img as $image): ?>
                              <div class="col item"><img class="img-fluid" src="./img/<?php echo $image['img']?>" /></a></div>
                            <?php endforeach; ?>
                        </div>
                       
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>

<script src="assets/js/search.js"></script>
</body>
</html>