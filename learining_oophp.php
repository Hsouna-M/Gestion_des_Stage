<?php
    class simpleClass{
        public $var = 'value' ; 

        const CONSTANT = 'constant Value' ; 
        //constructeur 
        public function __construct($var)
        {
            $this-> var = $var;
        }

        // geter and setter 
        public function __set($var){}
        
        //static function 
        public static function class_function(){
            echo"this is the result of the class function that i can access wihout creating an instance";
        }
    }


    // $instance_of_the_simple_class = new simpleClass('this is a value to put inside the var') ;
    
    // echo "i want to access the var value inside the simple class ",$instance_of_the_simple_class->var," lets hope this worked "  ;
    // echo "i want to access the var value inside the simple class ",$instance_of_the_simple_class::CONSTANT," lets hope this worked "  ;

    simpleClass::class_function() ; 

?>