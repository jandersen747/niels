<?php
$s = file_get_contents('./data/login.json');
header("Content-type: text/plain");
echo $s;