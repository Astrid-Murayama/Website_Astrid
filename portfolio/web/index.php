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
        <section class="pf helper__wrapper-basic">
            <p class="section__title-en">PORTFOLIO</p>
            <h2 class="section__title">web制作実績</h2>
            <p class="section__summary">過去の制作させていただいた作品をご紹介します。<br>
            ※一部、学修中の架空のサイトも含まれます。</p>

            <ul class="pf-container">
                <li>
                    <a href="/portfolio/web/alphaolive.jp/index.php">
                        <div class="pf-img-container">
                            <img src="/img/service/portfolio/グループ 385.png" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社チラックス様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/web/alphapeach.co.jp/index.php">
                        <div class="pf-img-container">
                            <img src="/img/service/portfolio/グループ 384.png" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社リードコム様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/web/alphaberry-group.com:home-nursing/index.php">
                        <div class="pf-img-container">
                            <img src="/img/service/portfolio/グループ 393.png" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/web/alphaberry-group.com:house-support/index.php">
                        <div class="pf-img-container">
                            <img src="/img/service/portfolio/グループ 388.png" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/web/alphaberry-group.com:housemaid/index.php">
                        <div class="pf-img-container">
                            <img src="/img/service/portfolio/グループ 387.png" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/web/alphaberry-group.com:senior-support/index.php">
                        <div class="pf-img-container">
                            <img src="/img/service/portfolio/グループ 391.png" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/web/alphaberry-group.com:home-care/index.php">
                        <div class="pf-img-container">
                            <img src="/img/service/portfolio/グループ 392.png" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/web/alphaberry-group.com:cooking/index.php">
                        <div class="pf-img-container">
                            <img src="/img/service/portfolio/グループ 389.png" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/web/alphaberry-group.com:cleaning/index.php">
                        <div class="pf-img-container">
                            <img src="/img/service/portfolio/グループ 390.png" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/web/senior-alphaberry.com/index.php">
                        <div class="pf-img-container">
                            <img src="/img/service/portfolio/グループ 383.png" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/web/kaseifu-alphaberry.com/index.php">
                        <div class="pf-img-container">
                            <img src="/img/service/portfolio/グループ 382.png" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
            </ul>
        </section>

        <!-- CTAセクション -->
        <?php include($webRoot . '/inc/head/navigation/contact.php'); ?>



    </main>
</body>
