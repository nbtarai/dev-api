<?php

$OK_COUNT = 5;

$userIds = explode(',', $_REQUEST['user_id']);

$userIdsLen = count($userIds);

$okUserList = [];
$ngUserList = [];
for ($i = 0; $i < $userIdsLen; $i++) {
    if ($i < $OK_COUNT) {
        $okUserList[] = ['user_id' => $userIds[$i]];
    } else {
        $ngUserList[] = ['user_id' => $userIds[$i]];
    }
}

$data = ['user_ok_list' => $okUserList, 'user_ng_list' => $ngUserList];

$retData = ['code' => 200, 'message' => 'test', 'data' => $data, 'user' => []];

echo json_encode($retData);

?>