<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Aliens Abducted Me - Report an Abduction</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Aliens Abducted Me - Report an Abduction</h2>

<?php
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$howmany = $_POST['howmany'];
$what_they_did = $_POST['whattheydid'];
$other = $_POST['other'];
$when_it_happened = $_POST['whenithappened'];
$how_long = $_POST['howlong'];
$alien_description = $_POST['aliendescription'];
$fang_spotted = $_POST['fangspotted'];
$email = $_POST['email'];
$other = $_POST['other'];

$to = 'junior.mac91@gmail.com';
$subject = 'Aliens Abdutcted me - Report an adbduction';
$msg = "$name was abducted $when_it_happened and was gone for $how_long.\n" .
"Number of aliens: $howmany\n" .
"Aliens description: $alien_description\n" .
"What they did: $what_they_did\n" .
"Fang spotted: $fang_spotted\n" .
"Other comments: $other";

mail($to, $subject, $msg, 'From:' . $email);

echo 'Thanks for submitting the form '.'<br/>';
echo 'You were abducted '. $when_it_happened . '<br/>';
echo 'And were gone for '. $how_long . '<br/>';
echo 'Number of aliens' . $howmany . '<br/>';
echo 'Describe them '. $alien_description . '<br/>';
echo 'The aliens did this ' . $what_they_did . '<br/>';
echo 'Was fang there '. $fang_spotted . '<br/>';
echo 'Other comments ' . $other . '<br/>';
echo 'Your e-mail address is ' . $email . '<br/>';


$dbc = mysqli_connect('localhost', 'root', 'jehjuh09', 'aliendatabase')
or die('Error to connecting to MySql Server.');

$query = "INSERT INTO aliens_abduction (first_name, last_name, " . 
	     "when_it_happened, how_long, how_many, alien_description, " .
	     "what_they_did, fang_spotted, other, email) " .
	     "VALUES ('$first_name', '$last_name', '$when_it_happened', '$how_long', '$howmany', '$alien_description', '$what_they_did', '$fang_spotted', '$other', " .
         "'$email')"; 

$result = mysqli_query($dbc, $query)
or die('Error querying database');

mysqli_close($dbc);
?>

</body>
</html>