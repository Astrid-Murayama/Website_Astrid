<!DOCTYPE html>
<html lang="ja">

<head>

    <!-- 定義済みPHP変数の読み込み -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/variable/global.php'); ?>

    <!-- 全ページ共通の要素を読み込み -->
    <?php require_once($webRoot . '/inc/head/common.php'); ?>

    <!-- ページ固有のメタデータ設定 -->

    <!-- 全ページ共通の要素を読み込み -->
    
    <!-- 外部プラグインのJavaScriptを読み込み（jQueryベースのため、jQueryを先に読み込む必要あり） -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
				

    <!-- JavaScriptの読み込み（自動キャッシュバスティング機能付き） -->

    <!-- 「サイト名」のJSON-LD構造化データ（トップページ限定の記述、外部参照不可） -->
    
    <!-- 「ローカルビジネス」のJSON-LD構造化データ -->
</head>

<body>

    <!-- TODO後に移動 -->
    <!-- JS -->
    <script src="//code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- ヘッダーセクション -->
    <?php include($webRoot . '/inc/head/navigation/header.php'); ?>

    <main>
        <section class="coming-soon">
            <div class="coming-soon__img-container">
                <img src="/img/common/coming-soon/icon_coming-soon.png" alt="">
            </div>
            <p>このページは近日公開予定です。<br>今しばらくお待ちください。</p>
            <a href="/" class="btn btn__gradient-blue btn__gradient-blue--center">TOPへ戻る</a>
        </section>
    </main>
</body>
