<?php


namespace Visitor;

use Visitor\IVisitor;

class SalaryReport implements IVisitor
{
    

    public function visitCompany(Company $company): string
    {
        $output = "";
        $total = 0;
        $printDelimiter = php_sapi_name() == 'cli'
                        ? PHP_EOL
                        : '<br>';

        $bracketsWrap = function (string $string){ return '(' . $string . ')'; };

        foreach ($company->getDepartments() as $department) {
            $total += $department->getCost();
            $output .= $printDelimiter . $this->visitDepartment($department);
        }

        $formatMoney = money_format("%i", $total);

        $output = $company->getName()
            . $bracketsWrap($formatMoney)
            . $printDelimiter
            . $output;

        return $output;
    }


    public function visitDepartment(Department $department): string
    {
        $output = "";

        foreach ($department->getEmployees() as $employee) {
            $output .= "   " . $this->visitEmployee($employee);
        }

        $output = $department->getName() .
            " (" . money_format("%i", $department->getCost()) . ")\n\n" .
            $output;

        return $output;
    }


    public function visitEmployee(Employee $employee): string
    {
        return money_format("%#6n", $employee->getSalary()) .
            " " . $employee->getName() .
            " (" . $employee->getPosition() . ")\n";
    }


}