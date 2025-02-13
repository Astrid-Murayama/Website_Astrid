<!-- ヘッダーセクション -->
<header class="header">
    

    <a href="/" class="header__logo-link">
        <img src="/img/common/logo/logo_astrid.svg" alt="">
    </a>

    <?php
    function is_current_page($path) {
        return strpos($_SERVER['REQUEST_URI'], $path) !== false;
    }
    ?>

    <nav class="header__nav-container">
        <ul class="header__nav-ul1">
            <li class="header__nav-li1 <?php if (is_current_page('/about-web/')) echo 'current'; ?>">                
                <a href="/about-web/index.php">Web制作について</a>

                <ul class="header__nav-ul2">
                    <li class="header__nav-li2 header__nav-li2--pc-none">
                        <a href="/about-web/index.php">Web制作TOP</a>
                    </li>
                    <li class="header__nav-li2">
                        <a href="/about-web/index.php#product-feature--web">Web制作の特徴</a>
                    </li>
                    <li class="header__nav-li2">
                        <a href="/about-web/index.php#product-service--web">サービスの種類</a>
                    </li>
                    <li class="header__nav-li2">
                        <a href="">制作実績</a>
                    </li>
                    <li class="header__nav-li2">
                        <a href="/about-web/index.php#product-flow--web">納品までの流れ</a>
                    </li>
                </ul>

            </li>
            <li class="header__nav-li1 <?php if (is_current_page('/about-flyer/')) echo 'current'; ?>">
                <a href="/about-flyer/index.php">フライヤー制作について</a>
                <ul class="header__nav-ul2">
                    <li class="header__nav-li2 header__nav-li2--pc-none">
                        <a href="/about-flyer/index.php">フライヤー制作TOP</a>
                    </li>
                    <li class="header__nav-li2">
                        <a href="/about-flyer/index.php#product-feature--flyer">フライヤー制作の特徴</a>
                    </li>
                    <li class="header__nav-li2">
                        <a href="/about-flyer/index.php#product-service--flyer">サービスの種類</a>
                    </li>
                    <li class="header__nav-li2">
                        <a href="">制作実績</a>
                    </li>
                    <li class="header__nav-li2">
                        <a href="/about-flyer/index.php#product-flow--flyer">納品までの流れ</a>
                    </li>
                </ul>

            </li>
            <li class="header__nav-li1 <?php if (is_current_page('/about-banner/')) echo 'current'; ?>">
                <a href="/about-banner/index.php">バナー制作について</a>
                <ul class="header__nav-ul2">
                    <li class="header__nav-li2 header__nav-li2--pc-none">
                        <a href="/about-banner/index.php">バナー制作TOP</a>
                    </li>
                    <li class="header__nav-li2">
                        <a href="/about-banner/index.php#product-feature--banner">バナー制作の特徴</a>
                    </li>
                    <li class="header__nav-li2">
                        <a href="/about-banner/index.php#product-service--banner">サービスの種類</a>
                    </li>
                    <li class="header__nav-li2">
                        <a href="">制作実績</a>
                    </li>
                    <li class="header__nav-li2">
                        <a href="/about-banner/index.php#product-flow--banner">納品までの流れ</a>
                    </li>
                </ul>

            </li>
            <li class="header__nav-li1 <?php if (is_current_page('/other/')) echo 'current'; ?>">
                <a href="/other/index.php">その他</a>
            </li>
            <li class="header__nav-li1 <?php if (is_current_page('/about-me/')) echo 'current'; ?>">
                <a href="/about-me/index.php">ABOUT ME</a>
            </li>
            <li class="header__nav-li1 btn__open-modal">
                <p>WORKS</p>
            </li>

        </ul>
    </nav>

    <a href="/contact/general/index.php" class="btn header__cta-btn">お問い合わせ</a>

    <div class="header__hamburger-box">
        <div class="header__hamburger-lines"></div>
    </div>

    <!-- TODO検証ツール使用のため -->
    <!-- <div class="header__mask"></div> -->

</header>
