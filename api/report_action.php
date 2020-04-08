<?php
// Include the connect.php file
include ('connect.php');


// Connect to the database
$mysqli = new mysqli($hostname, $username, $password, $database);
/* check connection */
if (mysqli_connect_errno())
	{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
    }

date_default_timezone_set('Asia/Ho_Chi_Minh');
$member = $_POST['member'];
$dial = $_POST['dial'];
$contact = $_POST['contact'];
$qt = $_POST['qt'];    
$cur_date = date("Y-m-d");
$query = "insert into result(member_id,dial,contact,qt,report_time) values($member,$dial,$contact,$qt,'$cur_date')";


$result = $mysqli->query($query);

$ret = [];
//return yes
if($result != FALSE)
	$ret["success"] = "yes";
else
	$ret["success"] = "no";
echo json_encode ($ret);
/* close connection */
$mysqli->close();
?>

