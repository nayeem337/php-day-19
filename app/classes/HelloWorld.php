<?php

namespace App\classes;

class HelloWorld
{
    public $message;

    public $firstName, $lastName;

    public $firstNumber, $lastNumber;

    public function __construct()
    {
        $this->message  = 'Hello World';

        $this->firstName = 'Habibur';
        $this->lastName = 'Rahman';
    }

    public function index ()
    {
//        Operators
        /*
         *  * Arithmetic Operator (+, -, *, /, %, ++, --, -)
         *  * Assignment Operator (=, +=, -=, *=, /=, %=, .=)
         *  * Conditional Operator (>, >=, <, <=, ==, ===, !=, !==)
         *  * Logical Operator ( &&, ||, !)
         *
         */
//        $this->firstNumber = -10;
//        $this->lastNumber = 20;
//        echo '<br/>';
//        echo -$this->firstNumber;

//        echo '<br/>';
//        echo $this->firstNumber++; // 10 10 10 10  --> 10
//        echo '<br/>';
//        echo ++$this->firstNumber; // 12 12 12 12 --> 12
//        echo '<br/>';
//        echo $this->firstNumber--; // 11 10 12 12  --> 12
//        echo '<br/>';
//        echo --$this->firstNumber; // 10 10 11 10  --> 10
//        echo '<br/>';
//        echo ++$this->firstNumber; // 11 11 11 11 --> 11
//        echo '<br/>';
//        echo $this->firstNumber--; // 10 10 10 11  --> 11
//        echo '<br/>';
//        echo --$this->firstNumber; // 9 9 9 9  --> 9
//        echo '<br/>';
//        echo $this->firstNumber++; // 10 10  9  --> 9
//        echo '<br/>';
//        echo $this->firstNumber; // 10 10  9  --> 10


//        echo '<br/>';
//        echo $this->firstNumber + $this->lastNumber; // 30
//        echo '<br/>';
//        echo $this->firstNumber - $this->lastNumber; // -10
//        echo '<br/>';
//        echo $this->firstNumber * $this->lastNumber; // 200
//        echo '<br/>';
//        echo $this->firstNumber / $this->lastNumber; // 0.5
//        echo '<br/>';
//        echo $this->firstNumber % $this->lastNumber; // 10

//        echo $this->message;
//        3 major rules
        /*
         *  start with $ sign
         *  a-z, A-Z, 0-9, _
         *  no number in first
         */

//        standerd rules
        /*
         * small letter
         * meaningful
         * readable
         */
//        echo $this->firstName.' &nbsp;'.$this->lastName;
//        echo gettype($this->firstName);
    }
}