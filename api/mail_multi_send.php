<?php

$userIds = explode(',', $_REQUEST['user_id']);

$userIdsLen = count($userIds);

$okUserList = [];
$ngUserList = [];
for ($i = 0; $i < $userIdsLen; $i++) {
    $okUserList[] = ['user_id' => $userIds[$i]];
}

$data = ['ok_user_list' => $okUserList, 'ng_user_list' => $ngUserList];

$retData = ['code' => 200, 'message' => 'test', 'data' => $data, 'user' => []];

echo json_encode($retData);

?>