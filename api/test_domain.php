<?php

$entry_point = ['scheme' => 'https', 'host' => 'pcmax.jp'];
$api = ['entry_point' => $entry_point];

$emails = ['support' => 'support@pcmax.jp'];

$retData = ['api' => $api, 'emails' => $emails];

echo json_encode($retData);

?>