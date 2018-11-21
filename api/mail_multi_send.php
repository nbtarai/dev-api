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

$data = ['ok_user_list' => $okUserList, 'ng_user_list' => $ngUserList];

$retData = ['code' => 200, 'message' => 'test', 'data' => $data, 'user' => []];

echo json_encode($retData);

?>