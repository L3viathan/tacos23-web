<?php
$page=$_GET['page'];
if($page==""){
	$page="index";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>TaCoS 23</title>
<link rel="shortcut icon" href="favicon.ico" />
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<link rel="stylesheet" href="assets/css/bootstrap.css">
</link>
<style>
body { padding-top: 60px; /* 60px to make the container go all the way
to the bottom of the topbar */ }
</style>
<link rel="stylesheet" href="assets/css/bootstrap-responsive.css">
</link>
<link href="assets/ico/favicon.ico" rel="shortcut icon">
<style type="text/css">
.table-programm td {
max-width:100px;
}
.table-programm td:first-child {
max-width:30px;
}
</style>
</head>
<body>
<div class="navbar navbar-fixed-top navbar-inverse">
<div class="navbar-inner">
<div class="container">
<a class="brand" href="http://tacos23.coli.uni-saarland.de/?page=allgemeines"> TaCoS 23 </a>
<ul class="nav">
<li<?php echo ($page=='index' ? ' class="active"' : '');?>>
<a href="./"> Startseite </a>
</li>
<li<?php echo ($page=='anfahrt' ? ' class="active"' : '');?>>
<a href="./?page=anfahrt"> Anfahrt </a>
</li>
<!-- <li<?php echo ($page=='anmeldung' ? ' class="active"' : '');?>>
<a href="./?page=anmeldung"> Anmeldung </a>
</li> -->
<!-- <li<?php echo ($page=='cfp' ? ' class="active"' : '');?>>
<a href="./?page=cfp"> Call for Papers </a>
</li> -->
<li<?php echo ($page=='abstracts' ? ' class="active"' : '');?>>
<a href="./?page=abstracts"> Abstracts </a>
</li>
<li<?php echo ($page=='programm' ? ' class="active"' : '');?>>
<a href="./?page=programm"> Programm </a>
</li>

<li<?php echo ($page=='kontakt' ? ' class="active"' : '');?>>
<a href="./?page=kontakt"> Kontakt </a>
</li>
</ul>
</div>
</div>
</div>
<div class="container">
<?php
if($_GET['success']) {
	echo "<div class='alert alert-success'><strong>Oh yeah.</strong> Anmeldung ist erfolgt.<a href='#' class='close' data-dismiss='alert'>&times;</a></div>";
}

?>
<?php
if (file_exists("content/".$page)){
	include("content/".$page);
}
else {
	include("content/404");
}
?>
</div>
<hr>
<span style="height: 50px; float:right;"><em>Mit freundlicher Unterst&uuml;tzung von:</em><a href="http://www.gscl.org"><img style="height:50px; padding-left:10px; padding-right: 10px;" src="gscl.gif" /></a><a href="http://xlog.ch"><img src="xlog.png" /></a></span>
<div>
<!-- F&uuml;r eigene Inhalte:<br />Copyleft &copy; 2013 Orga-Team der TaCoS23 -->
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
</script>
<script src="assets/js/bootstrap.js">
</script>
</body>
</html>
