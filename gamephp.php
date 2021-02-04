<?php

$con = pg_connect("host=shellsrv.bostoncampus.local port=5432
dbname=teaching user=mai15 password=sKNIBbmo");

if (!$con)
{
die('Could not connect: ' . pg_last_error());
}
$name= $_POST['name'];
$score= $_POST['score'];
$query= "INSERT INTO gamedata VALUES (.$_GET["name"], .$_GET["score"])";

$res = pg_query ($con, $query);

if ($res){

}else{

}
?>