<?php

putenv('ORACLE_HOME=/oraclient');

// connect
$conn = oci_connect('a0084053', 'db2013s1', 'sid3.comp.nus.edu.sg');

// insert
$sth = oci_parse($conn, "INSERT INTO MOTORCYCLES values ('1', 'Harley Davidson', 'auto', 'petrol', '', '', 'hougang', 'small', '','')");
if (oci_execute($sth, OCI_DEFAULT))
  echo "<p>Successfully added a motorcycle.</p>";
else echo "<p>Error adding a motorcycle.</p>";

// select
$sth = oci_parse($conn, "SELECT vehicleNo, modelType FROM MOTORCYCLES");
oci_execute($sth, OCI_DEFAULT);
while ($row = oci_fetch_array($sth)) {
  echo "<p>vehicle No = ", $row[0], ", model Type = ", $row[1], "</p>\n";
}

// delete
$sth = oci_parse($conn, "DELETE FROM MOTORCYCLES");
if (oci_execute($sth, OCI_DEFAULT))
  echo "<p>Successfully deleted all MOTORCYCLES.</p>";
else echo "<p>Error deleting MOTORCYCLES.</p>";

// commit
oci_commit($conn);

// disconnect
oci_close($conn);

?>	