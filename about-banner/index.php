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
        <section class="product-hero product-hero--banner">
            <div class="product-hero__container">
                <div class="product-hero__inner">
                    <p>ABOUT WEB SITE</p>
                    <h1>バナー制作について</h1>
                </div>
            </div>
        </section>

        <!-- パンくずリスト -->
         <ol class="breadcrumb">
            <li><a href="">TOP</a></li>
            <li>バナー制作</li>
         </ol>

        <!-- FEATUREセクション -->
         <section class="product-feature helper__wrapper-basic" id="product-feature--banner">
            <p class="section__title-en">FEATURE</p>
            <h2 class="section__title">バナー制作の特徴</h2>

            <div class="product-feature__container">

                <ul>
                    <li>コンテンツ作成（原稿執筆）</li>
                    <li>オリジナルデザイン制作</li>
                    <li>サイズやフォーマットの多用途対応</li>
                    <li>短納期対応</li>
                    <li>複数提案可能</li>
                </ul>

                <div class="product-feature__img-container">
                    <img src="/img/service/about-banner/banner.png" alt="">
                </div>

                <!-- TODO文字量減らす。sp時読みにくい。 -->
                <div class="product-feature__txt-container">
                    <h3 class="product-feature__sub-ttl">「クリック率の最大化」を徹底的に追求し、<br>短期間で効果を引き出す、効果的なバナーデザインを提供します。</h3>
                    <p class="text__basic text__basic--indent">バナー（banner）とは、日本語で「旗」を意味し、ネット上でお店やサービスを知らせたり、商品への興味を引き出す役割を担っています。広告によっては獲得数や集客率が1.5倍〜2倍と劇的に変化するケースもあります。そのため、「クリック率の最大化」と「目を惹くデザイン」を徹底的に追求し、効果的なバナーデザインを提供します。</p>
                    <p class="text__basic text__basic--indent">文字数を極力抑え、「読む」よりも「見る」デザインを心がけています。目を惹くデザインと確かな戦略で、お客様のプロモーション活動をサポートします。</p>
                    <a class="btn btn__gradient-blue btn__gradient-blue--with-arrow" href="">お問い合わせ</a>
                </div>

            </div>

            <div class="product-feature__background-img-container">
                <img src="/img/service/about-web/page_top/feature/keyboard.webp" alt="">
            </div>

        </section>

        <!-- SERVICEセクション -->
        <section class="product-service" id="product-service--banner">
            <p class="section__title-en">SERVICE</p>
            <h2 class="section__title">バナー制作の種類</h2>
            <p class="section__summary">制作料金については、案件ごとにお見積もりをさせていただきます。<br>お気軽にお問い合わせください。</p>

            <ul class="product-service__lists">
                <li>
                    <!-- TODO画像の比率調整。 -->
                    <div class="helper-ratio-golden">
                        <img src="/img/service/about-banner/banner_ad.png" alt="">
                    </div>
                    <div class="product-service__list-txt-box">
                        <h3>広告用バナー制作</h3>
                        <p class="text__basic text__basic--indent">リスティング広告やWeb広告での集客や販売促進を目的としたバナーを制作します。クリックしたくなるような魅力的なデザインとターゲットに響くキャッチコピーを取り入れ、効果的に商品やサービスをアピールするバナーをお届けします。</p>
                    </div>
                </li>
                <li>
                    <div class="helper-ratio-golden">
                        <img src="/img/service/about-banner/banner_sns.png" alt="">
                    </div>
                    <div class="product-service__list-txt-box">
                        <h3>SNS投稿用バナー制作</h3>
                        <p class="text__basic text__basic--indent">InstagramやFacebook、Twitterなど、各SNSプラットフォームに適したバナーを制作します。視覚的なインパクトを重視し、スクロールする手を止めさせるデザインを追求します。トレンドやプラットフォームごとの特徴を踏まえた制作で、フォロワーの関心を引きつけます。</p>
                    </div>
                </li>
                <li>
                    <div class="helper-ratio-golden">
                        <img src="/img/service/about-banner/brett-jordan-LPZy4da9aRo-unsplash.jpg" alt="">
                    </div>
                    <div class="product-service__list-txt-box">
                        <h3>メールマガジン用バナー制作</h3>
                        <p class="text__basic text__basic--indent">メールマガジン内で使用するバナーを制作します。読み手の興味を引き、商品ページや特集ページへの誘導をサポートします。限られたスペースでも伝えたいメッセージを簡潔かつ魅力的に表現し、クリック率向上や商品購入につながるデザインをご提案します。</p>
                    </div>
                </li>
                <li>
                    <div class="helper-ratio-golden">
                        <img src="/img/service/about-banner/banner_head.png" alt="">
                    </div>
                    <div class="product-service__list-txt-box">
                        <h3>ヘッダー用バナー制作</h3>
                        <p class="text__basic text__basic--indent">ホームページやブログ、SNSの第一印象を決めるヘッダーバナーを制作します。企業やブランドのコンセプトに沿ったビジュアルと洗練されたデザインで、訪問者に信頼感を与えるバナーを作成。サイト全体のイメージを引き立てる役割を果たします。</p>
                    </div>
                </li>

            </ul>

        </section>

        <!-- WORKSセクション -->
        <section class="product-service__works">
            <p class="section__title-en">WORKS</p>
            <h2 class="section__title">過去に制作させていただいた作品のご紹介</h2>
            <p class="section__summary">サイトの公開が終了している場合があります。また、一部、学修中の架空のサイトも含まれます。</p>

            <ul class="slider slider__items--banner">
                <li><a href=""><img src="/img/service/about-banner/banner1.jpg" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-banner/Banner.coffee.jpg" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-banner/kaseifu-banner.webp" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-banner/line-banner.webp" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-banner/banner-sample.png" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-banner/instagram-banner.webp" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-banner/popup@2x.png" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-banner/Banner_fashion.jpg" alt=""></a></li>
            </ul>
            
            <a class="btn btn__gradient-blue btn__gradient-blue--center" href="/portfolio/banner/index.php">もっと見る</a>

        </section>

        <!-- FLOWセクション -->
        <section class="product-flow" id="product-flow--banner">
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