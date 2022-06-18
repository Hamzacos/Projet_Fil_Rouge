<?php 

    class ratesalary{

        static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM salary ');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

        static public function add($data)
        {
            $stmt = DB::connect()->prepare('INSERT INTO `salary`(base_salary,devise,per,Name,job,years,location) VALUES (:base_salary,:devise,:per,:Name,:job,:years,:location)');
            $stmt->bindParam(':base_salary',$data['base_salary']);
            $stmt->bindParam(':devise',     $data['devise']);
            $stmt->bindParam(':per',        $data['per']);
            $stmt->bindParam(':Name',       $data['Name']);
            $stmt->bindParam(':job',        $data['job']);
            $stmt->bindParam(':years',      $data['years']);
            $stmt->bindParam(':location',   $data['location']);
                if ($stmt->execute()) {
                    return 'ok';
                } else {
                    return 'error';
                }
                    $stmt = null;
        }

        static public function getsalaryBName($data)
        {
            $search = $data['search'];
            try {
                $query = 'SELECT * FROM salary WHERE Name = :search and status = "Accepter" ';
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array(':search' => $search));
                $salary = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $salary;
            } catch (PDOException $ex) {
                echo 'erreur' . $ex->getMessage();
            }
        }

        static public function getRtas($data)
        {
            $id_salary  = $data['id_salary'];
            try {
                $query = 'SELECT * FROM salary WHERE id_salary=:id_salary';
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array(':id_salary' => $id_salary));
                $company = $stmt->fetch(PDO::FETCH_OBJ);
                return $company;
            } catch (PDOException $ex) {
                echo 'erreur' . $ex->getMessage();
            }
        }
                    
        static public function updateStatuts($data){
            $stmt = DB::connect()->prepare('UPDATE salary  SET status= :Accepter WHERE id_salary=:id_salary');
            $stmt->bindParam(':Accepter',   $data['Accepter']);
            $stmt->bindParam(':id_salary',   $data['id_salary']);
            $query =  $stmt->execute();
            
            if ($query) {
                return 'ok';
            } else {
                return 'error';
            }
            $stmt->close();
            $stmt = null;
           
        }

        static public function CountAll($data){
            $search = $data['search'];
            $stmt = DB::connect()->prepare('SELECT count(*) FROM salary  WHERE Name = :search and    status = "Accepter" ');
            $stmt->execute(array(':search' => $search));
            return $stmt->fetch();
        }
    
        static public function delete($data)
        {
            $id_salary = $data['id_salary'];
            try {
                $query = 'DELETE FROM salary WHERE id_salary=:id_salary';
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array(':id_salary' => $id_salary));
                if ($stmt->execute()) {
                    return 'ok';
                }
            } catch (PDOException $ex) {
                echo 'erreur' . $ex->getMessage();
            }
    }
    
}

?>