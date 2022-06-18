<?php

class Company
{

    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM `company`');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    static public function getCompanys($data)
    {
        $id_entreprise = $data['id_entreprise'];
        try {
            $query = 'SELECT * FROM `company` WHERE id_entreprise=:id_entreprise';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id_entreprise' => $id_entreprise));
            $company = $stmt->fetch(PDO::FETCH_OBJ);
            return $company;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function getCompanyBName($data)
    {
        $search = $data['search'];
        try {
            $query = 'SELECT * FROM company WHERE Name = :search';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':search' => $search));
            $company = $stmt->fetch(PDO::FETCH_ASSOC);
            return $company;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO `company` (Name,email,phone,secteur,city,url,description,image) VALUES (:Name,:email,:phone,:secteur,:city,:url,:description,:image)');
        // $stmt->bindParam(':id',     $data['id ']);
        $stmt->bindParam(':Name',   $data['Name']);
        $stmt->bindParam(':email',  $data['email']);
        $stmt->bindParam(':phone',  $data['phone']);
        $stmt->bindParam(':secteur', $data['secteur']);
        $stmt->bindParam(':city',   $data['city']);
        $stmt->bindParam(':url',   $data['url']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':image',  $data['image']);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }

    static public function update($data)
    {
        $stmt = DB::connect()->prepare('UPDATE `company` SET 
                        Name=:Name,
                        email=:email,
                        phone=:phone,
                        secteur=:secteur,
                        city=:city,
                        url=:url,
                        description=:description 
                        WHERE id_entreprise= :id_entreprise');
        $stmt->bindParam(':Name',   $data['Name']);
        $stmt->bindParam(':email',  $data['email']);
        $stmt->bindParam(':phone',  $data['phone']);
        $stmt->bindParam(':secteur', $data['secteur']);
        $stmt->bindParam(':city',   $data['city']);
        $stmt->bindParam(':url',   $data['url']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':id_entreprise',   $data['id_entreprise']);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }
    static public function delete($data)
    {
        $id_entreprise = $data['id_entreprise'];
        try {
            $query = 'DELETE FROM `company` WHERE id_entreprise= :id_entreprise';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id_entreprise' => $id_entreprise));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function CountAll(){
        $stmt = DB::connect()->prepare('SELECT count(*) FROM company');
        $stmt->execute();
        return $stmt->fetch();
    }

    static public function follow($data){
        try {
            $query = 'INSERT INTO `follow`(id,id_entreprise) VALUES (:id,:id_entreprise)';
            $stmt = DB::connect()->prepare($query);
            $stmt->bindParam(':id',  $data['id']);
            $stmt->bindParam(':id_entreprise', $data['id_entreprise']);
           $spg =  $stmt->execute();
            if ($spg) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function getFollow()
    {
        // $id_entreprise = $data['id_entreprise'];
        try {
            $query = 'SELECT * FROM follow INNER JOIN company ON follow.id_entreprise=company.id_entreprise; ';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute();
            $company = $stmt->fetchAll();
            return $company;

        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function checkfolow($data){
        try {
            $query = 'SELECT * FROM follow  WHERE id_entreprise=:id_entreprise AND id = :id';
            $stmt = DB::connect()->prepare($query);
            $stmt->bindParam(':id',  $data['id']);
            $stmt->bindParam(':id_entreprise', $data['id_entreprise']);
            
            $stmt->execute();
            $check = $stmt->fetchAll();
            // echo $_SESSION['id'];
            // print_r($check);
            // die();
            return $check;

        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
}
