<?php
	
$data = file('data.txt');
usort($data, function($a, $b) {
    $a = preg_replace('|[^a-zA-Z0-9]|', '', $a);
    $b = preg_replace('|[^a-zA-Z0-9]|', '', $b);

    return strnatcmp($a, $b);
});
  
foreach ( $data as $unit ) {
        echo $unit . "<br/>";
    }  

?>