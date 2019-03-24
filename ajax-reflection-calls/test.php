<?php

$firstName = (isset($_POST['fname'])) ? $_POST['fname'] : 'No First Name Given';
$lastName = (isset($_POST['lname'])) ? $_POST['lname'] : 'No Last Name Given';
$randomValue = 'random Value';

$array = ['fname'=>$firstName,'lname'=>$lastName,'response'=>$randomValue];

echo json_encode($array);
