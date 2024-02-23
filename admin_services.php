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
            height: 1000px;

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

                        <div class="text-end mb-4 ">

                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#add-service">
                                <i class="bi bi-pencil-square"></i>Add</button>
                        </div>


                        <div class="table-responsive-lg" style="height: 450px; overflow-y: scroll;">
                            <table class="table table-hover border text-center">
                                <thead class="sticky-top">
                                    <tr class="bg-dark text-light">
                                        <th scope="col" class="bg-dark text-light">#</th>
                                        <th scope="col" class="bg-dark text-light">Name</th>
                                        <th scope="col" class="bg-dark text-light">Price</th>
                                        <th scope="col" class="bg-dark text-light">Customer</th>
                                        <th scope="col" class="bg-dark text-light">Status</th>
                                        <th scope="col" class="bg-dark text-light">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="service-data">
                                    <!-- Your table body content goes here -->
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Add service modal -->

    <div class="modal fade" id="add-service" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="add_service_form" autocomplete="off">

                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Add Services</h1>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 nmb-3">
                                <label class="form-label fw-bold">Name</label>
                                <input type="text" name="name" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 nmb-3">
                                <label class="form-label fw-bold">Price</label>
                                <input type="number" name="price" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 nmb-3">
                                <label class="form-label fw-bold">Men (Max.)</label>
                                <input type="number" min="1" name="men" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 nmb-3">
                                <label class="form-label fw-bold">Women (Max.)</label>
                                <input type="number" min="1" name="women" class="form-control shadow-none" required>
                            </div>


                            <div class="col-12 mt-3">
                                <label class="form-label fw-bold">Facility</label>
                                <div class="row">
                                    <?php
                                    $res = selectAll('facilities');
                                    while ($opt = mysqli_fetch_assoc($res)) {
                                        echo "
                                        <div class='col-md-3 mb-1'>
                                        <label>
                                            <input type='checkbox' name='facilities' value='$opt[id]' class='form-check-input shadow-none'>
                                            $opt[name]
                                        </label>
                                        </div>

                                        ";
                                    }

                                    ?>
                                </div>

                            </div>

                            <div class="col-12 mt-3">
                                <label class="form-label fw-bold">Description</label>
                                <textarea name="desc" rows="4" class="form-control shadow-none" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary shadow-none">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- Edit service modal -->

    <div class="modal fade" id="edit-service" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="edit_service_form" autocomplete="off">

                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Edit Services</h1>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 nmb-3">
                                <label class="form-label fw-bold">Name</label>
                                <input type="text" name="name" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 nmb-3">
                                <label class="form-label fw-bold">Price</label>
                                <input type="number" name="price" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 nmb-3">
                                <label class="form-label fw-bold">Men (Max.)</label>
                                <input type="number" min="1" name="men" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 nmb-3">
                                <label class="form-label fw-bold">Women (Max.)</label>
                                <input type="number" min="1" name="women" class="form-control shadow-none" required>
                            </div>


                            <div class="col-12 mt-3">
                                <label class="form-label fw-bold">Facility</label>
                                <div class="row">
                                    <?php
                                    $res = selectAll('facilities');
                                    while ($opt = mysqli_fetch_assoc($res)) {
                                        echo "
                                        <div class='col-md-3 mb-1'>
                                        <label>
                                            <input type='checkbox' name='facilities' value='$opt[id]' class='form-check-input shadow-none'>
                                            $opt[name]
                                        </label>
                                        </div>

                                        ";
                                    }

                                    ?>
                                </div>

                            </div>

                            <div class="col-12 mt-3">
                                <label class="form-label fw-bold">Description</label>
                                <textarea name="desc" rows="4" class="form-control shadow-none" required></textarea>
                            </div>

                            <input type="hidden" name="service_id">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="reset" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary shadow-none">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>









    <?php require('adminscript.php'); ?>

    <script>

        let add_service_form = document.getElementById('add_service_form');

        add_service_form.addEventListener('submit', function (e) {
            e.preventDefault();
            add_service();
        });


        function add_service() {
            let data = new FormData();
            data.append('add_service', '');
            data.append('name', add_service_form.elements['name'].value);
            data.append('price', add_service_form.elements['price'].value);
            data.append('men', add_service_form.elements['men'].value);
            data.append('women', add_service_form.elements['women'].value);
            data.append('desc', add_service_form.elements['desc'].value);

            let facilities = [];

            add_service_form.elements['facilities'].forEach(el => {
                if (el.checked) {
                    facilities.push(el.value);
                }
            });

            data.append('facilities', JSON.stringify(facilities));



            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/admin_services.php", true);

            xhr.onload = function () {
                var myModal = document.getElementById('add-service');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 1) {
                    alert('success', 'New Service Added!');
                    add_service_form.reset();


                }
                else {
                    alert('success', 'New Service Added!');
                    get_all_service();

                }
            }

            xhr.send(data);

        }


        function get_all_service() {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/admin_services.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {

                document.getElementById('service-data').innerHTML = this.responseText;
            }

            xhr.send('get_all_service');

        }

        
        let edit_service_form=document.getElementById('edit_service_form');


        function edit_details(id) 
        {
            
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/admin_services.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            

            xhr.onload = function() 
            {
                let data = JSON.parse(this.responseText);
                edit_service_form.elements['name'].value = data.servicedata.name;
                edit_service_form.elements['price'].value = data.servicedata.price;
                edit_service_form.elements['men'].value = data.servicedata.men;
                edit_service_form.elements['women'].value = data.servicedata.women;
                edit_service_form.elements['desc'].value = data.servicedata.description;
            }

            xhr.send('get_service='+id);
        }






        function toggle_status(id, val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/admin_services.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                if (this.responseText == 1) {
                    alert('success', 'Status toggled!');
                } else {
                    alert('success', 'Status toggled!');
                    get_all_service();
                }
            };


            xhr.send('toggle_status=' + id + '&value=' + val);
        }


        window.onload = function () {
            get_all_service();
        }








    </script>







</body>

</html>