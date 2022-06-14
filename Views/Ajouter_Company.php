<?php 
  if(isset($_POST['insert'])){
    $newCompany = new companyController();
    $newCompany->addCompany();
    // echo 'llalalaaa';
    // die();
   }
  
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Admin Template (Bootstrap v3.3)</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
<link rel="stylesheet" href="assets/css/Admin_style.css">

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <button type="button" class="navbar-toggle collapsed pull-left visible-xs" data-toggle="collapse" data-target="#sidebar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <a class="navbar-brand" href="#"><img src="assets/img/logo.png" style="width: 30px;height: 30px" ></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="Dashbord_Admin" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="assets/img/Mediamodifier-Design (1).svg" width="25px" height="25px"/> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Settings</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout">Log out</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right">
        <input type="text" class="form-control" placeholder="Search...">
        <button class="btn btn-primary">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar collapse" id="sidebar">
      <div class="list-group">
        <a href="Dashbord_Admin" class="list-group-item active"><span class="fa fa-fw fa-dashboard"></span> Dashboard</a>
        <a href="#" class="list-group-item collapsed" data-target="#submenu1" data-toggle="collapse" data-parent="#sidebar"><span class="fa fa-fw fa-dashboard"></span> Post Categories<span class="caret arrow"></span></a>
          <div class="list-group collapse" id="submenu1">
            <a href="AD_Company" class="list-group-item">Company Review</a>
            <a href="#" class="list-group-item">Salary</a>
            <a href="#" class="list-group-item">Interview Review</a>
            <a href="#" class="list-group-item">Workplace Photo</a>
          </div>
        <a href="#" class="list-group-item"><span class="fa fa-fw fa-dashboard"></span> Message</a>
        <a href="Ajouter_Company" class="list-group-item"><span class="fa fa-fw fa-dashboard"></span> Ajouter Entreprise</a>
      </div>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1 class="page-header">ADD Company</h1>
      <form method="POST">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Name of Company</label>
            <input type="texte" class="form-control" name="Name" id="inputEmail4" placeholder="Enter the Name of the Company">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">E-mail of company</label>
            <input type="email" class="form-control" name="email" id="inputPassword4" placeholder="Enter the email adresse">
          </div>
        </div>
        <!-- <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" name ="adresse" id="inputAddress" placeholder="1234 Main St">
        </div> -->
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Phone</label>
              <input type="texte" class="form-control" name="phone" id="inputEmail4" placeholder="phone of the company">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Secteur d'activité</label>
              <input type="text" class="form-control" name="secteur" id="inputPassword4" placeholder="Secteur">
            </div>
          </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" placeholder="1234 Main St"  name="city">
          </div>
          <!-- <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <input type="text" class="form-control" name="" id="inputCity">
          </div> -->
          <div class="form-group col-md-6">
            <label for="inputZip">Site web</label>
            <input type="text" name="url" class="form-control" id="inputZip">
          </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label>Image of the company </label>
                <span class="btn btn-default btn-file">
                <input id="input-2"  type="file" class="file form-control " multiple data-show-upload="true" data-show-caption="true"  name="image">
                </span>
        </div>
            <button type="submit" class="btn btn-primary mt-5" name="insert">Add Company</button>
          
      </form>
        


      
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'>
</script><script  src="assets/js/Admin_script.js"></script>

</body>
</html>
