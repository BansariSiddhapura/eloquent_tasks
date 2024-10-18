<?php
require_once "logic.php";

$myData = new MyData();

if (!empty($_POST['action'])) {
    //echo $_POST['action'];
    if ($_POST['action'] == 'select') {
    
        $search= !empty($_POST['search_item']) ? $_POST['search_item'] : '';
    
        $data = !empty($_POST['id']) ? $myData->showData($_POST['id']) :  $myData->showData("",$search);
        echo json_encode($data);
    }

    if ($_POST['action'] == 'insert') {
        $clientData = [];
        parse_str($_POST['data'], $clientData);
        $data = $myData->insert($clientData);
        echo json_encode($data);
        //echo ($data) ?  json_encode(['message' => 'insert success']) :  json_encode(['message' => 'can not insert']);
    }
    if($_POST['action']=='delete'){
        $data=$myData->delete($_POST['id']);
        echo ($data) ?  json_encode(['message' => 'delete success']) :  json_encode(['message' => 'can not delete']);
    }
}
