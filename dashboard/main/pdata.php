<?php
error_reporting(E_ERROR | E_PARSE);
////OMAAR CHANGE THIS TO A FILE 
$host = "localhost";
$user = "root";
$password = "";
$db = "user";
$data = mysqli_connect($host, $user, $password, $db);

$fixid = $_SESSION["id"];
$username = $_SESSION["username"];

//var asupprimer
$fixid = 0;
$username = "omar maaraf";

$sql = "select * from users where id= $fixid";
$result = mysqli_query($data, $sql);
$patient_info = mysqli_fetch_array($result);

$sql = "select * from costumer where id=$fixid";
$result = mysqli_query($data, $sql);
$all_P = array();
while ($row = mysqli_fetch_assoc($result)) {

    $next0 = array("id" => $row['id'], "docteur" =>  $row['docteur'], "date" =>  $row['date'], "type" => $row['type de service'], "heur" => $row['heur']);
    array_push($all_P, $next0);
}

$sql = "select * from costumer WHERE heur > time(now()) and date >date(now()) and username =' " . $username . "'";
$result = mysqli_query($data, $sql);
$next = array();
while ($row = mysqli_fetch_assoc($result)) {
    $next0 = array("heur" => $row['heur'], "date" => $row['date'], "type" => $row['type de service']);
    array_push($next, $next0);
}
echo $next[0]['heur'];

$sql = "select * from costumer";
$result = mysqli_query($data, $sql);
$patients = mysqli_num_rows($result);

$sql = "select * from costumer where etat =\"urgent\"";
$result = mysqli_query($data, $sql);
$Urg = mysqli_num_rows($result);