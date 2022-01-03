<?php
namespace Bank\Operations;

class Account2account
{   private $source, $destination, $amount;
    public function __Construct($source, $destination, $amount){
        $this->source=$source;
        $this->destination=$destination;
        $this->amount=$amount;

    }
    public function a2a()
    {
        $json = file_get_contents('Bank.json');

        $json_data = json_decode($json, true);
        if (($this->source == $json_data['Student1'][0]['AccountNo'] && $this->destination == $json_data['Student2'][0]['AccountNo'])){
            $json_data['Student1'][0]['Amount'] = $json_data['Student1'][0]['Amount'] - $this->amount;
            $json_data['Student2'][0]['Amount'] = $json_data['Student2'][0]['Amount'] + $this->amount;
        return $json_data['Student2'][0]['Amount'];}
        else if (($this->source == $json_data['Student2'][0]['AccountNo'] && $this->destination == $json_data['Student1'][0]['AccountNo'])){
            $json_data['Student2'][0]['Amount'] = $json_data['Student2'][0]['Amount'] - $this->amount;
            $json_data['Student1'][0]['Amount'] = $json_data['Student1'][0]['Amount'] + $this->amount;
            return $json_data['Student1'][0]['Amount'];     }

        $json_newdata =  json_encode($json_data);
        file_put_contents('Bank.json',$json_newdata);


    }
}

