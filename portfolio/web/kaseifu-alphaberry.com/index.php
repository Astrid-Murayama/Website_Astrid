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
        <section class="web-hero pf-project-hero pf-project-hero--housemaid-lp">
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
            <img src="/img/service/portfolio/web/kaseifu-alphaberry.com/responsive-image_housemaid-lp.png" alt="">            
        </div>

        <!-- ポートフォリオ本文 -->
        <section class="pf-project-body helper__wrapper-basic">

            <div class="pf-project-body__img-container">
                <img src="/img/service/portfolio/web/kaseifu-alphaberry.com/responsive-image_housemaid-lp.png" alt="" class="sp-none">
                <img src="/img/service/portfolio/web/kaseifu-alphaberry.com/pc-preview_housemaid-lp.jpg" alt="">
                <img src="/img/service/portfolio/web/kaseifu-alphaberry.com/sp-preview_housemaid-lp.jpg" alt="">
                <img src="/img/service/portfolio/web/kaseifu-alphaberry.com/tab-preview_housemaid-lp.jpg" alt="">

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
                            <td>家政婦派遣</td>
                        </tr>
                        <tr>
                            <th>地域</th>
                            <td>札幌市</td>
                        </tr>
                        <tr>
                            <th>URL</th>
                            <td><a href="https://kaseifu-alphaberry.com/" target="blank">https://kaseifu-alphaberry.com/</a></td>
                        </tr>
                        <tr>
                            <th>担当内容</th>
                            <td>ディレクション、ライティング、デザイン</td>
                        </tr>
                        <tr>
                            <th>サイト概要</th>
                            <td>　家政婦サービスのプロモーション用LPの原稿とワイヤーフレームを作成しました。サービスの信頼性を伝えるため、ユーザー目線での構成と情報整理を重視しました。原稿はターゲット層を意識して親しみやすく、具体的なベネフィットを強調する内容とし、サービスの流れや特徴を視覚的に表現できるワイヤーフレームを設計しました。</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </section>


        <!-- CTAセクション -->
        <?php include($webRoot . '/inc/head/navigation/contact.php'); ?>

    </main>
</body>

