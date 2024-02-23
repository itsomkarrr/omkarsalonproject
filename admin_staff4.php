<?php
require("admin_connection.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>

<body class="bg-light">
    <div class="container bg-dark text-ligth p-3 rounded my-4">
        <div class="d-flex align-itemm-left justify-content-between px-3">
            <h2 class="text-light">
                <a href="adminheader.php" class="text-white text-decoration-none">
                    <i class="bi bi-bar-chart-fill"></i>Adding Staff Section</a>
            </h2>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addstaff">
                <i class="bi bi-plus-lg"></i>Add Staff
            </button>
        </div>
    </div>


    <div class="container mt-5 p-0">
        <table class="table table-hover text-center ">
            <thead class="bg-dark text-light">
                <tr>
                    <th scope="col" class="rounded-start">Sr.No</th>
                    <th width="17%" scope="col">Image</th>
                    <th width="15%" scope="col">Name</th>
                    <th width="12%" scope="col">About</th>
                    <th width="9%" scope="col">Position</th>
                    <th width="20%" scope="col" class="rounded-start">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <?php
                $query = "SELECT * FROM `staff3`";
                $result = mysqli_query($con, $query);
                $i = 1;
                $fetch_src = FETCH_SRC;

                while ($fetch = mysqli_fetch_assoc($result)) {
                    echo<<<staff

                            <tr class="align-middle">
                            <th scope="row">$i</th>
                            <td><img src="$fetch_src$fetch[image]" width="150px"></td>
                            <td>$fetch[name]</td>
                            <td>₹$fetch[about]</td>
                            <td>$fetch[position]</td>
                            <td>
                            <a>Edit</a>
                            <button onclick="confirm_rem($fetch[id])" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                            </td>
                        </tr>
                        staff;
                    $i++;
                }
                
                ?>

            </tbody>
        </table>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="addstaff" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="admin_staff_crud.php" method="POST" enctype="multipart/form-data">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Staff</h5>
                    </div>
                    <div class="modal-body">

                        <div class="input-group mb-3">
                            <label class="input-group-text">Image</label>
                            <input type="file" class="form-control" name="image" accept=".jpg,.png,.svg," required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Name</span>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">About</span>
                            <textarea rows="3" class="form-control" name="about" required></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Position</span>
                            <input type="text" class="form-control" name="position" required>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline_secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" name="addstaff">Add</button>
                    </div>
                </div>

            </form>

        </div>
    </div>



    <script>
        function confirm_rem(id)
        {
            if(confirm("Are you sure, you want to delete this service ?"))
            {
                window.location.href="admin_staff_crud.php?rem="+id;
            }
        }
    </script>
</body>
</html>