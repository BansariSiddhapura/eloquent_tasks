<?php require_once "./includes/header.php" ?>
    <div class="container my-4 py-3 border d-flex fs-3 justify-content-center align-items-center flex-column shadow-sm">
	<span id="query_string<?= $_GET['type'] ?>"></span>
    </div> 
   
    <div class='container'>
    <table class="table table-striped" id="mytable">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>City</th>
				<th>Gender</th>				
			</thead>
			<tbody id="tbody"></tbody>
		</table>
    </div>
</body>
</html>