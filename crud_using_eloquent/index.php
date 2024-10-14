<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./assets/css/bootstrap.css" rel="stylesheet">

	<title>Document</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid d-flex justify-content-center">
			<a href="" class="navbar-brand">CRUD WITH ELOQUENT</a>
		</div>
	</nav>
	<div class="container w-75 my-3 d-flex justify-content-end">
	<a href="form.php" class="btn btn-primary" id="add" type="button">Add +</a>
	</div>
	<div class="container w-75 border mt-3 rounded-3 p-3 shadow-sm">
		<div class="mb-3 d-flex justify-content-center bg-light text-dark rounded-3 pt-2">
			<p class="fs-4" id="title">Client Table</p>
			
		</div>
		
		<table class="table table-striped" id="mytable">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>City</th>
				<th>Gender</th>
				<th>Action</th>
			</thead>
			<tbody id="tbody"></tbody>
		</table>
	</div>
</body>

<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/jquery-3.7.1.min.js"></script>
<script src="./assets/js/custom.js"></script>

</html>
<?php
require_once __DIR__ . "/includes/connection.php";

use App\Models\Clients;

//use Illuminate\Support\Facades\DB;
//$customer = Customers::all();


?>