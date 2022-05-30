<?php
error_reporting(E_ERROR | E_PARSE);

header('content-Type: application/json');
$host = "localhost";
$user = "root";
$password = "";
$db = "user";
$data = mysqli_connect($host, $user, $password, $db);
$sql = "select * from costumer where sex ='homme' and date =DATE(now()) ";

$result = mysqli_query($data, $sql);
$homme = mysqli_num_rows($result);
$sql = "select * from costumer where sex ='femme' and date =DATE(now())";

$result = mysqli_query($data, $sql);
$femme = mysqli_num_rows($result);

$prhomme = round((($homme) / ($homme + $femme)) * 100, 2);
$prfemme = 100 - $prhomme;

$all = $homme + $femme;

$sql = "select * from costumer where  etat ='urgent' and date = DATE(now())";
$result = mysqli_query($data, $sql);
$urg = mysqli_num_rows($result);

$sql = "select * from costumer where date= DATE(now())-1";
$result = mysqli_query($data, $sql);
$day1 = mysqli_num_rows($result);

$sql = "select * from costumer where date= DATE(now())-2";
$result = mysqli_query($data, $sql);
$day2 = mysqli_num_rows($result);

$sql = "select * from costumer where date= DATE(now())-3";
$result = mysqli_query($data, $sql);
$day3 = mysqli_num_rows($result);

$sql = "select * from costumer where date= DATE(now())-4";
$result = mysqli_query($data, $sql);
$day4 = mysqli_num_rows($result);

$sql = "select * from costumer where date= DATE(now())-5";
$result = mysqli_query($data, $sql);
$day5 = mysqli_num_rows($result);

$sql = "select * from costumer where  date=DATE(now())-6";
$result = mysqli_query($data, $sql);
$day6 = mysqli_num_rows($result);

$sql = "select * from costumer where  genre='homme'";
$result = mysqli_query($data, $sql);
$g_h = mysqli_num_rows($result);

$sql = "select * from costumer where  genre='femme'";
$result = mysqli_query($data, $sql);
$g_f = mysqli_num_rows($result);

$sql = "select * from costumer where  genre='enfant'";
$result = mysqli_query($data, $sql);
$g_e = mysqli_num_rows($result);

$sql = "select * from costumer where  genre='bébé'";
$result = mysqli_query($data, $sql);
$g_b = mysqli_num_rows($result);

$sql = "select * from costumer where  heur>='08:00' and heur<'09:00'";
$result = mysqli_query($data, $sql);
$h_8 = mysqli_num_rows($result);

$sql = "select * from costumer where  heur>='09:00' and heur<'10:00'";
$result = mysqli_query($data, $sql);
$h_9 = mysqli_num_rows($result);

$sql = "select * from costumer where  heur>='10:00' and heur<'11:00'";
$result = mysqli_query($data, $sql);
$h_10 = mysqli_num_rows($result);

$sql = "select * from costumer where  heur>='11:00' and heur<'12:00'";
$result = mysqli_query($data, $sql);
$h_11 = mysqli_num_rows($result);

$sql = "select * from costumer where  heur>='12:00' and heur<'13:00'";
$result = mysqli_query($data, $sql);
$h_12 = mysqli_num_rows($result);

$sql = "select * from costumer where  heur>='13:00' and heur<'14:00'";
$result = mysqli_query($data, $sql);
$h_13 = mysqli_num_rows($result);

$sql = "select * from costumer where  heur>='14:00' and heur<'15:00'";
$result = mysqli_query($data, $sql);
$h_14 = mysqli_num_rows($result);

$sql = "select * from costumer where heur>='15:00' and heur<'16:00'";
$result = mysqli_query($data, $sql);
$h_15 = mysqli_num_rows($result);

$sql = "select * from costumer where  heur>='16:00' and heur<'17:00'";
$result = mysqli_query($data, $sql);
$h_16 = mysqli_num_rows($result);

$sql = "select * from costumer WHERE heur >time(now()) and date =date(now()) ORDER by heur , date   limit 3";
$result = mysqli_query($data, $sql);
$num = mysqli_num_rows($result);
$next = array();
while ($row = mysqli_fetch_assoc($result)) {
    $next0 = array("nom" => $row['nom'], "prenom" => $row['prenom'], "heur" => $row['heur'], "sex" => $row['sex'], "phone" => $row['phone'], "type" => $row['type de service']);
    array_push($next, $next0);
}

$sql = "select * from costumer";
$result = mysqli_query($data, $sql);
$num_P = mysqli_num_rows($result);
$all_P = array();
while ($row = mysqli_fetch_assoc($result)) {
    $check_in = "" . $row['date'] . " " . $row['heur'] . "";
    $full_name = "" . $row['nom'] . " " . $row['prenom'] . "";

    $next0 = array("id" => $row['id'], "check_in" => $check_in, "full_name" => $full_name, "type" => $row['type de service'], "docteur" => $row['docteur']);
    array_push($all_P, $next0);
}


$genre = array("homme" => $g_h, "femme" => $g_f, "enfant" => $g_e, "bébé" => $g_b);
$heur = array("8" => $h_8, "9" => $h_9, "10" => $h_10, "11" => $h_11, "12" => $h_12, "13" => $h_13, "14" => $h_14, "15" => $h_15, "16" => $h_16);
$days = array("today" => $all, "today_1" => $day1, "today_2" => $day2, "today_3" => $day3, "today_4" => $day4, "today_5" => $day5, "today_6" => $day6);
$info = array("$homme", "$femme", "$prhomme", "$prfemme", "$all", "$urg");

$weekdays = array("0" => "Dim", "1" => "Lun", "2" => "Mar", "3" => "Mer", "4" => "Jeu", "5" => "Ven", "6" => "Sam", "-1" => "Sam", "-2" => "Ven", "-3" => "Jeu", "-4" => "Mer", "-5" => "Mar", "-6" => "Lun", "-7" => "Dim");