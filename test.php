<?php
include_once('./parsedown/Parsedown.php');
$file = "Question.md";
$contents = file_get_contents($file);
$Parsedown = new Parsedown();
$contents = $Parsedown->text($contents);
$listQuestions = explode("######", $contents);
echo "<pre>";
print_r($listQuestions);