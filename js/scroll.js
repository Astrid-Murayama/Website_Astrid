// window.addEventListener("scroll", function () {
//   const element = document.querySelector(".pf-body__txt-container"); // 要素のセレクタを指定
//   const rect = element.getBoundingClientRect();

//   // スクロール位置が要素に到達したときにtransformを適用
//   if (rect.top <= 0 && rect.bottom >= 0) {
//     element.classList.add("scrolled"); // 要素がスクロール位置に達したときにクラスを追加
//   } else {
//     element.classList.remove("scrolled"); // それ以外ではクラスを削除
//   }
// });

window.addEventListener("scroll", function () {
  const element = document.querySelector(".pf-body__txt-container");
  const rect = element.getBoundingClientRect();

  // rectの値をログに出力して確認
  console.log("rect.top:", rect.top, "rect.bottom:", rect.bottom);

  // スクロール位置が要素に到達したときにtransformを適用
  if (rect.top <= 0 && rect.bottom >= 0) {
    element.classList.add("scrolled");
  } else {
    element.classList.remove("scrolled");
  }
});
