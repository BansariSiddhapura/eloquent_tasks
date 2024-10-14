<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid d-flex justify-content-center">
            <a href="" class="navbar-brand">CRUD WITH Eloquent</a>
        </div>
    </nav>

    <div class="container w-50 border mt-3 rounded-3 p-3 shadow-sm">
        <form action="" method="post" id="myForm">
            <div class="mb-3 d-flex justify-content-center bg-dark text-light rounded-3 pt-2">
                <p class="fs-2" id="title">Client Form</p>
            </div>
            <input type="hidden" id="id" name="id">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <span id="text"></span>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="pass" id="pass">
            </div>
            <div class="mb-3">
                <label class="form-label">city</label>
                <input type="text" class="form-control" name="city" id="city">
                <label id="citylabel"></label>
            </div>
            <div class="mb-3">
                <label class="form-label me-3">Gender</label>
                <input type="radio" class="form-check-input" name="gender" value="male">
                <label class="form-check-label">Male</label>
                <input type="radio" class="form-check-input" name="gender" value="female">
                <label class="form-check-label">Female</label>
            </div>
            <div class="mb-3 d-flex justify-content-between">
                <input type="submit" class="btn btn-primary" id="save">
                <a href="index.php" class="btn btn-dark"><i class="fa-solid fa-arrow-left-long"></i></a>
            </div>
        </form>

    </div>

</body>

<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/jquery-3.7.1.min.js"></script>
<script src="./assets/js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>

</html>