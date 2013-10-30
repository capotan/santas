<?php 
# We are storing the information in this config array that will be required to connect to the database.
$config = array(
	'host'		=> 'localhost',
	'username'	=> 'root',
	'password'	=> '',
	'dbname' 	=> 'santas'
);
#connecting to the database by supplying required parameters
try
{
$db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);
 }
catch (Exception $e) {
    echo 'Caught exception: '.$e->getMessage()."\n";
	}
#Setting the error mode of our db object, which is very important for debugging.
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>