const hamburger = document.querySelector(".header__hamburger-box");
const navContainer = document.querySelector(".header__nav-container");
const mask = document.querySelector(".header__mask");
const navItems = document.querySelectorAll(".header__nav-li1");

// ハンバーガークリック時のメニュー表示切り替え
hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("activated");
  navContainer.classList.toggle("activated");
  mask.classList.toggle("activated");
});

// マスククリックでメニューを閉じる
mask.addEventListener("click", () => {
  hamburger.classList.remove("activated");
  navContainer.classList.remove("activated");
  mask.classList.remove("activated");
});

// サブメニューの初期非表示とクリック時の表示切り替え
navItems.forEach((item) => {
  const subMenu = item.querySelector(".header__nav-ul2");

  if (subMenu) {
    item.addEventListener("click", (e) => {
      e.preventDefault(); // リンクのデフォルト動作を無効化
      subMenu.style.display =
        subMenu.style.display === "block" ? "none" : "block";
    });
  }
});

// $(document).ready(function () {
//   const bp = {
//     tabMaxWidth: 768, // タブレットの最大幅
//   };

//   $(".header__nav-li1 a").click(function (event) {
//     const wholeScreenWidth = window.innerWidth; // 画面幅を取得

//     if (wholeScreenWidth <= bp.tabMaxWidth) {
//       event.preventDefault(); // デフォルトのリンク動作を無効化
//       return false; // 必要なら追加
//     }
//   });
// });

$(".header__nav-ul1 li:first-child>a").click(function (event) {
  const wholeScreenWidth = getScreenWidthWithScrollbar();
  const bp = {
    tabMaxWidth: 768, // タブレットの最大幅
  };

  if (wholeScreenWidth <= bp.tabMaxWidth) {
    event.preventDefault(); // デフォルトのリンク動作を無効化
    return false;
  }
});

// ハンバーガーメニュー表示時（タブレット幅以下）に限り、子メニュー押下と同時にハンバーガーを解除。
$(".header__nav-ul1 li").click(function () {
  const wholeScreenWidth = getScreenWidthWithScrollbar();

  if (wholeScreenWidth <= bp.tabMaxWidth) {
    toggleHamburger();
  }
});
