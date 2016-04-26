<?php
$structure = __DIR__."/block.yml";
$myfile = fopen($structure, "r") or die("Unable to open file!");
$yaml = fread($myfile,filesize($structure));
fclose($myfile);

$block = yaml_parse($yaml);
