<?php

interface FamilyInterface
{
    public function showAge();

    public function showName();
}

interface ChildInterface
{
    public function showSex();
}

class Family implements FamilyInterface
{
    public function showAge() {
        echo $this->age;
    }

    public function showName() {
        echo $this->name;
    }
}

abstract class Parents extends Family
{
    protected function showFamilySituation() {
        echo $this->status;
    }
}

class Father extends Parents
{
    protected $status = 'husband';

    protected $age = '44';

    protected $name = 'John';
}

class Mother extends Parents
{
    protected $status = 'wife';

    protected $age = '38';

    protected $name = 'Mary';
}

class Child extends Family implements ChildInterface
{
    protected $age = '10';

    protected $sex = 'male'; 

    protected $name = 'Andy';

    public function showSex() {
        echo $this->sex;
    }
}

?>