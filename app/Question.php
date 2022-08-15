<?php
namespace App;
class Question{
    public $question = '';

    function getQuestion()
    {
        return $this->question;
    }
    function setQuestion($newQuestion)
    {
        $this->question = $newQuestion;
    }
}

?>