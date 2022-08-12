<?php
class Question{
    const pathQuestion = "Question.md";
    function getQuestion($numQuestion){
            $searchFor = "######";
            $contents = file_get_contents(self::pathQuestion);
            $listQuestions = explode($searchFor, $contents);
            echo "<pre>";
            print_r($listQuestions[$numQuestion]);
    }
}

?>