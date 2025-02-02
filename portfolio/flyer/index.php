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
            <h2 class="section__title">フライヤー制作実績</h2>
            <p class="section__summary">過去の制作させていただいた作品をご紹介します。<br>
            ※一部、学修中の架空のサイトも含まれます。</p>

            <ul class="pf-container">
                <li>
                    <a href="/portfolio/flyer/cafe-bivouac/index.php">
                        <div class="pf-img-container pf-img-container--flyer">
                            <img src="/img/service/about-flyer/works/bivouac_flyer.jpg" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>カフェBivouac様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/flyer/sample_bouldering/index.php">
                        <div class="pf-img-container pf-img-container--flyer">
                            <img src="/img/service/about-flyer/works/flyer_bouldering.jpg" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>デザインサンプル</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/flyer/clarusone_senior-01/index.php">
                        <div class="pf-img-container pf-img-container--flyer">
                            <img src="/img/service/about-flyer/works/document_care20230208_page-0001.jpg" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/flyer/clarusone_cooking/index.php">
                        <div class="pf-img-container pf-img-container--flyer">
                            <img src="/img/service/about-flyer/works/料理代行LP要約_page-0001.jpg" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/flyer/clarusone_group/index.php">
                        <div class="pf-img-container pf-img-container--flyer">
                            <img src="/img/service/about-flyer/works/document_alphagroup_page-0001.jpg" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/flyer/clarusone_company/index.php">
                        <div class="pf-img-container pf-img-container--flyer">
                            <img src="/img/service/about-flyer/works/確定_サ高住_page-0001.jpg" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/flyer/clarusone_docter/index.php">
                        <div class="pf-img-container pf-img-container--flyer">
                            <img src="/img/service/about-flyer/works/資料_医者向け_page-0001.jpg" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/flyer/clarusone_general/index.php">
                        <div class="pf-img-container pf-img-container--flyer">
                            <img src="/img/service/about-flyer/works/資料_一般_page-0001.jpg" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/flyer/olive/index.php">
                        <div class="pf-img-container pf-img-container--flyer">
                            <img src="/img/service/about-flyer/works/オリーブ＿資料_page-0001.jpg" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社チラックス様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/flyer/clarusone_senior-02/index.php">
                        <div class="pf-img-container pf-img-container--flyer">
                            <img src="/img/service/about-flyer/works/サービス概要_page-0001.jpg" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/flyer/clarusone_senior-service/index.php">
                        <div class="pf-img-container pf-img-container--flyer">
                            <img src="/img/service/about-flyer/works/サービス案内_page-0001.jpg" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/flyer/clarusone_senior-credit/index.php">
                        <div class="pf-img-container pf-img-container--flyer">
                            <img src="/img/service/about-flyer/works/credit.jpg" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/flyer/clarusone_center/index.php">
                        <div class="pf-img-container pf-img-container--flyer">
                            <img src="/img/service/about-flyer/works/【修】営業資料 ＿デザイン_page-0001 (1).jpg" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>株式会社クラルスワン様</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/flyer/sample_mountain/index.php">
                        <div class="pf-img-container pf-img-container--flyer">
                            <img src="/img/service/about-flyer/works/Flyer_mountain.jpg" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>デザインサンプル</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/flyer/sample_seminer/index.php">
                        <div class="pf-img-container pf-img-container--flyer">
                            <img src="/img/service/about-flyer/works/Flyer_seminar.jpg" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>デザインサンプル</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/flyer/sample_sweet/index.php">
                        <div class="pf-img-container pf-img-container--flyer">
                            <img src="/img/service/about-flyer/works/Flyer_sweets.jpg" alt="">
                            <div class="mask">
                                <p class="caption">詳しく見る</p>
                            </div>
                        </div>
                        <h3>デザインサンプル</h3>
                    </a>
                </li>
                <li>
                    <a href="/portfolio/flyer/clarusone_housemaid/index.php">
                        <div class="pf-img-container pf-img-container--flyer">
                            <img src="/img/service/about-flyer/works/【最新】家政婦LP_線なし_page-0001.jpg" alt="">
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
