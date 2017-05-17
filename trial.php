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

    public function __construct($quest, $trial) {
        switch ($quest) {
            case 1: //quest 1
                //TODO implement first quest trials
                switch ($trial) {
                    case 1:
                        $this->body = 'Welcome to the first trial. You are surrounded by clouds and sky as far 
                        eye can see. Confused as to why or how you ended up in this situation, you look to find 
                        civilization. In the distance towards the sun, something faint twinkles across the horizon. 
                        However, you know the ground is where civilization should be.';
                        $this->question = 'Where do you go?';
                        $this->correct_answer = 'Go towards the sun';
                        $this->wrong_answer = 'Head to the ground';
                        break;
                    case 2:
                        $this->body = 'Assuming since you are hovering in the sky, you allow your curiosity to take you
                        to the mysterious twinkling object. Upon closer inspection, you seem to have found a golden
                        glowing city! How peculiar. Within the city you find the marketplace and find lots of delicious
                        food. Your stomach rumbles and you look to your side to see a small stand with apples for sale. 
                        Unfortunately, you have no money to buy anything.';
                        $this->question = 'What do you do?';
                        $this->correct_answer = 'Take an apple';
                        $this->wrong_answer = 'Walk away';
                        break;
                    case 3:
                        $this->body = 'You ignore your hunger, you can find something to eat later. Walking past the
                        marketplace, you find yourself in front of a fountain. A beautiful figure sits on the edge of
                        the fountain. They glance over at you, their eyes tempting and beckon you to join them. You
                        feel an urge to join them but their eyes hide something deeper within.';
                        $this->question = 'Do you join them?';
                        $this->correct_answer = 'No';
                        $this->wrong_answer = 'Yes';
                        break;
                    case 4:
                        $this->body = 'Your gut tells you to keep walking, so you smile at them and continue on your
                        way. You turn to face the way you will go when something runs into you! You and the person who 
                        ran into you fall onto the ground. He looks at you angrily and tells you to watch you were going.
                        You start to feel annoyed because he was the run who ran into you in the first place.';
                        $this->question = 'What do you do?';
                        $this->correct_answer = 'Get angry at him';
                        $this->wrong_answer = 'Apologize for not looking';
                        break;
                    case 5:
                        $this->body = 'Since you were looking elsewhere, you apologize for not watching where you were
                        going. He huffs and walks away. ';
                        $this->question = 'What do you choose?';
                        $this->correct_answer = 'Right answer';
                        $this->wrong_answer = 'Wrong answer';
                        break;
                    case 6:
                        $this->body = 'Greed.';
                        $this->question = 'What do you choose?';
                        $this->correct_answer = 'Right answer';
                        $this->wrong_answer = 'Wrong answer';
                        break;
                    case 7:
                        $this->body = 'Pride.';
                        $this->question = 'What do you choose?';
                        $this->correct_answer = 'Right answer';
                        $this->wrong_answer = 'Wrong answer';
                        break;
                    case 8:
                        $this->body = 'Envy';
                        $this->question = 'What do you choose?';
                        $this->correct_answer = 'Right answer';
                        $this->wrong_answer = 'Wrong answer';
                        break;
                    case 9:
                        $this->body = 'Sloth';
                        $this->question = 'What do you choose?';
                        $this->correct_answer = 'Right answer';
                        $this->wrong_answer = 'Wrong answer';
                        break;
                }
                break;
            case 2: //quest 3
                //TODO implement second quest trials
                switch ($trial) {
                    case 1:
                        $this->body = 'Another challenge';
                        $this->question = 'This is a question';
                        $this->correct_answer = 'Correct';
                        $this->wrong_answer = 'Incorrect';
                        break;
                }
                break;
            case 3: //quest 3
                //TODO implement third quest trials
                switch ($trial) {
                    case 1:
                        $this->body = 'Final quest';
                        $this->question = 'Yes is correct';
                        $this->correct_answer = 'yes';
                        $this->wrong_answer = 'no';
                        break;
                }
                break;
        }
    }

    public static function quest_completed($quest, $trial) {
        switch ($quest) {
            case 1:
                return $trial > 3; //TODO replace 3 with total # of trials in quest 1
            case 2:
                return $trial > 1; //TODO replace 10 with total # of trials in quest 2
            case 3:
                return $trial > 1; //TODO replace 10 with total # of trials in quest 3
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
}