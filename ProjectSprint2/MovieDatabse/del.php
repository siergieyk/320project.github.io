 
 <?php
require('movie_head.html');   // html of head 
$servername = "localhost";
$username = "root";
$password = "Seapac@1";
$dbname = "movie_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$presql = 
"DELETE FROM movies
WHERE movie_id = ";
$sql = $presql.$_GET["m_id"];


$result = $conn->query($sql);
if ($result == 1){echo "movie deletion was completed";
}

require('movie_after.html')
?>