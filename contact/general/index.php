<!DOCTYPE html>
<html lang="ja">

<head>

    <!-- 定義済みPHP変数の読み込み -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/variable/global.php'); ?>

    <!-- 全ページ共通の要素を読み込み -->
    <?php require_once($webRoot . '/inc/head/common.php'); ?>

    <!-- 定義済みPHP変数の読み込み -->

    <!-- ページ固有のメタデータ設定 -->

    <!-- 全ページ共通の要素を読み込み -->
    
    <!-- 外部プラグインのJavaScriptを読み込み（jQueryベースのため、jQueryを先に読み込む必要あり） -->

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
    </ol>

    <main>
        <section class="contact">
            <form method="post" action="/contact/general/confirmation.php" id="contact-form">
                <ul class="contact__container">

                    <!-- JavaScriptで画像を自動切り替え -->
                    <li class="contact__service-select">

                        <fieldset>

                            <legend>ご検討中のサービスを<br>選択ください。</legend>

                            <div class="contact__service-select-img-box"><img id="service-img" src="/img/service/page_top/service/img_web.png" alt=""></div>

                            <div class="contact__service-select-box">
                                <label for="web-site">
                                    <input type="radio"  name="service" id="web-site" value="ウェブサイト制作">ウェブサイト制作
                                </label>
                                <label for="flyer">
                                    <input type="radio" name="service" id="flyer" value="フライヤー制作">フライヤー制作
                                </label>
                                <label for="banner">
                                    <input type="radio" name="service" id="banner" value="バナー制作">バナー制作
                                </label>
                                <label for="other">
                                    <input type="radio" name="service" id="other" value="その他">その他
                                </label>
                                <div class="contact-form__error-container"></div>
                            </div>

                        </fieldset>
                        
                    </li>

                    <li class="contact-form__main">

                        <h1>お問い合わせ</h1>
                        <ul class="contact-form__main-note-box">
                            <li>・お返事を差し上げるまでにお時間を頂戴する場合がございますので、あらかじめご了承ください。</li>
                            <li>・ご連絡先に誤りがある場合は回答しかねますのでご了承ください。</li>
                            <li>・システムのトラブルによるメールの未着、遅延、その他の障害につきまして、弊社としては一切の責任を負いかねますので、あらかじめご了承ください。</li>
                            <li>・お返事のメールは個人宛にお送りするものであり、一部または全部を転載、二次利用することはご遠慮ください。</li>
                        </ul>

                        <!-- <ul class="contact-form__items">

                            <li class="contact-form__item">
                                <label for="">
                                    <span class="contact-form__requirement contact-form__requirement--required">必須</span>
                                    お名前
                                </label>
                                <input type="text" id="name" class="" name="お名前" placeholder="例)札幌花子" autocomplete="name" required>
                                <div class="contact-form__error-container"></div>
                            </li>

                            <li class="contact-form__item">
                                <label for="">
                                    <span class="contact-form__requirement contact-form__requirement--required">必須</span>
                                    ふりがな
                                </label>
                                <input type="text" id="your-furigana" class="" name="お名前" placeholder="例)さっぽろはなこ" autocomplete="your-furigana">
                                <div class="contact-form__error-container"></div>
                            </li>

                            <li class="contact-form__item">
                                <label for="">
                                    <span class="contact-form__requirement">任意</span>
                                    法人名
                                </label>
                                <input type="text" id="name" class="" name="お名前" placeholder="例)株式会社札幌" autocomplete="name">
                                <div class="contact-form__error-container"></div>
                            </li>

                            <li class="contact-form__item">
                                <label for="">
                                    <span class="contact-form__requirement">任意</span>
                                    ふりがな
                                </label>
                                <input type="text" id="name" class="" name="お名前" placeholder="例)かぶしきがいしゃさっぽろ" autocomplete="name">
                                <div class="contact-form__error-container"></div>
                            </li>

                            <li class="contact-form__item">
                                <label for="">
                                    <span class="contact-form__requirement contact-form__requirement--required">必須</span>
                                    メールアドレス
                                </label>
                                <input type="text" id="email" class="" name="メールアドレス" placeholder="例)sample@.com" autocomplete="email">
                                <div class="contact-form__error-container"></div>
                            </li>

                            <li class="contact-form__item">
                                <label for="">
                                    <span class="contact-form__requirement contact-form__requirement--required">必須</span>
                                    メールアドレス（確認用）
                                </label>
                                <input type="text" id="email-confirmation" class="" name="メールアドレス（確認用）" placeholder="例)sample@.com" autocomplete="email">
                                <div class="contact-form__error-container"></div>
                            </li>

                            <li class="contact-form__item">
                                <label for="">
                                    <span class="contact-form__requirement">任意</span>
                                    電話番号
                                </label>
                                <input type="text" id="name" class="" name="お名前" placeholder="例)000-0000-0000" autocomplete="name">
                                <div class="contact-form__error-container"></div>
                            </li>

                            <li class="contact-form__item">
                                <label for="">
                                    <span class="contact-form__requirement contact-form__requirement--required">必須</span>
                                    ご相談内容
                                </label>
                                <textarea type="text" id="name" class="" name="お名前" placeholder="こちらにご記入ください。" autocomplete="name"></textarea>
                                <div class="contact-form__error-container"></div>
                            </li>

                        </ul> -->
                        <ul class="contact-form__items">
                            <li class="contact-form__item">
                                <label for="name">
                                    <span class="contact-form__requirement contact-form__requirement--required">必須</span>
                                    お名前
                                </label>
                                <input type="text" id="name" name="name" placeholder="例)札幌花子" autocomplete="name">
                                <div class="contact-form__error-container"></div>
                            </li>

                            <li class="contact-form__item">
                                <label for="furigana">
                                    <span class="contact-form__requirement contact-form__requirement--required">必須</span>
                                    ふりがな
                                </label>
                                <input type="text" id="furigana" name="furigana" placeholder="例)さっぽろはなこ" autocomplete="off">
                                <div class="contact-form__error-container"></div>
                            </li>

                            <li class="contact-form__item">
                                <label for="company-name">
                                    <span class="contact-form__requirement">任意</span>
                                    法人名
                                </label>
                                <input type="text" id="company-name" name="company-name" placeholder="例)株式会社札幌" autocomplete="organization">
                                <div class="contact-form__error-container"></div>
                            </li>

                            <li class="contact-form__item">
                                <label for="company-furigana">
                                    <span class="contact-form__requirement">任意</span>
                                    法人名ふりがな
                                </label>
                                <input type="text" id="company-furigana" name="company-furigana" placeholder="例)かぶしきがいしゃさっぽろ" autocomplete="off">
                                <div class="contact-form__error-container"></div>
                            </li>

                            <li class="contact-form__item">
                                <label for="email">
                                    <span class="contact-form__requirement contact-form__requirement--required">必須</span>
                                    メールアドレス
                                </label>
                                <input type="email" id="email" name="email" placeholder="例)sample@example.com" autocomplete="email">
                                <div class="contact-form__error-container"></div>
                            </li>

                            <li class="contact-form__item">
                                <label for="email-confirmation">
                                    <span class="contact-form__requirement contact-form__requirement--required">必須</span>
                                    メールアドレス（確認用）
                                </label>
                                <input type="email" id="email-confirmation" name="email-confirmation" placeholder="例)sample@example.com" autocomplete="email">
                                <div class="contact-form__error-container"></div>
                            </li>

                            <li class="contact-form__item">
                                <label for="phone">
                                    <span class="contact-form__requirement">任意</span>
                                    電話番号
                                </label>
                                <input type="tel" id="phone" name="phone" placeholder="例)000-0000-0000" autocomplete="tel">
                                <div class="contact-form__error-container"></div>
                            </li>

                            <li class="contact-form__item">
                                <label for="inquiry">
                                    <span class="contact-form__requirement contact-form__requirement--required">必須</span>
                                    ご相談内容
                                </label>
                                <textarea id="inquiry" name="inquiry" placeholder="こちらにご記入ください。" autocomplete="off"></textarea>
                                <div class="contact-form__error-container"></div>
                            </li>
                        </ul>

                        <button type="submit">入力内容の確認</button>

                    </li>

                </ul>
            </form>
        </section>

    </main>

</body>