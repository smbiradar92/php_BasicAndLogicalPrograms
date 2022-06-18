<?php

class Employee
{

    public $name;
    public $age;
    public $salary;

    function __constructor($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

     function info()
    {
        echo "Employee profile" . "\n";
        echo "Employee name = " . $this->name . "\n";
        echo "Employee age = " . $this->age . "\n";
        echo "Employee salary = " . $this->salary . "\n";
    }
}

class Manager extends Employee{

    public $ta = 1000;
    public $call = 200;

    function info()
     {
        $this -> totalsalary = $this->ta + $this -> call;
 
        echo "Manager profile" . "\n";
        echo "Employee name = " . $this->name . "\n";
        echo "Employee age = " . $this->age . "\n";
        echo "Employee salary = " . $this-> totalsalary . "\n";
    }

}

$e1 = new Employee("Ram", 25, 10000);
$e2 = new Manager("Shaam", 26, 2000);

$e1->info();
$e2->info();
