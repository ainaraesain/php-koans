<?php


namespace koans;


use phpDocumentor\Reflection\Types\Boolean;

class Variable
{

    /**
     * Variable constructor.
     */
    public function __construct()
    {
    }

    public function declareAnInt()
    {
        $intVariable = 1;
        return $intVariable;
    }

    public function declareABoolean()
    {
        $boolVariable = false;
        return $boolVariable;
    }

    public function declareAFloat()
    {
        $floatVariable = 2.3;
        return $floatVariable;
    }

    public function declareAnArray()
    {
        $array = [];
        return $array;
    }

    public function declareAnIntWithNullValue()
    {
        $nullInt = null;
        return $nullInt;
    }

    public function assignAVariableValueToAnotherVariable(int $int)
    {
        $variableAssign = $int;
        return $variableAssign;
    }

    public function castStringIntToBoolean(string $value)
    {
        $booleanVar = (bool)$value;
        return $booleanVar;
    }




}