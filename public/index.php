<pre>
<?php
error_reporting(E_ALL);
require __DIR__ . '/../autoload.php';

//$dbh = new \App\Db();

$users = \App\Models\User::findByID(1);
var_dump($users);