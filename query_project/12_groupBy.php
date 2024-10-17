<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <script src="./assets/js/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
</head>

<body>
    <div class="container my-4 py-3 border d-flex fs-4 gap-3 justify-content-center align-items-center flex-column shadow-sm">
           <span>SELECT name,count(name) as number_of_names from ajax_client GROUP BY name;</span>
           <span>Clients::selectRaw('count(name) as number_of_names, name')->groupBy('name')->get()</span>
    </div>
    <div class='container'>
    <table class="table table-striped" id="mytable">
			<thead>
			
				<th>Name</th>
				<th>Total Count of Name</th>
			</thead>
			<tbody id="tbody"></tbody>
		</table>
    </div>
</body>
</html>