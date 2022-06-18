<?php
    class companyController{
        
        public function getAllCompany(){
        
            $company = Company::getAll();
            return $company; 
        }
        

        public function getCompanyByName(){
            if(isset($_GET['search'])){
                $data = array(
                    'search' => $_GET['search']
                );
            }
            $company = Company::getCompanyBName($data);
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

        public function addCompany(){
            if(isset($_POST['insert'])){
                print_r($_FILES['image']);
                $image = $_FILES['image']['name'];
               
                if(!file_exists('./img/'))
                {
                  mkdir('./img');
                }
                 move_uploaded_file($_FILES['image']["tmp_name"], "./img/".$image);
                $data = array(
                    'Name'        => $_POST['Name'],
                    'email'       => $_POST['email'],
                    'phone'       => $_POST['phone'],
                    'secteur'     => $_POST['secteur'],
                    'city'        => $_POST['city'],
                    'url'         => $_POST['url'],
                    'description' => $_POST['description'],
                    'image'       => $image,
                );
                $result = Company::add($data);
                if($result === 'ok'){
                    header('location: Dashbord_Admin'); 
                }else{
                    echo $result;
                }
            }
        }

        public function updateCompanys(){
                if(isset($_POST['update'])){
                    $data = array(
                    'id_entreprise'  => $_POST['id_entreprise'],
                    'Name'        => $_POST['Name'],
                    'email'       => $_POST['email'],
                    'phone'       => $_POST['phone'],
                    'secteur'     => $_POST['secteur'],
                    'city'        => $_POST['city'],
                    'url'         => $_POST['url'],
                    'description' => $_POST['description'],
                    );
                    $result = Company::update($data);
                    if($result === 'ok'){
                        header('location: Dashbord_Admin'); 
                    }else{
                        echo $result;
                    }
                }
            }


            public function deleteCompanys(){
                if(isset($_POST['id_entreprise'])){
                    $data['id_entreprise'] = $_POST['id_entreprise'];
                    $result = Company::delete($data);
                
                    if($result === 'ok'){
                        header('location:  Dashbord_Admin');
                        // Redirect::to('Parents'); 
                    }else{
                        echo $result;
                    }
            }
         }
         public function CountAllCompany(){  
            $company = Company::CountAll();
            return $company; 
        }
      
        public function addfollow(){
            if(isset($_POST['follow'])){
               
                $data = array(
                    'id_entreprise'=> $_POST['id_entreprise'],
                    'id'       => $_SESSION['id'],
                );
                $result = Company::follow($data);
                
                if($result === 'ok'){
                    header('location: dashbord'); 
                }else{
                    echo $result;
                }
            }
            
        }

      
        public function getOnefollow(){
            if(isset($_SESSION['id'])){
                $data = array(
                    'id'       => $_SESSION['id'],
                    // 'id_entreprise' => $_POST['id_entreprise']
                );
    
            }
            $company = Company::getFollow();
            return $company;

        }

        public function checkFollower($id_entreprise){
            
            $data = array(
                'id'       => $_SESSION['id'],
                'id_entreprise' =>  $id_entreprise
            );

            $follow= Company::checkfolow($data);
            return $follow; 

        }
       
}
