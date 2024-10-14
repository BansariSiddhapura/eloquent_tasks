<?php

use App\Models\Clients;

require_once __DIR__."/includes/connection.php";

class MyData{
    function showData(){
        $query=Clients::all();
        //$result=$this->conn->query($query);
         //$row= $query->fetch_assoc();
        return $query;
    }
    function insert($clientData){
        $query=Clients::create(['name'=>$clientData['name'],'email'=>$clientData['email'],'password'=>$clientData['pass'],'city'=>$clientData['city'],'gender'=>$clientData['gender']]);
        return $query;
    }
    function delete($id){   
        $query=Clients::where('id',$id)->delete();
        return $query;
    }
}

?>