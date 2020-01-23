<?php
$conn=mysqli_connect("e4c2ddb9-2bd7-420c-8c94-4b68e4a25842-bluemix.cloudantnosqldb.appdomain.cloud","e4c2ddb9-2bd7-420c-8c94-4b68e4a25842-bluemix","c7a250cf866b7e29d69a8471ebe348b4c6576f9f2f72f97d8e0890e9d28bb945","Cloudant-42");
if(!$conn)
{
	echo "database is not connect";
}else
{
	echo "database connected";
}
?>