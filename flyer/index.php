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

        <section class="portfolio portfolio--flyer horizontal-scroll">
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
                <div class="modal-overlay" style="display: none;">
                    <div class="modal-content">
                        <img id="modal-img" src="" alt="拡大画像">
                        <button class="close-modal"><span>×</span>閉じる</button>
                    </div>
                </div>

                <div class="portfolio__body portfolio__flyer-body">
                    <ul>
                        <li class="portfolio-inner">
                            <div class="portfolio-img">
                                <img src="/img/flyer/flyer_senior-support-v1.webp" alt="">
                                <p class="txt-hide">拡大する</p>
                            </div>
                            <div class="info-box">
                                <p class="category">A4チラシ</p>
                                <p class="company-name">株式会社○○○○</p>
                                <p class="work-info text-indent">ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。</p>
                            </div>
                        </li>
                        <li class="portfolio-inner">
                            <div class="portfolio-img">
                                <img src="/img/flyer/flyer_demo_bouldering.webp" alt="">
                                <p class="txt-hide">拡大する</p>
                            </div>
                            <div class="info-box">
                                <p class="category">A4チラシ</p>
                                <p class="company-name">株式会社○○○○</p>
                                <p class="work-info text-indent">ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。</p>
                            </div>
                        </li>
                        <li class="portfolio-inner">
                            <div class="portfolio-img">
                                <img src="/img/flyer/flyer_summary_cooking.webp" alt="">
                                <p class="txt-hide">拡大する</p>
                            </div>
                            <div class="info-box">
                                <p class="category">A4チラシ</p>
                                <p class="company-name">株式会社○○○○</p>
                                <p class="work-info text-indent">ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。</p>
                            </div>
                        </li>
                        <li class="portfolio-inner">
                            <div class="portfolio-img">
                                <img src="/img/flyer/flyer_about-company.webp" alt="">
                                <p class="txt-hide">拡大する</p>
                            </div>
                            <div class="info-box">
                                <p class="category">A4チラシ</p>
                                <p class="company-name">株式会社○○○○</p>
                                <p class="work-info text-indent">ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。</p>
                            </div>
                        </li>
                        <li class="portfolio-inner">
                            <div class="portfolio-img">
                                <img src="/img/flyer/flyer_summary_alphaberry.webp" alt="">
                                <p class="txt-hide">拡大する</p>
                            </div>
                            <div class="info-box">
                                <p class="category">A4チラシ</p>
                                <p class="company-name">株式会社○○○○</p>
                                <p class="work-info text-indent">ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。</p>
                            </div>
                        </li>
                        <li class="portfolio-inner">
                            <div class="portfolio-img">
                                <img src="/img/flyer/flyer_demo_exhibition.webp" alt="">
                                <p class="txt-hide">拡大する</p>
                            </div>
                            <div class="info-box">
                                <p class="category">A4チラシ</p>
                                <p class="company-name">株式会社○○○○</p>
                                <p class="work-info text-indent">ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。</p>
                            </div>
                        </li>
                        <li class="portfolio-inner">
                            <div class="portfolio-img">
                                <img src="/img/flyer/flyer_summary_for-docter.webp" alt="">
                                <p class="txt-hide">拡大する</p>
                            </div>
                            <div class="info-box">
                                <p class="category">A4チラシ</p>
                                <p class="company-name">株式会社○○○○</p>
                                <p class="work-info text-indent">ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。</p>
                            </div>
                        </li>
                        <li class="portfolio-inner">
                            <div class="portfolio-img">
                                <img src="/img/flyer/flyer_summary_what-we-do.webp" alt="">
                                <p class="txt-hide">拡大する</p>
                            </div>
                            <div class="info-box">
                                <p class="category">A4チラシ</p>
                                <p class="company-name">株式会社○○○○</p>
                                <p class="work-info text-indent">ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。</p>
                            </div>
                        </li>
                        <li class="portfolio-inner">
                            <div class="portfolio-img">
                                <img src="/img/flyer/flyer_demo_sweets.webp" alt="">
                                <p class="txt-hide">拡大する</p>
                            </div>
                            <div class="info-box">
                                <p class="category">A4チラシ</p>
                                <p class="company-name">株式会社○○○○</p>
                                <p class="work-info text-indent">ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。</p>
                            </div>
                        </li>
                        <li class="portfolio-inner">
                            <div class="portfolio-img">
                                <img src="/img/flyer/flyer_senior-support-v2.webp" alt="">
                                <p class="txt-hide">拡大する</p>
                            </div>
                            <div class="info-box">
                                <p class="category">A4チラシ</p>
                                <p class="company-name">株式会社○○○○</p>
                                <p class="work-info text-indent">ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。</p>
                            </div>
                        </li>
                        <li class="portfolio-inner">
                            <div class="portfolio-img">
                                <img src="/img/flyer/flyer_cafe.webp" alt="">
                                <p class="txt-hide">拡大する</p>
                            </div>
                            <div class="info-box">
                                <p class="category">A4チラシ</p>
                                <p class="company-name">株式会社○○○○</p>
                                <p class="work-info text-indent">ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。</p>
                            </div>
                        </li>
                        <li class="portfolio-inner">
                            <div class="portfolio-img">
                                <img src="/img/flyer/flyer_for-facility.webp" alt="">
                                <p class="txt-hide">拡大する</p>
                            </div>
                            <div class="info-box">
                                <p class="category">A4チラシ</p>
                                <p class="company-name">株式会社○○○○</p>
                                <p class="work-info text-indent">ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。</p>
                            </div>
                        </li>
                        <li class="portfolio-inner">
                            <div class="portfolio-img">
                                <img src="/img/flyer/flyer_summary_alphaolive.webp" alt="">
                                <p class="txt-hide">拡大する</p>
                            </div>
                            <div class="info-box">
                                <p class="category">A4チラシ</p>
                                <p class="company-name">株式会社○○○○</p>
                                <p class="work-info text-indent">ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。</p>
                            </div>
                        </li>
                        <li class="portfolio-inner">
                            <div class="portfolio-img">
                                <img src="/img/flyer/flyer_credit.webp" alt="">
                                <p class="txt-hide">拡大する</p>
                            </div>
                            <div class="info-box">
                                <p class="category">A4チラシ</p>
                                <p class="company-name">株式会社○○○○</p>
                                <p class="work-info text-indent">ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。</p>
                            </div>
                        </li>
                        <li class="portfolio-inner">
                            <div class="portfolio-img">
                                <img src="/img/flyer/flyer_summary_for-general.webp" alt="">
                                <p class="txt-hide">拡大する</p>
                            </div>
                            <div class="info-box">
                                <p class="category">A4チラシ</p>
                                <p class="company-name">株式会社○○○○</p>
                                <p class="work-info text-indent">ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。</p>
                            </div>
                        </li>
                        <li class="portfolio-inner">
                            <div class="portfolio-img">
                                <img src="/img/flyer/flyer_summary_housemaid.webp" alt="">
                                <p class="txt-hide">拡大する</p>
                            </div>
                            <div class="info-box">
                                <p class="category">A4チラシ</p>
                                <p class="company-name">株式会社クラルスワン</p>
                                <p class="work-info text-indent">ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。</p>
                            </div>
                        </li>
                        <li class="portfolio-inner">
                            <div class="portfolio-img">
                                <img src="/img/flyer/flyer_demo_seminar.webp" alt="">
                                <p class="txt-hide">拡大する</p>
                            </div>
                            <div class="info-box">
                                <p class="category">A4チラシ</p>
                                <p class="company-name">株式会社クラルスワン</p>
                                <p class="work-info text-indent">ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。ここにサンプルテキストが入ります。</p>
                            </div>
                        </li>
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
    <!-- フライヤー拡大に関する命令。webとbannerで使用しないため直書き -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const modalOverlay = document.querySelector(".modal-overlay");
        const modalImg = document.getElementById("modal-img");
        const closeModalBtn = document.querySelector(".close-modal");

        // ポートフォリオ画像をクリックした時の処理
        const portfolioItems = document.querySelectorAll(".portfolio-inner");

        portfolioItems.forEach((item) => {
            item.addEventListener("click", function () {
            const imgSrc = item.querySelector("img").src; // クリックされた画像のsrcを取得
            modalImg.src = imgSrc; // モーダル内の画像を更新
            modalOverlay.style.display = "flex"; // モーダルを表示
            });
        });

        // モーダルを閉じる処理
        closeModalBtn.addEventListener("click", function () {
            modalOverlay.style.display = "none"; // モーダルを非表示
        });

        // モーダル外をクリックしても閉じる
        modalOverlay.addEventListener("click", function (event) {
            if (event.target === modalOverlay) {
            modalOverlay.style.display = "none"; // モーダルを非表示
            }
        });
        });
    </script>
</body>
