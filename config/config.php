<?php

use Database;

require_once 'Database.php';
require_once '../lib/helpers.php';

$host = 'joohong.work';
$username = 'fw';
$password = 'Fhwlxpr1!1';
$database = 'fw';

// 데이터베이스 연결 설정
$db = new Database($host, $username, $password, $database);
