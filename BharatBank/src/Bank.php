<?php

namespace Bank;
include("src/Operations/Transfer.php");
include ("src/Operations/Balance.php");
include ("src/Operations/Transaction.php");
include("src/Operations/Account2account.php");
include ("src/Contracts/Bankinterface.php");

use Bank\Contracts\Bankinterface;
use Bank\Operations\Transfer;
use Bank\Operations\Balance;
use Bank\Operations\Transaction;
use Bank\operations\Account2account;

/**
 *
 */
 class Bank implements Bankinterface
 {

     /**
      * @param $Accountno
      * @param $amt
      * @return int
      */

    function cash($Accountno, $amt): int
    {
        $obj = new Transfer($Accountno,$amt);
        return ($obj->addcash());
    }
    function getBalance($Accountno): int
    {
        $obj = new Balance($Accountno);
        return $obj->bal();
    }
    function getStatement($Accountno): int
    {
        $obj = new Transaction($Accountno);
        return $obj->statement();
    }

    function a2a($source, $destination, $amount): int
    {
        $obj = new Account2account($source, $destination, $amount);
        return $obj->a2a();
    }
}
