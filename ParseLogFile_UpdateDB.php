<?php

$link = mysqli_connect('nyutools1.ops.about.com', 'itp', 'jymeso');

if (!$link) {
    die('Connect Error: ' . mysqli_connect_errno());
}

$myFile = "logfile.txt";
$fh = fopen($myFile, 'r');
while ($line = fgets($fh,1000))
print $line;
fclose($fh);

$tok = strtok($line, " \n\t");

while($tok !== false)
{
	echo "token =$tok<br />";
	$tok = strtok(" \n\t");
}

//Insert records into Database on About.com MySQL server
//msqli_query($con,"INSERT INTO tablename(ID, ts, created, idtstamp, tmog, mint, itps, url, flags)
//VALUES()");
//ID is an autoincremented field and ts and created are timestamps

$sql = "INSERT INTO Event(idtstamp, tmog, mint, itps, url, flags) VALUES ('abc','def','ghi','jkl','mno',1)";

if (!msqli_query($link, $sql))
{
	die('Error: ' . mysqli_error());
}
echo "1 record added";

msqli_close($link);

?>