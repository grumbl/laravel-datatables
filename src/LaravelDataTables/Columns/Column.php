<?php namespace Grumbl\LaravelDataTables\Columns;

use Grumbl\LaravelDataTables\Columns\BaseColumn;

class Column extends BaseColumn
{
    public function __construct($columnName = null, $searchable = null, $visible = null, $name = null)
    {
        parent::__construct($columnName, $searchable, $visible, $name);
    }
}