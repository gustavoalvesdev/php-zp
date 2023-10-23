<?php 

class Person
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age) 
    {
        $this->age = $age;
    }

}

class PersonAdapter
{
    private $sex;
    private $person;

    public function __construct(Person $person)
    {
        $this->person = $person;    
    }

    public function getSex()
    {
        return $this->sex;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    public function getName()
    {
        return $this->person->getName();
    }

    public function setName($name)
    {
        $this->person->setName($name);
    }

    public function getAge()
    {
        return $this->person->getAge();
    }

    public function setAge($age)
    {
        $this->person->setAge($age);
    }
}

$person = new Person('Bonieky', 90);
$pa = new PersonAdapter($person);
$pa->setSex('masculino');

print 'Name: ' . $pa->getName() . PHP_EOL;
print 'Age: ' . $pa->getAge() . PHP_EOL;
print 'Sex: ' . $pa->getSex() . PHP_EOL;
