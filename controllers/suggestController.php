<?php

    class suggestController{

        public function addsuggest(){

            if(isset($_POST['insert'])){
              
                $data = array(
                    'job'      => $_POST['job'],
                    'company'  => $_POST['company'],
                );
                $result = suggest::add($data);
                if($result === 'ok'){
                    header('location: dashbord'); 
                }else{
                    echo $result;
                }
            }
        }

        public function getAll(){
        
            $suggest = suggest::getAll();
            return $suggest; 
        }

        public function deleteSuggest(){
            if(isset($_POST['id_suggest'])){
                $data['id_suggest'] = $_POST['id_suggest'];
                $result = suggest::delete($data);
                if($result === 'ok'){
                    header('location: Dashbord_Admin');
                  
                    
                }else{
                    echo $result;
                }
        }
     }

     public function CountSuggest(){  
        $suggest = suggest::CountAll();
        return $suggest; 
    }
  
    
    }

?>