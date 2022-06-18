<?php 
        class ratesalaryController{

            public function getAllSalary(){
        
                $salary = ratesalary::getAll();
                return $salary; 
            }

            public function addRateSalary(){
                if(isset($_POST['insert'])){
                    $data = array(
                        'base_salary'     => $_POST['base_salary'],
                        'devise'           => $_POST['devise'],
                        'per'             => $_POST['per'],
                        'Name'            => $_POST['Name'],
                        'job'             => $_POST['job'],
                        'years'           => $_POST['years'],
                        'location'        => $_POST['location'],
                    );
    
                    $result = ratesalary::add($data);
                    if($result == 'ok'){
                        header('location: dashbord'); 
                    }else{
                        echo $result;
                    }
                }
            }

            public function getSalaryByName(){
                if(isset($_GET['search'])){
                    $data = array(
                        'search' => $_GET['search']
                    );
                }
                $company = ratesalary::getsalaryBName($data);
                return $company;
            }


            public function getOneRtae(){
                if(isset($_POST['id_salary'])){
                    $data = array(
                    'id_salary' => $_POST['id_salary']
                    );
                }
                $salary = ratesalary::getRtas($data);
                return $salary;
            }

            public function updatestatus(){
                if(isset($_POST['status'])){
                    $data = array(
                    'id_salary'  => $_POST['id_salary'],
                    'Accepter' => "Accepter",
                    );
                    $result = ratesalary::updateStatuts($data);
                    if($result === 'ok'){
                        header('location: AD_Salary'); 
                    }else{
                        echo $result;
                    }
                }
            }

            public function CountAllRate(){ 
                if(isset($_GET['search'])){
                    $data = array(
                        'search' => $_GET['search']
                    );
                }
                $rate = ratesalary::CountAll($data);
                return $rate; 
            }

            public function deleteSal(){
                if(isset($_POST['id_salary'])){
                    $data['id_salary'] = $_POST['id_salary'];
                    $result = ratesalary::delete($data);
                    if($result === 'ok'){
                        header('location: AD_Salary');
                      
                        
                    }else{
                        echo $result;
                    }
            }
         }

        }

?>