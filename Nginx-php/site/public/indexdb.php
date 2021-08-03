<?php

include "dbconect.php";

$db = Database::instance();
$db->prepare("SELECT * FROM `users`");

?>