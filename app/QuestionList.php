<?php
namespace App;
use App\Question;
class QuestionList{
    protected array $listQuestions = [];
    public function __construct($listQuestions = [], $listAnswers = [])
    {
        $this->listQuestions = $listQuestions;
        $this->listAnswers = $listAnswers;
    }

    public function parse($path){
        $contents = file_get_contents($path);
        $questions = explode("######", $contents);
        array_shift($questions);
        foreach($questions as $question){
            $content = explode("####", $question);
            $this->listQuestions[] = new Question($content[0], $content[1]);
        }
        return $this;
    }
    
    public function getQuestion($numQuestion){
        if(count($this->listQuestions) > 0 && $numQuestion >= 0 && $numQuestion < count($this->listQuestions)) {
            return $this->listQuestions[$numQuestion];
        } else {
            return "Khong co cau hoi nay";
        }
    }

    public function getAllList(){
        return $this -> listQuestions;
    }

    public function addQuestion($question, $answer){
        $this -> listQuestions;
        array_push($this -> listQuestions, $question."\n \n \n".$answer);
        return $this -> listQuestions;
    }

    public function delQuestion($numQuestion){
        $questions = $this -> listQuestions;
        if(count($this->listQuestions) > 0 && $numQuestion >= 0 && $numQuestion < count($this->listQuestions)) {
            $newArrQuestion =array_splice($questions, $numQuestion);
            return $newArrQuestion;
        } else {
            return "Khong co cau hoi nay";
        }
    }

}

?>