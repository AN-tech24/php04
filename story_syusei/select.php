<?php
// 0. SESSION開始
session_start();

// 1. 関数群の読み込み
include("funcs.php");

// LOGINチェック関数
function check_login() {
    if (!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"] != session_id()) {
        exit("Login Error");
    } else {
        session_regenerate_id(true);
        $_SESSION["chk_ssid"] = session_id();
    }
}

// LOGINチェック実行
check_login();

// 2. データ登録SQL作成
$pdo = db_conn();
$sql = "SELECT * FROM gs_cm_table";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

// 3. データ表示
if ($status == false) {
    sql_error($stmt);
}

// 全データ取得
$values = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($values, JSON_UNESCAPED_UNICODE);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>物語表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">物語登録</a>
        <?php if ($_SESSION["kanri_flg"] == "1") { ?>
          <a class="navbar-brand" href="user.php">ユーザー登録</a>
        <?php } ?>
        <a class="navbar-brand" href="logout.php">ログアウト</a>
        <?= htmlspecialchars($_SESSION["name"], ENT_QUOTES, 'UTF-8') ?>さん、こんにちは！
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron">
      <table class="table">
      <?php foreach ($values as $v) { ?>
        <tr>
          <td><?= htmlspecialchars($v["id"], ENT_QUOTES, 'UTF-8') ?></td>
          <td><?= htmlspecialchars($v["hero"],ENT_QUOTES,'UTF-8') ?></td>
          <td><?= htmlspecialchars($v["setting"],ENT_QUOTES,'UTF-8') ?></td>
          <td><?= htmlspecialchars($v["first_scene"],ENT_QUOTES,'UTF-8') ?></td>
          <td><?= htmlspecialchars($v["choice1_text"],ENT_QUOTES,'UTF-8') ?></td>
          <td><?= htmlspecialchars($v["choice2_text"],ENT_QUOTES,'UTF-8') ?></td>
          <td><a href="detail.php?id=<?=htmlspecialchars($v["id"])?>">📝</a></td>
         <td><a href="delete.php?id=<?=htmlspecialchars($v["id"])?>">🚮</a></td>
      
        </tr>
      <?php } ?>
      </table>
  </div>
</div>
<!-- Main[End] -->

<script>
  const a = '<?php echo htmlspecialchars($json, ENT_QUOTES, 'UTF-8'); ?>';
  console.log(JSON.parse(a));
</script>
</body>
</html>
