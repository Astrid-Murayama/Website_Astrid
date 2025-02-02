<!DOCTYPE html>
<html lang="ja">

<head>

    <!-- 定義済みPHP変数の読み込み -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/variable/global.php'); ?>

    <!-- 全ページ共通の要素を読み込み -->
    <?php require_once($webRoot . '/inc/head/common.php'); ?>

    <!-- ページ固有のメタデータ設定 -->

    <!-- 全ページ共通の要素を読み込み -->
    
				

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

        <!-- HEROセクション -->
        <section class="web-hero pf-project-hero pf-project-hero--senior-lp">
            <div class="pf-project-hero__container">
                <div class="pf-project-hero__inner">
                    <p>portfolio</p>
                    <h1>株式会社クラルスワン様</h1>
                </div>
            </div>
        </section>

        <!-- パンくずリスト -->
        <ol class="breadcrumb">
            <li><a href="/">TOP</a></li>
            <li>ホームページ制作</li>
            <li>株式会社クラルスワン様</li>
        </ol>

        <div class="pf-img__pc-none pc-none">
            <img src="/img/service/portfolio/web/senior-alphaberry.com/responsive-image_senior-lp.png" alt="">            
        </div>

        <!-- ポートフォリオ本文 -->
        <section class="pf-project-body helper__wrapper-basic">

            <div class="pf-project-body__img-container">
                <img src="/img/service/portfolio/web/senior-alphaberry.com/responsive-image_senior-lp.png" alt="" class="sp-none">
                <img src="/img/service/portfolio/web/senior-alphaberry.com/pc-preview_senior-lp.jpg" alt="">
                <img src="/img/service/portfolio/web/senior-alphaberry.com/sp-preview_senior-lp.jpg" alt="">
                <img src="/img/service/portfolio/web/senior-alphaberry.com/tab-preview_senior-lp.jpg" alt="">

                <div class="pf-project-body__btn-container">
                    <a class="btn pf-project-body__btn pf-project-body__btn--1" href="/portfolio/index.php">制作実績一覧へ戻る</a>
                    <a class="btn pf-project-body__btn pf-project-body__btn--2" href="/">TOPへ戻る</a>
                </div>

            </div>

            <div class="pf-project-body__txt-container">
                <table>
                    <tbody>
                        <tr>
                            <th>会社名</th>
                            <td>株式会社クラルスワン様</td>
                        </tr>
                        <tr>
                            <th>カテゴリー</th>
                            <td>ランディングページ</td>
                        </tr>
                        <tr>
                            <th>業種</th>
                            <td>高齢者支援事業</td>
                        </tr>
                        <tr>
                            <th>地域</th>
                            <td>札幌市</td>
                        </tr>
                        <tr>
                            <th>URL</th>
                            <td><a href="https://www.senior-alphaberry.com/" target="blank">https://www.senior-alphaberry.com/</a></td>
                        </tr>
                        <tr>
                            <th>担当内容</th>
                            <td>ディレクション、ライティング、デザイン、コーディング</td>
                        </tr>
                        <tr>
                            <th>サイト概要</th>
                            <td>　高齢者の日常生活をサポートするサービスのLPを制作しました。ブラウンを基調に、温かさと信頼感を感じさせるデザインを採用しました。高齢者やそのご家族に向けた落ち着きのある色調で、安心感を強調しました。</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </section>


        <!-- CTAセクション -->
        <?php include($webRoot . '/inc/head/navigation/contact.php'); ?>

    </main>
</body>

