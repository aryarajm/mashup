<?php
$email = 'test@test.com';
$end = '.com';
if (endswith($email, $end)) echo 'Valid email';
else echo 'invalid email';
function endswith($email, $end) {
    $emaillen = strlen($email);
    $endlen = strlen($end);
    if ($endlen > $emaillen) return false;
    return substr_compare($email, $end, $emaillen - $endlen, $endlen) === 0;
}

?>