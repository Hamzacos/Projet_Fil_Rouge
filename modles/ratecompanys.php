<?php
class ratecompanys
{

    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM `ratecompany`');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
  ////////////////////////////////////
    static public function add($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO `ratecompany`(Name,rate,tags,job,pros,cons) VALUES (:Name,:rate,:tags,:job,:pros,:cons)');
        $stmt->bindParam(':Name',   $data['Name']);
        $stmt->bindParam(':rate',   $data['rate']);
        $stmt->bindParam(':tags',   $data['tags']);
        $stmt->bindParam(':job',    $data['job']);
        $stmt->bindParam(':pros',   $data['pros']);
        $stmt->bindParam(':cons',   $data['cons']);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt = null;
    }
 ///////////////////////////////
    static public function getRateBName($data)
    {
        $search = $data['search'];
        try {
            $query = 'SELECT * FROM ratecompany WHERE Name = :search and status = "Accepter" ';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':search' => $search));
            $company = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $company;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

/////////////////////////////////////

    static public function updateStatuts($data){

        
        $stmt = DB::connect()->prepare('UPDATE ratecompany SET status= :Accepter WHERE id_RateCompany = :id_RateCompany ');
        $stmt->bindParam(':Accepter',   $data['Accepter']);
        $stmt->bindParam(':id_RateCompany',   $data['id_RateCompanye']);
        $query =  $stmt->execute();
        print_r($query);
       
        if ($query) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
       
    }

    //////////////////////////////::

    static public function getRtas($data)
    {
        $id_RateCompany = $data['id_RateCompany'];
        try {
            $query = 'SELECT * FROM ratecompany WHERE id_RateCompany =:id_RateCompany';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id_RateCompany' => $id_RateCompany ));
            $company = $stmt->fetch(PDO::FETCH_OBJ);
            return $company;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function getAllwithstatus(){

        $stmt = DB::connect()->prepare('SELECT * FROM `ratecompany` WHERE status = Accepter');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    ////////////////////////////////////

    static public function delete($data)
    {
        $id_RateCompany = $data['id_RateCompany'];
        try {
            $query = 'DELETE FROM ratecompany WHERE id_RateCompany=:id_RateCompany';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id_RateCompany' => $id_RateCompany));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

      static public function CountAll($data){
        $search = $data['search'];
        $stmt = DB::connect()->prepare('SELECT count(*) FROM ratecompany WHERE Name = :search and    status = "Accepter" ');
        $stmt->execute(array(':search' => $search));
        return $stmt->fetch();
    }

}
