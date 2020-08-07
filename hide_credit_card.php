<?php
//function mask credit card
function hideNumbCreditCard($cc) {

    $cc_length = strlen($cc);

    for ($i = 0; $i < $cc_length - 4; $i++) {
        if ($cc[$i] == '-') {
            continue;
        }
        $cc[$i] = 'x';
    }

    return $cc;
}
$string = "1234567891234567";
echo maskCreditCard($string);
?>
