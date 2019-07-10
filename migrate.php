<?php 
    include_once("class/Crud.php");
    $crud = new Crud();
    $data = $crud->execute("CREATE TABLE disburse_receipt (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        id_disburse VARCHAR(225) DEFAULT NULL,
        amount INT(11),
        status VARCHAR(225) DEFAULT NULL,
        stamp VARCHAR(225),
        bank_code VARCHAR(225),
        account_number INT(11),
        beneficiary_name VARCHAR(225) DEFAULT NULL,
        remark VARCHAR(225),
        receipt VARCHAR(225) DEFAULT NULL,
        timeserved VARCHAR(225) DEFAULT NULL,
        fee INT(11) DEFAULT NULL
        );");
    $seed = $crud->execute("INSERT INTO `disburse_receipt` 
    (`id`, `id_disburse`, `amount`, `status`, `stamp`, `bank_code`, `account_number`, `beneficiary_name`, `remark`, `receipt`, `timeserved`, `fee`) 
    VALUES 
        (NULL, NULL, '20000', NULL, '0000-00-00 00:00:00.000000', 'bca', '1', NULL, 'sample remark', NULL, '0000-00-00 00:00:00.000000', NULL),
        (NULL, NULL, '1000000', NULL, '0000-00-00 00:00:00.000000', 'bni', '2', NULL, 'sample remark', NULL, '0000-00-00 00:00:00.000000', NULL),
        (NULL, NULL, '3750000', NULL, '0000-00-00 00:00:00.000000', 'bri', '3', NULL, 'sample remark', NULL, '0000-00-00 00:00:00.000000', NULL),
        (NULL, NULL, '15000000', NULL, '0000-00-00 00:00:00.000000', 'btn', '4', NULL, 'sample remark', NULL, '0000-00-00 00:00:00.000000', NULL),
        (NULL, NULL, '250000', NULL, '0000-00-00 00:00:00.000000', 'ocbc', '5', NULL, 'sample remark', NULL, '0000-00-00 00:00:00.000000', NULL),
        (NULL, NULL, '100000', NULL, '0000-00-00 00:00:00.000000', 'mandiri', '6', NULL, 'sample remark', NULL, '0000-00-00 00:00:00.000000', NULL),
        (NULL, NULL, '750000', NULL, '0000-00-00 00:00:00.000000', 'bca', '7', NULL, 'sample remark', NULL, '0000-00-00 00:00:00.000000', NULL),
        (NULL, NULL, '4500000', NULL, '0000-00-00 00:00:00.000000', 'btn', '8', NULL, 'sample remark', NULL, '0000-00-00 00:00:00.000000', NULL),
        (NULL, NULL, '860000', NULL, '0000-00-00 00:00:00.000000', 'bca', '9', NULL, 'sample remark', NULL, '0000-00-00 00:00:00.000000', NULL),
        (NULL, NULL, '800000', NULL, '0000-00-00 00:00:00.000000', 'bri', '10', NULL, 'sample remark', NULL, '0000-00-00 00:00:00.000000', NULL)");
    if ($data){
        echo "succesfully migrate and seed data to database";
    } else {
        echo "failed to migrate";
    }
?>

