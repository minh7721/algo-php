<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .flex-row{
            display: flex;
        }
        .flex-row input{
            font-size: 50px;
        }
        button{
            font-size: 20px;
        }
    </style>
    <title>Algo</title>
</head>

<body>
    <form action="#" method="POST">
        <div class="flex-row">
            <input type="number" name="numQuestion" placeholder="Nhap so cau hoi can hien thi ">
            <button name="question">Hien thi 1 cau hoi</button>
        </div>
        <button name="questions">Hien thi tat ca cau hoi</button>
    </form>

    <?php
include_once('./parsedown/Parsedown.php');
require("Question.php");
require("QuestionList.php");
$question = $_POST['question'];
$questions = $_POST['questions'];
$numQuestion = $_POST['numQuestion'];
if(isset($questions)){
    $questionList = new QuestionList();
    $questionList->all();
}
if(isset($question)){
    if($numQuestion > 0 && $numQuestion <= 155){
        $getquestion = new Question();
        $getquestion->getQuestion($numQuestion);
    }
    else{
        echo "Khong co cau hoi nay";
    }
}
?>
</body>

</html>