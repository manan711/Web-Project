//docker run --name myServer -p 2000:22 -p 4000:80 -d -v E:\Sem2\Web\WebProject\farmeasy\backend:/www tomsik68/xampp:8

<?php
// Database Settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farmeasy";

// CONNECT TO DATABASE
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



// try {
//     $pdo = new PDO(
//         "mysql:host=".DB_HOST.";dbname=".DB_NAME.";".DB_USER,DB_PASSWORD,[
//             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 
//         ]
//         );
// } catch (Exception $ex) {
//     exit($ex->getMessage());
// }