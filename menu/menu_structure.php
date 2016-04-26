<?php
$structure = __DIR__."/main.yml";
$myfile = fopen($structure, "r") or die("Unable to open file!");
$yaml = fread($myfile,filesize($structure));
fclose($myfile);

$parsed = yaml_parse($yaml);

// Menu array
$menu = $parsed['menu'];
