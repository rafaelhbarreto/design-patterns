<?php
    
include('App\LogsSingleton.php');

use App\LogsSingleton; 

$data = [
    'file' => 'test.php',
    'line' => '9',
    'message' => 'Warning! The application has many instances of logger object'
]; 

$log = LogsSingleton::obterInstancia(); 
$log->gravarLog($data); 

?>