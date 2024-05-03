<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Here, you can process the form data, such as inserting it into a database
    // For now, let's just display the submitted data
    echo "<h2>Registration Details</h2>";
    echo "<p>First Name: $firstName</p>";
    echo "<p>Middle Name: $middleName</p>";
    echo "<p>Last Name: $lastName</p>";
    echo "<p>Email: $email</p>";
}
?>

