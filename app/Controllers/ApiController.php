<?php
namespace  App\ApiController;

class ApiController{
    public function behhd(){
        return self::daysToNow();
    }

    /**
     * @param $dateStr
     * @return days
     */
    static public function daysToNow($dateStr){
        $second1 = strtotime(date('Y-m-d'));
        $second2 = strtotime($dateStr);
        return (abs ($second1 - $second2)) / 86400;
    }
}