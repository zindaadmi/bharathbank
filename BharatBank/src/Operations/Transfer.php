<?php

namespace  Bank\Operations;
class Transfer{
    private $Accountno;
    private $amt;
    public function __Construct($Accountno,$amt){
        $this->Accountno=$Accountno;
        $this->amt=$amt;
    }
    function addcash()
    {
        $json = file_get_contents('Bank.json');

        $json_data = json_decode($json, true);

        if ($this->Accountno== $json_data['Student1'][0]['AccountNo']) {
            $json_data['Student1'][0]['Amount'] = $json_data['Student1'][0]['Amount'] + $this->amt;
            $json_data['Student1'][0]['Transid'] = $json_data['Student1'][0]['Transid'] + 1;
            $json_newdata =  json_encode($json_data);
            file_put_contents('Bank.json',$json_newdata);
            return $json_data['Student1'][0]['Amount'];
        }
        else if($this->Accountno== $json_data['Student2'][0]['AccountNo']) {
            $json_data['Student2'][0]['Amount'] = $json_data['Student2'][0]['Amount'] + $this->amt;
            $json_data['Student2'][0]['Transid'] = $json_data['Student2'][0]['Transid'] + 1;
            $json_newdata =  json_encode($json_data);
            file_put_contents('Bank.json',$json_newdata);
            return $json_data['Student2'][0]['Amount'];
        }

    }
}
