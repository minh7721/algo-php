<?php
class QuestionList{
    const pathQuestion = "Question.md";
    public function parse($path){
        $searchFor = "######";
        $contents = file_get_contents($path);
        // $Parsedown = new Parsedown();
        // $contents = $Parsedown->text($contents);
        $listQuestions = explode($searchFor, $contents);
        echo "<pre>";
        print_r($listQuestions);
        // echo $listQuestions[0];
        // $pattern = preg_quote($searchFor, '/');
        // $pattern = "/^.*$pattern.*\$/m";
        // if(preg_match_all($pattern, $contents, $matches)) {
        //     $countQuestion = count($matches[0]);
        // }
        // function get_string_between($string, $start, $end){
        //     $string = ' ' . $string;
        //     $ini = strpos($string, $start);
        //     if($ini == 0) return '';
        //     $ini += strlen($start);
        //     $len = strpos($string, $end, $ini) - $ini;
        //     return substr($string, $ini, $len);
        // }
        // for($i = 0; $i < $countQuestion; $i++){
        //     $parsed = get_string_between($contents,"######", '---');
        //     echo "<pre>";
        //     echo $parsed;
        //     }
    }
    
    public function all(){
        return $this -> parse(self::pathQuestion);
    }
}

?>