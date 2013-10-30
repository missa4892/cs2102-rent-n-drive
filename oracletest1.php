<?php

putenv('ORACLE_HOME=/oraclient');

// connect
$conn = oci_connect('a0084053', 'db2013s1', 'sid3.comp.nus.edu.sg');
//var_dump($conn);


 /*or die(oci_error());


if (!$conn) {
$e = oci_error();
trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}*/

// insert
$sth = oci_parse($conn, "insert into employee values ('10', 'John')");
if (oci_execute($sth, OCI_DEFAULT))
  echo "<p>Successfully added an employee.</p>";
else echo "<p>Error adding an employee.</p>";

// select
$sth = oci_parse($conn, "select id, name from employee");
oci_execute($sth, OCI_DEFAULT);
while ($row = oci_fetch_array($sth)) {
  echo "<p>Id = ", $row[0], ", Name = ", $row[1], "</p>\n";
}

// delete
$sth = oci_parse($conn, "delete from employee");
if (oci_execute($sth, OCI_DEFAULT))
  echo "<p>Successfully deleted all employees.</p>";
else echo "<p>Error deleting employees.</p>";

// commit
oci_commit($conn);

// disconnect
oci_close($conn);

?>	