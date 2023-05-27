<?php

$headers = 'From: noreply@resaweb.michel.butmmi.o2switch.site' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

mail(
    $mail,
    $sujet,
    $message,
    $headers
);