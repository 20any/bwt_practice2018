<?php

 */
class Worker
{

    public static function getWorkerById($id)
    {
        // connect
        $db = Db::getConnection();

        
        $sql = 'SELECT id, name, age, salary FROM worker WHERE id = :id';

    
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
    
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute();

        return $result->fetch();
    }




    
    public static function getWorkersList()
    {
        // connect
        $db = Db::getConnection();

        // result
        $result = $db->query('SELECT * FROM worker');
        $workersList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $workersList[$i]['id'] = $row['id'];
            $workersList[$i]['name'] = $row['name'];
            $workersList[$i]['age'] = $row['age'];
            $workersList[$i]['salary'] = $row['salary'];
            $i++;
        }
        return $workersList;
    }

    /**
     * delete info
     */
    public static function deleteWorkerById($id)
    {
        
        $db = Db::getConnection();

  
        $sql = 'DELETE FROM worker WHERE id = :id';

       
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     *edit info
     */
    public static function updateWorkerById($id, $name, $age, $salary)
    {
      
        $db = Db::getConnection();

      
        $sql = "UPDATE worker
            SET 
                name = :name, 
                age = :age, 
                salary = :salary
            WHERE id = :id";

       
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':age', $age, PDO::PARAM_INT);
        $result->bindParam(':salary', $salary, PDO::PARAM_INT);

        return $result->execute();
    }

    /**
     * add info
     */
    public static function createWorker($options)
    {
       
        $db = Db::getConnection();

       
        $sql = 'INSERT INTO worker '
                . '(name, age, salary)'
                . 'VALUES '
                . '(:name, :age, :salary)';

        
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':age', $options['age'], PDO::PARAM_INT);
        $result->bindParam(':salary', $options['salary'], PDO::PARAM_INT);
        if ($result->execute()) {
        
            return $db->lastInsertId();
        }
      
        return 0;
    }


}
