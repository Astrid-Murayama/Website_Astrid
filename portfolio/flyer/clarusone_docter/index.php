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
        <section class="web-hero pf-project-hero pf-project-hero--clarusone-docter">
            <div class="pf-project-hero__container">
                <div class="pf-project-hero__inner">
                    <p>portfolio</p>
                    <h1>クラルスワン様</h1>
                </div>
            </div>
        </section>

        <!-- パンくずリスト -->
        <ol class="breadcrumb">
            <li><a href="/">TOP</a></li>
            <li><a href="/portfolio/flyer/index.php">チラシ制作</a></li>
            <li>クラルスワン様</li>
        </ol>

        <!-- ポートフォリオ本文 -->
        <section class="pf-project-body helper__wrapper-basic">

            <div class="pf-project-body__img-container">
                <img src="/img/service/about-flyer/works/資料_医者向け_page-0001.jpg" alt="">

                <div class="pf-project-body__btn-container">
                    <a class="btn pf-project-body__btn pf-project-body__btn--1" href="/portfolio/flyer/index.php">制作実績一覧へ戻る</a>
                    <a class="btn pf-project-body__btn pf-project-body__btn--2" href="/">TOPへ戻る</a>
                </div>

            </div>

            <div class="pf-project-body__txt-container">
                <table>
                    <tbody>
                        <tr>
                            <th>会社名</th>
                            <td>クラルスワン様</td>
                        </tr>
                        <tr>
                            <th>カテゴリー</th>
                            <td>A4チラシ</td>
                        </tr>
                        <tr>
                            <th>業種</th>
                            <td>飲食店</td>
                        </tr>
                        <tr>
                            <th>地域</th>
                            <td>札幌市</td>
                        </tr>
                        <tr>
                            <th>担当内容</th>
                            <td>ディレクション、ライティング、デザイン</td>
                        </tr>
                        <tr>
                            <th>チラシ概要</th>
                            <td>　法人オフィスや一般家庭を対象とした清掃サービスのサイトを制作しました。青を基調とした配色を採用し、清潔感や信頼感を与えるデザインに仕上げました。また、シンプルなレイアウトで視認性を高め、ユーザーが必要な情報を素早く見つけられるよう工夫しました。</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </section>


        <!-- CTAセクション -->
        <?php include($webRoot . '/inc/head/navigation/contact.php'); ?>

    </main>
</body>

