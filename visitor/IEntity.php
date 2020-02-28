<?php

namespace Visitor;

use Visitor\IVisitor;

interface IEntity
{

    public function accept(IVisitor $visitor) : string;

}