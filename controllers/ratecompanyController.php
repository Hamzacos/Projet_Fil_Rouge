<?php 
    class ratecompanyController{
        
        public function getAllRate(){
        
            $company = ratecompanys::getAll();
            return $company; 
        }

        public function addRateCompany(){
            if(isset($_POST['insert'])){
                $data = array(
                    'Name'        => $_POST['Name'],
                    'rate'        => $_POST['rate'],
                    'tags'        => $_POST['tags'],
                    'job'         => $_POST['job'],
                    'pros'        => $_POST['pros'],
                    'cons'        => $_POST['cons'],
                );

                $result = ratecompanys::add($data);
                if($result == 'ok'){
                    header('location: dashbord'); 
                }else{
                    echo $result;
                }
            }
        }

        public function getRateByName(){
            if(isset($_GET['search'])){
                $data = array(
                    'search' => $_GET['search']
                );
            }
            $company = ratecompanys::getRateBName($data);
            return $company;
        }

        public function getOneCompany(){
            if(isset($_POST['id_entreprise'])){
                $data = array(
                    'id_entreprise' => $_POST['id_entreprise']
                );
            }
            $company = Company::getCompanys($data);
            return $company;
        }

        public function updatestatus(){
            if(isset($_POST['status'])){
                $data = array(
                'id_RateCompanye'  => $_POST['id_RateCompany'],
                'Accepter' => "Accepter",
                );
                print_r($data);
                
                $result = ratecompanys::updateStatuts($data);
                // print_r($result);
                
                if($result === 'ok'){
                    header('location: AD_Company'); 
                }else{
                    echo $result;
                }
            }
        }
        /////////////////////////////////////

        public function getOneRtae(){
            if(isset($_POST['id_RateCompany'])){
                $data = array(
                'id_RateCompany' => $_POST['id_RateCompany']
                );
    
            }
            
            $company = ratecompanys::getRtas($data);
            return $company;
        } 

        public function getAllRateStatus(){
        
            $company = ratecompanys::getAllwithstatus();
            return $company; 
        }

        ///////////////////////////////////

        public function deleteRate(){
            if(isset($_POST['id_RateCompany'])){

                $data['id_RateCompany'] = $_POST['id_RateCompany'];
                $result = ratecompanys::delete($data);
                if($result === 'ok'){
                    header('location:AD_Company');
                  
                    
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
        $rate =ratecompanys::CountAll($data);
        return $rate; 
    }

 }
