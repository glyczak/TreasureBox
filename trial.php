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
                        $this->body = 'Welcome. You find at the base of a temple. The entrance is sealed off, leaving you
                        stuck outside. There is also no where for you go to. You see nothing you can go to nearby so the
                        only thing to is to find a way in, right?';
                        $this->question = 'What should you do?';
                        $this->correct_answer = 'Search the perimeter';
                        $this->wrong_answer = 'Climb up';
                        break;
                    case 2:
                        $this->body = 'It seems too dangerous to climb up so you search the base of the temple for 
                        anything that could help you get in. Walking around the sides, you find several buttons, one on
                        each side of the temple. Maybe you should press them?';
                        $this->question = 'Do you press the buttons?';
                        $this->correct_answer = 'Yes';
                        $this->wrong_answer = 'No';
                        break;
                    case 3:
                        $this->body = 'You press the buttons and hear a noise coming from the side with the entrance. 
                        Running over, you notice that the entrance has opened! Good job! You step inside but it is very
                        dark. How can you continue if you cannot see? You look around to find some sort of light but have
                        no such luck. However, you do find a strange magnifying glass pointing to the floor. It reflects
                        a bright light onto the floor of the temple. On the walls, you see something hanging.. is it a stick?';
                        $this->question = 'What can you do?';
                        $this->correct_answer = 'Move the glass';
                        $this->wrong_answer = 'Walk in the dark';
                        break;
                    case 4:
                        $this->body = 'You shift the glass carefully over the stick on the wall. After a period of time,
                        you notice smoke coming from the stick and a small fire appears! Neato! You remove the stick from
                        the wall and take it with you. You look around to see within the first floor of the temple. You
                       are surrounded by lots of rubble and dusty artifacts. At the center of the floor, there is a pillar
                        with a unique puzzle resting on top. You notice several characters on the puzzle which can be 
                        moved around and changed.';
                        $this->question = 'How do you solve it?';
                        $this->correct_answer = 'Look for clues';
                        $this->wrong_answer = 'Guess';
                        break;
                    case 5:
                        $this->body = 'The puzzle may be rigged if you accidentally give the wrong answer so you search
                        the room for any clues which could help you solve it. You shine the torch on all the walls and
                        find nothing which could help you. On the floor you notice similar patterns on the rubble.
                        Taking each piece you can find, you piece together the fallen rubble to create a series of the 
                        characters from it. This has to be the answer right? You run over to the center pillar.';
                        $this->question = 'Will you change the characters?';
                        $this->correct_answer = 'Yes';
                        $this->wrong_answer = 'No';
                        break;
                    case 6:
                        $this->body = 'You carefully arrange the characters in a proper order. Suddenly you feel the
                        ground begin to shake! Oh no! Did you do it wrong? The floor beneath you starts to shake and
                        a set of stairs emerges from the ground. Looks like you can move to the next floor!';
                        $this->question = 'Will you go up?';
                        $this->correct_answer = 'Yes';
                        $this->wrong_answer = 'No';
                        break;
                }
                break;
            case 2: //quest 2
                //TODO implement second quest trials
                switch ($trial) {
                    case 1:
                        $this->body = 'You climb the steps to the second floor of the temple. You can hear the faint
                        sound of dripping water somewhere on this floor. Following the noise, you find a beautiful
                        fountain. Maybe you should get the water to flow? That might help you advance. You fuss with
                        the pipe for a couple of minutes until determining it will probably take more than that to turn
                        it on.';
                        $this->question = 'What should you do?';
                        $this->correct_answer = 'Explore this floor';
                        $this->wrong_answer = 'Go back to the other floor';
                        break;
                    case 2:
                        $this->body = 'Nothing within the rubble on the first floor would help you with this puzzle, so
                        you look around for anything which could help you, again. This time you find a series of levers 
                        attached to one of the walls. Okay great! They are probably connected to the water pipes for the
                        fountain.';
                        $this->question = 'How do you arrange them??';
                        $this->correct_answer = 'Keep looking for clues';
                        $this->wrong_answer = 'Pull them all down';
                        break;
                    case 3:
                        $this->body = 'There has to be more to help you figure it out for sure. You glance to the next
                        wall to find a mural of what seems to be people in a line. Maybe this temple used to belong to
                        them? Their bodies are arranged in an odd way, you stare at it really oddly. They are arranged
                        in all sorts of heights and have odd looking faces. You turn back to the lever.. perhaps this is
                        the key to the correct heights?';
                        $this->question = 'What can you do?';
                        $this->correct_answer = 'Fix the levers';
                        $this->wrong_answer = 'Ignore it';
                        break;
                    case 4:
                        $this->body = 'Since you have nothing else to go off of, might as well try it right? You walk
                        back to the lever and give them a tug according to the mural. You pull each lever to the appropriate
                        height and wait. And wait. And wait. You get impatient, maybe that was wrong?';
                        $this->question = 'What should you do?';
                        $this->correct_answer = 'Keep waiting';
                        $this->wrong_answer = 'Kick the pipe';
                        break;
                    case 5:
                        $this->body = 'You assure yourself that you just need to be patient. These pipes must be very old.
                        Your thoughts are interrupted by a loud spurt of water exploding from the pipe! Eureka! Parts of the
                        temple break away, letting in light which reveals the beauty of the water filled fountain. Surrounding 
                        the fountain are large statues which mimic the people on the mural. You notice they are all pointing
                        in one direction. Walking in that direction you find a ladder made of rope, wrapped by vines. You can
                        see light coming from above, meaning you can leave your torch behind.';
                        $this->question = 'Will you continue?';
                        $this->correct_answer = 'Heck yeah!';
                        $this->wrong_answer = 'Not sure';
                        break;
                }
                break;
            case 3: //quest 3
                //TODO implement third quest trials
                switch ($trial) {
                    case 1:
                        $this->body = 'Climbing up the top of the vine, you finally reach the highest floor of the temple.
                        You find your final puzzle. There are several walls placed in front of you like a maze. You hear
                        a rumbling coming from your left side when you see a large boulder rolling towards you! Crap! You
                        break into a sprint.';
                        $this->question = 'Where do you run?';
                        $this->correct_answer = 'Right';
                        $this->wrong_answer = 'Left';
                        break;
                    case 2:
                        $this->body = 'It seems obvious that you run the opposite direction of the ball. You run to the 
                        right and keep going until you reach another breaking point. You can feel the ground beneath you
                        shifting with every step you take. There is no way for you to know which way to go, you can only 
                        trust your gut.';
                        $this->question = 'Where do you run?';
                        $this->correct_answer = 'Straight';
                        $this->wrong_answer = 'Left';
                        break;
                    case 3:
                        $this->body = 'You keep going the same direction. Hoping to avoid any dead ends, you try to think 
                        of a way to get away from the boulder. You have reached one of the walls of the temple, not just a
                        wall of the maze. Maybe you should try going towards the center? Or maybe the other corners of the maze?';
                        $this->question = 'Where do you run?';
                        $this->correct_answer = 'Center';
                        $this->wrong_answer = 'Corners';
                        break;
                    case 4:
                        $this->body = 'It will take too long to run to every corner of this maze, and it seems way too
                        risky. You need to find a way to the center. You can hear the boulder approaching, you need to
                        move! You run along the side of the wall, looking for a way into the middle of the maze. You find
                        yet another break.';
                        $this->question = 'Where do you run?';
                        $this->correct_answer = 'Left';
                        $this->wrong_answer = 'Straight';
                        break;
                    case 5:
                        $this->body = 'Running left probably brings you closer to the center right? Right. I mean left.
                        Whatever, you go left. You look back to see where the boulder is and find it stuck where you
                        turned left. You have gained yourself some time, but it will still come after you.';
                        $this->question = 'Where do you run?';
                        $this->correct_answer = 'Left';
                        $this->wrong_answer = 'Right';
                        break;
                    case 6:
                        $this->body = 'Keep going left! You run through any and every left opening you can until you
                        reach a spot that you think is the center. You find nothing to help you solve this puzzle. Maybe
                        you need to go a little farther up?';
                        $this->question = 'Where do you run?';
                        $this->correct_answer = 'Straight up';
                        $this->wrong_answer = 'Go back';
                        break;
                    case 7:
                        $this->body = 'Running back through the entrance you came from is almost certain death, the boulder
                        is still after you! You run a little farther up until you come across a large pit. Well this is
                        certainly new. You can hear the boulder coming.';
                        $this->question = 'What do you do?';
                        $this->correct_answer = 'Jump over the pit';
                        $this->wrong_answer = 'Jump into the pit';
                        break;
                    case 8:
                        $this->body = 'You run back as far as you can without the boulder hitting you and sprint towards
                        the pit, jumping over it at the last possible moment. You manage to make it to the other side and
                        roll away from the pit to safety. Looking behind you, you watch the boulder roll into pit. Good 
                        thing you chose not to jump into that thing. You turn around to find a large chest.';
                        $this->question = 'What do you do';
                        $this->correct_answer = 'Open';
                        $this->wrong_answer = 'Do not open';
                        break;
                }
                break;
        }
    }

    public static function quest_completed($quest, $trial) {
        switch ($quest) {
            case 1:
                return $trial > 6;
            case 2:
                return $trial > 5;
            case 3:
                return $trial > 8;
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