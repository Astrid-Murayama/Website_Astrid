<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['form'] = $_POST;
} elseif (!isset($_SESSION['form'])) {
    header('Location: input.php');
    exit;
}

$form = $_SESSION['form'];
?>
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
                <div class="contact__inner contact__confirm">
                    <h1>CONTACT ME</h1>

                    <dl>
                        <dt>お名前</dt>
                        <dd><?= htmlspecialchars($form['name'], ENT_QUOTES) ?></dd>
                        <dt>フリガナ</dt>
                        <dd><?= htmlspecialchars($form['kana'], ENT_QUOTES) ?></dd>
                        <dt>メールアドレス</dt>
                        <dd><?= htmlspecialchars($form['email'], ENT_QUOTES) ?></dd>
                        <dt>お問い合わせ内容</dt>
                        <dd><?= nl2br(htmlspecialchars($form['message'], ENT_QUOTES)) ?></dd>
                    </dl>

                    <div class="contact__confirm-btn">
                        <form action="input.php" method="post">
                            <?php foreach ($form as $key => $val): ?>
                            <input type="hidden" name="<?= $key ?>" value="<?= htmlspecialchars($val, ENT_QUOTES) ?>">
                            <?php endforeach; ?>
                            <button type="submit">修正する</button>
                        </form>

                        <form action="send.php" method="post">
                            <button type="submit">送信する</button>
                        </form>
                    </div>

                </div>

            </div>
        </section>

    </main>
    <!-- モーダルウィンドウ -->
    <?php include($webRoot . '/inc/modal.php'); ?>

</body>
