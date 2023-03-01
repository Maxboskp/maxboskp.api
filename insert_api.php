<?php

    require "connection.php";
    if (isset($_POST['pid'])) {
        $proid = $_POST['pid'];
        $proname = $_POST['pname'];
        $prodetail = $_POST['pdetail'];
        $proprice = $_POST['pprice'];
        $procost = $_POST['pcost'];
        $promfg = $_POST['pmfg'];
        $proexp = $_POST['pexp'];
    }else return;

    $insertSql = "insert into product(proID, proName, proDetail, proPrice, proCost, proMFG, proExp) values('"+$proid+"','"+$proname+"','"+$prodetail+"',"+$proprice+","+$procost+",'"+$promfg+"','"+$proexp+"')";
    $query = mysqli_query($conn,$insertSql);
    $array=[];
    if($query){
        $array["status"]="OK";
    }else{
        $array["status"]="NO";
    }
    print(json_encode($array,JSON_UNESCAPED_UNICODE));
?>