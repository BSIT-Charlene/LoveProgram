<?php
    require 'sign-in.php';
    require 'config.php';

    if (isset($_POST["submit"])) {
        function capitalizeWords($str) {
            return ucwords(strtolower($str));
        }

        $toda_id = $_POST["toda"];
        $operator_given = $_POST["operator-given"];
        $operator_middle = $_POST["operator-middle"];
        $operator_surname = $_POST["operator-surname"];
        $operator_suffix = $_POST["operator-suffix"];
        $operator_address = $_POST["operator-address"];
        $barangay_id = $_POST["operator-barangay"];
        $operator_contact_num = $_POST["operator-contact-num"];

        $operator_given = capitalizeWords($operator_given);
        $operator_middle = capitalizeWords($operator_middle);
        $operator_surname = capitalizeWords($operator_surname);
        $operator_address = capitalizeWords($operator_address);

        $query = "INSERT INTO operators (toda_id, operator_given, operator_middle, operator_surname, operator_address, barangay_id, operator_contact_num, operator_suffix) 
        VALUES ('$toda_id', '$operator_given', '$operator_middle', '$operator_surname', '$operator_address', '$barangay_id', '$operator_contact_num', '$operator_suffix')";

        if (mysqli_query($conn, $query)) {
            $operator_id = mysqli_insert_id($conn);

            $unit_count = count($_POST['body_no']);

            for ($i = 0; $i < $unit_count; $i++) {
                $body_no = $_POST["body_no"][$i];
                $plate_no = $_POST["plate_no"][$i];
                $manufacturer = $_POST["manufacturer"][$i];
                $engine_no = $_POST["engine_no"][$i];
                $chassis_no = $_POST["chassis_no"][$i];

                $insert_vehicle_query = "INSERT INTO vehicles (operator_id, body_no, plate_no, manufacturer, engine_no, chassis_no)
                    VALUES ('$operator_id', '$body_no', '$plate_no', '$manufacturer', '$engine_no', '$chassis_no')";
                mysqli_query($conn, $insert_vehicle_query);
            }

            $_SESSION['message'] = "Operator and Vehicle Data Added";
        } else {
            $_SESSION['message'] = "Error: Unable to add Operator Data";
        }

        // if (isset($_POST["checkbox-driver"])) {
        //     echo "Checkbox is checked.";
        //     $operator_id = mysqli_insert_id($conn);

        //     $license_validity = $_POST["license-date"];

        //     $driver_query = "INSERT INTO drivers (operator_id, driver_given, driver_middle, driver_surname, driver_address, barangay_id, driver_contact_num, license_validity) 
        //     VALUES ('$operator_id', '$operator_given', '$operator_middle', '$operator_surname', '$operator_address', '$barangay_id', '$operator_contact_num', '$license_validity')";

        //     if (mysqli_query($conn, $driver_query)) {
        //         $_SESSION['message'] = "Operator and Driver Data Added";
        //     } else {
        //         $_SESSION['message'] = "Error: Unable to add Operator and Driver Data";
        //     }
        // } else {
        //     echo "Checkbox is not checked.";
        // }

        header("Location: ../operators.php");
        exit();
    }
?>
