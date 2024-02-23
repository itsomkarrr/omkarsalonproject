<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<script>
    function confirmRemoval(id) {
        // Display a confirmation dialog
        if (confirm("Are you sure you want to delete this feature?")) {
            rem_feature(id);

        }
    }

    function rem_feature(val) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/admin_facility.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function () {
            if (this.responseText == 1) {
                alert('success', 'Feature removed!');
                get_features();
            } else {
                alert('danger', 'Failed to remove feature!');
                get_features();
            }
        };

        xhr.send('rem_feature=' + val);
    }


    function confirmRemoval(id) {
        // Display a confirmation dialog
        if (confirm("Are you sure you want to delete this feature?")) {
            rem_facility(id);

        }
    }

    function rem_facility(val) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/admin_facility.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function () {
            if (this.responseText == 1) {
                alert('Success: Facility removed!');
                get_facilities();
            } else {
                alert('Success: Facility removed!!');
                get_facilities();
            }
        };

        xhr.send('rem_facility=' + val);
    }


    function confirmRemoval(id) {
        // Display a confirmation dialog
        if (confirm("Are you sure you want to delete this facility?")) {
            rem_facility(id);
        }
    }

    function rem_facility(val) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/admin_facility.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function () {
            if (this.responseText == 1) {
                alert('success', 'Facility removed!');
                // Optionally, you can refresh the page or update the UI
            } else {
                alert('danger', 'Failed to remove facility!');
                // Handle failure scenario, if needed
            }
        };

        xhr.send('rem_facility=' + val);
    }



    function confirmRemovalService(id) {
        // Display a confirmation dialog
        if (confirm("Are you sure you want to delete this service?")) {
            rem_service(id);
        }
    }

    function rem_service(val) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/admin_services3.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function () {
            if (this.responseText == 1) {
                alert('success', 'Facility removed!');
                // Optionally, you can refresh the page or update the UI
            } else {
                alert('success', 'Facility removed!');
                // Handle failure scenario, if needed
            }
        };

        xhr.send('rem_service=' + val);
    }

    // Your existing alert and remAlert functions go here...

    
</script>