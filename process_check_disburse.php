<?php 
    include 'class/disburse.php';

    $crud = new Crud();

    $data_disburse = $crud->getData("SELECT * from disburse_receipt");
    $i = 1;
    foreach($data_disburse as $data){
        $disburse = new Disburse($data["bank_code"],$data["account_number"],$data["amount"],$data["remark"]);
        $disburse->checkStatus($data["id_disburse"]);
        $i+=1;
    }
    echo "disburse data updated";
?>