<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashbord</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Articles-Cards.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<!-- <script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script> -->
<body>
   

<?php require_once('navbar.php'); ?>


    <div class="container"><div class="row">
    <div class="col-md-6" style="border-radius: 5px;box-shadow: inset 0px 0px;">
        <div class="card my-4" style="box-shadow: 2px 2px 5px;">
            <h5 class="text-center"><br /><strong><em>Hello, what would you like to explore </em></strong><br /><strong><em>today?</em></strong><br /><br /></h5>
            <div class="card-body"><img src="assets/img/user-profile-svgrepo-com.svg" width="68px" height="70px" />
                <p><?php echo $_SESSION['email'];?></p>
                <div class="d-flex space-bteween">
                    <img src="assets/img/briefcase-1944.svg" width="50px" height="30px" />
                    <p><?php echo $_SESSION['company']; ?></p>
                </div>
                <div class="d-flex space-bteween">
                    <img src="assets/img/location-sign-svgrepo-com.svg" width="50px" height="30px" />
                    <p>Location</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col py-4">
        <h4 class="text-center"><strong><em>Getting the Most of</em></strong><br /><strong><em>Your Aretemis</em></strong><br /><br /></h4>
        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/undraw_creative_team_re_85gn.svg" width="100px" height="120px" style="background: #7e3300;" />
            <div class="card-body">
                <h5 class="card-title">Share Your Insights</h5>
                <p class="card-text">Help other members of our community<br />get the inside scoop by anonymously sharing<br /> a company review, interview experience,<br /> or your salary.</p>
                <div class="w-100"><a href="Form_Cont" class="text-decoration-none"><button class="mx-auto btn btn-primary btn-lg d-lg-flex justify-content-center align-items-center align-items-lg-center" type="button" style="background: rgb(58,56,69);border-radius: 5px;width: 193.375px;">Get started</button></a></div>
            </div>
        </div>
    </div>
</div></div>
    <div class="container">
        <h1 class="text-center"><strong><em>Explore Salaries</em></strong></h1>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body" style="box-shadow: 3px 3px 10px;">
                        <h4 class="card-title">Journaliste</h4>
                        <h6 class="text-muted card-subtitle mb-2">Morocco </h6>
                        <div><canvas id="myChart" width="400" height="400" style="display: block; height: 191px; width: 382px;"></canvas></div> 
                        <p class="text-start card-text" style="font-size: 28px;"><strong>12.958 DH</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="box-shadow: 3px 3px 10px;">
                        <h4 class="card-title">English Teacher </h4>
                        <h6 class="text-muted card-subtitle mb-2">Morocco </h6>
                        <div><canvas id="myChart" width="400" height="400" style="display: block; height: 191px; width: 382px;"></canvas></div>
                        <p class="card-text" style="font-size: 28px;"><strong>12.808 DH</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="box-shadow: 3px 3px 10px;">
                        <h4 class="card-title">Customer Relationship</h4>
                        <h6 class="text-muted card-subtitle mb-2">Morocco </h6>
                        <div><canvas id="myChart" width="400" height="400" style="display: block; height: 191px; width: 382px;"></canvas></div>
                        <p class="card-text" style="font-size: 28px;"><strong>48,000 DH</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div><section class="d-flex p-5 justify-content-center align-items-center">
    <div class="card text-center justify-content-center" style="width: 549px;height: 172px;">
        <div class="card-body" style="width: px;margin: 0px;padding: 26px;background: #3a3845;height: 196px;"><img src="assets/img/arrow-in-the-target-svgrepo-com.svg" width="56px" height="56px" style="color: var(--bs-red);text-align: center;" />
            <p class="text-center card-text" style="font-size: 20px;color: rgb(247,204,172);border-color: rgb(255,255,255);"><strong>Add a job title and location to your profile to</strong><br /><strong> personalize your salary estimate.</strong></p>
        </div>
    </div>
</section>
    <div class="container">
        <h1 class="text-center"><strong><em>Companies You Follow !!</em></strong></h1><div class="row">
    <div class="col-md-6" style="width: 600px;">
        <div class="card">
            <div class="card-body">
             <div>
                <div  class="d-flex w-50">
                <img class="rounded" src="assets/img/capgemini-squareLogo-1631742564673%20(1).png" style="border-radius: 10px;padding-right: 3px;" />
                    
                    <div class="d-flex flex-column w-50">
                       <h4 style="padding: px;margin: 0px;">Capgemini</h4>
                     <div class="d-flex">
                    <h6 class="text-muted mb-2" style="font-size: 10px;">9K<br /><br />Jobs<br /><br /></h6>
                    <h6 class="text-muted mb-2" style="font-size: 10px;">54K<br /><br />Reviews<br /><br /></h6>
                    <h6 class="text-muted mb-2" style="font-size: 10px;">59K<br /><br />Salaries<br /></h6>
                </div>
                </div>
                 </div>   
                        
                        
                       
                        
                        
                </div>
                
                <p class="card-text">It was well planned and was executed<br /> smoothly; Onboarding processes <br />was well documented and very informative; <br />HR person leading the onboarding <br />processes was very knowledgeable<br /> and helpful; The onboarding session<br /> was ver yong yet enjoyable ...<br /> Continue reading  <br /><br />                                                                  Senior Manager, Princeton, NJ<br />                                                                 Current Employee, less than a year </p>
            </div>
        </div>
    </div>
    <div class="col-md-6" style="width: 600px;">
        <div class="card">
            <div class="card-body">
                <div>
                    <div class ="d-flex w-50">
                        <img src="assets/img/cegedim-squarelogo-1432806536748.png" style="box-shadow: 1px 1px 4px;border-radius: 10px;height: 70px;">
                        <div class="d-flex flex-column w-50" >
                <h4 style ="padding:px;margin:0px;">Cegedim</h4>
                <div class="d-flex ">
                    <h6 class="text-muted mb-2" style="font-size: 10px;">257<br /><br />
                        Jobs<br /><br />
                    </h6>
                    <h6 class="text-muted mb-2" style="font-size: 10px;">
                        257<br/><br/>
                        Reviews<br /><br />
                    </h6>
                    <h6 class="text-muted mb-2" style="font-size: 10px;">
                        257
                        <br /><br />
                        Salaries
                        <br />
                    </h6>
                </div>
                        </div>
                    </div>
                </div>
                <p class="card-text">It was well planned and was executed<br />smoothly; Onboarding processes <br />was well documented and very informative; <br />HR person leading the onboarding <br />processes was very knowledgeable<br />and helpful; The onboarding session<br />was ver yong yet enjoyable ...<br /> Continue reading  <br /><br />                                                                  Senior Manager, Princeton, NJ<br />                                                                 Current Employee, less than a year <br /><br /></p>
            </div>
        </div>
    </div>
</div>
    </div>
    <div class="container py-4 py-xl-5"><div class="row mb-5">
    <div class="col-md-8 col-xl-6 text-center mx-auto">
        <h2>Popular Articles</h2>
    </div>
</div><div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
    <div class="col">
        <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;background: #ba9277;" src="assets/img/undraw_sharing_articles_re_jnkp.svg" />
            <div class="card-body p-4">
                <p class="text-primary card-text mb-0">Article</p>
                <h4 class="card-title">Companies are missing out on <br />talent in candidates over 50</h4>
                <p class="card-text">As companies struggle to fill vacancies <br />amid the twin challenges of the Baby <br />Boomers retiring and the Great Resignation, <br />many are overlooking <br />talent in candidates over the age of 50. <br />Favoring younger candidates<br /><br /> over older ones is not only illegal under the <br />Age Discrimination in Employment <br />Act of 1967 (ADEA), it’s short-sighted. <br />With an increasing…Read More<br /><br /></p>
                <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/90073761.jpg" />
                    <div>
                        <p class="fw-bold mb-0"><strong>Artemis-Jobs</strong><br /></p>
                        <p class="text-muted mb-0">Erat netus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 290px;background: #ba9277;" src="assets/img/logo.png" />
            <div class="card-body p-4">
                <p class="text-primary card-text mb-0">Article</p>
                <h4 class="card-title">What one man’s journey tells <br />us about supporting BIPOC <br />mental health</h4>
                <p class="card-text">Just about anything moves <br />war veteran Dr. Raymond <br />Christian to tears these days.<br /> His near-constant crying is <br />the byproduct of brain<br /> damage he suffered as<br /> the result of a stroke....Read More <br /></p>
                <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/90073761.jpg" />
                    <div>
                        <p class="fw-bold mb-0">Artemis-Jobs</p>
                        <p class="text-muted mb-0">Erat netus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 340px;background: #ba9277;" src="assets/img/undraw_online_articles_re_yrkj.svg" />
            <div class="card-body p-4">
                <p class="text-primary card-text mb-0">Article</p>
                <h4 class="card-title">Artemis-Job Reveals <br />Salary Ranges for All Roles</h4>
                <p class="card-text">Driving workplace transparency is <br />and remains a cornerstone of Glassdoor<br /> since the beginning. The work will <br />always continue, but we are committed <br />to shining a brighter light within<br /> our walls and beyond...Read More</p>
                <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/90073761.jpg" />
                    <div>
                        <p class="fw-bold mb-0"><strong>Artemis-Jobs</strong><br /></p>
                        <p class="text-muted mb-0">Erat netus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>


<footer>
    <div class="container-fluid py-4 py-lg-5" style="background-color: #BA9277;">
        <div class="row my-4">
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0"><img class="ft" src="assets/img/logo.png" style="width:200px;height:200px;"></div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4 text-white">Artemis-Job</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                      <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>About/Press</a>
                    </li>
                    <li class="mb-2">
                      <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Research</a>
                      </li>
                      <li class="mb-2">
                        <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Guides</a>
                        </li>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4 text-white">Employers</h5>
            <ul class="list-unstyled">
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Get a Free Employer Account
                  </a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Employer Center</a>
                  </li>
        </div>
        <hr>
        <div class="d-flex justify-content-between align-items-center pt-3">
            <p class="text-muted mb-0 text-dark">Copyright © 2022 Brand</p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg></li>
                <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                    </svg></li>
                <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                    </svg></li>
            </ul>
        </div>
    </div>
</footer>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/search.js"></script>
</body>
</html>