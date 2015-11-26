<?php

try {
    $a =1;
    $b =0;
    if ($b == 0)
        throw new Exception ("dlenie na nol");
    $c = $a/$b;

} catch (Exception  $e) {

    echo $e->getMessage();
}

?>