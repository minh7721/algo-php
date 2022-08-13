<?php
include __DIR__ . '/vendor/autoload.php';
use App\QuestionList;
use App\Test;

$questionList = new QuestionList();

// Get All Questions
$getAllQuestions  = $questionList -> getAllList();
echo "<pre>";
print_r($getAllQuestions);

// Get All Answers
$getAllQuestions  = $questionList -> getAllAnswers();
echo "<pre>";
print_r($getAllQuestions);

// Get Question by number
// $numQuestions = 1;
// $getQuestion = $questionList -> getQuestion($numQuestions);
// echo "<pre>";
// print_r($getQuestion);
?>