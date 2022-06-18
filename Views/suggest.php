<?php
    if(isset($_POST['insert'])){
        $suggest = new suggestController();
        $suggest-> addsuggest();
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Suggest</title>
    <link rel="stylesheet" href="./assets/bootstrap/css/boootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;display=swap">
</head>

<body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('./assets/img/bgg.jpg');">
    <h1 class="text-center text-white d-none d-lg-block site-heading"><span class="text-primary site-heading-upper mb-3">Aretemis-JOBS&nbsp;</span><span class="site-heading-lower">Suggest Your Company</span></h1>
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark py-lg-4" id="mainNav">
        <div class="container"><a class="navbar-brand text-uppercase d-lg-none text-expanded" href="#">Brand</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarResponsive"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="dashbord">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="page-section clearfix">
        <div class="container">
            <div class="intro"><img class="img-fluid intro-img mb-3 mb-lg-0 rounded" src="./assets/img/sug.jpg">
                <div class="text-center intro-text p-5 rounded bg-faded">
                    <h2 class="section-heading mb-4"><span class="section-heading-lower">thank you for your suggestion</span></h2>
                    <form  method="POST" action ="" >
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Job Title</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your job title" name="job">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label"> Your Company</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your Company" name="company">
                        </div>
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                        <div class="mx-auto intro-button"><button class="btn btn-primary d-inline-block mx-auto btn-xl" type="submit" name="insert">Suggest</button></div>
                      </form>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="text-center cta-inner rounded">
                        <h2 class="section-heading mb-4"><span class="section-heading-upper">Our Promise</span><span class="section-heading-lower">To You</span></h2>
                        
                        <p class="mb-0">the objective of this web platform is to help job seekers to know more idea about the company by giving an overview of its culture, its wages, its hiring process !!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-center footer text-faded py-5">
        <div class="container">
            <p class="m-0 small">Copyright&nbsp;©&nbsp;AretmisJobs 2022</p>
        </div>
    </footer>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/js/current-day.js"></script>
</body>

</html>