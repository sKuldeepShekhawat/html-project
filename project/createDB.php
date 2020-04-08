<?php
$u="projec";
$conn=mysqli_connect("localhost","root","","project");
	if ($conn->connect_error) {
	die("error");}
    echo "Database created successfully<br>";
	$userdata="CREATE TABLE IF NOT EXISTS userdata (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
user VARCHAR(100) NOT NULL UNIQUE KEY,
name VARCHAR(100) NOT NULL,
pass VARCHAR(15),
img VARCHAR(255)
)";
	if ($conn->query($userdata) === TRUE) {
	echo "userdata created successfully<br>";	
	$one="CREATE TABLE IF NOT EXISTS 1st (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($one) === TRUE) {
	echo "1st created successfully<br>";sleep(0.1);	
	$two="CREATE TABLE IF NOT EXISTS 2nd (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($two) === TRUE) {
	echo "2nd created successfully<br>";sleep(0.1);	
		
	$three="CREATE TABLE IF NOT EXISTS 3rd (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($three) === TRUE) {
	echo "3rd created successfully<br>";sleep(0.1);
	
	$four="CREATE TABLE IF NOT EXISTS 4th (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($four) === TRUE) {
	echo "4th created successfully<br>";sleep(0.1);
		
	$five="CREATE TABLE IF NOT EXISTS 5th (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($five) === TRUE) {
	echo "5th created successfully<br>";sleep(0.1);

	$six="CREATE TABLE IF NOT EXISTS 6th (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($six) === TRUE) {
	echo "6th created successfully<br>";sleep(0.1);

	$seven="CREATE TABLE IF NOT EXISTS 7th (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($seven) === TRUE) {
	echo "7th created successfully<br>";sleep(0.1);

	$eight="CREATE TABLE IF NOT EXISTS 8th (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($eight) === TRUE) {
	echo "8th created successfully<br>";sleep(0.1);

	$nine="CREATE TABLE IF NOT EXISTS 9th (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($nine) === TRUE) {
	echo "9th created successfully<br>";sleep(0.1);

	$ten="CREATE TABLE IF NOT EXISTS 10th (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($ten) === TRUE) {
	echo "10th created successfully<br>";sleep(0.1);

	$eleven="CREATE TABLE IF NOT EXISTS 11th (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($eleven) === TRUE) {
	echo "11th created successfully<br>";sleep(0.1);

	$twelve="CREATE TABLE IF NOT EXISTS 12th (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($twelve) === TRUE) {
	echo "12th created successfully<br>";sleep(0.1);

	$engl="CREATE TABLE IF NOT EXISTS engl (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($engl) === TRUE) {
	echo "engl created successfully<br>";sleep(0.1);

	$gstudies="CREATE TABLE IF NOT EXISTS gstudies (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($gstudies) === TRUE) {
	echo "gstudies created successfully<br>";sleep(0.1);

	$jeeche="CREATE TABLE IF NOT EXISTS jeeche(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($jeeche) === TRUE) {
	echo "jeeche created successfully<br>";sleep(0.1);

	$jeecou="CREATE TABLE IF NOT EXISTS jeecou (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($jeecou) === TRUE) {
	echo "jeecou created successfully<br>";sleep(0.1);

	$jeemth="CREATE TABLE IF NOT EXISTS jeemth (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($jeemth) === TRUE) {
	echo "jeemth created successfully<br>";sleep(0.1);

	$jeephy="CREATE TABLE IF NOT EXISTS jeephy (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($jeephy) === TRUE) {
	echo "jeephy created successfully<br>";sleep(0.1);

	$kg="CREATE TABLE IF NOT EXISTS kg (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($kg) === TRUE) {
	echo "kg created successfully<br>";sleep(0.1);

	$ndamth="CREATE TABLE IF NOT EXISTS ndamth (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($ndamth) === TRUE) {
	echo "ndamth created successfully<br>";sleep(0.1);

	$nursery="CREATE TABLE IF NOT EXISTS nursery (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic VARCHAR(100) NOT NULL,
link VARCHAR(300)
)";
	if ($conn->query($nursery) === TRUE) {
	echo "nursery created successfully<br><br><br>YOU WILL BE REDIRECTED SOON!!!";sleep(0.1);
	sleep(2);
	header("Location:index.php");
	}
	else {
    echo "Error creating nursery: " . $conn->error;
	}
	}
	else {
    echo "Error creating ndamth: " . $conn->error;
	}
	}
	else {
    echo "Error creating kg: " . $conn->error;
	}
	}
	else {
    echo "Error creating jeephy: " . $conn->error;
	}
	}
	else {
    echo "Error creating jeemth: " . $conn->error;
	}
	}
	else {
    echo "Error creating jeecou: " . $conn->error;
	}
	}
	else {
    echo "Error creating jeeche: " . $conn->error;
	}
	}
	else {
    echo "Error creating gstudies: " . $conn->error;
	}
	}
	else {
    echo "Error creating engl: " . $conn->error;
	}
	}
	else {
    echo "Error creating 12th: " . $conn->error;
	}
	}
	else {
    echo "Error creating 11th: " . $conn->error;
	}
	}
	else {
    echo "Error creating 10th: " . $conn->error;
	}
	}
	else {
    echo "Error creating nine: " . $conn->error;
	}
	}
	else {
    echo "Error creating 8th: " . $conn->error;
	}
	}
	else {
    echo "Error creating 7th: " . $conn->error;
	}
	}
	else {
    echo "Error creating 6th: " . $conn->error;
	}
	}
	else {
    echo "Error creating 5th: " . $conn->error;
	}
	}
	else {
    echo "Error creating 4th: " . $conn->error;
	}
	}
	else {
    echo "Error creating 3rd: " . $conn->error;
	}
	}
	else {
    echo "Error creating 2nd: " . $conn->error;
	}
	}
	else {
    echo "Error creating 1st: " . $conn->error;
	}
} else {
    echo "Error creating userdata: " . $conn->error;
}
?>