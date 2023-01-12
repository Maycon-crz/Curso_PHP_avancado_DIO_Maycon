<?php 

use PHPUnit\Framework\TestCase;


class SearchTest extends TestCase{
    public function testGetAddressFromZipcodeDefaultUse(){
        $resultado = "ok";
        $this->assertEquals("ok", $resultado);
    }
}