<!DOCTYPE html>
<html lang="ja">

<head>

    <!-- 定義済みPHP変数の読み込み -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/variable/global.php'); ?>

    <!-- 全ページ共通の要素を読み込み -->
    <?php require_once($webRoot . '/inc/head/common.php'); ?>

    <!-- ページ固有のメタデータ設定 -->

    <!-- 全ページ共通の要素を読み込み -->
    
    <!-- JavaScriptファイルの読み込み -->
	<!-- ajaxzip3.jsは、HTML内のonKeyUpイベントよりも先に読み込ませる必要があり、deferをかけるとバグが発生するので注意です。 -->
    <script src="/js/form/ajaxzip3.js" async></script>
	<script type="module" src="/js/form/form.js"></script>
	<script type="module" src="/js/form/autokana.js"></script>

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

    <!-- パンくずリスト -->
    <ol class="breadcrumb">
        <li><a href="">TOP</a></li>
        <li>お問い合わせ</li>
        <li>入力内容の確認</li>
        <li>送信完了</li>
    </ol>

    <main>
        <section class="thanks">
            <div class="thanks-container">


                <div class="thanks-img-container">
                    <img src="/img/contact/22633428.png" alt="">
                </div>
                <h1>送信が完了しました。</h1>
                <p class="thanks-txt-return">お問い合わせいただきありがとうございました。<br>内容を確認し、ご連絡いたします。</p>
                <p class="thanks-txt-mail">折り返しがない場合はお手数ですが、<br><a href="">cfilorvy0325@icloud.com</a>
                までメールをお送りください。</p>
                <a class="btn btn__gradient-blue btn__gradient-blue--with-arrow" href="/">TOPへ戻る</a>

            </div>
        </section>
    </main>


</body>
