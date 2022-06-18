<?php
    class workplaceController{

        public function addimg(){

            if(isset($_POST['insert'])){
                
                print_r($_FILES);
                $image = $_FILES['img']['name'];
               
                if(!file_exists('./img/'))
                {
                  mkdir('./img');
                }
                 move_uploaded_file($_FILES['img']["tmp_name"], "./img/".$image);
                $data = array(
                    'Name'      => $_POST['Name'],
                    'img'       => $image,
                );
                $result = workplace::add($data);
                if($result === 'ok'){
                    header('location: dashbord'); 
                }else{
                    echo $result;
                }
            }
        }

        public function getAllImage(){
        
            $image = workplace::getAll();
            return $image; 
        }

        public function getOneImg(){
            if(isset($_POST['id_img'])){
                $data = array(
                'id_img' => $_POST['id_img']
                );
            }
            $image =  workplace::getImage($data);
            return $image;
        }
    

    public function updatestatus(){
        if(isset($_POST['status'])){
            $data = array(
            'id_img'  => $_POST['id_img'],
            'Accepter' => "Accepter",
            );
            $result = workplace::updateStatuts($data);
            if($result === 'ok'){
                header('location: AD_WorkPlace'); 
            }else{
                echo $result;
            }
        }
    }

    public function getImageyByName(){
        if(isset($_GET['search'])){
            $data = array(
                'search' => $_GET['search']
            );
        }
        $img = workplace::getimageBName($data);
        return $img;
    }
     
    public function CountAllImage(){ 
        if(isset($_GET['search'])){
            $data = array(
                'search' => $_GET['search']
            );
        }
        $img = workplace::CountAll($data);
        return $img; 
    }

    public function deleteImg(){
        if(isset($_POST['id_img'])){
            $data['id_img'] = $_POST['id_img'];
            $result = workplace::delete($data);
            if($result === 'ok'){
                header('location: AD_WorkPlace');
              
                
            }else{
                echo $result;
            }
    }
 }

}

?>