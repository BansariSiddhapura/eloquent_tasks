<?php  
	require_once __DIR__."/includes/connection.php";
	//use Illuminate\Support\Facades\DB;
	//$customer = Customers::all();
	
	$customer = Customers::findMany([2,5,7]);


	$customer = Customers :: where('id','2')->delete();    //soft delete column
	$customer = Customers::withTrashed()->get(); 		   //get with soft deleted rows
	$customer = Customers::first();						//get first record
	$customer = Customers::find(10);					
	$customer = Customers::where('name','Jack Hill')->value('email');  //return email where name='jack hill'
	$customer = Customers::pluck('email');           // Retrieves a single column's values as an array.
	$customer= Customers::orderBy('name','asc')->get();  //display all records ordeby name=ascending order
	$customer= Customers::limit(4)->get();         // display 4 records because of limit is 4
	//d($customer);

	echo "<pre>";
	//print_r($customer->toArray());
	echo "</pre>";

	
	$order= Orders::where('status','Completed');   //get all records whose status is completed
	$sql=$order->toSql();
	$order=$order->get();
	
	d($sql);

	// $order= Orders::where('status','Pending')->orWhere('amount','<',100)->get(); // works as OR in sql
	// $order= Orders::where('amount','>',1)->where('amount','<',100)->get();   //works as AND in sql
	// $order= Orders::where('status','Completed')->count();   //11 counts records whose status is completed
	// $order= Orders::sum('amount'); 	// sum of all amounts
	// $order= Orders::avg('amount');  //return avgrage
	$order= Orders::create(['customer_id'=>'10','order_date'=>'2024-07-22','amount'=>'500.00','status'=>'Pending']);


	echo "<pre>";
	print_r($order->toArray());
	echo "</pre>";
	
?>