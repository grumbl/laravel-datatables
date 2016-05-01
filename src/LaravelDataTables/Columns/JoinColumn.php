<?php namespace Grumbl\LaravelDataTables\Columns;

use Grumbl\LaravelDataTables\Columns\BaseColumn;

class JoinColumn extends BaseColumn
{
    protected $joinName;

    public function __construct($columnDefinition = null, $settings = [])
    {
        if ($columnDefinition) {
            $this->setColumnDefinition($columnDefinition);
        }

        parent::__construct(null, $settings);
    }

    public function setColumnDefinition($columnDefinition)
    {
        if (is_array($columnDefinition) && count($columnDefinition) == 2) {
            $this->setJoinName($columnDefinition[0]);
            $this->setColumnName($columnDefinition[1]);

            $this->setName($columnDefinition[0] . $columnDefinition[1]);
        }
    }

    public function getJoinName()
    {
        return $this->joinName;
    }

    public function setJoinName($joinName)
    {
        $this->joinName = $joinName;
    }
}