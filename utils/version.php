<?php
// 防止外部破解
if(!defined('SYSTEM')) {exit(BLOCK_RETURN);} // 防止外部破解，此行勿改

define('VERSION', '4.0.1');
// 加上json的Header
header('Content-Type: application/json; charset=utf-8');
// 加上web的Header
header("Access-Control-Allow-Origin: https://www.bilibili.com");
header("Access-Control-Allow-Credentials: true");
?>