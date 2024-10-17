<?php

use App\Models\Clients;
use App\Models\Clients2;
use Illuminate\Support\Facades\DB;

require_once __DIR__ . "/includes/connection.php";

class MyData
{
 
    function showData($id = "")
    {
       isset($_POST['type']) ? $type = $_POST['type'] : '';
        //echo $type;
        if (!empty($type)) {
            if ($type == 'getRows' or $type == 'updateRow' or $type == 'deleteRow' or $type == 'totalCount' or $type == 'count') {
                $query = Clients::all();
            }
            if ($type == 'rowSorted') {
                $query = Clients::orderBy('name', 'desc')->get();
                //$query=Clients::select('name','email')->groupBy('name');
                // Clients::inRandomOrder()->first()
                //$query = Clients::orderBy('name','desc')->orderBy('email','asc')->get();
                //$query = Clients::orderByDesc('name')->get();
            }
            if ($type == 'whereInLikes') {
                $query = Clients::whereLike('name', '%vi%')->get();
            }
            if ($type == 'distinctRows') {
                $query = Clients::distinct()->get(['name']);
            }
            if ($type == 'singleRow') {
                $query = Clients::inRandomOrder()->first();
            }
            if ($type == 'join') {
                $query = Clients::join('client', 'ajax_client.name', '=', 'client.name')->select('ajax_client.id', 'ajax_client.name', 'client.hobbies', 'ajax_client.email', 'ajax_client.city', 'ajax_client.gender')->get();
                // $query=DB::table('ajax_client')->join('client', 'ajax_client.name', '=', 'client.name')->select('ajax_client.id','ajax_client.name','client.hobbies','ajax_client.email','ajax_client.city','ajax_client.gender')->get();
            }
            if ($type == 'groupBy') {
                $query = Clients::selectRaw('count(name) as number_of_names, name')->groupBy('name')->get();
            }
        }

        if (!empty($id)) {
            $query = Clients::find($id);
        }
        return $query;
    }
    function insert($clientData)
    {
        $user_id = $clientData['id'];
        //echo $user_id;
        $myColumns = ['name' => $clientData['name'], 'email' => $clientData['email'], 'password' => $clientData['pass'], 'city' => $clientData['city'], 'gender' => $clientData['gender']];
        $query = $user_id ?  Clients::where('id', $user_id)->update($myColumns) :  Clients::create($myColumns);

        return [
            'message' => $query ? ($user_id ? 'User Updated Successfully' : 'User Inserted Successfully') : 'Something Went Wrong!'
        ];
    }
    function delete($id)
    {
        $query = Clients::where('id', $id)->delete();
        return $query;
    }
}
