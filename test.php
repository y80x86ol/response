<?php
require 'vendor/autoload.php';

$response = new \Y80x86ol\Response\Response();
//echo $response;

$response->init("user/info", "获取用户信息成功");
$response->setData(array("name" => "ken", "age" => "43"));
echo $response->json();