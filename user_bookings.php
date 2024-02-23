<?php
require('essentials.php');
require('bookformdb.php');
adminLogin();

if (isset($_GET['seen'])) {
    $frm_data = filteration($_GET);

    if ($frm_data['seen'] == 'all') {
        $q = "UPDATE `user_bookform3` SET `seen`=?";
        $values = [1];
        if (update($q, $values, 'i')) {
            alert('success', 'Appointment Confirmed!!');
        } else {
            alert('error', 'Operation Failed');
        }
    } else {
        $q = "UPDATE `user_bookform3` SET `seen`=? WHERE `id`=?";
        $values = [1, $frm_data['seen']];
        if (update($q, $values, 'ii')) {
            alert('success', 'Appointment Confirmed!!');
        } else {
            alert('error', 'Operation Failed');
        }
    }
}


if (isset($_GET['del'])) {
    $frm_data = filteration($_GET);


    $q = "DELETE FROM `user_bookform3` WHERE `id`=?";
    $values = [$frm_data['del']];
    if (delete($q, $values, 'i')) {
        alert('success', 'Data deleted!');
    } else {
        alert('error', 'Operation Failed');
    }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - User Appointments</title>

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
                <h3 class="mb-4">User Appointments</h3>

                <div class="card border-0 shadow mb-4">
                    <div class="card-body">

                        <div class="text-end mb-5">
                            <a href="?seen=all" class="btn btn-dark rounded-pill shadow-none btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z" />
                                </svg> Mark all confirmed</a>
                                <br><br>


                            <div id="design-table" class="table-responsive-md">
                                <table class="table table-hover border text-center">
                                    <thead class="sticky-top">
                                        <tr class="bg-dark text-light">
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Services</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                        $q = "SELECT * FROM `user_bookform3` ORDER BY `id` DESC";
                                        $data = mysqli_query($conn, $q);
                                        $i = 1;

                                        while ($row = mysqli_fetch_assoc($data)) {
                                            $seen = '';
                                            if ($row['seen'] != 1) {
                                                $seen = "<a href='?seen=$row[id]' class='btn btn-sm rounded-pill btn-success'>Confirm</a>";
                                            }
                                            $seen .= "<a href='javascript:void(0);' onclick='confirmDelete($row[id])' class='btn btn-sm rounded-pill btn-danger ms-2'>Delete</a>";

                                            echo <<<query
                                            <tr>
                                            <td>$i</td>
                                            <td>$row[name]</td>
                                            <td>$row[email]</td>
                                            <td>$row[contact]</td>
                                            <td>$row[services]</td>
                                            <td>$row[date]</td>
                                            <td>$row[time]</td>
                                            <td>$seen</td>
                                            </tr>
                                            query;
                                            $i++;
                                        }
                                        ?>

                                        <script>
                                            function confirmDelete(appointmentId) {
                                                var confirmMsg = "Are you sure you want to delete this appointment?";
                                                if (confirm(confirmMsg)) {
                                                    window.location.href = '?del=' + appointmentId;
                                                }
                                            }
                                        </script>



                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>




                </div>
            </div>
        </div>


        <?php require('adminscript.php'); ?>







</body>

</html>