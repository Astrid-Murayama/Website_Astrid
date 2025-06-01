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

        <section class="portfolio portfolio--web horizontal-scroll">
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
                        <p>WEB PORTFOLIO</p>
                        <h1>WEB制作実績</h1>
                    </div>

                    <div class="portfolio__head-arrow">
                        <button class="btn-move" type="button">
                            <span class="arrow-left"></span>
                        </button>
                        <img src="/img/web/astrid_circle.png" alt="" class="rotate-img display-none--tab">
                    </div>

                </div>

                <div class="portfolio__body portfolio__web-body">
                    <ul class="portfolio__lists">
                        <li>
                            <a href="https://alphaberry-group.com/home-nursing/" target="_blank">
                                <div class="portfolio-img">
                                    <img src="/img/web/fv_home-nursing.webp" alt="">
                                    <p class="txt-hide">サイトを見る</p>
                                </div>
                                <div class="info-box">
                                    <p class="company-name">株式会社クラルスワン様</p>
                                    <p class="category">サービスサイト</p>
                                </div>
                                <p class="work-info text-indent">訪問看護に関するサイトを制作しました。サービスの特徴や内容がひと目で伝わるよう、レイアウトや導線設計に工夫を凝らしました。また、専門性を感じさせつつ、親しみを感じてもらえるトーンで、信頼感が伝わるデザインに仕上げています。</p>
                            </a>
                        </li>
                        <li>
                            <a href="/web/demo-site_preview_nursery-school.php" target="_blank">
                                <div class="portfolio-img">
                                    <img src="/img/web/fv_nursery-school.webp" alt="">
                                    <p class="txt-hide">サイトを見る</p>
                                </div>
                                <div class="info-box">
                                    <p class="company-name">サンプルサイト</p>
                                    <p class="category">サンプルサイト</p>
                                </div>
                                <p class="work-info text-indent">架空の幼稚園のWebサイトを制作しました。明るく元気な雰囲気を表現するために、カラフルで親しみやすいデザインを採用し、サイト全体に遊び心を感じさせる演出をしています。ポップアップや動きのあるエレメンツも取り入れました。</p>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.alpha-2015.jp/" target="_blank">
                                <div class="portfolio-img">
                                    <img src="/img/web/fv_house-support.webp" alt="">
                                    <p class="txt-hide">サイトを見る</p>
                                </div>
                                <div class="info-box">
                                    <p class="company-name">株式会社クラルスワン様</p>
                                    <p class="category">ランディングページ</p>
                                </div>
                                <p class="work-info text-indent">家事代行サービスのLPを制作しました。訴求ポイントは「安さ」であったため、親しみやすくリーズナブルな印象のデザインを採用し、色使いやレイアウトもシンプルかつストレートな表現し、ターゲット層に合わせた訴求を意識しました。</p>
                            </a>
                        </li>
                        <li>
                            <a href="https://alphaolive.jp/" target="_blank">
                                <div class="portfolio-img">
                                    <img src="/img/web/fv_nursing-home.webp" alt="">
                                    <p class="txt-hide">サイトを見る</p>
                                </div>
                                <div class="info-box">
                                    <p class="company-name">株式会社チラックス様</p>
                                    <p class="category">コーポレートサイト</p>
                                </div>
                                <p class="work-info text-indent">介護事業所のコーポレートサイトを制作しました。視認性の高い配色や文字サイズ、伝わる言葉選びを意識した制作を行いました。また、Webサイトだけでなく、ロゴ・名刺・パンフレットなどの紙媒体も一貫して制作しました。</p>
                            </a>
                        </li>
                        <li>
                            <a href="/web/demo-site_preview_barber.php" target="_blank">
                                <div class="portfolio-img">
                                    <img src="/img/web/fv_ barber.webp" alt="">
                                    <p class="txt-hide">サイトを見る</p>
                                </div>
                                <div class="info-box">
                                    <p class="company-name">サンプルサイト</p>
                                    <p class="category">サンプルサイト</p>
                                </div>
                                <p class="work-info text-indent">架空の美容室のWebサイトを制作しました。美容室のイメージに合わせて、黒を基調にした洗練されたデザインを採用し、シンプルながらも高級感と落ち着きのある雰囲気を演出しています。</p>
                            </a>
                        </li>
                        <li>
                            <a href="https://alphaberry-group.com/senior-support/" target="_blank">
                                <div class="portfolio-img">
                                    <img src="/img/web/fv_senior-site.webp" alt="">
                                    <p class="txt-hide">サイトを見る</p>
                                </div>
                                <div class="info-box">
                                    <p class="company-name">株式会社クラルスワン様</p>
                                    <p class="category">サービスサイト</p>
                                </div>
                                <p class="work-info text-indent">シニアサポートサービスに関するサイトを制作しました。ピンクを基調とし、やさしさや安心感が伝わるデザインに仕上げました。また、複数の問い合わせフォームを設置し、ユーザーの目的に合わせたスムーズな導線を構築しました。</p>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.alphapeach.co.jp/" target="_blank">
                                <div class="portfolio-img">
                                    <img src="/img/web/fv_alphapeech.webp" alt="">
                                    <p class="txt-hide">サイトを見る</p>
                                </div>
                                <div class="info-box">
                                    <p class="company-name">株式会社リードコム様</p>
                                    <p class="category">コーポレートサイト</p>
                                </div>
                                <p class="work-info text-indent">訪問看護ステーションの公式サイトを制作しました。やさしさや温かみを感じられるデザインを採用し、「心に寄り添うケア」を視覚的に表現できるよう、全体に柔らかで安心感のある雰囲気を演出しました。</p>
                            </a>
                        </li>
                        <li>
                            <a href="https://alphaberry-group.com/cleaning/" target="_blank">
                                <div class="portfolio-img">
                                    <img src="/img/web/fv_clening.webp" alt="">
                                    <p class="txt-hide">サイトを見る</p>
                                </div>
                                <div class="info-box">
                                    <p class="company-name">株式会社クラルスワン様</p>
                                    <p class="category">サービスサイト</p>
                                </div>
                                <p class="work-info text-indent">掃業業者のサービス紹介サイトを制作しました。清潔感・クリーンさを重視したシンプルなデザインを採用しています。また、ユーザーの関心を引きやすくするため、キャンペーン情報を日付とともに自動更新できるフォームを実装しました。</p>
                            </a>
                        </li>
                        <li>
                            <a href="https://alphaberry-group.com/cooking/" target="_blank">
                                <div class="portfolio-img">
                                    <img src="/img/web/fv_cooking.webp" alt="">
                                    <p class="txt-hide">サイトを見る</p>
                                </div>
                                <div class="info-box">
                                    <p class="company-name">株式会社クラルスワン様</p>
                                    <p class="category">サービスサイト</p>
                                </div>
                                <p class="work-info text-indent">ご家庭向けの料理代行サービスを紹介するサイトを制作しました。「料理の楽しさ」や「選べる楽しみ」が伝わるよう、カラフルでバラエティ豊かな印象のデザインを意識し、ポップで親しみやすいテイストに仕上げています。</p>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.senior-alphaberry.com/" target="_blank">
                                <div class="portfolio-img">
                                    <img src="/img/web/fv_senior_lp.webp" alt="">
                                    <p class="txt-hide">サイトを見る</p>
                                </div>
                                <div class="info-box">
                                    <p class="company-name">株式会社クラルスワン様</p>
                                    <p class="category">ランディングページ</p>
                                </div>
                                <p class="work-info text-indent">高齢者向けサポートのLPを制作しました。シンプルで視認性が高いデザインを採用しました。公開後はアクセス解析も実施し、ユーザーの行動に基づいてCTAパーツの修正を行い、コンバージョン率（CVR）の改善も行いました</p>
                            </a>
                        </li>
                        <li>
                            <a href="https://alphaberry-group.com/house-support/" target="_blank">
                                <div class="portfolio-img">
                                    <img src="/img/web/fv_house-maid.webp" alt="">
                                    <p class="txt-hide">サイトを見る</p>
                                </div>
                                <div class="info-box">
                                    <p class="company-name">株式会社クラルスワン様</p>
                                    <p class="category">サービスサイト</p>
                                </div>
                                <p class="work-info text-indent">家事代行サービスのサービスサイトを制作しました。洗練されたイメージを伝えつつ。必要な情報を素早く把握できるよう、アイコンを活用した視覚的に見やすいデザインを採用しました。</p>
                            </a>
                        </li>
                        <li>
                            <a href="https://alphaberry-group.com/" target="_blank">
                                <div class="portfolio-img">
                                    <img src="/img/web/fv_service-top.webp" alt="">
                                    <p class="txt-hide">サイトを見る</p>
                                </div>
                                <div class="info-box">
                                    <p class="company-name">株式会社クラルスワン様</p>
                                    <p class="category">サービスサイト</p>
                                </div>
                                <p class="work-info text-indent">家事代行サービスのサービスサイトを制作しました。WordPressを使用したコラム記事やお知らせコンテンツを継続して発信し、SEO（検索エンジン最適化）の向上を図っています。</p>
                            </a>
                        </li>
                        <li>
                            <a href="https://alphaberry-group.com/home-care/" target="_blank">
                                <div class="portfolio-img">
                                    <img src="/img/web/fv_nursing-home_site.webp" alt="">
                                    <p class="txt-hide">サイトを見る</p>
                                </div>
                                <div class="info-box">
                                    <p class="company-name">株式会社クラルスワン様</p>
                                    <p class="category">サービスサイト</p>
                                </div>
                                <p class="work-info text-indent">介護サービスに関するWebサイトを制作しました。ファーストビューにカルーセルを実装し、さまざまなサービス内容をスライドで見せることで、サービスの豊富さや多様性を視覚的にアピールしています。</p>
                            </a>
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
</body>
