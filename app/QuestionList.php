<?php
namespace App;
use Exception;

class QuestionList{
    protected array $items = [];
    public function __construct($listQuestions = [])
    {
        $this->items = $listQuestions;
    }

    public function parse($path){
        $contents = file_get_contents($path);
        $questions = explode("######", $contents);
        array_shift($questions);
        foreach($questions as $question){
            $content = explode("####", $question);
            $this->items[] = new Question($content[0], $content[1]);
        }
        return $this;
    }

    /**
     * @throws Exception
     */
    public function getQuestion(int | array $indexes ){
        $result = [];
        if(is_int($indexes)){
            $result = $this->items[$indexes];
        }
        else if(is_array($indexes)){
            foreach ($indexes as $index){
                $result[] = $this->items[$index];
            }
        }
        else{
            return null;
        }
        return $result ?: throw new Exception("No have question");
    }

    public function all(){
        return $this -> items;
    }

    public function add($question){
        $this -> items;
        array_push($this -> items, $question);
        return $this -> items;
    }

    public function delete($numQuestion){
        $questions = $this->items;
        if(count($this->items) > 0 && $numQuestion >= 0 && $numQuestion < count($this->items)) {
            $questions =array_splice($questions, $numQuestion);
            return $questions;
        } else {
            return null;
        }
    }

}

?>