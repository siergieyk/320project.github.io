 
 <?php

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

$title = $_GET["title"];
$director = $_GET["director"];
$actor1 = $_GET["actor1"];
$actor2 = $_GET["actor2"];
$actor3 = $_GET["actor3"];
$genre = $_GET["genre"];
$language = $_GET["language"];
$content = $_GET["content"];
$year = $_GET["year"];
$budget = $_GET["budget"];
$rating = $_GET["rating"];

/*
$title1 = $_GET["1title"];
$director1 = $_GET["1director"];
$actor1_1 = $_GET["1actor1"];
$actor2_1 = $_GET["1actor2"];
$actor3_1 = $_GET["1actor3"];
$genre1 = $_GET["1genre"];
$language1 = $_GET["1language"];
$content1 = $_GET["1content"];
$year1 = $_GET["1year"];
$budget1 = $_GET["1budget"];
$rating1 = $_GET["1rating"];

$title2 = $_GET["2title"];
$director2 = $_GET["2director"];
$actor1_2 = $_GET["2actor1"];
$actor2_2 = $_GET["2actor2"];
$actor3_2 = $_GET["2actor3"];
$genre2 = $_GET["2genre"];
$language2 = $_GET["2language"];
$content2 = $_GET["2content2"];
$year2 = $_GET["2year"];
$budget2 = $_GET["2budget"];
$rating2 = $_GET["2rating"];

$title3 = $_GET["3title"];
$director3 = $_GET["3director"];
$actor1_3 = $_GET["3actor1"];
$actor2_3 = $_GET["3actor2"];
$actor3_3 = $_GET["3actor3"];
$genre3 = $_GET["3genre"];
$language3 = $_GET["3language"];
$content3 = $_GET["3content2"];
$year3 = $_GET["3year"];
$budget3 = $_GET["3budget"];
$rating3 = $_GET["3rating"];
*/

$sql = "INSERT INTO movies (title, director_name, actor_1_name, 
		actor_2_name, actor_3_name, genres, movie_lang, content_rating,
		production_year, budget, imdb_score)
VALUES ('$title', '$director', '$actor1', '$actor2', '$actor3', '$genre',
		'$language', '$content', '$year', '$budget', '$rating');";

/*
$sql . = "INSERT INTO movies (title, director-name, actor_1_name, 
		actor_2_name, actor_3_name, genres, movie_lang, content_rating,
		production_year, budget, imdb_score)
VALUES ('$title1', '$director1', '$actor1_1', '$actor2_1', '$actor3_1', '$genre1',
		'$language1', '$content1', '$year1', '$budget1', '$rating1');";
		
$sql .= "INSERT INTO movies (title, director-name, actor_1_name, 
		actor_2_name, actor_3_name, genres, movie_lang, content_rating,
		production_year, budget, imdb_score)
VALUES ('$title2', '$director2', '$actor1_2', '$actor2_2', '$actor3_2', '$genre2',
		'$language2', '$content2', '$year2', '$budget2', '$rating2');";
		
$sql . = "INSERT INTO movies (title, director-name, actor_1_name, 
		actor_2_name, actor_3_name, genres, movie_lang, content_rating,
		production_year, budget, imdb_score)
VALUES ('$title3', '$director3', '$actor1_3', '$actor2_3', '$actor3_3', '$genre3',
		'$language3', '$content3', '$year3', '$budget3', '$rating3')";
		
*/
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 