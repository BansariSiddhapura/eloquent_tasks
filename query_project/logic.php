<?php

use App\Models\Clients;
use App\Models\Clients2;
use Illuminate\Support\Facades\DB;

require_once __DIR__ . "/includes/connection.php";

class MyData
{

    function showData($id = "", $search = "")
    {
        isset($_POST['type']) ? $type = $_POST['type'] : '';

        $search_data = !empty($search) ? $search : '';
        $query = "";
        $query_string = "";
        //echo $type;
        if (!empty($type)) {
            if ($type == 'getRows' or $type == 'updateRow' or $type == 'deleteRow' or $type == 'totalCount' or $type == 'count') {
                $query = Clients::all();
                $count_result = $search_data ? Clients::where('city', $search_data)->count() : Clients::where('city', 'rajkot')->count();
                $count_city = $search_data ? $search_data : 'rajkot';
                $query_string = $type == 'count' ? "Clients::where('city',$count_city)->count()"  : "Clients::all()";
            }
            if ($type == 'rowSorted') {
                $query = $search_data ? Clients::orderBy($search_data, 'desc')->get() : Clients::orderBy('name', 'desc')->get();
                $query_string = $search_data ? "Clients::orderBy(" . $search_data . ", 'desc')->get()" : "Clients::orderBy('name', 'desc')->get()";

                //$query = (!empty($search)) ? Clients::orderBy('name', 'desc')->get() : Clients::orderBy($search, 'desc')->get()  ;
                //$query=Clients::select('name','email')->groupBy('name');
                // Clients::inRandomOrder()->first()
                //$query = Clients::orderBy('name','desc')->orderBy('email','asc')->get();
                //$query = Clients::orderByDesc('name')->get();
            }
            if ($type == 'whereInLikes') {
                $query = $search_data ? Clients::whereLike('name', '%' . $search_data . '%')->get() : Clients::all();
                $query_string = $search_data ? "Clients::whereLike('name', '%'.$search_data.'%')->get()" : "Clients::all()";
            }
            if ($type == 'distinctRows') {
                $query = $search_data ? Clients::distinct()->get([$search_data]) : Clients::distinct()->get(['name']);
                $query_string = $search_data ? "Clients::distinct()->get([$search_data])" : "Clients::distinct()->get(['name'])";
            }
            if ($type == 'singleRow') {
                $query = $search_data ? Clients::where('id', $search_data)->get() : Clients::where('id', 11)->get();
                $query_string = $search_data ? "Clients::where('id',$search_data)->get()" : "Clients::where('id',11)->get()";
            }
            if ($type == 'join') {
                $query = Clients::join('client', 'ajax_client.name', '=', 'client.name')->select('ajax_client.id', 'ajax_client.name', 'client.hobbies', 'ajax_client.email', 'ajax_client.city', 'ajax_client.gender')->get();
                $query_string = "Clients::join('client', 'ajax_client.name', '=', 'client.name')->select('ajax_client.id', 'ajax_client.name', 'client.hobbies', 'ajax_client.email', 'ajax_client.city', 'ajax_client.gender')->get()";
                // $query=DB::table('ajax_client')->join('client', 'ajax_client.name', '=', 'client.name')->select('ajax_client.id','ajax_client.name','client.hobbies','ajax_client.email','ajax_client.city','ajax_client.gender')->get();
            }
            if ($type == 'groupBy') {

                $query = $search_data ? Clients::selectRaw("count(" . $search_data . ") as number_of_names, " . $search_data . "")->groupBy($search_data)->get() : Clients::selectRaw('count(name) as number_of_names, name')->groupBy('name')->get();
                $query_string = $search_data ? "Clients::selectRaw('count(" . $search_data . ") as number_of_names, " . $search_data . "')->groupBy($search_data)->get()" : "Clients::selectRaw('count(name) as number_of_names, name')->groupBy('name')->get()";
            }
        }

        if (!empty($id)) {
            $query = Clients::find($id);
        }
        return [
            'query' => $query ? $query : '',
            'query_string' => $query_string ? $query_string : '',
            'count_result' => !empty($count_result) ? $count_result : ''
        ];
    }
    function insert($clientData)
    {
        $user_id = $clientData['id'];
        //echo $user_id;
        $myColumns = ['name' => $clientData['name'], 'email' => $clientData['email'], 'password' => $clientData['pass'], 'city' => $clientData['city'], 'gender' => $clientData['gender']];
        $query = $user_id ?  Clients::where('id', $user_id)->update($myColumns) :  Clients::create($myColumns);

        return [
            'message' => $query ? ($user_id ? 'User Updated Successfully' : 'User Inserted Successfully') : 'Something Went Wrong!',
        ];
    }
    function delete($id)
    {
        $query = Clients::where('id', $id)->delete();
        return $query;
    }
}
