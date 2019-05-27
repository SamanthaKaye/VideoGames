<html>
<head>
<title>Query Video Games</title>
<body>

<img src= "2396871-battlefield4.jpeg" height = 100px width = 100px " alt="BattleField 4 Image">
<img src= "597965.jpg" height = 100px width = 100px " alt="Call of Duty: Black Ops III Image">
<img src= "Battlefield_1_cover_art.jpg" height = 100px width = 100px " alt="BattleField 1 Image">
<img src= "minecraft.jpg" height = 100px width = 100px " alt="MineCraft Image">
<a href="#" class="myButton">pink</a>
<?php

$servername = localhost;
$username = sammieka_smith;
$password = 12345678;
$dbname = sammieka_videogames;

@ $db = mysql_pconnect($servername, $username, $password);

if (!$db)
{
	echo "ERROR: Could not connect to database.  Please try again later.";
	exit;
}

mysql_select_db("sammieka_videogames");

$query = "select * from videogame";

$result = mysql_query($query);
$num_results = mysql_num_rows($result);

echo "<p>Number of games found: ".$num_results."</p>";

for ($i=0; $i < $num_results; $i++)
{
$row = mysql_fetch_array($result);
echo htmlspecialchars( stripslashes($row["gamename"]));
echo "<br>";
echo htmlspecialchars( stripslashes($row["year"]));
echo "<br>";
echo htmlspecialchars( stripslashes($row["description"]));
echo "<br>";
echo htmlspecialchars( stripslashes($row["comments"]));
echo "<br>";
}  

?>
</body>
</html>

