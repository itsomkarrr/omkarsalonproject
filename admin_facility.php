<?php
require('essentials.php');
require('admindb_config.php');
adminLogin();

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Facilities</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">

    <style>
        #design-table {
        max-height: 600px; /* Adjust the maximum height as needed */
        overflow-y: auto;
    }
    </style>


</head>

<body>

    <?php require('adminheader.php'); ?>

  <div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 bg-light text-dark overflow-hidden">
            <h3 class="mb-4">Facilities</h3>

            <div class="card border-0 shadow mb-4">
                <div class="card-body">

                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Facilities</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#facility-s">
                            <i class="bi bi-pencil-square"></i>Add
                        </button>
                    </div>

                    <div class="table-responsive-md" id="design-table">
                        <table class="table table-hover border">
                            <thead class="sticky-top">
                            <tr class="bg-dark text-light">
                                <th scope="col" class="bg-dark text-light">#</th>
                                <th scope="col" class="bg-dark text-light">Icon</th>
                                <th scope="col" class="bg-dark text-light">Name</th>
                                <th scope="col" class="bg-dark text-light" width="40%">Description</th>
                                <th scope="col" class="bg-dark text-light">Action</th>
                            </tr>
                            </thead>
                            <tbody id="facilities-data">
                            <!-- Your table body content goes here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <!-- Feature modal -->

    <div class="modal fade" id="feature-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="feature_s_form">

                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Add Feature</h1>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <div class="form-label fw-bold">Name</div>
                            <input type="text" name="feature_name" class="form-control shadow-none" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary shadow-none">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- Facility modal -->

    <div class="modal fade" id="facility-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="facility_s_form">

                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Add Facility</h1>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <div class="form-label fw-bold">Name</div>
                            <input type="text" name="facility_name" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                            <div class="form-label fw-bold">Icon</div>
                            <input type="file" name="facility_icon" accept=".jpg,.png,.webp,.jpeg"
                                class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                            <div class="form-label fw-bold">Description</label>
                                <textarea name="facility_desc" class="form-control shadow-none" rows="3"
                                    required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary shadow-none"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary shadow-none">Save</button>
                        </div>
                    </div>

            </form>

        </div>
    </div>




    <?php require('adminscript.php'); ?>

    <?php require('adminscript2.php'); ?>

    <script src="scripts/admin_facility.js"></script>
 





</body>

</html>