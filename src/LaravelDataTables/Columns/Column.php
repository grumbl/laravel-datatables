<?php namespace Grumbl\LaravelDataTables\Columns;

use Grumbl\LaravelDataTables\Columns\BaseColumn;

class Column extends BaseColumn
{
    public function __construct($columnName = null, $settings = [])
    {
        parent::__construct($columnName, $settings);
    }
}