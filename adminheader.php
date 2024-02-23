<style>
    .dropdown-menu {
    background-color: rgb(81, 48, 6); /* Background color */
}

.dropdown-item {
    color: #ffffff; /* Text color */
}

.dropdown-item:hover, .dropdown-item:focus {
    background-color: rgb(107, 67, 16); /* Hover color */
    color: #ffffff; /* Hover text color */
}
</style>


<div class="container-fluid  text-light p-3 d-flex align-items-center justify-content-between sticky-top">
    <h3>Salo`n</h3>
    <a href="adminlogout.php" class="btn btn-light btn-sm">Log Out</a>
</div>

<div class="col-lg-2 border-top border-3 border-secondary" id="dashboard-menu">
    <nav class="navbar navbar-expand-lg navbar-dark text-light">
        <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2">Admin Panel</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#admindropdown">
                <span class="navbar-toggler-icon"></span>
            </button>
            <didv class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="admindropdown">
                <ul class="nav nav-pills flex-column">

                    <li class="nav-item">
                        <a class="nav-link text-light" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-light dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <a class="dropdown-item" href="services3.php">Hair Care Services</a>
                            <a class="dropdown-item" href="#">Service 2</a>
                            <a class="dropdown-item" href="#">Service 3</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="admin_facility.php">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="user_queries.php">User Queries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="user_bookings.php">User Appointments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="addstaff.php.php">Add Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="settings.php">Settings</a>
                    </li>

                </ul>
            </didv>
        </div>
    </nav>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>