<?php


namespace Visitor;

use Visitor\IVisitor;

class Employee implements IEntity
{

    private $name;

    private $position;

    private $salary;


    public function __construct(string $name, string $position, int $salary)
    {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function getPosition(): string
    {
        return $this->position;
    }


    public function getSalary(): int
    {
        return $this->salary;
    }


    public function accept(IVisitor $visitor): string
    {
       return $visitor->visitEmployee($this);
    }
}