<?php
namespace App\Services;

class IsItQuizDay {
    public static function today($test=null){

        if(!is_null($test)){
            return true;
        }

        $ymdNow = date('Y-m-d');
        $string = "first Thursday of ".date('F')." ".date('Y');
        $nextQuiz = strtotime($string);
        $ymdNextQuiz = date('Y-m-d', $nextQuiz);

        return $ymdNow == $ymdNextQuiz;
    }
}