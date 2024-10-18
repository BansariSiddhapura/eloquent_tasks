<?php require_once "./includes/header.php" ?>
    <div class="container my-4 py-3 border d-flex fs-3 justify-content-center align-items-center flex-column shadow-sm">
             <?php require_once "./queries.php"; ?>
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