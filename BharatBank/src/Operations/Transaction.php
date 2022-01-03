<?php
namespace Bank\Operations;

/**
 *
 */



class Transaction
{   private $Accountno;
    public function __Construct($Accountno){
        $this->Accountno=$Accountno;
    }
    public function statement()
    {
        $json = file_get_contents('Bank.json');

        $json_data = json_decode($json, true);
        if ($this->Accountno == $json_data['Student1'][0]['AccountNo']){
            return ($json_data['Student1'][0]['Transid']);}
        else if ($this->Accountno == $json_data['Student2'][0]['AccountNo']){
            return ($json_data['Student2'][0]['Transid']);}

        $json_newdata =  json_encode($json_data);
        file_put_contents('Transaction.json',$json_newdata);


    }
}
