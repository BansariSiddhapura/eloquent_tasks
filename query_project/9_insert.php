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
       
        <span>Clients::create(['name' => $clientData['name'], 'email' => $clientData['email'], 'password' => $clientData['pass'], 'city' => $clientData['city'], 'gender' => $clientData['gender']])</span>
    </div>
    <div class='container'>
        <form action="" method="post" id="myForm">
            <div class="mb-3 d-flex justify-content-center bg-light text-dark rounded-3 pt-2">
                <p class="fs-2" id="title">Client Form</p>
            </div>
            <input type="hidden" id="id" name="id" value="">
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
</html>