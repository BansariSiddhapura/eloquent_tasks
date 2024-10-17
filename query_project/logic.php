<?php

use App\Models\Clients;
use App\Models\Clients2;
use Illuminate\Support\Facades\DB;

require_once __DIR__ . "/includes/connection.php";

class MyData
{
    function showData($id = "")
    {
        if(!empty($_POST['type'])){
            if($_POST['type']=='getRows' OR $_POST['type']=='updateRow' OR $_POST['type']=='deleteRow' OR $_POST['type']=='totalCount' OR $_POST['type']=='count'){
                $query = Clients::all();
            }
            if($_POST['type']=='rowSorted'){
                $query=Clients::orderBy('name','desc')->get();
                //$query=Clients::select('name','email')->groupBy('name');
               // Clients::inRandomOrder()->first()
                //$query = Clients::orderBy('name','desc')->orderBy('email','asc')->get();
                //$query = Clients::orderByDesc('name')->get();
                
            }
            if($_POST['type']=='whereInLikes'){
                $query = Clients::whereLike('name','%vi%')->get();
            }
            if($_POST['type']=='distinctRows'){
                $query=Clients::distinct()->get(['name']);
            }
            if($_POST['type']=='singleRow'){
                $query=Clients::inRandomOrder()->first();
            }
            if($_POST['type']=='join'){
                 $query=Clients::join('client', 'ajax_client.name', '=', 'client.name')->select('ajax_client.id','ajax_client.name','client.hobbies','ajax_client.email','ajax_client.city','ajax_client.gender')->get();
               // $query=DB::table('ajax_client')->join('client', 'ajax_client.name', '=', 'client.name')->select('ajax_client.id','ajax_client.name','client.hobbies','ajax_client.email','ajax_client.city','ajax_client.gender')->get();
            }
            if($_POST['type']=='groupBy'){
                //SELECT name,count(name) as number from ajax_client GROUP BY name;
                //$query=Clients::select('name')->count('name')->groupBy('name')->get();
                $query=Clients::selectRaw('count(name) as number_of_names, name')->groupBy('name')->get();
            
            }
        }

        if (!empty($id)) {
            $query = Clients::find($id);
        }
        //$result=$this->conn->query($query);
        //$row= $query->fetch_assoc();
        return $query;
    }
    function insert($clientData)
    {
        $user_id = $clientData['id'];
        //echo $user_id;
        $query = "";
        $query = (!empty($user_id)) ?

            Clients::where('id', $user_id)->update(['name' => $clientData['name'], 'email' => $clientData['email'], 'password' => $clientData['pass'], 'city' => $clientData['city'], 'gender' => $clientData['gender']]) :

            Clients::create(['name' => $clientData['name'], 'email' => $clientData['email'], 'password' => $clientData['pass'], 'city' => $clientData['city'], 'gender' => $clientData['gender']]);

        if ($query) {
            return ['message' => !empty($user_id) ? 'User Updated Successfully' : 'User Inserted Successfully'];
        } else {
            return ['message' => "Something Went Wrong!"];
        }
    }
    function delete($id)
    {
        $query = Clients::where('id', $id)->delete();
        return $query;
    }
}
