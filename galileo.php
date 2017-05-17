<?php
/**
 * Created by PhpStorm.
 * User: glyczak
 * Date: 5/15/17
 * Time: 4:21 PM
 */

include_once 'trial.php';

class Galileo {
    public static function complete_quest($quest) { //sends request to intel galileo on local network to perform an action
        switch ($quest) {
            case 1:
                file_get_contents('http://192.168.1.9/ajax_inputs&pin2=1');
                break;
            case 2:
                file_get_contents('http://192.168.1.9/ajax_inputs&pin3=1');
                break;
            case 3:
                file_get_contents('http://192.168.1.9/ajax_inputs&pin4=1');
                break;
            default:
                break;
        }
    }
    public static function win() {
        file_get_contents('http://192.168.1.9/ajax_inputs&pin5=1');
    }
    public static function reset() {
        file_get_contents('http://192.168.1.9/ajax_inputs&pin2=0');
        file_get_contents('http://192.168.1.9/ajax_inputs&pin3=0');
        file_get_contents('http://192.168.1.9/ajax_inputs&pin4=0');
        file_get_contents('http://192.168.1.9/ajax_inputs&pin5=0');
    }
}