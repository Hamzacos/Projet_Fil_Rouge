<?php

     class UserController{

            public function auth(){
                if(isset($_POST['submit'])){
                    $data['email'] = $_POST['email'];
                    $result = USER::login($data);
                    if($result->email === $_POST['email'] && password_verify($_POST['password'],$result->password)){
                        if( $result->user_type == 'admin'){
                            $_SESSION['logged'] = true;
                            $_SESSION['email']  = $result->email;
                            $_SESSION['name']  = $result->name;
                            header('location:  Dashbord_Admin');
                        }else if($result->user_type == 'user'){
                            $_SESSION['logged'] = true;
                            $_SESSION['email']  = $result->email;
                            $_SESSION['company']  = $result->company;
                            header('location: dashbord');
                        }
                    }else{
                        echo 'merci de verifier votre donnes';
                        header('location: login');
                    }
                }
            }

         public function register(){
             if(isset($_POST['submit'])){
                 $options = [
                     'cost' => 12
                 ];
                 $password = password_hash($_POST['password'],
                 PASSWORD_BCRYPT,$options);
                 $data = array(
                     'name' => $_POST['name'],
                     'prenom' => $_POST['prenom'],
                     'company' => $_POST['company'],
                     'email' => $_POST['email'],
                     'password' => $password,
                     'Cpass' => $password,
                 );
                 $result = USER::createUser($data);
                 if($result === 'ok'){
                    // Session::set('success','Compte creé'); 
                    //  Redirect::to('login');
                    header('location: login'); 
                 }else{
                     echo $result;
                 }
             }
         }

         static public function logout(){
             session_destroy();
         }
     }