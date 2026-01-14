<?php
$hash = '$2a$12$175rHzPAcTYNldhZ3H8/G.fYK.XSyoxeFo5k5V.JRh7BJ7Txh6yty';
foreach (file('passwords.txt', FILE_IGNORE_NEW_LINES) as $candidate) {
    if (password_verify($candidate, $hash)) {
        echo "Match: $candidate\n";
        exit;
    }
}
echo "No match\n";
