<?php

use App\Models\Clients;

require_once "./includes/connection.php";
require_once "./includes/header.php"
?>

<div class="container my-4 py-3 border d-flex fs-3 justify-content-center align-items-center flex-column shadow-sm">
    <span id="query_string<?= $_GET['type'] ?>"></span>
</div>
<div class='container fs-2 d-flex justify-content-center align-items-center'>
    <div class="card">
        <div class="card-body">
            <?php echo "TOTAL COUNT ROWS: " . Clients::count(); ?>
        </div>
    </div>
</div>
<div class='container my-5'>
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