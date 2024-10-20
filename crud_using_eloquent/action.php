<?php
require_once "logic.php";

$myData = new MyData();

if (isset($_POST['action'])) {
    //echo $_POST['action'];
    if ($_POST['action'] == 'select') {
        $data = $myData->showData();
        echo json_encode($data);
    }
    if ($_POST['action'] == 'insert') {
        $clientData=[];
        parse_str($_POST['data'],$clientData);
        $data = $myData->insert($clientData);
        echo ($data) ?  json_encode(['message' => 'insert success']) :  json_encode(['message' => 'can not insert']);
    }
    if($_POST['action']=='delete'){
        $data=$myData->delete($_POST['data']);
        echo ($data) ?  json_encode(['message' => 'delete success']) :  json_encode(['message' => 'can not delete']);
    }
}
