<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>物語を作成しよう</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<link rel="stylesheet" href="css/style.css">
    </style>
    </head>
    <body>

      
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"><a class="navbar-brand" href="select.php">物語一覧</a></div>
                </div>
            </nav>
        </header>
        <!-- Head[End] -->

        <!-- Main[Start] -->
        <form method="POST" action="insert.php">
            <div class="jumbotron">
                <fieldset>

                    <legend>フリーアンケート</legend>
                    <label for="hero">主人公の名前:</label>
        <select id="hero" name="hero" required>
            <option value="">選択してください</option>
            <option value="太郎">太郎</option>
            <option value="花子">花子</option>
            <option value="勇者">勇者</option>
            <option value="姫">姫</option>
            <option value="魔法使い">魔法使い</option>
            <option value="騎士">騎士</option>
            <option value="忍者">忍者</option>
            <option value="冒険者">冒険者</option>
            <option value="精霊">精霊</option>
            <option value="妖精">妖精</option>
        </select><br>

        <label for="setting">物語の背景・設定:</label>
        <select id="setting" name="setting" required>
            <option value="">選択してください</option>
            <option value="中世の城">中世の城</option>
            <option value="未来の都市">未来の都市</option>
            <option value="魔法の森">魔法の森</option>
            <option value="宇宙ステーション">宇宙ステーション</option>
            <option value="海底都市">海底都市</option>
            <option value="古代遺跡">古代遺跡</option>
            <option value="荒野">荒野</option>
            <option value="妖精の村">妖精の村</option>
            <option value="地下洞窟">地下洞窟</option>
            <option value="異世界">異世界</option>
        </select><br>

        <label for="first_scene">最初のシーン:</label>
        <select id="first_scene" name="first_scene" required>
            <option value="">選択してください</option>
            <option value="いつも通りの朝だった">いつも通りの朝だった</option>
            <option value="その日、隕石が落ちてきた">その日、隕石が落ちてきた</option>
            <option value="雨が７日間続いた">雨が７日間続いた</option>
            <option value="村の広場で奇妙な音が響いた">村の広場で奇妙な音が響いた</option>
            <option value="街の灯りが一斉に消えた">街の灯りが一斉に消えた</option>
            <option value="主人公が迷子になった">主人公が迷子になった</option>
            <option value="不思議な生物が現れた">不思議な生物が現れた</option>
            <option value="突然の大地震が発生した">突然の大地震が発生した</option>
            <option value="星空に奇妙な星座が現れた">星空に奇妙な星座が現れた</option>
            <option value="謎の手紙が届いた">謎の手紙が届いた</option>
        </select><br>

        <label for="choice1_text">選択肢1:</label>
        <select id="choice1_text" name="choice1_text" required>
            <option value="">選択してください</option>
            <option value="主人公は外に出て調べに行く">主人公は外に出て調べに行く</option>
            <option value="主人公はその場でじっと待つ">主人公はその場でじっと待つ</option>
            <option value="村の長老に相談する">村の長老に相談する</option>
            <option value="一緒にいる友達に話す">一緒にいる友達に話す</option>
            <option value="家に戻って準備をする">家に戻って準備をする</option>
            <option value="情報を集めるために街に出る">情報を集めるために街に出る</option>
        </select><br>

        <label for="choice2_text">選択肢2:</label>
        <select id="choice2_text" name="choice2_text" required>
            <option value="">選択してください</option>
            <option value="主人公は状況を調べるために探索に出る">主人公は状況を調べるために探索に出る</option>
            <option value="主人公は他の人と協力する">主人公は他の人と協力する</option>
            <option value="主人公は自分の感覚を信じて行動する">主人公は自分の感覚を信じて行動する</option>
            <option value="主人公は疑わしい場所を調査する">主人公は疑わしい場所を調査する</option>
            <option value="主人公は手掛かりを集めるために質問する">主人公は手掛かりを集めるために質問する</option>
            <option value="主人公は事態を解決するために計画を立てる">主人公は事態を解決するために計画を立てる</option>
        </select><br>

                    <input type="submit" value="送信">
                </fieldset>
            </div>
        </form>
        <!-- Main[End] -->


    </body>
</html>
