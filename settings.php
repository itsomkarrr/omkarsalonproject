<?php
require('essentials.php');
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
                <h3 class="mb-4">Settings</h3>

                <!-- general setting section -->

                <div class="card border-0 shadow mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3 ">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#general-s">
                                <i class="bi bi-pencil-square"></i>Edit</button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>

                <!-- general setting modal -->

                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">General Setting</h1>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <div class="form-label fw-bold">Site Title</div>
                                        <input type="text" name="site_title" id="site_title_inp"
                                            class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-label fw-bold">About Us</div>
                                        <textarea name="site_about" id="site_about_inp" class="form-control shadow-none"
                                            rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button"
                                        onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about"
                                        class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary shadow-none">Save</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            

                <!-- Contact settings -->

                <div class="card border-0 shadow mt-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3 ">
                            <h5 class="card-title m-0">Contact Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#contacts-s">
                                <i class="bi bi-pencil-square"></i>Edit</button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>



                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Google Map Link</h6>
                                    <p class="card-text" id="gmap"></p>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <h6 class="card-subtitle mb-1 fw-bold">Phone Number</h6>
                                        <p class="card-text mb-1">📞<span id="pn1"></span>
                                        </p>
                                        <p class="card-text">📞<span id="pn2"></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                                    <p class="card-text" id="email"></p>
                                </div>
                            </div>



                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="socialicons">
                                        <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                                        <p class="card-text mb-1"><img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAbCAYAAACN1PRVAAAACXBIWXMAAAsTAAALEwEAmpwYAAACEUlEQVR4nO2WvUscQRjG1xlysbQwEcHCSrAwpk7nHyAkaQJWfjT+C1aKX10SkkJw5oQUJpDDxm9QEUFsBBFxsRAvQpjZWzlUlPPc7OX2De+iG9zb2Y/cNUIeeDlul7nfve88+8xq2n+hAOo0bjZp3Gh3P/F7TfXp+ClhcoBwsUK5tCiX4BWTt4TJZbyvZfRUVRzKjbeUi9MHAGWJHzQtXyenANRRLiYoE048kLzrVDiUyfFE46VMTCaC8Ioaiz+6iI465s7gs16AdWHBjvkLVn7eQus382GHkSPN6CnKRDYM9Go+D8WSA369mDur2EM0l5KFrooa0ZZheQC77MDBuQ17eRvavvthEggXfSEwsRoGqp8xXMC93qydh/4xwuRSMGkYCD43YYubZ3MeqFQGeJKONEox2JncbIoaYctX04Nd2U4sZ2ozxrMAmNGuWtCzeQFDu1cwsX/twazfjnvtvhq+GMEwjLYKTeWeq2Cb8q8pgmSXHXc/A2HTsjHRnkXBji5Lqgi7UaYJhmrQoq6lPLzbuIDB7UsPgM8aXsPC+wo3Lqitnxb9tTQIYaI3PEG4PKkJjIls5LGDmabKxtgwhutFdyjIAzI5XmVnI1qi8wyBvg4jYcw9z0b/6XXhbqTZmLCT2KNTKqOnML0xVFtmc5YPViRcLrrpXu07iF8AQN4fFjo/HN50f9QLL2v649pj1h+0/TjUIkzKhgAAAABJRU5ErkJggg=="><span
                                                id="fb"></span>
                                        </p>
                                        <p class="card-text mb-1">
                                            <img
                                                src="data:image/png;base64,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">
                                            <span id="insta"></span>
                                        </p>
                                        <p class="card-text">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAbCAYAAACN1PRVAAAACXBIWXMAAAsTAAALEwEAmpwYAAABjUlEQVR4nO2UO0sDQRRGx7kbFTsFG7GySKWlYOEPEG1sBK1ECyFWVjZaWCjaaSsW2mjuDKZRfIGQxk4E7e0FQUn23jUgMSO7CT7CZh9Jyj0wze7snm8+ZkaIhIRYaNMZad6+SUnkVanoEZBfpeI7iTTrvcsbCzRPCWM6Av8Bijak5rWQQCAVXYBiUz9cKSh+l9rOhAaWim68D5F23PT+c3jeTwQ/QnoARQcppOEw2fmflE8WOmM+slyQDJAcQGc6fGVoL/skvXefpzSNiEvTJZGugmW8JyKhC3213hulLoOiUmCNyOuRXG5F1R1GlcD0wbKFaDJtZ5qVQG2IbDEdrca8saTifAuyZxGLQ9Pt9g7Ib/ErpJV4spwzCEgfsVeF9CLOTE88WXWjLIKirxiiCiBPimax0BkFpCM3cQTZlmgJbfcD0jYo+mzLufrHiTPg3SBIm1LRddjhdXeed7s3TbaYBsW7DatDKkvFt1I7S+6ubV5Uz2lpCDRPSEVzgDRjaXtcHBd62ydISBC/fAOsoE2qJusxKAAAAABJRU5ErkJggg==">
                                            <span id="tw"></span>
                                        </p>
                                    </div>
                                </div>



                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                                    <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- contact details modal -->


                <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="contacts_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">Contacts Setting</h1>

                                </div>
                                <div class="modal-body">
                                    <div class="container-flood">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Address</label>
                                                    <input type="text" name="address" id="address_inp"
                                                        class="form-control shadow-none" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Google Map Links</label>
                                                    <input type="text" name="gmap" id="gmap_inp"
                                                        class="form-control shadow-none" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Phone Numbers (with country
                                                        code)</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">📞</span>
                                                        <input type="text" name="pn1" id="pn1_inp"
                                                            class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">📞</span>
                                                        <input type="text" name="pn2" id="pn2_inp"
                                                            class="form-control shadow-none" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Email</label>
                                                    <input type="text" name="eamil" id="email_inp"
                                                        class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">

                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Social Links</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAbCAYAAACN1PRVAAAACXBIWXMAAAsTAAALEwEAmpwYAAACEUlEQVR4nO2WvUscQRjG1xlysbQwEcHCSrAwpk7nHyAkaQJWfjT+C1aKX10SkkJw5oQUJpDDxm9QEUFsBBFxsRAvQpjZWzlUlPPc7OX2De+iG9zb2Y/cNUIeeDlul7nfve88+8xq2n+hAOo0bjZp3Gh3P/F7TfXp+ClhcoBwsUK5tCiX4BWTt4TJZbyvZfRUVRzKjbeUi9MHAGWJHzQtXyenANRRLiYoE048kLzrVDiUyfFE46VMTCaC8Ioaiz+6iI465s7gs16AdWHBjvkLVn7eQus382GHkSPN6CnKRDYM9Go+D8WSA369mDur2EM0l5KFrooa0ZZheQC77MDBuQ17eRvavvthEggXfSEwsRoGqp8xXMC93qydh/4xwuRSMGkYCD43YYubZ3MeqFQGeJKONEox2JncbIoaYctX04Nd2U4sZ2ozxrMAmNGuWtCzeQFDu1cwsX/twazfjnvtvhq+GMEwjLYKTeWeq2Cb8q8pgmSXHXc/A2HTsjHRnkXBji5Lqgi7UaYJhmrQoq6lPLzbuIDB7UsPgM8aXsPC+wo3Lqitnxb9tTQIYaI3PEG4PKkJjIls5LGDmabKxtgwhutFdyjIAzI5XmVnI1qi8wyBvg4jYcw9z0b/6XXhbqTZmLCT2KNTKqOnML0xVFtmc5YPViRcLrrpXu07iF8AQN4fFjo/HN50f9QLL2v649pj1h+0/TjUIkzKhgAAAABJRU5ErkJggg=="></span>
                                                        <input type="text" name="fb" id="fb_inp"
                                                            class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><img
                                                                src="data:image/png;base64,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"></span>
                                                        <input type="text" name="insta" id="insta_inp"
                                                            class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><img
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAbCAYAAACN1PRVAAAACXBIWXMAAAsTAAALEwEAmpwYAAABjUlEQVR4nO2UO0sDQRRGx7kbFTsFG7GySKWlYOEPEG1sBK1ECyFWVjZaWCjaaSsW2mjuDKZRfIGQxk4E7e0FQUn23jUgMSO7CT7CZh9Jyj0wze7snm8+ZkaIhIRYaNMZad6+SUnkVanoEZBfpeI7iTTrvcsbCzRPCWM6Av8Bijak5rWQQCAVXYBiUz9cKSh+l9rOhAaWim68D5F23PT+c3jeTwQ/QnoARQcppOEw2fmflE8WOmM+slyQDJAcQGc6fGVoL/skvXefpzSNiEvTJZGugmW8JyKhC3213hulLoOiUmCNyOuRXG5F1R1GlcD0wbKFaDJtZ5qVQG2IbDEdrca8saTifAuyZxGLQ9Pt9g7Ib/ErpJV4spwzCEgfsVeF9CLOTE88WXWjLIKirxiiCiBPimax0BkFpCM3cQTZlmgJbfcD0jYo+mzLufrHiTPg3SBIm1LRddjhdXeed7s3TbaYBsW7DatDKkvFt1I7S+6ubV5Uz2lpCDRPSEVzgDRjaXtcHBd62ydISBC/fAOsoE2qJusxKAAAAABJRU5ErkJggg=="></span>
                                                        <input type="text" name="tw" id="tw_inp"
                                                            class="form-control shadow-none" required>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Iframe Src</label>
                                                    <input type="text" name="iframe" id="iframe_inp"
                                                        class="form-control shadow-none" required>
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="contacts_inp(contacts_data)"
                                        class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary shadow-none">Save</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>



           



              

        



            </div>
        </div>
    </div>


    <?php require('adminscript.php'); ?>
    <script>
        let general_data, contacts_data;

        let general_s_form = document.getElementById('general_s_form');
        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');

        let contacts_s_form = document.getElementById('contacts_s_form');

        function get_general() {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');

        

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {

                general_data = JSON.parse(this.responseText);


                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;

                site_title_inp.value = general_data.site_title;
                site_about_inp.value = general_data.site_about;

                if (general_data.shutdown == 0) {
                    shutdown_toggle.checked = false;
                    shutdown_toggle.value = 0;
                }
                else {
                    shutdown_toggle.checked = true;
                    shutdown_toggle.value = 1;
                }
            }

            xhr.send('get_general');
        }

        general_s_form.addEventListener('submit', function (e) {
            e.preventDefault();
            upd_general(site_title_inp.value, site_about_inp.value);
        })

        function upd_general(site_title_val, site_about_val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {

                var myModal = document.getElementById('general-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 1) {
                    alert('success', 'Changes Saved!');
                    get_general();
                }
                else {
                    alert('error', 'No Changes Made!');
                }
            }

            xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val + '&upd_general');
        }


      

        function get_contacts() {

            let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw'];
            let iframe = document.getElementById('iframe');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {

                contacts_data = JSON.parse(this.responseText);
                contacts_data = Object.values(contacts_data);

                for (i = 0; i < contacts_p_id.length; i++) {
                    document.getElementById(contacts_p_id[i]).innerText = contacts_data[i + 1];
                }
                iframe.src = contacts_data[9];
                contacts_inp(contacts_data);

            }

            xhr.send('get_contacts');
        }

        function contacts_inp(data) {
            let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];

            for (i = 0; i < contacts_inp_id.length; i++) {
                document.getElementById(contacts_inp_id[i]).value = data[i + 1];
            }
        }

        contacts_s_form.addEventListener('submit', function (e) {
            e.preventDefault();
            upd_contacts();
        })

        function upd_contacts() {
            let index = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw', 'iframe'];
            let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];

            let data_str = "";

            for (i = 0; i < index.length; i++) {
                data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value + '&';
            }
            data_str += "upd_contacts";

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                var myModal = document.getElementById('contacts-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 1) {
                    alert('success', 'Changes Saved!');
                    get_contacts();

                }
                else {
                    alert('error', 'No Changes Made!');
                }
            }

            xhr.send(data_str);
        }


        window.onload = function () {
            get_general();
            get_contacts();
            
        }
    </script>





</body>

</html>