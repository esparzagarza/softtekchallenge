<?php

/******************************
 * ISC Pedro Esparza
 * isc.pedroesparza@gmail.com
 * Nov 02, 2023
 * Softtek challenge
******************************/

// Turn on the Light
namespace SofttekChallenge;

// Autoload
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_readable($file)) require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
});

// Resources
use src\classes\challengeController;

// Let the Controller do the hard work!

// Challenge #1 - Largest and smallest number    
challengeController::Challenge1(floatval('3'), floatval(5));

// Challenge #2 - In the range, please.
challengeController::Challenge2(floatval('8'), floatval(5));

// Challenge #3 - Changing ranges.
challengeController::Challenge3(floatval('20'), floatval(5), floatval(10));

// Challenge #4 - "I like turtles".
challengeController::Challenge4(strval('Turtle'));

// Challenge #5 - How is the weather?
challengeController::Challenge5(strval('YeS'), strval('nO'));

// Challenge #6 - Age Allowed
challengeController::Challenge6(intval('18'));

// Challenge #7 - Optional Messages
challengeController::Challenge7(intval('6'));