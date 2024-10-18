<?php
if (isset($_GET['type'])) {
    $type = $_GET['type'];

    switch ($type) {
        case 'getRows':
            echo '<span>Select * from ajax_client</span>
                  <span>Clients::all()</span>';
            break;
        case 'rowSorted':
            echo "<span>SELECT * FROM ajax_client ORDER BY name DESC</span>
                  <span>Clients::orderBy('name','desc')->get();</span>";
            break;
        case 'whereInLikes':
            echo "<span>SELECT * FROM ajax_client WHERE name LIKE '%vi%'</span>
                  <span>Clients::whereLike('name','%vi%')->get()</span>";
            break;
        case 'join':
            echo "<span>SELECT ac.name,ac.email,ac.city,c.hobbies FROM ajax_client AS ac JOIN client as c WHERE ac.name=c.    name</span>
                 <span>Clients::join('client', 'ajax_client.name', '=', 'client.name')<br/>->select('ajax_client.id','ajax_client.name','client.hobbies',<br/>'ajax_client.email','ajax_client.city','ajax_client.gender')->get()</span>";
            break;
        case 'distinctRows':
            echo " <span>Select DISTINCT name FROM ajax_client</span>
                   <span>Clients::distinct()->get(['name'])</span>";
            break;
        case 'singleRow':
            echo "<span>Select * from ajax_client LIMIT 1</span>
                  <span>Clients::inRandomOrder()->first()</span>";
            break;
        case 'totalCount':
            echo " <span>SELECT COUNT(*) FROM ajax_client</span>
                   <span>Clients::count();</span>";
            break;
        case 'count':
            echo "<span>SELECT COUNT(city) FROM ajax_client WHERE city='rajkot'</span>
                  <span>Clients::where('city','rajkot')->count()</span>";
            break;
        case 'insertRow': ?>
            <span>Clients::create(['name' => $clientData['name'], 'email' => $clientData['email'], 'password' => $clientData['pass'], 'city' => $clientData['city'], 'gender' => $clientData['gender']])</span>
        <?php break;

        case 'updateRow': ?>
            <span>UPDATE : Clients::where('id', $user_id)->update(['name' => $clientData['name'], 'email' => $clientData['email'], 'password' => $clientData['pass'], 'city' => $clientData['city'], 'gender' => $clientData['gender']]) :</span>
        <?php break;
        case 'deleteRow': ?>
             <span>Clients::where('id', $id)->delete()</span>
        <?php break;
        case 'groupBy':
            echo " <span>SELECT name,count(name) as number_of_names from ajax_client GROUP BY name;</span>
           <span>Clients::selectRaw('count(name) as number_of_names, name')->groupBy('name')->get()</span>";
        break;
        default :
            echo "<span>Welcome</span>";
        break;


    }
}
