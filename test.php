<?php
// Define a class
 class Reimburse
 {
    // Declaring three private varaibles
    protected $bank_code;
    protected $account_number;
    protected $amount;
    protected $remark;
 
    function __construct($bank_code, $account_number, $amount, $remark)
        {
            $this->bank_code = $bank_code;
            $this->account_number = $account_number;
            $this->amount = $amount;
            $this->remark = $remark;
        }
    // Declare a method for customize print 
    function customize_print()
        {
        echo $this->bank_code;
        } 
    
    function reimburse(){
        $data = array(
            'bank_code' => $this->bank_code,
            'account_number' => $this->account_number,
            'amount' => $this->amount,
            'remark' => $this->remark
        );
        $username = "HyzioY7LP6ZoO7nTYKbG8O4ISkyWnX1JvAEVAhtWKZumooCzqp41";
        $password = '';
        $payload = json_encode($data);
            
        // Prepare new cURL resource
        $ch = curl_init('https://nextar.flip.id/disburse');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            
        // Set HTTP Header for POST request 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Basic '. base64_encode("$username:$password"),
            'Content-Length: ' . strlen($payload))
        );
            
        // Submit the POST request
        $result = curl_exec($ch);
        echo $result;
        // Close cURL session handle
        curl_close($ch);
    }

}
    
 ?>