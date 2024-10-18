<?php
if(!empty($_GET['type'])){
    $type=$_GET['type'];
}
?>
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
    <!-- <div class="container my-4 py-3 border d-flex fs-3 justify-content-center align-items-center flex-column shadow-sm">
        <span>SELECT COUNT(city) FROM ajax_client WHERE city='rajkot'</span>
        <span>Clients::where('city','rajkot')->count()</span>
    </div> -->