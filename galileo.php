<?php
/**
 * Created by PhpStorm.
 * User: glyczak
 * Date: 5/15/17
 * Time: 4:21 PM
 */

class Galileo {
    public static function complete_quest($quest) { //sends request to intel galileo on local network to perform an action
        switch ($quest) {
            case 1:
                file_get_contents('http://192.168.1.9/?pin2=1');
                break;
            case 2:
                file_get_contents('http://192.168.1.9/?pin3=1');
                break;
            case 3:
                file_get_contents('http://192.168.1.9/?pin4=1');
                file_get_contents('http://192.168.1.9/?pin5=1');
                break;
            default:
                break;
        }
    }
    public static function reset() {
        file_get_contents('http://192.168.1.9/?pin2=0');
        file_get_contents('http://192.168.1.9/?pin3=0');
        file_get_contents('http://192.168.1.9/?pin4=0');
        file_get_contents('http://192.168.1.9/?pin5=0');
    }
}