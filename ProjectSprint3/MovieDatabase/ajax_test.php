
 <?php
require('movie_head.html');   // html of head
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "movie_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$production_year = $_GET["production_year"];
$title = $_GET["title"];
$director = $_GET["director"];
$actor = $_GET["actor"];
$genre = $_GET["genre"];
$language = $_GET["language"];
$imdb_score = $_GET["imdb_score"];

$presql =
"SELECT *
FROM movies
WHERE production_year LIKE '%$production_year%'
AND title LIKE '%$title%'
AND director_name LIKE '%$director%'
AND actor_1_name LIKE '%$actor%'
AND genres LIKE '%$genre%'
AND movie_lang LIKE '%$language%'
AND imdb_score LIKE '%$imdb_score%' ";
$sql = $presql;
//echo $sql;


$result = $conn->query($sql);

echo"<table border ='1'";
echo"<tr><th>select</th>
        <th>title</th>
        <th>director_name</th>
        <th>production_year</th>
        <th>actor_1_name</th>
        <th>genres</th>
        <th>movie_lang</th>
        <th>imdb_score</th></tr>";
if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {

        echo "<tr>";
        ?>
        <td><input type="radio" name="slect"></td>
        <?php
        echo "
        <td>".$row["title"]."</td>
        <td>".$row["director_name"]."</td>
        <td>".$row["production_year"]."</td>
        <td>".$row["actor_1_name"]."</td>
        <td>".$row["genres"]."</td>
        <td>".$row["movie_lang"]."</td>
        <td>".$row["imdb_score"]."</td>";
    }
    echo"</table>";
} else {
    echo "0 results";
}

$conn->close();
require('movie_after.html'); // html bottom
?>
