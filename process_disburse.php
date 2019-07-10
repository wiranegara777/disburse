<?php 
    include 'class/disburse.php';
    
    $crud = new Crud();
    $disburse_data = $crud->getData("SELECT * FROM disburse_receipt");
    $i = 1;
    foreach($disburse_data as $data){
        echo "disburse process number ".$i."<br>";
        $disburse = new Disburse($data["bank_code"],$data["account_number"],$data["amount"],$data["remark"]);
        $result = json_decode($disburse->disburse());
        $disburse->update_disburse($result->account_number,$result->id,$result->status,$result->timestamp,$result->beneficiary_name,$result->fee); 
        $i+=1;
    }
    echo "disburse finished";
?>