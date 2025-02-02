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
        <section class="product-hero product-hero--web">
            <div class="product-hero__container">
                <div class="product-hero__inner">
                    <p>ABOUT WEB SITE</p>
                    <h1>ホームページ制作について</h1>
                </div>
            </div>
        </section>

        <!-- パンくずリスト -->
         <ol class="breadcrumb">
            <li><a href="">TOP</a></li>
            <li>ホームページ制作</li>
         </ol>

        <!-- FEATUREセクション -->
         <section class="product-feature helper__wrapper-basic" id="product-feature--web">
            <p class="section__title-en">FEATURE</p>
            <h2 class="section__title">ホームページ制作の特徴</h2>

            <div class="product-feature__container">

                <ul>
                <li>コンテンツ作成（原稿執筆）</li>
                <li>オリジナルデザイン制作</li>
                <li>レスポンシブ対応</li>
                <li>ドメイン取得・サーバー設定代行</li>
                <li>セキュリティ対策</li>
                </ul>

                <div class="product-feature__img-container">
                    <img src="/img/service/about-web/page_top/feature/iphone.webp" alt="">
                </div>

                <!-- TODO文字量減らす。sp時読みにくい。 -->
                <div class="product-feature__txt-container">
                    <h3 class="product-feature__sub-ttl">視覚的に魅力的なだけでなく、<br>有益なコンバージョンを促進するwebサイトを目指します。</h3>
                    <p class="text__basic text__basic--indent">ビジネスにおいて効果的なWebサイトを制作します。デザインからコーディング、サイトの公開・運用に至るまで、丁寧な対応でお客様の目標達成をサポートします。新規のWebサイト制作はもちろん、既存サイトのリニューアルやモバイル対応（レスポンシブデザイン）、SEO対策も含めた包括的なサービスを提供しています。</p>
                    <p class="text__basic text__basic--indent">ビジネス目標やターゲット層に合わせた、使いやすく機能的なデザインを重視しています。ナビゲーションや導線設計を重要視し、サイト訪問者がストレスなく情報にたどり着けるサイトを目指します。</p>
                    <a class="btn btn__gradient-blue btn__gradient-blue--with-arrow" href="">お問い合わせ</a>
                </div>

            </div>

            <div class="product-feature__background-img-container">
                <img src="/img/service/about-web/page_top/feature/keyboard.webp" alt="">
            </div>

        </section>

        <!-- SERVICEセクション -->
        <section class="product-service" id="product-service--web">
            <p class="section__title-en">SERVICE</p>
            <h2 class="section__title">ホームページ制作の種類</h2>
            <p class="section__summary">制作料金については、案件ごとにお見積もりをさせていただきます。<br>お気軽にお問い合わせください。</p>

            <ul class="product-service__lists">
                <li>
                    <!-- TODO画像の比率調整。 -->
                    <div class="helper-ratio-golden">
                        <img src="/img/service/about-web/page_top/service/hp.jpg" alt="">
                    </div>
                    <div class="product-service__list-txt-box">
                        <h3>新規ホームページ制作</h3>
                        <p class="text__basic text__basic--indent">ゼロから企業やサービスの魅力を最大限に引き出すホームページを制作します。ブランドイメージに合ったデザインを採用し、情報発信や問い合わせ増加、採用活動など目的に応じた構成を設計。スマートフォンやパソコンに対応したレスポンシブデザインで、どのデバイスでも快適に閲覧できるサイトを構築します。</p>
                    </div>
                </li>
                <li>
                    <div class="helper-ratio-golden">
                        <img src="/img/service/about-web/page_top/service/lp-images.jpg" alt="">
                    </div>
                    <div class="product-service__list-txt-box">
                        <h3>LP（ランディングページ）制作</h3>
                        <p class="text__basic text__basic--indent">特定の商品やサービスに特化した1ページ完結型のランディングページを制作します。コンバージョン率を重視したデザインと構成で、訪問者のアクションを促進。魅力を引き出すコピーライティングや広告との連動による最適化により、目的達成をサポートします。</p>
                    </div>
                </li>
                <li>
                    <div class="helper-ratio-golden">
                        <img src="/img/service/about-web/page_top/service/re4.jpg" alt="">
                    </div>
                    <div class="product-service__list-txt-box">
                        <h3>サイトリニューアル</h3>
                        <p class="text__basic text__basic--indent">時代に合わなくなった既存のホームページを、最新のトレンドを取り入れたデザインや機能で刷新します。操作性や表示速度の改善を通じてユーザー体験を向上させるとともに、SEO対策を強化して検索エンジンでの集客力を高めます。</p>
                    </div>
                </li>
                <li>
                    <div class="helper-ratio-golden">
                        <img src="/img/service/about-web/page_top/service/1981-digital-oMe_FjZnHGU-unsplash.jpg" alt="">
                    </div>
                    <div class="product-service__list-txt-box">
                        <h3>保守運用・管理</h3>
                        <p class="text__basic text__basic--indent">ホームページ完成後の運用を安心してお任せいただけるよう、定期的なバックアップやセキュリティ対策を実施します。さらに、必要に応じてニュースや写真の更新作業を代行し、常に新鮮な情報を発信できるサイト運営をサポートします。</p>
                    </div>
                </li>

            </ul>

        </section>

        <!-- PORTFOLIOセクション -->
        <!-- WORKSセクション -->
        <section class="product-service__works">
            <p class="section__title-en">WORKS</p>
            <h2 class="section__title">過去に制作させていただいた作品のご紹介</h2>
            <p class="section__summary">サイトの公開が終了している場合があります。また、一部、学修中の架空のサイトも含まれます。</p>

            <ul class="slider slider__items--web">
                <li><a href=""><img src="/img/service/about-web/page_top/works/グループ 496.png" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-web/page_top/works/グループ 497.png" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-web/page_top/works/グループ 499.png" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-web/page_top/works/グループ 500.png" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-web/page_top/works/グループ 506.png" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-web/page_top/works/グループ 501.png" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-web/page_top/works/グループ 503.png" alt=""></a></li>
                <li><a href=""><img src="/img/service/about-web/page_top/works/グループ 504.png" alt=""></a></li>
            </ul>
            
            <a class="btn btn__gradient-blue btn__gradient-blue--center" href="/portfolio/web/index.php">もっと見る</a>

        </section>


        <!-- FLOWセクション -->
        <section class="product-flow" id="product-flow--web">
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

            <a class="btn btn__view-portfolio btn__view-portfolio--fixed" href="/portfolio/web/index.php">
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
                slidesToShow: 1,        // 通常は1枚を表示
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