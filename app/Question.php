<?php
namespace App;
class Question{
    public string $content;
    public string $answer;

    public function __construct(string $content, string $answer)
    {
        $this->content = $content;
        $this->answer = $answer;
    }


}

?>