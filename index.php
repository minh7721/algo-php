<?php
include __DIR__ . '/vendor/autoload.php';
use App\QuestionList;
use App\Test;

$pathQuestion = "Question.md";

$questionList = new QuestionList();

$parse = $questionList->parse($pathQuestion);
// Get All Questions
//$getAllQuestions  = $parse -> getAllList();
//echo "<pre>";
//print_r($getAllQuestions);

// Get Question by number
// $numQuestions = 1;
// $getQuestion = $parse->getQuestion($numQuestions - 1);
// echo "<pre>";
// print_r($getQuestion);

// Add question
// $newContent = "Cau hoi moi";
// $newAnswer = "Dap an F la dap an dung";
// $newArr = $parse -> addQuestion($newContent, $newAnswer);
// echo "<pre>";
// print_r($newArr);

// Delete Question
 $numQuestion = 2;
 $newArr = $parse -> delQuestion($numQuestion );
 echo "<pre>";
 print_r($newArr);
?>