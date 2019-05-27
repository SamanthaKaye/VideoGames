<html>
<head>
<title>Insert Video Game</title>
<body>

<?

$servername = localhost;
$username = sammieka_smith;
$password = 12345678;
$dbname = sammieka_videogames;


$name = $_POST['gamename'];
$designername = $_POST['designername'];
$system = $_POST['systemname'];
$systemnumber = $_POST['systemnumber'];
$year = $_POST['year'];
$description = $_POST['description'];
$comments = $_POST['comments'];


if (!$gamename
 || !$designername
 || !$systemname
 || !$systemnumber
 || !$year
 || !$description
 || !$comments)
{
	echo "You have not entered all the required details.<br>"
		."Please go back and try again.";
	exit;
}



// add slashes and prepare the data for inserting into the db

$gamename = addslashes($gamename);
$designername = addslashes($designername);
$systemname = addslashes($systemname);
$systemnumber = intval($systemnumber);
$year = intval($year);
$description = addslashes($description);
$comments = addslashes($comments);

// connect to the db

@ $db = mysql_pconnect($servername, $username, $password);

if (!$db)
{
	echo "ERROR: Could not connect to database.  Please try again later.";
	exit;
}


// select the db
mysql_select_db("sammieka_videogames");


// prepare the query

$query = "insert into designer values
	('".NULL."','".$designername."')";

$query = "insert into system values 
	('".NULL."','".$systemname."','".$systemnumber."')";

// run the query

$result = mysql_query($query);

if($result)
	echo mysql_affected_rows()." designer added to Database.<br>";


$query = "insert into videogame values
	('".NULL."','".$gamename."','".'"last_insert_id()"'.
"','".$year.
"','".$description.
"','".$comments."')";

$result = mysql_query($query);

if($result)
	echo mysql_affected_rows()." games added to Database.<br>";


?>

</body>
</html>


