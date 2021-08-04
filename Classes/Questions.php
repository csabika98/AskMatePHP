<?php


class Questions extends Db {


    public function addQuestions($title, $message){
        $sql = "INSERT INTO question (title, message) VALUES (? ,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title, $message]);

    }

    public function displayQuestions($id){
        $sql = "SELECT message FROM question WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        while ($row = $stmt->fetch()) {
            echo '<h2 style="text-align: center">'.$row['message'].'</h2>'.'<br>';

        }
    }

    public function deleteQuestions($id){
        $sql = "DELETE FROM `question` WHERE `question`.`id` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);


    }

    public function editQuestions($title, $message, $id){
        $sql = "UPDATE `question` SET `title` = ?, `message`= ? WHERE `question`.`id` = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title, $message, $id]);


    }




}