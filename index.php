<?php
$conn=mysqli_connect("dashdb-txn-sbox-yp-lon02-02.services.eu-gb.bluemix.net","lwt73682","9cf59fqf@sll05bc","BLUDB");
if(!$conn)
{
	echo "database is not connect";
}else
{
	echo "database connected";
}
?>
