<?php 
/**
 * store on a file access.log date and time of accessing this code.
 */
define('CSV_TIME_FORMAT',"Y\tm\td\tH\ti\ts\n");
$handle = fopen("access.log", "a");
$currentTime=(new DateTime())->format(CSV_TIME_FORMAT);
fwrite($handle, (new DateTime())->format(CSV_TIME_FORMAT));
fflush($handle);
fclose($handle);
?>