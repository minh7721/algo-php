<?php
namespace App;

class QuestionList{
    public array $listQuestions = [];
    const pathQuestion = "Question.md";

    public function __construct($listQuestions = [])
    {
        $this->listQuestions = $listQuestions;
    }

    public function parse($path){
        $contents = file_get_contents($path);
        $Questions = explode("######", $contents);
        array_push($this -> listQuestions, $Questions);
        return $Questions;
    }
    
    public function getQuestion($numQuestion){
        $this -> parse(self::pathQuestion);
        if(count($this->listQuestions[0]) > 0 && $numQuestion > 0 && $numQuestion < count($this->listQuestions[0])) {
            return $this->listQuestions[0][$numQuestion];
        } else {
            return "Khong co cau hoi nay";
        }
    }

    public function answers($path){
        $contents = file_get_contents($path);
        $Answers = explode("####", $contents);
        return $Answers;
    }

    public function getAllAnswers(){
        $arrAnswers = [];
        $Answers = $this -> answers(self::pathQuestion);
        for($i = 0; $i < count($Answers); $i = $i + 2){
            array_push($arrAnswers, $Answers[$i]);
        }
        return $arrAnswers;
    }
    public function getAllList(){
        return $this -> parse(self::pathQuestion);
    }

    public function addQuestion($question, $answer){
        $this -> parse(self::pathQuestion);
        array_push($this -> listQuestions[0], $question."\n \n \n".$answer);
        return $this -> listQuestions;
    }

    public function delQuestion($numQuestion){
        $newArrQuestion = [];
        $questions = $this -> parse(self::pathQuestion);
        if(count($this->listQuestions[0]) > 0 && $numQuestion > 0 && $numQuestion < count($this->listQuestions[0])) {
            $newArrQuestion =array_splice($questions, $numQuestion);
            return $newArrQuestion;
        } else {
            return "Khong co cau hoi nay";
        }
    }

}

?>