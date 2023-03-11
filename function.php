<?php
$data = array(
    "key1" => "value1",
    "kew2" => "value2",
    "kew3" => "value3",
);
function say( $data ) {
    printf( "Current Value = %s\n", $data );
}

for ( $i = 0; $i < 10; $i++ ) {
    say( $i );
}

