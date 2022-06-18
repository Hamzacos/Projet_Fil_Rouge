<?php
    if(isset($_POST['submit'])){
        $pass = $_POST['password'];
        $cpass = $_POST['Cpass'];
        if($pass != $cpass){
            $message[] = 'confirm password not matched!';
        }else{
            $creatUser = new UserController();
        $creatUser->register();
        }
        
        
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashbord</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Centered-Brand-Dark.css">
    <link rel="stylesheet" href="assets/css/Projects-Grid.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <style>
                .fit-cover {
                object-fit: cover;
                }
                #bg {
                height: 100px;
                }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md bg-dark py-3 " style="color: #E2DCDC;background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;), url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;), var(--bs-green);border-color: var(--bs-red);">
        <div class="container"><img src="assets/img/logo.png" style="width: 60px;height: 60px"><a class="navbar-brand d-flex align-items-center" href="#"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-5">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#" style="color: #707070;border-color: var(--bs-dark);font-family: Poppins, sans-serif;">Companies</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="border-color: rgba(0,0,0,0.55);color: #707070;font-family: Poppins, sans-serif;">Salaries</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: #707070;font-family: Poppins, sans-serif;">Careers</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item" style="text-shadow: 0px 0px;"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a href="login"><button class="btn btn-primary" type="button" style="font-family: Poppins, sans-serif;background: rgb(58,56,69);">Login</button></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="height: 600px;">
        <div class="carousel-inner h-100">
            <img class="w-100 d-block position-absolute h-100 fit-cover" src="assets/img/Leadership-working-with-his-employee.jpg" alt="Slide Image" style="z-index: -1;">
<!--                 <div class="row justify-content-center "> -->
                        <div class="col-12 col-sm-6 col-md-4 mt-5 px-5">
                                    <h1 class="text-dark py-3">Claim Your Free Employer Profile </h1>
                            <hr class="bg-dark border-5 border-top border-dark">
                            <h2>Take the first step<br>
in telling your story.</h2>
            </div>
    </div>
</div>
<?php
                    if(isset($message)){
                        foreach($message as $message){
                            echo '
                            <div class="message text-center py-3">
                                <span class="text-danger border border-danger"><strong>'.$message.'</strong></span>
                                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                            </div>
                            ';
                        }
                    }
            ?>
    <section class="hero" style="background: #e2dcdc;height: 973px;">
        <section class="position-relative py-4 py-xl-5">
            <div class="container"><div class="row mb-5">
    <div class="col-md-8 col-xl-6 text-center mx-auto">
        <h2 class="text-center" style="font-weight: bold;font-style: italic;"><br />Take control of the conversatioand show <br />ideal candidates why they want to work with you.<br /><br /></h2>
    </div>
</div><div class="row d-flex justify-content-center">
    <div class="col-7 rounded">
        <div class="card mb-5">
            <div class="card-body d-flex flex-column align-items-center">
                <form class="text-center w-100 form" method="post">
                    <div class=" mb-3 d-flex justify-content-between">
                        <div class="d-flex flex-column col-5">
                            <label class="text-start">First Name</label>
                            <input class="form-control me-5 name" type="text" name="name" placeholder="First Name" id="name" />
                            <div class="errorNom text-danger"></div>
                        </div>
                        <div class="d-flex flex-column col-5">
                            <label class="text-start">Last Name</label>
                            <input class="form-control prenom" type="text" name="prenom" placeholder="Last Name" id="prenom" />
                            <div class=" errorPrenom text-danger"></div>
                        </div>
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <label class="text-start">Company</label>
                        <input class="form-control company" type="text" name="company" placeholder="Company" id="company"/>
                        <div class=" errorCompany text-danger"></div>
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <label class="text-start">Work Email Address</label>
                        <input class="form-control email" type="email" name="email" placeholder="Work Email Address" id="email" />
                        <div class=" errorEmail text-danger"></div>
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <label class="text-start">Password</label>
                        <input class="form-control password" type="password" name="password" placeholder="Password" id="password" />
                        <div class="errorPassword text-danger"></div>
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <label class="text-start">Confirm Password</label>
                        <input class="form-control Cpass" type="password" name="Cpass" placeholder="Confirm Password" id="Cpass"/>
                        <div class="errorCpass text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-dark d-block w-100 submit" type="submit" name="submit">Create Account</button>
                    </div>
                    <p class="text-muted">Already have an account ?<a href="login">Sign In</a></p>
                </form>
            </div>
        </div>
    </div>
</div></div>
        </section>
    </section>
    <div class="container py-4 py-xl-5"><div class="row mb-5">
    <div class="col-md-8 col-xl-6 text-center mx-auto">
        <h2>Your future hires want to know more</h2>
    </div>
</div><div class="row gy-4 row-cols-1 row-cols-md-2">
    <div class="col">
        <div class="d-flex flex-column flex-lg-row h-100">
            <div class="m-auto col-4 d-flex justify-content-center align-item-center">
                <div><img class="rounded img-fluid d-block fit-cover" style="height: 100px;" src="assets/img/pen-svgrepo-com.svg" /></div>
            </div>
            <div class="m-auto col-8 d-flex justify-content-center align-item-center">
                <div>
                    <h4>Tell your story<br /></h4>
                    <p>Tell candidates why you’re a place they should want to work,
                        and highlight your unique mission statement, logo and more.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="d-flex flex-column flex-lg-row h-100">
            <div class="m-auto col-4 d-flex justify-content-center align-item-center">
                <div><img class="rounded img-fluid d-block fit-cover" style="height: 100px;" src="assets/img/search-8931.svg" /></div>
            </div>
            <div class="m-auto col-8 d-flex justify-content-center align-item-center">
                <div>
                    <h4>Reach &amp; influence talent<br /></h4>
                    <p>Shape your brand perception by surfacing awards,
                        ratings and reviews, plus compelling company updates.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="d-flex flex-column flex-lg-row h-100">
            <div class="m-auto col-4 d-flex justify-content-center align-item-center">
                <div><img class="rounded img-fluid d-block fit-cover" style="height: 100px;" src="assets/img/chart-1482.svg" /></div>
            </div>
            <div class="m-auto col-8 d-flex justify-content-center align-item-center">
                <div>
                    <h4>Do more with rich analytics<br /></h4>
                    <p>Filter ratings and reviews by job title, location and employment
                        status to better monitor how your brand is perceived.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="d-flex flex-column flex-lg-row h-100">
            <div class="m-auto col-4 d-flex justify-content-center align-item-center">
                <div><img class="rounded img-fluid d-block fit-cover" style="height: 100px;" src="assets/img/speech-bubble-with-star-svgrepo-com.svg" /></div>
            </div>
            <div class="m-auto col-8 d-flex justify-content-center align-item-center">
                <div>
                    <h4>Go beyond reading reviews<br /></h4>
                    <p>Show you’re listening by responding to reviews and showcase
                        your exceptional employee experience by requesting even more</p>
                </div>
            </div>
        </div>
    </div>
</div></div>
<footer>
    <div class="container-fluid py-4 py-lg-5" style="background-color: #BA9277;">
        <div class="row my-4">
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0"><img class="ft" src="assets/img/logo.png"></div>
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

<script>
    let formEl = document.querySelector('.form')

    let nomEl = document.querySelector('.name')
    let prenomEl = document.querySelector('.prenom')
    let companyEl = document.querySelector('.company')
    let emailEl = document.querySelector('.email')
    let password = document.querySelector('.password')
    let Cpass = document.querySelector('.Cpass')

    let errorNom = document.querySelector('.errorNom')
    let errorPrenom = document.querySelector('.errorPrenom')
    let errorCompany = document.querySelector('.errorCompany')
    let errorEmail = document.querySelector('.errorEmail')
    let errorPassword = document.querySelector('.errorPassword')
    let errorCpass = document.querySelector('.errorCpass')
    

    formEl.addEventListener('submit', (e) =>  {
        // e.preventDefault();
        if(nomEl.value == ''){
            e.preventDefault()
            errorNom.textContent = "Name is empty"
        }else{
            errorNom.textContent = ""
        }

        if(prenomEl.value == ''){
            e.preventDefault()
            errorPrenom.textContent = "Last Name is empty"
        }else{
            errorPrenom.textContent = ""
        }

        if(companyEl .value == ''){
            e.preventDefault()
            errorCompany.textContent = "Company is empty"
        }else{
            errorCompany.textContent = ""
        }
         
        let regexEmail =  /^[A-Za-z0-9_-]{4,}@[a-z]{4,10}[.]{1}[a-z]{3,4}$/;
        if(emailEl.value.trim() == ''){
          e.preventDefault();
          errorEmail.textContent = 'Email is empty';
          emailEl.style.border = '1px solid red'
        }
        else if(!regexEmail.test(emailEl.value.trim())){
          e.preventDefault()
          errorEmail.textContent = 'Email no empty sous forme example@email.com'
          emailEl.style.border = '1px solid red'
        }
        else{
          errorEmail.textContent = ''
          emailEl.style.border = ''
        }
        
        if(password.value == ''){
            e.preventDefault()
            errorPassword .textContent = "password is empty"
        }else{
            errorPassword .textContent = ""
        }
        
        if(Cpass.value == ''){
            e.preventDefault()
            errorCpass.textContent = "password is empty"
        }else{
            errorCpass.textContent = ""
        }
        
    })
  </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>