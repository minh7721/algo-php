<?php
include __DIR__ . '/vendor/autoload.php';
use App\QuestionList;

$pathQuestion = "Question.md";

$questionList = new QuestionList();

$parse = $questionList->parse($pathQuestion);
// Get All Questions
$getAllQuestions  = $parse -> all();
echo "<pre>";
print_r($getAllQuestions);

// Get Question by number
// $numQuestions = 1;
// $getQuestion = $parse->getQuestion($numQuestions);
// echo "<pre>";
// print_r($getQuestion);

// Add question
// $newContent = "###### This is a new Question
//
//            #### This is a new Answer";
// $newArr = $parse -> add($newContent);
// echo "<pre>";
// print_r($newArr);

// Delete Question
// $numQuestion = 1;
// $newArr = $parse -> delete($numQuestion);
// echo "<pre>";
// print_r($newArr);
?>