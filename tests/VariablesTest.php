<?php

namespace Deg540\koans\Test;

use koans\Variable;
use PHPUnit\Framework\TestCase;

class VariablesTest extends TestCase
{
    /**
     * @test
     */
    public function DeclaresAnInt()
    {
        $variable = new Variable();
        $integerValue = $variable->declareAnInt();
        $this->assertIsInt($integerValue);
    }

    /**
     * @test
     */
    public function DeclaresABoolean(){
        $variable = new Variable();
        $value = $variable->declareABoolean();
        $this->assertIsBool($value);
    }

    /**
     * @test
     */
    public function DeclareAFloat(){
        $variable = new Variable();
        $value = $variable->declareAFloat();
        $this->assertIsFloat($value);
    }

    /**
     * @test
     */
    public function DeclareAnArray(){
        $variable = new Variable();
        $value = $variable->declareAnArray();
        $this->assertIsArray($value);
    }

    /**
     * @test
     */
    public function DeclareAnIntWithNullValue(){
        $variable = new Variable();
        $value = $variable->declareAnIntWithNullValue();
        $this->assertNull($value);
    }

    /**
     * @test
     */
    public function AssignAVariableValueToAnotherVariable(){
        $variable = new Variable();
        $value = 0;
        $value2 = $variable->assignAVariableValueToAnotherVariable(2);
        $this->assertNotEquals($value, $value2);
    }

    /**
     * @test
     */
    public function CastStringIntToBoolean()
    {
        $variable = new Variable();
        $value = "Hello world";
        $value2 = $variable->castStringIntToBoolean($value);
        $this->assertIsString($value);
        $this->assertIsBool($value2);
    }


}
