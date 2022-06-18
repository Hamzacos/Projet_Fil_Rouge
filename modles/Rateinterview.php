<?php 
  class Rateinterview {

    
    static public function add($data)
    {
        
        $stmt = DB::connect()->prepare('INSERT INTO interview (Name,job,process,offer,difficulty,questions,answer) VALUES (:Name,:job,:process,:offer,:difficulty,:questions,:answer)');
        $stmt->bindParam(':Name',       $data['Name']);
        $stmt->bindParam(':job',        $data['job']);
        $stmt->bindParam(':process',   $data['process']);
        $stmt->bindParam(':offer',      $data['offer']);
        $stmt->bindParam(':difficulty', $data['difficulty']);
        $stmt->bindParam(':questions',  $data['questions']);
        $stmt->bindParam(':answer',     $data['answer']);
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
        $stmt = DB::connect()->prepare('SELECT * FROM interview ');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    static public function getRtas($data)
    {
        $id_interview = $data['id_interview'];
        try {
            $query = 'SELECT * FROM interview WHERE id_interview=:id_interview';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id_interview' => $id_interview));
            $company = $stmt->fetch(PDO::FETCH_OBJ);
            return $company;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function updateStatuts($data){
        $stmt = DB::connect()->prepare('UPDATE interview  SET status= :Accepter WHERE id_interview=:id_interview');
        $stmt->bindParam(':Accepter',   $data['Accepter']);
        $stmt->bindParam(':id_interview',   $data['id_interview']);
        $query =  $stmt->execute();
        
        if ($query) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
       
    }

    static public function delete($data)
    {
        $id_interview = $data['id_interview'];
        try {
            $query = 'DELETE FROM interview WHERE id_interview=:id_interview';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id_interview' => $id_interview));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function getinterviewBName($data)
    {
        $search = $data['search'];
        try {
            $query = 'SELECT * FROM interview WHERE Name = :search and status = "Accepter" ';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':search' => $search));
            $interview = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $interview;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function CountAll($data){
        $search = $data['search'];
        $stmt = DB::connect()->prepare('SELECT count(*) FROM interview  WHERE Name = :search and    status = "Accepter" ');
        $stmt->execute(array(':search' => $search));
        return $stmt->fetch();
    }
}
?>