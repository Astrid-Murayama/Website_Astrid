// $(function () {
//   $(".web-flow__accordion-btn").click(function () {
//     $(this).toggleClass("show");
//     $(this).next(".web-flow__accordion-content").slideToggle(); // アコーディオンコンテンツの表示/非表示を制御
//   });
// });

// $(function () {
//   $(".web-flow__accordion-btn").click(function () {
//     $(this).toggleClass("show");
//     $(this).next(".web-flow__accordion-content").slideToggle(); // アコーディオンコンテンツの開閉

//     // アイコン切り替え
//     const icon = $(this).find(".web-flow__icon");
//     icon.text(icon.text() === "+" ? "−" : "+");
//   });
// });
$(function () {
  $(".product-flow__accordion-btn").click(function () {
    // アコーディオンコンテンツの表示/非表示を制御
    $(this).next(".product-flow__accordion-content").slideToggle();

    // ボタン自体にクラスを切り替え
    $(this).toggleClass("show");

    // アイコンの変更処理
    const icon = $(this).find(".product-flow__icon");
    icon.text(icon.text() === "+" ? "−" : "+");
  });
});
