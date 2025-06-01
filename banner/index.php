<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- 定義済みPHP変数の読み込み -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/function/global.php'); ?>

    <!-- 全ページ共通の要素を読み込み -->
    <?php require_once($webRoot . '/inc/head/common.php'); ?>

    <script type="module" src="<?= cacheBust("/js/portfolio.js") ?>" defer></script>

</head>
<body>

    <div class="animation-bg">
        <div class="animation-bg-element"></div>
        <div class="animation-bg-element"></div>
        <div class="animation-bg-element"></div>
        <div class="animation-bg-element"></div>
        <div class="animation-bg-element"></div>
        <div class="animation-bg-element"></div>
        <div class="animation-bg-element"></div>
        <div class="animation-bg-element"></div>
        <div class="animation-bg-element"></div>
        <div class="animation-bg-element"></div>
    </div>

    <!-- ヘッダーセクション -->
    <?php include($webRoot . '/inc/header.php'); ?>

    <main>

        <!-- 固定CTA -->
        <?php include($webRoot . '/inc/fixed-cta.php'); ?>

        <section class="portfolio portfolio--banner horizontal-scroll">
            <div class="portfolio__container">

                <div class="portfolio__head">

                    <div class="portfolio__head-info">
                        <ul>
                            <li>
                                <a href="/web/index.php">Web</a>
                            </li>
                            <li>
                                <a href="/flyer/index.php">FLYER</a>
                            </li>
                            <li>
                                <a href="/banner/index.php">BANNER</a>
                            </li>
                        </ul>
                        <p>FLYER PORTFOLIO</p>
                        <h1>FLYER制作実績</h1>
                    </div>

                    <div class="portfolio__head-arrow">
                        <button class="btn-move" type="button">
                            <span class="arrow-left"></span>
                        </button>
                        <img src="/img/web/astrid_circle.png" alt="" class="rotate-img display-none--tab">
                    </div>

                </div>

                <!-- モーダル風に拡大 -->
                <!-- <div class="modal-overlay" style="display: none;">
                    <div class="modal-content">
                        <img id="modal-img" src="" alt="拡大画像">
                        <button class="close-modal"><span>×</span>閉じる</button>
                    </div>
                </div> -->

                <div class="portfolio__body portfolio__banner-body">
                    <ul>
                        <li><img src="/img/banner/banner_cafe-bivouac.webp" alt=""></li>
                        <li><img src="/img/banner/banner_cooking-lp.webp" alt=""></li>
                        <li><img src="/img/banner/banner_demo_shoes.webp" alt=""></li>
                        <li><img src="/img/banner/banner_dx-1.webp" alt=""></li>
                        <li><img src="/img/banner/banner_vegetables.webp" alt=""></li>
                        <li><img src="/img/banner/banner_demo_cafe.webp" alt=""></li>
                        <li><img src="/img/banner/banner_line.webp" alt=""></li>
                        <li><img src="/img/banner/banner_instagram.webp" alt=""></li>
                        <li><img src="/img/banner/banner_house-support.webp" alt=""></li>
                        <li><img src="/img/banner/banner_senior-lp.webp" alt=""></li>
                        <li><img src="/img/banner/banner_housemaid.webp" alt=""></li>
                        <li><img src="/img/banner/banner_house-sale.webp" alt=""></li>
                        <li><img src="/img/banner/banner_job-change.webp" alt=""></li>
                        <li><img src="/img/banner/banner_father-day.webp" alt=""></li>
                        <li><img src="/img/banner/banner_housemaid-site.webp" alt=""></li>
                        <li><img src="/img/banner/banner_sale.webp" alt=""></li>
                        <li><img src="/img/banner/banner_demo_clothes.webp" alt=""></li>
                        <li><img src="/img/banner/banner_dx-2.webp" alt=""></li>
                    </ul>
                </div>

                <div class="portfolio__scrollbar display-none--tab">
                    <p>SCROLL</p>
                    <span></span>
                </div>


            </div>


        </section>
        <!-- モーダルウィンドウ -->
        <?php include($webRoot . '/inc/modal.php'); ?>

    </main>
</body>
