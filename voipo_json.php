<?php

$input = json_decode(file_get_contents("php://input"));
$message_id = $input->Message->MessageId;
$time = $input->Message->Time;
$from = $input->Message->From;
$to = $input->Message->To;
$body = $input->Message->Body;