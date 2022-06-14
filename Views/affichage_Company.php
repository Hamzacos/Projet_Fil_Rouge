<?php
  if(isset($_GET['search'])){
    $data = new ratecompanyController();
    $rate = $data->getRateByName();
  }
  
   $data = new companyController();
   $company = $data->getCompanyByName();

?>
<?php
  
  $data = new companyController();
  $company = $data->getCompanyByName();

  $dataRate = new ratecompanyController();
  $nbrRate =$dataRate-> CountAllRate();
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
  <style type="text/css">
	.star_rated { color: gold; }
	.star {text-shadow: 0 0 1px #F48F0A; cursor: pointer;  }
</style>
</head>
<body>
<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
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
                <img src="./img/<?php  echo  $company['image'] ?>" alt="" width="100px" />
                <img class="rounded">
                <h3 class="h3"><?php echo $company['Name']; ?></h3>
            </div>
            <div class="profile-cover__action bg--img" data-overlay="0.3">
                <button class="btn btn-rounded btn-info">
                    <i class="fa fa-plus"></i>
                    <span>Follow</span>
                </button>
            </div>
            <div class="profile-cover__info">
                <ul class="nav">
                    <a href="affichage_Company?search=<?php echo $company['Name'] ?>"  class="text-decoration-none"><li class=" text-dark"><strong><?php echo  $nbrRate[0] ?></strong>Company Review</li></a>
                    <a href="afichage_Salary?search=<?php echo $company['Name'] ?>"  class="text-decoration-none"><li class=" text-dark"><strong>33</strong>Salary</li></a>
                    <a href="#"  class="text-decoration-none"><li class=" text-dark"></li><li><strong>136</strong>Interview Review</li></a>
                    <a href="#"  class="text-decoration-none"><li class=" text-dark"></li><strong>136</strong>Workplace Photo</li></a>
                </ul>
            </div>
        </div>

        <div class="panel">
            <div class="panel-heading">
                <h2 class="panel-title">What people are saying about <?php echo $company['Name']; ?></h2>
            </div>
            <div class="panel-content panel-activity">

           
                <div class="card shadow p-3 mb-5 bg-white rounded">
                <?php foreach($rate as $key): ?>
                    <div class="card-header">
                    <h5 class="text-primary"><?php echo $key['job']; ?></h5>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">
                        <div lass="star">
                            <?php
                            for($i = 1; $i <= 5; $i++) {
                            if($i <= $key['rate']) {
                            ?>
                            <span class="star_rated" onclick="ratestar(<?php echo $key['rate']; ?>, <?php echo $i; ?>)">&#x2605;</span>
                            <?php }  else {  ?>
                            <span onclick="ratestar(<?php echo $key['rate']; ?>, <?php echo $i; ?>)">&#x2605;</span>
                            <?php  }
                            }
                            ?>
                        </div>
                      </h5>
                      <h6 class="mt-3 text-dark"><?php echo $key['tags']; ?></h6>
                      <label for="">Pros : </label>
                      <p class="card-text"><?php echo $key['pros']; ?></p>
                      <label for="">Cons :</label>
                      <p class="card-text"><?php echo  $key['cons']; ?></p>
                      <hr>
                      <h6>Be the first to find this review helpful</h6>
                      <button type="button" class="btn btn-secondary"> <i class='bi bi-emoji-smile'></i></button>
                    </div>
                   
                  <?php endforeach; ?>

            </div>
        </div>

    </div>
</div>


<script type="text/javascript">
function ratestar($id, $rate){
	$.ajax({
		type: 'GET',
		url: 'rating.php',
		data: 'functionName=update&productid='+$id+'&rating='+$rate,
		success: function(data) { 
			location.reload();
		}
	});
}
</script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/search.js"></script>
</body>
</html>