<?php

namespace ToDo;

use PDO;

class Task{
    protected $pdo;
    private $subject;
    private $priority;
    private $dueDate;
    private $status = 0;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    public function createTask($task){
        $this->subject = $task['subject'];
        $this->priority = $task['priority'];
        $this->dueDate = $task['dueDate'];
        $this->insertTask();
    }

    private function insertTask(){
        try{
            $query = "INSERT INTO `tasks` (`subject`,`priority`,`dueDate`,`status`,`modified`) 
            VALUES (:subject,:priority,:dueDate,:status,NOW())";
            $stat = $this->pdo->prepare($query);
            $stat->bindParam(':subject',$this->subject,PDO::PARAM_STR);
            $stat->bindParam(':priority',$this->priority,PDO::PARAM_STR);
            $stat->bindParam(':dueDate',$this->dueDate,PDO::PARAM_STR);
            $stat->bindParam(':status',$this->status,PDO::PARAM_STR);
            $stat->execute();
            header('Location:/');
        }catch(\PDOException $e){
            echo $e->getMessage();
        }
}
}