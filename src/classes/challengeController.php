<?php

namespace src\classes;

use src\classes\helpers;

class challengeController {    

    /*
    Write a program that asks the user for 2 numbers, showing as output which is the larger number and the difference of one with respect to the other.
    In case the numbers are equal, show it on the screen as well.
    */    
    public static function Challenge1(float $first = 0, float $second = 0): void {

        $result = strval('');

        if ($first === $second) $result = 'equal';
        elseif ($first > $second) $result = 'first';
        else $result = 'second';

        helpers::returnToAction(helpers::formatResponse(200, $result, [$first, $second]));
    }


    /*
    Challenge #2 - In the range, please.
    Ask the user to indicate 2 numbers: one to serve as a limit and one to compare.
    If the second number is less than the first, you will display a message saying "Number 'x' is in range, thank you" and otherwise it will say "Number 'x' exceeds the allowed limit".
    */
    public static function Challenge2(float $limit = 0, float $compare = 0): void {

        $result = strval('');

        if ($compare < $limit) $result = 'Number: ' . $compare . ' is in range, thank you';
        else $result = 'Number: ' . $compare . ' exceeds the allowed limit';

        helpers::returnToAction(helpers::formatResponse(200, $result, [$limit, $compare]));
    }


    /* Challenge #3 - Changing ranges.
    Again ask your user to indicate 3 numbers: an upper limit, a lower limit, and a comparison number.
    If the comparison number is between the first 2, report it on the screen. If it is below the lower limit or above the upper limit, also display it on the screen.
    */
    public static function Challenge3(float $upperLimit = 0, float $lowerLimit = 0, float $compare = 0): void {

        $result = strval('');

        if ($compare > $lowerLimit && $compare < $upperLimit) $result = 'Number: ' . $compare . ' is in between, thank you';
        else $result = 'Number: ' . $compare . ' is not between the limit';

        helpers::returnToAction(helpers::formatResponse(200, $result, [$upperLimit, $lowerLimit, $compare]));
    }


    /* Challenge #4 - "I like turtles".
    Write a program that asks the user to enter their favorite animal, if they enter 'Turtle', 'tortoise', 'turtle', 'TURTLE' or any other variant of the word then display "I also like turtles".
    Otherwise display the message "That animal is cool, but I prefer turtles".
    */    
    public static function Challenge4(string $animal): void {
        
        $compare = false;
        
        foreach (helpers::turtleVariants() as $variant) {
            if (strtolower($animal) === strtolower($variant)) {
                $compare = true;
                break;
            }
        }
        
        $result = $compare
        ? 'I also like turtles'
        : 'That animal is cool, but I prefer turtles';
        
        helpers::returnToAction(helpers::formatResponse(200, $result, [$animal]));
    }


    /* Challenge #5 - How is the weather?
    Create a program that asks the user if it is raining, if they answer "yes" it asks if it is too windy and if they answer "yes" again it displays a message indicating that it is too windy to go out with an umbrella.
    Otherwise, it encourages the user to bring an umbrella. For the case of answering "no" in the first question, then just wish for a nice day.
    Consider that the answers can be changed to lowercase to avoid possible errors.
    */
    public static function Challenge5(string $first = '', string $second = ''): void {

        $result = strval('');
        $first = strtolower($first);
        $second = strtolower($second);

        if ($first == 'yes') {
            if ($second == 'yes') $result = 'It is too windy to go out with an umbrella';
            else $result = 'It is suggested to use an umbrella';
        } else $result = 'Have a nice day!';

        helpers::returnToAction(helpers::formatResponse(200, $result, [$first, $second]));
    }


    /* Challenge #6 - Age Allowed
    Ask the user to enter their age and you will display a corresponding message if it matches the following conditions:
    Over 30: It's never too late to learn What course will we take?
    Between 29 and 18: It's a great time to boost your career.
    Under 18: Do you know where your future is headed? I'm sure I can help you.
    */
    public static function Challenge6(int $age = 0): void {

        $result = strval('');

        if ($age < 18) $result = 'Do you know where your future is headed? I\'m sure I can help you.';
        if ($age >= 18 && $age <= 29) $result = 'It\'s a great time to boost your career.';
        if ($age >= 30) $result = 'It\'s never too late to learn What course will we take?';       

        helpers::returnToAction(helpers::formatResponse(200, $result, [$age]));
    }


    /*
    Challenge #7 - Optional Messages
    You will create a script for which the user will indicate a number between 1 and 6. In response you will provide a message according to the number read:
    1 - "Today we will learn about prorgamation".
    2 - "How about taking a digital marketing course?
    3 - "Today is a great day to start learning about design" 4 - "How about learning about design?
    4 - "How about learning about online business?
    5 - "Let's look at a couple of classes on audiovisual production".
    6 - "Maybe it would be good to develop a soft skill in Softtek".
    In case indicate a different number, ask the user to enter one in the valid range.
    */
    public static function Challenge7(int $option = 0): void {

        $result = strval('');

        switch ($option) {
            case 1: $result = 'Today we will learn about prorgamation'; break;
            case 2: $result = 'How about taking a digital marketing course?'; break;
            case 3: $result = 'Today is a great day to start learning about design'; break;
            case 4: $result = 'How about learning about online business?'; break;
            case 5: $result = 'Let\'s look at a couple of classes on audiovisual production'; break;
            case 6: $result = 'Maybe it would be good to develop a soft skill in Softtek'; break;
            default: $result = 'Please enter one in the valid range'; break;
        }

        helpers::returnToAction(helpers::formatResponse(200, $result, [$option]));
    }
}