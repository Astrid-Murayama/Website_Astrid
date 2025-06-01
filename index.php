<!DOCTYPE html>
<html lang="ja">
<head>

    <!-- 定義済みPHP変数の読み込み -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/function/global.php'); ?>

    <!-- 全ページ共通の要素を読み込み -->
    <?php require_once($webRoot . '/inc/head/common.php'); ?>

    <!-- ページ固有のメタデータ設定 -->
    <title>フリーランスのホームページ制作 | スピード対応・WordPress対応・明朗価格</title>
    <meta name="keywords" content="ホームページ制作, フリーランス, WordPress, スピード対応, 明朗価格, Webデザイン, 中小企業, 個人事業主, LP制作, コーディング">
    <meta name="description" content="フリーランスによるホームページ制作サービス。WordPress対応、短納期にも柔軟対応、料金も明朗で安心。中小企業や個人事業主様の集客・信頼獲得を支援します。">

    <!-- particleライブラリ本体 -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <!-- slick.js -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
    <!-- SwiperのJS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- SwiperのCSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- FV、パーティクルの設定に関するjs -->
    <script type="module" src="<?= cacheBust("/js/particles-config.js") ?>" defer></script>
    <!-- フェードインに関するjs -->
    <script type="module" src="<?= cacheBust("/js/fade-in.js") ?>" defer></script>
    <!-- 3Dカルーセルスライダーに関するjs -->
    <script type="module" src="<?= cacheBust("/js/3d-carousel.js") ?>" defer></script>
    <!-- 100vh毎にスクロールさせる動きに関するjs -->
    <script type="module" src="<?= cacheBust("/js/scroll.js") ?>" defer></script>
    <!-- webセクションのslickに関するjs -->
    <script type="module" src="<?= cacheBust("/js/slick.js") ?>" defer></script>
    <!-- aboutセクション、アイコン複製に関するjs -->
    <script type="module" src="<?= cacheBust("/js/clone.js") ?>" defer></script>
    <!-- フライヤーの矢印に関するjs -->
    <script type="module" src="<?= cacheBust("/js/slide-control.js") ?>" defer></script>

</head>
<body>

    <!-- 開発用にOFF -->
    <div class="shutter"></div>
    <div class="wrapper">

        <!-- ヘッダーセクション -->
        <?php include($webRoot . '/inc/header.php'); ?>

        <main>

            <!-- 固定CTA -->
            <?php include($webRoot . '/inc/fixed-cta.php'); ?>

            <section id="hero" class="hero section section--hero">
                <div class="hero__main-container section-container">

                    <!-- パーティクル描画エリア -->
                    <div id="particles-js"></div>
                    
                    <div class="hero__info-container">
                        <div class="hero__text-clip">
                            <p>Tsukasa Murayama</p>
                        </div>
                        <!-- <h1>
                            <span class="hero__ttl hero__ttl--main">FREELANCE</span>
                            <span class="hero__ttl hero__ttl--img"><img src="/img/home/text_astrid-works.svg" alt=""></span>
                            <span class="hero__ttl hero__ttl--sub">Web Creator & Graphic Designer</span>
                        </h1> -->

                        <h1>
                            <span class="hero__ttl hero__ttl--main">FREELANCE</span>
                            <span class="hero__ttl hero__ttl--img">
                                <svg id="freelance-text" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.74 112">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                stroke: red;
                                                stroke-miterlimit: 10;
                                                stroke-width: 3px;
                                                
                                            }

                                            .cls-1, .cls-2 {
                                                fill: none;
                                            }

                                            .cls-2 {
                                                isolation: isolate;
                                            }

                                            .cls-3 {
                                                fill: none;
                                            }
                                        </style>

                                    </defs>
                                    <g class="cls-1">
                                        <path class="cls-2" d="m92.63,41.85c1.73.86,2.52,1.51,3.02,1.94.79.65.79,1.22.5,1.66-.22.36-.79.5-1.22.14-.86-.72-2.16-1.51-3.24-2.09-1.8,3.17-3.53,6.34-4.9,9.29-3.6,7.27-5.04,12.1-5.04,15.05,0,1.87.58,2.95,1.51,3.53.72.5,1.58.65,2.38.65,2.52,0,4.97-1.8,5.76-2.81.43-.5.79-.65.94-.58.36.07.29.79-.07,1.3-1.01,1.44-4.46,3.82-7.92,3.82-.94,0-1.87-.14-2.74-.58-2.45-1.22-4.54-2.95-4.54-6.91,0-2.3.72-5.4,2.52-9.65,1.58-3.82,5.26-9.65,8.57-14.76-2.45-1.01-5.76-2.23-9.79-3.24-2.16,2.3-4.25,4.54-6.26,6.77-12.31,13.68-22.18,25.28-37.59,28.52-1.51.36-3.17.5-4.97.5-7.34,0-15.99-3.17-16.2-13.18-.29-12.96,20.09-23.26,38.31-25.49,3.82-.5,7.34-.65,10.66-.65,5.69,0,10.66.58,14.83,1.44,9.36-9,17.93-17.07,21.03-19.15,3.82-2.59,6.26-3.1,8.06-2.59,1.44.43,2.02,2.02,1.01,3.53-2.23,3.17-8.78,13.32-14.62,23.55Zm-30.39-5.18c-4.39,0-9.29.43-14.62,1.37-15.05,2.74-34.13,12.46-32.26,23.48,1.01,5.76,5.98,7.49,11.16,7.49,3.17,0,6.41-.65,8.86-1.37,11.95-3.46,20.59-10.87,29.67-19.51,3.46-3.24,7.06-6.77,10.58-10.15-3.89-.79-8.35-1.3-13.39-1.3Zm38.24-19.01c-3.24,1.87-12.1,10.44-20.67,19.44,4.1,1.01,7.27,2.23,9.43,3.17,7.2-10.8,15.77-21.6,16.42-22.39.65-.65.5-1.44.07-1.66-1.01-.5-3.1.22-5.26,1.44Z"/>
                                        <path class="cls-2" d="m115.73,66.77c-4.03,3.02-7.56,4.97-10.01,5.76-1.15.29-2.45.5-3.67.5-.86,0-1.73-.14-2.52-.29-4.03-.87-5.33-4.11-5.33-6.91,0-1.01.14-2.02.43-2.81.86-2.45,2.66-3.74,4.03-3.53,1.01-.94,2.52-2.38,4.25-4.03,1.51-1.51,4.9-4.39,5.9-5.98.36-.65.5-1.22.65-2.02.29-1.01.58-2.38,1.8-4.1.86-1.37,2.38-2.52,3.67-1.73,1.37.86.43,3.6-.36,4.82-.94,1.37-2.02,2.38-3.24,3.53-.43,1.51,1.51,6.7,1.51,11.45,0,1.51-.22,2.95-.72,4.25-.36,1.01-.86,1.87-1.44,2.66,1.73-1.08,4.18-2.88,5.9-4.25,2.66-2.16,6.84-5.98,8.64-7.92,1.08-1.29,2.3.14,1.22,1.22-.94,1.01-4.68,4.82-10.73,9.36Zm-6.77-14.62s-3.38,3.24-4.9,4.68c-.86.87-2.66,2.52-4.03,3.82.58,1.22,0,2.66-.79,3.24-.5.36-1.01.5-1.44.65-.58.22-1.01.58-1.44,1.44-.5,1.3.07,4.11,2.95,4.61,1.8.36,4.68-1.3,7.13-5.26,2.02-3.31,2.74-8.21,2.74-11.31,0-.79-.22-1.87-.22-1.87Z"/>
                                        <path class="cls-2" d="m139.49,41.28h5.26c.65,0,.94.14,1.01.43.14.58-.79,1.44-2.09,1.44h-5.47c-1.22,1.8-2.52,3.82-3.96,5.98-5.9,8.93-9.43,14.76-10.08,18.79-.43,2.3,1.22,2.45,2.52,1.87,2.59-1.01,6.55-3.82,8.78-5.62,2.3-1.87,7.49-6.48,8.78-8.14.36-.43,1.15-.43,1.51-.07.22.29.22.79-.36,1.37-1.66,2.02-6.91,6.55-9.72,8.71-2.66,1.95-9.29,7.06-13.18,6.55-3.74-.5-4.39-3.24-3.74-5.98,1.3-5.4,4.82-9.94,11.31-18.51,1.22-1.58,2.45-3.31,3.74-4.97h-5.04c-.65,0-.94-.22-.94-.5-.07-.58.86-1.37,2.09-1.37h5.33c5.11-6.55,9.87-12.31,11.23-13.32.36-.29,1.66-.5,2.16-.29.22.07.29.22.14.43-1.87,2.45-4.75,6.34-9.29,13.18Z"/>
                                        <path class="cls-2" d="m163.32,65.54c-5.47,4.39-10.58,7.13-14.91,7.27-3.31.14-5.4-.79-5.83-2.66-.72-3.24,2.09-6.41,4.9-8.64,3.89-3.1,6.12-3.89,9-6.05,1.94-1.37,3.67-3.03,3.46-4.46-.36-1.66-2.23-2.09-3.96-3.02-.94-.43-1.58-1.15-1.58-1.15,0,0-3.82,4.75-5.69,6.91-1.51,1.8-4.82,5.47-6.48,6.84-1.73,1.44-2.81.14-1.51-.94,1.73-1.44,4.18-4.39,6.98-7.63,2.38-2.66,5.04-5.9,5.26-6.98-.22-.43-.65-1.08-.29-2.3.43-1.66,1.51-2.38,2.45-2.38,1.58,0,1.87,1.15,1.73,2.38-.22,1.22-1.3,2.3-1.3,2.3,0,0,.43.72,1.58,1.37,1.58.87,4.97,1.59,4.68,4.9-.43,4.18-7.63,9.87-11.95,15.12-1.37,1.58-1.66,3.17-1.44,3.89.07.22.43.43.65.43,2.02.36,7.63-2.23,12.96-6.34,3.67-2.88,6.77-5.69,8.93-8.06,1.08-1.22,2.59-.21,1.66.87-1.66,1.87-5.04,4.9-9.29,8.35Z"/>
                                        <path class="cls-2" d="m181.61,66.05c-2.66,2.02-9.29,7.06-13.18,6.55-3.74-.5-4.25-3.67-3.74-5.98.72-3.24,4.68-8.35,6.77-11.02,3.02-3.89,8.93-10.22,9.94-11.02.5-.36,2.88-.65,2.3.14-1.01,1.51-4.75,6.7-8.06,11.88-3.38,5.26-5.18,8.5-5.54,11.3-.36,2.3.86,2.45,2.52,1.87,2.66-.86,6.55-3.82,8.78-5.62,2.3-1.87,7.49-6.41,8.78-8.14.58-.72,2.45-.22,1.15,1.29-1.66,2.02-6.91,6.55-9.72,8.71Zm7.56-30.03c-1.22,2.23-3.17,4.03-4.25,4.03s-.94-1.8.36-4.03c1.22-2.23,3.17-4.03,4.25-4.03s.94,1.8-.36,4.03Z"/>
                                        <path class="cls-2" d="m239.07,16.15c0,4.03-4.9,11.81-9.65,18-3.31,4.32-12.17,14.4-19.87,22.61-2.59,4.61-4.75,9.14-4.75,11.67,0,.94.36,1.73,1.22,1.73,4.46,0,17.35-12.31,18.94-14.04.22-.29.5-.36.79-.36.36,0,.72.29.72.72,0,1.22-5.98,6.48-9.86,9.36-2.09,1.58-8.42,6.84-12.96,6.84-2.81,0-4.32-2.3-4.32-4.39,0-.43.07-.94.14-1.37-4.54,4.03-7.42,5.83-9.72,5.83-1.44,0-4.68-.72-4.68-5.62,0-2.74,1.3-6.77,5.9-12.17,6.98-8.28,15.63-11.59,19.8-11.59.94,0,1.58.14,2.02.43,3.38-5.4,7.13-11.3,9.5-15.12,3.89-6.26,9.65-15.27,14.04-15.27.65,0,1.15.14,1.73.5.65.43,1.01,1.22,1.01,2.23Zm-28.87,28.87c-6.19,0-20.59,14.4-20.59,22.97,0,1.22.5,2.59,1.73,2.59,2.09,0,6.05-3.89,9.5-7.56,1.44-2.88,3.6-5.76,4.9-7.92,1.15-1.94,3.46-5.54,6.05-9.65-.58-.29-.94-.43-1.58-.43Zm25.92-29.09c-3.46,0-15.48,22.83-19.15,28.66-.79,1.29-2.02,3.17-3.24,5.18,5.04-5.47,10.51-11.74,14.04-16.27,4.18-5.47,9.14-13.54,9.14-16.49,0-.5-.14-.86-.43-1.01-.14-.07-.22-.07-.36-.07Z"/>
                                        <path class="cls-2" d="m344.48,26.44c0,6.05-2.45,13.46-7.2,21.67-6.12,10.51-20.31,24.77-29.6,24.77-5.9,0-7.27-4.9-7.27-10.8,0-1.87.14-3.89.29-6.05-4.54,4.82-19.23,17.28-28.15,17.28-4.39,0-6.34-2.88-6.34-5.98,0-11.52,19.44-21.1,26.64-30.53,3.17-4.18,5.11-8.64,5.11-12.6,0-5.26-3.53-9-10.37-9-5.33,0-12.02,2.09-18.79,5.98-9.65,5.54-18.94,16.85-18.94,24.48,0,5.11,3.96,7.13,8.21,7.13,5.69,0,12.74-3.17,15.91-5.62,6.7-5.04,8.78-9.86,10.01-13.9.29-1.08.86-1.37,1.3-1.37s.72.29.72.79c0,2.38-2.02,8.78-11.02,15.7-3.67,2.81-10.66,5.9-16.85,5.9-6.91,0-11.59-4.68-11.59-12.39,0-6.91,4.25-14.62,13.03-20.88,8.21-5.76,16.99-8.06,24.19-8.06,11.59,0,16.06,5.18,16.06,12.02,0,12.53-12.31,20.95-20.67,30.67-3.6,4.25-6.77,9.22-6.77,12.38,0,1.51.87,2.95,2.81,2.95,6.48,0,22.47-14.11,26.14-17.86,2.88-13.25,9.29-26.35,15.77-26.35,1.3,0,2.16.58,2.16,2.02,0,4.54-7.56,16.06-16.2,24.91-.65,2.81-1.01,5.62-1.01,8.06,0,5.04,1.66,9.14,6.26,9.14,7.2,0,18.79-10.8,25.13-22.54,5.18-9.58,6.84-20.38,6.91-27,0-2.67-.5-4.75-.5-5.62,0-.43.07-.58.22-.58.36,0,1.15.86,1.8,1.8,1.73,2.66,2.59,5.83,2.59,9.43Zm-29.02,3.53c-2.74,0-7.85,7.27-11.52,20.45,7.78-8.5,12.53-16.99,12.53-19.59,0-.36-.07-.58-.29-.72-.22-.14-.5-.14-.72-.14Z"/>
                                        <path class="cls-2" d="m364.92,65.18c-1.37.36-2.67.58-3.82.58-1.73,0-3.1-.43-4.25-1.15-5.4,5.26-12.02,9-16.78,9-3.53,0-5.33-2.02-5.33-5.18,0-2.66,1.22-6.12,3.82-9.87,5.62-8.28,15.41-15.05,21.89-15.05,3.46,0,5.26,2.02,5.26,5.18,0,2.66-1.22,6.05-3.82,9.87-1.01,1.51-2.23,3.02-3.53,4.46.94.58,1.8.94,3.1.94.86,0,1.87-.14,3.17-.58,3.53-1.08,8.14-5.9,9.22-7.2,1.01-1.22,2.3-.07,1.51.87-.86,1.01-5.83,6.91-10.44,8.14Zm-1.51-16.49c0-2.02-1.01-3.24-3.02-3.24-4.25,0-11.52,5.62-16.2,12.53-2.52,3.74-3.75,7.06-3.75,9.36,0,2.02.94,3.24,2.95,3.24,3.1,0,7.63-2.88,11.74-7.06-.72-.58-1.22-1.15-1.51-1.66-.94-1.66-.5-3.6,1.01-4.75,1.15-.94,2.59-1.3,3.82-1.3.94,0,1.8.22,2.23.58,1.8-3.02,2.74-5.76,2.74-7.71Z"/>
                                        <path class="cls-2" d="m393.15,65.54c-5.47,4.39-10.58,7.13-14.91,7.27-3.31.14-5.4-.79-5.83-2.66-.72-3.24,2.09-6.41,4.9-8.64,3.89-3.1,6.12-3.89,9-6.05,1.94-1.37,3.67-3.03,3.46-4.46-.36-1.66-2.23-2.09-3.96-3.02-.94-.43-1.58-1.15-1.58-1.15,0,0-3.82,4.75-5.69,6.91-1.51,1.8-4.83,5.47-6.48,6.84-1.73,1.44-2.81.14-1.51-.94,1.73-1.44,4.18-4.39,6.98-7.63,2.38-2.66,5.04-5.9,5.26-6.98-.22-.43-.65-1.08-.29-2.3.43-1.66,1.51-2.38,2.45-2.38,1.58,0,1.87,1.15,1.73,2.38-.22,1.22-1.3,2.3-1.3,2.3,0,0,.43.72,1.58,1.37,1.58.87,4.97,1.59,4.68,4.9-.43,4.18-7.63,9.87-11.95,15.12-1.37,1.58-1.66,3.17-1.44,3.89.07.22.43.43.65.43,2.02.36,7.63-2.23,12.96-6.34,3.67-2.88,6.77-5.69,8.93-8.06,1.08-1.22,2.59-.21,1.66.87-1.66,1.87-5.04,4.9-9.29,8.35Z"/>
                                        <path class="cls-2" d="m428.79,64.97c-1.01.79-12.31,9.72-17.14,7.42-1.51-.72-2.09-2.09-2.09-3.38,0-.94.36-1.87.86-2.45,1.87-1.87,3.1-3.53,2.16-4.75-.5-.65-.94-.72-1.94-.86-1.51.72-2.88,1.22-4.18,1.37-1.37.14-2.23-.72-2.09-1.66.22-1.08,1.66-1.22,2.52-1.29.65-.07,1.37-.07,2.16-.07,1.44-.5,4.75-1.87,7.85-4.32,4.54-3.6,8.06-7.78,6.84-8.93-1.15-1.15-5.76.87-9.72,3.6-3.17,2.23-11.67,10.01-14.47,13.68,0,0-6.84,9.36-7.13,9.36-.79.22-2.74-.36-2.66-1.01.14-1.22,3.89-6.19,10.08-14.62,9.29-12.53,18-26.21,27.43-38.31,2.88-3.6,6.77-6.34,9.07-4.97.72.43,1.01,1.15,1.01,2.16,0,4.18-5.54,12.38-9.87,16.78-5.11,5.18-9.29,7.85-12.82,9.43-.72,1.08-3.17,4.54-7.92,11.16,2.16-1.73,4.46-4.18,8.28-6.41,3.53-2.02,7.78-3.6,10.73-3.6,1.3,0,2.3.29,2.95,1.01,2.09,2.38-3.03,7.78-9.43,11.95-2.02,1.37-4.46,2.66-6.05,3.46,1.87.36,2.81.86,3.31,1.87,1.01,2.23-.72,4.39-1.22,5.62-.79,1.66-1.01,2.88,1.01,2.81,2.59-.14,7.06-2.66,11.09-6.05,3.89-3.24,6.41-5.4,8.14-7.42,1.22-1.3,2.66-.87,1.58.79-1.08,1.73-7.34,6.84-8.35,7.63Zm-5.76-35.43c-1.94,2.95-3.96,6.05-6.05,9.14,2.95-1.51,6.55-4.46,9.51-7.34,5.04-5.04,10.01-13.83,8.21-14.91-2.23-1.44-9.15,9.29-11.67,13.11Z"/>
                                        <path class="cls-2" d="m449.59,66.77c-4.03,3.02-7.56,4.97-10.01,5.76-1.15.29-2.45.5-3.67.5-.87,0-1.73-.14-2.52-.29-4.03-.87-5.33-4.11-5.33-6.91,0-1.01.14-2.02.43-2.81.87-2.45,2.67-3.74,4.03-3.53,1.01-.94,2.52-2.38,4.25-4.03,1.51-1.51,4.9-4.39,5.9-5.98.36-.65.5-1.22.65-2.02.29-1.01.58-2.38,1.8-4.1.86-1.37,2.38-2.52,3.67-1.73,1.37.86.43,3.6-.36,4.82-.94,1.37-2.02,2.38-3.24,3.53-.43,1.51,1.51,6.7,1.51,11.45,0,1.51-.22,2.95-.72,4.25-.36,1.01-.86,1.87-1.44,2.66,1.73-1.08,4.18-2.88,5.9-4.25,2.66-2.16,6.84-5.98,8.64-7.92,1.08-1.29,2.3.14,1.22,1.22-.94,1.01-4.68,4.82-10.73,9.36Zm-6.77-14.62s-3.38,3.24-4.9,4.68c-.86.87-2.66,2.52-4.03,3.82.58,1.22,0,2.66-.79,3.24-.5.36-1.01.5-1.44.65-.58.22-1.01.58-1.44,1.44-.5,1.3.07,4.11,2.95,4.61,1.8.36,4.68-1.3,7.13-5.26,2.02-3.31,2.74-8.21,2.74-11.31,0-.79-.22-1.87-.22-1.87Z"/>
                                    </g>
                                </svg>                        
                            </span>
                            <span class="hero__ttl hero__ttl--sub">Web Creator & Graphic Designer</span>
                        </h1>

                        <p class="hero__years">2021<span class="hero__years-bar"></span>2025</p>
                        <p class="hero__copy" data-i18n="hero.copy">目に留まる、<br class="display-none--pc">心に残る、<br class="display-none--pc">成<span class="accent-red">果</span>を生むデザイン。</p>
                    </div>
                    <div class="hero__scrollbar">
                        <p>SCROLL</p>
                        <span></span>
                    </div>            
                </div>
            </section>

            <section id="web" class="web section section--web">

                <div class="web__container">

                    <h2 class="section-ttl">WEB SITE</h2>
                    <p class="section-txt" data-i18n="web.description">最適化された<span>デザイン設計</span>、デザインカンプからの<span>忠実なコーディング</span>、<br class="display-none--tab">また、特定のページのみやパーツ単位の部分的な制作サポートまで柔軟に対応可能です。<br class="display-none--tab">さらに、<span>WordPress構築</span>、<span>BEM設計</span>、<span>JSライブラリ</span>による動きのある表現、レスポンシブ対応もお任せください。<br class="display-none--tab">納期厳守・丁寧な対応を心がけ、信頼できる外注パートナーを目指しています。</p>

                    <div id="contentContainer" class="trans3d"> 
                        <div id="carouselContainer" class="trans3d">
                            <figure id="item1" class="carouselItem trans3d">
                                <div class="carouselItemInner trans3d">
                                    <img src="/img/web/fv_ barber.webp" alt="">
                                </div>
                            </figure>
                            <figure id="item2" class="carouselItem trans3d">
                                <div class="carouselItemInner trans3d">
                                    <img src="/img/web/fv_clening.webp" alt="">
                                </div>
                            </figure>
                            <figure id="item3" class="carouselItem trans3d">
                                <div class="carouselItemInner trans3d">
                                    <img src="/img/web/fv_cooking.webp" alt="">
                                </div>
                            </figure>
                            <figure id="item4" class="carouselItem trans3d">
                                <div class="carouselItemInner trans3d">
                                    <img src="/img/web/fv_home-nursing.webp" alt="">
                                </div>
                            </figure>
                            <figure id="item5" class="carouselItem trans3d">
                                <div class="carouselItemInner trans3d">
                                    <img src="/img/web/fv_house-maid.webp" alt="">
                                </div>
                            </figure>
                            <figure id="item6" class="carouselItem trans3d">
                                <div class="carouselItemInner trans3d">
                                    <img src="/img/web/fv_senior_lp.webp" alt="">
                                </div>
                            </figure>
                            <figure id="item7" class="carouselItem trans3d">
                                <div class="carouselItemInner trans3d">
                                    <img src="/img/web/fv_nursery-school.webp" alt="">
                                </div>
                            </figure>
                            <figure id="item8" class="carouselItem trans3d">
                                <div class="carouselItemInner trans3d">
                                    <img src="/img/web/fv_nursing-home.webp" alt="">
                                </div>
                            </figure>
                            <figure id="item9" class="carouselItem trans3d">
                                <div class="carouselItemInner trans3d">
                                    <img src="/img/web/fv_nursing-home_site.webp" alt="">
                                </div>
                            </figure>
                            <figure id="item10" class="carouselItem trans3d">
                                <div class="carouselItemInner trans3d">
                                    <img src="/img/web/fv_senior-site.webp" alt="">
                                </div>
                            </figure>
                            <figure id="item11" class="carouselItem trans3d">
                                <div class="carouselItemInner trans3d">
                                    <img src="/img/web/fv_service-top.webp" alt="">
                                </div>
                            </figure>
                            <figure id="item12" class="carouselItem trans3d">
                                <div class="carouselItemInner trans3d">
                                    <img src="/img/web/fv_house-support.webp" alt="">
                                </div>
                            </figure>
                        </div>
                    </div>

                    <div class="web__skill">
                        <div class="web__lists">
                            <div class="web__list-container">
                                <div class="web__list">
                                    <img src="/img/web/icon_pc.svg" alt="">
                                    <span data-i18n="web.list.design">デザイン制作</span>
                                </div>
                                <div class="web__list">
                                    <img src="/img/web/icon_html.svg" alt="">
                                    <span data-i18n="web.list.html">HTML・PHP</span>
                                </div>
                            </div>
                            <div class="web__list-container">
                                <div class="web__list">
                                    <img src="/img/web/icon_css.svg" alt="">
                                    <span data-i18n="web.list.scss">SCSSコーディング</span>
                                </div>
                                <div class="web__list">
                                    <img src="/img/web/icon_tab.svg" alt="">
                                    <span data-i18n="web.list.responsive">レスポンシブ対応</span>
                                </div>
                            </div>
                            <div class="web__list-container">
                                <div class="web__list">
                                    <img src="/img/web/icon_pen.svg" alt="">
                                    <span data-i18n="web.list.writing">ライティング</span>
                                </div>
                                <div class="web__list">
                                    <img src="/img/web/icon_wordpress.svg" alt="">
                                    <span data-i18n="web.list.wordpress">WordPress制作</span>
                                </div>
                            </div>
                            <div class="web__list-container">
                                <div class="web__list">
                                    <img src="/img/web/icon_lan.svg" alt="">
                                    <span data-i18n="web.list.componentization">コンポーネント化</span>
                                </div>
                                <div class="web__list">
                                    <img src="/img/web/icon_seo.svg" alt="">
                                    <span data-i18n="web.list.seo">SEO対策</span>
                                </div>
                            </div>
                            <div class="web__list-container">
                                <div class="web__list">
                                    <img src="/img/web/icon_js.svg" alt="">
                                    <span data-i18n="web.list.library">ライブラリの導入</span>
                                </div>
                                <div class="web__list">
                                    <img src="/img/web/icon_menu.svg" alt="">
                                    <span data-i18n="web.list.cms">CMS構築</span>
                                </div>
                            </div>
                            <div class="web__list-container">
                                <div class="web__list">
                                    <img src="/img/web/icon_house.svg" alt="">
                                    <span data-i18n="web.list.renewal">リニューアル</span>
                                </div>
                                <div class="web__list">
                                    <img src="/img/web/icon_folder.svg" alt="">
                                    <span data-i18n="web.list.git">Git管理</span>
                                </div>
                            </div>
                            <div class="web__list-container">
                                <div class="web__list">
                                    <img src="/img/web/icon_mail.svg" alt="">
                                    <span data-i18n="web.list.form">フォームの設置</span>
                                </div>
                                <div class="web__list">
                                    <img src="/img/web/icon_setting.svg" alt="">
                                    <span data-i18n="web.list.management">サイト更新・管理</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="/web/index.php" class="btn btn--with-offset-border">
                        <span>VIEW ALL</span>
                        <span class="btn__arrow"></span>
                    </a>
                </div>

            </section>

            <section id="flyer" class="flyer section section--flyer">

                <div class="flyer__container">
                    
                    <div class="flyer__info-container">
                        <h2 class="section-ttl">FLYER</h2>
                        <!-- ulに変更？ -->
                        <div class="flyer__category-container">
                            <h3 data-i18n="flyer.category.sales">営業<br>資料</h3>
                            <h3 data-i18n="flyer.category.insert">折込<br>チラシ</h3>
                            <h3 data-i18n="flyer.category.poster">ポスター<br>制作</h3>                        
                        </div>
                        <p class="section-txt" data-i18n="flyer.description">営業資料や折込チラシ、ポスターの他、<span>リーフレット</span>やDM、<br class="display-none--tab">さらに、<span>名刺</span>やショップカードなど目的に合わせた紙媒体の制作が可能です。<br class="display-none--tab">視覚的に魅力的なだけでなく、<span>伝わる構成</span>と<span>高い可読性</span>で、成果につながるチラシをご提案します。<br class="display-none--tab">Webとのトーン統一、キャッチコピーや構成のご相談、<span>印刷データ対応</span>まで一括でお任せください。<br class="display-none--tab">ご希望や用途をしっかりお伺いし、伝わる・届くデザインを形にします。</p>
                        <a href="/flyer/index.php" class="btn btn--with-offset-border">
                            <span>VIEW ALL</span>
                            <span class="btn__arrow"></span>
                        </a>

                    </div>

                    <!-- カルーセル部分、仮置き -->
                    <div class="flyer__works-container">
                        <div class="container">

                            <div class="slide">

                                <div class="item">
                                    <img src="/img/flyer/flyer_about-company.webp" alt="">
                                    <!-- <div class="content">
                                        <div class="name">Switzerland</div>
                                        <div class="des">X-Dev, Transforming code into visual poetry..!</div>
                                        <button>See More</button>
                                    </div> -->
                                </div>
                                <div class="item">
                                    <img src="/img/flyer/flyer_senior-support-v1.webp" alt="">

                                    <!-- <div class="content">
                                        <div class="name">Australia</div>
                                        <div class="des">X-Dev, Transforming code into visual poetry..!</div>
                                        <button>See More</button>
                                    </div> -->
                                </div>
                                <div class="item">
                                    <img src="/img/flyer/flyer_demo_bouldering.webp" alt="">

                                    <!-- <div class="content">
                                        <div class="name">Iceland</div>
                                        <div class="des">X-Dev, Transforming code into visual poetry..!</div>
                                        <button>See More</button>
                                    </div> -->
                                </div>
                                <div class="item">
                                    <img src="/img/flyer/flyer_cafe.webp" alt="">

                                    <!-- <div class="content">
                                        <div class="name">Finland</div>
                                        <div class="des">X-Dev, Transforming code into visual poetry..!</div>
                                        <button>See More</button>
                                    </div> -->
                                </div>
                                <div class="item">
                                    <img src="/img/flyer/flyer_demo_exhibition.webp" alt="">

                                    <!-- <div class="content">
                                        <div class="name">Netherland</div>
                                        <div class="des">X-Dev, Transforming code into visual poetry..!</div>
                                        <button>See More</button>
                                    </div> -->
                                </div>
                                <div class="item">
                                    <img src="/img/flyer/flyer_summary_what-we-do.webp" alt="">

                                    <!-- <div class="content">
                                        <div class="name">Ireland</div>
                                        <div class="des">X-Dev, Transforming code into visual poetry..! </div>
                                        <button>See More</button>
                                    </div> -->
                                </div>

                            </div>

                            <div class="button">
                                <button class="prev">
                                    <img src="/img/web/icon_arrow-white-left.png" alt="">
                                </button>
                                <!-- <button class="prev"><i
                                        class="fa-solid fa-arrow-left"></i>
                                </button> -->
                                <button class="next">
                                    <img src="/img/web/icon_arrow-white-right.png" alt="">
                                </button>
                                <!-- <button class="next"><i
                                        class="fa-solid fa-arrow-right"></i>
                                </button> -->
                            </div>

                        </div>

                    </div>
                    <!-- <div class="flyer__works-container">

                        <div id="sliderTrack--up">
                            <ul class="flyer__works-lists flyer__works-lists--up">
                                <li class="flyer__works-list">
                                    <img src="/img/flyer/flyer_bouldering.jpg" alt="">
                                </li>
                                <li class="flyer__works-list">
                                    <img src="/img/flyer/flyer_bouldering.jpg" alt="">
                                </li>
                                <li class="flyer__works-list">
                                    <img src="/img/flyer/flyer_bouldering.jpg" alt="">
                                </li>
                                <li class="flyer__works-list">
                                    <img src="/img/flyer/flyer_bouldering.jpg" alt="">
                                </li>
                                <li class="flyer__works-list">
                                    <img src="/img/flyer/flyer_bouldering.jpg" alt="">
                                </li>
                                <li class="flyer__works-list">
                                    <img src="/img/flyer/flyer_bouldering.jpg" alt="">
                                </li>
                            </ul>
                        </div>


                        <div id="sliderTrack--down">

                            <ul class="flyer__works-lists flyer__works-lists--down">
                                <li class="flyer__works-list">
                                    <img src="/img/flyer/flyer_bouldering.jpg" alt="">
                                </li>
                                <li class="flyer__works-list">
                                    <img src="/img/flyer/flyer_bouldering.jpg" alt="">
                                </li>
                                <li class="flyer__works-list">
                                    <img src="/img/flyer/flyer_bouldering.jpg" alt="">
                                </li>
                                <li class="flyer__works-list">
                                    <img src="/img/flyer/flyer_bouldering.jpg" alt="">
                                </li>
                                <li class="flyer__works-list">
                                    <img src="/img/flyer/flyer_bouldering.jpg" alt="">
                                </li>
                                <li class="flyer__works-list">
                                    <img src="/img/flyer/flyer_bouldering.jpg" alt="">
                                </li>
                            </ul>

                        </div>

                    </div> -->
                </div>

            </section>

            <section id="banner" class="banner section section--banner">

                <div class="banner__container section-container">

                    <div class="container">
                        <input type="radio" name="slider" id="item-1" checked>
                        <input type="radio" name="slider" id="item-2">
                        <input type="radio" name="slider" id="item-3">
                        <div class="cards">
                            <label class="card" for="item-1" id="song-1">
                            <img src="/img/banner/banner_sample.webp" alt="song">
                            </label>
                            <label class="card" for="item-2" id="song-2">
                            <img src="/img/banner/banner_kaseifu.webp" alt="song">
                            </label>
                            <label class="card" for="item-3" id="song-3">
                            <img src="/img/banner/banner_instagram.webp" alt="song">
                            </label>
                        </div>
                        <div class="banner__works-cards-outer display-none--tab">

                            <div id="test">

                                <label class="banner__works-cards" id="banner__works-info--1">
                                    <ul class="banner__works-cards-inner">
                                        <li class="banner__works-card banner__works-card--purpose">
                                            <p class="banner__works-card-ttl">Purpose</p>
                                            <div class="banner__works-card-bar"></div>
                                            <p class="banner__works-card-txt" data-i18n="banner.works.purpose_sns">SNS投稿</p>
                                        </li>
                                        <li class="banner__works-card banner__works-card--category">
                                            <p class="banner__works-card-ttl">Category</p>
                                            <div class="banner__works-card-bar"></div>
                                            <p class="banner__works-card-txt" data-i18n="banner.works.category_apparel">アパレル業</p>
                                        </li>
                                        <li class="banner__works-card banner__works-card--color banner__works-card--color-1">
                                            <p class="banner__works-card-ttl">Color Variations</p>
                                            <ul>
                                                <li class="">#FFFFFF</li>
                                                <li class="">#D6ACf2</li>
                                                <li class="">#9B3B72</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <p class="banner__works-card-size">size:<span>1080×1080</span></p>
                                </label>

                                <label class="banner__works-cards" id="banner__works-info--2">
                                    <ul class="banner__works-cards-inner">
                                        <li class="banner__works-card banner__works-card--purpose">
                                            <p class="banner__works-card-ttl">Purpose</p>
                                            <div class="banner__works-card-bar"></div>
                                            <p class="banner__works-card-txt" data-i18n="banner.works.purpose_column">コラム記事</p>
                                        </li>
                                        <li class="banner__works-card banner__works-card--category">
                                            <p class="banner__works-card-ttl">Category</p>
                                            <div class="banner__works-card-bar"></div>
                                            <p class="banner__works-card-txt" data-i18n="banner.works.category_service">生活サービス業</p>
                                        </li>
                                        <li class="banner__works-card banner__works-card--color banner__works-card--color-2">
                                            <p class="banner__works-card-ttl">Color Variations</p>
                                            <ul>
                                                <li class="">#D60123</li>
                                                <li class="">#D8B355</li>
                                                <li class="">#1A2A47</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <p class="banner__works-card-size">size:<span>250×250</span></p>
                                </label>

                                <label class="banner__works-cards" id="banner__works-info--3">
                                    <ul class="banner__works-cards-inner">
                                        <li class="banner__works-card banner__works-card--purpose">
                                            <p class="banner__works-card-ttl">Purpose</p>
                                            <div class="banner__works-card-bar"></div>
                                            <p class="banner__works-card-txt" data-i18n="banner.works.purpose_google">Google広告</p>
                                        </li>
                                        <li class="banner__works-card banner__works-card--category">
                                            <p class="banner__works-card-ttl">Category</p>
                                            <div class="banner__works-card-bar"></div>
                                            <p class="banner__works-card-txt" data-i18n="banner.works.category_housekeeping">家事サービス業</p>
                                        </li>
                                        <li class="banner__works-card banner__works-card--color banner__works-card--color-3">
                                            <p class="banner__works-card-ttl">Color Variations</p>
                                            <ul>
                                                <li class="">#FFFFFF</li>
                                                <li class="">#F2BF45</li>
                                                <li class="">#E1548D</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <p class="banner__works-card-size">size:<span>600×600</span></p>
                                </label>

                            </div>
                        </div>

                    </div>

                    <div class="banner__info-container">
                        <h2 class="section-ttl">BANNER</h2>
                        <ul class="banner__category-lists">
                            <li class="banner__category-list">
                                <div class="banner__category-ttl">
                                    <p data-i18n="banner.category.ad_p">AD BANNER</p>
                                    <h3 data-i18n="banner.category.ad_h">広告バナー</h3>
                                </div>
                                <img src="/img/banner/banner_ad.webp" alt="">
                            </li>
                            <li class="banner__category-list">
                                <div class="banner__category-ttl">
                                    <p data-i18n="banner.category.header_p">HEADER</p>
                                    <h3 data-i18n="banner.category.header_h">ヘッダー</h3>
                                </div>
                                <img src="/img/banner/banner_header.webp" alt="">
                            </li>
                            <li class="banner__category-list">
                                <div class="banner__category-ttl">
                                    <p data-i18n="banner.category.sns_p">SNS BANNER</p>
                                    <h3 data-i18n="banner.category.sns_h">SNS画像</h3>
                                </div>
                                <img src="/img/banner/banner_sns.webp" alt="">
                            </li>
                            <li class="banner__category-list">
                                <div class="banner__category-ttl">
                                    <p data-i18n="banner.category.thumbnail_p">THUMBNAIL</p>
                                    <h3 data-i18n="banner.category.thumbnail_h">サムネイル</h3>
                                </div>
                                <img src="/img/banner/banner_thumbnail.webp" alt="">
                            </li>
                        </ul>
                        <p class="section-txt" data-i18n="banner.description">「なんとなく目に入る」から「思わずクリックする」へ。<br class="display-none--tab">広告バナーやSNS画像、EC販促バナーや動画サムネイルなど、媒体やサイズに応じた制作が可能です。<br class="display-none--tab"><span>訴求力</span>とブランドイメージを意識したデザインで、<span>複数パターン</span>の制作にも対応いたします。<br class="display-none--tab">また、急ぎのご依頼やABテスト用バナー、Webデザインとの一括依頼も承ります。<br class="display-none--tab"><span>クリック率</span>と<span>コンバージョン</span>の向上をサポートします。</p>
                        <a href="/banner/index.php" class="btn btn--with-offset-border">
                            <span>VIEW ALL</span>
                            <span class="btn__arrow"></span>
                        </a>
                    </div>

                </div>

            </section>

            <section id="about" class="about section section--about">

                <div class="about__container section-container">

                    <div class="about__info-container">
                        <h2 class="section-ttl">ABOUT</h2>
                        <h3 data-i18n="about.subtitle">スキル・使用言語について</h3>
                        <div class="slider-track" id="sliderTrack">
                            <ul class="about__my-skills" id="about__my-skills">
                                <li class="about__my-skill">
                                    <img src="/img/about/icon_html.webp" alt="">
                                </li>
                                <li class="about__my-skill">
                                    <img src="/img/about/icon_css.webp" alt="">
                                </li>
                                <li class="about__my-skill">
                                    <img src="/img/about/icon_js.webp" alt="">
                                </li>
                                <li class="about__my-skill">
                                    <img src="/img/about/icon_php.webp" alt="">
                                </li>
                                <li class="about__my-skill">
                                    <img src="/img/about/icon_jq.webp" alt="">
                                </li>
                                <li class="about__my-skill">
                                    <img src="/img/about/icon_ps.webp" alt="">
                                </li>
                                <li class="about__my-skill">
                                    <img src="/img/about/icon_ai.webp" alt="">
                                </li>
                                <li class="about__my-skill">
                                    <img src="/img/about/icon_xd.webp" alt="">
                                </li>
                                <li class="about__my-skill">
                                    <img src="/img/about/icon_pr.webp" alt="">
                                </li>
                                <li class="about__my-skill">
                                    <img src="/img/about/icon_fg.webp" alt="">
                                </li>
                                <li class="about__my-skill">
                                    <img src="/img/about/icon_wordpress.webp" alt="">
                                </li>
                                <li class="about__my-skill">
                                    <img src="/img/about/icon_github.webp" alt="">
                                </li>
                                <li class="about__my-skill">
                                    <img src="/img/about/icon_gsap.webp" alt="">
                                </li>
                            </ul>
                        </div>
                        <p class="section-txt text-indent" data-i18n="about.description">企業の広告部でインハウスデザイナーとして約3年間勤務し、主に家政婦サービスや清掃サービス、訪問介護や医療関係のWebサイト制作・運用を担当してきました。また、SNS運用、コラムの執筆やチラシ、名刺やロゴ制作も経験し、加えてブランディングやマーケティング、SEOの知見も身につけました。2024年から独立し、これまでのサイト運用を続けつつ、フリーランスとして新規の制作依頼をお受けしています。</p>
                        <a href="mailto:contact@astrid.works" class="btn btn--with-offset-border btn__about btn__about--white">
                            <span>contact@astrid.works</span>
                            <span class="btn__arrow btn__arrow--red"></span>
                        </a>
                        <a href="/contact/index.php" class="btn btn--with-offset-border btn__about btn__about--red">
                            <span>フォームで問い合わせる</span>
                            <span class="btn__arrow"></span>
                        </a>

                    </div>

                    <div class="about__sns-container">

                        <div class="about__instagram-container">
                            <a href="https://www.instagram.com/astrid__murayama/" target="blank" class="about__instagram-ttl">Astrid__Murayama</a>
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/p/DFc4rUKy9ya/" target="blank">
                                        <div class="instagram-thumbnail">
                                            <img src="/img/about/instagram_thumbnail_1.webp" alt="">
                                        </div>
                                        <p class="instagram-txt"><span class="instagram-like"></span><span>4</span><span class="instagram-comment"></span><span>0</span></p>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/p/DEuqiDqTin7/" target="blank">
                                        <div class="instagram-thumbnail">
                                            <img src="/img/about/instagram_thumbnail_2.webp" alt="">
                                        </div>
                                        <p class="instagram-txt"><span class="instagram-like"></span><span>2</span><span class="instagram-comment"></span><span>0</span></p>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/p/DFSoR2AylOP/" target="blank">
                                        <div class="instagram-thumbnail">
                                            <img src="/img/about/instagram_thumbnail_3.webp" alt="">
                                        </div>
                                        <p class="instagram-txt"><span class="instagram-like"></span><span>3</span><span class="instagram-comment"></span><span>2</span></p>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/astrid__murayama/" target="blank">
                                        <div class="instagram-thumbnail">
                                            <img src="/img/about/instagram_thumbnail_4.webp" alt="">
                                        </div>
                                        <p class="instagram-txt"><span class="instagram-like"></span><span>8</span><span class="instagram-comment"></span><span>4</span></p>
                                    </a>
                                </li>
                                <!-- ５列の方が綺麗かも -->
                                <li>
                                    <a href="https://www.instagram.com/p/DEhm2o2SD2R/" target="blank">
                                        <div class="instagram-thumbnail">
                                            <img src="/img/about/instagram_thumbnail_5.webp" alt="">
                                        </div>
                                        <p class="instagram-txt"><span class="instagram-like"></span><span>3</span><span class="instagram-comment"></span><span>0</span></p>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/p/DE_RDzWyKdo/" target="blank">
                                        <div class="instagram-thumbnail">
                                            <img src="/img/about/instagram_thumbnail_6.webp" alt="">
                                        </div>
                                        <p class="instagram-txt"><span class="instagram-like"></span><span>6</span><span class="instagram-comment"></span><span>0</span></p>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="about__blog-container">
                            <ul id="column-lists"></ul>

                        <script>
                        fetch('https://astrid.works/column/wp-json/wp/v2/posts?per_page=3&_embed')
                        .then(response => response.json())
                        .then(posts => {
                            const list = document.getElementById('column-lists');

                            posts.forEach(post => {
                                const title = post.title.rendered;
                                const link = post.link;

                                // 記事本文を取得
                                const rawContent = post.content.rendered;

                                // HTMLタグを除去して純粋なテキストを取得
                                const tempDiv = document.createElement('div');
                                tempDiv.innerHTML = rawContent;
                                const plainText = (tempDiv.textContent || tempDiv.innerText || '').trim();

                                // 冒頭の30文字を切り取り、最後に「...」を追加
                                const excerpt = plainText.slice(0, 100) + '…';

                                const category = post._embedded['wp:term'][0][0].name;
                                const thumbnail = post._embedded['wp:featuredmedia']
                                    ? post._embedded['wp:featuredmedia'][0].source_url
                                    : '';

                                // 投稿日付を「2025.4.9」形式で変換
                                const rawDate = post.date;
                                const dateObj = new Date(rawDate);
                                const formattedDate = `${dateObj.getFullYear()}.${dateObj.getMonth() + 1}.${dateObj.getDate()}`;

                                const item = document.createElement('li');
                                item.innerHTML = `
                                    <a href="${link}" target="_blank">
                                        <div class="img-box">
                                            ${thumbnail ? `<img src="${thumbnail}" alt="">` : ''}
                                            <p class="column-txt-hide">Read more</p>
                                        </div>
                                        <div class="column-inner">
                                            <div class="time-and-category">
                                                <p>${formattedDate}</p>
                                                <p>${category}</p>
                                            </div>
                                            <h3>${title}</h3>
                                            <p class="column-txt text-indent">${excerpt}</p>
                                        </div>
                                    </a>
                                `;
                                list.appendChild(item);
                            });
                        });

                        </script>

                        </div>

                    </div>

                </div>

            </section>

            <!-- モーダルウィンドウ -->
            <?php include($webRoot . '/inc/modal.php'); ?>

        </main>
    </div>
</body>
