<?php 

$file = fopen('test.txt','a');
fwrite($file, 'hello\n');
fclose($file);