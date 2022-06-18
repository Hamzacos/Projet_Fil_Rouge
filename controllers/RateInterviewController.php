<?php 

 class RateinterviewController{


    public function addRateInterview(){
        if(isset($_POST['insert'])){
            $data = array(
                'Name'          => $_POST['Name'],
                'job'           => $_POST['job'],
                'process'      => $_POST['process'],
                'offer'         => $_POST['offer'],
                'difficulty'    => $_POST['difficulty'],
                'questions'     => $_POST['questions'],
                'answer'        => $_POST['answer'],
            );

            $result =  Rateinterview::add($data);
            if($result === 'ok'){
                header('location: dashbord'); 
            }else{
                echo $result;
            }
        }
    }

    public function getAllInterview(){
        
        $interview = Rateinterview::getAll();
        return $interview; 
    }

    public function getOneRtae(){
        if(isset($_POST['id_interview'])){
            $data = array(
            'id_interview' => $_POST['id_interview']
            );
        }
        $interview = Rateinterview::getRtas($data);
        return $interview;
    }

    public function updatestatus(){
        if(isset($_POST['status'])){
            $data = array(
            'id_interview'  => $_POST['id_interview'],
            'Accepter' => "Accepter",
            );
            $result = Rateinterview::updateStatuts($data);
            if($result === 'ok'){
                header('location: AD_Interview'); 
            }else{
                echo $result;
            }
        }
    }

    public function deleteRate(){
        if(isset($_POST['id_interview'])){

            $data['id_interview'] = $_POST['id_interview'];
            $result = Rateinterview::delete($data);
            if($result === 'ok'){
                header('location:AD_Interview');
              
                
            }else{
                echo $result;
            }
    }
 }

 public function getInterviewByName(){
    if(isset($_GET['search'])){
        $data = array(
            'search' => $_GET['search']
        );
    }
    $interview = Rateinterview::getinterviewBName($data);
    return $interview;
}

public function CountAllInterview(){ 
    if(isset($_GET['search'])){
        $data = array(
            'search' => $_GET['search']
        );
    }
    $interview = Rateinterview::CountAll($data);
    return $interview; 
}

 }