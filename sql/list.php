<?php
/* Auskommentiert for da sec.
$db = sqlite_open('../../anmeldungen.db');

if (!$db) die("Orr...");

$q = "SELECT * FROM Teilnehmer";
$result = sqlite_query($db, $q);

$number=0;

echo "<table border='1'><tr><td><b>Name</b></td><td><b>Email</b></td><td><b>Ort</b></td><td><b>Kommentar</b></td><td><b>Braucht <i>kein</i> Bett?</b></td></tr>";
while ($row = sqlite_fetch_array($result, SQLITE_ASSOC)) {
	echo "<tr><td>".$row['Name']."</td><td>".$row['Email']."</td><td>".$row['Location']."</td><td>".$row['Comment']."</td><td>".$row['Nobed']."</td></tr>";
	$number += 1;
}
echo "</table> <br>Eintr&auml;ge: $number";

sqlite_close($db);
*/
?>
