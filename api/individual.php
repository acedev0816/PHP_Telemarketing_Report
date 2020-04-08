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
	//where
	$dp = $_REQUEST['dp'];
	$mp = $_REQUEST['mp'];
	$where = ''; 
	if($dp != '') //daily
	{
		$where = "report_time='$dp'";
	}
	if($mp != '') //daily
	{
		$where = "report_time>'$mp/1'";
	}

$query = "SELECT member.name as member ,team.name as team,dial,contact,qt FROM `result` LEFT JOIN member 
on(result.member_id = member.id) left join team on(member.team_id = team.id) where $where";
$result = $mysqli->query($query);

$customers = [];
if($result != FALSE)
{
	/* fetch values */
	$i = 1;
	while ($row = $result->fetch_assoc())
	{
		$customers[] = array(
			'No' => $i,
			'Team' => $row['team'],
			'Dials' => $row['dial'],
			'Contacts' => $row['contact'],
			'Qt' => $row['qt'],
			'Name' => $row['member']
		);
		$i++;	
		/* close statement */
	}
	$result->close();
}

echo json_encode($customers);
/* close connection */
$mysqli->close();
?>

