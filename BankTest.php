<?php

class BankTest extends \PHPUnit\Framework\TestCase
{

    public function testCash()
    {

        $bank = new \Bank\Bank;
        $result = $bank->cash(123456, 500);
        $this->assertEquals(16100, $result);
    }



    public function testgetBalance()
    {
        $bank = new \Bank\Bank;
        $result = $bank->getBalance(123456);


        $this->assertEquals(16100, $result);
    }

    public function testGetStatement()
    {
        $bank = new \Bank\Bank;
        $result = $bank->getStatement(123456);


        $this->assertEquals(48, $result);
    }

    /**
     * @return void
     */
      public function testA2a(){
      $bank = new \Bank\Bank;
      $result = $bank->a2a(123456,456738,200);


      $this->assertEquals(13400, $result);
      }

}