<?php
require_once ("vendor/autoload.php");
include("src/Bank.php");

$t = new \Bank\Bank();
$operation = $argv[1];
unset($argv[0]);
unset($argv[1]);

print($t->$operation(...$argv));
