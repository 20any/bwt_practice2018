<?php

class SiteWorkerController
{

    /**
     *home
     */
    public function actionIndex()
    {
        
        $workersList = Worker::getWorkersList();

        // connect...
        require_once(ROOT . '/views/site_worker/index.php');
        return true;
    }

    
    public function actionCreate()
    {
        
        if (isset($_POST['submit'])) {
           
            $options['name'] = $_POST['name'];
            $options['age'] = $_POST['age'];
            $options['salary'] = $_POST['salary'];

          
            $errors = false;

            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
               
                $id = Worker::createWorker($options);

             
                header("Location: /site/worker");
            }
        }

        require_once(ROOT . '/views/site_worker/create.php');
        return true;
    }

 


    public function actionUpdate($id)
    {
     
        $worker = Worker::getWorkerById($id);

       
        if (isset($_POST['submit'])) {
           
            $name = $_POST['name'];
            $age = $_POST['age'];
            $salary = $_POST['salary'];

            Worker::updateWorkerById($id, $name, $age, $salary);

            
                header("Location: /site/worker");
            }
        
        require_once(ROOT . '/views/site_worker/update.php');
        return true;
    }

    public function actionDelete($id)
    {

        
        if (isset($_POST['submit'])) {
           
            Worker::deleteWorkerById($id);

            header("Location: /site/worker");
        }

        require_once(ROOT . '/views/site_worker/delete.php');
        return true;
    }

}
