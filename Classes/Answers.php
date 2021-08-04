<?php

include_once 'Classes/Questions.php';


class Answers extends Db {
    public function showAnswers($question_id){
        $sql = "SELECT message from answer WHERE id_questions =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$question_id]);
        while ($row = $stmt->fetch()) {
            echo '<h2 style="text-align: center; color:black;">'.$row['message'].'</h2>'.'<br>';

        }
    }


    public function addAnswers($question_id, $message){

        $sql = "INSERT INTO `answer` (`id_questions`, `message`) VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$question_id, $message]);

    }








}
