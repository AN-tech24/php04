<?php
session_start(); //SEISSIONを使うよ
//この記述により、phpでもセッションがとれるようになる

$_SESSION["name"] = "yamazaki"; //この段階でサーバにデータが入る
$_SESSION["age"] = "40";

echo session_id();