<?php

$time_start = microtime(true);
exec('node_modules/.bin/rollup -c', $output);
$time_stop = microtime(true);
$execution_time = ($time_stop - $time_start)*1000;

print_r($output);

print_r('***Transpile took '.$execution_time.' ms.***');