<?php


namespace Visitor;

use Visitor\Company;
use Visitor\Department;
use Visitor\Employee;

interface IVisitor
{
    public function visitCompany(Company $company): string;

    public function visitDepartment(Department $department): string;

    public function visitEmployee(Employee $employee): string;
}