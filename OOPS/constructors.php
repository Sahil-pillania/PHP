<?php
    class Employee{
        // Properties of our Class
        public $name;
        public $salary;

        // Methods of Our Class
        // Constructor - It allows you to initialize objects. It is the code which is executed whenever a new object is instantiated.

        // Constructor without arguments
        // function __construct(){
        //     echo "This is my constructor for employee";
        // }

        // Constructor with arguments
        function __construct($name1, $salary1){
            $this->name = $name1;
            $this->salary = $salary1;

        }

    }

    $Arun = new Employee("Arun", 73000);
    $Sahil = new Employee("Sahil", 10000);
    $sk = new Employee("Sk", 56000); 

    echo "The salary of harry is $Sahil->salary <br>";
    echo "The salary of skillF is $sk->salary";
?>