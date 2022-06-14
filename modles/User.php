<?php

class User{

    static public function login($data){
        $email = $data['email'];
        // die print_r($email);
        try{
            $query = 'SELECT * FROM `users` WHERE email=:email';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email" =>$email));
            $Admins = $stmt->fetch(PDO::FETCH_OBJ);
            return $Admins;
            if($stmt->execute()){
                return 'ok';
            }
        }catch(PDOException $ex){
                echo 'erreur' . $ex->getMessage();
        }
    }

    static public function createUser($data){
        $stmt = DB::connect()->prepare('INSERT INTO `users`(name,prenom,company,email,password,Cpass)VALUES(:name,:prenom,:company,:email,:password,:Cpass)');
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':prenom',$data['prenom']); 
        $stmt->bindParam(':company',$data['company']); 
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':password',$data['password']);
        $stmt->bindParam(':Cpass',$data['Cpass']);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }
}