<?php

namespace Bank\Contracts;



interface Bankinterface
{

    /**
     * @param $Accountno
     * @param $amt
     * @return int
     */
    function cash($Accountno, $amt): int;

    function getBalance($Accountno): int;

    function getStatement($Accountno): int;

    function a2a($source, $destination, $amount): int;
}