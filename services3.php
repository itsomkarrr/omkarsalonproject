<?php
require('essentials2.php');
adminLogin();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">


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
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Staff setting modal -->

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
                            <div class="form-label fw-bold">Image</div>
                            <input type="file" name="service_image" accept=".jpg, .png, .webp, .jpeg"
                                id="service_image_inp" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                            <div class="form-label fw-bold">Title</div>
                            <input type="text" name="service_title" id="service_title_inp"
                                class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                            <div class="form-label fw-bold">Name</div>
                            <input type="text" name="service_name" id="service_name_inp"
                                class="form-control shadow-none" required>
                        </div>

                        <div class="mb-3">
                            <div class="form-label fw-bold">Price</div>
                            <input type="text" name="service_price" id="service_price_inp"
                                class="form-control shadow-none" required>
                        </div>

                        <div class="mb-3">
                            <div class="form-label fw-bold">Description</label>
                                <textarea name="service_desc" id="service_desc_inp" class="form-control shadow-none"
                                    rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-label fw-bold">Category</div>
                            <input type="text" name="service_category" id="service_category_inp"
                                class="form-control shadow-none" placeholder="e.g., Men and Women" required>
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





    <?php require('adminscript.php'); ?>
    <script>

        let service_s_form = document.getElementById('service_s_form');
        let service_image_inp = document.getElementById('service_image_inp');
        let service_title_inp = document.getElementById('service_title_inp');
        let service_name_inp = document.getElementById('service_name_inp');
        let service_price_inp = document.getElementById('service_price_inp');
        let service_desc_inp = document.getElementById('service_desc_inp');
        let service_category_inp = document.getElementById('service_category_inp');

        service_s_form.addEventListener('submit', function (e) {
            e.preventDefault();
            add_service();
        });


        function add_service() {
            let data = new FormData();
            data.append('image', service_image_inp.files[0]);
            data.append('title', service_title_inp.value);
            data.append('name', service_name_inp.value);
            data.append('price', service_price_inp.value);
            data.append('description', service_desc_inp.value);
            data.append('category', service_category_inp.value);
            data.append('add_service', '');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/admin_services3.php", true);

            xhr.onload = function () {
                var myModal = document.getElementById('service-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 'inv_img') {
                    alert('error', 'Only JPG and PNG images are allowed!');
                } else if (this.responseText == 'inv_size') {
                    alert('error', 'Image should be less than 5mb!');
                } else if (this.responseText == 'inv_failed') {
                    alert('error', 'Image upload failed. Server down!');
                } else {
                    alert('success', 'New Member Added!');
                    service_image_inp.value = '';
                    service_title_inp.value = '';
                    service_name_inp.value = '';
                    service_price_inp.value = '';
                    service_desc_inp.value = '';
                    service_category_inp.value = '';
                    get_service(); // Assuming this function fetches and displays the staff members

                    // Display the uploaded image
                    displayImage(this.responseText); // Assuming the responseText is the image file path
                }
            }

            xhr.send(data);
        }

        // Function to dynamically display the uploaded image
        function displayImage(imagePath) {
            // Create an <img> element
            var img = document.createElement('img');

            // Set the src attribute to the image path
            img.src = imagePath;

            // Set other attributes as needed
            img.alt = 'Service Image';
            img.style.maxWidth = '100%'; // Ensure the image does not exceed its container width

            // Assuming there is a container with id 'imageContainer', append the image to it
            var imageContainer = document.getElementById('imageContainer');
            imageContainer.innerHTML = ''; // Clear previous content
            imageContainer.appendChild(img);
        }


        function get_service() {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/admin_services3.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                document.getElementById('services-data').innerHTML = this.responseText;


            }

            xhr.send('get_service');
        }


        function rem_service(val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/admin_services3.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                if (this.responseText == 1) {
                    alert('Success: Facility removed!');


                } else {
                    alert('Success: Facility removed!!');
                    get_service();
                }
            };

            xhr.send('rem_service=' + val);
        }

        window.onload = function () {
            get_service();
        };

    </script>

    <?php require('adminscript2.php'); ?>





</body>

</html>