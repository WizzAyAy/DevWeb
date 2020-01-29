<?php
interface IEmployee {
    public function __construct(int $id, string $name, float $salary, int $age);
    public function getId() :int;
    public function getName() :string;
    public function getSalary() :float;
    public function getAge() :int;
    public function setId(int $id);
    public function setName(string $name);
    public function setSalary(float $salary);
    public function setAge(int $age);
    public function __toString() : string;
}
?>