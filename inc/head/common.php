<!-- 定義済みPHP関数の読み込み -->
<?php require_once($webRoot . '/inc/function/global.php'); ?>

<!-- メタデータの設定 -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- アクセシビリティスコアへの懸念から、maximum-scale=1.0を試験的にコメントアウト。情報入力時に不要な拡大が発生するため、フォームページでは追加することを検討中。 -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- スマホ時に上下に表示されるtheme-color -->
<!-- <meta name="theme-color" content="#808000" /> -->


<!-- faviconの設定 -->
<link rel="icon" href="/img/config/favicon/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="/img/config/favicon/android-chrome-512x512.png">

<!-- GSAP読み込み -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
<!-- ScrollTriggerの読み込み -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
<!-- jQuery読み込み -->
<!-- CDNから読み込んだファイルが改ざんされていないか検証するためのハッシュ値追加 -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- TODOハンバーガーメニューの閉じボタンでのみ使用。全アイコンを含むのでかなり重い。修正予定 -->
<!-- Font Awesomeの読み込み -->
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<!-- Googleフォントの読み込み -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">


<!-- JavaScriptの読み込み（自動キャッシュバスティング機能付き） -->
<!-- ハンバーガーメニューに関するjs -->
<script type="module" src="<?= cacheBust("/js/hamburger.js") ?>" defer></script>
<!-- モーダルウィンドウに関するjs -->
<script type="module" src="<?= cacheBust("/js/modal.js") ?>" defer></script>
<!-- 言語切り替えに関するjs -->
<script type="module" src="<?= cacheBust("/js/lang-switcher.js") ?>" defer></script>


<!-- 自作CSSの読み込み（自動キャッシュバスティング機能付き） -->
<link rel="stylesheet" type="text/css" href="<?= cacheBust("/css/style.min.css") ?>" />