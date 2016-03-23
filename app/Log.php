<?php
/**
 * Created by PhpStorm.
 * User: fuffy
 * Date: 2016/3/20
 * Time: 15:54
 */
namespace App;
class Log{

    public $username;
    public $content;
    public $date;
    public $time;
    public $sign;
    public function __construct(){
        $this->username=session('username');
        $this->date=date('Y-m-d');
        $this->time=date('h:i:s');
    }

    public function save(){
        if (file_put_contents('G:/wamp/www/manager/Log/' . date('Y-m-d') . '.txt', json_encode($this) . ",", FILE_APPEND))
            return true;
        return false;
    }

    public static function read($date){
        $str='';
        if(file_exists('G:/wamp/www/manager/Log/' . $date . '.txt'))
            $str=file_get_contents('G:/wamp/www/manager/Log/' . $date . '.txt');
        return $str;

    }
}