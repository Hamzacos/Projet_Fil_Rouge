<?php
   $data = new companyController();
   $companys = $data-> getAllCompany();
?>
<?php
  $dataCompany = new companyController();
  $nbrcompany =$dataCompany-> CountAllCompany();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
<link rel="stylesheet" href="assets/css/Admin_style.css">

</head>
<body>
<!-- partial:index.partial.html -->
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
        <!-- <li><a href="#">Link</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="assets/img/Mediamodifier-Design (1).svg" width="25px" height="25px"/> <span class="caret"></span></a>
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
        <a href="#" class="list-group-item active"><span class="fa fa-fw fa-dashboard"></span> Dashboard</a>
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
      <h1 class="page-header">Welecom <?php echo $_SESSION['name'];?></h1>

      <section class="row text-center placeholders">
        <div class="col-6 col-sm-3">
          <div class="panel panel-info">
            <div class="panel-heading">Number Company</div>
            <div class="panel-body">
              <h4><?php echo $nbrcompany[0] ?></h4>
              <p>Company</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-3">
          <div class="panel panel-success">
            <div class="panel-heading">Number Post</div>
            <div class="panel-body">
              <h4>123</h4>
              <p>Data</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-3">
          <div class="panel panel-warning">
            <div class="panel-heading">Number of Company</div>
            <div class="panel-body">
              <h4>123</h4>
              <p>Data</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-3">
          <div class="panel panel-danger">
            <div class="panel-heading">Number User</div>
            <div class="panel-body">
              <h4>123</h4>
              <p>Data</p>
            </div>
          </div>
        </div>
      </section>

      <h1 class="sub-header">
        <div class="btn-group pull-right" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Print</button>
        <button type="button" class="btn btn-primary">Export</button>
      </div>
        Company
      </h1>
      <div class="table-responsive">
        <table class="table table-hover table-bordered">
          <thead class="thead-dark">
          
            <tr>
              <th>#</th>
              <th>Name of Company</th>
              <th>E-mail of company</th>
              <th>Phone</th>
              <th>Site we</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($companys as $company): ?>
            <tr>
            
              <td><img class="rounded" src="./img/<?php  echo  $company['image'] ?>"></td>
              <td><?php echo $company['Name'] ?></td>
              <td><?php echo $company['email'] ?></td>
              <td><?php echo $company['phone'] ?></td>
              <td><?php echo $company['url'] ?></td>
              <td style="width: 100px;display:flex;border: none;justify-content: space-around;">
                <form method="POST" action="updateCompany" classe ="mr-1">
                <input type="hidden" name="id_entreprise" value="<?php echo  $company['id_entreprise'];?>">
                <button class="border-0 bg-success p-0">
                <span class="fa fa-pencil"></span>
                </button>            
              </form>
              <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="border-0 bg-white p-0">
              <span class="fa fa-trash"></span>
              </button> -->
              <form action="deleteCompany" method="POST">
                <input type="hidden" name="id_entreprise" value="<?php echo $company['id_entreprise']?>">
                <button class="border-0 bg-danger p-0">
                <span class="fa fa-trash"></span>
               </form>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Etudiants</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        You Are Sure To Delete
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="" method="POST">
          <input type="hidden" name="id_entreprise" value="<?php echo $company['id_entreprise']?>">
          <button type="submit" class="border-0 btn btn-dark">
            Delete
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
    
<!-- partial -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script  src="assets/js/Admin_script.js"></script>

</body>
</html>
