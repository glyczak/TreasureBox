<?php

/**
 * Created by PhpStorm.
 * User: glyczak
 * Date: 5/15/17
 * Time: 2:47 PM
 */

class Trial {
    public $body;
    public $question;
    public $correct_answer;
    public $wrong_answer;

    public static function quest_completed($quest, $trial) {
        switch ($quest) {
            case 1:
                return $trial > 3; //TODO replace 3 with total # of trials in quest 1
            case 2:
                return $trial > 10; //TODO replace 10 with total # of trials in quest 2
            case 3:
                return $trial > 10; //TODO replace 10 with total # of trials in quest 3
            default:
                return false;
        }
    }

    public static function nth_quest($quest) {
        switch ($quest) {
            case 1:
                return 'first';
            case 2:
                return 'second';
            case 3:
                return 'final';
            default:
                return '';
        }
    }

    public function __construct($quest, $trial) {
        switch ($quest) {
            case 1:
                //TODO implement first quest trials
                switch ($trial) {
                    case 1:
                        $this->body = 'This is the first test challenge.';
                        $this->question = 'What do you choose?';
                        $this->correct_answer = 'Right answer';
                        $this->wrong_answer = 'Wrong answer';
                        break;
                    case 2:
                        $this->body = 'This is the second test challenge.';
                        $this->question = 'What do you choose?';
                        $this->correct_answer = 'Right answer';
                        $this->wrong_answer = 'Wrong answer';
                        break;
                    case 3:
                        $this->body = 'This is the third test challenge.';
                        $this->question = 'What do you choose?';
                        $this->correct_answer = 'Right answer';
                        $this->wrong_answer = 'Wrong answer';
                        break;
                }
                break;
            case 2:
                //TODO implement second quest trials
                switch ($trial) {
                    case 1:
                        $this->body = '';
                        $this->question = '';
                        $this->correct_answer = '';
                        $this->wrong_answer = '';
                        break;
                }
                break;
            case 3:
                //TODO implement third quest trials
                switch ($trial) {
                    case 1:
                        $this->body = '';
                        $this->question = '';
                        $this->correct_answer = '';
                        $this->wrong_answer = '';
                        break;
                }
                break;
            default:
                header('location: index.php');
                break;
        }
    }
}