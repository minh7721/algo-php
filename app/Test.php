<?php
namespace App;
use App\Question;

class Test{
    public array $listQuestions = [];
    const pathQuestion = "Question.md";
    
    public function __construct($listQuestions = [])
    {
        $this->listQuestions = $listQuestions;
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
}

?>