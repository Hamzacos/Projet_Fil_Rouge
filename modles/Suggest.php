<?php
    class suggest{

        static public function add($data)
        {   
            $stmt = DB::connect()->prepare('INSERT INTO suggest (job,company) VALUES (:job,:company)');
            $stmt->bindParam(':job',       $data['job']);
            $stmt->bindParam(':company',    $data['company']);
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
            $stmt = DB::connect()->prepare('SELECT * FROM `suggest`');
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }

        static public function delete($data)
        {
            $id_suggest = $data['id_suggest'];
            try {
                $query = 'DELETE FROM suggest WHERE id_suggest=:id_suggest';
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array(':id_suggest' => $id_suggest));
                if ($stmt->execute()) {
                    return 'ok';
                }
            } catch (PDOException $ex) {
                echo 'erreur' . $ex->getMessage();
            }
    }

    static public function CountAll(){
        $stmt = DB::connect()->prepare('SELECT count(*) FROM suggest');
        $stmt->execute();
        return $stmt->fetch();
    }
    }
?>