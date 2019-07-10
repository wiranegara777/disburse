<?php 
    include 'test.php';
    $reimburse = new Reimburse("bni","1","200000","sample remark");
    $reimburse->reimburse(); 
?>