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
    <title>Admin Panel - Services</title>

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
                <h3 class="mb-4">Services</h3>


                <div class="card border-0 shadow mb-4">
                    <div class="card-body">

                        <div class="d-flex align-items-center justify-content-between mb-3 ">
                            <h5 class="card-title m-0">Hair Care Services For Men & Women</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#service-s">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-plus-lg mb-1" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg>Add</button>
                        </div>

                        <div class="table-responsive-md" id="design-table">
                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                    <tr class="bg-dark text-light">
                                        <th scope="col" class="bg-dark text-light">#</th>
                                        <th scope="col" class="bg-dark text-light">Image</th>
                                        <th scope="col" class="bg-dark text-light">Title</th>
                                        <th scope="col" class="bg-dark text-light">Name</th>
                                        <th scope="col" class="bg-dark text-light" width="10%">Price</th>
                                        <th scope="col" class="bg-dark text-light">Category</th>
                                        <th scope="col" class="bg-dark text-light" width="30%">Description</th>
                                        <th scope="col" class="bg-dark text-light" width="13%">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="services-data">
                                    <!-- Your table body content goes here -->
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Services modal -->

    <div class="modal fade" id="service-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="service_s_form">

                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Add Service</h1>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <div class="form-label fw-bold">Title</div>
                            <input type="text" name="service_title" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                            <div class="form-label fw-bold">Name</div>
                            <input type="text" name="service_name" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                            <div class="form-label fw-bold">Image</div>
                            <input type="file" name="service_image" accept=".jpg, .png, .webp, .jpeg"
                                class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                            <div class="form-label fw-bold">Price</div>
                            <input type="text" name="service_price" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                            <div class="form-label fw-bold">Category</div>
                            <input type="text" name="service_category" id="serviceCategoryInput"
                                class="form-control shadow-none" placeholder="e.g., Men and Women" required>
                        </div>
                        <div class="mb-3">
                            <div class="form-label fw-bold">Description</label>
                                <textarea name="service_desc" class="form-control shadow-none" rows="3"
                                    required></textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary shadow-none" data-bs-dismiss="modal"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-x mb-1" viewBox="0 0 16 16">
                                    <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                </svg>Cancel</button>
                            <button type="submit" class="btn btn-primary shadow-none"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-save me-2 mb-1" viewBox="0 0 16 16">
                                    <path
                                        d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1z" />
                                </svg>Save</button>
                        </div>
                    </div>

            </form>

        </div>
    </div>



    <script>
        document.getElementById('serviceCategoryInput').addEventListener('input', function () {
            let inputValue = this.value;
            let capitalizedValue = inputValue.charAt(0).toUpperCase() + inputValue.slice(1);
            this.value = capitalizedValue;
        });
    </script>


    <?php require('adminscript.php'); ?>
    <?php require('adminscript2.php'); ?>

    <script src="scripts/admin_services2.js"></script>






</body>

</html>