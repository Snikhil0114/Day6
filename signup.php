<?php
// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = 'Nikhil@0114';
$db_name = 'Sahyadri';


// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// // Create a PDO connection
// $dsn = "mysql:host=$db_host;dbname=$db_name";
// $conn = new PDO($dsn, $db_username, $db_password);
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; // In a real application, hash the password

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }










// // Handle form submission
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $password = $_POST["password"];
    

//     // Validate other input fields (e.g., email format, username length)

//     // Hash the password
//     $hashed_password = password_hash($password, PASSWORD_DEFAULT);

//     // Insert data into the database
//     $query = "INSERT INTO users (name,  email, password) VALUES (:name, :email, :password)";
//     $stmt = $conn->prepare($query);
//     $stmt->bindParam(':name', $name);
//     $stmt->bindParam(':email', $email);
//     $stmt->bindParam(':password', $hashed_password);

//     try {
//         $stmt->execute();
//     } catch (PDOException $e) {
//         echo "Error inserting data: ". $e->getMessage();
//         exit;
//     }

//     // Close the connection
//     $conn = null;

//     // Redirect to a success page or display a success message
//     header("Location: success.js");
//     exit;
}
?>
<!-- php
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "user_registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; // In a real application, hash the password

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?> -->