<?php

$input = file_get_contents("php://input");
$xml = new SimpleXMLElement($input);

$message_id = (string)$xml->Message->MessageId;
$time = (string)$xml->Message->Time;
$from = (string)$xml->Message->From;
$to = (string)$xml->Message->To;
$body = (string)$xml->Message->Body;