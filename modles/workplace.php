<?php

    class workplace{

        static public function add($data)
        {   
            $stmt = DB::connect()->prepare('INSERT INTO workplace (Name,img) VALUES (:Name,:img)');
            $stmt->bindParam(':Name',       $data['Name']);
            $stmt->bindParam(':img',        $data['img']);
            $query = $stmt->execute();
            // print_r($query);
            // die();
                if ($query) {
                    return 'ok';
                } else {
                    return 'error';
                }
                    $stmt = null;
        }

        static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM `workplace`');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
    static public function getImage($data)
    {
        $id_salary  = $data['id_img'];
        try {
            $query = 'SELECT * FROM workplace WHERE id_img=:id_img';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id_img' => $id_img));
            $company = $stmt->fetch(PDO::FETCH_OBJ);
            return $company;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function updateStatuts($data){
        $stmt = DB::connect()->prepare('UPDATE workplace  SET status= :Accepter WHERE id_img=:id_img');
        $stmt->bindParam(':Accepter',   $data['Accepter']);
        $stmt->bindParam(':id_img',   $data['id_img']);
        $query =  $stmt->execute();
        
        if ($query) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
       
    }

    static public function getimageBName($data)
    {
        $search = $data['search'];
        try {
            $query = 'SELECT * FROM workplace WHERE Name = :search and status = "Accepter" ';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':search' => $search));
            $image = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $image;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
    
    static public function CountAll($data){
        $search = $data['search'];
        $stmt = DB::connect()->prepare('SELECT count(*) FROM workplace  WHERE Name = :search and    status = "Accepter" ');
        $stmt->execute(array(':search' => $search));
        return $stmt->fetch();
    }

    static public function delete($data)
    {
        $id_img = $data['id_img'];
        try {
            $query = 'DELETE FROM workplace WHERE id_img=:id_img';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id_img' => $id_img));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
}   
    
    }

?>