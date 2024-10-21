<?php require_once "./includes/header.php" ?>
    <div class="container my-4 py-3 border d-flex fs-3 justify-content-center align-items-center flex-column shadow-sm">
    <span>UPDATE : Clients::where('id', $user_id)->update(['name' => $clientData['name'], 'email' => $clientData['email'], 'password' => $clientData['pass'], 'city' => $clientData['city'], 'gender' => $clientData['gender']]) :</span>
    </div> 
    <!-- Modal -->
    <div class="modal fade" id="updateForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="myForm">
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
                            <input type="radio" class="form-check-input" name="gender" value="male" id="male">
                            <label class="form-check-label">Male</label>
                            <input type="radio" class="form-check-input" name="gender" value="female" id="female">
                            <label class="form-check-label">Female</label>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id=save>Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class='container'>
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


</html>