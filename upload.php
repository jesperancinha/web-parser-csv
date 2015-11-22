<?php

$uploaddir = 'C:\\Uploads\\';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

class Person 	{
	
	var $personId;
	var $firstname;
	var $lastname;
	
	function Person($personID,$firstname,$lastname)
	{
		 $this->personId = $personID;
		 $this->firstname = $firstname;
		 $this->lastname = $lastname;
	}
	
	
}
echo "<p>";


function cmp($a, $b)
{
	return strcmp($a->firstname, $b->firstname);
}



if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
  echo "Thank you " . $_POST['email'] . ". The result of the sorting is:";
} else {
   echo "Upload failed!!";
}

$gestor = @fopen($uploadfile, "r");
$arrayTest =array();
$bufer = fgets($gestor, 4096);
if ($gestor) {
	while (($bufer = fgets($gestor, 4096)) !== false) {
		list($id,$name,$surname) = explode(",", $bufer);
		$person = new Person($id, $name, $surname);
		array_push($arrayTest, $person);
	}
	if (!feof($gestor)) {
		echo "Error: Unexpected faillure!\n";
	}
	fclose($gestor);
}

usort($arrayTest, "cmp");

echo '</br>';

foreach ($arrayTest as &$value) {
	echo $value->personId;
	echo ',';
	echo $value->firstname;
	echo ',';
	echo $value->lastname;
	echo '</br>';
}

echo "</p>";


?> 
