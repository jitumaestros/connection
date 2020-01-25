<?php
$database = 'BLUDB';
$user = 'lwt73682';
$password = '9cf59fqf@sll05bc';
$hostname = 'dashdb-txn-sbox-yp-lon02-02.services.eu-gb.bluemix.net';
$port = 50000;

$conn_string = "DRIVER={IBM DB2 ODBC DRIVER};DATABASE=$database;" .
  "HOSTNAME=$hostname;PORT=$port;PROTOCOL=TCPIP;UID=$user;PWD=$password;";
$conn = db2_connect($conn_string, '', '');

if ($conn) {
    echo "Connection succeeded.";
    db2_close($conn);
}
else {
    echo "Connection failed.";
}
?>
