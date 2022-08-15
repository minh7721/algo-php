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
// $getAllQuestions  = $questionList -> getAllAnswers();
// echo "<pre>";
// print_r($getAllQuestions);

// Get Question by number
// $numQuestions = 1;
// $getQuestion = $questionList -> getQuestion($numQuestions);
// echo "<pre>";
// print_r($getQuestion);

// Add question
// $newQuestion = "Cau hoi moi";
// $newAnswer = "Dap an F la dap an dung";
// $newArr = $questionList -> addQuestion($newQuestion, $newAnswer);
// echo "<pre>";
// print_r($newArr);

// Delete Question
// $numQuestion = 1;
// $newArr = $questionList -> delQuestion($numQuestion);
// echo "<pre>";
// print_r($newArr);
?>