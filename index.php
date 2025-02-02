<!DOCTYPE html>
<html lang="ja">

<head>

    <!-- 定義済みPHP変数の読み込み -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/variable/global.php'); ?>

    <!-- 外部プラグインのCSSを読み込み（自作CSSで上書きするため、先に指定） -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

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

        <!-- ヒーローセクション -->
        <section class="top-hero">
            <div class="top-hero__container">
                <div class="top-hero__txt-container">
                    <h1>目に留まる<br>心に残る<br>成果を生むデザイン。</h1>
                    <p>Design that catches the eye, <br>stays in the mind,<br>and delivers results.</p>
                    <ul>
                        <li><a href="/about-web/index.php">ホームページ</a></li>
                        <li><a href="/about-flyer/index.php">チラシ</a></li>
                        <li><a href="/about-banner/index.php">バナー</a></li>
                    </ul>
                    <a class="btn btn__gradient-blue btn__gradient-blue--with-arrow" href="/contact/general/index.php">お問い合わせ</a>
                </div>
                <div class="top-hero__img-container">
                    <img src="/img/service/page_top/hero/image_pc_tablet_smartphone_flyer.webp" alt="">
                </div>
            </div>
            <div class="btn btn__view-portfolio btn__view-portfolio--top btn__open-modal">
                <div class="btn__view-portfolio-container">
                    <p>Watch Portfolio</p>
                    <p>制作実績を見る</p>
                </div>
            </div>
        </section>

        <!-- SERVICEセクション -->
        <section class="service  helper__wrapper-basic">
            <p class="section__title-en">SERVICE</p>
            <h2 class="section__title">サービスのご案内</h2>
            <p class="section__summary">制作料金については、案件ごとにお見積もりをさせていただきます。<br>お気軽にお問い合わせください。</p>

            <div class="service__body">

                <ul class="service__body-list">
                    <li class="service__body-box">
                        <h3>ウェブサイト制作</h3>
                        <div class="service__body-img-container">
                            <img src="/img/service/page_top/service/img_web.png" alt="">
                        </div>
                        <ul>
                            <li class="helper__add-check-mark-with-circle">コンテンツ作成（原稿執筆）</li>
                            <li class="helper__add-check-mark-with-circle">オリジナルデザイン制作</li>
                            <li class="helper__add-check-mark-with-circle">レスポンシブ対応</li>
                            <li class="helper__add-check-mark-with-circle">ドメイン取得・サーバー設定代行</li>
                            <li class="helper__add-check-mark-with-circle">セキュリティ対策</li>
                        </ul>
                        <a class="btn btn__gradient-blue btn__gradient-blue--center" href="/about-web/index.php">詳しく見る</a>
                    </li>
                </ul>

                <ul class="service__body-list">
                    <li class="service__body-box">
                        <h3>フライヤー制作</h3>
                        <div class="service__body-img-container">
                            <img src="/img/service/page_top/service/img_flyer.png" alt="">
                        </div>
                        <ul>
                            <li class="helper__add-check-mark-with-circle">コンテンツ作成（原稿執筆）</li>
                            <li class="helper__add-check-mark-with-circle">マーケティングサポート</li>
                            <li class="helper__add-check-mark-with-circle">オリジナルデザイン制作</li>
                            <li class="helper__add-check-mark-with-circle">印刷対応データ提供</li>
                            <li class="helper__add-check-mark-with-circle">QRコードやWeb連携サポート</li>
                        </ul>
                        <a class="btn btn__gradient-blue btn__gradient-blue--center" href="/about-flyer/index.php">詳しく見る</a>
                    </li>
                </ul>

                <ul class="service__body-list">
                    <li class="service__body-box">
                        <h3>バナー制作</h3>
                        <div class="service__body-img-container">
                            <img src="/img/service/page_top/service/img_banner.png" alt="">
                        </div>
                        <ul>
                            <li class="helper__add-check-mark-with-circle">コンテンツ作成（原稿執筆）</li>
                            <li class="helper__add-check-mark-with-circle">オリジナルデザイン制作</li>
                            <li class="helper__add-check-mark-with-circle">サイズやフォーマットの多用途対応</li>
                            <li class="helper__add-check-mark-with-circle">短納期対応</li>
                            <li class="helper__add-check-mark-with-circle">複数提案可能</li>
                        </ul>
                        <a class="btn btn__gradient-blue btn__gradient-blue--center" href="/about-banner/index.php">詳しく見る</a>
                    </li>
                </ul>
                
            </div>

            <div class="service__others">
                <p class="service__others-ttl helper__add-check-mark-with-circle">上記以外のサポートも柔軟に対応します。</p>
                <p class="service__others-summary text__basic text__basic--center">Webサイト・フライヤー・バナー制作以外にも、ビジネスを総合的にサポートする多彩なサービスを提供しています。</p>
                <ul class="service__others-lists">
                    <li class="service__others-list service__others-list--seo">SEO対策</li>
                    <li class="service__others-list service__others-list--printing">印刷会社の選定や手配</li>
                    <li class="service__others-list service__others-list--business-card">名刺デザイン</li>
                    <li class="service__others-list service__others-list--logo">ロゴ制作</li>
                    <li class="service__others-list service__others-list--consulting">コンサルティング</li>
                    <li class="service__others-list service__others-list--sns">SNS運用サポート</li>
                    <li class="service__others-list service__others-list--pdf">PDF資料作成</li>
                    <li class="service__others-list service__others-list--a-b-test">A/Bテストのサポート</li>
                    <li class="service__others-list service__others-list--html-mail">HTMLメールの作成</li>
                </ul>
                <a class="btn btn__gradient-blue btn__gradient-blue--center" href="/other/index.php">詳しく見る</a>
                </div>

        </section>

        <!-- BENEFITセクション -->
        <section class="benefit helper__wrapper-basic">

            <div class="benefit__img-container">
                <div class="benefit__img-box benefit__img-box--left benefit__img-box--blue">
                    <img src="/img/service/page_top/benefit/financial-profit.png" alt="">
                </div>
                <div class="benefit__img-box benefit__img-box--center">
                    <img src="/img/service/page_top/benefit/マスクグループ 263.png" alt="">
                </div>
                <div class="benefit__img-box benefit__img-box--right">
                    <img src="/img/service/page_top/benefit/meeting.png" alt="">
                </div>
            </div>

            <div class="benefit__title-container">
                <p class="benefit__title-en">BENEFIT</p>
                <p class="benefit__title-sub">コスト効率とパーソナル対応で、理想のサイトを実現</p>
                <h2 class="benefit__title"><span>フリーランス</span>に<wbr><span>ホームページ制作</span>を<wbr>依頼する<span>メリット</span></h2>
            </div>

            <ul class="benefit__list">
                <li>
                    <h3>コストパフォーマンス</h3>
                    <p class="text__basic text__basic--indent">企業に依頼する場合、中間マージンや運営コストが上乗せされることがありますが、フリーランスは直接取引のため、比較的リーズナブルな価格で成果物を提供できます。また、基本的に1人ですべての作業を行うため、人件費や機器のリース料などの間接費の負担を減らすことができ、その分価格が抑えられる傾向があります。</p>
                </li>
                <li>
                    <h3>直接のコミュニケーション</h3>
                    <p class="text__basic text__basic--indent">制作会社では複数の担当者を経由するため、意思伝達が遅れることがありますが、フリーランスでは依頼主が直接制作者と話せるので、コミュニケーションが迅速かつスムーズです。また、コミュニケーションロスも少なく、要望やフィードバックもすぐに反映されることが多いため、イメージ通りの仕上がりが期待できます。
                    </p>
                </li>
                <li>
                    <h3>柔軟性</h3>
                    <p class="text__basic text__basic--indent">一定のプロセスや決まったサービス内容がなく、依頼に合わせた柔軟な対応が可能です。たとえば、特殊な要望や予算に合わせたカスタマイズなど、個別のニーズにフレキシブルに対応できるのが強みです。企業のルールや制約に縛られないため、クライアントの要望や納期に細かく対応でき、急な修正や短納期の案件にも相談しやすいのが特徴です。
                    </p>
                </li>
                <li>
                    <h3>スピード感</h3>
                    <p class="text__basic text__basic--indent">窓口や中間管理を挟まず、担当者と直接コミュニケーションを取ることで、無駄なタイムロスを削減できます。また、頼内容が固まれば、すぐに作業に着手でき、プロジェクトの規模やスケジュールに柔軟に対応できるため、スピーディーな納品が可能です。特に小規模の案件では、フリーランスのほうが短期間での対応が可能な場合もあります。                    </p>
                </li>
                <li>
                    <h3>パーソナライズされた対応</h3>
                    <p class="text__basic text__basic--indent">クライアントごとに丁寧なヒアリングを行い、ニーズに最適化した提案が可能です。テンプレート的なアプローチではなく、オーダーメイドのデザインや構成の提供が可能です。より企業のビジネスにフィットしたサイトやデザインを提案し、他にはない、自分のビジョンに沿った個性的な提案や、依頼主と密接に連携して進行するプロジェクトが実現可能です。
                    </p>
                </li>
                <li>
                    <h3>制作プロセスの透明性</h3>
                    <p class="text__basic text__basic--indent">プロセスがシンプルであり、進行状況や問題点をすぐに共有できます。制作過程が見えやすく、適時のフィードバックや修正依頼がしやすいという点も大きあメリットです。また、制作中の疑問や変更点にも柔軟に対応するオープンなコミュニケーションを目指し、スケジュールや制作過程をしっかり共有し、双方向のコミュニケーションを大切にしています。
                    </p>
                </li>
            </ul>
        </section>

        <!-- ABOUT-MEセクション -->
        <section class="about-me">
            <div class="about-me__container">

                <div class="about-me__img-container">
                    <img src="/img/service/page_top/about-me/profile_tsukasa_murayama.png" alt="">
                </div>

                <div class="about-me__txt-container">
                    <h2 class="about-me__title">ABOUT ME</h2>
                    <p class="about-me__my-name">TSUKASA MURAYAMA</p>
                    <p class="about-me__summary text__basic text__basic--indent">企業の広告部でインハウスデザイナーとして約3年間勤務し、主に家政婦サービスや清掃サービス、訪問介護や医療関係のWebサイト制作・運用を担当してきました。また、SNS運用、コラムの執筆やチラシ、名刺やロゴ制作も経験し、加えてブランディングやマーケティング、SEOの知見も身につけました。2024年から独立し、これまでのサイト運用を続けつつ、フリーランスとして新規の制作依頼をお受けしています。</p>
                    <div class="about-me__skills">

                        <div class="about-me__skill">
                            <img src="/img/service/page_top/about-me/icon_html.png"     alt="">
                        </div>
                        <div class="about-me__skill">
                            <img src="/img/service/page_top/about-me/icon_css.png" alt="">
                        </div>
                        <div class="about-me__skill">
                            <img src="/img/service/page_top/about-me/icon_js.png" alt="">
                        </div>
                        <div class="about-me__skill">
                            <img src="/img/service/page_top/about-me/icon_jq.png" alt="">
                        </div>
                        <div class="about-me__skill">
                            <img src="/img/service/page_top/about-me/icon_php.png" alt="">
                        </div>
                        <div class="about-me__skill">
                            <img src="/img/service/page_top/about-me/icon_xd.png" alt="">
                        </div>
                        <div class="about-me__skill">
                            <img src="/img/service/page_top/about-me/icon_ai.png" alt="">
                        </div>
                        <div class="about-me__skill">
                            <img src="/img/service/page_top/about-me/icon_ps.png" alt="">
                        </div>
                        <div class="about-me__skill">
                            <img src="/img/service/page_top/about-me/icon_fg.png" alt="">
                        </div>
                        <div class="about-me__skill">
                            <img src="/img/service/page_top/about-me/icon_pr.png" alt="">
                        </div>
                    </div>
                    <a href="/about-me/index.php" class="btn btn__view-about-me">詳しく見る</a>
                </div>

            </div>
        </section>

        <!-- WORKSセクション -->
        <section class="works">
            <p class="section__title-en">WORKS</p>
            <h2 class="section__title">過去に制作させていただいた作品のご紹介</h2>
            <p class="section__summary">サイトの公開が終了している場合があります。また、一部、学修中の架空のサイトも含まれます。</p>

            <ul class="top-slider__items">
                <li class="top-slider__item"><a href=""><img src="/img/service/page_top/works/web/firstview_hair-cut_site.webp" alt=""></a></li>
                <li class="top-slider__item"><a href=""><img src="/img/service/page_top/works/web/firstview_senior_site.webp" alt=""></a></li>
                <li class="top-slider__item"><a href=""><img src="/img/service/page_top/works/web/firstview_care-station_site.webp" alt=""></a></li>
                <li class="top-slider__item"><a href=""><img src="/img/service/page_top/works/web/firstview_nursing_site.webp" alt=""></a></li>
                <li class="top-slider__item"><a href=""><img src="/img/service/page_top/works/web/firstview_kindergarten_site.webp" alt=""></a></li>
                <li class="top-slider__item"><a href=""><img src="/img/service/page_top/works/flyer/flyer_about-care.jpg" alt=""></a></li>
                <li class="top-slider__item"><a href=""><img src="/img/service/page_top/works/flyer/Flyer_cupcakery-shop.webp" alt=""></a></li>
                <li class="top-slider__item"><a href=""><img src="/img/service/page_top/works/flyer/flyer_ exhibition.webp" alt=""></a></li>
                <li class="top-slider__item"><a href=""><img src="/img/service/page_top/works/flyer/flyer_about-credit.jpg" alt=""></a></li>
                <li class="top-slider__item"><a href=""><img src="/img/service/page_top/works/flyer/flyer_company-overview-another.jpg" alt=""></a></li>
            </ul>
            
            <a class="btn btn__gradient-blue btn__gradient-blue--center btn__open-modal" href="/portfolio/index.php">もっと見る</a>

        </section>

        <!-- FLOWセクション -->
        <section class="flow" id="flow">
            <p class="section__title-en">FLOW</p>
            <h2 class="section__title">依頼から納品までの流れ</h2>
            <p class="section__summary">※制作物により異なる場合があります。</p>

            <div class="flow__container">
                <div class="flow__box">
                    <img src="/img/common/flow/number_1_half.png" alt="" >
                    <h3>ヒアリング・要件確認</h3>
                    <p class="text__basic text__basic--indent">お客様のビジネスやプロジェクトの目的、ターゲット、デザインのイメージなどを具体的にヒアリングし、要件を整理します。必要に応じて、リファレンス資料やデザインの参考例を共有いただきます。</p>
                </div>
                <div class="flow__box">
                    <img src="/img/common/flow/number_2_half.png" alt="" >
                    <h3>お見積り・ご提案</h3>
                    <p class="text__basic text__basic--indent">ヒアリング内容に基づき、お見積りとスケジュールをご提案いたします。お客様のご要望に応じたプランやオプションも提案可能です。</p>
                </div>
                <div class="flow__box">
                    <img src="/img/common/flow/number_3_half.png" alt="" >
                    <h3>契約・正式発注</h3>
                    <p class="text__basic text__basic--indent">お見積りや内容にご納得いただけたら、正式なご契約となります。契約書にサインいただき、プロジェクトがスタートします。必要に応じて、着手金をお支払いいただく場合もあります。</p>
                </div>
                <div class="flow__box">
                    <img src="/img/common/flow/number_4_half.png" alt="" >
                    <h3> デザイン作成・レビュー</h3>
                    <p class="text__basic text__basic--indent">デザイン案を作成し、お客様にご確認いただきます。修正やフィードバックがあればお伝えいただき、必要に応じて調整を行います。最大〇回までの修正対応が含まれます。</p>
                </div>
                <div class="flow__box">
                    <img src="/img/common/flow/number_5_half.png" alt="" >
                    <h3>納品・最終確認</h3>
                    <p class="text__basic text__basic--indent">デザインが確定した後、最終的なデータを納品いたします。納品形式はお客様のご要望に応じて、WebデザインならHTMLファイル、バナーやチラシなら印刷データ（PDF、JPG）など柔軟に対応いたします。
                    </p>
                </div>
            </div>

            <p class="flow__note">納品後も必要に応じてサポートを提供します。<br class="sp-none"><wbr>Webサイトの運用サポートや更新、デザインの追加修正など、継続的なフォローも可能です。<wbr>お気軽にご相談ください。</p>

        </section>

        <!-- CTAセクション -->
        <?php include($webRoot . '/inc/head/navigation/contact.php'); ?>



    </main>

    <footer>

    </footer>

    <!-- pc固定フッター -->
    <!-- <a class="btn btn__view-portfolio btn__view-portfolio--fixed sp-none" id="btn__view-portfolio--fixed" href="/portfolio/index.php">
        <div class="btn__view-portfolio-container">
            <p>Watch Portfolio</p>
            <p>制作実績を見る</p>
        </div>
    </a> -->

    <div class="fixed-footer" id="fixed__footer">

        <a class="fixed-footer__contact-btn fixed-footer__contact-btn--pc-none" href="/contact/general/index.php">お問い合わせ</a>

        <div class="btn btn__view-portfolio btn__view-portfolio--fixed btn__open-modal">
            <div class="btn__view-portfolio-container">
                <p>Watch Portfolio</p>
                <p>制作実績を見る</p>
            </div>
        </div>

    </div>

    <!-- モーダルウィンドウ -->
    <div class="portfolio-modal__mask"></div>
    <div class="portfolio-modal">
        <p class="portfolio-modal__ttl-en">Watch Portfolio</p>
        <h2 class="portfolio-modal__ttl">制作実績を見る</h2>

        <div class="portfolio-modal__container">

            <ul class="portfolio-modal__lists">
                <li class="portfolio-modal__list">
                    <a href="/portfolio/web/index.php">
                        <img src="/img/service/page_top/service/img_web.png" alt="">
                        <div class="pc-no-box">
                            <h3>Web制作</h3>
                            <p>詳しく見る</p>
                        </div>
                    </a>
                </li>
                <li class="portfolio-modal__list">
                    <a href="/portfolio/flyer/index.php">
                        <img src="/img/service/page_top/service/img_flyer.png" alt="">
                        <div class="pc-no-box">
                            <h3>フライヤー制作</h3>
                            <p>詳しく見る</p>
                        </div>
                    </a>
                </li>
                <li class="portfolio-modal__list">
                    <a href="/portfolio/banner/index.php">
                        <img src="/img/service/page_top/service/img_banner.png" alt="">
                        <div class="pc-no-box">
                            <h3>バナー制作</h3>
                            <p>詳しく見る</p>
                        </div>
                    </a>
                </li>
            </ul>
            <a href="/contact/general/index.php" class="portfolio-modal__cta">
                <p>お問い合わせ</p>
            </a>
        </div>

        <div class="portfolio-modal__close-btn"></div>

    </div>

    <!-- sp固定フッター -->
    <!-- <div class="fixed-footer">
        <a class="fixed-footer__btn fixed-footer__btn--contact" href="">お問い合わせ</a>
        <a class="fixed-footer__btn fixed-footer__btn--portfolio" href="">制作実績を見る</a>
    </div> -->



    <!-- jQueryを追加（SlickはjQuery依存） -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- SlickのJavaScriptを追加 -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.top-slider__items').slick({
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
                            // slidesToShow: 1,      // 表示するスライドを3枚に設定
                            // centerMode: true,     // 中央寄せを有効化
                            // variableWidth: true, // 固定幅を使用
                            // arrows: false         // 矢印は引き続き非表示
                //         }
                //     }
                // ]
            });
        });
        
        
    </script>

</body>