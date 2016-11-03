<?php

$result = $mysqli->query("SELECT * FROM newsarticles ORDER BY id DESC");

$result = convertArray($result);




