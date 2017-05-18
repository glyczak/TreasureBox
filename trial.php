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
                        $this->correct_answer = 'Walk away';
                        $this->wrong_answer = 'Take an apple';
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
                        $this->correct_answer = 'Apologize for not looking';
                        $this->wrong_answer = 'Get angry at him';
                        break;
                    case 5:
                        $this->body = 'Since you were looking elsewhere, you apologize for not watching where you were
                        going. He looks at you with annoyance. He turns to look behind himself, quickly gets up and runs
                        away. Confused, you see several men chasing after him. Looking to the ground, you notice the man
                        left a large jewel behind! You pick it up.';
                        $this->question = 'What should you do?';
                        $this->correct_answer = 'Look for owner';
                        $this->wrong_answer = 'Keep it for yourself';
                        break;
                    case 6:
                        $this->body = 'That guy must have been a thief! You decide to be a good person and return the
                        jewel to its rightful owner. You being to walk in the direction of where the men chasing the 
                        thief came from. Following the direction they came from, you stumble upon a mysterious looking
                        hut. Maybe this is where they came from? You knock on what you assume to be the door of the hut
                        and an eye pokes out from the panel of the door. They tell you only the best of the best may
                        enter.';
                        $this->question = 'What do you say?';
                        $this->correct_answer = 'You just want to return a something';
                        $this->wrong_answer = 'You are the best of the bes';
                        break;
                    case 7:
                        $this->body = 'The eye stares you down for a moment, doubting your words. To prove your words, 
                        you pull the jewel out to show him. His eyes widen and the door opens, allowing you to enter. 
                        Among entering, you notice how beautiful the inside of the hut really is! Glittering golden objects
                        hang from the walls and exotic decorations fill the room. A feeling of jealously bubbles within
                        you. Does the owner of the gem really NEED their jewel back if they have all this stuff? The 
                        doorman leads you to the owner of the hut who is sitting on an exquisite throne. She asks why 
                        you are here.';
                        $this->question = 'What do you tell her?';
                        $this->correct_answer = 'You have something';
                        $this->wrong_answer = 'You got lost';
                        break;
                    case 8:
                        $this->body = 'You hand her the jewel and she smiles. "Excellent!" she says, "You passed the
                        test!" You look to her with confusion. Test? She explains that everything that has brought you
                        to this point was a test against each of the 7 deadly sins. She tells you for passing, she will
                        grant you one single wish. Now you can go home! But after experiencing this amazing place above
                        the clouds, do you really want to go back?';
                        $this->question = 'Will you go home?';
                        $this->correct_answer = 'Yes';
                        $this->wrong_answer = 'No';
                        break;
                    case 9:
                        $this->body = 'She sighs with relief. You passed the last test of sloth so she grants you your 
                        wish! You arrive back to where you found yourself before the strange experience. Looking down, 
                        you notice the jewel is now in your hands! A note is attached to it which reads, "Congratulations
                        on finishing the first trial! Keep this in memory".';
                        $this->question = 'Will you continue?';
                        $this->correct_answer = 'Heck yeah!';
                        $this->wrong_answer = 'Not really';
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
                return $trial > 9; //TODO replace 3 with total # of trials in quest 1
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