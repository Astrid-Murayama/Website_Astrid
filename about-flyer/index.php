<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- 定義済みPHP変数の読み込み -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/variable/global.php'); ?>

    <!-- 全ページ共通の要素を読み込み -->
    <?php require_once($webRoot . '/inc/head/common.php'); ?>

    <!-- 外部プラグインのCSSを読み込み（自作CSSで上書きするため、先に指定） -->
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <!-- ページ固有のメタデータ設定 -->

    <!-- 全ページ共通の要素を読み込み -->

    <!-- JavaScriptの読み込み（自動キャッシュバスティング機能付き） -->

    <!-- 「サイト名」のJSON-LD構造化データ（トップページ限定の記述、外部参照不可） -->
    
    <!-- 「ローカルビジネス」のJSON-LD構造化データ -->

    <script src="/js/accordion.js" defer></script> <!-- defer属性でDOMの読み込み後に実行 -->
    <!-- 外部プラグインのJavaScriptを読み込み（jQueryベースのため、jQueryを先に読み込む必要あり） -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

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
        <section class="product-hero product-hero--flyer">
            <div class="product-hero__container">
                <div class="product-hero__inner">
                    <p>ABOUT WEB FLYER</p>
                    <h1>フライヤー制作について</h1>
                </div>
            </div>
        </section>

        <!-- パンくずリスト -->
         <ol class="breadcrumb">
            <li><a href="">TOP</a></li>
            <li>フライヤー制作</li>
         </ol>

        <!-- FEATUREセクション -->
         <section class="product-feature helper__wrapper-basic" id="product-feature--flyer">
            <p class="section__title-en">FEATURE</p>
            <h2 class="section__title">フライヤー制作の特徴</h2>

            <div class="product-feature__container">

                <ul>
                <li>コンテンツ作成（原稿執筆）</li>
                <li>マーケティングサポート</li>
                <li>オリジナルデザイン制作</li>
                <li>印刷対応データ提供</li>
                <li>QRコードやWeb連携サポート</li>
                </ul>

                <div class="product-feature__img-container">
                    <img src="/img/service/about-flyer/flyer.png" alt="">
                </div>

                <!-- TODO文字量減らす。sp時読みにくい。 -->
                <div class="product-feature__txt-container">
                    <h3 class="product-feature__sub-ttl">要点を明確にし、ただデザインを施すだけではなく、<br>「情報設計」を通じた成果を生むフライヤーを制作します。</h3>
                    <p class="text__basic text__basic--indent">まず「情報設計」から始めることが、成果を生むフライヤー制作の鍵です。これは家を建てる際の「設計図」と同じ役割を果たし、効果的なプロモーションを実現するための重要なプロセスです。</p>
                    <p class="text__basic text__basic--indent">企業や商品、サービスの「魅力」をビジュアル化し、見る人の感情を動かすイメージ作りを大切にしています。内容の整理・編集は、読みやすさやわかりやすさを重視し、視覚的にもストレスを感じさせないレイアウトを追求します。どのような内容でも分かりやすく筋道を立てて構成し、見る人が「読みたくなる」デザインを実現します。</p>
                    <a class="btn btn__gradient-blue btn__gradient-blue--with-arrow" href="">お問い合わせ</a>
                </div>

            </div>

            <div class="product-feature__background-img-container">
                <img src="/img/service/about-web/page_top/feature/keyboard.webp" alt="">
            </div>

        </section>

        <!-- SERVICEセクション -->
        <section class="product-service" id="product-service--flyer">
            <p class="section__title-en">SERVICE</p>
            <h2 class="section__title">フライヤー制作の種類</h2>
            <p class="section__summary">制作料金については、案件ごとにお見積もりをさせていただきます。<br>お気軽にお問い合わせください。</p>

            <ul class="product-service__lists">
                <li>
                    <!-- TODO画像の比率調整。 -->
                    <div class="helper-ratio-golden">
                        <img src="/img/service/about-flyer/bundo-kim-j_C123EXFWM-unsplash.jpg" alt="">
                    </div>
                    <div class="product-service__list-txt-box">
                        <h3>フライヤー制作</h3>
                        <p class="text__basic text__basic--indent">新シンプルかつ効果的に情報を伝えるフライヤーを制作します。イベントや新商品の告知、店舗のプロモーションなど、目的に応じたデザインとキャッチコピーで、手に取った人の目を引き、行動を促すツールをお届けします。</p>
                    </div>
                </li>
                <li>
                    <div class="helper-ratio-golden">
                        <img src="/img/service/about-flyer/absolutvision-bSlHKWxxXak-unsplash.jpg" alt="">
                    </div>
                    <div class="product-service__list-txt-box">
                        <h3>折り込みチラシ</h3>
                        <p class="text__basic text__basic--indent">新聞や地域の配布物と一緒に届けられる折り込みチラシは、多くの人々に直接情報を届ける効果的な手段です。ターゲット層を意識したレイアウトやキャッチコピーを駆使し、短い時間で必要な情報を伝えるデザインを実現します。</p>
                    </div>
                </li>
                <li>
                    <div class="helper-ratio-golden">
                        <img src="/img/service/about-flyer/img_poster.png" alt="">
                    </div>
                    <div class="product-service__list-txt-box">
                        <h3>ポスター制作</h3>
                        <p class="text__basic text__basic--indent">遠くからでも目を引くインパクトのあるポスターを制作します。店頭でのプロモーション、展示会での告知、イベント案内など、多目的に活用できるポスターは、視覚的な魅力とわかりやすさを兼ね備えたデザインで訴求力を高めます。</p>
                    </div>
                </li>
                <li>
                    <div class="helper-ratio-golden">
                        <img src="/img/service/about-flyer/physical-paper-book-background-closeup.jpg" alt="">
                    </div>
                    <div class="product-service__list-txt-box">
                        <h3>企業案内パンフレット制作</h3>
                        <p class="text__basic text__basic--indent">企業の理念やサービス内容、強みを詳しく伝える企業案内パンフレットを制作します。デザイン性と読みやすさを両立させ、採用活動や営業ツールとして活用できる内容を構成。ブランドイメージを伝える写真や図解を効果的に盛り込むことで、信頼感を与えるパンフレットを仕上げます。</p>
                    </div>
                </li>

            </ul>

        </section>

        <!-- WORKSセクション -->
        <section class="product-service__works">
            <p class="section__title-en">WORKS</p>
            <h2 class="section__title">過去に制作させていただいた作品のご紹介</h2>
            <p class="section__summary">サイトの公開が終了している場合があります。また、一部、学修中の架空のサイトも含まれます。</p>

            <ul class="slider slider__items--flyer">
                <li><a href=""><img src="/img/service/about-flyer/works/確定_サ高住_page-0001.jpg" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-flyer/works/flyer_bouldering.jpg" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-flyer/works/Flyer_mountain.jpg" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-flyer/works/document_care20230208_page-0001.jpg" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-flyer/works/【修】営業資料 ＿デザイン_page-0001 (1).jpg" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-flyer/works/【最新】家政婦LP_線なし_page-0001.jpg" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-flyer/works/Flyer_sweets.jpg" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-flyer/works/document_alphagroup_page-0001.jpg" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-flyer/works/credit.jpg" alt=""></a></li>
            </ul>
            
            <a class="btn btn__gradient-blue btn__gradient-blue--center" href="/portfolio/flyer/index.php">もっと見る</a>

        </section>


        <!-- FLOWセクション -->
        <section class="product-flow" id="product-flow--flyer">
            <p class="section__title-en">FLOW</p>
            <h2 class="section__title">依頼から納品までの流れ</h2>
            <p class="section__summary">※制作物により異なる場合があります。</p>

            <div class="product-flow__container">

                <ul>
                    <li>
                        <button class="product-flow__accordion-btn">
                            <img src="/img/common/flow/number_1_half.png" alt="">
                            <p>相談・ヒアリング</p>
                            <span class="product-flow__icon">+</span>
                        </button>
                        <p class="product-flow__accordion-content text__basic text__basic--indent">お客様のビジネスやサービスについて詳しくお話をお伺いします。どのようなホームページをお考えか、デザインのイメージや求める機能、ターゲットとするユーザー像など、細かなご要望を確認します。イメージを共有することで、最適なホームページ制作を進められる準備を整えます。</p>
                    </li>
                    <li>
                        <button class="product-flow__accordion-btn">
                            <img src="/img/common/flow/number_2_half.png" alt="">
                            <p>お見積り提出</p>
                            <span class="product-flow__icon">+</span>
                        </button>
                        <p class="product-flow__accordion-content text__basic text__basic--indent">お客様のビジネスやサービスについて詳しくお話をお伺いします。どのようなホームページをお考えか、デザインのイメージや求める機能、ターゲットとするユーザー像など、細かなご要望を確認します。イメージを共有することで、最適なホームページ制作を進められる準備を整えます。</p>
                    </li>
                    <li>
                        <button class="product-flow__accordion-btn">
                            <img src="/img/common/flow/number_3_half.png" alt="">
                            <p>デザイン案作成</p>
                            <span class="product-flow__icon">+</span>
                        </button>
                        <p class="product-flow__accordion-content text__basic text__basic--indent">お客様のビジネスやサービスについて詳しくお話をお伺いします。どのようなホームページをお考えか、デザインのイメージや求める機能、ターゲットとするユーザー像など、細かなご要望を確認します。イメージを共有することで、最適なホームページ制作を進められる準備を整えます。</p>
                    </li>
                    <li>
                        <button class="product-flow__accordion-btn">
                            <img src="/img/common/flow/number_4_half.png" alt="">
                            <p>コーディング・開発</p>
                            <span class="product-flow__icon">+</span>
                        </button>
                        <p class="product-flow__accordion-content text__basic text__basic--indent">お客様のビジネスやサービスについて詳しくお話をお伺いします。どのようなホームページをお考えか、デザインのイメージや求める機能、ターゲットとするユーザー像など、細かなご要望を確認します。イメージを共有することで、最適なホームページ制作を進められる準備を整えます。</p>
                    </li>
                    <li>
                        <button class="product-flow__accordion-btn">
                            <img src="/img/common/flow/number_5_half.png" alt="">
                            <p>テスト・公開</p>
                            <span class="product-flow__icon">+</span>
                        </button>
                        <p class="product-flow__accordion-content text__basic text__basic--indent">お客様のビジネスやサービスについて詳しくお話をお伺いします。どのようなホームページをお考えか、デザインのイメージや求める機能、ターゲットとするユーザー像など、細かなご要望を確認します。イメージを共有することで、最適なホームページ制作を進められる準備を整えます。</p>
                    </li>
                    <li>
                        <button class="product-flow__accordion-btn product-flow__accordion-btn--last">
                            <img src="/img/common/flow/number_6_half-pink.png" alt="">
                            <p>アフターフォロー</p>
                            <span class="product-flow__icon product-flow__icon--last">+</span>
                        </button>
                        <p class="product-flow__accordion-content product-flow__accordion-content--last text__basic text__basic--indent">お客様のビジネスやサービスについて詳しくお話をお伺いします。どのようなホームページをお考えか、デザインのイメージや求める機能、ターゲットとするユーザー像など、細かなご要望を確認します。イメージを共有することで、最適なホームページ制作を進められる準備を整えます。</p>
                    </li>
                </ul>

            </div>
            <p class="product-flow__note">※ここに注意事項が入ります。ここに注意事項が入ります。ここに注意事項が入ります。<br>ここに注意事項が入ります。ここに注意事項が入ります。</p>


        </section>

        <!-- CTAセクション -->
        <?php include($webRoot . '/inc/head/navigation/contact.php'); ?>
        <div class="fixed-footer" id="fixed__footer">

            <a class="fixed-footer__contact-btn fixed-footer__contact-btn--pc-none" href="/contact/general/index.php">お問い合わせ</a>

            <a class="btn btn__view-portfolio btn__view-portfolio--fixed" href="/portfolio/flyer/index.php">
                <div class="btn__view-portfolio-container">
                    <p>Watch Portfolio</p>
                    <p>制作実績を見る</p>
                </div>
            </a>

        </div>

    
    </main>

    <!-- jQueryを追加（SlickはjQuery依存） -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- SlickのJavaScriptを追加 -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.slider').slick({
                // 基本的なオプション設定
                dots: true,             // ナビゲーション用のドットを表示
                infinite: true,         // 無限ループ
                speed: 400,             // スライドの速度（ms）
                slidesToScroll: 1,      // スクロールするスライド数
                autoplay: true,         // 自動再生
                autoplaySpeed: 2000,    // 自動再生の間隔（ms）
                // slidesToShow: 1,        // 通常は1枚を表示
                centerMode: true,       // 中央寄せ
                variableWidth: true,    // スライドの幅を動的に調整
                arrows: false,          // 矢印を非表示
                // responsive: [
                //     {
                //         breakpoint: 768, // 768px以下の場合
                //         settings: {
                //             slidesToShow: 3,      // 表示するスライドを3枚に設定
                //             centerMode: true,     // 中央寄せを有効化
                //             variableWidth: false, // 固定幅を使用
                //             arrows: false         // 矢印は引き続き非表示
                //         }
                //     }
                // ]
            });
        });
    </script>


</body>