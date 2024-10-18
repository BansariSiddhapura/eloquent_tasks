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
    <script src="./assets/js/custom.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-12 border bg-dark py-2">
                <div class="bg-white py-3 px-4 text-dark w-100 d-flex justify-content-between pt-2">
                    <div>
                    <span class="fs-3">Custome model</span>
                    </div>
                    <div class="d-flex gap-2">
                        <input type="search" class="form-control" name='search_item' id='search_item'>
                        <button class="btn btn-dark" name='search_btn' id='search_btn'>Search</button>
                    </div>

                </div>

            </div>
            <!-- <div class="col col-9">
                <div class="d-flex border p-3 shadow-none bg-light rounded">
                    <input type="search" class="form-control w-25 me-2" name="search">
                    <input type="button" class="btn btn-success" value="search" name="btnSearch">
                </div>

            </div> -->
        </div>

        <div class="row">
            <div class="col col-2 bg-dark py-4">
                <?php include_once "links.php";  ?>
            </div>
            <div class="col col-9 my-4" id="myAllData">
                <?php
                if (!empty($_GET['type'])) {
                    $type = $_GET['type'];

                    $files=[
                        'getRows'=>'./allFiles/1_view.php',
                        'rowSorted'=>'./allFiles/2_rowSorted.php',
                        'whereInLikes'=>'./allFiles/3_whereInLikes.php',
                        'join'=>'./allFiles/4_join.php',
                        'distinctRows'=>'./allFiles/5_distinctRows.php',
                        'singleRow'=>'./allFiles/6_singleRow.php',
                        'totalCount'=>'./allFiles/7_totalCount.php',
                        'count'=>'./allFiles/8_count.php',
                        'insertRow'=>'./allFiles/9_insert.php',
                        'updateRow'=>'./allFiles/10_update.php',
                        'deleteRow'=>'./allFiles/11_delete.php',
                        'groupBy'=>'./allFiles/12_groupBy.php'
                    ];
                    if(array_key_exists($type,$files)){
                        require_once $files[$type];
                    }else{
                        echo "welcome..";
                    }
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>