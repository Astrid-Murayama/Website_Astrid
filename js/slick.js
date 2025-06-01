$(document).ready(function () {
  $(".web__lists").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    prevArrow:
      '<div class="slide-arrow prev-arrow"><img src="/img/web/icon_arrow-white-left.png" alt=""></div>',
    nextArrow:
      '<div class="slide-arrow next-arrow"><img src="/img/web/icon_arrow-white-right.png" alt=""></div>',
    variableWidth: false,

    // ▼ 追加：レスポンシブ設定
    responsive: [
      {
        breakpoint: 768, // 768px以下で適用
        settings: {
          slidesToShow: 2, // 表示枚数を2に
        },
      },
    ],
  });
});
