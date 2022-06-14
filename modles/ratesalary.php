<?php 

    class ratesalary(){

        static public function add($data)
        {
            $stmt = DB::connect()->prepare('INSERT INTO `salary`(base_salary,per,Name,job,years,location) VALUES (:base_salary,:per,:Name,:job,:years,:location)');
            $stmt->bindParam(':base_salary',$data['base_salary']);
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
    }

?>