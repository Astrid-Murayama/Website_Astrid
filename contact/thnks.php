<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- 定義済みPHP変数の読み込み -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/function/global.php'); ?>

    <!-- 全ページ共通の要素を読み込み -->
    <?php require_once($webRoot . '/inc/head/common.php'); ?>

    <script type="module" src="<?= cacheBust("/js/form.js") ?>" defer></script>

</head>
<body>

    <!-- ヘッダーセクション -->
    <?php include($webRoot . '/inc/header.php'); ?>

    <main>

        <!-- 固定CTA -->
        <?php include($webRoot . '/inc/fixed-cta.php'); ?>

        <section class="contact">
            <div class="contact__container">
                <div class="contact__inner contact__thanks">
                    <h1>CONTACT ME</h1>
                    <p>お問い合わせありがとうございます</p>
                    <p>内容を確認の上、担当者よりご連絡いたします。</p>
                    <a href="/" class="btn btn--with-offset-border">
                        <span>TOPへ戻る</span>
                        <span class="btn__arrow"></span>
                    </a>
                </div>

            </div>
        </section>

    </main>
    <!-- モーダルウィンドウ -->
    <?php include($webRoot . '/inc/modal.php'); ?>

</body>
