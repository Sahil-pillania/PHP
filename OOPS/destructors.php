<?php
    class Employee{
        // Properties of our Class
        public $name;
        public $salary; 

        // Constructor
        function __construct($name1, $salary1){
            $this->name = $name1;
            $this->salary = $salary1;
        }

        // Destructor
        function __destruct(){
            echo "I am destructing $this->name <br>";
        }
    }

    $Arun = new Employee("Arun", 73000);
    $Sahil = new Employee("Sahil", 10000);
    $sk = new Employee("Sk", 56000); 

    echo "The salary of harry is $Sahil->salary <br>";
    echo "The salary of skillF is $sk->salary";
?>