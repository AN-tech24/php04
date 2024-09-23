<?php
// データがPOSTリクエストで送信されているか確認
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ユーザーが送信したデータを取得
    $file = isset($_POST['file']) ? $_POST['file'] : '';
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $rating = intval($_POST['rating']); // 評価は整数値と仮定

    // 評価の保存ファイル名を決定
    $rating_filename = 'ratings/' . basename($file, '.json') . '_ratings.json';

    // 保存するデータを配列として準備
    $rating_data = [
        'username' => $username,
        'email' => $email,
        'rating' => $rating
    ];

    // 既存の評価データを読み込み、追加
    $existing_ratings = [];
    if (file_exists($rating_filename)) {
        $existing_ratings = json_decode(file_get_contents($rating_filename), true);
    }
    $existing_ratings[] = $rating_data;

    // 評価データをJSON形式で保存
    file_put_contents($rating_filename, json_encode($existing_ratings, JSON_UNESCAPED_UNICODE));

    // 評価が保存された後にトップ評価ページにリダイレクト
    header("Location: top_rated.php");
    exit;
}
?>
