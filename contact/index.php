<?php
// 初期化
$errors = [];
$values = [
    'name' => '',
    'kana' => '',
    'email' => '',
    'email_confirm' => '',
    'message' => ''
];

// POSTされたときの処理
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // サニタイズ
    foreach ($values as $key => $val) {
        $values[$key] = htmlspecialchars(trim($_POST[$key] ?? ''), ENT_QUOTES);
    }

    // バリデーション
    if ($values['name'] === '') {
        $errors['name'] = 'お名前を入力してください';
    }

    if ($values['kana'] === '' || !preg_match('/^[ァ-ヶー　]+$/u', $values['kana'])) {
        $errors['kana'] = 'フリガナを正しく入力してください（全角カタカナ）';
    }

    if (!filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = '正しいメールアドレスを入力してください';
    }

    if ($values['email'] !== $values['email_confirm']) {
        $errors['email_confirm'] = 'メールアドレスが一致しません';
    }

    if ($values['message'] === '') {
        $errors['message'] = 'お問い合わせ内容を入力してください';
    }

    // メール送信処理（例）
    if (empty($errors)) {
        $to = 'your-email@example.com';
        $subject = 'お問い合わせがありました';
        $body = <<<EOT
お名前: {$values['name']}
フリガナ: {$values['kana']}
メールアドレス: {$values['email']}
お問い合わせ内容:
{$values['message']}
EOT;

        $headers = "From: {$values['email']}\r\n";

        if (mb_send_mail($to, $subject, $body, $headers)) {
            echo '<p class="success">送信完了しました。ありがとうございます。</p>';
            $values = array_fill_keys(array_keys($values), ''); // フォームをリセット
        } else {
            echo '<p class="error">送信に失敗しました。時間をおいて再度お試しください。</p>';
        }
    }
}
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
                <div class="contact__inner">
                    <h1>CONTACT ME</h1>
                    <p class="contact__txt">ご相談やお見積りは無料で承っております。気になった点やご質問のみでも構いませんので、お気軽にお問い合わせください。<br>新規のご依頼はもちろん、既存のデザインやWebサイトの改善、アフターフォローなどについても対応いたします。</p>

                    <form method="post" action="confirm.php">
                        <ul>
                            <li>
                                <input type="text" name="name" value="<?= $values['name'] ?>">
                                <label>お名前</label>
                                <?php if (isset($errors['name'])) echo "<p class='error'>{$errors['name']}</p>"; ?>
                            </li>
                            <li>
                                <input type="text" name="kana" value="<?= $values['kana'] ?>">
                                <label>フリガナ</label>
                                <?php if (isset($errors['kana'])) echo "<p class='error'>{$errors['kana']}</p>"; ?>
                            </li>
                            <li>
                                <input type="email" name="email" value="<?= $values['email'] ?>">
                                <label>メールアドレス</label>
                                <?php if (isset($errors['email'])) echo "<p class='error'>{$errors['email']}</p>"; ?>
                            </li>
                            <li>
                                <input type="email" name="email_confirm" value="<?= $values['email_confirm'] ?>">
                                <label>メールアドレス（確認用）</label>
                                <?php if (isset($errors['email_confirm'])) echo "<p class='error'>{$errors['email_confirm']}</p>"; ?>
                            </li>
                            <li>
                                <textarea name="message"><?= $values['message'] ?></textarea>
                                <label>お問い合わせ内容</label>
                                <?php if (isset($errors['message'])) echo "<p class='error'>{$errors['message']}</p>"; ?>
                            </li>
                        </ul>
                        <button type="submit">入力内容の確認</button>
                    </form>

                </div>

            </div>
        </section>

        <!-- モーダルウィンドウ -->
        <?php include($webRoot . '/inc/modal.php'); ?>

    </main>

</body>
