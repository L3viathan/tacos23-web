<?php
/*$db = sqlite_open('../anmeldungen.db', 0666, $error);
if (!$db) die ($error);

$stm = "INSERT INTO Teilnehmer VALUES('" . sqlite_escape_string($_GET['form-name']) . "','" . sqlite_escape_string($_GET['form-email']) . "','" . sqlite_escape_string($_GET['form-location']) . "','" . sqlite_escape_string($_GET['form-notes']) . "','" . sqlite_escape_string($_GET['form-nobed']) . "')";

//echo $stm;

$ok = sqlite_exec($db, $stm);
if (!$ok) die("Cannot execute statement.");

sqlite_close($db);

mail($_GET['form-email'],"TaCoS-Anmeldebestaetigung","Liebe(r) ".$_GET['form-name'] . ",\n\nVielen Dank fuer Deine Anmeldung. Wir haben uns deine Teilnahme vorgemerkt. Details zur Bezahlung der Teilnehmergebuehr findest du hier: http://tacos23.coli.uni-saarland.de/?page=bezahlung \n\nDein TaCoS-Orgateam","From: TaCoS-Orgateam <mail@tacos23.de>");

header("Location: /?page=bezahlung");
*/
header("Location: /");
?>
