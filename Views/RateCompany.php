<?php 
  if(isset($_POST['insert'])){
    $RatCompany = new ratecompanyController();
    $RatCompany->addRateCompany();
    // echo 'llalalaaa';
    // die();
   } 
?>
<?php
   $data = new companyController();
   $companys = $data-> getAllCompany();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate Company</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styleRatin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <style>
                                .rate{

                                border-bottom-right-radius: 12px;
                                border-bottom-left-radius: 12px;

                                }



                                .rating {
                                display: flex;
                                flex-direction: row-reverse;
                                justify-content: start;
                                }

                                .rating>input {
                                display: none
                                }

                                .rating>label {
                                position: relative;
                                width: 1em;
                                font-size: 30px;
                                font-weight: 300;
                                color: #FFD600;
                                cursor: pointer
                                }

                                .rating>label::before {
                                content: "\2605";
                                position: absolute;
                                opacity: 0
                                }

                                .rating>label:hover:before,
                                .rating>label:hover~label:before {
                                opacity: 1 !important
                                }

                                .rating>input:checked~label:before {
                                opacity: 1
                                }

                                .rating:hover>input:checked~label:before {
                                opacity: 0.4
                                }
            </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand px-5" href="#"><img src="assets/img/logo.png" style="width: 60px;height: 60px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>


<div class="container-fluid bg-light">
        <div class="row justify-content-center">
            <div class="col-9 border  mt-5 mb-5 bg-white">
                <h1 class="mt-5" >Rate a Company</h1><br>
                <p>It only takes a minute! And your anonymous review will help other job seekers.</p>
                <form class=" p-3" method="post" action="">
                    <div class="form-group row mt-3 mb-5">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Company*</label>
                        <div class="col-sm-7">
                            <!-- <input type="text" name="Name" class="form-control"  placeholder="Name Company"> -->
                            <select id="inputState" class="form-control" name="Name" >
                                <option selected>Choose Your Company</option>
                                <?php foreach($companys as $company): ?>
                                <option><?php echo $company['Name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                           
                        </div>
                    </div>
                    <label for="Overall Rating" class="px-1">Overall Rating*</label>
                    <div class="rating"> 
                         <input type="radio"  name="rate" value="5" id="5"><label for="5">☆</label> 
                         <input type="radio" name="rate" value="4" id="4"><label for="4">☆</label>
                         <input type="radio" name="rate" value="3" id="3"><label for="3">☆</label> 
                         <input type="radio" name="rate" value="2" id="2"><label for="2">☆</label> 
                         <input type="radio" name="rate" value="1" id="1"><label for="1">☆</label>
                    </div>
                    <div class ="mb-3">
                        <br><p>Are you a current or former employee?</p>
                            <div class="btn-group mx-5">
                                <input type="radio" class="btn-check" name="tags" value ="Current" id="option1" autocomplete="off" checked />
                                <label class="btn btn-secondary" for="option1">Current</label>

                                <input type="radio" class="btn-check" name="tags" value="Former" id="option2" autocomplete="off" />
                                <label class="btn btn-secondary" for="option2">Former</label>

                            </div>
                    </div>
                   <div class="form-group col-6 mb-3">
                        <label for="Your Job Title">Your Job Title</label>
                        <input type="text" class="form-control" name="job" placeholder="Enter Your Job Title">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Pros*</label>
                        <textarea class="form-control"name="pros" id="exampleFormControlTextarea1" rows="3" placeholder="share some of the best reasons to work "></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Cons*</label>
                        <textarea class="form-control" name ="cons" id="exampleFormControlTextarea1" rows="3" placeholder="share some of the downsides of working "></textarea>
                      </div>
                      <div class="w-100 d-flex justify-content-end">
                        <button type="submit" name="insert" class="btn btn-dark col-4 mt-5">Submit Review</button>
                      </div>
                </form>
            </div>
        </div>
</div>
      

<footer class="text-center bg-dark">
    <div class="container text-white py-4 py-lg-5">
        <ul class="list-inline">
            <li class="list-inline-item me-4"><a class="link-light" href="#">Company</a></li>
            <li class="list-inline-item me-4"><a class="link-light" href="#">Salary</a></li>
            <li class="list-inline-item"><a class="link-light" href="#">Carrer</a></li>
        </ul>
        <ul class="list-inline">
            <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook text-light">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                </svg></li>
            <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter text-light">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                </svg></li>
            <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram text-light">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                </svg></li>
        </ul>
        <p class="text-muted mb-0">Copyright © 2022 Aretmis-Jobs</p>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/js/rating.js"></script>

</body>
</html>