<?php
//1. POSTデータ取得
session_start(); //これを忘れないように注意

$hero   = $_POST["hero"];
$setting  = $_POST["setting"];
$first_scene = $_POST["first_scene"];
$choice1_text   = $_POST["choice1_text"];
$choice2_text    = $_POST["choice2_text"];
$id = $_POST["id"];

//2. DB接続します
include("funcs.php");
sschk();
$pdo = db_conn();

//３．データ登録SQL作成

$stmt = $pdo->prepare("UPDATE gs_cm_table SET hero=:hero,setting=:setting,first_scene=:first_scene,choice1_text=:choice1_text,choice2_text=:choice2_text WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(':hero',   $hero,   PDO::PARAM_STR);
$stmt->bindValue(':setting',  $setting,  PDO::PARAM_STR);
$stmt->bindValue(':first_scene',    $first_scene,    PDO::PARAM_STR);  // 修正: $first_scene を使用
$stmt->bindValue(':choice1_text', $choice1_text, PDO::PARAM_STR);
$stmt->bindValue(':choice2_text', $choice2_text, PDO::PARAM_STR);  // 修正: $choice2_text を使用
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("select.php");
}
?>
