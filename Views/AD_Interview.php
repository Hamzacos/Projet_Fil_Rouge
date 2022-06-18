<?php
   $data = new RateinterviewController();
   $interview = $data->getAllInterview();
  
   if(isset($_POST['id_interview'])){
    $editinterview = new RateinterviewController();
    $int = $editinterview->getOneRtae();
  }

  if(isset($_POST['status'])){
    $edit_interview = new RateinterviewController();
    $edit_interview->updatestatus();
  }

  ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>job interview</title>
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
        <a href="#" class="list-group-item active"><span class="fa fa-fw fa-dashboard"></span>job interview</a>
        <a href="#" class="list-group-item collapsed" data-target="#submenu1" data-toggle="collapse" data-parent="#sidebar"><span class="fa fa-fw fa-dashboard"></span> Post Categories<span class="caret arrow"></span></a>
          <div class="list-group collapse" id="submenu1">
            <a href="AD_Company"   class="list-group-item">Company Review</a>
            <a href="AD_Salary"    class="list-group-item">Salary</a>
            <a href="AD_Interview" class="list-group-item">Interview Review</a>
            <a href="AD_WorkPlace" class="list-group-item">Workplace Photo</a>
          </div>
        <a href="msg" class="list-group-item"><span class="fa fa-fw fa-dashboard"></span> Message</a>
        <a href="Ajouter_Company" class="list-group-item"><span class="fa fa-fw fa-dashboard"></span> Ajouter Entreprise</a>
      </div>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1 class="page-header">Company Post</h1>

    


      <h1 class="sub-header">
        <div class="btn-group pull-right" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Print</button>
        <button type="button" class="btn btn-primary">Export</button>
      </div>
        Table
      </h1>
      <div class="table-responsive">
        <table class="table table-hover table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>Company Name</th>
              <th>Job Title</th>
              <th>Interview Process</th>
              <th>Interview Questions</th>
              <th>Answer this question</th>
              <th>Status</th>
              <!-- <th></th> -->
            </tr>
          </thead>
          <?php foreach($interview as $interviews): ?>
          <tbody>
            <tr>
              <td><?php echo $interviews['Name'] ?></td>
              <td><?php echo $interviews['job'] ?></td>
              <td><?php echo $interviews['process'] ?></td>
              <td><?php echo $interviews['questions'] ?></td>
              <td><?php echo $interviews['answer'] ?></td>
              <form action="" method="POST">
              <td><button type="submit" name="status" class="btn btn-danger btn" ><?php echo $interviews['status'] ?></button></td>
              <input type="hidden" name="id_interview" value="<?php echo  $interviews['id_interview'];?>">
              </form>
              <td>
              <form action="deleteINT" method="POST">
                <input type="hidden" name="id_interview" value="<?php  echo $interviews['id_interview'] ?>">
                <button class="btn btn-sm btn-danger">
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
<!-- partial -->
<script>
  function getValue() {
    // Sélectionner l'élément input et récupérer sa valeur
    let btns = [...document.querySelectorAll('.btn')]
    btns.forEach(btn => {
      if(btn.textContent.toLowerCase() == 'accepter') {
        btn.classList.remove('btn-danger')
        btn.style.background = 'green';
        btn.style.color = 'white'
      }
    })
    
  }
  window.addEventListener('load', getValue)
</script>
  <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'>
</script><script  src="assets/js/Admin_script.js"></script>

</body>
</html>
