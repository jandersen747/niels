<?php
file_put_contents('./data/login.json', $_POST['foxy']);
header('Location: ./report.html');