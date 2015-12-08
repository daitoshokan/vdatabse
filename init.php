<?php
$host = "127.0.0.1";
$user = "daitoshokan";
$pass = "";                         
$db = "db";                         
$port = 3306; 

$connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

$firstnames = array("Jackson",
"Aiden",
"Liam",
"Lucas",
"Noah",
"Mason",
"Ethan",
"Caden",
"Jacob",
"Logan",
"Jayden",
"Elijah",
"Jack",
"Luke",
"Michael",
"Benjamin",
"Alexander",
"James",
"Jayce",
"Caleb",
"Connor",
"William",
"Carter",
"Ryan",
"Oliver",
"Matthew",
"Daniel",
"Gabriel",
"Henry",
"Owen",
"Grayson",
"Dylan",
"Landon",
"Isaac",
"Nicholas",
"Wyatt",
"Nathan",
"Andrew",
"Cameron",
"Dominic",
"Joshua",
"Eli",
"Sebastian",
"Hunter",
"Brayden",
"David",
"Samuel",
"Evan",
"Gavin",
"Christian",
"Max",
"Anthony",
"Joseph",
"Julian",
"John");

$lastnames = array("Smith", "Tellman", "davidson", "ericson", "Johnson", "Gonzalez", "Hernandez", "Swift");
$domains = array("@gmail.com", "@yahoo.com", "@sbcglobal.net", "@windows.me", "@hotmail.com");
$cities = array("Santa cruz", "San Francisco", "San jose", "Berkeley", "Sacramento", "Eureka", "San Diego", "Los Angeles");

mysqli_query($connection,
"CREATE TABLE users( id INTEGER(9) PRIMARY KEY AUTOINCREMENT, full_name VARCHAR(255), email VARCHAR(255), city VARCHAR(255) )");



for($i=1;i<10000000;$i++)
{
    $fname = $firstnames[array_rand($firstnames)];
    $lname = $lastnames[array_rand($lastnames)];
    $rcity = $cities[array_rand($cities)];
    $rdomain = $domains[array_rand($domains)];
    
    
    $sql = "INSERT INTO users(full_name,email,city) VALUES (" 
    ."'". $fname . " ". $lname ."'". "," 
    ."'". $fname . $lname . $rdomain."'". ","
    ."'". $rcity."'"
    .")";
    
    mysqli_query($connection, $sql);
}

?>
